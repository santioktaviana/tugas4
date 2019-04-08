
<html>
<head>
<center>
    <h1>DAFTAR NAMA SERTIFIKASI</h1>

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM dt_mhs ORDER BY id DESC");
?>

   
    <title>Data sertifikasi</title>
    

</head>
</html>

<body>


    <table width='80%' border=1>

    <tr>
        <th>Nim</th> <th>NAMA</th> <th>PROGDI</th> <th>UPDATE</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['progdi']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    </center>
    <br>

    <a href="add.php">Tambah data sertifikasi</a><br/><br/>

</body>
</html>