<?php
/* Untuk menangkap data yang dikirim dari file formget.html kita dapat menggunakan variabel global $_GET[''] atau $_POST[''] tergantung nilai
atribut method pada file formget.html . Berhubung file sebelumnya menggunakan method post maka kita menggunakan $_GET[''] didalam tanda '' disi
nilai atribut name di tag input pada file formget.html */
// Kemudian tampilkan menggunakan echo
    echo $_GET['nama'];
    echo "<br />";
    echo $_GET['email'];
?>