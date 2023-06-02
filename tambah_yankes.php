<?php require_once("auth.php"); ?>
<?php
require_once("config.php");

if (isset($_POST['yankes'])) {

    // filter data yang diinputkan
    $judul = filter_input(INPUT_POST, 'judul', FILTER_SANITIZE_STRING);
    $link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);



    // menyiapkan query
    $sql = "INSERT INTO tb_yankes (judul, link) 
            VALUES (:judul, :link)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":judul" => $judul,
        ":link" => $link,

    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if ($saved) header("Location: yankes.php");
}

?>

<!DOCTYPE html>
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
    <title>Website</title>
</head>

<body class="bg-light">
    <?php
    include_once 'navbar.php';
    ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Yankes</h3>
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Judul</label>
                        <input class="form-control" type="text" name="judul" placeholder="Judul" />
                    </div>
                    <div class="form-group">
                        <label for="username">Link</label>
                        <input class="form-control" type="text" name="link" placeholder="link" />
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="yankes" value="Save" />

                </form>

            </div>
        </div>
    </div>

</body>

</html>