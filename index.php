<?php
$password = getenv('DB_PASSWORD'); 
$serverName = "srv-azure-musb.database.windows.net"; 
$database = "azure-db";
$username = "user_admin"; 

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $status = "✅ CONNEXION SQL RÉUSSIE";
} catch (PDOException $e) {
    $status = "❌ ERREUR SQL : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Projet Azure - Mustapha Amine</h1>
    <h2>Statut de la communication :</h2>
    <p><?php echo $status; ?></p>
</body>
</html>
