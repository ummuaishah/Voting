<?php
include('connect.php');

$username=$_POST['username'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
   
    echo '<script>alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
}
//alert not working
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into 'userdata' (username,phone,password,photo,standard,
    status,votes) values('$username', '$phone', '$password', '$image', '$std', 0, 0)";

    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Registration Successful");
        window.location="../";
        </script>'; 
    }else{
        die(mysqli_error($con));
    }
    //alert command not working
}


?>