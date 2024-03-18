<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai1_lab4";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("SELECT * FROM questions");
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
    <title>Zad8</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div id="inne" class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h2>Zapytania o ofertę</h2>
                <!-- Wygenerować tabelkę HTML zawierającą wcześniej pobrane dane -->
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
                                <!-- <td><?php echo $question['comment']; ?></td> -->
                                <!-- htmlspecialchars pozwala nam na unikniecie atakow -->
                                <!-- zamienia znaki specjalne na encje takie jak: (&lt;, &gt;, &amp;, &quot;) -->
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

