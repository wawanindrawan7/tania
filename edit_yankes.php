<?php
// including the database connection file
include_once("config.php");

if (isset($_POST['update'])) {
    $no = $_POST['no'];

    $judul = $_POST['judul'];
    $link = $_POST['link'];


    // checking empty fields
    if (empty($judul) || empty($link)) {

        if (empty($judul)) {
            echo "<font color='red'>Judul field is empty.</font><br/>";
        }

        if (empty($link)) {
            echo "<font color='red'>Link field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $sql = "UPDATE tb_yankes SET judul=:judul, link=:link WHERE no=:no";
        $query = $db->prepare($sql);

        $query->bindparam(':no', $no);
        $query->bindparam(':judul', $judul);
        $query->bindparam(':link', $link);
        // $query->bindparam(':email', $email);
        $query->execute();

        // Alternative to above bindparam and execute
        // $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));

        //redirectig to the display page. In our case, it is index.php
        header("Location: sdk.php");
    }
}
?>
<?php
//getting id from url
$no = $_GET['no'];

//selecting data associated with this particular id
$sql = "SELECT * FROM tb_yankes WHERE no=:no";
$query = $db->prepare($sql);
$query->execute(array(':no' => $no));

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $judul = $row['judul'];
    $link = $row['link'];
    // $email = $row['email'];
}
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Website</title>
</head>

<body>
    <?php
    include_once 'navbar.php';
    ?>

    <div class="container">

        <div class="card mt-3">
            <div class="card-header">
                <h3>Edit Yankes</h3>
            </div>
            <div class="card-body">
                <form name="form1" method="post" action="edit_sdk.php">
                    <div class="form-group">
                        <label for="name">Judul</label>
                        <input class="form-control" type="text" name="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="name">Link</label>
                        <input class="form-control" type="text" name="link" placeholder="Link" value="<?php echo $link; ?>" />
                    </div>
                    <td><input type="hidden" name="no" value=<?php echo $_GET['no']; ?>></td>
                    <input type="submit" name="update" value="Update" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
    </div>

</body>

</html>