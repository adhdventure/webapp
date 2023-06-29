<?php

/**
** TEMPLATE: MAINPAGE
**/



  $user = wp_get_current_user();
  $allowed_roles = array( 'administrator', 'um_students', 'um_teachers');
 if ( array_intersect( $allowed_roles, $user->roles ) ) {

if(!is_user_logged_in()) {
           wp_redirect( home_url( '/wp-login.php' ), 302 );
           exit();
           }
         else{





            if ( UM()->user()->get_role() == 'um_teachers' ) {

                $location = "https://www.adhdadventure.online/dashboard";
                wp_redirect( $location, $status = 302 );

            }




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
      <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">

    <title>ADventure</title>

    <style>
    /* Responsive Full Background Image Using CSS
     * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
    */
    body {
      /* Location of the image */
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Title-only-1.png);

      /* Image is centered vertically and horizontally at all times */
      background-position: center center;

      /* Image doesn't repeat */
      background-repeat: no-repeat;

      /* Makes the image fixed in the viewport so that it doesn't move when
         the content height is greater than the image height */
      background-attachment: fixed;

      /* This is what makes the background image rescale based on its container's size */
      background-size: cover;

      /* Pick a solid background color that will be displayed while the background image is loading */
      background-color:#464646;

      /* SHORTHAND CSS NOTATION
       * background: url(background-photo.jpg) center center cover no-repeat fixed;
       */


         display: flex;
         justify-content: center;

    }

    /* For mobile devices */
    @media only screen and (max-width: 767px) {
      body {
        /* The file size of this background image is 93% smaller
         * to improve page load speed on mobile internet connections */
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Title-only-1.png);
        margin-top:200px !important;


      }



    	}



      .btnrts{
          background-color:#ff9527;
          color:#ffff;
          font-size:2rem;
          text-align:center;
          margin-top:5%;
          width:300px;
          font-family: fantasy;
          border-radius: 12px 12px;
          border-bottom: 5px solid #ffe533;
          border-top:0;
          border-right:0;
          border-left:0;
      }


      button.navbar-toggler {

              color:#fff !important;
              font-family: fantasy !important;
              background-color:#ff9527 !important;
              border:0px;

        }
        button{
          font-family: 'Common Pixel', sans-serif !important;
    
        }
audio { display:none;}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>


<div  class="bg"></div>
<div class="divmobile" style="z-index: 99999;margin-top:20%; text-align:center;">

    <div class="container-fluid">

            <div style="display:grid;grid-template-columns; gap: 2%;">

                <div class="">

                  <button onclick="location.href='https://www.adhdadventure.online/instructional-guide/'" class="btnrts" type="button" name="button">
                      START
                  </button>
                </div>
                <div class="">
                  <button onclick="location.href='https://www.adhdadventure.online/leadership-boards/'" class="btnrts" type="button" name="button">
                    LEADERBOARDS
                  </button>
                </div>
                <div class="">
                  <button onclick="location.href='https://www.adhdadventure.online/audio-settings/'" class="btnrts" type="button" name="button">
                    SETTINGS
                  </button>
                </div>
                <div class="">
                  <form  method="post">


                    <button onclick="location.href='https://www.adhdadventure.online/exit-2/'" class="btnrts" type="button" name="bexits">
                      EXIT
                    </button>
                  </form>

                </div>
                  <br>
                  <br>

            </div>






    </div>
    <br>

    <audio src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Kevin-MacLeod-Pixelland-NO-COPYRIGHT-8-bit-Music.mp3" autoplay="true" loop="true" />


</div>


  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script>

  $('*').click(function(event) {



        const snd = new Audio('http://www.adhdadventure.online/wp-content/uploads/2023/04/Click-Sound-Effect.mp3')//wav is also supported
        snd.play()//plays the sound


      });



  </script>



  </body>
</html>

<?php

  if(isset($_POST['exits'])){

    $gexits = $_POST['exits'];



    if (wp_verify_nonce($_POST['form_nonce'],'adhd-nonce'))

          {


            $location = "https://www.adhdadventure.online/wp-login.php?action=logout";
            $redirects = wp_redirect($location, $status = 302 );



          }

  }

?>


<?php } //closing tag for login redirect
}else{

  $location = "https://www.adhdadventure.online/log-in/";
  $redirects = wp_redirect($location, $status = 302 );

}
 // closing tag for who are allowed roles


?>
