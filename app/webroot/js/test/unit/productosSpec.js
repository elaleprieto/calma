(function() {
  'use strict';
  describe('Productos Controller Test', function() {
    var $scope, controller;
    $scope = controller = {};
    beforeEach(module('App'));
    beforeEach(function() {
      return jasmine.addMatchers({
        toEqualData: function() {
          return {
            compare: function(actual, expected) {
              var result;
              result = {};
              result.pass = angular.equals(actual, expected);
              return result;
            }
          };
        }
      });
    });
    beforeEach(inject(function($rootScope, $controller, _$httpBackend_, Producto) {
      this.producto = Producto;
      this.mockBackend = _$httpBackend_;
      $scope = $rootScope.$new();
      return controller = $controller('ProductosController', {
        $scope: $scope
      });
    }));
    it('debería resetear la query', function() {
      $scope.query = 'Tortuga';
      $scope.searchReset();
      return expect($scope.query).toEqualData('');
    });
    it('debería buscar por código de barra', function() {
      var result;
      result = [
        {
          "Producto": {
            "id": "5421e872-fb74-4f61-b5fc-310b55077360",
            "codigo": "300",
            "barra": "681131411493",
            "orden": "999999",
            "detalle": "Tortuga Ninja",
            "unidad": null,
            "precio_compra": "100",
            "precio_venta": "150",
            "foto": "nofoto",
            "created": "2014-09-23 18:38:58",
            "modified": "2014-11-24 20:12:50",
            "stock": "295",
            "porcentaje": "50",
            "stock_minimo": "10"
          }
        }
      ];
      this.mockBackend.expectGET('/productos/getByBarCode.json?barCode=681131411493&callback=JSON_CALLBACK\
').respond(result);
      $scope.query = '681131411493';
      $scope.search();
      this.mockBackend.flush();
      expect($scope.productos).toEqualData(result);
      return expect(+$scope.productos[0].Producto.codigo).toEqualData(300);
    });
    it('debería buscar por detalle', function() {
      var result;
      result = [
        {
          "Producto": {
            "id": "5421e872-fb74-4f61-b5fc-310b55077360",
            "codigo": "300",
            "barra": "681131411493",
            "orden": "999999",
            "detalle": "Tortuga Ninja",
            "unidad": null,
            "precio_compra": "100",
            "precio_venta": "150",
            "foto": "nofoto",
            "created": "2014-09-23 18:38:58",
            "modified": "2014-11-24 20:12:50",
            "stock": "295",
            "porcentaje": "50",
            "stock_minimo": "10"
          }
        }
      ];
      this.mockBackend.expectGET('/productos/getByDetalle.json?callback=JSON_CALLBACK&query=Tortuga').respond(result);
      $scope.query = 'Tortuga';
      $scope.search();
      this.mockBackend.flush();
      expect($scope.productos).toEqualData(result);
      return expect(+$scope.productos[0].Producto.codigo).toEqualData(300);
    });
    it('debería hacer la consulta para descontar el stock', function() {
      var producto, result;
      result = '';
      producto = {
        "Producto": {
          "id": "5421e872-fb74-4f61-b5fc-310b55077360",
          "codigo": "300",
          "barra": "681131411493",
          "orden": "999999",
          "detalle": "Tortuga Ninja",
          "unidad": null,
          "precio_compra": "100",
          "precio_venta": "150",
          "foto": "nofoto",
          "created": "2014-09-23 18:38:58",
          "modified": "2014-11-24 20:12:50",
          "stock": "295",
          "porcentaje": "50",
          "stock_minimo": "10",
          "cantidad": "5"
        }
      };
      this.mockBackend.expectPOST('/productos/vender.json?callback=JSON_CALLBACK', {
        "id": "5421e872-fb74-4f61-b5fc-310b55077360",
        "cantidad": "5"
      }).respond(result);
      $scope.query = 'Tortuga';
      $scope.vender(producto);
      return this.mockBackend.flush();
    });
    return it('no debería hacer la consulta para descontar el stock', function() {
      var producto, response, result;
      result = '';
      producto = {
        "Producto": {
          "id": "5421e872-fb74-4f61-b5fc-310b55077360",
          "codigo": "300",
          "barra": "681131411493",
          "orden": "999999",
          "detalle": "Tortuga Ninja",
          "unidad": null,
          "precio_compra": "100",
          "precio_venta": "150",
          "foto": "nofoto",
          "created": "2014-09-23 18:38:58",
          "modified": "2014-11-24 20:12:50",
          "stock": "295",
          "porcentaje": "50",
          "stock_minimo": "10",
          "cantidad": "A"
        }
      };
      $scope.query = 'Tortuga';
      response = $scope.vender(producto);
      return expect(response).toBe(false);
    });
  });

}).call(this);
