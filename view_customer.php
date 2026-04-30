<?php

include 'db.php';
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
    All Customers
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
    <div class="table-responsive">
      <table class="table table-hover align-middle text-center">
        
        <thead class="custom-table-head">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php $total=0; 
          $cust = $pdo->query("SELECT * FROM customer");
 $i = 1;
          foreach($cust as $row){
         
          ?>
          <tr>
            <th><?php echo $i; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
           <td>
    <a href="status_toggle.php?id=<?php echo $row['id']; ?>&status=<?php echo $row['status']; ?>">
    <button class="btn btn-sm <?php echo ($row['status']==1)?'btn-success':'btn-danger'; ?>">
        <?php echo ($row['status']==1)?'Active':'Inactive'; ?>
    </button>
</a>
</td>

           <td>
  <a href="edit_customer.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">
    <i class="fa-solid fa-pen"></i>
  </a>
  
  <button class="btn btn-sm btn-danger">
    <i class="fa-solid fa-trash"></i>
  </button>
</td>
          </tr> 
         <?php $i++;
        
         } $total= $total+ $row['id']; ?> 
         
        </tbody>
        <tfoot>
  <tr>
    <th colspan="4" class="text-center">Total Customers:</th>
    <th><?php echo $total; ?></th>
    <th></th>
  </tr>
</tfoot>
      </table>
</div>
    </div>
  </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>