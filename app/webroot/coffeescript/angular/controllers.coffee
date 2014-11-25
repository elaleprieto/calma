App = angular.module('App', ['ngRoute', 'models', 'ui.keypress'])


### ***************************************************************************
      Definición de variables
*************************************************************************** ###
# App.value '$strapConfig', datepicker: language: 'es'

### ***************************************************************************
      Tracks
*************************************************************************** ###
App.controller 'ProductosController'
  , ['$http', '$location', '$scope', '$timeout', 'Producto'
    , ($http, $location, $scope, $timeout, Producto) ->

  $scope.calcularPrecioVenta = ->
    if +$scope.precioCompra > 0 and +$scope.porcentaje > 0
      $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100)

  $scope.search = ->
    Producto.getByBarCode {barCode: $scope.query}
      , (data) ->
        $scope.productos = data

  $scope.searchReset = (input) ->
    $scope.query = ''
    $('#'+input).focus()
    @

  # init = ->
  #
  # $timeout () ->
  #   init()
  # , 200

]