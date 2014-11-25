angular.module('models', ['ngResource'])
	
	# Producto
	.factory('Producto', ['$resource', ($resource) ->
		$resource '/productos.json'
			, { callback:'JSON_CALLBACK' }
			, getByBarCode: {isArray: true, method: 'GET', url: '/productos/getByBarCode.json'}
				, get: {cache: true, method: 'GET', url: '/productos.json'}
	])
