<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Personal Portfolio</title>
  <link rel="stylesheet" href="main.css">
  <link rel="icon" href="images/logo.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
  <!-- Navbar -->   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4" style="border-bottom: 2px solid #aa7eee;">
    <div class="container-fluid">

      <a class="navbar-brand fw-bold d-flex align-items-center" style=color:#6333ae;
        onmouseover="this.style.color='white';"
        onmouseout="this.style.color='#6333ae';" href="home.php">
        <!-- <img src="images/Logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top me-2"> -->
        Portfolio
      </a>
      
      <!-- Toggle Button -->
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navigation Menu -->
      <div class="collapse navbar-collapse justify-content-end" id="navbar">
        <ul class="navbar-nav gap-2 gap-lg-5">
          <li class="nav-item">
            <a class="nav-link active d-none d-lg-block"
              style="color:white"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="home.php">HOME</a>

            <a class="nav-link d-lg-none" 
              style="border-bottom:2px solid #aa7eee; color:white"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';"  href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-none d-lg-block" 
              style="color: white;"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="skillscertificates.php">SKILLS & CERTFICATES</a>

            <a class="nav-link d-lg-none" 
              style="border-bottom:2px solid #aa7eee; color: white;"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="skillscertificates.php">SKILLS & CERTIFICATES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-none d-lg-block" 
              style="color: white;"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="projects.php">PROJECTS</a>

            <a class="nav-link d-lg-none" 
              style="border-bottom:2px solid #aa7eee; color: white;"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="projects.php">PROJECTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-none d-lg-block" 
              style="color: white;"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="contact.php">CONTACT</a>

            <a class="nav-link d-lg-none" 
              style="border-bottom:2px solid #aa7eee; color: white;"
              onmouseover="this.style.color='#aa7eee';"
              onmouseout="this.style.color='white';" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <?php
              session_start(); 

              if (isset($_SESSION['user_id'])) {
                  echo '<a href="#" 
                          class="btn rounded-5 ms-3 border rounded-5 "
                          style="background-color: #aa7eee"
                          onmouseover="this.style.backgroundColor=\'#6333ae\';"
                          onmouseout="this.style.backgroundColor=\'#aa7eee\';"
                          onclick="logoutConfirm()">
                          Logout
                        </a>';
              } else {
                  echo '<a href="index.php" 
                          class="btn rounded-5 ms-3 border rounded-5 "
                          style="background-color: #aa7eee; color: white; border: none;"
                          onmouseover="this.style.backgroundColor=\'#6333ae\';"
                          onmouseout="this.style.backgroundColor=\'#aa7eee\';">
                          Login
                        </a>';
              }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
function logoutConfirm() {
  Swal.fire({
    title: 'Are you sure?',
    text: 'You will be logged out!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Logout'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'backend/logout.php',
        type: 'POST',
        success: function () {
          window.location.href = 'home.php';
        }
      });
    }
  });
}
</script>
</body>
</html>