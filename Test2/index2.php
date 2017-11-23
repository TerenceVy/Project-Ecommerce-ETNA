<?php
try{
$db = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed:' . $e->getMessage();
}

$search = $_POST['var1'];

$req = $db->prepare("SELECT * FROM Produits WHERE Libelle LIKE ?");
$req->execute(array("%$search%"));
$count = $req->rowCount();
$results = $req->fetchALL();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frmSearch" method="post" action="index2.php">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="var1" type="text" id="var1">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php echo $search; ?>
	<?php
if ($count != 0)
{
	?>
<table align="center" border="1" style="text-align: center; margin-top: 10%">
    <tr>
        <td><p style="font-size: 20px"> Produit </p></td>
        <td><p style="font-size: 20px"> Libelle </p></td>
        <td><p style="font-size: 20px"> Description </p></td>
        <td><p style="font-size: 20px"> Prix de vente </p></td>
        <td><p style="font-size: 20px"> Nombre de produit </p></td>
    </tr>
    <?php
    foreach ($results as $key) {
        ?>
    <tr>
    <td>
    <?php
    $img = "../assets/images/" . $key['ID'] . ".png";
    echo "<img src='$img' style='width: 86px; height : auto'>";
    ?>
    </td>
    <td>
        <?php
    echo $key['Libelle'];?></td>
    <td><?php
    echo $key['Description'];?></td>
    <td><?php
    echo $key['Prix_vente'] . " $";?></td>
    <td><?php
    echo $key['Nombres_produit'];?></td>
    </tr>
	<?php
}
}
else {
echo 'There is nothing to show';
}
    ?>
</body>
</html>