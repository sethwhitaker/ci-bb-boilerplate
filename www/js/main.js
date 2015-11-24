'use strict';

  /**
    * RequireJS config and shim
    * @see http://requirejs.org/docs/api.html#config
    *
    * Also a good read to explain RequireJS dependency management
    * @link http://aaronhardy.com/javascript/javascript-architecture-requirejs-dependency-management/
      *
    */

requirejs.config({
  // enforceDefine to catch load failures in IE
  // @see http://requirejs.org/docs/api.html#ieloadfail
  // @see http://requirejs.org/docs/api.html#config-enforceDefine
  // See below for load require() | define() comment with this option
  //enforceDefine: true,

    // @see http://requirejs.org/docs/api.html#pathsfallbacks
  paths: {
    'jquery': 'libs/jquery.min',
    'backbone': 'libs/backbone.min',
    'underscore': 'libs/underscore.min',
    'bootstrap': 'libs/bootstrap.min',
    'text': 'libs/text',
    'templates': '../templates'
    // 'gv': 'views/game',
    // 'dv': 'views/dashboard',
    // 'uv': 'views/users'
  },

  // @see http://requirejs.org/docs/api.html#config-shim
  shim: {
    'jquery': {
      exports: '$'
    },
    'underscore': {
      exports: '_'
    },
    'backbone': {
      deps: ['jquery', 'underscore'],
      exports: 'Backbone'
    },
    'bootstrap':  ["jquery"]
  }
});


require( ['app'], function(App) {
  new App();
});
