<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'include/script.php'; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jaya Catering and Event | Welcome</title>

    
  </head>

  <body>
    <div id="default">
    <div id="maincontentDefault">
      <img src="image/wel.png" alt=""/>
    </div>
  </div>

    <!-- Navigation -->
    <?php include_once('include/nav.php'); ?>

  <!-- End Navigation -->

    <header>
      <div id="carouselFade" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
          <li data-target="#carouselFade" data-slide-to="0" class="active"></li>
          <li data-target="#carouselFade" data-slide-to="1"></li>
          <li data-target="#carouselFade" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('./userfiles/slide/1.jpg')">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div> -->
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./userfiles/slide/2.jpg')">
           <!--  <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div> -->
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./userfiles/slide/3.jpg')">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div> -->
          </div>
        </div>
       <!--  <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>
    </header>

    <!-- Page Content -->
   <!--  <section class="py-5">
      <div class="container">
        <h1>Full Slider by Start Bootstrap</h1>
        <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the
          <code>full-slider.css</code>
          file.</p>
      </div>
    </section> -->

    <!-- Footer -->

    <?php include_once 'include/footer.php'; ?>


<script type='text/javascript'>
    $(document).ready(function() {
      $('#footer').hide();
      
      $('.bgstretcher').delay(5700).fadeIn(700);
      $("#maincontentDefault").delay(700).fadeIn(700);
      $("#default").delay(5000).fadeOut(700, function(){
        $(".table").addClass('animated fadeInDown');
        $('#footer').show();
      });
      //$(".table").delay(5700).fadeIn(700);

    });


(function($){
  $(document).ready(function(){
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault(); 
      event.stopPropagation(); 
      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open');
    });
  });
})(jQuery);

  </script>



  </body>

</html>
