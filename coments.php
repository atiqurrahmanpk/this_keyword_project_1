<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container my-5">
    <h2 class="text-center">Leave a Comment</h2>

    <!-- Comment Form -->
    <form id="commentForm" method="POST" class="my-4">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Comment</label>
            <textarea name="comment" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>

    <!-- Display Comments -->
    <div id="commentsSection">
        <h4>Comments</h4>
        <div id="commentsList">
            <!-- Existing comments will be displayed here -->
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        loadComments();

        // AJAX দিয়ে কমেন্ট সাবমিট
        $('#commentForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'submit_comment.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    $('#commentForm')[0].reset(); // ফর্ম রিসেট করা
                    loadComments(); // কমেন্ট লোড করা
                }
            });
        });

        // AJAX দিয়ে কমেন্ট লোড করা
        function loadComments() {
            $.ajax({
                url: 'load_comments.php',
                type: 'GET',
                success: function(data) {
                    $('#commentsList').html(data); // কমেন্ট দেখানো
                }
            });
        }
    });
</script>
</body>
</html>
