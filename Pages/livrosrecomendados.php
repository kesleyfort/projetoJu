<!--suppress CssInvalidPropertyValue -->
<style>
    .margin {
        flex-grow: 0;
    }
    .centerText {
        text-align: center;
    }


</style>
<div class="container">
    <h3 class="centerText">Livros Recomendados</h3>
    <div class="row justify-content-center">
        <div class="col margin">
            <div class="card" style="width: 18rem;">
                <img src="https://www.pluggedin.com/wp-content/uploads/2020/01/placeholder_book.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col margin">
            <div class="card" style="width: 18rem;">
                <img src="https://www.pluggedin.com/wp-content/uploads/2020/01/placeholder_book.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col margin">
            <div class="card" style="width: 18rem;">
                <img src="https://www.pluggedin.com/wp-content/uploads/2020/01/placeholder_book.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
    $('#myCarousel').carousel({
        interval: 4000
    });
</script>
