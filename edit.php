<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $progdi=$_POST['progdi'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE dt_mhs SET nim='$nim',nama='$nama',progdi='$progdi' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: client.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM dt_mhs WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $progdi = $user_data['progdi'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="client.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Progdi</td>
                <td><input type="text" name="progdi" value=<?php echo $progdi;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>