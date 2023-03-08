<?php include __DIR__ . '/inc/header.php'; ?>
<div class="container mt-5">
  <h1>Orders</h1>
  <p>View and manage all orders here.</p>
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Customer</th>
          <th scope="col">Total</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $orders = $db->query("SELECT * FROM orders")->fetchAll();
        foreach ($orders as $order) {
          $customer = $db->query("SELECT * FROM customers WHERE id = {$order['cust_id']}")->fetch();
        ?>
          <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $customer['full_name']; ?></td>
            <td><?php echo $order['total_amount']; ?></td>
            <td><?php echo $order['status']; ?></td>
            <td>
              <a href="./order-details.php?id=<?php echo $order['id']; ?>" class="btn btn-primary btn-sm">View</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?php include __DIR__ . '/inc/footer.php'; ?>