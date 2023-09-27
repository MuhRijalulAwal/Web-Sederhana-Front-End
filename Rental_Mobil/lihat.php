<?php
    echo "<head><title>PESANAN SEWA MOBIL</title></head>";
    echo "<h1 align='center'>TABEL PESANAN</h1>";
    echo "<center>";
    $fp = fopen("pesan.txt","r");
    echo "<table border=1 width=100%>";
    echo "<tr>
        <th>Tanggal</th>
        <th>Mobil</th>
        <th>Email</th>
        <th>Nama</th>
        <th>Nomor</th>
        <th>Bank</th>
        <th>Tunai</th>
    </tr>";

    while ($isi = fgets($fp,200))
    {
        $pisah = explode("|",$isi);
        echo "<tr>
            <td>$pisah[0]</td>
            <td>$pisah[1]</td>
            <td>$pisah[2]</td>
            <td>$pisah[3]</td>
            <td>$pisah[4]</td>
            <td>$pisah[5]</td>
            <td>$pisah[6]</td>
        </tr>";
    }

    echo "</table>";
    echo "</center>"; 
?>