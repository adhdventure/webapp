<?php

  /**
  ** TEMPLATE: "POPUP GUIDES";
  **/

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

    <title>ADventure</title>

    <style media="screen">


       /* Responsive Full Background Image Using CSS
        * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
       */
       body {
         /* Location of the image */
         background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-colored.png);

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
           background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-colored.png);
           margin-top:20px !important;


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

        <br>
        <br>
          <h2 style="text-align:center;color:#fff; background-color:#ffc107; width:65%; margin:0 auto">DIAGRAM</h2>

          <div class="row">
            <div class="col d-flex justify-content-center" style="margin-top:2%">
                  <?php

                    $gacontentssid = $wpdb->get_results(" SELECT * FROM all_phases_contents WHERE page ='DIAGRAM' AND  phase = 'PHASE 1' ");
                    foreach ($gacontentssid as $key => $valuffe) {

                        echo htmlspecialchars_decode(stripslashes($valuffe->content));
                    }




                    ?>
            </div>
        </div>


              <form  method="post">

                <input type="hidden" name="pagevisit" value="course_outline">
                <input type="hidden" name="studentid" value="<?php echo $current_user->user_login;?>">
                <br>
                <!-- <button  id="skipbtn" style="float:right; font-size:2rem; background-color:transparent; border: 0px solid transparent;"   type="submit" name="skipped">
                    <img src="http://www.adhdadventure.online/wp-content/uploads/2023/05/skip.png" alt="">
                </button> -->



                <button  id="nextbtn" style="float:right; display:none; font-size:2rem; background-color:transparent;border: 0px solid transparent;"   type="submit" name="nextpage">
                  <img src="http://www.adhdadventure.online/wp-content/uploads/2023/05/next.png" alt="">
                </button>

              </form>

    </div>

<br>
<br>

    <?php
     $curruser = $current_user->user_login;
      $avatar = $wpdb->get_results("SELECT * FROM `adhd_student_profile` WHERE userid = '$curruser' ");
      foreach ($avatar as $key => $imgvalue) {
           $displayimg = $imgvalue->avatar;
      }





    ?>

    <input type="hidden" id="displayimg" value="<?= $displayimg ?>">

    <!-- TO GET THE PAGE NAME HERE -->

    <?php


          global $template;
          // removing the predefined character

          $pagename = basename($template);
          $str = $pagename;
          $removdotphp =  trim($str, ".php");

    ?>

    <input type="hidden" id="templatepage" value="<?php echo  $removdotphp; ?>">

        <!-- TO GET THE PAGE NAME END HERE -->


    <br>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


   <script>


   function onloadfunct(){



     timer = true;
     stopWatch();

   }


 let hour = 00;
 let minute = 00;
 let second = 00;
 let count = 00;


 function stopWatch() {
 	if (timer) {
 		count++;

 		if (count == 100) {
 			second++;
 			count = 0;
 		}

 		if (second == 60) {
 			minute++;
 			second = 0;
 		}

 		if (minute == 60) {
 			hour++;
 			minute = 0;
 			second = 0;
 		}

 		let hrString = hour;
 		let minString = minute;
 		let secString = second;
 		let countString = count;

 		if (hour < 10) {
 			hrString = "0" + hrString;
 		}

 		if (minute < 10) {
 			minString = "0" + minString;
 		}

 		if (second < 10) {
 			secString = "0" + secString;
 		}

 		if (count < 10) {
 			countString = "0" + countString;
 		}




 		setTimeout(stopWatch, 10);

    if (minString > 0 ) {

      $("#skipbtn").css("display","none");
      $("#nextbtn").css("display","block");
    }

 	}
 }

   </script>


   <script type="text/javascript">
       var idleTime = 0;

           // Increment the idle time counter every minute.
           var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

           // Zero the idle timer on mouse movement.
           $(this).mousemove(function (e) {
               idleTime = 0;
           });
           $(this).keypress(function (e) {
               idleTime = 0;
           });

           console.log(idleTime);

       function timerIncrement() {
           idleTime = idleTime + 1;

           console.log(idleTime);

           if (idleTime > 0) { //  minutes

             let displayimg = $("#displayimg").val();

             Swal.fire({
               title: 'Oops! Are you still there?',
               imageUrl: displayimg,
               imageWidth: 200,
               imageHeight: 200,
               imageAlt: 'Avatar image',
               confirmButtonText: "Yes!",
             }).then(function(){

                idleTime = 0;


                    let templatepage = $("#templatepage").val();


                  $.post("https://www.adhdadventure.online/adhd-functions/", {

                        templatepage:templatepage


                      },  function(data,status){
                                window.location.href='#';
                      })



             });



           }

           if (idleTime > 2) {

             let timerInterval
              Swal.fire({
                title: 'We detect that you are idle, you are about to redirect now!',
                html: '<b></b> milliseconds.',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                  Swal.showLoading()
                  const b = Swal.getHtmlContainer().querySelector('b')
                  timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                  }, 100)
                },
                willClose: () => {
                  clearInterval(timerInterval)
                }
              }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {

                      window.location.href='https://www.adhdadventure.online/indx';
                }
              })


           }


       }



   </script>


   <?php

        if(isset($_POST['skipped'])){

            $guseid = $_POST['studentid'];
            $pagevisit = $_POST['pagevisit'];


          $gifpagevhassc = $wpdb->get_results("SELECT COUNT(*) AS recexist FROM adhd_learning_points_system WHERE userid ='$guseid' AND page_visit='$pagevisit'");
          foreach ($gifpagevhassc as $key => $fsgvalue) {
            $idkrecys = $fsgvalue->recexist;

              if(  $idkrecys > 0 ){

                //$location ="https://www.adhdadventure.online/phase-1-learning-style-main/";
                $location = "https://www.adhdadventure.online/phase-1-learning-style-main/";
                echo  wp_redirect( $location);

              }else{


              $guseid = $_POST['studentid'];
              $learningstyle = "sequential";
              $pagevisit = $_POST['pagevisit'];
              $points = 1;

                $inserttoscore = $wpdb->insert("adhd_learning_points_system",
                  array(
                    'userid' => $guseid,
                    'learning_style' => $learningstyle,
                    'page_visit' => $pagevisit,
                    'points' => $points
                  ));



                    //$location ="https://www.adhdadventure.online/phase-1-learning-style-main/";
                    $location = "https://www.adhdadventure.online/phase-1-learning-style-main/";
                    echo  wp_redirect( $location, $status = 302 );


              }
          }






        }

        if(isset($_POST['nextpage'])){

            $guseid = $_POST['studentid'];
            $pagevisit = $_POST['pagevisit'];

          $gifpagevhassc = $wpdb->get_results("SELECT COUNT(*) AS recexist FROM adhd_learning_points_system WHERE userid ='$guseid'  AND page_visit='$pagevisit'");
          foreach ($gifpagevhassc as $key => $fsgvalue) {
            $idkrecys = $fsgvalue->recexist;

              if(  $idkrecys > 0 ){

                $location ="https://www.adhdadventure.online/phase-1-learning-style-main/";
                echo  wp_redirect( $location);

              }else{


              $guseid = $_POST['studentid'];
              $learningstyle = "global";
              $pagevisit = $_POST['pagevisit'];
              $points = 1;

                $inserttoscore = $wpdb->insert("adhd_learning_points_system",
                  array(
                    'userid' => $guseid,
                    'learning_style' => $learningstyle,
                    'page_visit' => $pagevisit,
                    'points' => $points
                  ));



                    $location ="https://www.adhdadventure.online/phase-1-learning-style-main/";
                    echo wp_redirect( $location, $status = 302 );


              }
          }






        }

   ?>


  </body>
</html>
