<nav class="navbar" id="navbar">
    <div class="navbar__logo">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Elevate Beverage Solutions" class="navbar__logo-img">
        </a>
    </div>

    <ul class="navbar__links">
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#process">Process</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <a href="#contact" class="navbar__cta">Free Consultation</a>

    <button class="navbar__burger" id="burger" aria-label="Open menu">
        <span></span><span></span><span></span>
    </button>

    <div class="navbar__mobile" id="mobileMenu">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact" class="navbar__cta">Free Consultation</a></li>
        </ul>
    </div>
</nav>
