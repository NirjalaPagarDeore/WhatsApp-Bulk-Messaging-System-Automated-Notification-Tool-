<?php
include 'db.php';

// For testing (remove later)
// print_r($_POST); exit;

if (isset($_POST['save'])) {

    $stmt = $pdo->prepare("INSERT INTO customer(name, phone, email, status) VALUES (?, ?, ?,?)");
    
    $stmt->execute([
        $_POST['name'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['status']
    ]);

    header('location:view_customer.php');

}


// edit cust

if (isset($_POST['update'])) {

    $stmt = $pdo->prepare("UPDATE customer SET name= ?, phone = ?, email = ?, status = ? WHERE id = ?" );
    
    $stmt->execute([
        $_POST['name'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['status'],
        $_POST['id']
    ]);

    header('location:view_customer.php');

}
?>