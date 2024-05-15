
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font -->
    <script src="https://kit.fontawesome.com/fa33ea315f.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Navigation -->
    <header>
        <nav class="bg-white shadow-lg">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <a href="#" class="text-xl font-bold text-gray-800">My Portfolio</a>
                    <ul class="flex space-x-4">
                        <li><a href="#home" class="text-gray-600 hover:text-gray-800">Home</a></li>
                        <li><a href="#skills" class="text-gray-600 hover:text-gray-800">Skills</a></li>
                        <li><a href="#clients" class="text-gray-600 hover:text-gray-800">Clients</a></li>
                        <li><a href="#projects" class="text-gray-600 hover:text-gray-800">Projects</a></li>
                        <li><a href="#contact" class="text-gray-600 hover:text-gray-800">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="py-10">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to My Portfolio</h1>
            <img src="profile_image.png" alt="Profile Image" class="w-32 h-32 mx-auto rounded-full mb-4">
            <h2 class="text-xl font-bold text-gray-800 mb-4">MAJIDI Mohammed</h2>
            <h3 class="text-lg text-gray-700 mb-4">Full-Stack Developer</h3>
            <p class="text-lg text-gray-700 mb-8">I'm a full-stack developer with experience in building web and desktop
                applications.</p>
            <a href="#contact" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Let's
                Work Together</a>
        </div>
        <div class="social-media">
            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-github"></i></a>
            <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
        </div>
        <!-- Add cv links to download-->
        <div class="container mx-auto text-center">
            <button class="Download-button">
                <svg viewBox="0 0 640 512" width="20" height="16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="white"
                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z">
                    </path>
                </svg>
                <span><a href="#"></a>Download CV</a></span>
            </button>
        </div>

    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-10 bg-gray-200">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">My Skills</h2>

            <!-- Backend Skills -->
            <div id="backend-skills" class="mb-8">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Back-end Skills</h3>
                <div class="flex items-center justify-center flex-wrap space-x-4"></div>
            </div>

            <!-- Frontend Skills -->
            <div id="frontend-skills" class="mb-8">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Front-end Skills</h3>
                <div class="flex items-center justify-center flex-wrap space-x-4"></div>
            </div>

            <!-- Desktop Development Skills -->
            <div id="desktop-skills">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Desktop Development Skills</h3>
                <div class="flex items-center justify-center flex-wrap space-x-4"></div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="py-10">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Clients</h2>
            <!-- Client Logos -->
            <div class="flex items-center justify-center">
                <!-- Client logos will be dynamically added here -->
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-10 bg-gray-200">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Projects</h2>
            <!-- Project Items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="project-container">
                <!-- Projects will be appended here dynamically -->
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Let's Work Together</h2>
            <p class="text-lg text-gray-700 mb-8">Feel free to get in touch with me for any inquiries or collaboration opportunities.</p>
            <form method="POST" action="{{route('contacts')}}" id="contact-form" >
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Your Name" class="bg-gray-100 rounded-md px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Your Email" class="bg-gray-100 rounded-md px-4 py-2 w-full">
                </div>
                <div class="mb-4">
                    <textarea name="message" placeholder="Your Message" class="bg-gray-100 rounded-md px-4 py-2 w-full" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Submit</button>
            </form>
        </div>
    </section>
    <script></script>
    <script src="/js/getSkills.js"></script>
    <script src="/js/getProjects.js"></script>
    <script src="/js/getClients.js"></script>
</body>

</html>
