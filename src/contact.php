<!-- Navbar -->   
<?php
include "nav.php"
?>
  <!-- Contact Section -->
  <section class="d-flex container flex-column flex-md-row justify-content-between 
    align-items-start py-5 my-5 gap-5">

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
        <form>
          <div class="mb-4">
            <label for="name" class="form-label text-white">Name</label>
            <input type="text" class="form-control bg-transparent"
              placeholder="Your name"
              style="border: none; border-bottom: 2px solid #aa7eee; color: white;">
          </div>
          <div class="mb-4">
            <label for="email" class="form-label text-white">Email</label>
            <input type="email" class="form-control bg-transparent"
              placeholder="you@example.com"
              style="border: none; border-bottom: 2px solid #aa7eee; color: white;">
          </div>
          <div class="mb-4">
            <label for="message" class="form-label text-white">Message</label>
            <textarea class="form-control bg-transparent"
              rows="4" placeholder="Write your message..."
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

  <!-- JS -->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="js/script.js"></script>
</body>
</html>
