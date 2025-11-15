<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ------------------------------
           GLOBAL BACKGROUND WITH GIF
        ------------------------------- */
        body {
            background: #000 url('67d89460550773.5a512c466d624.gif') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            scroll-behavior: smooth;
            position: relative;
            overflow-x: hidden;
        }

        /* DARK OVERLAY */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65);
            z-index: -1;
            backdrop-filter: blur(2px);
        }

        /* ------------------------------
               ANIMATIONS 
        ------------------------------- */
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(35px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes floatGlow {
            0% { transform: translateY(0); box-shadow: 0 0 15px #ffcc00; }
            50% { transform: translateY(-6px); box-shadow: 0 0 25px #ffcc00; }
            100% { transform: translateY(0); box-shadow: 0 0 15px #ffcc00; }
        }

        /* ------------------------------
              NAVBAR
        ------------------------------- */
        .navbar {
            background-color: rgba(0, 0, 0, 0.6);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(6px);
        }

        .navbar .nav-link {
            color: white !important;
            font-size: 18px;
        }

        .navbar .nav-link:hover, .active {
            color: #ffcc00 !important;
            border-bottom: 2px solid #ffcc00;
        }

        .navbar-brand span {
            background-color: #ff9800;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* ------------------------------
               HERO SECTION
        ------------------------------- */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            animation: fadeIn 1s ease-out forwards;
        }

        .hero h1, .hero h3, .hero p {
            animation: fadeUp 1.3s ease-out;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid #ffcc00;
            box-shadow: 0 0 15px #ffcc00;
            animation: floatGlow 3s infinite ease-in-out;
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
            animation: fadeUp 2s ease-out;
        }

        .btn-glow:hover {
            background: #e68900;
            box-shadow: 0 0 15px #ff9800;
        }

        section {
            padding: 120px 20px 100px;
            animation: fadeUp 1s ease-out;
        }

        /* ------------------------------
                CARDS
        ------------------------------- */
        .card {
            background: rgba(34, 34, 34, 0.85);
            color: white;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            backdrop-filter: blur(4px);
            animation: fadeUp 1.2s ease-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(255, 0, 179, 0.5);
        }

        /* ------------------------------
                FORM & FOOTER
        ------------------------------- */
        .form-control {
            background: rgba(34, 34, 34, 0.9);
            border: 1px solid #6200ff;
            color: #fff;
            padding: 12px;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #e600b4;
            box-shadow: 0 0 10px rgba(255, 152, 0, 0.7);
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 40px 20px 20px;
            margin-top: 50px;
            text-align: center;
            backdrop-filter: blur(4px);
        }
    </style>

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-warning" href="#home">LARAVEL PROJECT X GITHUB</a>
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

    <!-- HERO -->
    <section id="home" class="hero">
        <h3>Hello World, I'm</h3>
        <h1 class="text-warning">Christian Aerone Escoto</h1>
        <p>Currently Pursuing a Bachelor of Science In Computer Science <br>At City College of Angeles 👋</p>
        <img src="https://lh3.googleusercontent.com/a/ACg8ocJGXRKvJMjWVjhgaZ6-W-z8seMRnowKjvaB3CalJRrFnffcvwQ=s288-c-no" class="profile-img">
        <a href="#projects" class="btn btn-glow mt-3">Click Here</a>
    </section>

    <!-- ACHIEVEMENTS -->
    <section id="achievements" class="container mt-5">
        <h2 class="text-center mb-4">Achievements</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- your cards unchanged -->
            <div class="col">
                <div class="card h-100">
                    <img src="c:\Users\chan\Downloads\9a73f59a-0770-4936-b314-5ede513718db.jfif" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">UNI 2024 - 6 Special Awards</h5>
                        <p class="card-text">My First Job Experience and 1st Achievement.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="c:\Users\chan\Downloads\fd38be41-acb5-45cd-ac55-b576093b6018.jfif" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">DUO SINGING COMPETITION</h5>
                        <p class="card-text">1st RUNNER UP, My First Achievement in Singing</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="c:\Users\chan\Downloads\353677244_1613919029095932_5612173090006089607_n.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">HAKOT AWARD 2023</h5>
                        <p class="card-text">Best In PE, Science , Singing , CheerDance , etc..</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="container mt-5">
        <h2 class="text-center">My Skills</h2>
        <div class="progress my-2">
            <div class="progress-bar bg-success" style="width: 80%">HTML & CSS - 70%</div>
        </div>
        <div class="progress my-2">
            <div class="progress-bar bg-success" style="width: 50%">JavaScript - 30%</div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="container mt-5">
        <h2 class="text-center mb-4">My Projects</h2>

        <!-- your project cards unchanged -->
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card"><div class="card-body">
                    <h5 class="card-title">HTML Basics</h5>
                    <p class="card-text">Introduction of tags in HTML.</p>
                    <a href="https://drive.google.com/file/d/1oAcCD1ZBvTNj6A6_k_fakOGHWmwxtv_K/view?usp=sharing" target="_blank">
                        <button class="btn btn-warning">SHOW CODE</button>
                    </a>
                </div></div>
            </div>
            
            <div class="col-md-4">
                <div class="card"><div class="card-body">
                    <h5 class="card-title">HTML Styles</h5>
                    <p class="card-text">Using Style to design the website.</p>
                    <a href="https://drive.google.com/file/d/1c7dsoxRzJZ1y5XKnFohdlF4PhI4MSgv7/view?usp=sharing" target="_blank">
                        <button class="btn btn-warning">SHOW CODE</button>
                    </a>
                </div></div>
            </div>

            <div class="col-md-4">
                <div class="card"><div class="card-body">
                    <h5 class="card-title">CSS</h5>
                    <p class="card-text">Using CSS to design the website.</p>
                    <div class="d-flex align-items-center gap-5">
                        <a href="https://drive.google.com/file/d/1yP4NmppOYwEvTbwDDQXqiI897qRAurtq/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW HTML</button>
                        </a>
                        <a href="https://drive.google.com/file/d/18BVfyJW4_Mi715_xJhoZgqTtlTpALGLd/view?usp=sharing" target="_blank">
                            <button class="btn btn-warning">SHOW CSS</button>
                        </a>
                    </div>
                </div></div>
            </div>
        </div>

    </section>

    <!-- CONTACT -->
    <section id="contact" class="container mt-5">
        <h2 class="text-center">Contact Me</h2>

        <form id="contact-form">
            <div class="mb-3 form-group">
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                <small id="nameError" class="text-danger d-none">Name is required</small>
            </div>

            <div class="mb-3 form-group">
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                <small id="emailError" class="text-danger d-none">Valid email is required</small>
            </div>

            <div class="mb-3 form-group">
                <input type="text" class="form-control" id="subject" placeholder="Enter the subject" required>
                <small id="subjectError" class="text-danger d-none">Subject is required</small>
            </div>

            <div class="mb-3 form-group">
                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                <small id="messageError" class="text-danger d-none">Message cannot be empty</small>
            </div>

            <button id="Send" type="submit" class="btn btn-glow">Send</button>
            <p id="form-status" class="mt-3 text-center"></p>

        </form>
    </section>

    <!-- FOOTER -->
    <footer class="footer py-4">
        <div class="social-links">
            <a href="https://www.facebook.com/profile.php?id=100016563828361"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/chanitoescoto/"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="mt-3">&copy; 2025 Christian Aerone Escoto</p>
    </footer>

    <!-- FORM VALIDATION JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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

                if (name === "") { nameError.classList.remove("d-none"); isValid = false; }
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) { emailError.classList.remove("d-none"); isValid = false; }
                if (subject === "") { subjectError.classList.remove("d-none"); isValid = false; }
                if (message === "") { messageError.classList.remove("d-none"); isValid = false; }

                if (isValid) {
                    formStatus.innerText = "✅ Message Sent Successfully!";
                    formStatus.style.color = "green";

                    setTimeout(() => {
                        document.getElementById("contact-form").reset();
                        formStatus.innerText = "";
                    }, 3000);
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
