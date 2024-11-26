<div>
<center>
<h2>Mahasiswa List</h2>
<a href="<?php echo site_url('Mahasiswa/create'); ?>">Add New Mahasiswa</a>
<table border="1">
    <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs): ?>
    <tr>
        <td><?php echo $mhs->nik; ?></td>
        <td><?php echo $mhs->nama; ?></td>
        <td><?php echo $mhs->alamat; ?></td>
        <td><?php echo $mhs->email; ?></td>
        <td><?php echo $mhs->no_tlp; ?></td>
        <td>
            <a href="<?php echo site_url('mahasiswa/edit/'.$mhs->nik); ?>">Edit</a> |
            <a href="<?php echo site_url('mahasiswa/delete/'.$mhs->nik); ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>

</center>
</div>