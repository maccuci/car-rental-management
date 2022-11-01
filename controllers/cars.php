<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<table class="table table-secondary table-hover">
    <thead>
        <tr>
            <th class="ps-2">ID</th>
            <th class="ps-2">Modelo</th>
            <th class="col-md-8">Descrição</th>
            <th class="ps-2">Valor</th>
            <th class="ps-2">Opções</th>
        </tr>
    </thead>

    <tbody>
        <?php

        include_once("config.php");

        $query = "SELECT id, model, description, costValue, currentOwnerName FROM cars;";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

        while ($col = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $col["id"] ?></td>
                <td><?php echo $col["model"] ?></td>
                <td>
                    <p class=""><?php echo $col["description"] ?></p>
                </td>
                <td><?php echo 'R$' . number_format($col["costValue"], 2, ',', '.') ?></td>
                <td>
                    <form class="form-outline" action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="renter" class="form-control" placeholder="Locatário" size="2">
                            <input type="submit" name="submit" class="btn btn-dark" value="Alugar"></input>
                            <?php
                            include("config.php");

                            if (isset($_POST['renter'])) {
                                $query = "UPDATE cars SET currentOwnerName= '" . $_POST["renter"] . "' WHERE id= '" . $col["id"] . "'";
                                $result = mysqli_query($connection, $query) or die('Failed: ' . mysqli_error($connection));
                                mysqli_close($connection);
                            }
                            ?>
                        </div>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>