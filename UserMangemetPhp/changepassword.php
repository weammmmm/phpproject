<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password Form</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="form-container">
    <form method="POST" action="">
    <h3 class="update">change password</h3>
        <input type="password" name="current_password" id="current_password" required required placeholder="enter current_password"><br>

       
        <input type="password" name="new_password" id="new_password" required   placeholder="enter new_password" ><br>

    
        <input type="password" name="confirm_new_password" id="confirm_new_password" required placeholder="enter confirm_new_password"  ><br>

        <input type="submit" value="Change Password"  class="form-btn">
    </form>
    </div>
</body>
</html>
<footer class="footer">
    <p>حقوق النشر &copy; 2023. جميع الحقوق محفوظة.</p>
  </footer>