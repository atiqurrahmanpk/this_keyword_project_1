<?php include 'includes/header.php'; ?>

<h1 class="text-center">Contact Us</h1>
<form class="mx-auto" style="max-width: 400px;">
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'includes/footer.php'; ?>
