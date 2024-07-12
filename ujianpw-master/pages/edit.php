<?php
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k->query("SELECT * FROM admin WHERE id='".$id."'");
    if($data->num_rows == 1)
    {
        $datauser = $data->fetch_assoc();
        ?>
        <form action="editaction.php" method="post">
        <input type="text" id="" name="id" required placeholder="username" value="<?php echo $datauser['id']?>">
		<input type="text" id="" name="nim" required placeholder="username" value="<?php echo $datauser['nim']?>">
        <input type="text" id="" name="nama" required placeholder="nama lengkap" value="<?php echo $datauser['nama']?>">
        <input type="text" id="" name="jeniskelamin" required placeholder="jeniskelamin" value="<?php echo $datauser['jeniskelamin']?>">
        <input type="text" id="" name="alamat" required placeholder="alamat" value="<?php echo $datauser['alamat']?>">
        <input type="text" id="" name="prodi" required placeholder="username" value="<?php echo $datauser['prodi']?>">
        <input type="hidden" id="" name="userid" value="<?php echo $datauser['id']?>">
		<input type="submit" value="Simpan">
	    </form>
        <?php
    }
    else
    {
        echo "data tidak ditemukan";
    }