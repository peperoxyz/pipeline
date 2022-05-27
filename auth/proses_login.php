<?php

session_start();
include 'koneksi.php';

$username   = $_POST['username'];
$password   = $_POST['password'];

$data       = mysqli_query($koneksi, "SELECT * FROM user where username='$username'");
$row        = mysqli_fetch_array($data);
                if (password_verify($password, $row['password'])) {
                    if (mysqli_num_rows($data)>0) {
                        // echo "Login Berhasil";
                        $_SESSION['userID']     = $row['userID'];
                        $_SESSION['name']       = $row['name'];
                        $_SESSION['username']   = $row['username'];
                        $_SESSION['email']      = $row['email'];
                        $_SESSION['phone']      = $row['phone'];
                        $_SESSION['password']   = $row['password'];
                        //$_SESSION['role']       = $row['role'];
                        
                        ?>
                            <script language="JavaScript">
                            alert('Wellcome to Management Animation Pipeline Application');
                            document.location='../dashboard.php';
                            </script>
                        <?php
                    }
                } else {
                ?>
                    <script language="JavaScript">
                        alert('Sorry, your account is not in our data, please try again !');
                        document.location='../eror-pages.php';
                        </script>
                <?php
                }
                ?>