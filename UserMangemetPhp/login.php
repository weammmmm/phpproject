<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
       
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">

         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="signup.php">register now</a></p>
         <div class="input-group">
            <div class="checkbox">
               <label>
                  <input type="checkbox" id="remember" name="remember" <?php if (isset($_COOKIE["loginId"])) { ?> checked
                     <?php } ?>> Remember me
               </label>
               <label><a href="forget_password.php">Forget your password</a></label>
            </div>
         </div>
      </form>

   </div>

</body>

</html>
<?php include 'footer.php';
?>