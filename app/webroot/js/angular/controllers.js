(function() {
  var App;

  App = angular.module('App', ['ngRoute']);

  /* ***************************************************************************
        Definición de variables
  ***************************************************************************
  */


  /* ***************************************************************************
        Tracks
  ***************************************************************************
  */


  App.controller('ProductosController', function($scope, $http, $timeout) {
    return $scope.calcularPrecioVenta = function() {
      if (+$scope.precioCompra > 0 && +$scope.porcentaje > 0) {
        return $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100);
      }
    };
  });

}).call(this);
