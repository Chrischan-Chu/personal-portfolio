  <!-- Navbar -->   
  <?php
  include "nav.php";
  include "config.php";

  // Save if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p1 = $_POST['paragraph1'];
    $p2 = $_POST['paragraph2'];

    $sql = "UPDATE update_about SET paragraph1 = ?, paragraph2 = ? WHERE id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $p1, $p2);
    $stmt->execute();
    $stmt->close();
  }

  // Fetch paragraph content
  $sql = "SELECT paragraph1, paragraph2 FROM update_about WHERE id = 1 LIMIT 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  ?>
    <section class="container d-flex flex-column flex-md-row justify-content-between align-items-center py-5 my-5 text-center text-md-start">
  <!-- Left Column -->
  <div class="mb-4 mb-md-0">
     <!-- Tablet (md only) -->
  <h2 class="fw-bold d-none d-md-block d-lg-none">
    <span>Christian Ralph R. Tan</span>
  </h2>
  <h4 class="d-none d-md-block d-lg-none">
    <span class="auto-type-tablet" style="color:#aa7eee;"></span>
  </h4>
  <p class="text-secondary mt-3 fs-6 d-none d-md-block d-lg-none">
    Life's a journey, forge your own path
  </p>

  <!-- Mobile + Desktop -->
  <h1 class="fw-bold d-block d-md-none d-lg-block">
    <span>Christian Ralph R. Tan</span>
  </h1>
  <h3 class="d-block d-md-none d-lg-block">
    <span class="auto-type-desktop" style="color:#aa7eee;"></span>
  </h3>
  <p class="text-secondary mt-3 fs-5 d-block d-md-none d-lg-block">
    Life's a journey, forge your own path
  </p>

    <!-- Socials -->
    <div class="social-icons d-flex flex-column flex-md-row align-items-center 
                justify-content-center justify-content-md-start gap-3 mt-4">
      <!-- Icons -->
      <div class="d-flex gap-4 justify-content-center justify-content-md-start">
        <a href="https://www.facebook.com/share/15k3EZeVjF/" target="_blank" class="fs-4" style="color:white"
          onmouseover="this.style.color='#aa7eee';"
          onmouseout="this.style.color='white';"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/in/christian-ralph-tan-1944b1354/" target="_blank" class="fs-4" style="color:white"
          onmouseover="this.style.color='#aa7eee';"
          onmouseout="this.style.color='white';"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/Chrischan-Chu" target="_blank" class="fs-4" style="color:white"
          onmouseover="this.style.color='#aa7eee';"
          onmouseout="this.style.color='white';"><i class="bi bi-github"></i></a>
      </div>
        <a href="assets/resume.pdf" download
          class="btn rounded-5 border border-2 btn-outline-dark mt-3 mt-md-0"
          style="background-color: #aa7eee;"
          onmouseover="this.style.backgroundColor='#6333ae';"
          onmouseout="this.style.backgroundColor='#aa7eee';">Download Resume</a>
    </div>

    <div>
      <a class="btn mt-4 border border-2 rounded-5" 
        style="background-color:#aa7eee;"
        onmouseover="this.style.backgroundColor='#6333ae';"
        onmouseout="this.style.backgroundColor='#aa7eee';" 
        href="#about">Learn More</a>
    </div>
  </div>

  <!-- Right Column -->
  <div>
  <img src="images/logo.png" width="350" height="350" alt="Logo"
    class="rounded-5 d-none d-lg-block"
    style="border: 5px solid #aa7eee; transition: all 0.3s ease;"
    onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 25px rgba(0,0,0,0.7)';"
    onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">

 <img src="images/logo.png" width="280" height="280" alt="Logo"
    class="rounded-5 d-lg-none mt-5 mt-md-0"
    style="border: 5px solid #aa7eee; transition: all 0.3s ease;"
    onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 25px rgba(0,0,0,0.7)';"
    onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">

</div>
</section>


    <!-- Divider -->
   
    <div class="pt-lg-3 d-block d-md-none d-lg-block">
      <svg viewBox="0 0 1440 220"xmlns="http://www.w3.org/2000/svg">
        <path fill="#6333ae" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,106.7C384,96,480,64,576,74.7C672,85,768,139,864,144C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    </div>

    <div class="pt-3 d-none d-lg-none d-md-block">
      <svg viewBox="0 -30 1440 220"xmlns="http://www.w3.org/2000/svg">
        <path fill="#6333ae" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,106.7C384,96,480,64,576,74.7C672,85,768,139,864,144C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    </div>

    <!-- About Me Section -->
    <section id="about" class="container py-5">
      <div class="row align-items-center">

        <!-- Desktop -->
        <div class="col-lg-6 d-none d-lg-block">
          <div class="d-grid skill-grid gap-3">
            <!-- Web Developer Card -->
            <div class="card skill-card rounded-5 p-3 mx-auto" 
            style="background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 13px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';"
            >
              <div class="card-body d-flex align-items-center gap-4">
                <img src="images/webdeveloper.png" alt="Web Developer" width="50" />
                <h5 class="fw-semibold" style="color:#FAF9F6">Web Developer</h5>
              </div>
            </div>
            <!-- UI/UX Designer Card -->
            <div class="card skill-card rounded-5 p-3 mx-auto" 
            style="background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 13px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">

              <div class="card-body d-flex align-items-center gap-4">
                <img src="images/uidesigner.png" alt="UI/UX Designer" width="50" />
                <h5 class="fw-semibold" style="color:#FAF9F6">UI/UX Designer</h5>
              </div>
            </div>
            <!-- CMS Developer Card -->
            <div class="card skill-card rounded-5 p-3 mx-auto" 
            style="background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
            onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 13px #000000ff';"
            onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">
              <div class="card-body d-flex align-items-center gap-4">
                <img src="images/cmsdeveloper.png" alt="CMS Developer" width="50" />
                <h5 class="fw-semibold" style="color:#FAF9F6">CMS Developer</h5>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Tablet -->
        <div class="col-12 d-none d-lg-none d-md-block mb-5">
          <div class="row gx-3 gy-3 justify-content-center">
            <!-- Web Developer Card -->
            <div class="col-12 col-md-4 d-flex justify-content-center">
              <div class="card skill-card rounded-5 p-3 w-100"
                style="background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 13px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">
                <div class="card-body d-flex align-items-center gap-3 p-2">
                  <img src="images/webdeveloper.png" alt="Web Developer" width="50" />
                  <h6 class="fw-semibold mb-0" style="color:#FAF9F6">Web Developer</h6>
                </div>
              </div>
            </div>
            <!-- UI/UX Designer Card -->
            <div class="col-12 col-md-4 d-flex justify-content-center">
              <div class="card skill-card rounded-5 p-3 w-100"
                style="background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 13px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">
                <div class="card-body d-flex align-items-center gap-3 p-2">
                  <img src="images/uidesigner.png" alt="UI/UX Designer" width="50" />
                  <h6 class="fw-semibold mb-0" style="color:#FAF9F6">UI/UX Designer</h6>
                </div>
              </div>
            </div>
            <!-- CMS Developer Card -->
            <div class="col-12 col-md-4 d-flex justify-content-center">
              <div class="card skill-card rounded-5 p-3 w-100"
                style="background-color: #2c2c2e; border: 3px solid #aa7eee; transition: all 0.3s ease;"
      onmouseover="this.style.borderColor='#6333ae'; this.style.boxShadow='0 0 13px #000000ff';"
      onmouseout="this.style.borderColor='#aa7eee'; this.style.boxShadow='none';">
                <div class="card-body d-flex align-items-center gap-3 p-2">
                  <img src="images/cmsdeveloper.png" alt="CMS Developer" width="50" />
                  <h6 class="fw-semibold mb-0" style="color:#FAF9F6">CMS Developer</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Content -->
        <div class="col-lg-6 d-flex align-items-start text-start text-lg-start">


    <div class="me-4 flex-shrink-0 d-none d-lg-block" style="width: 3px; height: 100%; min-height: 200px; background-color: #aa7eee; border-radius: 2px;"></div>
    <div class="me-4 flex-shrink-0 d-none d-lg-none d-md-block " style="width: 3px; height: 100%; min-height: 160px; background-color: #aa7eee; border-radius: 2px;"></div>
    <div class="me-4 flex-shrink-0 d-block d-md-none" style="width: 3px; height: 100%; min-height: 215px; background-color: #aa7eee; border-radius: 2px;"></div>
    
    <div class="flex-grow-1">
            <h2 class="fw-bold mb-4 fs-1" style="color: #aa7eee;">About Me</h2>

    <!-- Display Mode -->
  <div id="display-mode">
    <div id="paragraph-wrapper">
      <p id="p1" class="text-secondary fs-5"><?= htmlspecialchars($row['paragraph1']) ?></p>
      <p id="p2" class="text-secondary fs-5"><?= htmlspecialchars($row['paragraph2']) ?></p>
    </div>

    <?php if (isset($_SESSION['user_id'])): ?>
      <button class="btn btn-outline-light" id="edit-button">Edit</button>
    <?php endif; ?>
  </div>

  <!-- Edit Mode -->
  <form id="edit-form" style="display: none;">
    <div id="paragraph-editor">
      <textarea name="paragraph1" id="edit-p1" rows="4" class="form-control mb-3"><?= htmlspecialchars($row['paragraph1']) ?></textarea>
      <textarea name="paragraph2" id="edit-p2" rows="4" class="form-control mb-3"><?= htmlspecialchars($row['paragraph2']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
  </form>

            <div class="d-flex flex-wrap justify-content-start gap-3">

              <a class="btn border border-2 rounded-5 btn-outline-dark mt-3"
                style="background-color: #aa7eee; margin-left: 0 !important; margin-right: 0 !important;"
                onmouseover="this.style.backgroundColor='#6333ae';"
                onmouseout="this.style.backgroundColor='#aa7eee';"
                href="skillscertificates.php">View Skills & Certificates</a>
              <a class="btn border border-2 rounded-5 btn-outline-dark mt-3"
                style="background-color: #aa7eee; margin-left: 0 !important; margin-right: 0 !important;"
                onmouseover="this.style.backgroundColor='#6333ae';"
                onmouseout="this.style.backgroundColor='#aa7eee';"
                href="projects.php">View Projects</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <script>
  function switchToEdit() {
    document.getElementById('display-mode').style.display = 'none';
    document.getElementById('edit-form').style.display = 'block';
  }

  function cancelEdit() {
    document.getElementById('edit-form').style.display = 'none';
    document.getElementById('display-mode').style.display = 'block';
  }

  // Attach edit button listener (if present)
  const editBtn = document.getElementById('edit-button');
  if (editBtn) {
    editBtn.addEventListener('click', switchToEdit);
  }

  // AJAX update
  document.getElementById('edit-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const p1 = formData.get('paragraph1');
    const p2 = formData.get('paragraph2');

    fetch(window.location.href, {
      method: 'POST',
      body: formData
    })
    .then(res => res.text())
    .then(() => {
      // Update only the paragraph text (no structure change)
      document.getElementById('p1').innerText = p1;
      document.getElementById('p2').innerText = p2;

      cancelEdit(); // Go back to display mode
    })
    .catch(error => console.error('Update failed', error));
  });
  </script>


    <!-- JS -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/script.js"></script>
  </body>
  </html>
