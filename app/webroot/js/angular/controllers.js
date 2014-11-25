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
      $scope.calcularPrecioVenta = function() {
        if (+$scope.precioCompra > 0 && +$scope.porcentaje > 0) {
          return $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100);
        }
      };
      $scope.search = function() {
        return Producto.getByBarCode({
          barCode: $scope.query
        }, function(data) {
          return $scope.productos = data;
        });
      };
      return $scope.searchReset = function(input) {
        $scope.query = '';
        $('#' + input).focus();
        return this;
      };
    }
  ]);

}).call(this);
