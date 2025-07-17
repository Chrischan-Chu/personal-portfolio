<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account Created</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>

<body class="bg-dark">
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="rounded-5 p-5 text-center"
      style="max-width: 650px; width: 100%; background-color: #2c2c2e; border: 3px solid #aa7eee;
      border-radius: 25px;
      transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 25px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='0 0 0 transparent';"
    >
      <img src="images/account-success.png" alt="Account Created Successfully" 
        class="img-fluid mb-4"
        style="width: 200px; filter: drop-shadow(0 0 10px #000000ff);"
      >

      <h2 class="fw-bold mb-3" style="color: #aa7eee;">Account Created Successfully!</h2>

      <p class="mb-4 fs-5" style="color: #cfcfcf;">
        Thank you for signing up! Please check your email and click the activation link to complete your registration.
      </p>
      
      <a href="login.php" 
        class="btn rounded-5 border border-2 btn-outline-dark px-4 py-2"
        style="background-color: #aa7eee;"
        onmouseover="this.style.backgroundColor='#6333ae';"
        onmouseout="this.style.backgroundColor='#aa7eee';"
      >
        Go to Login
      </a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>
