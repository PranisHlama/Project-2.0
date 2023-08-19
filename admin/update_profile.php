<?php
    include '../components/connect.php';

session_start();


$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $update_profile_name = $conn->prepare("UPDATE `admins` SET name = ? WHERE id = ?");
   $update_profile_name->execute([$name, $admin_id]);

   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $prev_pass = $_POST['prev_pass'];
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = sha1($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

    if($old_pass == $empty_pass){
        $message[] = 'please enter old password!';
     }elseif($old_pass != $prev_pass){
        $message[] = 'old password not matched!';
     }elseif($new_pass != $confirm_pass){
        $message[] = 'confirm password not matched!';
     }else{
        if($new_pass != $empty_pass){
           $update_admin_pass = $conn->prepare("UPDATE `admins` SET password = ? WHERE id = ?");
           $update_admin_pass->execute([$confirm_pass, $admin_id]);
           $message[] = 'password updated successfully!';
        }else{
           $message[] = 'please enter a new password!';
        }
     }
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


<!-- admin profile update section start -->
<section class="form-container">

   <form action="" method="post">
      <h3>update profile</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20" required class="box" oninput="this.value = this.value.replace(/\s/g, '')" value="<?= $fetch_profile['name'];?>">
      <input type="password" name="old_pass" placeholder="enter your old password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass"  placeholder="enter your new password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')"> 
      <input type="password" name="confirm_pass"  placeholder="confirm your new password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="update now" class="btn" name="submit">
   </form>

</section>
<!-- admin profile update section stop -->
<!-- custom js file link -->
<script src="../js/admin_script.js"></script>



</body>
</html>