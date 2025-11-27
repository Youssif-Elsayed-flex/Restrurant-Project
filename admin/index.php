<?php
require_once '../auth/check.php';
require_once '../config/db.php';

try {
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM posts");
    $posts = $stmt->fetch()['total'];

    $stmt = $pdo->query("SELECT COUNT(*) as total FROM categories");
    $categories = $stmt->fetch()['total'];

    $stmt = $pdo->query("SELECT COUNT(*) as total FROM comments");
    $comments = $stmt->fetch()['total'];

    $stmt = $pdo->query("SELECT COUNT(*) as total FROM users");
    $users = $stmt->fetch()['total'];
} catch (PDOException $e) {
    $error = "Error fetching stats: " . $e->getMessage();
}
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-9">
            <h1>Dashboard</h1>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Posts</h5>
                            <p class="card-text"><?php echo $posts; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Categories</h5>
                            <p class="card-text"><?php echo $categories; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Comments</h5>
                            <p class="card-text"><?php echo $comments; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text"><?php echo $users; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>