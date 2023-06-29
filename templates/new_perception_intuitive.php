<?php

 /**
 ** TEMPLATE: DASHBAORDING
 **/



 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 }else{




?>



<?php
 $allowedTags='<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
 $allowedTags.='<li><ol><ul><span><div><br><ins><del>';
// Should use some proper HTML filtering here.
  if($_POST['elm1']!='') {
    $sHeader = '<h1>Ah, content is king.</h1>';
    $sContent = strip_tags(stripslashes($_POST['elm1']),$allowedTags);
} else {
    $sHeader = '<h1>Nothing submitted yet</h1>';
    $sContent = '<p>Start typing...</p>';
    $sContent.= '<p><img width="107" height="108" border="0" src="/mediawiki/images/badge.png"';
    $sContent.= 'alt="TinyMCE button"/>This rover has crossed over</p>';
  }
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

 <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>



 <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">



<style media="screen">
@media only screen and (max-width: 500px) {
  .mobiles{

    grid-template-columns: auto !important;
    width:100% !important;
    gap:10px !important;

  }
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

                  <h4 style="text-align:center"> New Perception Intuitive</h4>

                  <form  method="post">
                   <label>Enter Title:</label>
                   <input class="form-control" type="text" name="titles" >
                   <br>
                   <label>Enter Content:</label>
                   <textarea class="form-control" name="editor" id="editor" rows="10" cols="80"></textarea>
                   <br>
                   <label>Enter Answer:</label>
                   <input class="form-control" type="text" name="answer" >
                   <br>
                    <div class="mobiles" style="display:grid;grid-template-columns:  auto auto; width:50%; text-align:right; float:right">

                        <div style="width:100%">


                          <button style="width:100%" class="btn btn-success glyphicon glyphicon-ok" type="submit" name="submit" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                              <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                              Submit
                             </button>

                        </div>
                        <div style="width:100%">
                          <button  style="width:100%" class="btn btn-danger" type="button" name="backs" onclick="location.href='https://www.adhdadventure.online/active-processing-dimension/'"  >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                             Cancel</button>

                        </div>

                    </div>
                    <br>


              </form>


                 <?php

                  if(isset($_POST['submit']))

                  {

                         $titles = $_POST['titles'];
                         $contents = $_POST['editor'];
                         $answer = $_POST['answer'];

                         $makeanswcaps = strtoupper($answer);


                          $insertdbs = $wpdb->insert("perception_intuitive",

                            array(
                              'title' => $titles,
                              'contents' => $contents,
                              'answer' => $makeanswcaps
                              ));

                          if($insertdbs){

                              $location = "https://www.adhdadventure.online/perception-intuitive/";
                              wp_redirect( $location, $status = 302 );


                          }



                 }


                 ?>






                </div>
                  <!-- END BODY HERE -->
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




   <script>
        CKEDITOR.replace('editor');
    </script>



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


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


</body>

</html>


<?php


}// closing tag for define absth

?>
