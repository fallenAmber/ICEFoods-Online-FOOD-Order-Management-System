<?php
require "header.php";

if (!file_exists($dbConfPath)) {
  header("Location: install");
  die();
}
?>

<div class="text-center">
  <h1>Installed!</h1>
  <a href="/" class="btn btn-primary">Go to Homepage</a>
</div>

<?php
require "footer.php";
?>