<?php
  $pageContent = "contentPages/contentCareers.php";
  include("templates/template.php");
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root"; // Cambia esto si es necesario
    $password = ""; // Cambia esto si es necesario
    $dbname = "lucas_loaves";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Recoger datos del formulario
    $job_offer = $conn->real_escape_string(trim($_POST['job_offer']));
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $cover_letter = $conn->real_escape_string($_POST['cover_letter']);
    
    // Manejar el archivo del currículum
    $resume = $_FILES['resume']['tmp_name'];
    $resume_content = addslashes(file_get_contents($resume));
    
    // Insertar datos en la base de datos
    $sql = "INSERT INTO applications (job_offer, name, email, cover_letter, resume) VALUES ('$job_offer', '$name', '$email', '$cover_letter', '$resume_content')";
    
    /* if ($conn->query($sql) === TRUE) {
        echo "Request sent successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } */
    
    $conn->close();
}
?>
<script type="text/javascript">
  setPageTitle("Careers");
  
    


</script>
