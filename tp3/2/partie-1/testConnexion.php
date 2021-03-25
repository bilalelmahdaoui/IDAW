<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>TP3 - 2. Acces à la base de données</title>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <span class="navbar-brand text-light pl-1">TP3 - 2. Acces à la base de données</span>
    </nav>
   <div class="container"> 
        <h2 class="mt-3 mb-3">La table 'User'</h2>
        <table class="table thead-dark">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>login</th>
                    <th>password</th>
                    <th>pseudo</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $servername = "localhost";
                $username = "bilalelmahdaoui";
                $password = "helloworld";
                $dbname = "tpPHPdb";
                
                //Connexion
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) die("Erreur de connexion: " . $conn->connect_error);
                
                // Requête
                $query = "SELECT * FROM User;";
                $result = $conn->query($query);
                
                if ($result->num_rows > 0) {
                // Boucler et afficher les données dans la table
                while($row = $result->fetch_assoc()) {
                    echo "  <tr>
                                <th scope=\"row\">".$row["id"]."</th>
                                <td>".$row["login"]."</td>
                                <td>".$row["password"]."</td>
                                <td>".$row["pseudo"]."</td>
                            </tr>";
                }
                } else {
                    echo "Pas de données";
                }
                $conn->close();
            ?> 
            </tbody>
        </table>
   </div>
</body>
</html>