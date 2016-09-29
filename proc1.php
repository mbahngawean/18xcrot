<?php
if(isset($_GET['code']))
{
	$code=$_GET['code'];
}
else
{
	die("INSERT YOUR VALID CODE");
}

if ($code ==  "85793")
{
	require_once (dirname(__FILE__) . '/signup.html');
	die;
}
elseif ($code == NULL)
{
	include "index.html";
	echo "<center><h1><label for=\"code\" class=\"label\">Please Enter Valid Code </label></h1></center>";
}
else
{
	include "index.html";
	echo "<center><h1><label for=\"code\" class=\"label\"> Invalid Code. Please Enter Valid Code </label></h1></center>";
}
?>