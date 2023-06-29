<?php
/**
** TEMPLATE: SIGNUP PAGE
**/

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ADventure</title>
  <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">

  <style>
    /* CSS styles for the background image */
    body {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Sign-Up-only.png);
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-color:#464646;
      display: flex;
      justify-content: center;
    }

    /* CSS styles for mobile devices */
    @media only screen and (max-width: 767px) {
      body {
        background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Sign-Up-only-768.jpg);
        margin-top:200px !important;
      }
    }

    /* CSS styles for buttons and images */
    .btnrts {
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

    .imgbckbtn {
      position:absolute;
      margin-right: 90% !important;
      width: 5%;
      margin-top: 1%;
      cursor:pointer;
    }

    .imgmenu {
      position:absolute;
      margin-left: 90%;
      width: 5%;
      cursor:pointer;
      margin-top: 1%;
    }

    img {
      width:10%;
    }

    /* CSS styles for images */
    .img1 {
      cursor: pointer;
    }

    .img2 {
      cursor: pointer;
    }

    .img3 {
      cursor: pointer;
    }

    .img4 {
      cursor: pointer;
    }

    /* CSS styles for image hover effect */
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

    /* CSS styles for the registration form */
    #regForm {
      background-color: #ffffff;
      margin: 100px auto;
      font-family: Raleway;
      padding: 40px;
      width: 80% !important;
      min-width: 400px;
    }

    /* CSS styles for invalid input fields */
    input.invalid {
      background-color: #ffdddd;
    }

    /* CSS styles for tabs */
    .tab {
      display: none;
    }

    /* CSS styles for buttons */
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

    /* CSS styles for previous button */
    #prevBtn {
      background-color: #bbbbbb;
    }

    /* CSS styles for step indicator */
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

    /* CSS styles for step icon */
    .step.icon {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-depression-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon2 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-anger-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon3 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-anxiety-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon4 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-sadness-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon5 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-joy-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon6 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-fear-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon7 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-worry-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon8 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-insomnia-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon9 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-pain-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }

    /* CSS styles for step icon */
    .step.icon10 {
      background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/icn-addiction-150x150.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center center;
      padding: 0 !important;
    }
  </style>
</head>

<body>

  <!-- Navigation buttons -->
  <img class="imgbckbtn" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/back.png">
  <img class="imgmenu" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/menu-1.png">

  <!-- Main content -->
  <div id="regForm">
    <!-- Step indicator -->
    <div style="text-align:center;margin-bottom:40px;">
      <span class="step icon"></span>
      <span class="step icon2"></span>
      <span class="step icon3"></span>
      <span class="step icon4"></span>
      <span class="step icon5"></span>
      <span class="step icon6"></span>
      <span class="step icon7"></span>
      <span class="step icon8"></span>
      <span class="step icon9"></span>
      <span class="step icon10"></span>
    </div>

    <!-- Form sections -->
    <div class="tab">
      <h1>Section 1</h1>
      <p>This is the first section of the form.</p>
      <!-- Form fields and buttons -->
      <p><input type="text" placeholder="Name"></p>
      <p><input type="text" placeholder="Email"></p>
      <p><button onclick="nextPrev(1)">Next</button></p>
    </div>

    <div class="tab">
      <h1>Section 2</h1>
      <p>This is the second section of the form.</p>
      <!-- Form fields and buttons -->
      <p><input type="text" placeholder="Address"></p>
      <p><input type="text" placeholder="City"></p>
      <p><button onclick="nextPrev(1)">Previous</button></p>
      <p><button onclick="nextPrev(1)">Next</button></p>
    </div>

    <!-- Add more sections here -->

    <!-- Previous and submit buttons -->
    <div style="overflow:auto;">
      <div style="float:right;">
        <button id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
  </div>

  <!-- JavaScript code -->
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
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that displays the correct step indicator:
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
        document.getElementById("regForm").submit();
        return false;
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

</body>
</html>
