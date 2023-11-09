<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lOGIN</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

    <img src="YPA.jpg" alt="Deskripsi Gambar">
<div class="blob">
</div>
<div class="wrapper special-wrapper">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p style="color: white;" class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		 <div class="input-box">
		 <div class="col-6">
		 <div class="p-3" style="color: white;">email </div>
     	<input type="text" name="mail" placeholder="email"><br>
		 </div>
		 </div>
		 
		 <div class="input-box">
		 <div class="col-6">
		 <div class="p-3" style="color: white;">password </div>
     	<input type="password" name="password" placeholder="Password"><br>
		 </div>
		 </div>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</div>
	 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
