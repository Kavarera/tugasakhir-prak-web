<?php
    function statusService($kode){
        require 'koneksi.php';

        $result = mysqli_query($koneksi, 'SELECT status.nama AS "Status Pengerjaan" FROM pemesanan INNER JOIN status ON status.id = id_status WHERE kode = "'.$kode.'"');
        return mysqli_num_rows($result)>0 ? mysqli_fetch_row($result)[0] : "Tidak Ditemukan";
    }
?>