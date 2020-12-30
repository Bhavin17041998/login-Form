

<?php
session_start();

$userinfo = array(
                'admin'=>'1234',
                );

if(isset($_GET['submit'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_POST['login']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}