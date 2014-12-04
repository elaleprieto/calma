(function() {
  angular.module('models', ['ngResource']).factory('Producto', [
    '$resource', function($resource) {
      return $resource('/productos.json', {
        callback: 'JSON_CALLBACK'
      }, {
        getByBarCode: {
          isArray: true,
          method: 'GET',
          url: '/productos/getByBarCode.json'
        },
        getByDetalle: {
          isArray: true,
          method: 'GET',
          url: '/productos/getByDetalle.json'
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
