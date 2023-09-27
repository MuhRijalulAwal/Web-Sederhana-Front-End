<?php
    $tanggal    = date("Y - m - d");
    $nama       =$_POST['nama'];
    $email      =$_POST['email'];
    $nomor      =$_POST['nomor'];
    $bank       =$_POST['bank'];
    $tunai      =$_POST['tunai'];
    $mobil      =$_POST['mobil'];
    $fp         = fopen("pesan.txt","a+");
    fputs($fp,"$tanggal|$mobil|$email|$nama|$nomor|$bank|$tunai\n");
    fclose($fp);

    echo "Terima Kasih, Pesanan Anda Telah Dibuat<br>";
    echo "Informasi Lanjut Akan Dikontak Melalui Whatsapp/Telpon/SMS<br>";
?>