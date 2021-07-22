<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="otherFiles/thisSite.css">
     <link rel="shortcut icon" type="image/x-icon" href="sitePhotos/login.png">
</head>
<body>
     <form class="indexForm" action="otherFiles/login.php" method="POST">
     	<h2>Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br/>
          <label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
          <button type="submit">Login</button>
          <a href="otherFiles/signup.php" class="ca">Create an account</a>
          
     </form>
</body>
</html>