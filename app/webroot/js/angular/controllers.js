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
      $scope.calcularPrecioTotal = function(producto) {
        return producto.precio_total = producto.precio_venta * producto.cantidad;
      };
      $scope.calcularPrecioVenta = function() {
        if (+$scope.precioCompra > 0 && +$scope.porcentaje > 0) {
          return $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100);
        }
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
          return $scope.productos = data;
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
      return $scope.vender = function(producto) {
        return Producto.vender({
          id: producto.Producto.id,
          cantidad: producto.Producto.cantidad
        }, function(data) {
          return console.log(data);
        });
      };
    }
  ]);

}).call(this);
