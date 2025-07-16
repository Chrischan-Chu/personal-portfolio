<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up Activation</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="styles/main.css">

  <!-- jQuery & SweetAlert2 -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-dark text-white">

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center shadow rounded-5 p-5"
      style="max-width: 600px; width: 100%; background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 20px #6333ae';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">
      
      <h2 class="mb-3" style="color:#aa7eee">Account Created Successfully!</h2>
      <p class="mb-4">Thank you for signing up. Please check your email and follow the link to activate your account.</p>
      
      <a href="login.php" class="btn border border-2 rounded-5 px-4"
         style="background-color: #aa7eee;"
         onmouseover="this.style.backgroundColor='#6333ae';"
         onmouseout="this.style.backgroundColor='#aa7eee';">
        Go to Login
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
