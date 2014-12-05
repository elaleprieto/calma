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
    '$http', '$location', '$scope', '$timeout', 'Producto', function($http, $location, $scope, $timeout, Producto) {
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
      $scope.search = function() {
        if ($.isNumeric(+$scope.query)) {
          return $scope.searchByBarCode(+$scope.query);
        } else {
          return $scope.searchByDetalle($scope.query);
        }
      };
      $scope.searchByBarCode = function(barCode) {
        return Producto.getByBarCode({
          barCode: barCode
        }, function(data) {
          if (data.length > 0) {
            if (!$scope.productos) {
              $scope.productos = [];
            }
            return $scope.productos = $scope.productos.concat(data);
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
      return $scope.venderTodos = function() {
        return angular.forEach($scope.productos, function(producto, index) {
          return $scope.vender(producto);
        });
      };
    }
  ]);

}).call(this);
