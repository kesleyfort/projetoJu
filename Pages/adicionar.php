<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function validateForm() {
            var emptyFields = Array();
            var inputs = document.getElementsByTagName('input');
            for (input of inputs) {
                if (input.value == '') {
                    emptyFields.push(input.getAttribute("aria-label"));
                }
            }
            if (!emptyFields) {
                var message = 'Há algo de errado com os seguintes campos: ' + emptyFields
                alert(message)
            } else {
                addBook(getValuesFromForm())
            }

        }

        function getValuesFromForm() {
            var values = {};
            var inputs = document.getElementsByTagName('input');
            for (input of inputs) {
                values[input.id] = input.value
            }
            return values;
        }

        function addBook(book) {
            console.log(book)
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.response)
                    // alert("Registro salvo com sucesso")
                }
            };
            xmlhttp.open("POST", `../Requests/addBook.php?titulo=${book.titulo}&autor=${book.autor}&ano=${book.ano}&editora=${book.editora}&preco=${book.preco}&quantidade=${book.quantidade}`, true);
            xmlhttp.send();
        }

    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Acervo Digital - Adicionar</title>
</head>
<body style="padding: 0">
<div class="container" style="width: -webkit-fill-available;margin: 0;max-width: -webkit-fill-available;">
    <div class="row">
        <?php include("navigationbar.php"); ?>
    </div>
    <div class="row justify-content-center">
        <div class="card" style="margin-top: 1rem;" id="formCard">

            <div class="card-body">
                <h5 class="card-title">Cadastre um livro</h5>
                <form id="newBookForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titulo">Titulo</label>
                            <input aria-label="Titulo" type="text" class="form-control" id="titulo"
                                   placeholder="Titulo*">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="autor">Autor(a)</label>
                            <input aria-label="Autor(a)" type="text" class="form-control" id="autor"
                                   placeholder="Autor(a)*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="ano">Ano de lançamento</label>
                            <input aria-label="Ano de Lançamento" type="number" class="form-control" id="ano"
                                   placeholder="1990">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="editora">Editora</label>
                            <input aria-label="Editora" type="text" class="form-control" id="editora"
                                   placeholder="Editora*">
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="preco">Preço</label>
                            <input aria-label="Preço" type="number" class="form-control" id="preco" step="0.01">
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="quantidade">Quantidade</label>
                            <input aria-label="Quantidade " type="number" class="form-control" id="quantidade" step="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="gridCheck">
                            * Campos obrigatórios
                        </label>
                    </div>
                    <button onclick="validateForm()" type="button" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>