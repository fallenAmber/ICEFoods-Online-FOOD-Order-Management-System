<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/db/dbconn.php';
$page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">ICEFoods Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'index.php') ? 'active' : '' ?>" href="./">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'orders.php') ? 'active' : '' ?>" href="orders.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'foods.php') ? 'active' : '' ?>" href="foods.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">Customers</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>