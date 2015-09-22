(function() {
  'use strict';

  angular
    .module('jwt')
    .config(config);

  /** @ngInject */
  function config($logProvider, RestangularProvider, appConfig) {

      $logProvider.debugEnabled(true);
      RestangularProvider.setBaseUrl(appConfig.apiAuth);
      RestangularProvider.setFullResponse(true);

  }



})();
