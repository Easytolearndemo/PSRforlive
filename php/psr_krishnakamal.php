<?php
// variable Setting
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone=$_REQUEST['phone'];


$message="Name :".$name."\n". "Email :".$email."\n"."Phone :".$phone;

// check input fields
if(empty($name) || empty($email) || empty($phone)){
  echo "Please fill all the fields";
}
else{
  // mail(to,subject,message)
  mail("puspendusahoo786@gmail.com","PSR Krish Kamal Brochure Download",$message, "From:$name <$email>");
  header("refresh:1;url=https://drive.google.com/file/d/1wYEztIcC-CjBJLJ6rnRuB8SOuPhsxy_v/view?usp=sharing");
}
?>