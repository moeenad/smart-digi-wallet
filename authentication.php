<?php
include ('connection.php');
if(isset($_POST["login"])) {
    $username = stripcslashes($_POST["userName"]);
    $password = stripcslashes($_POST["password"]);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * FROM customer WHERE email='$username' and password='$password'";
    $resultSet = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($resultSet);
    if($count == 1){
        $row = mysqli_fetch_assoc($resultSet);
        $fullname = $row['firstName'] . ' ' . $row['lastName'];
        $customerId = $row['customerId'];
        session_start();
        $_SESSION['fullname'] = $fullname;
        header('Location:dashboard.php');
        // echo $fullname;
        // echo $customerId;
    } else {
        header('Location:login.php');
    }
} else {
    echo "user is not authenticated";
}
?>