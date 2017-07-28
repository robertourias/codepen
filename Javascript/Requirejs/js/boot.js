;(function( undefined ) {
  'use strict';
  require.config({
    baseUrl: './js',
    paths: {
      jquery: [
        'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min',
        'vendor/jquery-3.2.1.min'
      ],
      lodash: 'vendor/lodash.min'
    }
  });

  require([ 'jquery', 'lodash' ], function( $, _ ) {      
    require([ 'App' ]);
  });
})();
