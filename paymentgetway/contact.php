<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//check input field
if (empty($name) || empty($email) || empty($message))
{
   echo ("please fill all the fields");
}
else
{
    mail("harshaldhake21@gmail.com","email form", $message ,"From: $name <$email>");
    echo "<script type='text/javascript'>alert('message sent sucessfully');
   window.history.go(-1);
    </script>";
}

?>