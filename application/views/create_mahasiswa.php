<h2>Create New Mahasiswa</h2>
<form action="<?php echo site_url('mahasiswa/store'); ?>" method="post">
    <label>NIK:</label><br>
    <input type="text" name="nik" required placeholder="Input NIK"><br><br>
    <label>Nama:</label><br>
    <input type="text" name="nama" required placeholder="Input Nama"><br><br>
    <label>Alamat:</label><br>
    <input type="text" name="alamat"  placeholder="Input Alamat"><br><br>
    <label>Email:</label><br>
    <input type="email" name="email"  placeholder="Input Email"><br><br>
    <label>No Telepon:</label><br>
    <input type="text" name="no_tlp" placeholder="Input No Telepon"><br><br>
    <input type="submit" value="Save">
</form>
<a href="<?php echo site_url('Mahasiswa'); ?>">Back</a>