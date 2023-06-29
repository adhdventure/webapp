<?php

  /**
  ** TEMPLATE: "POPUP GUIDES";
  **/

  $current_users = $current_user->user_login;

  $inserdbsa = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET  finish_phase ='PHASE 5' WHERE userid= '$current_users' "));



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="https://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal@4/minimal.css" rel="stylesheet">

    <title>ADventure</title>

    <style media="screen">


       /* Responsive Full Background Image Using CSS
        * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
       */
       body {
         /* Location of the image */
         background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/342689588_3444097102528235_9016740607293659767_n.png);

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
           background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/342689588_3444097102528235_9016740607293659767_n.png);
           margin-top:200px !important;


         }
         .mobiles{
           margin-top:-5%
         }



        }

        .imgbckbtn{
          position:absolute;
          margin-left: 2%;
          width: 5%;
          cursor:pointer;
        }

        .imgmenu{
          position:absolute;
          margin-left: 80%;
          width: 5%;
          cursor:pointer;
        }



    </style>
  </head>
  <body onload="onloadfunct()">



    <div class="container">
      <img onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
      <img onclick="location.href='https://www.adhdadventure.online/indx/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">
        <br>
        <br>
        <div class="row">




    </div>

    <?php
     $curruser = $current_user->user_login;
      $avatar = $wpdb->get_results("SELECT * FROM `adhd_student_profile` WHERE userid = '$curruser' ");
      foreach ($avatar as $key => $imgvalue) {
           $displayimg = $imgvalue->avatar;
      }



    ?>
    <br>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>

    $('*').click(function(event) {
        if (this === event.target) {

           // only fire this handler on the original element
            window.location.href="https://www.adhdadventure.online/begin/";


        }



        });



    </script>








  </body>
</html>
