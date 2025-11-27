<?php
require_once '../auth/check.php';
require_once '../config/db.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];
    try {
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        $message = "Post deleted successfully.";
    } catch (PDOException $e) {
        $error = "Error deleting post: " . $e->getMessage();
    }
}

try {
    $stmt = $pdo->query("SELECT posts.*, categories.title as category_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id ORDER BY posts.created_at DESC");
    $posts = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Error fetching posts: " . $e->getMessage();
}
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-9">
            <h1>Posts</h1>
            <?php if ($message): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <a href="addpost.php" class="btn btn-primary mb-3">Add New Post</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($post['title']); ?></td>
                            <td><?php echo htmlspecialchars($post['category_title'] ?? 'N/A'); ?></td>
                            <td><?php echo $post['status']; ?></td>
                            <td><?php echo $post['created_at']; ?></td>
                            <td>
                                <a href="addpost.php?id=<?php echo $post['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                    <button type="submit" name="delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>