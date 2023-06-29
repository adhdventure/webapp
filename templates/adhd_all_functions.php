<?php



  //ADD THIS EVERY PAGE TO PREVENT DIRECT EDIT TO THE PAGE
  if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

if(!is_user_logged_in()) {
           wp_redirect( home_url( '/wp-login.php' ), 302 );
           exit();
           }

global $wpdb;


//ADD DATA


 if(isset($_POST['gvaslf'])){

   $vaslf = $_POST['gvaslf'];
   $account = $_POST['usaccount'];


   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

   $updtbd = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET avatar = '$vaslf' WHERE userid='$account' "));




}




/**
** CHECKING CORRECT ANSWER
**/





 if(isset($_POST['correctsanss'])){

   $correctsanss = $_POST['correctsanss'];
   $account = $_POST['usaccount'];
   $default = $_POST['default'];

   $phase1 = 'PHASE 1';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1'  AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['phasetwo'])){

   $correctsanss = $_POST['phasetwo'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 2';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['phasethree'])){

   $correctsanss = $_POST['phasethree'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 3';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['phasefour'])){

   $correctsanss = $_POST['phasefour'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 4';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1'  AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['phasefive'])){

   $correctsanss = $_POST['phasefive'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 5';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT'");

   echo json_encode( $gcrcanswer );



}







/**
** CHECKING CORRECT ANSWER PRACTICE
**/





 if(isset($_POST['pcorrectsanss'])){

   $correctsanss = $_POST['pcorrectsanss'];
   $account = $_POST['usaccount'];
   $default = $_POST['default'];

   $phase1 = 'PHASE 1';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1'  AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['pphasetwo'])){

   $correctsanss = $_POST['phasetwo'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 2';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['pphasethree'])){

   $correctsanss = $_POST['pphasethree'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 3';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['pphasefour'])){

   $correctsanss = $_POST['pphasefour'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 4';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1'  AND status_view ='DEFAULT' ");

   echo json_encode( $gcrcanswer );



}



 if(isset($_POST['pphasefive'])){

   $correctsanss = $_POST['pphasefive'];
   $account = $_POST['usaccount'];

   $phase1 = 'PHASE 5';

   $timezone  = + 8; //(GMT +8:00) Philippines
   $datestimeonly = gmdate("Y-m-d", time() + 3600*($timezone+date("I")));

    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT'");

   echo json_encode( $gcrcanswer );



}





if(isset($_POST['gcorrectsanss'])){

  $gcorrectsanss = $_POST['gcorrectsanss'];

  $wrongansw = $_POST['wrongansw'];
  $correctans = $_POST['correctans'];


  $phases = "PHASE 1";
  $quiznumbs = $_POST['stquiznumbs'];

  $currenuser = $current_user->user_login;

   $gcrcanswer = $wpdb->insert("post_test_student_scores",

      array(

         'phase_number'=> $phases,
         'student_answer'=> $gcorrectsanss ,
         'student_id' => $currenuser,
         'quiz_number' => $quiznumbs,
         'wrong_answers'=> $wrongansw,
         'correct_ans'=> $correctans ));



}



if(isset($_POST['templatepage'])){


  $templatepage = $_POST['templatepage'];

  $clicked = 1;
  $templatepage = $_POST['templatepage'];

  $currenuser = $current_user->user_login;

   $gcrcanswer = $wpdb->insert("adhd_idle_points_records", array('userid'=> $currenuser, 'page_visit'=> $templatepage , 'clicked_times' => $clicked ));



}



?>
