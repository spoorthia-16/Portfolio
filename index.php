<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spoorthi A - Web Developer Portfolio</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>

    <header>
        <h1 class="site-name">🚀 Spoorthi's Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#achievements">Achievements</a></li>
                <li><a href="#certifications">Certifications</a></li>
                <li><a href="#recommendations">Recommendations</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="about" class="hero-section">
        <div class="about-content">
            <img src="20221222023030_IMG_0489.JPG" alt="Profile Image" class="profile-pic">
            <h2>Spoorthi A</h2>
            <h3>Passionate Web Developer</h3>
            <p>
                Hi! I'm Spoorthi A, a passionate web developer specializing in creating interactive, user-friendly websites and applications. 
                I love coding, problem-solving, and bringing ideas to life through technology.
            </p>
            <a href="Spoorthi.A.pdf" download class="btn-primary">
                📥 Download Resume
            </a>
        </div>
    </section>

    <section id="skills" class="section-alt">
        <h2>🛠️ My Skills</h2>
        <div class="skills-container">
            <div class="skill">
                <img src="html-logo.png" alt="HTML Logo">
                <p>HTML5</p>
            </div>
            <div class="skill">
                <img src="css-logo.png" alt="CSS Logo">
                <p>CSS3</p>
            </div>
            <div class="skill">
                <img src="JavaScript-Logo.png" alt="JavaScript Logo">
                <p>JavaScript</p>
            </div>
            <div class="skill">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Logo">
            <p>React</p>
           </div>
           <div class="skill">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python Logo">
            <p>Python</p>
           </div>
           <div class="skill">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node JS Logo">
            <p>Node.js</p>
           </div>
           <div class="skill">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" alt="Tailwind Logo">
            <p>Tailwind</p>
          </div>
            </div>
    </section>

    <section id="education">
        <h2>🎓 Education</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h3>Malnad College of Engineering - [2023 - 2027]</h3>
                <p><strong>B.E in Computer Science and Engineering</strong></p>
                <span class="date">Expected Graduation: February 2027</span>
            </div>
            <div class="timeline-item">
                <h3>Jawahar Navodaya Vidyalaya, Mysuru- [2021 - 2023]</h3>
                <p><strong>Pre-University Course (Science)</strong></p>
                <span class="date">Completed: March 2023</span>
            </div>
        </div>
    </section>

    <section id="projects" class="section-alt">
        <h2>📂 My Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <h3>Weather App</h3>
                <p>An interactive weather forecast app fetching live data using APIs. (HTML, CSS, JavaScript)</p>
                <a href="#" target="_blank" class="project-link">View Demo</a>
            </div>
            <div class="project-card">
                <h3>Task Manager</h3>
                <p>A simple to-do application with CRUD functionality. Demonstrates DOM manipulation. (HTML, CSS, JavaScript)</p>
                <a href="#" target="_blank" class="project-link">View Demo</a>
            </div>
            <div class="project-card">
                <h3>Portfolio Website</h3>
                <p>A responsive personal portfolio showcasing my skills and projects. (HTML, Responsive CSS)</p>
                <a href="#" target="_blank" class="project-link">View Source</a>
            </div>
        </div>
    </section>
    
    <section id="achievements">
        <h2>🏆 Achievements</h2>
        <ul class="list-bullet">
            <li> Participated in 24 hr Hackathon Cicada 2025 at Atria Institute of technology.</li>
            <li> Runner-up in Central VTU Women's Badminton 2025.</li>
            <li> Achieved 8.8 GPA overall </li>
        </ul>
    </section>

    <section id="certifications" class="section-alt">
        <h2>📜 Certifications</h2>
        <div class="certifications-grid">

            <div class="cert-card">
                <img src="web-development-fundamentals.png" alt="IBM Web Development Fundamentals Certificate" class="cert-image-display">
                <div class="cert-details">
                    <h3>Web Development Fundamentals</h3>
                    <p>Issued by **IBM SkillsBuild**</p>
                </div>
            </div>

            <div class="cert-card">
                <img src="DMW.jpeg" alt="Infosys Data Warehouse Essential Concepts Certificate" class="cert-image-display">
                <div class="cert-details">
                    <h3>Data Warehouse Essential: Concepts</h3>
                    <p>Issued by **Infosys Springboard**</p>
                </div>
            </div>

            <div class="cert-card">
                <img src="Cicada.jpeg" alt="CICADA 2025 Hackathon Participation Certificate" class="cert-image-display">
                <div class="cert-details">
                    <h3>24-Hour Hackathon Participant</h3>
                    <p>Event: CICADA 2025 Tech Fest</p>
                    <p>Held by: **ATRIA Institute of Technology**</p>
                </div>
            </div>

        </div>
    </section>

    <section id="recommendations">
        <h2>🗣️ Recommendations</h2>
        <ul id="recommendations-list" class="recommendations-list">
            <li>"Spoorthi is a highly skilled developer with a strong work ethic."</li>
            <li>"A creative problem solver and excellent team player."</li>
            <li>"Delivers projects on time and exceeds expectations."</li>
        </ul>

        <h3>Add a Recommendation</h3>
        <textarea id="recommendation-input" placeholder="Write your recommendation..." rows="4"></textarea><br>
        <button onclick="addRecommendation()" class="btn-secondary">Submit Recommendation</button>
    </section>

    
<section id="contact" class="section-alt">
    <h2>✉️ Get In Touch</h2>
    
    <div id="form-messages" style="text-align: center; margin-bottom: 20px;"></div>
    
    <form id="contact-form" action="contact_process.php" method="POST"> 
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>
        </div>
        <button type="submit" class="btn-primary" id="submit-btn">Send Message</button>
    </form>
</section>

    <footer>
        <p>&copy; 2025 Spoorthi A. All rights reserved.</p>
    </footer>

    <a href="#about" class="home-icon">⬆️</a>

    <script src="pro.js"></script>
</body>
</html>