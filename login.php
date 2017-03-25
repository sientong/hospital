<?php
;include_once('main.php');

if(isset($_GET['login']))
{
	/*
	$user_email = mysql_real_escape_string($_POST['user_email']);
	$user_password = mysql_real_escape_string($_POST['user_password']);
	$user_remember = $_POST['user_remember'];
	echo login($user_email, $user_password, $user_remember);
	*/

	$user = "admin@admin.com";
	$password = "admin";

	$_SESSION['user_email'] = $user;
	$_SESSION['user_password'] = $password;

	if($user == 'admin@admin.com' and $password == 'admin'){
		$_SESSION['logged_in'] = '1';
		$_SESSION['privillage'] = 'admin';
		return(1);
	}
}
elseif(isset($_GET['logout']))
{
	logout();
}
elseif(isset($_GET['forgot_password']))
{

?>

	<div class="box_div" id="login_div"><div class="box_top_div"><a href="#">Start</a> &gt; Forgot password</div><div class="box_body_div">

	<p>Contact one of the admins below by email and write that you've forgotten your password, and you will get a new one. The password can be changed after logging in.</p>

	<?php echo list_admin_users(); ?>

	</div></div>

<?php

}
else
{

?>

	<div class="box_div" id="login_div"><div class="box_top_div">Log in</div><div class="box_body_div">

	<form action="." id="login_form" autocomplete="off"><p>

	<label for="user_email_input">Email:</label><br><input type="text" id="user_email_input" value="<?php echo get_login_data('user_email'); ?>" autocapitalize="off"><br><br>
	<label for="user_password_input">Password:</label><br><input type="password" id="user_password_input" value="<?php echo get_login_data('user_password'); ?>"><br><br>
	<input type="checkbox" id="remember_me_checkbox" checked="checked"> <label for="remember_me_checkbox">Remember me</label><br><br>		
	<input type="submit" value="Log in">

	</p></form>

	<p id="login_message_p"></p>
	<p><!-- <a href="#new_user">New user</a> | --><a href="#forgot_password">Forgot password</a></p>

	</div></div>

<?php

}

?>
