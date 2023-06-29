<?php

  /**
  ** TEMPLATE: "POPUP GUIDES";
  **/

  global $current_user;

      $useruid = $current_user->user_login;
    
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
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
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
           margin-top:200px !important;


         }
         .mobiles{
           margin-top:-5%
         }



        }

        .imgbckbtn{
          position:absolute;
          margin-left: 1%;
          width: 5%;
          cursor:pointer;
          margin-top:1%;
        }

        .imgmenu{
          position:absolute;
          margin-left: 80%;
          width: 5%;
          cursor:pointer;
            margin-top:1%;
        }

        img{
          width:15%;

        }


        .img1 {

          margin-top: 10%;
          position:absolute;
          margin-left: -30%;

        }
        .img2{

          margin-top: 10%;
          position:absolute;
          margin-left: -15%;

        }
         .img3{


          margin-top: 9%;
          position:absolute;
          margin-left: 1%;

        }
        .img4{


          margin-top: 12%;
          position:absolute;
         margin-left: 15%;

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



    </style>
  </head>
  <body >



    <div class="container">
      <img onclick="history.back()"  src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
      <img onclick="location.href='https://www.adhdadventure.online/indx/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">
        <br>
        <br>
        <div class="row">
        <div class="col d-flex justify-content-center" style="margin-top:2%">

              <div style="display:grid; grid-template-columns: auto auto; gap:1%">
                <img onclick="geimglink1()" class="img1" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-1.png" alt="">
                <img class="img2" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-2.png" alt="">
                <img class="img3" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-3.png" alt="">
                <img class="img4" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-4.png" alt="">

              </div>


              <input type="hidden" id="usaccount" value="<?php echo $useruid; ?>">
        </div>

      </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">

      function geimglink1(){


      let usaccount = $("#usaccount").val();
      let gvaslf = $(".img1").attr("src");
      console.log(usaccount);


        $.post("https://www.adhdadventure.online/adhd-functions/", {

          gvaslf:gvaslf,
          usaccount:usaccount



        },  function(data,status){

          Swal.fire({
            title: 'Are you sure?',
            text: "You want to choose this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                  'Great!',
                  '',
                  'success'
                ).then(function(){
                  window.location.href='https://www.adhdadventure.online/log-in/';
                })
            }
          })


      });





      }

    </script>

  </body>
</html>
