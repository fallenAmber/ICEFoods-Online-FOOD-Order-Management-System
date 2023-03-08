<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require "config.php";

$dbConfPath = $root . "/" . DBCONFIG_PATH;
$dbConnPath = $root . "/" . DBCONN_PATH;
$dbSQLPath = $root . "/" . DBSQL_PATH;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <title>Install Wizard</title>
  <style>
    #db_form {
      width: 25rem;
      margin: 0 auto;
      margin-top: 85px;
    }

    table {
      margin: 0 auto;
      width: 25px !important;
      margin-top: 125px;
    }
  </style>
</head>

<body>