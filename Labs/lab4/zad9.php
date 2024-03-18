<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai1_lab4";

$condition = '';
if (isset($_GET['email']) && !empty($_GET['email'])) {
    $email = $_GET['email'];
    $condition = "WHERE email = '$email'";
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("SELECT * FROM questions $condition");
    $statement->execute();
    $questions = $statement->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Fail: " . $e->getMessage();
}

?>

<!doctype html>
<html lang="pl" data-bs-theme="">
  <head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zad9</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div id="inne" class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h2>Zapytania o ofertę</h2>
                <!-- Formularz filtrowania -->
                <form method="GET" action="zad9.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Adres e-mail:</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Filtruj</button>
                </form>
                <!-- Tabelka HTML z danymi -->
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Typ oferty</th>
                            <th scope="col">Budżet</th>
                            <th scope="col">Komentarz</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($questions as $key => $question): ?>
                            <tr>
                                <th scope="row"><?php echo $key + 1; ?></th>
                                <td><?php echo htmlspecialchars($question['email']); ?></td>
                                <td><?php echo htmlspecialchars($question['offer_type']); ?></td>
                                <td><?php echo htmlspecialchars($question['budget']); ?></td>
                                <td><?php echo htmlspecialchars($question['comment']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div> 
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>