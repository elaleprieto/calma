(function() {
  angular.module('models', ['ngResource']).factory('Producto', [
    '$resource', function($resource) {
      return $resource('/productos.json', {
        callback: 'JSON_CALLBACK'
      }, {
        getByBarCode: {
          isArray: false,
          method: 'GET',
          url: '/productos/getByBarCode.json'
        },
        getByDetalleOCodigoInterno: {
          isArray: false,
          method: 'GET',
          url: '/productos/getByDetalleOCodigoInterno.json'
        },
        get: {
          cache: true,
          method: 'GET',
          url: '/productos.json'
        },
        vender: {
          method: 'POST',
          url: '/productos/vender.json'
        }
      });
    }
  ]).factory('Reporte', [
    '$resource', function($resource) {
      return $resource('/productos.json', {
        callback: 'JSON_CALLBACK'
      }, {
        getByBarCode: {
          isArray: true,
          method: 'GET',
          url: '/productos/getByBarCode.json'
        },
        getByDetalleOCodigoInterno: {
          isArray: true,
          method: 'GET',
          url: '/productos/getByDetalleOCodigoInterno.json'
        },
        get: {
          cache: true,
          method: 'GET',
          url: '/productos.json'
        },
        vender: {
          method: 'POST',
          url: '/productos/vender.json'
        }
      });
    }
  ]);

}).call(this);
