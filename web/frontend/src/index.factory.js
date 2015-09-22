(function() {
    'use strict';
    angular.module('jwt')
        .factory('jwtRestangular', jwtRestangular)
        .factory('noTokenRestangular', noTokenRestangular);

    /** @ngInject */
    function jwtRestangular(Restangular, $sessionStorage, appConfig, $window) {
        return Restangular.withConfig(function(RestangularConfigurer) {
            RestangularConfigurer.setBaseUrl(appConfig.apiBaseUrl);
            RestangularConfigurer.setFullResponse(true);
            RestangularConfigurer.setDefaultHeaders({Authorization: 'Bearer ' + $sessionStorage.token});
            RestangularConfigurer.setErrorInterceptor(
                function ( response ) {
                    if ( response.status == 401 ) {
                        alert('Unauthorized - Error 401', 'Musisz się zalogować aby przeglądać zawartość.');
                        $window.location.href = 'login.html';
                    }
                    else {
                        return response;
                    }
                    // Stop the promise chain.
                    return false;
                }
            );

        });
    }

    /** @ngInject */
    function noTokenRestangular(Restangular, $sessionStorage, appConfig, $window) {
        return Restangular.withConfig(function(RestangularConfigurer) {
            RestangularConfigurer.setBaseUrl(appConfig.apiBaseUrl);
            RestangularConfigurer.setFullResponse(true);
            RestangularConfigurer.setErrorInterceptor(
                function ( response ) {
                    if ( response.status == 401 ) {
                        alert('Unauthorized - Error 401', 'Musisz się zalogować aby przeglądać zawartość.');
                        $window.location.href = 'login.html';
                    }
                    else {
                        return response;
                    }
                    // Stop the promise chain.
                    return false;
                }
            );

        });
    }

})();