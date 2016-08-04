(function($){
  $(function(){
    //Inicializando Menu
    //$(".button-collapse").sideNav();
    $('.button-collapse').sideNav({
      menuWidth: 290, // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );


  });
})(jQuery);
