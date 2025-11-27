<?php require 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1>Blog</h1>
        </div>
    </header>
    <main class="container my-4">
        <div class="row">
            <?php
            try {
                $stmt = $pdo->query("SELECT id, title, body, image FROM posts WHERE status='published' ORDER BY created_at DESC");
                while ($post = $stmt->fetch()) {
                    $excerpt = substr($post['body'], 0, 200) . '...';
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    if ($post['image']) {
                        echo '<img src="uploads/' . htmlspecialchars($post['image']) . '" class="card-img-top" alt="Post Image">';
                    }
                    echo '<div class="card-body d-flex flex-column">';
                    echo '<h5 class="card-title">' . htmlspecialchars($post['title']) . '</h5>';
                    echo '<p class="card-text flex-grow-1">' . htmlspecialchars($excerpt) . '</p>';
                    echo '<a href="post.php?id=' . $post['id'] . '" class="btn btn-primary mt-auto">Read More</a>';
                    echo '</div></div></div>';
                }
            } catch (PDOException $e) {
                echo '<div class="alert alert-danger">Error loading posts: ' . htmlspecialchars($e->getMessage()) . '</div>';
            }
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>