<?php
include 'db.php'; // your DB connection

$id = $_GET['id'];
$status = $_GET['status'];

// Toggle logic
$newStatus = ($status == 1) ? 0 : 1;

// Update query
$stmt = $pdo->prepare("UPDATE customer SET status = ? WHERE id = ?");
$stmt->execute([$newStatus, $id]);

// Redirect back
header("Location: view_customer.php");
exit;
?>