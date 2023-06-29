<?php

/**
 * TEMPLATE: LIST OF MENU PAGE
 */

// Check user roles and redirect accordingly
$user = wp_get_current_user();
$allowed_roles = array('administrator', 'um_students', 'um_teachers');
if (array_intersect($allowed_roles, $user->roles)) {
    // Redirect to login page if user is not logged in
    if (!is_user_logged_in()) {
        wp_redirect(home_url('/wp-login.php'), 302);
        exit();
    } else {
        // Redirect teachers to the dashboard
        if (UM()->user()->get_role() == 'um_teachers') {
            $location = "https://www.adhdadventure.online/dashboard";
            wp_redirect($location, $status = 302);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="http://www.adhdadventure.online/wp-content/uploads/2023/04/favicon-32x32-1.png">
    <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">

    <title>ADventure</title>

    <style>
        /* Responsive Full Background Image Using CSS
         * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
         */

        /* Set background image and styles */
        body {
            background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Title-only-1.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #464646;
            display: flex;
            justify-content: center;
        }

        /* Adjust styles for mobile devices */
        @media only screen and (max-width: 767px) {
            body {
                background-image: url(http://www.adhdadventure.online/wp-content/uploads/2023/04/Title-only-1.png);
                margin-top: 200px !important;
            }
        }

        /* Button styles */
        .btnrts {
            background-color: #ff9527;
            color: #ffff;
            font-size: 2rem;
            text-align: center;
            margin-top: 5%;
            width: 300px;
            font-family: fantasy;
            border-radius: 12px 12px;
            border-bottom: 5px solid #ffe533;
            border-top: 0;
            border-right: 0;
            border-left: 0;
        }

        /* Navbar toggler button styles */
        button.navbar-toggler {
            color: #fff !important;
            font-family: fantasy !important;
            background-color: #ff9527 !important;
            border: 0px;
        }

        /* Button and navbar font styles */
        button {
            font-family: 'Common Pixel', sans-serif !important;
        }

        /* Hide audio element */
        audio {
            display: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="bg"></div>
    <div class="divmobile" style="z-index: 99999;margin-top:20%; text-align:center;">

        <div class="container-fluid">

            <div style="display:grid;grid-template-columns; gap: 2%;">

                <div class="">
                    <!-- Button to start the game -->
                    <button onclick="location.href='https://www.adhdadventure.online/instructional-guide/'" class="btnrts" type="button" name="button">
                        START
                    </button>
                </div>
                <div class="">
                    <!-- Button to view leaderboards -->
                    <button onclick="location.href='https://www.adhdadventure.online/leadership-boards/'" class="btnrts" type="button" name="button">
                        LEADERBOARDS
                    </button>
                </div>
                <div class="">
                    <!-- Button to access audio settings -->
                    <button onclick="location.href='https://www.adhdadventure.online/audio-settings/'" class="btnrts" type="button" name="button">
                        SETTINGS
                    </button>
                </div>
                <div class="">
                    <form method="post">
                        <!-- Button to exit the game -->
                        <button onclick="location.href='https://www.adhdadventure.online/exit-2/'" class="btnrts" type="button" name="bexits">
                            EXIT
                        </button>
                    </form>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <!-- Background music for the game -->
        <audio src="http://www.adhdadventure.online/wp-content/uploads/2023/04/Kevin-MacLeod-Pixelland-NO-COPYRIGHT-8-bit-Music.mp3" autoplay="true" loop="true" />
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        // Play click sound on button click
        $('*').click(function(event) {
            const snd = new Audio('http://www.adhdadventure.online/wp-content/uploads/2023/04/Click-Sound-Effect.mp3');
            snd.play();
        });
    </script>
</body>

</html>

<?php

// Handle form submission for exit button
if (isset($_POST['exits'])) {
    $gexits = $_POST['exits'];

    if (wp_verify_nonce($_POST['form_nonce'], 'adhd-nonce')) {
        // Logout the user
        $location = "https://www.adhdadventure.online/wp-login.php?action=logout";
        $redirects = wp_redirect($location, $status = 302);
    }
}

// Redirect users with non-allowed roles to login page
else {
    $location = "https://www.adhdadventure.online/log-in/";
    $redirects = wp_redirect($location, $status = 302);
}

?>
