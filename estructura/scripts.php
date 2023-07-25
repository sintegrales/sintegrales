<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="js/funciones.js"></script>
<!-- boton arriba -->
<!-- <script src="js/jquery-latest.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script>
    $(document).ready(function(){

      $('.irarriba').click(function(){
        $('body, html').animate({
          scrollTop: '0px'
        }, 300);
      });

      $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
          $('.irarriba').slideDown(300);
        } else {
          $('.irarriba').slideUp(300);
        }
      });

    });
  </script>