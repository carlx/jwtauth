(function() {
  'use strict';

  angular
    .module('jwt')
    .controller('LoginController', LoginController);

  /** @ngInject */
  function LoginController($log, Restangular, $sessionStorage, $window) {
    var vm = this;
    $log.info('Running Login controller');

      vm.credentials = {
          username: 'user',
          password: 'user'
      };

    vm.errorMessage = '';

    vm.submit = function(){
        Restangular.all('logins').all('checks').post(vm.credentials)
            .then(
            function(success){
                $sessionStorage.token = success.data.token;
                $window.location.href = 'index.html';
            },
            function(error){

                if(error.status === 401) {
                    vm.errorMessage = 'Niepoprawna nazwa użytkownika lub hasło.';
                }else{
                    vm.errorMessage = 'Nieokreślony błąd.';
                }

            }
        )
    }

  }
})();
