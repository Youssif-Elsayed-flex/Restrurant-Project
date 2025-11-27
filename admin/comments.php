<?php
require_once '../auth/check.php';
require_once '../config/db.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    try {
        if ($action === 'approve') {
            $stmt = $pdo->prepare("UPDATE comments SET status = 'approved' WHERE id = ?");
            $stmt->execute([$id]);
            $message = "Comment approved.";
        } elseif ($action === 'reject') {
            $stmt = $pdo->prepare("UPDATE comments SET status = 'rejected' WHERE id = ?");
            $stmt->execute([$id]);
            $message = "Comment rejected.";
        } elseif ($action === 'delete') {
            $stmt = $pdo->prepare("DELETE FROM comments WHERE id = ?");
            $stmt->execute([$id]);
            $message = "Comment deleted.";
        }
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}

try {
    $stmt = $pdo->query("SELECT comments.*, posts.title as post_title FROM comments LEFT JOIN posts ON comments.post_id = posts.id ORDER BY comments.created_at DESC");
    $comments = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Error fetching comments: " . $e->getMessage();
}
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-9">
            <h1>Comments</h1>
            <?php if ($message): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Body</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($comment['post_title'] ?? 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($comment['username']); ?></td>
                            <td><?php echo htmlspecialchars($comment['email']); ?></td>
                            <td><?php echo htmlspecialchars(substr($comment['body'], 0, 50)) . (strlen($comment['body']) > 50 ? '...' : ''); ?></td>
                            <td><?php echo $comment['status']; ?></td>
                            <td>
                                <?php if ($comment['status'] !== 'approved'): ?>
                                    <form method="post" style="display:inline;">
                                        <input type="hidden" name="id" value="<?php echo $comment['id']; ?>">
                                        <input type="hidden" name="action" value="approve">
                                        <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                    </form>
                                <?php endif; ?>
                                <?php if ($comment['status'] !== 'rejected'): ?>
                                    <form method="post" style="display:inline;">
                                        <input type="hidden" name="id" value="<?php echo $comment['id']; ?>">
                                        <input type="hidden" name="action" value="reject">
                                        <button type="submit" class="btn btn-sm btn-warning">Reject</button>
                                    </form>
                                <?php endif; ?>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $comment['id']; ?>">
                                    <input type="hidden" name="action" value="delete">
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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