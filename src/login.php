<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Login</title>
  <link rel="icon" href="images/logo.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles/main.css">

  <!-- jQuery & SweetAlert2 -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-dark text-white">
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row rounded-4 w-100 rounded-5"
      style="max-width: 900px; background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 25px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">

      <!-- Left: Login Form -->
      <div class="col-md-6 d-flex flex-column justify-content-center px-4 py-5">
        <form id="login-form" class="w-100">
          <div class="mb-3">
            <label for="email" class="form-label" style="color: #aa7eee;">SIGN IN WITH YOUR EMAIL</label>
            <input type="email" class="form-control"
              style="background-color: #212529; border: none; border-bottom: 2px solid #aa7eee; color: white;"
              id="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label" style="color: #aa7eee;">PASSWORD</label>
            <input type="password" class="form-control"
              style="background-color: #212529; border: none; border-bottom: 2px solid #aa7eee; color: white;"
              id="password" placeholder="Enter your password">
          </div>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" style="cursor: pointer" id="rememberMe">
            <label class="form-check-label text-white" for="rememberMe" style="cursor: pointer">Remember me</label>
          </div>
          <button type="submit" class="btn border border-2 rounded-5 w-100"
            style="background-color: #aa7eee;"
            onmouseover="this.style.backgroundColor='#6333ae';"
            onmouseout="this.style.backgroundColor='#aa7eee';">
            SIGN IN
          </button>
          <div class="text-center mt-3">
            <small class="text-white">Don't have an account? <a href="register.php" style="color: #aa7eee;">Sign up</a></small>
          </div>
        </form>
      </div>

      <!-- Right: Logo Box -->
      <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center p-4">
        <img src="images/logo-transparent.png" alt="Login Image"
            class="img-fluid rounded-4"
            style="max-height: 300px; object-fit: contain; filter: drop-shadow(0 0 5px #000);">
      </div>
    </div>
  </div>

  <!-- Login AJAX Script -->
  <script>
    $('#login-form').on('submit', function (e) {
      e.preventDefault();

      const email = $('#email').val();
      const password = $('#password').val();

      $.ajax({
        url: 'backend/checklogin.php',
        method: 'POST',
        data: { email, password },
        dataType: 'json',
        success: function (response) {
          if (response.status === 'success') {
            Swal.fire({
              title: '<span style="color: #fff;">Login Successfully</span>',
              icon: 'success',
              iconColor: '#aa7eee',
              background: '#2c2c2e',
              color: '#ffffff',
              confirmButtonColor: '#6333ae',
              customClass: {
                popup: 'swal-custom-popup',
                title: 'swal-custom-title',
                content: 'swal-custom-text'
              },
              timer: 1600,
              showConfirmButton: false
            }).then(() => {
              window.location.href = 'home.php';
            });
          } else {
            Swal.fire({
              title: '<span style="color: #fff;">Login Failed</span>',
              text: 'Invalid email or password.',
              icon: 'error',
              iconColor: '#ff6b6b',
              background: '#2c2c2e',
              color: '#ffffff',
              confirmButtonText: 'OK',
              customClass: {
                popup: 'swal-custom-popup',
                title: 'swal-custom-title',
                content: 'swal-custom-text',
                confirmButton: 'custom-confirm-btn'
              }
            });
          }
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
          Swal.fire({
            title: "Account Activation Required",
            text: "Your account is not yet activated.",
            icon: "error",
            iconColor: "#ff6b6b",
            background: "#2c2c2e",
            color: "#ffffff",
            confirmButtonText: 'OK',
            customClass: {
                popup: 'swal-custom-popup',
                title: 'swal-custom-title',
                content: 'swal-custom-text',
                confirmButton: 'custom-confirm-btn'
              }
          });
        }
      });
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
