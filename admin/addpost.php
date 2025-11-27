<?php
require_once '../auth/check.php';
require_once '../config/db.php';

$message = '';
$error = '';
$post = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        $post = $stmt->fetch();
    } catch (PDOException $e) {
        $error = "Error fetching post: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $category_id = $_POST['category_id'];
    $body = trim($_POST['body']);
    $status = $_POST['status'];
    $image = '';

    if (empty($title) || empty($body)) {
        $error = "Title and body are required.";
    } else {
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileType = $_FILES['image']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
            if (in_array($fileExtension, $allowedfileExtensions) && $fileSize < 2000000) {
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                $uploadFileDir = '../uploads/';
                $dest_path = $uploadFileDir . $newFileName;

                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    $image = $newFileName;
                } else {
                    $error = "Error uploading image.";
                }
            } else {
                $error = "Invalid file type or size.";
            }
        }

        if (!$error) {
            try {
                if ($post) {
                    // Update
                    $stmt = $pdo->prepare("UPDATE posts SET title = ?, category_id = ?, body = ?, image = ?, status = ? WHERE id = ?");
                    $stmt->execute([$title, $category_id, $body, $image ?: $post['image'], $status, $post['id']]);
                    $message = "Post updated successfully.";
                } else {
                    // Insert
                    $stmt = $pdo->prepare("INSERT INTO posts (title, category_id, body, image, status, user_id) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->execute([$title, $category_id, $body, $image, $status, $_SESSION['user_id']]);
                    $message = "Post added successfully.";
                }
                header('Location: posts.php');
                exit;
            } catch (PDOException $e) {
                $error = "Error saving post: " . $e->getMessage();
            }
        }
    }
}

try {
    $stmt = $pdo->query("SELECT * FROM categories");
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
            <h1><?php echo $post ? 'Edit Post' : 'Add Post'; ?></h1>
            <?php if ($message): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo htmlspecialchars($post['title'] ?? ''); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['id']; ?>" <?php echo ($post && $post['category_id'] == $category['id']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($category['title']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" id="body" class="form-control" rows="10" required><?php echo htmlspecialchars($post['body'] ?? ''); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    <?php if ($post && $post['image']): ?>
                        <img src="../uploads/<?php echo $post['image']; ?>" alt="Current Image" class="mt-2" style="max-width: 200px;">
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="draft" <?php echo ($post && $post['status'] == 'draft') ? 'selected' : ''; ?>>Draft</option>
                        <option value="published" <?php echo ($post && $post['status'] == 'published') ? 'selected' : ''; ?>>Published</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo $post ? 'Update Post' : 'Add Post'; ?></button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>