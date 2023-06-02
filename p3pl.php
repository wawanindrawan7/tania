<?php require_once("auth.php"); ?>

<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Home</title>
</head>

<body>

    <?php
    include_once 'navbar.php';
    ?>

    <div class="container">
        <h2>DATA P3PL</h2>
        <br>
        <?php
        if ($_SESSION["user"]["role"] == "admin") {
        ?>
            <a href="tambah_p3pl.php" class="btn btn-success">Tambah Data</a>

        <?php } ?>

        <hr>
        <table id="data" class="table table-striped table-bordered">
            <thead>
                <th>No</th>
                <th> judul</th>
                <th>link</th>
                <?php
                if ($_SESSION["user"]["role"] == "admin") {
                ?>
                    <th>Action</th>
                <?php } ?>
            </thead>
            <tbody>
                <?php
                include_once 'config.php';
                $no = 1;
                $sql = $db->prepare("SELECT * FROM tb_p3pl");
                $sql->execute();
                while ($rows = $sql->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $rows['judul'] ?></td>
                        <td><a href="<?= $rows['link'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                        <?php
                        if ($_SESSION["user"]["role"] == "admin") {
                        ?>

                            <td>
                                <a href="edit_p3pl.php?no=<?php echo $rows['no'] ?>" class="btn btn-warning">Edit</a>
                                <a href="delete_p3pl.php?no=<?php echo $rows['no'] ?>" class="btn btn-danger mt-2">Hapus</a>
                            </td>

                        <?php } ?>


                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>