<?php
session_start();
$name='';
$email='';
$phone='';
$password='';
$password1='';
$password2='';
$errors=array();

//connect to the Database
$db=mysqli_connect('localhost','root','','HealthcareChatbot');

//If the create account button is clicked
if(isset($_POST['createAccount'])){
  $name=mysqli_real_escape_string($db,$_POST['name']);
  $email=mysqli_real_escape_string($db,$_POST['email1']);
  $phone=mysqli_real_escape_string($db,$_POST['phone']);
  $password1=mysqli_real_escape_string($db,$_POST['pwd1']);
  $password2=mysqli_real_escape_string($db,$_POST['pwd2']);

  //Ensuring that form fields are filled properly
  if(empty($name)){
    array_push($errors,"Name is required."); //Add error to errors array
  }
  if(empty($email)){
    array_push($errors,"Email is required."); //Add error to errors array
  }
  if(empty($phone)){
    array_push($errors,"Mobile No. is required."); //Add error to errors array
  }
  if(empty($password1)){
    array_push($errors,"Password is required."); //Add error to errors array
  }
  if($password1 != $password2){
    array_push($errors,"The two passwords do not match."); //Add error to errors array
  }

  $emailQuery=mysqli_query($db,"SELECT * FROM user WHERE email_id='$email'");

  if(mysqli_num_rows($emailQuery)>0){
    array_push($errors,"Email already exists.");
  }

  //If there are no errors save user to Database
  if(count($errors) == 0){
    // $password=md5($password1);  //Encripting password before storing in database
    $sql="INSERT INTO user VALUES('$name','$email',$phone,'$password1')";
    mysqli_query($db,$sql);
    $_SESSION['full_name']=$name;
    $_SESSION['success']="You are now logged in";
    header('location: chat.php');  //redirect to home page
  }

  //Log User in from login page


  //Logout
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['full_name']);
    header('location: index.php');
  }
}

if(isset($_POST['login'])){
  $email=mysqli_real_escape_string($db,$_POST['email1']);
  $password=mysqli_real_escape_string($db,$_POST['pwd1']);

  //Ensuring that form fields are filled properly
  if(empty($email)){
    array_push($errors,"Email is required."); //Add error to errors array
  }
  if(empty($password)){
    array_push($errors,"Password is required."); //Add error to errors array
  }

  if(count($errors) == 0){
    // $password=md5($password);  //Encripting password before comparing with database
    $query="SELECT * FROM user WHERE email_id='$email' AND password='$password'";
    $result=mysqli_query($db,$query);

    $query2="SELECT * FROM user WHERE email_id='$email' AND password='$password'";
    $result2=mysqli_query($db,$query2);
    $result3=mysqli_fetch_object($result2);

    if(mysqli_num_rows($result)==1){
      //log user in
      $_SESSION['full_name']=$result3->full_name;
      $_SESSION['email_id']=$result3->email_id;
      $_SESSION['mobile_no']=$result3->mobile_no;
      $_SESSION['password']=$result3->password;
      $_SESSION['success']="You are now logged in";
      header('location: chat.php');  //redirect to Chat page
    }else{
      array_push($errors,"Username or Password incorrect");
    }
  }
}

if(isset($_POST['update'])){
    $data = array();
    $data[0]=mysqli_real_escape_string($db,$_POST['name']);
    $data[1]=mysqli_real_escape_string($db,$_POST['email1']);
    $data[2]=mysqli_real_escape_string($db,$_POST['phone']);
    $data[3]=mysqli_real_escape_string($db,$_POST['pwd1']);
    $data[4]=mysqli_real_escape_string($db,$_POST['pwd2']);

    //Ensuring that form fields are filled properly
    if(empty($data[0])){
      array_push($errors,"Name is required."); //Add error to errors array
    }
    if(empty($data[1])){
      array_push($errors,"Email is required."); //Add error to errors array
    }
    if(empty($data[2])){
      array_push($errors,"Mobile No. is required."); //Add error to errors array
    }
    if(empty($data[3])){
      array_push($errors,"Password is required."); //Add error to errors array
    }
    if($data[3] != $data[4]){
      array_push($errors,"The two passwords do not match."); //Add error to errors array
    }

    if(count($errors) == 0){
    $update_Query = "UPDATE user SET full_name='$data[0]',email_id='$data[1]',mobile_no=$data[2],password='$data[3]' WHERE email_id = '$data[1]'";
    mysqli_query($db,$update_Query);
    }
}
 ?>
