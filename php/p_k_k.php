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
  mail("puspendusahoo786@gmail.com","Enquire Now from PSR KRISH KAMAL!!",$message, "From:$name <$email>");
  echo "<script type='text/javascript'>alert('your message successfully');

  // window.history.go(-1);-----> ar mana same page a return hoya jaba

  window.history.go(-1);
  </script>";

}
?>