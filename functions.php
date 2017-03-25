<?php

// Configuration

function get_configuration($data)
{
	$query = mysql_query("SELECT * FROM " . global_mysql_configuration_table)or die('<span class="error_span"><u>MySQL error:</u> ' . htmlspecialchars(mysql_error()) . '</span>');
	$configuration = mysql_fetch_array($query);
	return($configuration[$data]);
}

// Password

function random_password()
{
	$password = rand('1001', '9999');
	return $password;
}

function encrypt_password($password)
{
	$password = crypt($password, '$1$' . global_salt);
	return($password);
}

function add_salt($password)
{
	$password = '$1$' . substr(global_salt, 0, -1) . '$' . $password;
	return($password);
}

function strip_salt($password)
{
	$password = str_replace('$1$' . substr(global_salt, 0, -1) . '$', '', $password);
	return($password);	
}

// Login

function get_login_data($data)
{
	if($data == 'user_email' && isset($_COOKIE[global_cookie_prefix . '_user_email']))
	{
		return($_COOKIE[global_cookie_prefix . '_user_email']);
	}
	elseif($data == 'user_password' && isset($_COOKIE[global_cookie_prefix . '_user_password']))
	{
		return($_COOKIE[global_cookie_prefix . '_user_password']);
	}
}

function login($user_email, $user_password, $user_remember)
{
	$user_password_encrypted = encrypt_password($user_password);
	$user_password = add_salt($user_password);
	
	$query = mysql_query("SELECT * FROM " . global_mysql_users_table . " WHERE user_email='$user_email' AND user_password='$user_password_encrypted' OR user_email='$user_email' AND user_password='$user_password'")or die('<span class="error_span"><u>MySQL error:</u> ' . htmlspecialchars(mysql_error()) . '</span>');

	if(mysql_num_rows($query) == 1)
	{
			$user = mysql_fetch_array($query);

			$_SESSION['user_id'] = $user['user_id'];
			$_SESSION['user_is_admin'] = $user['user_is_admin'];
			$_SESSION['user_email'] = $user['user_email'];
			$_SESSION['user_name'] = $user['user_name'];
			$_SESSION['user_reservation_reminder'] = $user['user_reservation_reminder'];
			$_SESSION['logged_in'] = '1';

			if($user_remember == '1')
			{
				$user_password = strip_salt($user['user_password']);

				setcookie(global_cookie_prefix . '_user_email', $user['user_email'], time() + 3600 * 24 * intval(global_remember_login_days));
				setcookie(global_cookie_prefix . '_user_password', $user_password, time() + 3600 * 24 * intval(global_remember_login_days));
			}

			return(1);
	}
}

function check_login()
{
	if(isset($_SESSION['logged_in']))
	{
		$user_id = $_SESSION['user_id'];
		$query = mysql_query("SELECT * FROM " . global_mysql_users_table . " WHERE user_id='$user_id'")or die('<span class="error_span"><u>MySQL error:</u> ' . htmlspecialchars(mysql_error()) . '</span>');

		if(mysql_num_rows($query) == 1)
		{
			return(true);
		}
		else
		{
			logout();
			echo '<script type="text/javascript">window.location.replace(\'.\');</script>';
		}
	}
	else
	{
		logout();
		echo '<script type="text/javascript">window.location.replace(\'.\');</script>';
	}
}

function logout()
{
	session_unset();
	setcookie(global_cookie_prefix . '_user_email', '', time() - 3600);
	setcookie(global_cookie_prefix . '_user_password', '', time() - 3600);
}

?>