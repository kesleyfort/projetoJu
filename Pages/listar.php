<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function removeAllChildNodes(parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
        }
        function generateTable(table, data, size) {
            oldObj = data;
            for (i = 0; i <= size; i++) {
                let row = table.insertRow();
                for (var key in data[i]) {
                    let cell = row.insertCell();
                    let text = document.createTextNode(data[i][key]);
                    cell.appendChild(text);
                }
            }
        }

        function showResults() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        removeAllChildNodes(document.getElementById('resultsTbody'));
                        let table = document.getElementById("resultsTbody");
                        var obj = JSON.parse(this.response);
                        generateTable(table, obj, Object.keys(obj).length);
                    }
                };
                xmlhttp.open("GET", "../Requests/getAllBooks.php?", true);
                xmlhttp.send();
        }
        window.onload(showResults())
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Acervo Digital - Listar</title>
</head>
<body style="padding: 0">
<div class="container" style="width: -webkit-fill-available;margin: 0;max-width: -webkit-fill-available;">
    <div class="row">
        <?php include("navigationbar.php"); ?>
    </div>
    <div class="row" style="margin: auto;margin-top: 1rem;">
        <table class="table" id="resultsTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Ano</th>
                <th scope="col">Editora</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
            </tr>
            </thead>
            <tbody id="resultsTbody">
            </tbody>
        </table>
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