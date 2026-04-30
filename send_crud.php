<?php
session_start();
require 'db.php';
require 'whatsapp.php';

if($_POST){

    $message = $_POST['message'];

    $students = $pdo->query("SELECT * FROM customer WHERE status = 1");

    foreach($students as $row){

        $phone = "91".$row['phone'];

        sendWhatsApp($phone, $message);

        $stmt = $pdo->prepare("INSERT INTO messages(student_id,message,status) VALUES(?,?,?)");
        $stmt->execute([$row['id'], $message, "sent"]);

        sleep(1);
    }

     $_SESSION['success'] = "Message sent successfully!";

    header("Location: send.php");
    // echo "Campaign Sent!";
}
?>