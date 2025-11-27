<?php
require_once '../auth/check.php';
require_once '../config/db.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $title = trim($_POST['title']);
        if (!empty($title)) {
            try {
                $stmt = $pdo->prepare("INSERT INTO categories (title) VALUES (?)");
                $stmt->execute([$title]);
                $message = "Category added successfully.";
            } catch (PDOException $e) {
                $error = "Error adding category: " . $e->getMessage();
            }
        } else {
            $error = "Title cannot be empty.";
        }
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = trim($_POST['title']);
        if (!empty($title)) {
            try {
                $stmt = $pdo->prepare("UPDATE categories SET title = ? WHERE id = ?");
                $stmt->execute([$title, $id]);
                $message = "Category updated successfully.";
            } catch (PDOException $e) {
                $error = "Error updating category: " . $e->getMessage();
            }
        } else {
            $error = "Title cannot be empty.";
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        try {
            $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
            $stmt->execute([$id]);
            $message = "Category deleted successfully.";
        } catch (PDOException $e) {
            $error = "Error deleting category: " . $e->getMessage();
        }
    }
}

try {
    $stmt = $pdo->query("SELECT * FROM categories ORDER BY created_at DESC");
    $categories = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = "Error fetching categories: " . $e->getMessage();
}
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-9">
            <h1>Categories</h1>
            <?php if ($message): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="post" class="mb-4">
                <div class="input-group">
                    <input type="text" name="title" class="form-control" placeholder="New Category Title" required>
                    <button type="submit" name="add" class="btn btn-primary">Add Category</button>
                </div>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?php echo $category['id']; ?></td>
                            <td><?php echo htmlspecialchars($category['title']); ?></td>
                            <td><?php echo $category['created_at']; ?></td>
                            <td>
                                <button class="btn btn-sm btn-warning" onclick="editCategory(<?php echo $category['id']; ?>, '<?php echo htmlspecialchars($category['title']); ?>')">Edit</button>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                                    <button type="submit" name="delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" id="editId">
                                <input type="text" name="title" id="editTitle" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="edit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function editCategory(id, title) {
    document.getElementById('editId').value = id;
    document.getElementById('editTitle').value = title;
    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

<?php include 'includes/footer.php'; ?>