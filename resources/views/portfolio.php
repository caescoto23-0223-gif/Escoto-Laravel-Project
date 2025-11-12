<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #0a0a0a;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            scroll-behavior: smooth;
        }
        .navbar {
            background-color: black;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar .nav-link {
            color: white !important;
            font-size: 18px;
        }
        .navbar .nav-link:hover, .active {
            color: #ffcc00 !important;
            border-bottom: 2px solid #ffcc00;
        }
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid #ffcc00;
            box-shadow: 0 0 15px #ffcc00;
        }
        .btn-glow {
            background: #ff9800;
            border: none;
            color: #000;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0 0 8px #ff9800;
            transition: all 0.3s;
            cursor: pointer;
        }
        .btn-glow:hover {
            background: #e68900;
            box-shadow: 0 0 15px #ff9800;
        }
        section {
            padding: 120px 20px 100px;
        }
        .hero h1 {
            font-size: 3rem;
            text-shadow: 0 0 5px #ff9800;
            margin-bottom: 15px;
        }
        .hero p {
            font-size: 1.2rem;
            color: #ccc;
            margin-bottom: 20px;
        }
        .progress-bar {
            color: black !important;
            font-weight: bold;
        }
        .card {
            background: #222;
            color: white;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(255, 0, 179, 0.3);
        }
        .navbar-brand span {
            background-color: #ff9800;
            color: rgb(0, 0, 0);
            padding: 5px 10px;
            border-radius: 5px;
        }
        .icon-btn {
            display: inline-block;
            width: 60px;
            height: 40px;
            background-size: 60%;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 50%;
            border: 2px solid transparent;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
            margin: 0 10px;
        }
        .icon-btn:hover {
            transform: scale(1.1);
        }
        .form-control {
            background: #222;
            border: 1px solid #6200ff;
            color: #fff;
            padding: 12px;
            border-radius: 5px;
        }
        .form-control:focus {
            border-color: #e600b4;
            box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
        }
        #form-status {
            color: #ff9800;
            font-weight: bold;
        }
        .btn-submit {
            background-color: #ff9800;
            color: black;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 5px;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #e68900;
            color: white;
            box-shadow: 0 0 15px rgba(255, 152, 0, 0.8);
        }
        .social-links a {
            font-size: 24px;
            color: #ff9800;
            transition: transform 0.3s, color 0.3s;
        }
        .social-links a:hover {
            transform: scale(1.2);
            color: #e68900;
        }
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1rem;
            }
            #projects .card {
                margin-bottom: 20px;
            }
        }
    
        .footer {
            background-color: #111;
            color: #fff;
            padding: 40px 20px 20px;
            margin-top: 50px;
            text-align: center;
        }
        .footer .social-links a {
            margin: 0 12px;
            font-size: 50px;
            color: #ff9800;
            transition: color 0.3s, transform 0.3s;
        }
        .footer .social-links a:hover {
            color: #e68900;
            transform: scale(1.2);
        }
        .footer p {
            margin-top: 20px;
            color: #bbb;
            font-size: 14px;
        }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-warning" href="#home">Escoto's Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#achievements">Achievements</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
   <!-- Hero Section -->
   <section id="home" class="hero">
    <h3>Hello World, I'm</h3>
    <h1 class="text-warning">Christian Aerone Escoto</h1>
    <p>currently pursuing a Bachelor of Science in Computer Science  <br>at City College of Angeles. 👋</p>
    <img src="https://lh3.googleusercontent.com/a/ACg8ocJGXRKvJMjWVjhgaZ6-W-z8seMRnowKjvaB3CalJRrFnffcvwQ=s288-c-no" alt="" class="profile-img">
    <a href="#projects" class="btn btn-glow mt-3">Click Here</a>
</section>
    <!-- Achievements Section -->
    <section id="achievements" class="container mt-5">
        <h2 class="text-center mb-4">Achievements
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.15752-9/486458807_1409223733544879_7441537837012788961_n.jpg?stp=dst-jpg_p526x395_tt6&_nc_cat=109&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEHt_h5ef6rj0iFcvOM8EDoMfzmFXvSkxwx_OYVe9KTHMkMKUzBsTRQG-gtp6mh4pYoIUu7V1alq7pXjIRyj7OX&_nc_ohc=ttnoCUWlPMAQ7kNvgGH-qXC&_nc_oc=AdnD21m6-XUA6goXmCaU-MJaxV-HYkeXxs6VZcsc8uwTkQRFaplqIpbbmctRg6WFNklgcz4hoG-yIJcnyuPaIymY&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fmnl4-3.fna&oh=03_Q7cD1wHEWdDcdpCnKrJNNeRDd0LYE9OBBSuzh7B8s4uO4k02WQ&oe=68130191" class="card-img-top" alt="AI Image Recognition Project">
                    <div class="card-body">
                        <h5 class="card-title">UNI 2024 - 6 Special Awards</h5>
                        <p class="card-text">My First Job Experience and 1st Achievement.</p>
                    </div>
                   
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.15752-9/487202709_1001503218617384_765386465029833363_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=101&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeG1OykoHyaKP4xLqGoWeMLhvqx8YInzoIy-rHxgifOgjKQQDBDJ2qlGuTw8es9JitJ5FURDVFYktnmRRzFJN5Cm&_nc_ohc=iJ5RNhj5x8AQ7kNvgGNZIYR&_nc_oc=Adn1kp4dPcKIqdbsitXk5rfwOHNFkjr1mVOuA3BsL8Nlx2XLFumJTHAT4amW00CS51jtyOIY7xsW3VN-7u7LZWkU&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fmnl4-2.fna&oh=03_Q7cD1wEjyfc8-PQZmto6l__dPMHJo72dRTUQVU9Qt_A2tYoA9g&oe=6813271B" class="card-img-top" alt="Inventory Management System Project">
                    <div class="card-body">
                        <h5 class="card-title">DUO SINGING COMPETITION</h5>
                        <p class="card-text">1st RUNNER UP, My First Achievement in Singing</p>
                    </div>
                    
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.15752-9/487750158_2371881683187538_3919242305984377215_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeFwUuaTiFOrsgt_8_lH2dGlo7-yGfR9mUSjv7IZ9H2ZRL0WZCVrz8_OsWaxzyPEHsJTfARBVFi0mfw-kxeLoWH1&_nc_ohc=PHKSrDxjoNsQ7kNvgEyle5u&_nc_oc=Adko2yRtRY4-T2Vl0M-HPrh41vpgCkW1Q4DaAoXMGPgL36xUuFgyiiv_cB6RcTy7S-QTTz7aZ-1mOEwpDL84x8tO&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fmnl4-6.fna&oh=03_Q7cD1wETlExJwF_iuHIS1OwKfVnLXETcSVclZUXxoge9W5UW-Q&oe=681312E9">
                    <div class="card-body">
                        <h5 class="card-title">HAKOT AWARD 2023</h5>
                        <p class="card-text">Best In PE, Science , Singing , CheerDance , etc..</p>
                    </div>
                   
                </div>
            </div>
        </div>
        </section>
    <!-- Skills Section -->
    <section id="skills" class="container mt-5">
        <h2 class="text-center">My Skills</h2>
        <div class="progress my-2">
            <div class="progress-bar bg-success" style="width: 80%">HTML & CSS - 70%</div>
        </div>
        <div class="progress my-2">
            <div class="progress-bar bg-success" style="width: 50%">JavaScript - 30%</div>
        </div>
    </section>
 <!-- Projects Section -->
<section id="projects" class="container mt-5">
    <h2 class="text-center mb-4">My Projects</h2>
    <section id="projects" class="container">
        <div class="row my-5">
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HTML Basics</h5>
                        <p class="card-text">Introduction of tags in HTML.</p>
                        <a href="https://drive.google.com/file/d/1oAcCD1ZBvTNj6A6_k_fakOGHWmwxtv_K/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HTML Styles</h5>
                        <p class="card-text">Using Style to design the website.</p>
                        <a href="https://drive.google.com/file/d/1c7dsoxRzJZ1y5XKnFohdlF4PhI4MSgv7/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Using CSS to design the website.</p>
                        <div class="d-flex align-items-center gap-5">
                            <a href="https://drive.google.com/file/d/1yP4NmppOYwEvTbwDDQXqiI897qRAurtq/view?usp=sharing" target="_blank" class="text-start">
                                <button class="btn btn-warning">SHOW HTML</button>
                            </a>
                            <a href="https://drive.google.com/file/d/18BVfyJW4_Mi715_xJhoZgqTtlTpALGLd/view?usp=sharing" target="_blank" class="text-end">
                                <button class="btn btn-warning">SHOW CSS</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    
        <div class="row my-5">
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bootstrap</h5>
                        <p class="card-text">Using Bootstrap to design the website.</p>
                        <a href="https://drive.google.com/file/d/192uCFu09A7G7Z3qCvk7eeluh23x8TomE/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">Using JavaScript for interaction.</p>
                        <a href="https://drive.google.com/file/d/1VXImSDkENWW6OJd3SIxpx2iUbDR6tv_j/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Boostrap X JS</h5>
                        <p class="card-text">Integration of Bootstrap and JavaScript.</p>
                        <a href=https://drive.google.com/file/d/1-robtQ1N2SG48-gL7TT5yWbiGxNyiJFl/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW CODE</button>
                        </a>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
 <!-- Contact Section -->
<section id="contact" class="container mt-5">
    <h2 class="text-center">Contact Me</h2>
    <form id="contact-form">
        <div class="mb-3 form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            <small id="nameError" class="text-danger d-none" aria-live="polite">Name is required</small>
        </div>
        <div class="mb-3 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            <small id="emailError" class="text-danger d-none" aria-live="polite">Valid email is required</small>
        </div>
        <div class="mb-3 form-group">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter the subject" required>
            <small id="subjectError" class="text-danger d-none" aria-live="polite">Subject is required</small>
        </div>
        <div class="mb-3 form-group">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
            <small id="messageError" class="text-danger d-none" aria-live="polite">Message cannot be empty</small>
        </div>
        <button id="Send" type="submit" class="btn btn-glow">Send</button>
        <p id="form-status" class="mt-3 text-center"></p>
        
        <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script src="script.js"></script>
            </form>
        </section>
        
    </form>
</section>
<!-- Footer -->
<footer class="footer py-4">
    <div class="social-links">
        <a href="https://www.facebook.com/profile.php?id=100016563828361"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/chanitoescoto/"><i class="fab fa-instagram"></i></a>
       
        
    </div>
    <p class="mt-3">&copy; 2025 Christian Aerone Escoto</p>
</footer>
<script>
    document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault();

        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let subject = document.getElementById("subject").value.trim();
        let message = document.getElementById("message").value.trim();
        let formStatus = document.getElementById("form-status");

        let nameError = document.getElementById("nameError");
        let emailError = document.getElementById("emailError");
        let subjectError = document.getElementById("subjectError");
        let messageError = document.getElementById("messageError");

        let isValid = true;

        nameError.classList.add("d-none");
        emailError.classList.add("d-none");
        subjectError.classList.add("d-none");
        messageError.classList.add("d-none");
        formStatus.innerText = "";

        if (name === "") {
            nameError.classList.remove("d-none");
            isValid = false;
        }
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            emailError.classList.remove("d-none");
            isValid = false;
        }
        if (subject === "") {
            subjectError.classList.remove("d-none");
            isValid = false;
        }
        if (message === "") {
            messageError.classList.remove("d-none");
            isValid = false;
        }
        if (isValid) {
            formStatus.innerText = "✅ Message Sent Successfully!";
            formStatus.style.color = "green";

            setTimeout(() => {
                document.getElementById("contact-form").reset();
                formStatus.innerText = ""; 
            }, 3000);
        }
    });
    document.querySelectorAll("#name, #email, #subject, #message").forEach(input => {
        input.addEventListener("input", function () {
            document.getElementById(this.id + "Error").classList.add("d-none");
        });
    });
});
</script>
</body>
</html>
