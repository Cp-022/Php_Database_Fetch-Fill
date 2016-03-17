<?php
$servername = "blank";
$username = "blank";
$password = "blank";
$database = "blank";
$d = 12;

try {
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$voornaam = $_POST[voornaam];
$achternaam = $_POST[achternaam];
$reden = $_POST[reden];
$email = $_POST[email];
$extra = $_POST[extra];
$sql = $conn->prepare("INSERT INTO blank (voornaam, achternaam, reden, email, datum, extra)
VALUES (:voornaam, :achternaam, :reden, :email, :datum, :extra)");
echo $voornaam, $achternaam, $reden, $email, $d, $extra;
$sql->bindParam(':voornaam', $voornaam);
$sql->bindParam(':achternaam', $achternaam);
$sql->bindParam(':reden', $reden);
$sql->bindParam(':email', $email);
$sql->bindParam(':datum', $d);
$sql->bindParam(':extra', $extra);
$sql->execute();
$sql = $conn->prepare("SELECT * FROM blank");
$sql->execute();
/*$sql = $conn->prepare("INSERT INTO blank (voornaam, achternaam, reden,email,datum,extra) VALUES (?, ?, ?,?,?,?)");
$sql->bind_param("ssssss", $voornaam, $achternaam,$reden, $email, $d, $extra);*/
var_dump($sql->fetchAll(PDO::FETCH_ASSOC));
while($row = $sql->fetchAll(PDO::FETCH_ASSOC)) {
    print $row['voornaam'] + '\n';
    print $row['achternaam'] + '\n';
    print $row['reden'] + '\n';
    print $row['email'] + '\n';
    print $row['datum'] + '\n';
    print $row['extra'] + '\n';
}
$conn = null;
}

catch(PDOException $e)
{
echo "Connection failed: \n" . $e->getMessage();
}
?>
