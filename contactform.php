<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	echo "Thanks you so much for reaching out, $name! <br/>";
	echo "Here is what you submitted to us: <i>$comment</i> <br/>";
	echo "We will reply you at this email: $email <br/>";
}

?>

