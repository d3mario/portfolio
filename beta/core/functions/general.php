<?php
/*function image()
{
$result = mysql_query("SELECT * FROM my_clients ORDER BY id")  or die(mysql_error()); 
 
  while($row = mysql_fetch_array($result))
  {
	echo "<img class=\"website-comps\" src=\"images/".$row['portfolio-thumbnail']."\"alt=\"".$row['portfolio-thumbnail-alt-description'].""."\">";
  }

}
*/

function email($to, $subject, $body)	{
		mail($to, $subject, $body, 'From:info@mobilemodcenter.com');
}

function logged_in_redirect()	{
	if(logged_in() === true)	{
		header('Location: index.php ');
		exit();	
	}
}

function protect_page()	{
	if (logged_in() === false)	{
		header('Location: protected.php');
		exit();
	}
}
function pageError(){
    header('Location: case-study.php?error');
    exit();
}
function array_sanitize(&$item)	{
	$item = mysqli_real_escape_string($item);
}

function sanitize($data)	{
	return mysqli_real_escape_string($data);
}

function output_errors($errors)	{	
	return '<ul id="errors"><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

function output_login_errors($errors)	{	
	return implode($errors);
//'<ul id="errors"><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>