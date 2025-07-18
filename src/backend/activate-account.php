
<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

include "../config.php";

$sql = "SELECT * FROM users
        WHERE account_activation_hash = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

//if ($user === null) {
//    die("token not found");
//}

$sql = "UPDATE users
        SET account_activation_hash = NULL
        WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $user["id"]);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account Activated</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account Activated</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-dark text-white">

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center rounded-4 p-4"
         style="
           max-width: 650px;
           background-color: #2c2c2e;
           border: 3px solid #aa7eee;
           border-radius: 25px;
           transition: all 0.3s ease;
         "
         onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 25px #000000ff';"
         onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">
      
      <!-- Purple "Congratulation!" image -->
      <img src="../images/confetti.png"
           alt="Congratulations!"
           class="img-fluid mb-4"
           style="max-width:250px; filter: drop-shadow(0 0 5px #000);">

      <!-- Title -->
      <h2 class="fw-bold mb-3" style="color: #aa7eee;">
        Congratulations!
      </h2>

      <!-- Message -->
      <p class="mb-4" style="color:#cfcfcf; font-size:1.1rem;">
        Your account has been successfully activated.<br>
        You can now log in and explore all the features.
      </p>

      <!-- Button -->
      <a href="../login.php"
         class="btn border border-2 rounded-5 px-3 py-2"
         style="background-color: #aa7eee;"
        onmouseover="this.style.backgroundColor='#6333ae';"
        onmouseout="this.style.backgroundColor='#aa7eee';">Go to Login
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


