<?php
  // Prep URL
  $myRequestURI;

  // Create WP shortcode.
  $a = shortcode_atts( array(
    "subject" => "Grant Program Registration",
    "googlesheet" => "All Leads",
    "urlforward" => "https://stagedhomes.com/training/all-classes.php",
    "buttontext" => "Submit",
  ), $atts );

  // Construct urlforward
  if ($a["urlforward"] !== "https://stagedhomes.com/training/all-classes.php") {
    $myRequestURI = "https://stagedhomes.com/assets/app_modules/wordpress/shortcode-redirect.php";
  } else {
    $myRequestURI = "https://stagedhomes.com/training/all-classes.php";
  } // if
?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<form id="registration" action="<?php echo $myRequestURI; ?>" method="post">
  <!-- First and Last Name -->
  <div class="form-group">
    <label for="strFullName"><strong>First and Last Name</strong></label>
    <input type="text" name="strFullName" class="form-control" placeholder="Enter First and Last Name" required />
  </div>

  <!-- Data for receiving end. -->
  <input type="hidden" name="strSubject" value="<?php echo $a['subject']; ?>" />
  <input type="hidden" name="strGoogleSheet" value="<?php echo $a['googlesheet']; ?>" />
  <input type="hidden" name="strUrlForward" value="<?php echo $a['urlforward']; ?>" />

  <!-- Email Address -->
  <div class="form-group">
    <label for="strEmail"><strong>Email Address</strong></label>
    <input type="email" name="strEmail" class="form-control" placeholder="Enter Email Address" required />
  </div>

  <!-- Phone Number -->
  <div class="form-group">
    <label for="strPhone"><strong>Phone Number</strong></label>
    <input type="text" name="strPhone" class="form-control" placeholder="Enter Phone Number" required />
  </div>

  <!-- Your City -->
  <div class="form-group">
    <label for="strCity"><strong>Your City</strong></label>
    <input type="text" name="strCity" class="form-control" placeholder="Enter City" required />
  </div>

  <!-- Your State -->
  <div class="form-group">
    <label for="strState"><strong>Your State</strong></label>
    <input type="text" name="strState" class="form-control" placeholder="Enter State" required />
  </div>

  <!-- CAPTCHA -->
  <div class="text-center" >
    <div class="g-recaptcha" style="display: inline-block;" data-sitekey="6Le-_AMTAAAAALK8HJZy0WyzIKsMp5T1sEvQNIYr"></div>
  </div>

  <!-- Submit -->
  <div class="text-center">
    <button type="submit" class="btn btn-default btn-lg"><?php echo $a['buttontext']; ?></button>
  </div>
</form>		