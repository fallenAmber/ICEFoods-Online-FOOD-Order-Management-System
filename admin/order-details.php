<?php include __DIR__ . '/inc/header.php'; ?>
<div class="container mt-5">
    <h1>Order Details</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $order_id = $_GET['id'];
                $order = $db->query("SELECT * FROM orders WHERE id = $order_id")->fetch();
                $customer = $db->query("SELECT * FROM customers WHERE id = {$order['cust_id']}")->fetch();
                $order_items = $db->query("SELECT * FROM order_items WHERE order_id = $order_id")->fetchAll();
                foreach ($order_items as $item) {
                    $product = $db->query("SELECT * FROM products WHERE id = {$item['product_id']}")->fetch();
                ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $item['total']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include __DIR__ . '/inc/footer.php'; ?>