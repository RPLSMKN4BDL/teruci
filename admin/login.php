<?php
include 'Core/init.php';
if(isset($_SESSION['username']) ){
   header('Location: index.php ');
}

?>
<form method="POST">
	  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = mysqli_query($config, "SELECT * FROM tb_login WHERE username='$username' and password='$password'");
	$c = mysqli_fetch_array($login);
	if ($c['username']) {
 		$_SESSION['username'] = $username;
 echo("<script>location.href = 'index.php';</script>");
	}else{
  ?><p class="btn btn-outline-danger">Username/Password Salah </p><?php
	}

}


?>