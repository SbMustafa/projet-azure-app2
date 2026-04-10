<?php
 
$password = getenv('DB_PASSWORD'); 

$serverName = "srv-azure-mus.database.windows.net"; 
$database = "db-app-prod";
$username = "user_admin"; 

echo "<h1>Test de déploiement Azure - Mustapha Amine</h1>";

try {
    
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h2 style='color:green;'>✅ TEST RÉUSSI : Connexion SQL établie !</h2>";
    echo "<p>La communication entre l'App Service et la base SQL est fluide.</p>"; [cite: 16]
} catch (PDOException $e) {
    echo "<h2 style='color:red;'>❌ Échec de connexion</h2>";
    echo "Détails de l'erreur : " . $e->getMessage();
}
?>
