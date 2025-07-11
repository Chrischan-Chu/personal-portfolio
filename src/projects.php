<!-- Navbar -->   
<?php
include "nav.php"
?>
  <!-- Projects Section -->
  <section class="projects d-flex flex-column align-items-center justify-content-center container py-5 my-5">
    <div class="row g-4 justify-content-center">

      <!-- Portfolio -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center p-3 rounded-5 bg-dark tech-card" 
          data-bs-toggle="modal" data-bs-target="#portfoliomodal" style="cursor: pointer;">
          <div class="d-flex justify-content-center align-items-center">
            <img src="images/carrd.png" alt="Portfolio Website" class="img-fluid tech-img" style="max-height: 150px;">
          </div>
          <h5 class="mt-3" style="color:#aa7eee;">Portfolio Website</h5>
          <p class="text-muted px-3">Personal portfolio built using Carrd to showcase my work and skills.</p>
        </div>
      </div>

      <!-- Bamacom -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center p-3 rounded-5 bg-dark tech-card" 
          data-bs-toggle="modal" data-bs-target="#bamacommodal" style="cursor: pointer;">
          <div class="d-flex justify-content-center align-items-center">
            <img src="images/bamacom.png" alt="Bamacom Inc." class="img-fluid tech-img" style="max-height: 150px;">
          </div>
          <h5 class="mt-3" style="color:#aa7eee;">Bamacom Inc.</h5>
          <p class="text-muted px-3">A newly designed website built using WordPress, Elementor, and SEO.</p>
        </div>
      </div>

      <!-- Gugu Farm -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center p-3 rounded-5 bg-dark tech-card" 
          data-bs-toggle="modal" data-bs-target="#gugumodal" style="cursor: pointer;">
          <div class="d-flex justify-content-center align-items-center">
            <img src="images/gugu.png" alt="Gugu Farm" class="img-fluid tech-img" style="max-height: 150px;">
          </div>
          <h5 class="mt-3" style="color:#aa7eee;">Gugu Farm and Private Resort</h5>
          <p class="text-muted px-3">A website built using MongoDB, Express.js, Angular, and Node.js.</p>
        </div>
      </div>

      <!-- Blog Website -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center p-3 rounded-5 bg-dark tech-card" 
          data-bs-toggle="modal" data-bs-target="#blogmodal" style="cursor: pointer;">
          <div class="d-flex justify-content-center align-items-center">
            <img src="images/wordpresss.png" alt="Blog Website" class="img-fluid tech-img" style="max-height: 150px;">
          </div>
          <h5 class="mt-3" style="color:#aa7eee">Blog Website</h5>
          <p class="text-muted px-3">Personal blog website built using WordPress to share experiences.</p>
        </div>
      </div>
    </div>

    <!-- Projects Modal -->
    <!-- Portfolio Modal -->
    <div class="modal fade" id="portfoliomodal">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark text-white rounded-4 border border-secondary">
          <div class="modal-header border-0 justify-content-center pb-0">
            <h5 class="modal-title text-center w-100 fw-bold" style="color:#aa7eee;">Portfolio Website</h5>
            <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3 mt-2" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body px-4 py-3">
            <div class="text-center mb-3">
              <img src="images/carrd.png" class="img-fluid rounded shadow-sm mb-4 mx-auto d-block" alt="Portfolio Image" style="max-height: 280px; object-fit: contain;">
            </div>
            <div style="max-width: 400px; margin-left: auto; margin-right: auto;">
              <p class="text-muted text-center">A personal portfolio website created using Carrd, highlighting my projects, experience, and design aesthetics.</p>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <a href="https://tanchristianportfolio.carrd.co/" target="_blank" class="btn btn-outline-dark px-4 rounded-5 border border-2" style="background-color: #aa7eee;" onmouseover="this.style.backgroundColor='#6333ae';" onmouseout="this.style.backgroundColor='#aa7eee';">Visit Site</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bamacom Modal -->
    <div class="modal fade" id="bamacommodal">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark text-white rounded-4 border border-secondary">
          <div class="modal-header border-0 justify-content-center pb-0">
            <h5 class="modal-title text-center w-100 fw-bold" style="color:#aa7eee;">Bamacom Inc.</h5>
            <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3 mt-2" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body px-4 py-3">
            <div class="text-center mb-3">
              <img src="images/bamacom.png" class="img-fluid rounded shadow-sm mb-4 mx-auto d-block" alt="Bamacom Image" style="max-height: 280px; object-fit: contain;">
            </div>
            <div style="max-width: 400px; margin-left: auto; margin-right: auto;">
              <p class="text-muted text-center">A newly redesigned website, it offers a modern and user-friendly experience, showcasing Bamacom's expertise, services, and industry innovations. Explore Bamacom's solutions and see how we continue to deliver top-quality telecom services tailored to your needs.</p>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <a href="https://bamacomserv.com/" target="_blank" class="btn btn-outline-dark px-4 rounded-5 border border-2" style="background-color: #aa7eee;" onmouseover="this.style.backgroundColor='#6333ae';" onmouseout="this.style.backgroundColor='#aa7eee';">Visit Site</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Gugu Modal -->
    <div class="modal fade" id="gugumodal">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark text-white rounded-4 border border-secondary">
          <div class="modal-header border-0 justify-content-center pb-0">
            <h5 class="modal-title text-center w-100 fw-bold" style="color:#aa7eee;">Gugu Farm and Private Resort</h5>
            <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3 mt-2" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body px-4 py-3">
            <div class="text-center mb-3">
              <img src="images/gugu.png" class="img-fluid rounded shadow-sm mb-4 mx-auto d-block" alt="Gugu Resort" style="max-height: 280px; object-fit: contain;">
            </div>
            <div style="max-width: 400px; margin-left: auto; margin-right: auto;">
              <p class="text-muted text-center">A website that offers a modern and user-friendly experience, showcasing a simple design and featuring a contact system backed by a MongoDB database, allowing users to send messages directly through the website.</p>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <a href="https://guguresort.netlify.app/" target="_blank" class="btn btn-outline-dark px-4 rounded-5 border border-2" style="background-color: #aa7eee;" onmouseover="this.style.backgroundColor='#6333ae';" onmouseout="this.style.backgroundColor='#aa7eee';">Visit Site</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Blog Modal -->
    <div class="modal fade" id="blogmodal">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark text-white rounded-4 border border-secondary">
          <div class="modal-header border-0 justify-content-center pb-0">
            <h5 class="modal-title text-center w-100 fw-bold" style="color:#aa7eee;">Blog Website</h5>
            <button type="button" class="btn-close btn-close-white position-absolute end-0 me-3 mt-2" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body px-4 py-3">
            <div class="text-center mb-3">
              <img src="images/wordpresss.png" class="img-fluid rounded shadow-sm mb-4 mx-auto d-block" alt="Blog Website" style="max-height: 280px; object-fit: contain;">
            </div>
            <div style="max-width: 400px; margin-left: auto; margin-right: auto;">
              <p class="text-muted text-center">A WordPress blog that explores various opportunities, activities, and experiences you can pursue in life to grow, learn, and make the most of your potential.</p>
            </div>
            <div class="d-flex justify-content-end mt-4">
              <a href="https://lifesartistryhub.wordpres.com/" target="_blank" class="btn btn-outline-dark px-4 rounded-5 border border-2" style="background-color: #aa7eee;" onmouseover="this.style.backgroundColor='#6333ae';" onmouseout="this.style.backgroundColor='#aa7eee';">Visit Site</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JS -->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="script.js"></script>
</body>
</html>
