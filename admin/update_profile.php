<?php
    include '../components/connect.php';

session_start();


$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    


<?php include '../components/admin_header.php'; ?>


<!-- custom js file link -->
<script src="../js/admin_script.js"></script>



</body>
</html>