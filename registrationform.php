<?php 

require 'connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") { 

    $name = $_POST['name'] ?? null; 
    $age = $_POST['age'] ?? null; 
    $program = $_POST['program'] ?? null;
    $yr_sec = $_POST['yr_sec'] ?? null;

    if ($name && $age && $program && $yr_sec) {
        $collection->insertOne([
            'name' => $name,
            'age' => $age,
            'program' => $program,
            'yr_sec' => $yr_sec 
        ]);
        echo "<script>alert('Student successfully registered.');</script>";
    } else {
        echo "<script>alert('Please fill in all required fields.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registration</title>
  <link rel="stylesheet" href="registrationform.css">
</head>
<body>
  <div class="container">
        <form class="registration-form" method="POST" action="">
              <h2>Registration Form</h2>

              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>

              <label for="age">Age</label>
              <input type="number" id="age" name="age" required>

              <label for="program">Program</label>
              <select name="program" class="options" required>
                  <option value="BSIT">BSIT</option>
                  <option value="BSCPE">BSCPE</option>
                  <option value="BSBA">BSBA</option>
              </select>

              <label for="yr_sec">Year & Sec</label>
              <input type="text" id="yr_sec" name="yr_sec" required>

              <div class="submit-btn">
                  <input type="submit" name="submit" value="Submit" class="submit">
              </div>
        </form>
  </div>
</body>
</html>