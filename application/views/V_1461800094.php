<!DOCTYPE html>
<html>
<head>
	<title>Soal 5</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<a class="w3-button w3-block w3-teal" href="<?php echo base_url() ?>index.php/C_1461800094/create_view">Tambah Data</a>
	<table class="w3-table w3-centered w3-bordered w3-hoverable w3-large">
    <thead>
        <tr class="w3-light-grey">
            <th> #</th> <th>Nama Barang</th> <th>Kategori</th> <th>Harga Beli</th> 
            <th>Harga Jual</th> <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($read as $row)
    {
        ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->nm_brg;?></td>
        <td><?php echo $row->nm_kat;?></td>
        <td><?php echo $row->harga_beli;?></td>
        <td><?php echo $row->harga_jual;?></td>
        <td><a href="<?php echo base_url() ?>index.php/C_1461800094/edit/<?php echo $row->kd_brg ?>">Ubah</a> | <a href="<?php echo base_url() ?>index.php/C_1461800094/delete/<?php echo $row->kd_brg ?>">Hapus</a></td>
    </tr>
    <?php
            $no++;
    }
        ?>
    </tbody>
	</table>
</body>
</html>