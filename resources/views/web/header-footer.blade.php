<html class="lang="en" itemscope="" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trending Name</title>
    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/media.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <header>
        <div class="custom--container">
            <nav class="navbar">
                <a class="navbar-brand" href="https://script.viserlab.com/tutolab">
                    <img src="{{ asset('web/assets/images/shree_logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" onclick="toggleDrawer()">
                    <i class="fa fa-bars"></i>
                </button>
                <div class= "header-navbar-collapse">
                    <ul class="menu">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                aria-expanded="false">Categories<i class="fa fa-angle-down rotate-icon"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Subcategory 1</a></li>
                                <li><a class="dropdown-item" href="#">Subcategory 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                    <div class="auth-buttons">
                        <a class="login"><i class="	fa fa-user-o"></i>Login</a>
                        <a class="register"><i class="fa fa-plus-circle"></i>Register</a>
                    </div>
                </div>

            </nav>
        </div>
        <div class="mobile-drawer" id="mobileDrawer">
            <div class="drawer-content">
                <button class="close-btn" onclick="toggleDrawer()">✕</button>

                <div class="mobile-menu">
                    <div class="mobile-item"><a href="#">Home</a></div>
                    <div class="mobile-item"><a href="#">Courses</a></div>

                    <div class="mobile-item has-dropdown">
                        <a href="#">Categories<span class="icon">+</span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Subcategory 1</a></li>
                            <li><a href="#">Subcategory 2</a></li>
                        </ul>
                    </div>

                    <div class="auth-buttons" bis_skin_checked="1">
                        <a class="login"><i class="	fa fa-user-o"></i>Login</a>
                        <a class="register"><i class="fa fa-plus-circle"></i>Register</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
     @yield('content')

    <footer class="footer">
        <div class="custom--container">
            <div class="footer-top">
                <div class="footer-logo">
                    <div class="logo-text">
                        <img src="{{ asset('web/assets/images/shree_logo.png') }}" alt="Logo">
                    </div>
                </div>

                <nav class="footer-nav">
                    <ul>
                        <li><a class="footer-menu-link" href="#">Home</a></li>
                        <li><a class="footer-menu-link" href="#">Courses</a></li>
                        <li><a class="footer-menu-link" href="#">Contact</a></li>
                        <li><a class="footer-menu-link" href="#">Login</a></li>
                        <li><a class="footer-menu-link" href="#">Register</a></li>
                    </ul>
                </nav>


            </div>

            <hr class="footer-divider">

            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; 2026 <a href="#">TutoLab</a>. All Rights Reserved</p>
                </div>

                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>

                <div class="social-icons">
                    <a href="#" class="social-icon fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon li"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon tw"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="social-icon tg"><i class="fab fa-telegram-plane"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>
</body>
<script>
    function toggleDrawer() {
        document.getElementById("mobileDrawer").classList.toggle("active");
    }
</script>
<script>
    document.querySelectorAll(".mobile-item.has-dropdown > a").forEach(item => {
        item.addEventListener("click", function(e) {
            e.preventDefault();

            let parent = this.parentElement;
            let icon = this.querySelector(".icon");

            parent.classList.toggle("active");

            // icon change + / -
            if (parent.classList.contains("active")) {
                icon.innerHTML = "−";
            } else {
                icon.innerHTML = "+";
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Language Dropdown Toggle
        const langBtn = document.getElementById('langBtn');
        const langDropdown = document.getElementById('langDropdown');

        langBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const isVisible = langDropdown.style.display === 'flex';
            langDropdown.style.display = isVisible ? 'none' : 'flex';
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function() {
            langDropdown.style.display = 'none';
        });

        // Back to Top Button Logic
        const backToTopBtn = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.style.display = 'flex';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>

</html>
