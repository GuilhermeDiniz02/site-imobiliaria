<?php
// Conexão com o banco de dados
$link = mysqli_connect("localhost", "root", "senac", "sistema");
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;

$nome = $_POST['nome'];
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = "";
}
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO `faleconosco`(`nome`, `email`, `celular`, `mensagem`) VALUES ('".$nome."', '".$email."', '".$celular."', '".$mensagem."')";

//echo $sql;

$result = mysqli_query($link, $sql);

?>
