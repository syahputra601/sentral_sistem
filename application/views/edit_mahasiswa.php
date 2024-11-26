<h2>Edit Mahasiswa</h2>
<form action="<?php echo site_url('mahasiswa/update/'.$mahasiswa->nik); ?>" method="post">
    <label>Nama:</label><br>
    <input type="hidden" name="nik" value="<?php echo $mahasiswa->nik; ?>">
    <input type="text" name="nama" value="<?php echo $mahasiswa->nama; ?>" required><br><br>
    <label>Alamat:</label><br>
    <input type="text" name="alamat" value="<?php echo $mahasiswa->alamat; ?>"><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $mahasiswa->email; ?>"><br><br>
    <label>No Telepon:</label><br>
    <input type="number" name="no_tlp" value="<?php echo $mahasiswa->no_tlp; ?>"><br><br>
    <input type="submit" value="Update">
</form>
<a href="<?php echo site_url('Mahasiswa'); ?>">Back</a>
