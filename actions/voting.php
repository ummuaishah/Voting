<?php
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($con, "update 'userdata' set votes='$totalvotes' where id='$gid' ");

$updatestatus=mysqli_query($con, "update 'userdata' set sttaus=1 where id='$uid' ");

if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($con, "Select username, photo, votes, id from 'userdata' where standards='group' ");
    $groups= mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;

    echo '<script>
    alert("Voting Successful !");
    window.location="../partials/dashboard.php"
    </script>';

}else{
    echo '<script>
    alert("Technical error !! Vote after some times");
    window.location="../partials/dashboard.php"
    </script>';
}


?>