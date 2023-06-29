<?php

 /**
 ** TEMPLATE: DASHBAORDING
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
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/feather/feather.css'; ?>">
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/ti-icons/css/themify-icons.css';?> ">
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/css/vendor.bundle.base.css';?> ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css';?> ">
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/ti-icons/css/themify-icons.css';?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/select.dataTables.min.css';?> ">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/css/vertical-layout-light/style.css';?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/images/favicon.png';?> " />


</head>

<?php


  //ADDING DEFAULT DESIGN AND CALL IT
  require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/adhdadventure/templates/mainheader/mainheader.php';


?>    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?php echo $current_user->display_name; ?>!</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! </span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">

                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Bangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today’s Bookings</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Bookings</p>
                      <p class="fs-30 mb-2">61344</p>
                      <p>22.00% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Meetings</p>
                      <p class="fs-30 mb-2">34040</p>
                      <p>2.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Clients</p>
                      <p class="fs-30 mb-2">47033</p>
                      <p>0.22% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Order Details</p>
                  <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Order value</p>
                      <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Orders</p>
                      <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Users</p>
                      <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Downloads</p>
                      <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                    </div>
                  </div>
                  <canvas id="order-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Sales Report</p>
                  <a href="#" class="text-info">View all</a>
                 </div>
                  <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
          </div> -->
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  <a href="https://www.adhdadventure.online/" target="_blank">ADventure</a>  All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/js/vendor.bundle.base.js';?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/chart.js/Chart.min.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/datatables.net/jquery.dataTables.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/dataTables.select.min.js';?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/off-canvas.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/hoverable-collapse.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/template.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/settings.js';?>"></script>
  <script src="<?php echo plugin_dir_url( __FILE__ ) . '/dashboard/js/todolist.js';?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
