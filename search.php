<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/pagehead.php';

if ($_GET['q'] && $_GET['q'] != '') {
    $q = $_GET['q'];
    $query = "SELECT * FROM foods WHERE name LIKE ?";
    $stmt = $db->prepare($query);
    $stmt->execute(["%$q%"]);
    $title = "Search result for \"$q\"";
} else {
    header('Location: /');
    exit;
}
?>
<?php require $root . '/inc/header.php'; ?>
</head>

<body>
    <?php include $root . '/inc/navbar.php'; ?>
    <div class="container-md my-4">
        <h1 class="text-center my-3 mb-md-5">Search result for "<?= $q ?>"</h1>
        <?php
        if ($stmt->rowCount() == 0) :
        ?>
            <div class="alert alert-warning" role="alert">
                No result found!
            </div>
        <?php
        endif;
        ?>
        <div class="foodlist">
            <?php
            while ($row = $stmt->fetch()) :
                $id = $row['id'];
                $title = $row['name'];
                $price = $row['price'];
                $img = $row['img'];
            ?>
                <div class="card" data-food-id="<?= $id ?>" data-tilt>
                    <div class="card-img">
                        <img class="img-thumbnail food-img" src="/assets/images/foods/<?= $img ?>" alt="" />
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="food-name"><?= $title ?></h5>
                        </div>
                        <div class="card-text">
                            <div class="mb-2 text-muted food-price"><?= $price ?> Taka</div>
                            <button class="btn btn-primary w-100 add-to-cart">Add to cart</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php include $root . '/inc/footer.php'; ?>
</body>

</html>