(function() {
  var App;

  App = angular.module('App', ['ngRoute', 'models', 'ui.keypress']);

  /* ***************************************************************************
        Definición de variables
  ***************************************************************************
  */


  /* ***************************************************************************
        Tracks
  ***************************************************************************
  */


  App.controller('ProductosController', [
    '$http', '$location', '$scope', '$timeout', '$window', 'Producto', function($http, $location, $scope, $timeout, $window, Producto) {
      var barcodeAux, lastBarcodeAux;
      $scope.calcularTotal = function() {
        var total;
        total = 0;
        angular.forEach($scope.productos, function(producto, index) {
          if (producto.Producto.cantidad) {
            return total += producto.Producto.precio_venta * producto.Producto.cantidad;
          }
        });
        return $scope.total = total;
      };
      $scope.calcularPrecioTotal = function(producto) {
        producto.precio_total = producto.precio_venta * producto.cantidad;
        return $scope.calcularTotal();
      };
      $scope.calcularPrecioVenta = function() {
        if (+$scope.precioCompra > 0 && +$scope.porcentaje > 0) {
          return $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100);
        }
      };
      $scope.eliminarDeLista = function(index) {
        return $scope.productos.splice(index);
      };
      $scope.readKeyPressed = function(event) {
        return console.log(event);
      };
      $scope.search = function() {
        if ($.isNumeric(+$scope.query)) {
          $scope.searchByBarCode(+$scope.query);
          return $scope.query = '';
        } else {
          return $scope.searchByDetalle($scope.query);
        }
      };
      $scope.searchByBarCode = function(barCode) {
        return Producto.getByBarCode({
          barCode: barCode
        }, function(data) {
          if (data.length > 0) {
            angular.forEach(data, function(producto, index) {
              producto.Producto.cantidad = 1;
              return producto.Producto.precio_total = producto.Producto.precio_venta * producto.Producto.cantidad;
            });
            if (!$scope.productos) {
              $scope.productos = [];
            }
            $scope.productos = $scope.productos.concat(data);
            return $scope.calcularTotal();
          }
        });
      };
      $scope.searchByDetalle = function(query) {
        return Producto.getByDetalle({
          query: query
        }, function(data) {
          return $scope.productos = data;
        });
      };
      $scope.searchReset = function(input) {
        $scope.query = '';
        $('#' + input).focus();
        return this;
      };
      $scope.vender = function(producto) {
        if (!$.isNumeric(producto.Producto.cantidad)) {
          return false;
        }
        return Producto.vender({
          id: producto.Producto.id,
          cantidad: producto.Producto.cantidad
        }, function(data) {
          return producto.Producto.cantidad = '';
        }, function(error) {
          return console.log(error.data.message);
        });
      };
      $scope.venderTodos = function() {
        return angular.forEach($scope.productos, function(producto, index) {
          return $scope.vender(producto);
        });
      };
      barcodeAux = [];
      lastBarcodeAux = Date.now();
      return angular.element($window).on('keypress', function(e) {
        if (e.which >= 48 && e.which <= 57) {
          if (Date.now() - lastBarcodeAux >= 20) {
            barcodeAux = [];
          }
          barcodeAux.push(String.fromCharCode(e.which));
          return lastBarcodeAux = Date.now();
        } else if (e.which === 13) {
          $scope.searchByBarCode(barcodeAux.join('').substr(-13));
          return barcodeAux = [];
        }
      });
    }
  ]);

}).call(this);
