<?php 
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $tnumber = trim($_POST['tnumber']);
    $select = mysqli_query($link, "SELECT * FROM tracking WHERE tracking_number = '$tnumber' ");
    if (mysqli_num_rows($select) > 0) {
        session_start();
        $data = mysqli_fetch_assoc($select);
        $_SESSION['track'] = $tnumber;
        // header("location: track.php");
        echo "<script>window.location.href = 'admintrack.php' </script>";
    }else{
        echo "<script>  alert('Tracking Number Not Found'); history.back();</script>";
    }

}

?>