<?php
    /* $link = mysqli_connect("localhost", "root", "", "ticketstore");
    if ($link->connect_error) {
        die("Error:" . $link->connect_error);
    } else {
        echo ("Succesful");
    } */
?>
<style>
    .text-center{
        margin-top: 50px;
    }
    .container {
        margin-top: 50px;
    }
    .btn {
        background-color: #212529; 
        border: none;
        margin-top: 50px;
        color: white;
    }
    .btn:hover {
        background-color: #C8C8C9;
    }
    a {
        color: white;
        text-decoration: none;
    }
    a:hover {
        color: inherit;
    }
    
</style>


<h3 class="text-center">Featured Products</h3>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem">
                <img src="./images/delfina-cocciardi-Ml5pa8egN4o-unsplash (1).jpg" class="card-img-top" alt="...">
                <div class="card-body"> 
                <h6 class="card-text price-text">Sourdough White $7.00</h6>
                <p class="card-text">Our standard sourdough</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem">
                <img src="./images/jennifer-burk-wV1Q_vvc1GY-unsplash (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h6 class="card-text price-text">Sourdough Rye $8.00</h6>
                <p class="card-text">Sourdough created with 50% rye flour</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem">
                <img src="./images/monika-grabkowska-Ig-aswYWfDM-unsplash (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h6 class="card-text price-text">Sourdough Spelt $9.00</h6>
                <p class="card-text">Sourdough created with 100% spelt flour. </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem">
                <img src="./images/monika-grabkowska-nVoDL1YDWRE-unsplash (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h6 class="card-text price-text">Sourdough Seeded $9.50</h6>
                <p class="card-text">Sourdough including a mixture of yummy seeds. </p>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn" type="button"><a href="products.php">More Products</button>
</div>

<div class="container mb-4"></div>




