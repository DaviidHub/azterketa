<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
// Aldagaiak
$hostDB = 'db';
$nombreDB = 'azterketa';
$usuarioDB = 'root';
$contrasenyaDB = 'admin1234';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// SELECT prestatu
$miConsulta = $miPDO->prepare('SELECT * FROM usuario;');
// Kontsulta exekutatu
$miConsulta->execute();

?>

<p>  <?php  $miConsulta  ?></p>

</body>

</html>