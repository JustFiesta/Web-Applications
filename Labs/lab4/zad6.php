<?php
print_r($_REQUEST);
print('<br>');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Zebrać wartości z pól formularza
  $email = $_POST["email"];
  $offer_type = $_POST["offer"];
  $budget = $_POST["money"];
  $comment = $_POST["comment"];

  $email = htmlspecialchars($email);
  $offer_type = htmlspecialchars($offer_type);
  $budget = htmlspecialchars($budget);
  $comment = htmlspecialchars($comment);

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ai1_lab4";

  try 
  {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully. <br>";

    // Przygotować polecenie insert i wstawić rekord do tabeli
    $sql = "INSERT INTO questions (email, offer_type, budget, comment) VALUES (:email, :offer_type, :budget, :comment)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'email' => $email,
        'offer_type' => $offer_type,
        'budget' => $budget,
        'comment' => $comment
    ]);

    //zad 10
    //Negatywne aspekty łączenia stringow w zapytaniach sql:
    // - podatne na ataki sql injection
    // - naruszenie bazy danych przez hakerow
    // - kradziez danych

    echo "New record created successfully. <br>";
    $conn = null;
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
  }
} else {
    echo "Method not supported. <br>";
}
?>
