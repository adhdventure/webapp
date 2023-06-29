<?php

 /**
 ** TEMPLATE: REFLECTIVE PROCESSING DIMENSION PAGE
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




<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">


  <style media="screen">
    th{
      text-align: center;

    }
  </style>

</head>

<?php


  //ADDING DEFAULT DESIGN AND CALL IT
  require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/adhdadventure/templates/mainheader/mainheader.php';


?>    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">

                    <h4 style="text-align:center;">Reflective Processing</h4>

                      <div >
                          <button type="button" class="btn btn-primary" onclick="location.href='https://www.adhdadventure.online/new-reflective-processing/'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                          </svg>
                            New Reflective</button>

                      </div>
                        <br>
                      <table id="activesf" class="table-hover table-bordered" style="width:100%;">
                        <thead>

                          <tr>
                            <th>IDK</th>
                            <th>TITLE</th>
                            <th>CONTENT</th>
                            <th>ANSWER</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                            /**
                            ** GET ALL ADDED ACTIVE PROCESS
                            **/
                            $counters = 0;
                            $gallnewactv = $wpdb->get_results("SELECT * FROM `reflective_process_dimens`");
                            foreach ($gallnewactv as $key => $gcvalue) {


                          ?>
                          <tr>
                            <td><?php echo ++$counters ?></td>
                            <td><?php echo $gcvalue->title; ?> </td>
                            <td>
                              <div>
                                <?php echo htmlspecialchars_decode(stripslashes($gcvalue->contents)); ?>
                            </div>

                            </td>
                            <td><?php echo $gcvalue->answer; ?></td>
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


  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>



<script>

$('#activesf').DataTable( {
    order: [[0, 'desc']],
    dom: 'Brtip',
    responsive: true
} );
</script>

</body>

</html>
