 $(document).ready(function(){
   $('.sidenav').sidenav();
   var instance = M.Materialbox.getInstance(elem);
 });

// Initialisation des modals
 $(document).ready(function(){
     $('.modal').modal();
   });
   $(document).ready(function(){
    $('select').formSelect();
  });
  $(document).ready(function(){
      $('.datepicker').datepicker();
    });
    var curr_lb_div;
    var is_modal = false;


$(document).ready(function(){
    $("a#show-panel").click(function(){
      $("#lightbox, #lightbox-panel").fadeIn(300);
    });
      $("a#close-panel").click(function(){
      $("#lightbox, #lightbox-panel").fadeOut(300);
    })
  });
