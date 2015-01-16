App = angular.module('App', ['ngRoute', 'models', 'ui.keypress'])


### ***************************************************************************
      Definición de variables
*************************************************************************** ###
# App.value '$strapConfig', datepicker: language: 'es'

### ***************************************************************************
      Tracks
*************************************************************************** ###
App.controller 'ProductosController'
  , ['$http', '$location', '$scope', '$timeout', '$window', 'Producto'
    , ($http, $location, $scope, $timeout, $window, Producto) ->

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

  $scope.readKeyPressed = (event)->
    console.log event

  $scope.search = ->
    if $.isNumeric(+$scope.query)
      $scope.searchByBarCode(+$scope.query)
      $scope.query = ''
    else
      $scope.searchByDetalle($scope.query)
  
  $scope.searchByBarCode = (barCode) ->
      Producto.getByBarCode {barCode: barCode}
        , (data) ->
          if data.length > 0
            angular.forEach data, (producto, index) ->
              producto.Producto.cantidad = 1
              producto.Producto.precio_total = producto.Producto.precio_venta * producto.Producto.cantidad
            if !$scope.productos then $scope.productos = []
            $scope.productos = $scope.productos.concat(data)
            $scope.calcularTotal()

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


  barcodeAux = []
  lastBarcodeAux = Date.now()
  angular.element($window).on 'keypress', (e) ->
    # Si es un número, lo agrego al barcodeAux
    if e.which >= 48 and e.which <= 57 
      # Si el tiempo en milisegundos es mayor a 20, blanqueo la variable lastBarcodeAux antes de agregar el número.
      # Esto es así porque lo más rápido que puede apretar un tecla el usuario, parece que es 30 milisegundos, manteniendo la tecla apretada.
      # El lector lee a 8 milisegundos.
      if Date.now() - lastBarcodeAux >= 20 then barcodeAux = []
      barcodeAux.push(String.fromCharCode(e.which))
      lastBarcodeAux = Date.now()
    # Si es un enter, tomo los últimos 13 números agregados (EAN13) y busco por BarCode
    else if e.which is 13 
      $scope.searchByBarCode(barcodeAux.join('').substr(-13))
      barcodeAux = []

    # console.log e.which + ":" + barcodeAux.join("|")

]