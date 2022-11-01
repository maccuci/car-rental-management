<?php
$id = $reason = "";
if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

if (isset($_POST["reason"])) {
    $reason = $_POST["reason"];
}

if (!empty($id) and !empty($reason)) {
    include "config.php";

    $id = $_POST["id"];
    $query = "DELETE FROM cars WHERE id='{$id}'";
    $result = mysqli_query($connection, $query) or die('Failed: ' . mysqli_error($connection));

    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container" style="margin-top: 5%; text-align: center;">
        <div class="alert alert-danger">
            <strong>Successo!</strong> O modelo <?php echo $id ?> foi removido!
        </div>
        <form action="../index.php">
            <button class="btn btn-danger">Voltar para o Início</button>
        </form>
    </div>
</body>

</html>