<?php

/**
 * TEMPLATE: MAINPAGE
 * This is a template for the main page of a website.
 */

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADventure</title>
    <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">

    <!-- CSS styles -->
    <style>
      audio { display:none; }

      /* Responsive Full Background Image Using CSS */
      body {
        /* Location of the image */
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/0-Main-Screen-finals23.png);

        /* Image is centered vertically and horizontally at all times */
        background-position: center center;

        /* Image doesn't repeat */
        background-repeat: no-repeat;

        /* Makes the image fixed in the viewport so that it doesn't move when the content height is greater than the image height */
        background-attachment: fixed;

        /* This is what makes the background image rescale based on its container's size */
        background-size: cover;

        /* Pick a solid background color that will be displayed while the background image is loading */
        background-color: #464646;
      }

      /* For mobile devices */
      @media only screen and (max-width: 767px) {
        body {
          /* The file size of this background image is 93% smaller to improve page load speed on mobile internet connections */
          background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/0-Main-Screen-finals-2.jpg);
        }
      }

      audio { display:none; }
    </style>
  </head>
  <body>
    <!-- Background music -->
    <audio src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Kevin-MacLeod-Pixelland-NO-COPYRIGHT-8-bit-Music.mp3" autoplay="true" loop="true" />

    <!-- Background overlay -->
    <div class="bg"></div>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script>
      // When any element is clicked
      $('*').click(function(event) {
        // Check if the clicked element is the original element (not a child element)
        if (this === event.target) {
          // Redirect to the sign-up page
          window.location.href = "https://www.adhdadventure.online/sign-up/";
        }

        // Create a new Audio object for the click sound effect
        const snd = new Audio('http://www.adhdadventure.online/wp-content/uploads/2023/04/Click-Sound-Effect.mp3');

        // Play the click sound effect
        snd.play();
      });
    </script>
  </body>
</html>
