
//list-grid-clients  
$(document).ready(function(){
    $('.list-button').click(function(){
       $('.flip-card').removeClass('col-xl-2 col-lg-2');
       $('.flip-card').addClass('col-xl-6 col-lg-6');
  
       $('.img-fluid').removeClass('img-grid');
       $('.img-fluid').addClass('img-list'); 
    });
    $('.grid-button').click(function(){
      $('.flip-card').removeClass('col-xl-6 col-lg-6');
      $('.flip-card').addClass('col-xl-2 col-lg-2');  
  
      $('.img-fluid').removeClass('img-list');
      $('.img-fluid').addClass('img-grid');
    });
  });
  
  //active
  $('.btn-group button').on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
  })
  
  //navbar sticky & scrolled
  $(function () { 
    $(document).scroll(function () {
         var $nav = $("#navbarproj");
          $nav.toggleClass('scrolled1', $(this).scrollTop() > $nav.height()); 
        });
    });
  
    window.onscroll = function() {myFunction()}; 
    var navbar = document.getElementById("navbarproj");
    var sticky = navbar.offsetTop;
    
  function myFunction() { 
        if (window.pageYOffset >= sticky) {
           navbar.classList.add("sticky1") 
          } 
        else { navbar.classList.remove("sticky1");
     }};
  