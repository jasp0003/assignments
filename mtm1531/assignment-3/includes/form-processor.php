<?php 
$display_thanks = false;
$errors=array();

$name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);

$email =filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

$password=filter_input(INPUT_POST,'password',FILTER_UNSAFE_RAW);

$language =filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING);

$notes =filter_input(INPUT_POST,'notes',FILTER_SANITIZE_STRING);


if($_SERVER['REQUEST_METHOD']== 'POST') {
	if(empty($name)) {
		$errors['name']=true;
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email']=true;
	}
	
	 if (strlen($username) < 1 || strlen($username) > 25){
    $errors['username'] = true;
	 }
	
	if(empty($password)) {
		$errors['password']=true;
	}	
	
	  if (!in_array($language, array('en', 'fr', 'es'))){
    $errors['language'] = true;
	  }
	  if (!isset($_POST['acceptterms'])){
    $errors['acceptterms'] = true;
	  }
	  if (empty($errors)) {
    $display_thanks = true;
    mail($email, 'Thanks for registering', 'Thanks for registering', 'From: Prabhjot Jaspal <jasp0003@algonquinlive.com>\r\n');
  }
	
}

?>