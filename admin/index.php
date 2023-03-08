<?php
include __DIR__ . '/inc/header.php';

if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}

$sql = "SELECT COUNT(*) AS total_orders FROM orders";
$total_orders = $db->query($sql)->fetch()['total_orders'];

$sql = "SELECT COUNT(*) AS pending_orders FROM orders WHERE status = 'Pending'";
$pending_orders = $db->query($sql)->fetch()['pending_orders'];

$sql = "SELECT COUNT(*) AS completed_orders FROM orders WHERE status = 'Completed'";
$completed_orders = $db->query($sql)->fetch()['completed_orders'];

$sql = "SELECT COUNT(*) AS total_customers FROM customers";
$total_customers = $db->query($sql)->fetch()['total_customers'];

?>

<div class="container my-md-4 my-3">
  <h1 class="text-center mb-3 mb-md-4">Dashboard</h1>
  <div class="row g-3">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Orders</h5>
          <p class="card-text"><?= $total_orders ?></p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pending Orders</h5>
          <p class="card-text"><?= $pending_orders ?></p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Completed Orders</h5>
          <p class="card-text"><?= $completed_orders ?></p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customers</h5>
          <p class="card-text"><?= $total_customers ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/inc/footer.php'; ?>