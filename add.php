<html>
<head>
    <title>Tambah data sertifikasi</title>
</head>

<body>
    <a href="client.php">Kembali</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Progdi</td>
                <td><input type="text" name="progdi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
       $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $progdi= $_POST['progdi'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO dt_mhs(nim,nama,progdi) VALUES('$nim','$nama','$progdi')");

        // Show message when user added
        echo "User added successfully. <a href='client.php'>View Users</a>";
    }
    ?>
</body>
</html>