<?php
// JSON ফাইলের পাথ
$file = 'comments.json';

// POST ডেটা সংগ্রহ
$name = $_POST['name'];
$comment = $_POST['comment'];

// নতুন কমেন্ট অ্যারে তৈরি করা
$newComment = [
    'name' => htmlspecialchars($name),
    'comment' => htmlspecialchars($comment),
    'date' => date("Y-m-d H:i:s")
];

// ফাইল থেকে কমেন্টগুলো পড়া
if (file_exists($file)) {
    $comments = json_decode(file_get_contents($file), true);
} else {
    $comments = [];
}

// নতুন কমেন্ট অ্যারে-তে যোগ করা
$comments[] = $newComment;

// আপডেটেড কমেন্টগুলো JSON ফাইল হিসেবে সংরক্ষণ করা
file_put_contents($file, json_encode($comments, JSON_PRETTY_PRINT));

echo "Comment added successfully!";
?>
