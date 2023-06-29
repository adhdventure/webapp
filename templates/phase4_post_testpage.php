<?php

  /**
  ** TEMPLATE: "POPUP GUIDES";
  **/

  global $current_user;


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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>ADventure</title>

    <style media="screen">


       /* Responsive Full Background Image Using CSS
        * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
       */
       body {
         /* Location of the image */
         background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-only.png);

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
           background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-only.png);
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
      <img onclick="location.href='https://www.adhdadventure.online/audio-settings/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">
        <br>
        <br>
        <div class="row">
        <div class="col d-flex justify-content-center" style="margin-top:2%">


            <?php

              global $current_user;

             $curruser = $current_user->user_login;



              $avatar = $wpdb->get_results("SELECT * FROM `adhd_student_profile` WHERE userid = '$curruser' ");

              foreach ($avatar as $key => $imgvalue) {
                   $currentavatr = $imgvalue->avatar;
              }



            ?>

            <table>
              <tr>
                <td>

                  <img style="width:50%; " src="<?php echo $currentavatr; ?>" alt="">

                </td>
                <td>
                  <img style="width:50%;"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/opponent-2.png" alt="">

                </td>

              </tr>
            </table>






          <br>
          <br>


        </div>


      </div>
      <img style="width:20%;margin-left:12%" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/left-platform.png" alt="">
      <img style="width:20%; margin-left:18%" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/left-platform.png" alt="">


      <div class="container text-center" >
      <div class="row" >
        <div class="col">
            <img src="http://www.adhdadventure.online/wp-content/uploads/2023/04/question-panel.png" style="width:100%" alt="">

              <h1 style="margin-top:-35%; text-align:center; text-transform: uppercase">

                  <?php

                  /**
                  ** DISPLAY QUESTIONS POST TEST HERE
                  **/

                  $currenuser = $current_user->user_login;

                  $gstudentqz = $wpdb->get_results("SELECT quiz_number FROM post_test_student_scores WHERE student_id ='$currenuser'  ");
                  foreach ($gstudentqz as $key => $inscrvalue) {

                      $currnscores = $inscrvalue->quiz_number;
                  }

                  $affvalue = $currnscores + 1;






                  $dpostphase2 = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE phase_number='PHASE 4' AND quiz_number = '$affvalue' ");
                  foreach ($dpostphase2 as $key => $vsdfalue) {

                        echo  $vsdfalue->question;

                        $lettera = $vsdfalue->letter_a;
                        $letterb = $vsdfalue->letter_b;
                        $letterc = $vsdfalue->letter_c;
                        $letterd = $vsdfalue->letter_d;

                       $usaccount = $current_user->user_login;

                  ?>

              </h1>

        </div>
        <div class="col align-middle">
          <br>  <br> <br>
          <table style="margin:0 auto;">
            <form  method="post">


            <tr>
             <td  >
                <input type="hidden" id="usaccount" value="<?php echo  $usaccount;?>">

               <button onclick="btn1('<?php echo $lettera ?>')"  style="font-size: 2rem;width:auto" type="button" name="button1" class="btn btn-success" ><?php echo $lettera ?> </button>

             </td>
             <td > <button  onclick="btn2('<?php echo $letterb ?>')" style="font-size: 2rem;width:auto" type="button" name="button2" class="btn btn-info" ><?php echo $letterb ?></button></td>
           </tr>
           <tr>
                  <td >   <button onclick="btn3('<?php echo $letterc ?>')" style="font-size: 2rem;width:auto" type="button" name="button3" class="btn btn-warning"><?php echo $letterc ?></button></td>
                  <td >  <button onclick="btn4('<?php echo $letterd ?>')" style="font-size: 2rem;width:auto" type="button" name="button4" class="btn btn-danger" ><?php echo $letterd ?></button></td>
            </tr>

              </form>

              <?php
                }


              ?>

            <tr>
              <td colspan="2">


                <form  method="post">

                    <input type="hidden" name="pagevisit" value="phase1_powerpoint">
                     <input type="hidden" name="studentid" value="<?php echo $current_user->user_login;?>">
                     <br>
                     <!-- <button  id="skipbtn" style="float:right; font-size:2rem; background-color:transparent; border: 0px solid transparent;"   type="submit" name="skipped">
                         <img src="http://www.adhdadventure.online/wp-content/uploads/2023/05/skip.png" alt="">
                     </button> -->

                  <button  id="nextbtn" style="float:right; border-radius: 25px 25px; font-size:2rem; display:none;"  class="btn btn-primary" type="submit" name="nextpage">
                      NEXT
                  </button>

                </form>

              </td>
            </tr>
          </table>

          <br>


        </div>

      </div>

      </div>








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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


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


           function timerIncrement() {
               idleTime = idleTime + 1;
               if (idleTime > 5) { //  minutes

                 let displayimg = $("#displayimg").val();

                 Swal.fire({
                   title: 'Oops! Are you still there?',
                   imageUrl: displayimg,
                   imageWidth: 200,
                   imageHeight: 200,
                   imageAlt: 'Avatar image',
                   confirmButtonText: "Yes!",
                  })
               }
           }
       </script>
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

    function btn1(correctsans){


      Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes!'
      }).then((result) => {
      if (result.isConfirmed) {


        let currenuser = $("#usaccount").val();
        let phasetwo = correctsans;

          $.post("https://www.adhdadventure.online/adhd-functions/", {

              phasetwo:phasetwo


            },  function(data,status){

              //STATUS WHEN THE PROCESS IS NOT ERROR

                      const gdatas = JSON.parse(data);

                        console.log(gdatas);

                        if(gdatas > 0 || gdatas > '0'){

                          Swal.fire(
                            'Great!',
                            'Your answer is correct.',
                            'success'
                          ).then(function(){

                            window.location.href='https://www.adhdadventure.online/phase-1-post-test-correct/';

                          })

                        }else {
                          Swal.fire(
                            'Error!',
                            'Your answer is not correct.',
                            'error'
                          ).then(function(){

                            window.location.href='https://www.adhdadventure.online/phase-1-post-test-review/';

                          })
                        }




                  });


      }
      })
    }
    function btn2(correctsans){

            Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
            }).then((result) => {
            if (result.isConfirmed) {


              let currenuser = $("#usaccount").val();
              let phasetwo = correctsans;

                $.post("https://www.adhdadventure.online/adhd-functions/", {

                    phasetwo:phasetwo


                  },  function(data,status){

                    //STATUS WHEN THE PROCESS IS NOT ERROR

                            const gdatas = JSON.parse(data);

                              console.log(gdatas);

                              if(gdatas > 0 || gdatas > '0'){

                                Swal.fire(
                                  'Great!',
                                  'Your answer is correct.',
                                  'success'
                                ).then(function(){

                                  window.location.href='https://www.adhdadventure.online/phase-1-post-test-correct/';

                                })

                              }else {
                                Swal.fire(
                                  'Error!',
                                  'Your answer is not correct.',
                                  'error'
                                ).then(function(){

                                  window.location.href='https://www.adhdadventure.online/phase-1-post-test-review/';

                                })
                              }




                        });


            }
            })
    }
    function btn3(phasetwo){


            Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
            }).then((result) => {
            if (result.isConfirmed) {


              let currenuser = $("#usaccount").val();
              let phasetwo = correctsans;

                $.post("https://www.adhdadventure.online/adhd-functions/", {

                    phasetwo:phasetwo


                  },  function(data,status){

                    //STATUS WHEN THE PROCESS IS NOT ERROR

                            const gdatas = JSON.parse(data);

                              console.log(gdatas);

                              if(gdatas > 0 || gdatas > '0'){

                                Swal.fire(
                                  'Great!',
                                  'Your answer is correct.',
                                  'success'
                                ).then(function(){

                                  window.location.href='https://www.adhdadventure.online/phase-1-post-test-correct/';

                                })

                              }else {
                                Swal.fire(
                                  'Error!',
                                  'Your answer is not correct.',
                                  'error'
                                ).then(function(){

                                  window.location.href='https://www.adhdadventure.online/phase-1-post-test-review/';

                                })
                              }




                        });


            }
            })
    }
    function btn4(correctsans){


            Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
            }).then((result) => {
            if (result.isConfirmed) {


              let currenuser = $("#usaccount").val();
              let phasetwo = correctsans;

                $.post("https://www.adhdadventure.online/adhd-functions/", {

                    phasetwo:phasetwo


                  },  function(data,status){

                    //STATUS WHEN THE PROCESS IS NOT ERROR

                            const gdatas = JSON.parse(data);

                              console.log(gdatas);

                              if(gdatas > 0 || gdatas > '0'){

                                Swal.fire(
                                  'Great!',
                                  'Your answer is correct.',
                                  'success'
                                ).then(function(){

                                  window.location.href='https://www.adhdadventure.online/phase-1-post-test-correct/';

                                })

                              }else {
                                Swal.fire(
                                  'Error!',
                                  'Your answer is not correct.',
                                  'error'
                                ).then(function(){

                                  window.location.href='https://www.adhdadventure.online/phase-1-post-test-review/';

                                })
                              }




                        });


            }
            })
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
                  echo  wp_redirect( $location);


              }
          }






        }

        if(isset($_POST['nextpage'])){

          $guseid = $_POST['studentid'];
          $pagevisit = $_POST['pagevisit'];

          $gifpagevhassc = $wpdb->get_results("SELECT COUNT(*) AS recexist FROM adhd_learning_points_system WHERE userid ='$guseid' AND page_visit='$pagevisit'");
          foreach ($gifpagevhassc as $key => $fsgvalue) {
            $idkrecys = $fsgvalue->recexist;

              if(  $idkrecys > 0 ){

                $location ="https://www.adhdadventure.online/phase-1-learning-style-main/";
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



                    $location ="https://www.adhdadventure.online/phase-1-learning-style-main/";
                    echo wp_redirect( $location, $status = 302 );


              }
          }






        }

   ?>



   <?php


     /**
     ** CHECK IF THE STUDENT ALREADY GET MORE THAN 4 ANSWERS
     **/

     $gstudnentsrecs = $wpdb->get_results("SELECT COUNT(phase_number) AS phase_number FROM `post_test_student_scores`WHERE phase_number ='PHASE 2' AND student_id ='$current_user->user_login'");
     foreach ($gstudnentsrecs as $key => $vdsfalue) {
         $gikdsfd = $vdsfalue->phase_number;

         if($gikdsfd > 4 ){

                   $totalscrrc = 0;
                   $gstudnentsrecsa = $wpdb->get_results("SELECT * FROM `post_test_student_scores`WHERE phase_number ='PHASE 2' AND student_id ='$current_user->user_login'");
                   foreach ($gstudnentsrecsa as $key => $vadsfalue) {

                     $studntanswer = $vadsfalue->student_answer;
                     $studentid = $vadsfalue->student_id;

                       $gosttestcorrcansw = $wpdb->get_results("SELECT * FROM `post_test_answer`  ");
                       foreach ($gosttestcorrcansw as $key => $valafue) {

                               $correctans = $valafue->correct_answer;

                               if($studntanswer == $correctans){

                                 $countnumbercrrs = ++$countnumbercrrst;

                                 $updtepotest = $wpdb->query($wpdb->prepare("UPDATE post_test_student_scores SET total_correct = '$countnumbercrrs' "));


                               }elseif ($studntanswer != $correctans) {

                                   $countnumbercrrs = ++$countnumbercrrst;

                               }



                       }





                   }





                   /**
                   ** GET TOTAL CORRECT ANSWER
                   **/

                   $wpgcrrctasnwer = $wpdb->get_results("SELECT * FROM `post_test_student_scores` WHERE student_id = '$current_user->user_login' ");
                   foreach ($wpgcrrctasnwer as $key => $vaffalue) {

                         $gtotalcorrecs = $vaffalue->total_correct;

                         if($gtotalcorrecs > 2 ){


                                                echo "<script>
                                                       Swal.fire({
                                                       title: 'Congratulations!, You have earned a badge!',
                                                       width: 600,
                                                       padding: '3em',
                                                       color: '#ff9528',
                                                       imageUrl: 'http://www.adhdadventure.online/wp-content/uploads/2023/05/Badge.png',
                                                       imageWidth: 200,
                                                       imageHeight: 200,
                                                       background: '#fff',
                                                       confirmButtonText: 'Continue',

                                                     }).then(function(){
                                                         window.location.href='https://www.adhdadventure.online/phase-1-post-test-correct/';
                                                     })
                                                      </script>";

                         }elseif ($gtotalcorrecs < 3 ){


                           /**
                           ** REMOVE ALL POST TEST PHASE 1 QUIZES
                           **/

                           $delspl = $wpdb->query($wpdb->prepare("DELETE FROM post_test_student_scores WHERE student_id ='$current_user->user_login' "));

                         echo "<script>
                                Swal.fire({
                                title: 'Sorry!, You not earned a badge!',
                                width: 600,
                                padding: '3em',
                                color: '#ff9528',
                                imageUrl: 'http://www.adhdadventure.online/wp-content/uploads/2023/05/Badge.png',
                                imageWidth: 200,
                                imageHeight: 200,
                                background: '#fff',
                                confirmButtonText: 'Continue',

                              }).then(function(){
                                  window.location.href='https://www.adhdadventure.online/development-page/';
                              })
                               </script>";


                         }

                   }







         }


     }
?>

  </body>
</html>
