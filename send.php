<?php
session_start();

if (isset($_SESSION['success'])) {
    echo '<div class="alert alert-success text-center">
            '.$_SESSION['success'].'
          </div>';

    unset($_SESSION['success']); // remove after showing
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href= "style.css">
  <title>Bulk Message</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
</head>

<body>
<div class="customer-page">
<div class="container mt-5">

  <!-- Heading -->
  <h4 class="text-center mb-4 fw-bold heading-style">
    Send Message
  </h4>
   <!-- Back Button -->
    <div class="mb-3">
      <a href="index.php" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-left"></i> Back
      </a>
    </div>
  <!-- form Card -->
  <div class="card shadow-lg border-0">
    
    <div class="card-body">

            <form action="send_crud.php" method="POST">
      
            <div class="row">
                <div class="mb-3 col-md-12">
    <label for="exampleInputEmail1" class="form-label">Message<span class="text-danger">*</span></label>
    <textarea type="text" class="form-control" name="message" id="exampleInputEmail1"  placeholder="Enter Message"></textarea>
   
  </div>

            </div>
  
  
 
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>

    </div>
  </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>