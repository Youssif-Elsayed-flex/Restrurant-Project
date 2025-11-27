<?php require 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1><a href="index.php" class="text-white text-decoration-none">Blog</a></h1>
        </div>
    </header>
    <main class="container my-4">
        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['message']) . '</div>';
            unset($_SESSION['message']);
        }
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            echo '<div class="alert alert-danger">Invalid post ID.</div>';
            exit;
        }
        $id = (int)$_GET['id'];
        try {
            $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ? AND status = 'published'");
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            if (!$post) {
                echo '<div class="alert alert-danger">Post not found or not published.</div>';
                exit;
            }
            // Increment views
            $pdo->prepare("UPDATE posts SET views = views + 1 WHERE id = ?")->execute([$id]);
            // Display post
            echo '<article>';
            if ($post['image']) {
                echo '<img src="uploads/' . htmlspecialchars($post['image']) . '" class="img-fluid mb-3" alt="Post Image">';
            }
            echo '<h2>' . htmlspecialchars($post['title']) . '</h2>';
            echo '<p class="text-muted">Views: ' . ($post['views'] + 1) . '</p>';
            echo '<div>' . nl2br(htmlspecialchars($post['body'])) . '</div>';
            echo '</article>';
            // Comments
            echo '<h3 class="mt-5">Comments</h3>';
            $stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = ? AND status = 'approved' ORDER BY created_at DESC");
            $stmt->execute([$id]);
            $comments = $stmt->fetchAll();
            if ($comments) {
                foreach ($comments as $comment) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<h6 class="card-title">' . htmlspecialchars($comment['username']) . ' <small class="text-muted">' . htmlspecialchars($comment['email']) . '</small></h6>';
                    echo '<p class="card-text">' . nl2br(htmlspecialchars($comment['body'])) . '</p>';
                    echo '<small class="text-muted">' . htmlspecialchars($comment['created_at']) . '</small>';
                    echo '</div></div>';
                }
            } else {
                echo '<p>No comments yet.</p>';
            }
            // Comment form
            echo '<h4 class="mt-4">Add a Comment</h4>';
            echo '<form method="post">';
            echo '<div class="mb-3"><input type="text" name="username" class="form-control" placeholder="Username" required></div>';
            echo '<div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>';
            echo '<div class="mb-3"><textarea name="body" class="form-control" rows="4" placeholder="Comment" required></textarea></div>';
            echo '<button type="submit" class="btn btn-primary">Submit Comment</button>';
            echo '</form>';
        } catch (PDOException $e) {
            echo '<div class="alert alert-danger">Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $username = trim($_POST['username']);
                $email = trim($_POST['email']);
                $body = trim($_POST['body']);
                if (!$username || !$email || !$body) {
                    throw new Exception('All fields are required.');
                }
                $stmt = $pdo->prepare("INSERT INTO comments (post_id, username, email, body, status) VALUES (?, ?, ?, ?, 'pending')");
                $stmt->execute([$id, $username, $email, $body]);
                $_SESSION['message'] = 'Comment submitted for approval.';
                header("Location: post.php?id=$id");
                exit;
            } catch (Exception $e) {
                echo '<div class="alert alert-danger">Error submitting comment: ' . htmlspecialchars($e->getMessage()) . '</div>';
            }
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>