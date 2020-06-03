<?php

session_start();

if (isset($_POST['username'])) {

    include('db_link.php');

    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $passwordenc = md5($password);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";
    // echo $query;
    $result = mysqli_query($conn, $query);
    // echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION['userid'] = $row['id'];
        $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
        $_SESSION['userlevel'] = $row['userlevel'];

        if ($_SESSION['userlevel'] == 'a') {
            header("Location: borrow2.php");
        }

        if ($_SESSION['userlevel'] == 'm') {
            header("Location: borrow2.php");
        }
        /**
         * SELECT * from  user where username='dddjfjdjdj' or 1=1; #' and password='$passwordenc'
         * 
         * $username=dddjfjdjdj' or 1=1; #
         */
    } else {
?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.5.6/sweetalert2.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function(){
                swal({
                    title: 'เกิดข้อผิดพลาด!',
                    text: 'กรุณากรอก e-mail psu และ password ให้ถูกต้อง',
                    icon: 'error'
                }).then((result)=>{
                    window.location.href='index2.php';
                })
            })
        </script>
<?php
        // echo "<script>alert('User หรือ Password ไม่ถูกต้อง');</script>";
    }
} else {
    header("Location: index2.php");
}


?>