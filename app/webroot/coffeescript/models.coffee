angular.module('models', ['ngResource'])
	
	# Producto
	.factory('Producto', ['$resource', ($resource) ->
		$resource '/productos.json'
			, { callback:'JSON_CALLBACK' }
			, getByBarCode: {isArray: false, method: 'GET', url: '/productos/getByBarCode.json'}
				, getByDetalleOCodigoInterno: {isArray: false, method: 'GET', url: '/productos/getByDetalleOCodigoInterno.json'}
				, get: {cache: true, method: 'GET', url: '/productos.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'}
	])	
	# Reporte
	.factory('Reporte', ['$resource', ($resource) ->
		$resource '/productos.json'
			, { callback:'JSON_CALLBACK' }
			, getByBarCode: {isArray: true, method: 'GET', url: '/productos/getByBarCode.json'}
				, getByDetalleOCodigoInterno: {isArray: true, method: 'GET', url: '/productos/getByDetalleOCodigoInterno.json'}
				, get: {cache: true, method: 'GET', url: '/productos.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'}
	])
	
	# # Movimiento
	# .factory('Movimiento', ['$resource', ($resource) ->
	# 	$resource '/movimientos.json'
	# 		, { callback:'JSON_CALLBACK' }
	# 		# , save: {cache: true, method: 'POST', url: '/movimientos.json'}
	# ])
