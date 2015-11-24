define([
  'jquery',
  'underscore',
  'backbone',
  'module',
], function($, _, Backbone, module ){

  var BaseView = Backbone.View.extend({
    initialize: function () {
      var page = module.config().page;
      if(page === 'home'){
        console.log("HOME");

        $.ajax({
          url: '/api/get/',
          type: 'get',
          dataType: 'json',
          data: {id:1},
          success: function (data, textStatus, xhr) {
            console.log(data);
            console.log(textStatus);
            console.log(xhr);
            // Home.init(data);
          },
          error: function (xhr, textStatus, errorThrown) {
            console.log(xhr);
            console.log(textStatus);
            console.log(errorThrown);
          }
        });

      }
    }
  });

  return BaseView;

});