<?php

$servername = "localhost";
$username = "root";
$password = "senac";
$dbname = "sistema";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$txtsearch = $_GET['txtsearch'];

$sql = "SELECT foto, descricao, sobre, regiao, valor FROM imoveis WHERE regiao like '%".$txtsearch."%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " - Fotos: " . $row["foto"]. " - Descricao: " . $row["descricao"]. " - Sobre: " . $row["sobre"]. " - Região: " . $row["regiao"]. " - Valor: " . $row["valor"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>