angular.module('models', ['ngResource'])
	
	# Producto
	.factory('Producto', ['$resource', ($resource) ->
		$resource '/productos.json'
			, { callback:'JSON_CALLBACK' }
			, getByBarCode: {isArray: true, method: 'GET', url: '/productos/getByBarCode.json'}
				, getByDetalle: {isArray: true, method: 'GET', url: '/productos/getByDetalle.json'}
				, get: {cache: true, method: 'GET', url: '/productos.json'}
				, vender: {method: 'POST', url: '/productos/vender.json'}
	])
	
	# # Movimiento
	# .factory('Movimiento', ['$resource', ($resource) ->
	# 	$resource '/movimientos.json'
	# 		, { callback:'JSON_CALLBACK' }
	# 		# , save: {cache: true, method: 'POST', url: '/movimientos.json'}
	# ])
