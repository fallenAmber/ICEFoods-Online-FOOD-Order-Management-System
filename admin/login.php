<?php
include __DIR__ . '/inc/header.php';

if (isset($_SESSION['admin'])) {
    header('Location: ./');
    exit;
}

if (isset($_POST['password'])) {
    if ($_POST['password'] == 'admin') {
        $_SESSION['admin'] = true;
        header('Location: ./');
        exit;
    } else {
        $error = 'Invalid password';
    }
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Admin Login</h5>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap 5 JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>