<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <title>Alugue seu Carro</title>
</head>

<body>
    <div class="text-center">
        <h1 class="center-text">Carros de Alguel</h1>
    </div>

    <div class="text-center">
        <a id="list-cars" class="menu text-decoration-none fs-5 mt-2 ps-2 btn btn-outline-dark">Carros</a>
        <span><a id="add-car" class="menu text-decoration-none fs-5 mt-2 ms-2 ps-2 btn btn-outline-dark">Adicionar Carro</a></span>
        <span><a id="edit-car" class="menu text-decoration-none fs-5 mt-2 ms-2 ps-2 btn btn-outline-dark">Editar Carro</a></span>
        <span><a id="delete-car" class="menu text-decoration-none fs-5 mt-2 ms-2 ps-2 btn btn-outline-dark">Remover Carro</a></span>
        <span><a id="pay-rental" class="menu text-decoration-none fs-5 mt-2 ms-2 ps-2 btn btn-outline-dark">Pagar Aluguel</a></span>
    </div>

    <br><br>

    <div id="div-cars">
        <div class="fs-3 text">
            <p class="text-center">Nossa lista de carros disponíveis</p>
        </div>
        <div class="fs-5">
            <?php include("./controllers/cars.php") ?>
        </div>
    </div>

    <div id="div-add-car">
        <fieldset id="add-car" class="container pt-5">
            <legend class="fs-3 text text-center">Adicionar um Carro</legend>

            <form class="row gy-2 gx-3 align-items-center" onsubmit="return validateCreateCar()" action="./controllers/create.php" method="POST">
                <div class="">
                    <div class="col-auto mb-3">
                        <label for="model" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="model" id="model">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="description" id="description" size="30">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="costValue" class="form-label">Valor</label>
                        <input type="text" class="form-control" name="costValue" id="costValue" size="30">
                    </div>
                </div>
                <div class="container bg-light">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-dark" value="Criar Carro">
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

    <div id="div-edit-car">
        <fieldset id="edit-car" class="container pt-5">
            <legend class="fs-3 text text-center">Editar um Carro</legend>

            <form class="row gy-2 gx-3 align-items-center" onsubmit="return validateEditCar()" action="./controllers/edit.php" method="POST">
                <div class="">
                    <div class="col-auto mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="model" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="model" id="model">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="description" id="description" size="30">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="renter" class="form-label">Locatário</label>
                        <input type="text" class="form-control" name="renter" id="renter" size="30">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="costValue" class="form-label">Valor</label>
                        <input type="text" class="form-control" name="costValue" id="costValue" size="30">
                    </div>
                </div>
                <div class="container bg-light">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-dark" value="Editar Carro">
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

    <div id="div-delete-car">
        <fieldset id="edit-car" class="container pt-5">
            <legend class="fs-3 text text-center">Remover um Carro</legend>

            <form class="row gy-2 gx-3 align-items-center" onsubmit="return validateDeleteCar()" action="./controllers/delete.php" method="POST">
                <div class="">
                    <div class="col-auto mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="reason" class="form-label">Motivo</label>
                        <input type="text" class="form-control" name="reason" id="reason">
                    </div>
                </div>
                <div class="container bg-light">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-dark" value="Remover Carro">
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

    <div id="div-pay-rental">
        <fieldset id="pay-rental" class="container pt-5">
            <legend class="fs-3 text text-center">Pagar Aluguel</legend>

            <form class="row gy-2 gx-3 align-items-center" action="./controllers/pay_bill.php" method="POST">
                <div class="">
                    <div class="col-auto mb-3">
                        <label for="id" class="form-label">Carro ID</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Insira o modelo ou identificador">
                    </div>
                    <div class="col-auto mb-3">
                        <label for="reason" class="form-label">Valor</label>
                        <input type="text" class="form-control" name="reason" id="reason" placeholder="Insira o valor correto">
                    </div>
                    <div class="col-auto mb-3">
                        <label class="form-label" for="form4Example3">Experiência</label>
                        <textarea class="form-control" id="form4Example3" rows="4" placeholder="Escreva um pouco sobre o que você achou dos nossos serviços..."></textarea>
                    </div>
                    <div class="col-auto mb-3">
                        <label for="reason" class="form-label">Método de Pagamento</label>
                    </div>
                    <div class="d-flex">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioFilter" id="filter-none" checked>
                            <label class="form-check-label" for="inlineRadio1">Pix</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioFilter" id="filter-1">
                            <label class="form-check-label text-nowrap" for="inlineRadio2">Cartão</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioFilter" id="filter-2">
                            <label class="form-check-label text-nowrap" for="inlineRadio2">Boleto</label>
                        </div>
                    </div>

                </div>
                <div class="container bg-light">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-dark" value="Remover Carro">
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

    <script>        
        $(document).ready(function() {
            $("#div-cars").show();
            $("#div-add-car").hide();
            $("#div-edit-car").hide();
            $("#div-delete-car").hide();
            $("#div-pay-rental").hide();

            $("#list-cars").click(function() {
                $("#div-add-car").hide();
                $("#div-cars").show();
                $("#div-edit-car").hide();
                $("#div-delete-car").hide();
                $("#div-pay-rental").hide();
            })

            $("#add-car").click(function() {
                $("#div-add-car").show();
                $("#div-cars").hide();
                $("#div-edit-car").hide();
                $("#div-delete-car").hide();
                $("#div-pay-rental").hide();
            })

            $("#edit-car").click(function() {
                $("#div-edit-car").show();
                $("#div-add-car").hide();
                $("#div-cars").hide();
                $("#div-delete-car").hide();
                $("#div-pay-rental").hide();
            })
            $("#delete-car").click(function() {
                $("#div-delete-car").show();
                $("#div-edit-car").hide();
                $("#div-add-car").hide();
                $("#div-cars").hide();
                $("#div-pay-rental").hide();
            })
            $("#pay-rental").click(function() {
                $("#div-pay-rental").show();
                $("#div-delete-car").hide();
                $("#div-edit-car").hide();
                $("#div-add-car").hide();
                $("#div-cars").hide();
            })
        });
    </script>
</body>

</html>