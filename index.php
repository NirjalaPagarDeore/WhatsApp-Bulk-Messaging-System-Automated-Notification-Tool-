<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href= "style.css">
  <title>Dashboard Cards</title>

  
</head>

<body>

<div class="container mt-5">

<h4 class="text-center mb-4 fw-bold heading-style">Send Bulk Message to Customer</h4>
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card text-center">
        <img src="customer2.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Add Customer</h5>
          <p class="card-text">Add new customer details easily.</p>
          <a href="add_customer.php" class="btn btn-primary">Add Customer</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card text-center">
        <img src="customer.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">View Customers</h5>
          <p class="card-text">Check all customer records here.</p>
          <a href="view_customer.php" class="btn btn-success">View Customer</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card text-center">
        <img src="send.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Send Message</h5>
          <p class="card-text">Send updates or offers to customers.</p>
          <a href="send.php" class="btn btn-warning">Send Message</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>