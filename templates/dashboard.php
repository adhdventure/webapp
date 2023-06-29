<?php
/**
 * TEMPLATE: MAIN DASHBOARDING
 **/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADventure Dashboard</title>
  <!-- plugins:css -->
  <!-- Include CSS files -->
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/feather/feather.css'; ?>">
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/ti-icons/css/themify-icons.css'; ?> ">
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/css/vendor.bundle.base.css'; ?> ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css'; ?> ">
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/ti-icons/css/themify-icons.css'; ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/select.dataTables.min.css'; ?> ">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- Include custom CSS -->
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/css/vertical-layout-light/style.css'; ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/images/favicon.png'; ?> " />
</head>

<?php
  // ADDING DEFAULT DESIGN AND CALL IT
  // Include the main header file
  require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/adhdadventure/templates/mainheader/mainheader.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome <?php echo $current_user->display_name; ?>!</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly!</span></h6>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <!-- Dropdown content -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Student Ranking Table -->
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <table id="studentdatarnk" class="table hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>STUDENT</th>
                  <th>LEARNING STYLE</th>
                  <th>POINTS</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // Query the database to get student data
                  $displliststy = $wpdb->get_results("SELECT userid, learning_style, SUM(points) AS pointss FROM `adhd_learning_points_system` GROUP BY userid, learning_style, points");

                  foreach ($displliststy as $key => $dfvalue) {
                    $usersid = $dfvalue->userid;
                ?>
                <tr>
                  <td>
                    <?php echo ++$counters; ?>
                  </td>
                  <td>
                    <?php
                      // Query the database to get the student's display name
                      $drealnm = $wpdb->get_results("SELECT display_name FROM `wp_users` WHERE user_login ='$usersid'");
                      foreach ($drealnm as $key => $vsdfalue) {
                        echo $vsdfalue->display_name;
                      }
                    ?>
                  </td>
                  <td>
                    <?php echo $dfvalue->learning_style; ?>
                  </td>
                  <td>
                    <?php echo $dfvalue->pointss; ?>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <br>

    <!-- Page Clicks Table -->
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <table id="pageclicks" class="table hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>STUDENT</th>
                  <th>PAGE CLICK IDLE</th>
                  <th>CLICKS</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // Query the database to get page clicks data
                  $displliststy = $wpdb->get_results("SELECT userid, page_visit, SUM(clicked_times) AS pointss FROM `adhd_idle_points_records` GROUP BY userid, page_visit, clicked_times");

                  foreach ($displliststy as $key => $dfvalue) {
                    $usersid = $dfvalue->userid;
                ?>
                <tr>
                  <td>
                    <?php echo ++$counters; ?>
                  </td>
                  <td>
                    <?php
                      // Query the database to get the student's display name
                      $drealnm = $wpdb->get_results("SELECT display_name FROM `wp_users` WHERE user_login ='$usersid'");
                      foreach ($drealnm as $key => $vsdfalue) {
                        echo $vsdfalue->display_name;
                      }
                    ?>
                  </td>
                  <td>
                    <?php echo $dfvalue->page_visit; ?>
                  </td>
                  <td>
                    <?php echo $dfvalue->pointss; ?>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
        2023. <a href="https://www.adhdadventure.online/" target="_blank">ADventure</a> All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
</div>
<!-- main-panel ends -->

<!-- plugins:js -->
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/js/vendor.bundle.base.js'; ?>"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/chart.js/Chart.min.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/datatables.net/jquery.dataTables.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/dataTables.select.min.js'; ?>"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/off-canvas.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/hoverable-collapse.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/template.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/settings.js'; ?>"></script>
<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/todolist.js'; ?>"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="js/dashboard.js"></script>
<script src="js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page -->

</body>

</html>
