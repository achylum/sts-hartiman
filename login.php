<?php
$username = 12345;
$password = 12345;

//if bercabang
// if ($username == 12345 && $password == 12345) {
//     echo 'berhasil login';
// } elseif ($username == 123 && $password == 12345) {
//     echo "username anda salah";
// } elseif ($username == 12345 && $password == 12344) {
//     echo "password salah";
// } else {
//     echo "username atau password salah";
// }

if ($username == 12345 && $password == 12345) {
    echo "berhasil login. Selamat datang beb^_^";
} else if ($username != 12345 && $password == 12345) {
    echo "username salah";
} else if ($username == 12345 && $password != 12345) {
    echo "password salah";
} else if ($username != 12345 || $password != 12345) {
    echo "username atau password salah";
}
?>
<br>
<a href="dashboard.php">Click here to dashboard</a>