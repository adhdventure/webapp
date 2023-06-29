<?php

/**
** TEMPLATE: MAINPAGE
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
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Sign-Up-only.png);

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
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Sign-Up-only-768.jpg);
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

        img{
          width:10%;


        }


        .img1 {

          cursor: pointer;

        }
        .img2{

            cursor: pointer;


        }
         .img3{

             cursor: pointer;

        }
        .img4{

            cursor: pointer;

        }

        .img1:hover{
           width: 20%;
        }
        .img2:hover{
           width: 20%;
        }
        .img3:hover{
           width: 20%;
        }
        .img4:hover{
           width: 20%;
        }


      #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 80% !important;
        min-width: 400px;
      }
              /* Mark input boxes that gets an error on validation: */
        input.invalid {
          background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
          display: none;
        }

        button {
          background-color: #04AA6D;
          color: #ffffff;
          border: none;
          padding: 10px 20px;
          font-size: 17px;
          font-family: Raleway;
          cursor: pointer;
        }

        button:hover {
          opacity: 0.8;
        }

        #prevBtn {
          background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbbbbb;
          border: none;
          border-radius: 50%;
          display: inline-block;
          opacity: 0.5;
        }

        .step.active {
          opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
          background-color: #04AA6D;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>



  </head>
  <body>


      <img onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
      <img onclick="location.href='https://www.adhdadventure.online/indx/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">




<div  class="bg"></div>


<div class="divmobile" style="z-index: 99999;margin-top:2%; text-align:center;margin-bottom:5%;">



    <div class="container-fluid">






          <form id="regForm"  method="post">
            <h1>Sign Up:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">Personal Information:
              <p class="">
              <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder;  box-shadow: 5px 5px #ff910e;" type="text" name="usernames" placeholder="Username">
            </p>
              <p class="">
                <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder;  box-shadow: 5px 5px #ff910e;" type="text" name="age" placeholder="Age">
              </p>
              <p class="">
                <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder;  box-shadow: 5px 5px #ff910e;" type="text" name="gender" placeholder="Gender">
              </p>
              <p class="">
                <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder;  box-shadow: 5px 5px #ff910e;" type="password" name="password" placeholder="Password">
              </p>
              <p class="">
                <input style="border-radius:10px; background-color: #ffe637; color:black; font-weight:bolder;  box-shadow: 5px 5px #ff910e;" type="password" name="repassword" placeholder="Repeat Password">
              </p>

              <p>
                <div style="margin-bottom: 2%;">
                  <span style="color:#ffff; font-weight:bolder;font-family: fantasy; margin-bottom: 2%;  text-shadow: 2px 2px gray; ">already have an account?</span><span style="text-decoration:none !important; "> <a style="text-decoration:none; font-family:fantasy; color:#fee52b;font-weight:bolder; text-shadow: 2px 2px orange;" href="https://www.adhdadventure.online/log-in/">log in</a></span>

                </div>
              </p>

            </div>

            <div class="tab">Choose Avatar:
              <div style="display:grid; grid-template-columns: auto auto auto auto; gap:1%; width:70% important">

                <p>
                <img onclick="geimglink1()" class="img1" src="https://www.adhdadventure.online/wp-content/uploads/2023/04/player-1.png" alt="">
                <img onclick="geimglink2()" class="img2" src="https://www.adhdadventure.online/wp-content/uploads/2023/04/player-2.png" alt="">
                <img onclick="geimglink3()"class="img3" src="https://www.adhdadventure.online/wp-content/uploads/2023/04/player-3.png" alt="">
                <img onclick="geimglink4()" class="img4" src="https://www.adhdadventure.online/wp-content/uploads/2023/04/player-4.png" alt="">
                </p>

                <input type="hidden" id="gimagevals" name="gimagevals">
              </div>
              <br>
            </div>
            <div style="overflow:auto;">
              <div style="display:grid;grid-templates-columns: auto auto auto; gap:1%;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)" >Next</button>
                <button type="submit" id="submitBtn" name="addnewusr" style="display:none">Submit Form</button>
              </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>

            </div>
          </form>


        </div>





          <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

        <script type="text/javascript">

          function geimglink1(){




          $("#gimagevals").val("");

          let gvaslf = $(".img1").attr("src");

              $("#gimagevals").val(gvaslf);

              alert("Good Job! you choose your Avatar");


          }

          function geimglink2(){

            $("#gimagevals").val("");

          let gvaslf = $(".img2").attr("src");

              $("#gimagevals").val(gvaslf);

              alert("Good Job! you choose your Avatar");

          }

          function geimglink3(){

          $("#gimagevals").val("");

          let gvaslf = $(".img3").attr("src");

              $("#gimagevals").val(gvaslf);

              alert("Good Job! you choose your Avatar");

          }

          function geimglink4(){

            $("#gimagevals").val("");

          let gvaslf = $(".img4").attr("src");

              $("#gimagevals").val(gvaslf);

              alert("Good Job! you choose your Avatar");

          }

        </script>



                  <script>
                  var currentTab = 0; // Current tab is set to be the first tab (0)
                  showTab(currentTab); // Display the current tab

                  function showTab(n) {
                    // This function will display the specified tab of the form...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    //... and fix the Previous/Next buttons:
                    if (n == 0) {
                      document.getElementById("prevBtn").style.display = "none";
                    } else {
                      document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                      // document.getElementById("nextBtn").innerHTML = "Submit";
                      document.getElementById("submitBtn").innerHTML = "Submit";

                    } else {
                      document.getElementById("nextBtn").innerHTML = "Next";
                    }
                    //... and run a function that will display the correct step indicator:
                    fixStepIndicator(n)
                  }

                  function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");
                    // Exit the function if any field in the current tab is invalid:
                    if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    // if you have reached the end of the form...
                    if (currentTab >= x.length) {
                      // ... the form gets submitted:
                    //  document.getElementById("regForm").submit();
                      document.getElementById("nextBtn").style.display="none";
                      document.getElementById("submitBtn").style.display="block";
                      document.getElementById("prevBtn").style.display = "none";  

                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                  }

                  function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");
                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                      // If a field is empty...
                      if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                      }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                      document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                  }

                  function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");
                    for (i = 0; i < x.length; i++) {
                      x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class on the current step:
                    x[n].className += " active";
                  }
                  </script>

    <?php

      if(isset($_POST['addnewusr'])){

        $username = esc_html($_POST['usernames']);
        $age = esc_html($_POST['age']);
        $gender = esc_html($_POST['gender']);
      	$password = esc_html($_POST['password']);
        $compassword = esc_html($_POST['repassword']);

        echo $username, $age , $gender, $password, $compassword;

      	if ( ! username_exists( $username ) ) {
      		$user_id = wp_create_user( $username, $password, $email_address );
      		$user = new WP_User( $user_id );
      		$user->set_role( 'um_students' );
      	}elseif ($password != $compassword) {
          echo "<script>alert('Password is not Match')</script>";
          exit();
        }

        if($user){


          $username = esc_html($_POST['usernames']);
          $age = esc_html($_POST['age']);
          $gender = esc_html($_POST['gender']);
          $gimagevals = $_POST['gimagevals'];

          $insertadhbprof = $wpdb->insert("adhd_student_profile",
            array(
              'userid' => $username,
              'age' => $age,
              'gender' => $gender,
              'avatar' => $gimagevals
            ));

          $location = "https://www.adhdadventure.online/log-in/";

          $redirest = wp_redirect( $location, $status = 302 );




        }

      }


    ?>


  </body>
</html>
