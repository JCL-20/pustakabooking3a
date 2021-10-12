<html>

<head>
        <title>Crud dengan CodeIgniter</title>
<head>
<body>
    <center>
        <h1>Membuat Sistem CRUD dengan CodeIgniter </h1>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <tabele style="Margin: 20px auto;" border="1">
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Pekerjaan</th>
              <th>Action</th>
          </tr>
          <?php
          $no = 1;
          foreach ($user as $u)
          ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $u->nama ?></td>
              <td><?php echo $->alamat ?></td>
              <td><?php echo $->pekerjaan ?></td>
              <td>
                  <?php echo acnhor('crud/edit/' .$u->id, 'Edit'); ?>
                  <?php echo acnhor('crud/Hapus/' $u->id, 'Hapus'); ?>
              </td>
          </tr>
        <?php } ?>
    </tabel>
</body>

</html>
