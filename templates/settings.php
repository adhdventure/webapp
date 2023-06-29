<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

        <title>Media</title>
  <style media="screen">
        /* Responsive Full Background Image Using CSS
         * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
        */
        body {
          /* Location of the image */
          background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/05/Panel-only.png);

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
            background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/05/Panel-only.png);
          }
          }




          .imgrsc{
            position:relative;
            float: right;
            width: 7%;
            margin-right: 2%;
            margin-top: 0%;
            cursor:pointer;
          }

          .imgrexit{
            position:absolute;
            margin-left:50%;
            width: 15%;
            margin-top: 30%;
            cursor:pointer;
          }



.slidersf {
  -webkit-appearance: none;
  width: 60%;
  height: 50px;
  background-color: transparent;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin:0 auto;
  margin-top:1%;
}

.slidersf:hover {
  opacity: 1;
}

.slidersf::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slidersf::-moz-range-thumb {
  width: 10px;
  height: 50px;
  background: #04AA6D;
  cursor: pointer;
}


.slidersf2 {
  -webkit-appearance: none;
  width: 60%;
  height: 50px;
  background-color: transparent;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;

}

.slidersf2:hover {
  opacity: 1;
}

.slidersf2::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;

  cursor: pointer;
}

.slidersf2::-moz-range-thumb {
  width: 10px;
  height: 50px;
  background: #04AA6D;
  cursor: pointer;
}




    </style>

    </head>
    <body>




      <div class="">
        <img onclick="history.back()" class="imgrsc" src="http://www.adhdadventure.online/wp-content/uploads/2023/05/Close-Button.png" alt="">
      </div>

      <div class="">
        <img onclick="location.href='https://www.adhdadventure.online/indx/'" class="imgrexit" src="http://www.adhdadventure.online/wp-content/uploads/2023/05/Exit-Button.png" alt="">
      </div>


<audio autoplay loop src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Kevin-MacLeod-Pixelland-NO-COPYRIGHT-8-bit-Music.mp3"></audio>


  <div style="display:grid; grid-templates-columns: auto; gap:100%;margin:0 auto; margin-left:25%;width:100%;">
        <div class="">
          <input class="slidersf" type="range" id="vol" max="1" min="0" step="0.01" onchange="changevolume2(this.value)" />

        </div>
        <div class="">
          <input class="slidersf2" type="range" id="vol2" max="1" min="0" step="0.01" onchange="changevolume(this.value)" />

        </div>
  </div>


  <script type="text/javascript">
        function changevolume(amount) {
      var audioobject = document.getElementsByTagName("audio")[0];
      audioobject.volume = amount;
      }

      function changevolume2(amount) {
    var audioobject = document.getElementsByTagName("audio")[0];
    audioobject.volume = amount;
    }
  </script>

    </body>
</html>
