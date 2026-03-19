<footer class="footer">

    <div class="footer__top">
        <div class="footer__brand">
            <img src="{{ asset('images/logo.png') }}" alt="Elevate Beverage Solutions" class="footer__logo">
            <p class="footer__tagline">Where Innovation Meets Profitability</p>
            <p class="footer__desc">
                Premium Bar & Beverage Consultancy based in Ireland —
                transforming venues into high-performing, profitable operations.
            </p>
            <div class="footer__socials">
                <a href="#" class="footer__social">Instagram</a>
                <a href="#" class="footer__social">TikTok</a>
                <a href="#" class="footer__social">LinkedIn</a>
            </div>
        </div>

        <div class="footer__col">
            <h4 class="footer__col-title">Services</h4>
            <ul class="footer__links">
                <li><a href="{{ route('contact') }}">Free 1-Day Consultancy</a></li>
                <li><a href="{{ route('contact') }}">Full Bar Development</a></li>
                <li><a href="{{ route('contact') }}">Cocktail Menu Creation</a></li>
                <li><a href="{{ route('contact') }}">Staff Training</a></li>
                <li><a href="{{ route('contact') }}">Operational Audit</a></li>
                <li><a href="{{ route('contact') }}">Monthly Retainer</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4 class="footer__col-title">Company</h4>
            <ul class="footer__links">
                <li><a href="#about">About Us</a></li>
                <li><a href="#process">Our Process</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4 class="footer__col-title">Get In Touch</h4>
            <ul class="footer__links footer__links--contact">
                <li>
                    <span class="footer__contact-label">Email</span>
                    <a href="mailto:contact@elevatebeveragesolution.ie">
                        contact@elevatebeveragesolution.ie
                    </a>
                </li>
                <li>
                    <span class="footer__contact-label">Based In</span>
                    <span>Ireland</span>
                </li>
                <li>
                    <span class="footer__contact-label">Response</span>
                    <span>Within 24 hours</span>
                </li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn--gold" style="margin-top:1.5rem;display:inline-block;">
                Book Free Day
            </a>
        </div>
    </div>

    <div class="footer__bottom">
        <p>© {{ date('Y') }} Elevate Beverage Solution Ltd. All rights reserved.</p>
        <p>Managing Director: <span>Gilbert Mihail</span> · Marketing: <span>Favour Poal</span></p>
    </div>

</footer>
