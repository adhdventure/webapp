<?php

/**
 * TEMPLATE: GAME START HERE
 */

/**
 * TEMPLATE: "POPUP GUIDES";
 */
global $current_user;

$current_users = $current_user->user_login;

/**
 * Retrieve the second highest learning style for the current user
 */
$gdatamajor = $wpdb->get_results("SELECT SUM(points) AS studentscor, learning_style FROM `adhd_learning_points_system` WHERE userid ='$current_users' GROUP BY userid,learning_style ORDER BY studentscor DESC LIMIT 1,1");
foreach ($gdatamajor as $key => $vasdflue) {
    $first = $vasdflue->learning_style;
    $countes = $vasdflue->studentscor;

    // Update the learning style path 2 in the student profile
    $inserdbs = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET  learning_style_path_2 ='$first' WHERE userid= '$current_users' "));

    // Update the finish phase to 'PHASE 1' in the student profile
    $inserdbsa = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET  finish_phase ='PHASE 1' WHERE userid= '$current_users' "));
}

/**
 * Retrieve the third highest learning style for the current user
 */
$gdatamajor = $wpdb->get_results("SELECT SUM(points) AS studentscor, learning_style FROM `adhd_learning_points_system` WHERE userid ='$current_users' GROUP BY userid,learning_style ORDER BY studentscor DESC LIMIT 2,1;");
foreach ($gdatamajor as $key => $vasdflue) {
    $first = $vasdflue->learning_style;
    $countes = $vasdflue->studentscor;

    // Update the learning style path 3 in the student profile
    $inserdbs = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET learning_style_path_3 = '$first' WHERE userid= '$current_users' "));
}

/**
 * Retrieve the highest learning style for the current user
 */
$gdatamajor = $wpdb->get_results("SELECT SUM(points) AS studentscor, learning_style FROM `adhd_learning_points_system` WHERE userid ='$current_users' GROUP BY userid,learning_style ORDER BY studentscor DESC  LIMIT 1");
foreach ($gdatamajor as $key => $vasdflue) {
    $first = $vasdflue->learning_style;
    $countes = $vasdflue->studentscor;

    // Update the learning style path 1 in the student profile
    $inserdbs = $wpdb->query($wpdb->prepare("UPDATE adhd_student_profile SET learning_style_path_1 ='$first'  WHERE userid= '$current_users' "));
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>ADventure</title>
    <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
    <style>
        /* CSS styles omitted for brevity */
    </style>
</head>
<body>
    <div class="divbg"></div>
    <img onclick="history.back()" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Back-Icon.png" class="imgbckbtn">
    <img onclick="myFunction()" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Help-Icon.png" class="imghelpbtn">
    <img onclick="homeFunction()" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Home-Icon.png" class="imghomebtn">
    <img onclick="mapFunction()" src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Map-Icon.png" class="imgmapbtn">

    <!-- Content of the game goes here -->
    <div class="game-content">
        <!-- Game content HTML omitted for brevity -->
    </div>

    <!-- Scripts -->
    <script>
        // JavaScript code omitted for brevity
    </script>
</body>
</html>
