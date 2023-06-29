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
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ADventure</title>
    <link rel="icon" type="image/x-icon" href="https://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">

    <style media="screen">


       /* Responsive Full Background Image Using CSS
        * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
       */
       body {
         /* Location of the image */
         background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-1.png);

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
           background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-1.png);
           margin-top:200px !important;


         }
         .mobiles{
           margin-top:-5%
         }



        }

        .imgbckbtn{
          position:absolute;
          margin-left: -2%;
          width: 5%;
          cursor:pointer;
        }

        .imgmenu{
          position:absolute;
          margin-left: 80%;
          width: 5%;
          cursor:pointer;
        }

        .img1{
          width:15%;
          margin-top:20%;
          cursor:pointer;

        }
        .img2{
          width:15%;
          margin-top:20%;
          cursor:pointer;
        }

        .img3{
          width:15%;
          margin-top:20%;
          cursor:pointer;
        }

        .grid1{
          width:250px;
          height:150px;
          background-color:#fef4ab;
          padding:2%;
          text-align: center;
          vertical-align: middle;
          cursor:pointer;
        }

        .box {
        display: flex;
        flex-wrap: wrap;
        height: 400px;
        align-content: space-between;
        width:100%;
        margin:0 auto;
        gap:2%;
        margin-top:15%;

      }

    </style>
  </head>
  <body >



    <div class="container">
      <img class="imgbckbtn" onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
        <br>
        <br>
        <br>
          <br>
        <div class="row">
        <div class="col d-flex justify-content-center" style="margin-top:2%">
          <div class="box d-flex justify-content-center">

              <?php

                /**
                ** GET THE TOP 1 LEARNING TYLE
                **/
                global $current_user;

                $current_users = $current_user->user_login;

                $gtop1learn = $wpdb->get_results("SELECT * FROM `adhd_student_profile` WHERE userid ='$current_users'  ");
                foreach ($gtop1learn as $key => $sdfvalue) {

                  $glearninfp = $sdfvalue->learning_style_path_1;

                      if($glearninfp  == "active"){

                          ?>

                          <div onclick="exams1()" class="grid1">
                            <h2>EXAMPLE</h2>
                          </div>
                          <div  onclick="exams2()" class="grid1">
                            <h2>EXPERIMENT</h2>
                          </div>

                  <?php

                }elseif ($glearninfp  == "reflective") {

                  ?>

                  <div  onclick="exams3()"class="grid1">
                    <h2>DIAGRAM</h2>
                  </div>

                  <div onclick="exams1()" class="grid1">
                    <h2>EXAMPLE</h2>
                  </div>


              <?php


            }elseif ($glearninfp  == "visual") {


                  ?>

                  <div  onclick="exams2()" class="grid1">
                    <h2>EXPERIMENT</h2>
                  </div>

                  <div  onclick="exams3()"class="grid1">
                    <h2>DIAGRAM</h2>
                  </div>
              <?php




                  ?>

                  <?php


                }elseif ($glearninfp  == "verbal") {


                      ?>
                      <div  onclick="exams2()" class="grid1">
                        <h2>EXPERIMENT</h2>
                      </div>
                      <div onclick="exams1()" class="grid1">
                        <h2>EXAMPLE</h2>
                      </div>





                      <?php


                    }elseif ($glearninfp  == "sensitive") {


                          ?>

                          <div  onclick="exams2()" class="grid1">
                            <h2>EXPERIMENT</h2>
                          </div>



                          <?php


                          }elseif ($glearninfp  == "intuitive") {


                              ?>
                              <div onclick="exams1()" class="grid1">
                                <h2>EXAMPLE</h2>
                              </div>


                              <div   onclick="exams4()" class="grid1">
                                <h2> CONCEPT MAP</h2>
                              </div>



                              <?php


                            }elseif ($glearninfp  == "sequential") {


                                  ?>
                                  <div  onclick="exams2()" class="grid1">
                                    <h2>EXPERIMENT</h2>
                                  </div>
                                  <div   onclick="exams4()" class="grid1">
                                    <h2> CONCEPT MAP</h2>
                                  </div>


                                  <?php


                                } elseif ($glearninfp  == "global") {


                                      ?>

                                      <div onclick="exams1()" class="grid1">
                                        <h2>EXAMPLE</h2>
                                      </div>
                                      <div  onclick="exams3()"class="grid1">
                                        <h2>DIAGRAM</h2>
                                      </div>



                                  <?php
                                      }

                                    }



                                      ?>









          </div>


          </div>

        </div>


        <br>  <br>  <br>

    </div>



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


    <script type="text/javascript">


        function exams1(){

              window.location.href='https://www.adhdadventure.online/phase-5-examples/';
        }
        function exams2(){

              window.location.href='https://www.adhdadventure.online/phase-5-experiment/';
        }
        function exams3(){

              window.location.href='https://www.adhdadventure.online/phase-5-diagram/';
        }
        function exams4(){

              window.location.href='https://www.adhdadventure.online/phase-5-concept-map/';
        }




    </script>

       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
  </body>
</html>
