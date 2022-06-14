<?php
if(isset($_REQUEST['submit'])){
   $email=$_POST['email'];
   if($name == null){
     //header("location:email.html");
     echo "<b>Name can not be Null</b>";
   }
   else if($email==[]){
    header ("location:email.html?sucess");
   }

}
?> 