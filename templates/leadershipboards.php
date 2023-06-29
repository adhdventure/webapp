<?php

  /**
  ** TEMPLATE: "LEADERSHIP BOARD PAGE";
  **/

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">

    <title>ADventure</title>

    <style media="screen">


       /* Responsive Full Background Image Using CSS
        * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
       */
       body {
         /* Location of the image */
         background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/05/Background.png);

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
         /* background-color:#464646; */

         background-color:#FFFF;

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
           background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/05/Background.png);

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
        td, th{
          font-family: 'Common Pixel', sans-serif !important;
          text-align: center;
          color:#ffe637;
          text-shadow: 3px 3px #fe9323;

        }
        th{
          font-size: 3rem;
        }
        td{
          font-size: 2rem;

        }
        #tabls{
          width: 80% !important;
          margin: 0 auto;
          padding:10%;
          margin-top: 15%;

        }

        .imgbckbtn{
          position:absolute;
          margin-right: 90%;
          width: 5%;
          cursor:pointer;
        }
    </style>
  </head>
  <body onload="onloadfunct()">


      <img onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">


    <div class="container">
      <table id="tabls">
        <thead>

          <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Points</th>
          </tr>
        </thead>
        <tbody>
          <?php
              /**
              * DISPLAY ALL SCORING STUDENTS
              **/
              $totalscrrc = 0;
              $gstudnentsrecsa = $wpdb->get_results("SELECT student_id, student_answer,SUM(correct_ans) AS correctans FROM `post_test_student_scores`  GROUP BY student_id, correct_ans");

              foreach ($gstudnentsrecsa as $key => $vadsfalue) {

                $studntanswer = $vadsfalue->student_answer;
                $studentid = $vadsfalue->student_id;
                $correct_ans =  $vadsfalue->correctans;




                        if($studentid == 'teacher'){}else{



          ?>
          <tr>
            <td>

              <?php echo ++$avaluesc; ?>

            </td>
            <td>

              <?php
                    // DISPLAY THE FULLNAME OF THE USER
                  $gfullname = $wpdb->get_results("SELECT display_name FROM `wp_users` WHERE user_login ='$vadsfalue->student_id' ");
                  foreach ($gfullname as $key => $fvalue) {
                    echo $fvalue->display_name;
                  }
                ?>

            </td>
            <td>

              <?php echo $correct_ans; ?>

            </td>
          </tr>
        <?php

            }
            }

            ?>
        </tbody>
      </table>
          <br>
        <br>




    </div>



    <br>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





  </body>
</html>
