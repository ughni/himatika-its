<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        /* Base Styles */
:root {
    --primary-color: #4a6bff;
    --text-color: #333;
    --bg-color: #fff;
    --nav-bg: #f8f9fa;
    --border-color: #e1e1e1;
    --hover-color: #f0f0f0;
}

.dark-mode {
    --primary-color: #6b8cff;
    --text-color: #f0f0f0;
    --bg-color: #121212;
    --nav-bg: #1e1e1e;
    --border-color: #333;
    --hover-color: #2d2d2d;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: background-color 0.3s, color 0.3s;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--bg-color);
    color: var(--text-color);
}

/* Navbar Styles */
.navbar {
    background-color: var(--nav-bg);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 1rem 2rem;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto;
}

/* Logo Section */
.logo a {
    color: var(--primary-color);
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    width: 70px;
}
.logo a img {
    width: 100%;
}

.logo i {
    font-size: 1.8rem;
}

/* Navigation Links */
.nav-links {
    display: flex;
    list-style: none;
    gap: .5rem;
}

.nav-links a {
    color: var(--text-color);
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 4px;
}

.nav-links a:hover {
    background-color: var(--hover-color);
}

/* Right Side Elements */
.nav-right {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.theme-toggle {
    position: relative;
    width: 50px;
    height: 26px;
    background-color: var(--hover-color);
    border-radius: 50px;
    cursor: pointer;
    display: flex;
    align-items: center;
    padding: 0 5px;
    justify-content: space-between;
}

.theme-toggle i {
    font-size: 1rem;
}

.dark-icon {
    color: #f1c40f;
}

.light-icon {
    color: #f39c12;
}

.auth-buttons {
    display: flex;
    gap: 1rem;
}

.login, .register {
    padding: 0.5rem 1rem;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 500;
}

.login {
    color: var(--text-color);
}

.register {
    background-color: var(--primary-color);
    color: white;
}

.register:hover {
    opacity: 0.9;
}

/* Mobile Menu */
.menu-icon {
    display: none;
    cursor: pointer;
    font-size: 1.5rem;
    color: var(--text-color);
}

#mobile-menu {
    display: none;
}

/* Responsive Design */
@media (max-width: 992px) {
    .nav-links {
        gap: 1rem;
    }

    .nav-right {
        gap: 1rem;
    }
}

@media  screen and (max-width:940px) {
    .login a {
        gap: 0;
        padding: 0;
    }
}

@media (max-width: 768px) {
    .navbar-container {
        flex-wrap: wrap;
    }

    .menu-icon {
        display: block;
        order: 1;
    }

    .logo {
        order: 0;
    }

    .nav-right {
        order: 2;
        margin-left: auto;
    }

    .nav-links {
        display: none;
        width: 100%;
        order: 3;
        flex-direction: column;
        padding: 1rem 0;
    }

    #mobile-menu:checked ~ .nav-links {
        display: flex;
    }

    .auth-buttons {
        display: none;
    }
}

@media (max-width: 480px) {
    .navbar {
        padding: 1rem;
    }

    .logo a {
        font-size: 1.2rem;
    }

    .theme-toggle {
        width: 40px;
        height: 22px;
    }
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="light-mode">
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="logo">
                <a href="#">
                    <img src="/img/Logo-Himatika.png" alt="">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <input type="checkbox" id="mobile-menu">
            <label for="mobile-menu" class="menu-icon">
                <i class="fas fa-bars"></i>
            </label>

            <!-- Navigation Links -->
            <ul class="nav-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Proyek</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Galeri</a></li>
            </ul>

            <!-- Right Side Elements -->
            <div class="nav-right">
                <div class="theme-toggle">
                    <i class="fas fa-moon icon-blue"></i>
                    <i class="fas fa-sun icon-blue"></i>
                </div>
                <div class="auth-buttons">
                    <a href="#" class="login">Login</a>
                    <a href="#" class="register">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <h1>Welcome to My Site</h1>
        <p>This is a responsive navbar example.</p>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.querySelector('.theme-toggle');

    themeToggle.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');

        // Save preference to localStorage
        const isDarkMode = document.body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', isDarkMode);
    });

    // Check for saved preference
    if (localStorage.getItem('darkMode') === 'true') {
        document.body.classList.add('dark-mode');
    }
});</script>
</body>
</html>
