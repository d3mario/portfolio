<?php

function recover($mode, $email)	{
	$mode		=		sanitize($mode);
	$email		=		sanitize($email);
	
	$user_data 	=		user_data(user_id_from_email($email),'user_id', 'first_name', 'username');
	if ($mode == 'username')	{
		email($email, 'Your username', "Hello ". $user_data['first_name'] . ", \n\nYour username is: " . $user_data['username'] ."\n\n-mobilemodcenter ");

	}	else if($mode == 'password')	{
		$generated_password = substr(md5(rand(999,999999)), 0, 8);
		change_password($user_data['user_id'], $generated_password);
		
		update_user($user_data['user_id'], array('password_recover' =>'1'));
		
	email($email, 'Your password recover', "Hello ". $user_data['first_name'] . ", \n\nYour new password is: " . $generated_password ."\n\n-mobilemodcenter ");
	}
		
}


function answers($update_data)	{
	global $session_user_id;
	$update = array();
	array_walk($update_data, 'array_sanitize');
	
	foreach($update_data as $field=>$data)	{
		$update[] = '`' . $field . '` = \'' . $data . '\'';
	}
	mysql_query("UPDATE `clients` SET ". implode(', ', $update) . " WHERE `user_id` = $session_user_id");
			
}


function update_user($user_id, $update_data)	{
	$update = array();
	array_walk($update_data, 'array_sanitize');
	
	foreach($update_data as $field=>$data)	{
		$update[] = '`' . $field . '` = \'' . $data . '\'';
	}
	mysql_query("UPDATE `clients` SET ". implode(', ', $update) . " WHERE `user_id` = $user_id");
}

function opt_out($email, $email_code)	{
		$email = mysql_real_escape_string($email);
		$email_code = mysql_real_escape_string($email_code);
		if (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `clients` WHERE `email` = '$email' AND `email_code` ='$email_code' AND `opt` = 1"),1) == 0)	{
			mysql_query("DELETE FROM `clients` WHERE `email` = '$email'");
			// query to update user active status
			return true;
		} else {
			return false;	
		}
}



function activate($email, $email_code)	{
		$email = mysql_real_escape_string($email);
		$email_code = mysql_real_escape_string($email_code);
		if (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `clients` WHERE `email` = '$email' AND `email_code` ='$email_code' AND `active` = 0"),0) == 1)	{
			mysql_query("UPDATE `clients` SET `active` = 1 WHERE `email` = '$email'");
			// query to update user active status
			return true;
		} else {
			return false;	
		}
}
function change_password($user_id, $password)	{
	$user_id = (int)$user_id;
	$password = md5($password);
	
	mysql_query("UPDATE `clients` SET `password` = '$password', `password_recover` = 0 WHERE `user_id` = $user_id");	
}

function register_event_user($register_data)	{
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	
	$generated_password = substr(md5(rand(999,999999)), 0, 8);
		
	update_user($user_data['user_id'], array('password_recover' =>'1'));

	
	$fields = '`' . implode('`, `', array_keys ($register_data)) .'`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	
	mysql_query("INSERT INTO `clients` ($fields) VALUES ($data)");
	email ($register_data['email'], 'Activate your account',
	"Hello " . $register_data['first_name']. ",\n\nThanks for registering with the Mobile Mod Center! \n\n
To activate your account use the credentials provided, and click on the link below:\n
		Remember- don't forget to participate in the Scavenger Hunt on the website for your final step towards winning top of the line products! \n\n

	User Name: ". $register_data['email'] ." \n\n
	Password: password \n
	
	 http://mobilemodcenter.com/activate.php?email=" . $register_data['email'] . "&email_code=" . $register_data['email_code'] . " \n\n- Mobile Mod Center Team \n\n \n\n
	If you have recieved this email in error and you wish to opt out please use the link below:\n\n
	http://mobilemodcenter.com/opt-out.php?email=" . $register_data['email'] . "&email_code=" . $register_data['email_code'] . " \n\n- Mobile Mod Center" 
	
	
	);
}



function register_user($register_data)	{
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	
	$fields = '`' . implode('`, `', array_keys ($register_data)) .'`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	mysql_query("INSERT INTO `clients` ($fields) VALUES ($data)");
	email ($register_data['email'], 'Activate your account',
	"Hello " . $register_data['first_name']. ",\n\nThanks for registering with the Mobile Mod Center! \n\n
To activate your account use the credentials provided, and click on the link below:\n
		Remember- don't forget to participate in the Scavenger Hunt on the website for your final step towards winning top of the line products! \n\n

	User Name: ". $register_data['username'] ." \n\n
	
	 http://mobilemodcenter.com/activate.php?email=" . $register_data['email'] . "&email_code=" . $register_data['email_code'] . " \n\n- Mobile Mod Center Team \n\n \n\n
	If you have recieved this email in error and you wish to opt out please use the link below:\n\n
	http://mobilemodcenter.com/opt-out.php?email=" . $register_data['email'] . "&email_code=" . $register_data['email_code'] . " \n\n- Mobile Mod Center" );
}

function user_count()	{
	return mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `clients` WHERE `active` = 1"), 0);	
}


function user_data($user_id)	{
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if($func_num_args > 1)	
	{
		unset($func_get_args[0]);	
		$fields ='`' . implode('`,`', $func_get_args) . '`';
          
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `clients` WHERE user_id = $user_id"));
		
		return $data;
	}
}

function logged_in()	{
	return (isset($_SESSION['user_id'])) ? true : false;	
}
function user_exists($username)	{
	$username = sanitize($username);
	return (mysql_result(mysql_query ("SELECT COUNT(`user_id`) FROM `clients` WHERE `username` = '$username'"), 0) == 1) ? true : false ;
}
function email_exists($email)	{
	$email = sanitize($email);
	return (mysql_result(mysql_query ("SELECT COUNT(`user_id`) FROM `clients` WHERE `email` = '$email'"), 0) == 1) ? true : false ;
	
	
}


function user_active($username)	{
	$username = sanitize($username);
	return (mysql_result(mysql_query ("SELECT COUNT(`user_id`) FROM `clients` WHERE `username` = '$username' AND `active` = 1"), 0) == 1) ? true : false ;

}

function user_id_from_username($username)	{
	$username = sanitize ($username);
	return mysql_result(mysql_query	("SELECT `user_id` FROM `clients` WHERE `username` = '$username'"), 0, 'user_id');
} 

function user_id_from_email($email)	{
	$username = sanitize ($email);
	return mysql_result(mysql_query	("SELECT `user_id` FROM `clients` WHERE `email` = '$email'"), 0, 'user_id');
} 



function login($username, $password)	{
		$user_id = user_id_from_username($username);
		$username = sanitize($username);
		//$password = md5($password);
		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `clients` WHERE `username` ='$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
}


?>
