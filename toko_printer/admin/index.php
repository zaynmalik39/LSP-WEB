<?php 

session_start();

require '../koneksi.php';

if(!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}





?>


<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h2>Selamat datang di DM STORE</h2>
</div>