<!-- Navbar -->   
<?php
include "nav.php";
include "config.php";

?>
  <!-- Contact Section -->
    <section class="container d-flex flex-column flex-md-row align-items-center 
    align-items-md-start justify-content-between text-center text-md-start py-5 my-4 gap-5">


    <!-- Left Column -->
    <div class="flex-fill text-center text-md-start">
      <h2 class="fw-bold text-white mb-4">
        Let's build<br>
        <span class="text-white">something</span> <span style="color: #aa7eee;">amazing</span><br>
        <span class="text-white">together!</span>
      </h2>

      <div class="d-flex flex-column gap-3 align-items-center align-items-md-start">
        <div class="d-flex flex-column flex-md-row align-items-center gap-2">
          <i class="bi bi-envelope-fill text-white fs-4"></i>
          <span class="text-secondary">christiantan120501@gmail.com</span>
        </div>
        <div class="d-flex flex-column flex-md-row align-items-center gap-2">
          <i class="bi bi-phone-fill text-white fs-4"></i>
          <span class="text-secondary">+63 995 001 6814</span>
        </div>
        <div class="d-flex flex-column flex-md-row align-items-center gap-2">
          <i class="bi bi-geo-alt-fill text-white fs-4"></i>
          <span class="text-secondary">Angeles City, Philippines</span>
        </div>

        <div class="d-flex justify-content-center justify-content-md-start gap-4 mt-3">
          <a href="https://www.facebook.com/share/15k3EZeVjF" target="_blank" class="fs-4" style="color:white"
            onmouseover="this.style.color='#aa7eee';"
            onmouseout="this.style.color='white';"><i class="bi bi-facebook"></i></a>
          <a href="https://www.linkedin.com/in/christian-ralph-tan-1944b1354" target="_blank" class="fs-4" style="color:white"
            onmouseover="this.style.color='#aa7eee';"
            onmouseout="this.style.color='white';"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/Chrischan-Chu" target="_blank" class="fs-4" style="color:white"
            onmouseover="this.style.color='#aa7eee';"
            onmouseout="this.style.color='white';"><i class="bi bi-github"></i></a>
        </div>

        <a href="assets/resume.pdf" download class="btn mt-4 rounded-5 border border-2 btn-outline-dark"
          style="background-color: #aa7eee;"
          onmouseover="this.style.backgroundColor='#6333ae';"
          onmouseout="this.style.backgroundColor='#aa7eee';">Download Resume</a>
      </div>
    </div>

    <!-- Right Column -->
    <div class="flex-fill">
      <div class="p-4 rounded-4 bg-dark form-border" style="background-color: #2c2c2e;">
        <form id="contact-form" method="POST">
          <div class="mb-4">
            <label for="name" class="form-label text-white">Name</label>
            <input type="text" name="name" class="form-control bg-transparent"
              id="name" placeholder="Your name"
              style="border: none; border-bottom: 2px solid #aa7eee; color: white;">
          </div>
          <div class="mb-4">
            <label for="email" class="form-label text-white">Email</label>
            <input type="email" name="email" class="form-control bg-transparent"
              id="email" placeholder="you@example.com"
              style="border: none; border-bottom: 2px solid #aa7eee; color: white;">
          </div>
          <div class="mb-4">
            <label for="message" class="form-label text-white">Message</label>
            <textarea name="message" class="form-control bg-transparent"
              id ="message" rows="4" placeholder="Write your message..."
              style="border: none; border-bottom: 2px solid #aa7eee; color: white;"></textarea>
          </div>
          <div class="text-center text-lg-start">
            <button type="submit" class="btn px-4 py-2 rounded-5 border border-2 btn-outline-dark"
              style="background-color: #aa7eee;"
              onmouseover="this.style.backgroundColor='#6333ae';"
              onmouseout="this.style.backgroundColor='#aa7eee';">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>

 <script>
  $(document).ready(function () {
    $('#contact-form').on('submit', function (e) {
      e.preventDefault(); 

      const name = $('#name').val().trim();
      const email = $('#email').val().trim();
      const message = $('#message').val().trim();

      $.ajax({
        url: 'backend/contact_submit.php',
        method: 'POST',
        data: { name, email, message },
        dataType: 'json',
        success: function (response) {
          if (response.status === 'success') {
            Swal.fire({
  title: '<span style="color: #fff;">Message Sent Successfully!</span>',
  icon: 'success',
  iconColor: '#aa7eee',
  background: '#2c2c2e',
  color: '#ffffff',
  confirmButtonColor: '#6333ae',
  showConfirmButton: false,
  timer: 1600, 
  customClass: {
    popup: 'swal-custom-popup',
    title: 'swal-custom-title',
    content: 'swal-custom-text'
  }
}).then(() => {
  window.location.href = 'home.php';
});

          } else {
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
          }
        },
        error: function (xhr, status, error) {
          console.log('Error:', error);
          Swal.fire({
            title: 'AJAX Error',
            text: 'Something went wrong while contacting the server.',
            icon: 'error',
            background: '#2c2c2e',
            color: '#ffffff'
          });
        }
      });
    });
  });
</script>



  <!-- JS -->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="js/script.js"></script>
</body>
</html>
