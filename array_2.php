<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Informasi Dosen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<?php
$Dosen = [
    'nama' => 'Elang Nur Hamdani',
    'mata kuliah' => 'Matematika',
];
?>

<table>
    <tr>
        <th>Nama Dosen</th>
        <th>Mata Kuliah</th>
    </tr>
    <tr>
        <td><?php echo $Dosen['nama']; ?></td>
        <td><?php echo $Dosen['mata kuliah']; ?></td>
    </tr>
</table>

</body>
</html>
