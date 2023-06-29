<?php

/**
** TEMPLATE: EXIT PAGE
**/




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADventure</title>
      <link rel="icon" type="image/x-icon" href="https://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
    <style>

    audio { display:none;}

    /* Responsive Full Background Image Using CSS
     * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
    */
    body {
      /* Location of the image */
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Panel-only.png);

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
    @media only screen and (max-width: 767px) {
      body {
        /* The file size of this background image is 93% smaller
         * to improve page load speed on mobile internet connections */
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Panel-only.png);
      }
    	}




      .yess{
        position:absolute;
        margin-left: 30%;
        width: 15%;
        margin-top: 30%;
        cursor:pointer;
      }

      .noo{
        position:absolute;
        margin-left:50%;
        width: 15%;
        margin-top: 30%;
        cursor:pointer;
      }

</style>



  </head>
  <body>


<div  class="bg"></div>

<img  onclick="location.href='<?php echo wp_logout_url('https://www.adhdadventure.online/');  ?>'" class="yess" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Yes.png" alt="">
<img  onclick="location.href='https://www.adhdadventure.online/indx/';" class="noo" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/No.png" alt="">


  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>



  </body>
</html>
