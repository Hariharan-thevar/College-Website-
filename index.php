<?php
// index.php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIWS College — Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <main class="container mt-4">
    <div class="hero p-4 rounded-3 text-white" style="background-image: url('assets/images/hero.jpg'); background-size: cover; background-position: center;">
      <div class="bg-dark bg-opacity-50 p-4 rounded">
        <h1 class="display-5">Our Programs, Your Future</h1>
        <p class="lead">Choose from undergraduate, postgraduate and doctoral programs designed to prepare you for a successful career.</p>
        <a href="programs.php" class="btn btn-primary">Explore Programs</a>
      </div>
    </div>

    <section class="row mt-4">
      <div class="col-md-8">
        <h2>Academic Announcements</h2>
        <ul class="list-group">
          <li class="list-group-item">Orientation for FYBCom: Lectures start from 23rd June 2025.</li>
          <li class="list-group-item">Digital Marketing Postgraduate Diploma — Admissions Open.</li>
          <li class="list-group-item">Registration open for International Conference: Industry-Academia Connect.</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h2>Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="#">Exam Timetable</a></li>
          <li><a href="#">Academic Calendar</a></li>
          <li><a href="#">Anti-Ragging</a></li>
        </ul>
      </div>
    </section>

    <section class="mt-5">
      <h2>Life @ SIWS</h2>
      <div class="row">
        <div class="col-sm-4">
          <div class="card mb-3">
            <img src="assets/images/amenity1.jpg" class="card-img-top" alt="Health Centre">
            <div class="card-body"><h5 class="card-title">Health Centre</h5></div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card mb-3">
            <img src="assets/images/amenity2.jpg" class="card-img-top" alt="Gymkhana">
            <div class="card-body"><h5 class="card-title">Gymkhana</h5></div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card mb-3">
            <img src="assets/images/amenity3.jpg" class="card-img-top" alt="Counselling Room">
            <div class="card-body"><h5 class="card-title">Counselling Room</h5></div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
