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
    Add Customer
  </h4>
 <!-- Back Button -->
    <div class="mb-3">
      <a href="index.php" class="btn btn-outline-primary">
        <i class="fa-solid fa-arrow-left"></i> Back
      </a>
    </div>
  <!-- Table Card -->
  <div class="card shadow-lg border-0">
    <div class="card-body">

            <form action="customer_crud.php" method="POST" onsubmit="return validateForm()">
      
            <div class="row">
                <div class="mb-3 col-md-6">
    <label for="exampleInputEmail1" class="form-label">Name<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1"  placeholder="Enter Name" required>
   

  </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email">
  </div>

  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword1" class="form-label">Contact<span class="text-danger">*</span></label>
    <input type="number" class="form-control" name="phone"  placeholder="Enter Contact No." required>
  </div>

  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword1" class="form-label">Status<span class="text-danger">*</span></label>
    <select class="form-control" name="status">
        <option value="1">Active</option>
        <option value="0">Deactive</option>
</select>
    
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