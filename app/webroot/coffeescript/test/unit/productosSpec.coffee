'use strict'

describe 'Productos Controller Test', () ->
	$scope = controller = {}
	
	# you need to indicate your module in a test
	beforeEach(module('App'))

	beforeEach ->
		# jasmine.addMatchers({
		# 	toEqualData: (expected) ->
		# 		return angular.equals(this.actual, expected)
		# 		# return angular.equals(actual, expected)
		# })
		jasmine.addMatchers({
			toEqualData: ->
				compare: (actual, expected) ->
					result = {}
					result.pass = angular.equals(actual, expected)
					return result
		})
	
	# beforeEach(inject(function($rootScope, $controller, _$httpBackend_, Recipe) {
	beforeEach inject ($rootScope, $controller, _$httpBackend_, Producto) ->
		# recipe = Recipe;
		@producto = Producto
		@mockBackend = _$httpBackend_
		$scope = $rootScope.$new()
		controller = $controller('ProductosController', {
			$scope: $scope,
		})


	# it 'should have 5 controlados', () ->
	# 	result = [{"Articulo":{"id":535,"detalle":"LAPIZ DE WIDIA REAFILABLE BLISTER 12 UN.","stock":"0"}
	# 			,"Orden":{"cantidad":"0","created":"2013-08-08 07:51:01"},"Pedido":{"cliente_nombre":"FIORINI JORGE"}}
	# 		, {"Articulo":{"id":612,"detalle":"OJALES P\/CORTINAS PREREMACHADOS DORADOS 1\/2\" N\u00ba 31","stock":"0"}
	# 			,"Orden":{"cantidad":"0","created":"2013-08-08 07:51:01"},"Pedido":{"cliente_nombre":"FIORINI JORGE"}}
	# 		,{"Articulo":{"id":2106,"detalle":"RUEDAS PLASTICA REFORZADA CON BASE GIRATORIA A MUNICION 50 MMS","stock":"0"}
	# 			,"Orden":{"cantidad":"0","created":"2013-08-08 07:51:01"},"Pedido":{"cliente_nombre":"FIORINI JORGE"}}
	# 		,{"Articulo":{"id":2586,"detalle":"SOPORTES P\/VITRINAS\/ESTANTE MACIZO H\u00ba NIQ. 5 MMS ART. 2900","stock":"0"}
	# 			,"Orden":{"cantidad":"0.48","created":"2013-08-08 07:51:01"},"Pedido":{"cliente_nombre":"FIORINI JORGE"}}
	# 		,{"Articulo":{"id":807,"detalle":"SOPORTES P\/VITRINAS HIERRO BRONCEADO MACIZO ART. 3001","stock":"1"}
	# 			,"Orden":{"cantidad":"0.45","created":"2013-08-08 07:51:01"},"Pedido":{"cliente_nombre":"FIORINI JORGE"}}
	# 	]
	# 	@mockBackend.expectGET('/pedidos/get_faltantes?callback=JSON_CALLBACK').respond(result);
		
	# 	# $scope.ordenes = $scope.getFaltantes()
	# 	@mockBackend.flush()
		
	# 	# dump($scope.ordenes.length)
		
	# 	expect($scope.ordenes.length).toEqualData(5)

	it 'debería resetear la query', ->
		# Arrange
		$scope.query = 'Tortuga'
		
		# Act
		$scope.searchReset()
		
		# Assert
		expect($scope.query).toEqualData('')


	it 'debería buscar por código de barra', ->
		# Arrange
		result = [{"Producto":{"id":"5421e872-fb74-4f61-b5fc-310b55077360","codigo":"300","barra":"681131411493","orden":"999999","detalle":"Tortuga Ninja","unidad":null,"precio_compra":"100","precio_venta":"150","foto":"nofoto","created":"2014-09-23 18:38:58","modified":"2014-11-24 20:12:50","stock":"295","porcentaje":"50","stock_minimo":"10"}}]
		@mockBackend.expectGET('/productos/getByBarCode.json?barCode=681131411493&callback=JSON_CALLBACK
').respond(result);
		$scope.query = '681131411493'
		
		# Act
		$scope.search()
		@mockBackend.flush()
		
		# Assert
		expect($scope.productos).toEqualData(result)
		expect(+$scope.productos[0].Producto.codigo).toEqualData(300)

	it 'debería buscar por detalle', ->
			# Arrange
			result = [{"Producto":{"id":"5421e872-fb74-4f61-b5fc-310b55077360","codigo":"300","barra":"681131411493","orden":"999999","detalle":"Tortuga Ninja","unidad":null,"precio_compra":"100","precio_venta":"150","foto":"nofoto","created":"2014-09-23 18:38:58","modified":"2014-11-24 20:12:50","stock":"295","porcentaje":"50","stock_minimo":"10"}}]
			@mockBackend.expectGET('/productos/getByDetalle.json?callback=JSON_CALLBACK&query=Tortuga').respond(result);
			$scope.query = 'Tortuga'
			
			# Act
			$scope.search()
			@mockBackend.flush()
			
			# Assert
			expect($scope.productos).toEqualData(result)
			expect(+$scope.productos[0].Producto.codigo).toEqualData(300)

	it 'debería hacer la consulta para descontar el stock', ->
			# Arrange
			# result = [{"Producto":{"id":"5421e872-fb74-4f61-b5fc-310b55077360","codigo":"300","barra":"681131411493","orden":"999999","detalle":"Tortuga Ninja","unidad":null,"precio_compra":"100","precio_venta":"150","foto":"nofoto","created":"2014-09-23 18:38:58","modified":"2014-11-24 20:12:50","stock":"295","porcentaje":"50","stock_minimo":"10"}}]
			result = ''
			producto = {"Producto":{"id":"5421e872-fb74-4f61-b5fc-310b55077360","codigo":"300","barra":"681131411493","orden":"999999","detalle":"Tortuga Ninja","unidad":null,"precio_compra":"100","precio_venta":"150","foto":"nofoto","created":"2014-09-23 18:38:58","modified":"2014-11-24 20:12:50","stock":"295","porcentaje":"50","stock_minimo":"10", "cantidad":"5"}}
			@mockBackend.expectPOST('/productos/vender.json?callback=JSON_CALLBACK', {"id":"5421e872-fb74-4f61-b5fc-310b55077360", "cantidad":"5"}).respond(result);
			$scope.query = 'Tortuga'
			
			# Act
			$scope.vender(producto)
			@mockBackend.flush()
			
			# Assert
			# expect($scope.productos).toEqualData(result)
			# expect(+$scope.productos[0].Producto.codigo).toEqualData(300)
	
	it 'no debería hacer la consulta para descontar el stock', ->
			# Arrange
			# result = [{"Producto":{"id":"5421e872-fb74-4f61-b5fc-310b55077360","codigo":"300","barra":"681131411493","orden":"999999","detalle":"Tortuga Ninja","unidad":null,"precio_compra":"100","precio_venta":"150","foto":"nofoto","created":"2014-09-23 18:38:58","modified":"2014-11-24 20:12:50","stock":"295","porcentaje":"50","stock_minimo":"10"}}]
			result = ''
			producto = {"Producto":{"id":"5421e872-fb74-4f61-b5fc-310b55077360","codigo":"300","barra":"681131411493","orden":"999999","detalle":"Tortuga Ninja","unidad":null,"precio_compra":"100","precio_venta":"150","foto":"nofoto","created":"2014-09-23 18:38:58","modified":"2014-11-24 20:12:50","stock":"295","porcentaje":"50","stock_minimo":"10", "cantidad":"A"}}
			# @mockBackend.expectPOST('/productos/vender.json?callback=JSON_CALLBACK', {"id":"5421e872-fb74-4f61-b5fc-310b55077360", "cantidad":"A"}).respond(result);
			$scope.query = 'Tortuga'
			
			# Act
			response = $scope.vender(producto)
			# @mockBackend.flush()
			
			# Assert
			expect(response).toBe(false)
			# expect(+$scope.productos[0].Producto.codigo).toEqualData(300)

