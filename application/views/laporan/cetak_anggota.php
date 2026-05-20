<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Anggota</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 20px;
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
            border: 1px solid black;
            padding: 12px;
            text-align: center;
            background: #f2f2f2;
        }

        table td{
            border: 1px solid black;
            padding: 10px;
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

    </style>

</head>

<body onload="window.print()">

    <h2>Laporan Data Anggota</h2>

    <table>

        <thead>

            <tr>
                <th width="5%">No</th>
                <th width="20%">Nama</th>
                <th width="30%">Email</th>
                <th width="20%">Telepon</th>
                <th width="25%">Alamat</th>
            </tr>

        </thead>

        <tbody>

            <?php $no = 1; foreach($anggota as $a): ?>

            <tr>

                <td class="text-center">
                    <?= $no++; ?>
                </td>

                <td>
                    <?= $a->nama; ?>
                </td>

                <td>
                    <?= $a->email; ?>
                </td>

                <td>
                    <?= $a->telepon; ?>
                </td>

                <td>
                    <?= $a->alamat; ?>
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