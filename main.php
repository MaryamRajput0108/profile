<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maryam Rajput | Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }
    body {
    background-image: url('https://www.springboard.com/blog/wp-content/uploads/2022/08/programming-language-jobs.png');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  color: #f0f0f0;
  overflow-x: hidden;
}

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
      padding: 2rem;
      background-image: url('https://www.springboard.com/blog/wp-content/uploads/2022/08/programming-language-jobs.png');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .hero h2 {
      font-size: 2.5rem;
      color: #00ffff;
      margin-bottom: 1rem;
    }
    .hero h1 {
      font-size: 4rem;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.2rem;
      margin-top: 1rem;
      color: #aaa;
      height: 1.5em;
    }
    .btn {
      margin-top: 2rem;
      padding: 1rem 2rem;
      border: none;
      background: #00ffff;
      color: #000;
      font-size: 1rem;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .btn:hover {
      transform: scale(1.05);
      background: #0ff;
      box-shadow: 0 0 15px #0ff;
    }
    .about {
      padding: 6rem 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      max-width: 1000px;
      margin: auto;
      position: relative;
    }
    .about h2 {
      font-size: 2.8rem;
      margin-bottom: 1rem;
      color: #00ffff;
      position: relative;
      z-index: 1;
      font-weight: bold;
    }
    .about p {
      font-size: 1.1rem;
      color: #ccc;
      line-height: 1.9;
      position: relative;
      z-index: 1;
      color:rgb(184, 243, 243);
      font-weight: bold;
    }

.about:hover{
  background-color: rgba(34, 57, 80, 0.1);
}

.about p:hover {
  color: white;
}


    /* .about-img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      overflow: hidden;
      margin-bottom: 1.5rem;
      border: 4px solid #00ffff;
      box-shadow: 0 0 20px #471c2566;
      transition: transform 0.4s ease;

    } */

    .about-img {
      width: 180px;
      height: 180px;
      background-image: url('Snapchat-763213886.jpg'); /* Replace this */
      background-size: cover;
      background-position: center;
      border-radius: 50%;
    }


    .about-img:hover {
      transform: scale(1.05);
    }
  .testimonials {
  padding: 60px 0;
  background-color: transparent;
  backdrop-filter: blur(1px); /* Optional - adds a soft blur effect */
  text-align: center;
}

    .testimonials h2 {
      color: #00ffff;
      margin-bottom: 2rem;
    }
    .testimonial-container {
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      width: 100%;
      text-align: center;
    }
    .testimonial-card {
      background: #2b2b2b;
      padding: 3rem;
      width: 750px; 
      margin: 0 15px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(119, 158, 158, 0.1);
      color: #ccc;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .testimonial-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
    }
    .testimonial-card p {
      font-size: 1.1rem;
    }
    .testimonial-card span {
      font-size: 1rem;
      color: #aaa;
    }
    .testimonial-card .stars {
      color: #ffc107;
      font-size: 1.5rem;
      margin-top: 1rem;
    }
    .testimonial-card .stars span {
      margin-right: 5px;
    }
    @media (max-width: 768px) {
      .testimonial-cards {
        flex-direction: column;
        align-items: center;
      }
      .testimonial-card {
        margin-bottom: 20px;
        width: 90%;
      }
    }
    .tagline {
      color: #00ffff;
      font-size: 1.4rem;
      font-weight: 600;
      margin-top: 1rem;
      transition: all 0.3s ease;
    }
    .tagline:hover {
      color: #fff;
      text-decoration: underline;
    }

/* ✅ Section with hero image in background */
.quote-section {
  position: relative;
  height: 400px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.quote-bg-overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: url('your-hero-image.jpg') no-repeat center center/cover;
  opacity: 0.2;
  z-index: -1;
}

/* ✅ Inner quote slider container */
.quote-slider {
  position: relative;
  width: 90%;
  max-width: 1100px;
  height: auto;
}

/* ✅ Individual Quote Cards */
.quote-card {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  padding: 30px 20px;
  border-radius: 20px;
  color: #fff;
  text-align: center;
  opacity: 0;
  transform: scale(0.9);
  transition: opacity 0s ease, transform 0s ease;
}

.quote-card.active {
  opacity: 1;
  transform: scale(1);
  z-index: 2;
}

/* ✅ Quote Image */
.quote-card img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-bottom: 15px;
  object-fit: cover;
  border: 2px solid #fff;
}

/* ✅ Quote Text */
.quote-text {
  font-size: 1.4rem;
  font-style: italic;
  margin-bottom: 10px;
}

/* ✅ Author Name */
.author {
  font-size: 1rem;
  color: #ccc;
}

/* ✅ Responsive */
@media (max-width: 600px) {
  .quote-text {
    font-size: 1.1rem;
  }
  .quote-card img {
    width: 50px;
    height: 50px;
  }
}


.glass-section {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.75);
  border-radius: 20px;
  padding: 40px 30px;
  margin: 50px auto;
  max-width: 800px;
  border: 1px solid rgba(255, 215, 0, 0.2);
  transition: all 0.3s ease-in-out;
}

.glass-section h2 {
  color: #ffd700;
  font-size: 28px;
  margin-bottom: 20px;
  text-align: center;
  text-shadow: 2px 2px 4px #000;
}

.glass-section p {
  font-size: 16px;
  line-height: 1.6;
  color: #f1f1f1;
  text-shadow: 1px 1px 3px #000;
}

#read-more-btn {
  background-color: transparent;
  color: #ffd700;
  border: 1px solid #ffd700;
  padding: 10px 20px;
  font-size: 14px;
  border-radius: 8px;
  cursor: pointer;
  margin-top: 15px;
  box-shadow: 0 4px 12px rgba(255, 215, 0, 0.3);
  transition: all 0.3s ease-in-out;
}

#read-more-btn:hover {
  background-color: #ffd700;
  color: #0d0d0d;
  box-shadow: 0 6px 20px rgba(255, 215, 0, 0.6);
}

</style>

</head>
<body>
 <nav> 
  <?php include('header.php')   ?>
 </nav>

  <section class="hero" id="home">
    <h2>Hi, I'm</h2>
    <h1>Maryam Rajput</h1>
    <p><span id="typed"></span></p>
    <a href="./Maryam-Rajput-Resume.pdf" download><button class="btn">Download Resume</button></a>
  </section>

  <section class="about" id="about">
  <div class="about-img"></div>
    <h2>About Me</h2> 
    <p>
      👩‍💻 I'm <strong>Maryam Rajput</strong> — a passionate Web Developer, Certified Ethical Hacker, and AI enthusiast.
      I bring creative energy to the digital space with futuristic designs and secure builds.
      <br><br>
      ⚡ My goal? Build something meaningful, solve real-world problems, and leave a spark in every project I touch.
      <br><br>
      🌐 I speak fluent JavaScript, breathe in Python, dance in HTML/CSS, and build cool apps in PHP and MySQL.
    </p>   
  </section>

  <section class="testimonials" id="testimonials">
    <h2>What Clients Say</h2>
    <div class="testimonial-container">
      <div class="testimonial-card" id="testimonial-card"></div>
    </div>
  </section>

<!-- ✅ Fancy Quotes Slider Section -->
<section class="quote-section">
  <div class="quote-bg-overlay"></div>
  <div class="quote-slider">
    
    <div class="quote-card active">
      <p class="quote-text">"Stay focused and never give up."</p>
      <p class="author">- Maryam Rajput</p>
    </div>

    <div class="quote-card">
      <p class="quote-text">"Believe in yourself and magic will happen."</p>
      <p class="author">-Elon Musk </p>
    </div>

    <div class="quote-card">
      <p class="quote-text">"Small steps every day lead to big results."</p>
      <p class="author">- Motivation Daily</p>
    </div>
  </div>
</section>

  <section class="glass-section">
    <div class="container">
      <h2>Acknowledgements & Personal Blog</h2>
      <p id="blog-preview">
        I would like to express my heartfelt gratitude to all those who supported me during this journey...
      </p>
      <p id="full-blog" style="display: none;">
        ...Special thanks to my mentors, my family, and my wonderful community. Their guidance, patience, and unwavering belief in me pushed me beyond limits. Through this blog, I aim to share my learnings, experiences, failures, and little wins — hoping to inspire someone just like me who dares to dream in code.
      </p>
      <button id="read-more-btn">Read More</button>
    </div>
  </section>





<footer>
    <?php include('footer.php')  ?>
  </footer>
  
  <script>
    const roles = ["Web Developer", "App Developer", "Ethical Hacker", "AI Enthusiast"];
    let currentRoleIndex = 0;
    let typedElement = document.getElementById("typed");

    function typeAndRemove() {
      let role = roles[currentRoleIndex];
      let charIndex = 0;

      function type() {
        if (charIndex < role.length) {
          typedElement.innerHTML = role.substring(0, charIndex + 1);
          charIndex++;
          setTimeout(type, 100);
        } else {
          setTimeout(remove, 1000);
        }
      }

      function remove() {
        if (charIndex > 0) {
          typedElement.innerHTML = role.substring(0, charIndex - 1);
          charIndex--;
          setTimeout(remove, 50);
        } else {
          currentRoleIndex = (currentRoleIndex + 1) % roles.length;
          setTimeout(typeAndRemove, 500);
        }
      }

      type();
    }

    typeAndRemove();

    const testimonials = [
      { text: "Maryam is an exceptional web developer. Her coding skills are top-notch!", author: "John Doe", stars: 5 },
      { text: "I loved working with Maryam. Highly professional and dedicated to the craft!", author: "Jane Smith", stars: 4 },
      { text: "Maryam exceeded my expectations. A true AI enthusiast with solid coding skills.", author: "Ali Ahmed", stars: 5 }
    ];

    let currentTestimonialIndex = 0;

    function updateTestimonial() {
      const testimonial = testimonials[currentTestimonialIndex];
      const card = document.getElementById("testimonial-card");
      card.innerHTML = `
        <p>"${testimonial.text}"</p>
        <span>- ${testimonial.author}</span>
        <div class="stars">
          ${"&#9733;".repeat(testimonial.stars)}
        </div>
      `;
      currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
    }

    setInterval(updateTestimonial, 5000);
    updateTestimonial();
    
  let current = 0;
  const cards = document.querySelectorAll(".quote-card");

  setInterval(() => {
    cards[current].classList.remove("active");
    current = (current + 1) % cards.length;
    cards[current].classList.add("active");
  }, 4000);

  const btn = document.getElementById("read-more-btn");
const fullBlog = document.getElementById("full-blog");

btn.addEventListener("click", () => {
  if (fullBlog.style.display === "none") {
    fullBlog.style.display = "block";
    btn.textContent = "Read Less";
  } else {
    fullBlog.style.display = "none";
    btn.textContent = "Read More";
  }
});
</script>
  
</body>
</html>
