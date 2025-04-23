<!DOCTYPE html>
<html lang="en">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.6rem 2rem;
      background: linear-gradient(135deg, red, rgb(65, 5, 73));
      position: relative;
      z-index: 10;
      flex-wrap: wrap;
    }

    .left-group {
      display: flex;
      align-items: center;
      gap: 0.7rem;
    }

    .logo-image {
      width: 40px;
      height: 40px;
      background-image: url('Snapchat-763213886.jpg'); /* Replace this */
      background-size: cover;
      background-position: center;
      border-radius: 50%;
    }

    .logo-name {
      font-size: 1.1rem;
      font-weight: bold;
      color: #fff;
    }

    .right-group {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      position: relative;
    }

    .nav-links {
      display: flex;
      gap: 1.2rem;
    }

    .nav-links a {
      text-decoration: none;
      color: #fff;
      font-size: 1rem;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #63f7a1;
    }

    .hamburger {
      font-size: 1.5rem;
      cursor: pointer;
      user-select: none;
      position: relative;
      z-index: 20;
    }

    .menu {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 60px; /* aligns menu below hamburger */
      right: 0;
      background-color: #1e1e2f;
      padding: 1rem 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      z-index: 15;
    }

    .menu a {
      margin: 0.5rem 0;
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
    }

    .show-menu {
      display: flex;
    }

    @media screen and (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
        padding: 1rem;
      }

      .right-group {
        width: 100%;
        justify-content: space-between;
        margin-top: 0.5rem;
      }

      .nav-links {
        display: none;
      }

      .menu {
        right: 1rem;
        top: 50px;
        width: 180px;
      }
    }

    @media screen and (max-width: 480px) {
      .logo-image {
        width: 30px;
        height: 30px;
      }

      .logo-name {
        font-size: 1rem;
      }

      .hamburger {
        font-size: 1.2rem;
      }

      .menu a {
        font-size: 0.95rem;
      }
    }

/* ==== MODAL STYLES ==== */
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(6px);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background: linear-gradient(135deg, #1f1f2b, #2d2d3e);
  color: #fff;
  padding: 2rem;
  border-radius: 16px;
  width: 90%;
  max-width: 600px;
  position: relative;
  animation: fadeIn 0.3s ease;
  box-shadow: 0 0 15px rgba(99, 247, 161, 0.3);
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}

.close {
  position: absolute;
  top: 30px;
  right: 25px;
  font-size: 28px;
  color: #ff6b6b;
  cursor: pointer;
  transition: 0.3s ease;
}

.close:hover {
  color: #fff;
}

.about-header {
  text-align: center;
  margin-bottom: 1rem;
}

.about-header h2 {
  color: #63f7a1;
  margin-bottom: 0.3rem;
}

.subtitle {
  color: #bbb;
  font-size: 0.9rem;
  font-style: italic;
}

.profile-pic {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #63f7a1;
  display: block;
  margin: 1rem auto;
}

.about-body p {
  text-align: justify;
  margin-bottom: 1rem;
  font-size: 1rem;
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin-top: 1rem;
}

.social-links a {
  background-color: #292940;
  color: #63f7a1;
  padding: 0.5rem 1rem;
  border-radius: 8px;
  text-decoration: none;
  transition: all 0.3s ease;
  font-weight: bold;
  font-size: 0.95rem;
  box-shadow: 0 0 8px rgba(99, 247, 161, 0.15);
}

.social-links a:hover {
  background-color: #63f7a1;
  color: #111;
  box-shadow: 0 0 15px #63f7a1;
}

@media (max-width: 480px) {
  .modal-content {
    padding: 1.2rem;
  }

  .about-body p {
    font-size: 0.9rem;
  }

  .social-links {
    flex-direction: column;
    align-items: center;
  }
}

.c-modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(6px);
  z-index: 999;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background: #1c1c2a;
  color: #fff;
  padding: 2rem;
  border-radius: 16px;
  width: 90%;
  max-width: 600px;
  position: relative;
  box-shadow: 0 0 20px rgba(99, 247, 161, 0.3);
  animation: fadeIn 0.3s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

.close-contact {
  position: absolute;
  top: 30px;
  right: 15px;
  font-size: 24px;
  color: #f86;
  cursor: pointer;
}

.contact-links {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  margin-bottom: 1rem;
  justify-content: center;
}

.contact-links a {
  background-color: #292940;
  padding: 0.5rem 1rem;
  border-radius: 8px;
  text-decoration: none;
  color: #63f7a1;
  font-weight: bold;
  transition: 0.3s;
}

.contact-links a:hover {
  background-color: #393959;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.contact-form input,
.contact-form textarea {
  background: #2e2e3e;
  border: none;
  border-radius: 8px;
  padding: 0.8rem;
  color: #fff;
  font-size: 0.95rem;
}

.contact-form button {
  background: #63f7a1;
  color: #111;
  padding: 0.8rem;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s ease;
}

.contact-form button:hover {
  background: #4fdc91;
}

.map-container iframe {
  border-radius: 10px;
  width: 100%;
}


/* Projects Modal */
.modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(6px);
  z-index: 999;
  justify-content: center;
  align-items: center;
}

.modal-content.project-content {
  background: #1c1c2a;
  color: #fff;
  padding: 2rem;
  border-radius: 16px;
  width: 90%;
  max-width: 700px;
  max-height: 90vh;
  overflow-y: auto;
  position: relative;
  box-shadow: 0 0 25px rgba(99, 247, 161, 0.3);
  animation: fadeIn 0.3s ease-in-out;
}

/* Fixed cross (X) button */
.close-projects {
  position: sticky;
  top: 0;
  left: 100%;
  transform: translateX(-100%);
  background: #222;
  padding: 0.4rem 0.7rem;
  border-radius: 50%;
  font-size: 24px;
  color: #f86;
  cursor: pointer;
  z-index: 1000;
}

/* Project Card Styles */
.projects-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  margin-top: 1rem;
}

.project-card {
  background: #2a2a3e;
  padding: 1rem;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(99, 247, 161, 0.1);
}

.project-card h3 {
  margin-bottom: 0.3rem;
  color: #63f7a1;
}

.project-card p {
  font-size: 0.95rem;
  line-height: 1.4;
  margin-bottom: 0.8rem;
}

.project-card a {
  background-color: #63f7a1;
  color: #111;
  text-decoration: none;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  font-weight: bold;
  display: inline-block;
  transition: 0.3s;
}

.project-card a:hover {
  background-color: #4fdc91;
}




</style>
</head>

  <header>
    <!-- Left Side: Logo + Name -->
    <div class="left-group">
      <div class="logo-image"></div>
      <div class="logo-name">MARYAM RAJPUT</div>
    </div>

    <!-- Right Side: Nav + Hamburger -->
    <div class="right-group">
      <nav class="nav-links">
        <a href="p" id="openContact"> Contact </a>
        <a href="#" id="openProjects">Projects</a>
        <a href="" id="openAbout">About</a>
      </nav>
      <div class="hamburger" id="rightHamburger">&#9776;</div>

      <!-- Dropdown Menu -->
      <div class="menu" id="rightMenu">
        <a href="#">Profile</a>
        <a href="#">Theme</a>
        <a href="#">Support</a>
      </div>
    </div>
  </header>

  
<body>
  <!-- About Modal -->
<div id="aboutModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="about-header">
      <h2>About Me</h2>
      <p class="subtitle">Web Developer | Cybersecurity Enthusiast</p>
    </div>
    <div class="about-body">
      <img src="Snapchat-1124356338.jpg" alt="My Photo" class="profile-pic">
      <p>
        I'm <strong>Maryam Rajput</strong>, a passionate developer and ethical hacker in training. I love building secure and creative digital spaces. Always learning, always building.
      </p>
      <div class="social-links">
        <a href="https://github.com/yourusername" target="_blank">🌐 GitHub</a>
        <a href="https://linkedin.com/in/yourprofile" target="_blank">🔗 LinkedIn</a>
        <a href="https://maryamrajpputt@gmail.com">✉️ Email Me</a>
      </div>
    </div>
  </div>
</div>

<!-- Contact Popup Modal -->
<div id="contactModal" class="c-modal">
  <div class="modal-content">
    <span class="close-contact">&times;</span>
    <h2>Let's Connect</h2>

    <!-- 🔗 Contact Links -->
    <div class="contact-links">
      <a href="mailto:youremail@example.com" target="_blank">📧 Email</a>
      <a href="https://wa.me/923001234567" target="_blank">💬 WhatsApp</a>
      <a href="https://www.linkedin.com/in/yourprofile" target="_blank">🔗 LinkedIn</a>
      <a href="https://www.instagram.com/yourprofile" target="_blank">📸 Instagram</a>
    </div>

    <!-- 📬 Contact Form -->
    <form class="contact-form" onsubmit="event.preventDefault(); alert('Message Sent!'); this.reset();">
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea rows="4" placeholder="Type your message here..." required></textarea>
      <button type="submit">Send</button>
    </form>

    <!-- 🗺️ Map -->
    <div class="map-container">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28897.925761757295!2d67.0309525!3d24.8813551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f993e30a34d%3A0xdea7469e26f58e9f!2sKarachi!5e0!3m2!1sen!2s!4v1713872942829!5m2!1sen!2s"
        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </div>
</div>



   <!-- Projects Modal -->
<div id="projectsModal" class="modal">
  <div class="modal-content project-content">
    <span class="close-projects">&times;</span>
    <h2>My Projects</h2>

    <div class="projects-list">
      <!-- 🔧 Project 1 -->
      <div class="project-card">
        <h3>Portfolio Website</h3>
        <p>A responsive and animated portfolio website built with HTML, CSS, and JS.</p>
        <a href="https://your-project-link.com" target="_blank">View Project</a>
      </div>

      <!-- 🛍️ Project 2 -->
      <div class="project-card">
        <h3>E-Commerce Clone</h3>
        <p>Daraz-style e-commerce project built using XAMPP and PHP with local DB.</p>
        <a href="#">View Project</a>
      </div>

      <!-- 🔐 Project 3 -->
      <div class="project-card">
        <h3>CyberSec Lab</h3>
        <p>Practice lab environment using Kali Linux, Metasploit, and Wireshark.</p>
        <a href="#">View Project</a>
      </div>
<!-- 🛍️ Project 2 -->
<div class="project-card">
  <h3>E-Commerce Clone</h3>
  <p>Daraz-style e-commerce project built using XAMPP and PHP with local DB.</p>
  <a href="#">View Project</a>
</div>

<!-- 🔐 Project 3 -->
<div class="project-card">
  <h3>CyberSec Lab</h3>
  <p>Practice lab environment using Kali Linux, Metasploit, and Wireshark.</p>
  <a href="#">View Project</a>
</div>



      <!-- 👩‍💻 More Projects -->
      <!-- Add as many as you want! -->
    </div>
  </div>
</div>




</body>

  <script>
    const rightHamburger = document.getElementById('rightHamburger');
    const rightMenu = document.getElementById('rightMenu');

    rightHamburger.addEventListener('click', (e) => {
      e.stopPropagation();
      rightMenu.classList.toggle('show-menu');
    });

    document.addEventListener('click', () => {
      rightMenu.classList.remove('show-menu');
    });

    rightMenu.addEventListener('click', e => e.stopPropagation());

// About Modal Logic
const aboutBtn = document.getElementById("openAbout");
const aboutModal = document.getElementById("aboutModal");
const closeBtn = aboutModal.querySelector(".close");

aboutBtn.addEventListener("click", (e) => {
  e.preventDefault();
  aboutModal.style.display = "flex";
});

closeBtn.addEventListener("click", () => {
  aboutModal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === aboutModal) {
    aboutModal.style.display = "none";
  }
});


  const contactBtn = document.getElementById("openContact");
  const contactModal = document.getElementById("contactModal");
  const closeContactBtn = document.querySelector(".close-contact");

  contactBtn.addEventListener("click", function (e) {
    e.preventDefault();
    contactModal.style.display = "flex";
  });

  closeContactBtn.addEventListener("click", function () {
    contactModal.style.display = "none";
  });

  window.addEventListener("click", function (e) {
    if (e.target === contactModal) {
      contactModal.style.display = "none";
    }
  });

  const openProjects = document.getElementById("openProjects");
  const projectsModal = document.getElementById("projectsModal");
  const closeProjects = document.querySelector(".close-projects");

  openProjects.addEventListener("click", function (e) {
    e.preventDefault();
    projectsModal.style.display = "flex";
  });

  closeProjects.addEventListener("click", function () {
    projectsModal.style.display = "none";
  });

  window.addEventListener("click", function (e) {
    if (e.target === projectsModal) {
      projectsModal.style.display = "none";
    }
  });
</script>



</script>


</html>
