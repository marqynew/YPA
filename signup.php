<!DOCTYPE html>
<html>
    
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <style>
        body {
            color: white; /* Mengatur warna teks seluruh body menjadi putih */
        }
    </style>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>


<div class="blob"></div>

<div class="wrapper">
    

     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p style="color: white;" class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          
          <div class="input-box">
          <div class="p-3" style="color: white;">Name </div>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
          </div>
		

          <div class="input-box">
          <div class="p-3" style="color: white;">email </div>
          <?php if (isset($_GET['mail'])) { ?>
               <input type="text" 
                      name="mail" 
                      placeholder="email"
                      value="<?php echo $_GET['mail']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="mail" 
                      placeholder="email"><br>
          <?php }?>
          </div>

          <div class="input-box">
          <div class="p-3" style="color: white;">password </div>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>
                 </div>

                 <div class="input-box">
                 <div class="p-3" style="color: white;">re password </div>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
                 </div>
                
     	<button type="submit">Sign Up</button>
          <a href="index.php" class="text-primary">Already have an account? Sign in</a>
          
     </form>
     
          </div>
          <img src="YPAA.jpg" alt="Deskripsi Gambar">
	
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
