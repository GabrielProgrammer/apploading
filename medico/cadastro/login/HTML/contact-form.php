<?php 

if (isset($_POST['submit'])) {

    $nome = $_POST['name'];
    $sobre = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mensagem = $_POST['message'];

    $enviepara = "";
    $headers = "De: ".$email
    $txt = "Voce está recebendo este email".$name.".\n\n".$message;




    mail($email, $sobre, $txt, $headers);
    header("Location: random.php?sent")


}







?>
