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

  $scope.calcularTotal = ->
    total = 0
    angular.forEach $scope.productos, (producto, index) ->
      if producto.Producto.cantidad then total += producto.Producto.precio_venta * producto.Producto.cantidad
    $scope.total = total

  $scope.calcularPrecioTotal = (producto) ->
    producto.precio_total = producto.precio_venta * producto.cantidad
    $scope.calcularTotal()

  $scope.calcularPrecioVenta = ->
    if +$scope.precioCompra > 0 and +$scope.porcentaje > 0
      $scope.precioVenta = +$scope.precioCompra * (1 + +$scope.porcentaje / 100)

  $scope.eliminarDeLista = (index) ->
    $scope.productos.splice(index)

  $scope.search = ->
    if $.isNumeric(+$scope.query)
      $scope.searchByBarCode(+$scope.query)
    else
      $scope.searchByDetalle($scope.query)
  
  $scope.searchByBarCode = (barCode) ->
      Producto.getByBarCode {barCode: barCode}
        , (data) ->
          if data.length > 0 
            if !$scope.productos then $scope.productos = []
            $scope.productos = $scope.productos.concat(data)

  $scope.searchByDetalle = (query) ->
      Producto.getByDetalle {query: query}
        , (data) ->
          $scope.productos = data

  $scope.searchReset = (input) ->
    $scope.query = ''
    $('#'+input).focus()
    @

  $scope.vender = (producto) ->
    if not $.isNumeric producto.Producto.cantidad then return false
    Producto.vender {id:producto.Producto.id, cantidad:producto.Producto.cantidad}
      , (data) ->
        producto.Producto.cantidad = ''
      , (error) ->
        console.log error.data.message

  $scope.venderTodos = ->
    angular.forEach $scope.productos, (producto, index) ->
      $scope.vender(producto)

  # init = ->
  #
  # $timeout () ->
  #   init()
  # , 200

]