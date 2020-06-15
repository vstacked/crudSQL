<?php
require 'functions.php';

$id = $_GET['id'];

$data = query("SELECT * FROM datasiswa WHERE id=$id")[0];


if (hapus($id) > 0) {
    echo " 
            <script>                
                alert('Berhasil dihapus');
                document.location.href = 'index.php';
            </script>
            ";
} else {
    echo " 
            <script>
                alert('Gagal dihapus');
                document.location.href = 'index.php';
            </script>
            ";
}
