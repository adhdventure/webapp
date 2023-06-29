<?php
/**
 * TEMPLATE: "POPUP GUIDES CHOOSING AVATAR"
 *
 * This is a template for a popup guide feature.
 * It displays a background image, back and menu buttons, and a set of clickable images.
 * When an image is clicked, it triggers a JavaScript function to handle the event.
 */

// Get the current user's login name
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

  <!-- Dark theme CSS for SweetAlert2 -->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

  <style media="screen">
    /* Responsive Full Background Image Using CSS */
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
      background-color: #464646;

      /* Flexbox properties to center the content vertically and horizontally */
      display: flex;
      justify-content: center;
    }

    /* For mobile devices */
    @media only screen and (max-width: 767px) {
      body {
        /* The file size of this background image is 93% smaller
         * to improve page load speed on mobile internet connections */
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Background-colored.png);
        margin-top: 200px !important;
      }

      .mobiles {
        margin-top: -5%;
      }
    }

    /* Back button image */
    .imgbckbtn {
      position: absolute;
      margin-left: 1%;
      width: 5%;
      cursor: pointer;
      margin-top: 1%;
    }

    /* Menu button image */
    .imgmenu {
      position: absolute;
      margin-left: 80%;
      width: 5%;
      cursor: pointer;
      margin-top: 1%;
    }

    /* Images */
    img {
      width: 15%;
    }

    /* Image 1 */
    .img1 {
      margin-top: 10%;
      position: absolute;
      margin-left: -30%;
    }

    /* Image 2 */
    .img2 {
      margin-top: 10%;
      position: absolute;
      margin-left: -15%;
    }

    /* Image 3 */
    .img3 {
      margin-top: 9%;
      position: absolute;
      margin-left: 1%;
    }

    /* Image 4 */
    .img4 {
      margin-top: 12%;
      position: absolute;
      margin-left: 15%;
    }

    /* Hover styles for images */
    .img1:hover {
      width: 20%;
    }

    .img2:hover {
      width: 20%;
    }

    .img3:hover {
      width: 20%;
    }

    .img4:hover {
      width: 20%;
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Back button -->
    <img onclick="history.back()" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">

    <!-- Menu button -->
    <img onclick="location.href='https://www.adhdadventure.online/indx/'" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Settings-Icon.png" class="imgmenu">

    <br>
    <br>

    <div class="row">
      <div class="col d-flex justify-content-center" style="margin-top:2%">
        <div style="display:grid; grid-template-columns: auto auto; gap:1%">
          <!-- Image 1 -->
          <img onclick="geimglink1()" class="img1" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-1.png" alt="">

          <!-- Image 2 -->
          <img class="img2" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-2.png" alt="">

          <!-- Image 3 -->
          <img class="img3" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-3.png" alt="">

          <!-- Image 4 -->
          <img class="img4" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/player-4.png" alt="">
        </div>

        <!-- Hidden input field to store the user's account -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEylcm2tiZftaX/vMC0fp" crossorigin="anonymous"></script>
  -->

  <!-- SweetAlert2 library for displaying popup modals -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>
    // JavaScript function to handle the click event on Image 1
    function geimglink1() {
      // Get the user's account from the hidden input field
      var useraccount = document.getElementById("usaccount").value;

      // Display a confirmation popup modal
      Swal.fire({
        title: 'Confirmation',
        text: 'Are you sure you want to select this image?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
          // If the user confirms, redirect to a new page with the selected image and account
          window.location.href = 'https://www.adhdadventure.online/indx/?selectedimage=1&account=' + useraccount;
        }
      });
    }
  </script>
</body>
</html>
