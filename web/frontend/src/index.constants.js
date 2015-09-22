/* global malarkey:false, toastr:false, moment:false */
(function() {
  'use strict';

  angular
    .module('jwt')
      .constant('appConfig',
      {
          'apiBaseUrl': 'http://api.jwtauth.dev/api/v1',
          'apiAuth':  'http://api.jwtauth.dev/api/auth'
      }
  )

})();
