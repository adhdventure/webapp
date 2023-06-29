<?php
/**
 * TEMPLATE: DASHBOARDING
 */

// Check user role function
function tf_check_user_role($roles) {
  if (is_user_logged_in()) {
    $user = wp_get_current_user(); // Get current logged-in user data
    $currentUserRoles = $user->roles; // Fetch user roles
    $isMatching = array_intersect($currentUserRoles, $roles); // Intersect user roles with specified roles
    $response = false;
    if (!empty($isMatching)) {
      $response = true; // If any role matches, return true
    }
    return $response;
  }
}

$roles = ['administrator']; // Roles to check
if (tf_check_user_role($roles)) {
  global $template;
  echo "<h3 style='text-align: center;color:orange'>" . basename($template) . "</h3>"; // Echo the template name for administrators
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
  <!-- CSS dependencies for the dashboard -->
</head>

<?php
// Include the default design
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/adhdadventure/templates/mainheader/mainheader.php';
?>

<!-- HTML structure for the dashboard -->
<body>
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- Dashboard content goes here -->
      <!-- Displaying active processing -->
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <h4 style="text-align:center;">Active Processing</h4>
              <div>
                <!-- Button to add a new active -->
                <button type="button" class="btn btn-primary" onclick="location.href='https://www.adhdadventure.online/new-active-process/'">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>
                  New Active
                </button>
              </div>
              <br>
              <!-- Table to display active processes -->
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
                  // Retrieve and display all added active processes
                  $counters = 0;
                  $gallnewactv = $wpdb->get_results("SELECT * FROM `active_process_dimens`");
                  foreach ($gallnewactv as $key => $gcvalue) {
                  ?>
                  <tr>
                    <td><?php echo ++$counters ?></td>
                    <td><?php echo $gcvalue->title; ?></td>
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
    <!-- Footer -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.
          <a href="https://www.adhdadventure.online/" target="_blank">ADventure</a> All rights reserved.
        </span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
  <!-- Additional scripts for the dashboard -->
</body>
</html>
