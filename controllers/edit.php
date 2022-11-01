<?php
$id = $model = $description = $renter = $costValue = "";
if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

if (isset($_POST["model"])) {
    $model = $_POST["model"];
}

if (isset($_POST["description"])) {
    $description = $_POST["description"];
}

if (isset($_POST["renter"])) {
    $renter = $_POST["renter"];
}

if (isset($_POST["costValue"])) {
    $costValue = $_POST["costValue"];
}

if (!empty($id) and !empty($model) and !empty($description) and !empty($renter) and !empty($costValue)) {
    include "config.php";
    
    $query = "UPDATE cars SET model='{$model}', description='{$description}', currentOwnerName='{$renter}', costValue='{$costValue}' WHERE id='{$id}'";
    $result = mysqli_query($connection, $query) or die('Failed: ' . mysqli_error($connection));
    mysqli_close($connection);
    echo "A {$id} {$model} {$description} {$renter} {$costValue}";
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
        <div class="alert alert-success">
            <strong>Successo!</strong> O modelo <?php echo $model ?> foi editado!
        </div>
        <form action="../index.php">
            <button class="btn btn-success">Voltar para o Início</button>
        </form>
    </div>
</body>

</html>