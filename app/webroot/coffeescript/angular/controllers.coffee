App = angular.module('App', ['ngRoute'])


### ***************************************************************************
      Definición de variables
*************************************************************************** ###
# App.value '$strapConfig', datepicker: language: 'es'

### ***************************************************************************
      Tracks
*************************************************************************** ###
App.controller 'ProductosController', ($scope, $http, $timeout) ->

  $scope.calcularPrecioVenta = ->
    if +$scope.precioCompra > 0 and +$scope.porcentaje > 0
      $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100)

  # init = ->
  #
  # $timeout () ->
  #   init()
  # , 200
