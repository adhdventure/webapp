<?php

/**
** TEMPLATE: LOGIN PAGE
**/



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADventure</title>
      <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
    <style>
    /* Responsive Full Background Image Using CSS
     * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
    */
    body {
      /* Location of the image */
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Log-In-only-1.png);

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
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Log-In-only-Copy-1.png);
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

        .imgbckbtn{
          position:absolute;
          margin-right: 90% !important;
          width: 5%;
          margin-top: 1%;
          cursor:pointer;
        }

        .imgmenu{
          position:absolute;
          margin-left: 90%;
          width: 5%;
          cursor:pointer;
            margin-top: 1%;
        }

        .imgsubmt{

        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>


    <img onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
    <img onclick="location.href='https://www.adhdadventure.online/indx/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">

<div  class="bg"></div>
<div class="divmobile" style="z-index: 99999;margin-top:25%; text-align:center;">

    <div class="container-fluid">



            <form  method="post">


            <div style="display:grid;grid-template-columns; gap: 10%;">

                <div class="">
                <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder;  box-shadow: 5px 5px #ff910e;" type="text" name="log" placeholder="Username">
                </div>

                <div class="">
                  <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder; box-shadow: 5px 5px #ff910e;" type="password" name="pwd" placeholder="Password">
                </div>

                <br>
                <div class="">
                  <button  style="width:50%" type="submit" name="loginsaa" class="btn btn-success">
                    log in
                  </button>


                </div>
                <div class="">
                      <span style="color:#ffff; font-weight:bolder;font-family: fantasy;    text-shadow: 2px 2px gray; ">don't have an account?</span><span style="text-decoration:none !important; "> <a style="text-decoration:none; font-family:fantasy; color:#fee52b;font-weight:bolder; text-shadow: 2px 2px orange;" href="https://www.adhdadventure.online/sign-up/">Sign Up</a></span>
                </div>
                  </form>
                  <br>
                  <br>

            </div>





        </div>
    </div>





</div>


  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script>

  $('*').click(function(event) {


        const snd = new Audio('http://www.adhdadventure.online/wp-content/uploads/2023/04/Click-Sound-Effect.mp3')//wav is also supported
        snd.play()//plays the sound


      });



  </script>

    <?php

      if(isset($_POST['loginsaa'])){


        global $wpdb;

       $err = '';
       $success = '';


      //We shall SQL escape all inputs to avoid sql injection.
      $username = $wpdb->escape($_POST['log']);
      $password = $wpdb->escape($_POST['pwd']);
      $remember = $wpdb->escape($_POST['remember']);


      if( $username == "" || $password == "" ) {

       $err = 'Please don\'t leave the required field.';
      } else {
       $user_data = array();
       $user_data['user_login'] = $username;
       $user_data['user_password'] = $password;
       $user_data['remember'] = $remember;
       $user = wp_signon( $user_data, false );

       if ( is_wp_error($user) ) {
        $err = $user->get_error_message();
        exit();
       } else {
        wp_set_current_user( $user->ID, $username );
        do_action('set_current_user');

         $location = "https://www.adhdadventure.online/indx/";
         wp_redirect( $location, $status = 302 );

       }
      }


      }


    ?>


  </body>
</html>
