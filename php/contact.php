<?php
// variable Setting
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone=$_REQUEST['phone'];
$msg= $_REQUEST['message'];

$message="Name :".$name."\n". "Email :".$email."\n"."Phone :".$phone."\n"."Message :"."\n\n".$msg;

// check input fields
if(empty($name) || empty($email) || empty($phone) || empty($msg)){
  echo "Please fill all the fields";
}
else{
  // mail(to,subject,message)
  mail("puspendusahoo786@gmail.com","Customar Contact",$message, "From:$name <$email>");
  echo "<script type='text/javascript'>alert('your message successfully');

  // window.history.og(-1);-----> ar mana same page a return hoya jaba

  window.history.go(-1);
  </script>";

}
?>