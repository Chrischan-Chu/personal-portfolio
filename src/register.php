<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="styles/main.css">

  <!-- SweetAlert & jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body class="bg-dark text-white">
  <div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row shadow rounded-4 w-100 rounded-5"
      style="max-width: 900px; background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 20px #6333ae';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">

      <!-- Left: Registration Form -->
      <div class="col-md-6 d-flex flex-column justify-content-center px-4 py-5">
        <form id="registerForm" class="w-100">
          <div class="mb-3">
            <label for="name" class="form-label" style="color: #aa7eee;">FULL NAME</label>
            <input type="text" class="form-control"
              style="background-color: #212529; border: none; border-bottom: 2px solid #aa7eee; color: white;"
              id="name" placeholder="Enter your full name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label" style="color: #aa7eee;">EMAIL ADDRESS</label>
            <input type="email" class="form-control"
              style="background-color: #212529; border: none; border-bottom: 2px solid #aa7eee; color: white;"
              id="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label" style="color: #aa7eee;">PASSWORD</label>
            <input type="password" class="form-control"
              style="background-color: #212529; border: none; border-bottom: 2px solid #aa7eee; color: white;"
              id="password" placeholder="Create a password">
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label" style="color: #aa7eee;">CONFIRM PASSWORD</label>
            <input type="password" class="form-control"
              style="background-color: #212529; border: none; border-bottom: 2px solid #aa7eee; color: white;"
              id="confirmPassword" placeholder="Confirm your password">
          </div>
          <button type="submit" class="btn border border-2 rounded-5 w-100"
            style="background-color: #aa7eee;"
            onmouseover="this.style.backgroundColor='#6333ae';"
            onmouseout="this.style.backgroundColor='#aa7eee';">
            REGISTER
          </button>
          <div class="text-center mt-3">
            <small class="text-white">Already have an account? <a href="login.php" style="color: #aa7eee;">Login</a></small>
          </div>
        </form>
      </div>

      <!-- Right: Logo Box -->
      <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center p-4">
        <img src="images/logo-transparent.png" alt="Register Image"
             class="img-fluid rounded-4"
             style="max-height: 300px; object-fit: contain;">
      </div>
    </div>
  </div>

  <!-- Register AJAX Script -->
  <script>
document.getElementById('registerForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;

  // Check for empty fields
  if (!name || !email || !password || !confirmPassword) {
    Swal.fire({
      icon: 'error',
      iconColor: '#ff6b6b',
      title: '<span style="color: #fff;">Missing Information</span>',
      text: 'Please fill out all fields.',
      background: '#2c2c2e',
      color: '#ffffff',
      confirmButtonColor: '#aa7eee',
      customClass: {
        popup: 'swal-custom-popup',
        title: 'swal-custom-title',
        content: 'swal-custom-text',
        confirmButton: 'custom-confirm-btn'
      }
    });
    return;
  }

  // Check if passwords match
  if (password !== confirmPassword) {
   Swal.fire({
  icon: 'error',
  iconColor: '#ff6b6b',
  title: '<span style="color: #fff;">Oops...</span>',
  text: 'Passwords do not match!',
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

    return;
  }

  $.ajax({
    url: 'backend/checkregister.php',
    method: 'POST',
    data: {
      name: name,
      email: email,
      password: password,
    },
    dataType: 'json',
    success: function (response) {
      Swal.fire({
        title: '<span style="color: #fff;">Registration Successful!</span>',
        icon: 'success',
        iconColor: '#aa7eee',
        text: 'Activate your account to access it.',
        background: '#2c2c2e',
        color: '#ffffff',
        showConfirmButton: false,
        timer: 1600,
        customClass: {
          popup: 'swal-custom-popup',
          title: 'swal-custom-title',
          content: 'swal-custom-text'
        }
      }).then(() => {
        window.location.href = 'successful_signup.php';
      });
    },
    error: function () {
      Swal.fire({
        icon: 'error',
        iconColor: '#ff6b6b',
        title: '<span style="color: #fff;">Oops...</span>',
        text: 'Something went wrong, please try again later.',
        background: '#2c2c2e',
        color: '#ffffff',
        confirmButtonColor: '#aa7eee',
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

</body>

</html>
