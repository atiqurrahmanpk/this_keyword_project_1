<?php
// JSON ফাইলের পাথ
$file = 'comments.json';

// ফাইল থেকে কমেন্টগুলো পড়া এবং দেখানো
if (file_exists($file)) {
    $comments = json_decode(file_get_contents($file), true);
    
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            echo "<div class='card my-3'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . htmlspecialchars($comment['name']) . "</h5>
                        <p class='card-text'>" . htmlspecialchars($comment['comment']) . "</p>
                        <small class='text-muted'>" . htmlspecialchars($comment['date']) . "</small>
                    </div>
                  </div>";
        }
    } else {
        echo "<p>No comments yet.</p>";
    }
} else {
    echo "<p>No comments yet.</p>";
}
?>
