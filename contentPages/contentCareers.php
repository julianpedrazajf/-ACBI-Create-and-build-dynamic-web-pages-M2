<!-- CREATE DATABASE lucas_loaves;

USE lucas_loaves;

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cover_letter TEXT NOT NULL,
    resume LONGBLOB NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->

<style>
    .text-center {
        margin-bottom: 45px;
    }
    .text-center{
        margin-top: 50px;
    }
    p {
        margin-top: 50px;
        text-align: center;
        margin-bottom: 0;
    }
    .container{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    }
    .form {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    label {
        margin-bottom: 20px;
    }
    
</style>
<h4 class="text-center">Careers</h4>

<body>
    <div class="container">
        <div class="card-group">
            <div class="card">
            <img src="images/pexels-pexelsgoodboy-3218467.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Baker</h5>
                <p class="card-text">At Lucas Loaves, we are looking for a creative and experienced Baker to prepare a variety of baked goods. Responsibilities include baking breads, cakes, and desserts, maintaining kitchen cleanliness, monitoring ingredient quality, developing new recipes, and fulfilling custom orders. Previous baking experience, technical knowledge, ability to work early and a passion for cooking is required.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/pexels-imin-technology-276315592-12935064.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Cashier</h5>
                <p class="card-text">Lucas Loaves needs a friendly and reliable Cashier to offer excellent customer service. Duties include scanning products, managing transactions, resolving queries, keeping work area tidy, and assisting with product replenishment. Customer service experience, communication skills, ability to handle money and operate a cash register, and willingness to work in a fast-paced environment required.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/pexels-mart-production-7706568.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Delivery</h5>
                <p class="card-text">Lucas Loaves is looking for a punctual and professional Delivery Driver to deliver our bakery products to your home. Responsibilities include ensuring order accuracy, handling payments, maintaining a courteous attitude, following traffic regulations, and assisting in the bakery when needed. A valid driver's license, good knowledge of the delivery area, and flexibility to work nights and weekends are required.</p>
                </div>
            </div>
        </div>
    </div>

    <p>¡We are hiring! Please fill out the following form to apply.</p>

    <div class="container">
        <form action="careers.php" method="post" enctype="multipart/form-data" class="card text-center mb-3" style="width: 30rem;">

            <div class="form">
            <label for="job_offer">Select one of our available job offers:</label>
            <select id="job_offer" name="job_offer" required>
                <option value="" disabled selected>Select one of our available job offers</option>
                <option value="Baker">Baker</option>
                <option value="Cashier">Cashier</option>
                <option value="Delivery Driver">Delivery Driver</option>
            </select><br><br>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                
                <label for="email">Mail:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="cover_letter">Presentation Letter</label><br>
                <textarea id="cover_letter" name="cover_letter" rows="10" cols="50" required></textarea><br><br>
                
                <label for="resume">Resume:</label>
                <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required><br><br>
                
                <input type="submit" value="Send Request">
            </div>
        </form>
    </div>    
</body>

<div class="container">
</div><!-- <div class="container"> -->