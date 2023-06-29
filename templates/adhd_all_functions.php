<?php

// This code prevents direct access to the page
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Check if the user is not logged in and redirect to the login page
if (!is_user_logged_in()) {
    wp_redirect(home_url('/wp-login.php'), 302);
    exit();
}

global $wpdb;

// ADD DATA

// Check if the 'gvaslf' value is set in the POST request
if (isset($_POST['gvaslf'])) {
    $vaslf = $_POST['gvaslf'];
    $account = $_POST['usaccount'];

    // Get the current date and time in the Philippines timezone
    $timezone = +8; //(GMT +8:00) Philippines
    $datestimeonly = gmdate("Y-m-d", time() + 3600 * ($timezone + date("I")));

    // Update the 'avatar' field in the 'adhd_student_profile' table
    $updtbd = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET avatar = '$vaslf' WHERE userid='$account'"));
}

/**
 * CHECKING CORRECT ANSWER
 */

// Check if the 'correctsanss' value is set in the POST request
if (isset($_POST['correctsanss'])) {
    $correctsanss = $_POST['correctsanss'];
    $account = $_POST['usaccount'];
    $default = $_POST['default'];

    $phase1 = 'PHASE 1';

    // Get the current date and time in the Philippines timezone
    $timezone = +8; //(GMT +8:00) Philippines
    $datestimeonly = gmdate("Y-m-d", time() + 3600 * ($timezone + date("I")));

    // Retrieve results from the 'post_test_answer' table based on the given conditions
    $gcrcanswer = $wpdb->get_results("SELECT * FROM `post_test_answer` WHERE correct_answer = '$correctsanss' AND phase_number ='$phase1' AND status_view ='DEFAULT'");

    // Return the results as JSON
    echo json_encode($gcrcanswer);
}

// Repeat the above code block for 'phasetwo', 'phasethree', 'phasefour', and 'phasefive' values

/**
 * CHECKING CORRECT ANSWER PRACTICE
 */

// Repeat the above code block for 'pcorrectsanss', 'pphasetwo', 'pphasethree', 'pphasefour', and 'pphasefive' values

// Check if the 'gcorrectsanss' value is set in the POST request
if (isset($_POST['gcorrectsanss'])) {
    $gcorrectsanss = $_POST['gcorrectsanss'];
    $wrongansw = $_POST['wrongansw'];
    $correctans = $_POST['correctans'];

    $phases = "PHASE 1";
    $quiznumbs = $_POST['stquiznumbs'];

    $currenuser = $current_user->user_login;

    // Insert the student's score into the 'post_test_student_scores' table
    $gcrcanswer = $wpdb->insert("post_test_student_scores", array(
        'phase_number' => $phases,
        'student_answer' => $gcorrectsanss,
        'student_id' => $currenuser,
        'quiz_number' => $quiznumbs,
        'wrong_answers' => $wrongansw,
        'correct_ans' => $correctans
    ));
}

// Check if the 'templatepage' value is set in the POST request
if (isset($_POST['templatepage'])) {
    $templatepage = $_POST['templatepage'];

    $clicked = 1;
    $templatepage = $_POST['templatepage'];

    $currenuser = $current_user->user_login;

    // Insert the page visit record into the 'adhd_idle_points_records' table
    $gcrcanswer = $wpdb->insert("adhd_idle_points_records", array(
        'userid' => $currenuser,
        'page_visit' => $templatepage,
        'clicked_times' => $clicked
    ));
}

?>
