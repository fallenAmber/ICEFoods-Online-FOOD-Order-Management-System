<?php
require "header.php";

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "";

if (isset($_POST["install"])) {
  $db_host = htmlentities($_POST["db_host"]);
  $db_user = htmlentities($_POST["db_user"]);
  $db_pass = htmlentities($_POST["db_pass"]);
  $db_name = htmlentities($_POST["db_name"]);


  if (!empty($db_name)) {
    try {
      new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

      copy("dbconfig_sample.php", $dbConfPath);
      file_put_contents($dbConfPath, str_replace("DBHOST", $db_host, file_get_contents($dbConfPath)));
      file_put_contents($dbConfPath, str_replace("DBUSER", $db_user, file_get_contents($dbConfPath)));
      file_put_contents($dbConfPath, str_replace("DBPASS", $db_pass, file_get_contents($dbConfPath)));
      file_put_contents($dbConfPath, str_replace("DBNAME", $db_name, file_get_contents($dbConfPath)));

      require $dbConnPath;
      $db->exec(file_get_contents($dbSQLPath));

      header("Location: index");
    } catch (PDOException $e) {
      $errorMsg =  $e->getMessage();
    }
  } else {
    $errorMsg = "Please enter database name";
  }
}
?>

<div class="container">
  <?php

  if (isset($_GET["step"]) && $_GET["step"] == 2) {
  ?>
    <div id="db_form" class="text-center">

      <form method="POST">
        <div class="form-group">
          <input type="text" name="db_host" value="<?php echo $db_host; ?>" class="form-control" id="host" placeholder="Database Host">
        </div>
        <div class="form-group">
          <input type="text" name="db_user" value="<?php echo $db_user; ?>" class="form-control" id="user" placeholder="Database Username">
        </div>
        <div class="form-group">
          <input type="text" name="db_pass" value="<?php echo $db_pass; ?>" class="form-control" id="pass" placeholder="Database Password">
        </div>
        <div class="form-group">
          <input type="text" name="db_name" value="<?php echo $db_name; ?>" class="form-control" id="name" placeholder="Database Name">
        </div>
        <button type="submit" class="btn btn-success" name="install">Install Database</button>
      </form>
      <br>
      <?php
      if (!empty($errorMsg)) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $errorMsg . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      }
      ?>
    </div>
  <?php
  } else { ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Configuration</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>PHP</td>
          <td>
            <?php

            $error = 0;

            if (phpversion() > 5) {
              echo "<span class='text-success'>" . phpversion() . "</span>";
            } else {
              echo "<span class='text-danger'>" . phpversion() . "</span>";
              $error = 1;
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>Curl</td>
          <td>
            <?php

            if (function_exists("curl_version")) {
              echo "<span class='text-success'>Enabled</span>";
            } else {
              echo "<span class='text-danger'>Disabled</span>";
              $error = 2;
            }
            ?>
          </td>
        </tr>
        <tr class="text-right">
          <td>
            <?php
            if ($error == 0) {
              echo "<a href='?step=2' class='btn btn-outline-info'>Next</a>";
            } else {
              echo "<button type='button' class='btn btn-outline-info' disabled>Next</button>";
            }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  <?php } ?>
</div>
<?php require "footer.php"; ?>