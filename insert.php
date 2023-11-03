<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=monitor;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connecté à la base de données sur localhost avec succès.";

    // Récupération des valeurs des champs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
	 $user = $_POST["user"];

    // Requête SQL pour insérer les données dans la table login
    $sql = "INSERT INTO login (nom, prenom, tel, mail, password , user ) VALUES ('$nom', '$prenom', '$tel', '$mail', '$password' , ' $user')";
    $bdd->exec($sql);

     
  // Affichage de l'alerte JavaScript
    echo '<script>';
    echo 'alert("Nouvel enregistrement créé avec succès.");';
    echo '</script>';	
	
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
	
}
header('Location: monitor.php'); // Redirection vers la page monitor.html
exit;
$bdd = null;
?>
