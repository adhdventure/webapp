<?php

/**
** TEMPLATE: MAINPAGE
**/



  /**
  ** TEMPLATE: "POPUP GUIDES";
  **/

  global $current_user;

  $current_users = $current_user->user_login;

  /**
  ** STUDENT TOP LEARNING STYLES
  **/

  $gdatamajor = $wpdb->get_results("SELECT SUM(points) AS studentscor, learning_style FROM `adhd_learning_points_system` WHERE userid ='$current_users' GROUP BY userid,learning_style ORDER BY studentscor DESC LIMIT 1,1");
  foreach ($gdatamajor as $key => $vasdflue) {

      $first = $vasdflue->learning_style;
      $countes = $vasdflue->studentscor;



        $inserdbs = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET  learning_style_path_2 ='$first' WHERE userid= '$current_users' "));

        $inserdbsa = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET  finish_phase ='PHASE 1' WHERE userid= '$current_users' "));





  }



    $gdatamajor = $wpdb->get_results("SELECT SUM(points) AS studentscor, learning_style FROM `adhd_learning_points_system` WHERE userid ='$current_users' GROUP BY userid,learning_style ORDER BY studentscor DESC LIMIT 2,1;");
    foreach ($gdatamajor as $key => $vasdflue) {

        $first = $vasdflue->learning_style;
        $countes = $vasdflue->studentscor;



          $inserdbs = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET learning_style_path_3 = '$first' WHERE userid= '$current_users' "));





    }



  /**
  ** STUDENT TOP LEARNING STYLES
  **/

  $gdatamajor = $wpdb->get_results("SELECT SUM(points) AS studentscor, learning_style FROM `adhd_learning_points_system` WHERE userid ='$current_users' GROUP BY userid,learning_style ORDER BY studentscor DESC  LIMIT 1");

  foreach ($gdatamajor as $key => $vasdflue) {

      $first = $vasdflue->learning_style;
      $countes = $vasdflue->studentscor;



        $inserdbs = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET learning_style_path_1 ='$first'  WHERE userid= '$current_users' "));




  }




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
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background.png);

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
    }

    /* For mobile devices */
    @media only screen and (max-width: 90px) {
      body {
        /* The file size of this background image is 93% smaller
         * to improve page load speed on mobile internet connections */


      }

      .divbg{
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background.png);
        background-size: 100% 100% !important;
        overflow-x: scroll !important;

        background-attachment: scroll !important;
        position: absolute;
         top: 0;
         left: 50%;

         background-size: 100% 100%;
         width: 100%;
         height: 100%;
         z-index: -2;
      }

      .ttable{

          width:100% !important;
          margin:0 auto;
          margin-top:20% !important;
      }

    	}



      .ttable{

          width:55%;
          margin:0 auto;
          margin-top:5%;
          padding:5%;


      }

      td {
      padding:10%;
      border:5px solid #fff;
      width:50%;
      cursor:pointer;
    }

    td:hover{
      font-size: 1.2rem;
      z-index: 9999 !important;
      font-weight: bolder;
      font-family: fantasy;
    }

    .img1{
      position:absolute;
      margin-top: 30%;
      margin-left: 10%;
      width: 5%;
      cursor:pointer;

    }

    .img2{
      position:absolute;
      margin-top: 12%;
      margin-left: 32%;
      width: 5%;
      cursor:pointer;

    }
    .img3{
      position:absolute;
      margin-top: 35%;
      margin-left: 52%;
      width: 5%;
      cursor:pointer;

    }

    .img4{
      position:absolute;
      margin-top: 5%;
      margin-left: 70%;
      width: 5%;
        cursor:pointer;

    }

    .img5{
      position:absolute;
      margin-top: 25%;
      margin-left: 80%;
      width: 5%;
        cursor:pointer;

    }


    .imgbckbtn{
      position:absolute;
      margin-left: 2%;
      width: 5%;
      cursor:pointer;
    }

    .badges{

      position:absolute;
      margin-left: 10%;
      width: 20%;
      margin-top: -2%;

    }

    .imgmenu{
      position:absolute;
      margin-left: 90%;
      width: 5%;
      cursor:pointer;
    }

    button{
      border:0px;
    }

</style>

  </head>
  <body>

<div  class="divbg"></div>


    <img onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
    <img onclick="location.href='https://www.adhdadventure.online/audio-settings/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">



      <?php

          $gphasesfinis = $wpdb->get_results("SELECT * FROM `adhd_student_profile` WHERE userid = '$current_user->user_login'");

          foreach ($gphasesfinis as $key => $vadalue) {

              // if( $vadalue->finish_phase == '' || $vadalue->finish_phase == NULL ){
              //     echo "<img src='http://www.adhdadventure.online/wp-content/uploads/2023/05/25_.png' class='badges'>";
              // }elseif ($vadalue->finish_phase == 'PHASE 2' ) {
              //       echo "<img src='http://www.adhdadventure.online/wp-content/uploads/2023/05/50_.png' class='badges'>";
              // }elseif ($vadalue->finish_phase == 'PHASE 3' ) {
              //       echo "<img src='http://www.adhdadventure.online/wp-content/uploads/2023/05/75_.png' class='badges'>";
              // }elseif ($vadalue->finish_phase == 'PHASE 4' ) {
              //       echo "<img src='http://www.adhdadventure.online/wp-content/uploads/2023/05/100_.png' class='badges'>";
              // }elseif ($vadalue->finish_phase == 'PHASE 5' ) {
              //       echo "<img src='http://www.adhdadventure.online/wp-content/uploads/2023/05/100_.png' class='badges'>";
              // }

          }



      ?>


        <button onclick="location.href='https://www.adhdadventure.online/guide/'"  type="button" name="button" style="background-color:transparent; border: 0px solid tranparent">
          <img  class="img1" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Level-icon.png" >

        </button>


        <?php

        /**
        ** GET THE TOP 1 LEARNING TYLE
        **/
        global $current_user;

        $current_users = $current_user->user_login;

        $gtop1laearn = $wpdb->get_results("SELECT * FROM `adhd_student_profile` WHERE userid ='$current_users'  ");
        foreach ($gtop1laearn as $key => $sdfvalaue) {

            $finishphase = $sdfvalaue->finish_phase;

            if($finishphase == 'PHASE 1'){
                  ?>
                  <button  onclick="location.href='https://www.adhdadventure.online/phase-1-refresher/'"  type="button" name="button" style="background-color:transparent; border: 0px solid tranparent">
                    <img  class="img2" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Level-icon.png" >

                  </button>

                  <button  onclick="location.href='https://www.adhdadventure.online/phase-2-refresher/'"  type="button" name="button" style="background-color:transparent; border: 0px solid tranparent">
                <img  class="img3" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Level-icon.png" >


                <button onclick="location.href='https://www.adhdadventure.online/phase-3-refresher/'"  type="button" name="button" style="background-color:transparent; border: 0px solid tranparent">
                  <img  class="img4" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Level-icon.png" >

                </button>



                        <button onclick="location.href='https://www.adhdadventure.online/phase-4-refresher/'"  type="button" name="button" style="background-color:transparent; border: 0px solid tranparent">
                          <img  class="img5" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Level-icon.png" >

                        </button>

      <?php


          }

            ?>
            <!-- <button <?php if($finishphase == 'PHASE 2'){  }else{echo "disabled";} ?>  onclick="location.href='https://www.adhdadventure.online/phase-2-guide/'"  type="button" name="button" style="background-color:transparent; border: 0px solid tranparent">
              <img  class="img2" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Level-icon.png" >

            </button> -->





        <?php




        }
        ?>

        </button>



   <audio src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Kevin-MacLeod-Pixelland-NO-COPYRIGHT-8-bit-Music.mp3" autoplay="true" loop="true" />

  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>

    $( "#fourdimensions tbody" ).on( "click", "td", function() {

          let dimensionids = $( this ).attr('id');

          if(dimensionids === 'pdimension'){

            window.location.href="https://www.adhdadventure.online/process-dimension/";

          }else if (dimensionids === 'indimension') {

              window.location.href="https://www.adhdadventure.online/input-dimension/";

          }else if (dimensionids === 'percdimension') {

              window.location.href="https://www.adhdadventure.online/perception-dimension/";

          }else if (dimensionids === 'undimension') {

            window.location.href="https://www.adhdadventure.online/understanding-dimension/";

          }



        console.log( dimensionids );
        });
    </script>




    <script>

    $('*').click(function(event) {



          const snd = new Audio('http://www.adhdadventure.online/wp-content/uploads/2023/04/Click-Sound-Effect.mp3')//wav is also supported
          snd.play()//plays the sound


        });



    </script>

  </body>
</html>
