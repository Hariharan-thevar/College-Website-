<?php include 'header.php'; ?>
<main class="container mt-4">
  <h1>Contact</h1>
  <form action="" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Send</button>
  </form>
</main>
<?php include 'footer.php'; ?>
