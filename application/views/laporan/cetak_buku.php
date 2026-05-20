<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Buku</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            font-size: 13px;
            margin: 25px;
        }

        h2{
            text-align: center;
            margin-bottom: 30px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th{
            border: 1px solid #000;
            padding: 10px;
            background-color: #f2f2f2;
            text-align: center;
        }

        table td{
            border: 1px solid #000;
            padding: 8px;
            vertical-align: middle;
        }

        .text-center{
            text-align: center;
        }

        .footer{
            width: 250px;
            float: right;
            text-align: center;
            margin-top: 70px;
        }

        .footer p{
            margin-top: 80px;
        }

        @media print{
            body{
                margin: 10px;
            }
        }

    </style>

</head>

<body onload="window.print()">

    <h2>Laporan Data Buku</h2>

    <table>

        <thead>

            <tr>
                <th width="5%">No</th>
                <th width="13%">Kode Buku</th>
                <th width="22%">Judul</th>
                <th width="18%">Penulis</th>
                <th width="12%">Penerbit</th>
                <th width="13%">Tahun</th>
                <th width="7%">Stok</th>
                <th width="10%">Lokasi Rak</th>
            </tr>

        </thead>

        <tbody>

            <?php $no = 1; foreach($buku as $b): ?>

            <tr>

                <td class="text-center">
                    <?= $no++; ?>
                </td>

                <td class="text-center">
                    <?= $b->kode_buku; ?>
                </td>

                <td>
                    <b><?= $b->judul; ?></b>
                </td>

                <td>
                    <?= $b->penulis; ?>
                </td>

                <td>
                    <?= $b->penerbit; ?>
                </td>

                <td class="text-center">
                    <?= $b->tahun; ?>
                </td>

                <td class="text-center">
                    <?= $b->stok; ?>
                </td>

                <td class="text-center">
                    <?= $b->lokasi_rak; ?>
                </td>

            </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    <div class="footer">

        Tangerang, <?= date('d-m-Y'); ?>

        <br><br><br><br>

        (Admin)

    </div>

</body>
</html>