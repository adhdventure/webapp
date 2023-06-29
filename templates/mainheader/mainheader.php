<?php

/**
** THIS PAGE IS FOR MAINHEADER THAT WILL
** SHOW ALL THE LIST OF MENU ON THE LEFT BAR
** OF THE ADMIN PAGE
**/

// redirect if accessed directly
if(!defined('ABSPATH')){
    die();
}



?>

<head>
  <!-- Set the favicon for the page -->
  <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <!-- Navbar content -->
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <!-- Theme settings content -->
      </div>
      <div id="right-sidebar" class="settings-panel">
        <!-- Right sidebar content -->
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="https://www.adhdadventure.online/dashboard/">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dimensions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="https://www.adhdadventure.online/phases-materials/" aria-expanded="false" aria-controls="process">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">All Phase Content</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="https://www.adhdadventure.online/all-post-test/" aria-expanded="false" aria-controls="process">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Post Test Contents</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.adhdadventure.online/wp-login.php?action=logout" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                <!-- SVG path for the logout icon -->
              </svg>
              <span class="menu-title"> &nbsp; Log Out</span>
            </a>
          </li>
        </ul>
      </nav>
