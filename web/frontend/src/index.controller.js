(function() {
  'use strict';

  angular
    .module('jwt')
    .controller('IndexController', IndexController);

  /** @ngInject */
  function IndexController($scope, $log, jwtRestangular, noTokenRestangular) {
      var vm = this;
      $log.info('Running Index controller');

      vm.test = function(){



          jwtRestangular.one('hello').one('world').get()
              .then(

              function(success){

              },
              function(error){

              }
          )


      };

      vm.test2 = function(){



          noTokenRestangular.one('hello').one('world').get()
              .then(

              function(success){

              },
              function(error){

              }
          )


      }



  }
})();
