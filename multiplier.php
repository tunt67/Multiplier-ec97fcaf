<?php
if (isset($_POST['submit'])) {
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    echo $getal1 * $getal2;
}
echo "voer getallen onder in en deze worden vermenigvuldigt";
?>

<form method="post">
    eerste getal: <input type="number" name="getal1" onfocus="this.value=''" value="eerste getal"><br>
    tweede getal: <input type="number" name="getal2" onfocus="this.value=''" value="tweede getal">
    <input type="submit" name="submit" class="btn btn-success mt-2" value="klik hier">
</form>
<?php
// ik weet dat er een foutmelding komt omdat de twee post vriabelen niet worden gedefinieert in deze PHP tag de code kan gewoon gebruikt worden en is functioneel

?>