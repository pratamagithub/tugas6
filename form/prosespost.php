<?php
/* Untuk menangkap data yang dikirim dari file formpost.html kita dapat menggunakan variabel global $_GET[''] atau $_POST[''] tergantung nilai
atribut method pada file formpost.html . Berhubung file sebelumnya menggunakan method post maka kita menggunakan $_POST[''] didalam tanda '' disi
nilai atribut name di tag input pada file formpost.html */
// Kemudian tampilkan menggunakan echo
    echo $_POST['nama'];
    echo "<br />";
    echo $_POST['email'];
?>