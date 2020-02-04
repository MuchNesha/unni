<html>

<head>
    <title>Cetak PDF</title>
    <style>
        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 630px;
        }

        table td {
            word-wrap: break-word;
            width: 20%;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Laporan Penjualan HijabbyHumairah</h1>

    <b><?php echo $ket; ?></b><br /><br />

    <table border="1" cellpadding="8">
        <tr>
            <th>Tanggal</th>
            <th>Kode Transaksi</th>
            <th>harga total</th>
            <th>berat total</th>
            <th>catatan pengiriman</th>
            <th>status pemesanan</th>

        </tr>

        <?php
        if (!empty($transaksi)) {
            $no = 1;
            foreach ($transaksi as $data) {
                $tanggal = date('d-m-Y', strtotime($data->tanggal));

                echo "<tr>";
                echo "<td>" . $tanggal . "</td>";
                echo "<td>" . $data->id_transaksi . "</td>";
                echo "<td>" . $data->harga_total . "</td>";
                echo "<td>" . $data->berat_total . "</td>";
                echo "<td>" . $data->catatan_pengiriman . "</td>";
                echo "<td>" . $data->status_pemesanan . "</td>";
                echo "</tr>";
                $no++;
            }
        }
        ?>
    </table>
</body>

</html>