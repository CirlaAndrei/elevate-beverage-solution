@extends('layouts.app')

@section('title', 'Elevate Beverage Solution — Premium Bar & Beverage Consultancy Ireland')
@section('description', 'Ireland\'s premium bar and beverage consultancy. We transform pubs, bars and hotels into profitable operations through cocktail menu development, staff training, and operational audits. Free 1-day consultancy available.')
@section('keywords', 'bar consultancy Ireland, beverage consultant Dublin, cocktail menu development Ireland, bar staff training, pub consultant Ireland, hotel bar consultant, mixology training Ireland')
@section('og_title', 'Elevate Beverage Solution — Where Innovation Meets Profitability')
@section('og_description', 'Transform your venue with Ireland\'s premium bar consultancy. Free 1-day consultation. Cocktail menus, staff training, operational audits and full bar development.')

@section('content')

{{-- HERO --}}
<section class="hero" id="home">
    <div class="hero__overlay"></div>
    <div class="hero__content">
        <p class="hero__eyebrow">Premium Bar & Beverage Consultancy — Ireland</p>
        <h1 class="hero__title">Where Innovation<br><em>Meets Profitability</em></h1>
        <p class="hero__sub">We transform bars, pubs, hotels and hospitality venues into high-performing, profitable beverage operations.</p>
        <div class="hero__actions">
            <a href="#services" class="btn btn--gold">Our Services</a>
            <a href="#contact" class="btn btn--outline">Book Free Day</a>
        </div>
    </div>
    <div class="hero__scroll-hint">
        <span>Scroll</span>
        <div class="hero__scroll-line"></div>
    </div>
</section>

{{-- USP STRIP --}}
<section class="usp-strip">
    <div class="usp-strip__item">
        <span class="usp-strip__icon">◈</span>
        <span>Free 1-Day Consultancy</span>
    </div>
    <div class="usp-strip__divider"></div>
    <div class="usp-strip__item">
        <span class="usp-strip__icon">◈</span>
        <span>Cost & Inventory Optimisation</span>
    </div>
    <div class="usp-strip__divider"></div>
    <div class="usp-strip__item">
        <span class="usp-strip__icon">◈</span>
        <span>Cocktail Menu Development</span>
    </div>
    <div class="usp-strip__divider"></div>
    <div class="usp-strip__item">
        <span class="usp-strip__icon">◈</span>
        <span>Staff Training & Development</span>
    </div>
</section>

{{-- ABOUT --}}
<section class="about" id="about">
    <div class="about__inner">

        <div class="about__left reveal reveal--left">
            <div class="about__image-wrap">
                <img src="{{ asset('images/gilbert.jpg') }}" alt="Gilbert Mihail – Managing Director" class="about__image">
                <div class="about__image-border"></div>
                <div class="about__badge">
                    <span class="about__badge-number">10+</span>
                    <span class="about__badge-label">Years<br>Experience</span>
                </div>
            </div>
        </div>

        <div class="about__right reveal reveal--right">
            <p class="section-eyebrow">Who We Are</p>
            <h2 class="section-title">We Don't Just Build Menus.<br><em>We Build Businesses.</em></h2>
            <p class="about__body">
                Elevate Beverage Solution Ltd was founded to meet a clear market demand — the need for
                professionalisation within the Irish bar and beverage industry. Many venues operate with
                strong concepts and atmosphere but lack the structured systems that drive real profitability.
            </p>
            <p class="about__body">
                We bridge the gap between creativity and business performance, combining world-class mixology
                expertise with operational efficiency, cost control, and staff development — all under one consultancy.
            </p>

            <div class="about__team">
                <div class="about__team-member">
                    <span class="about__team-name">Gilbert Mihail</span>
                    <span class="about__team-role">Managing Director & Lead Trainer</span>
                </div>
                <div class="about__team-divider"></div>
                <div class="about__team-member">
                    <span class="about__team-name">Favour Poal</span>
                    <span class="about__team-role">Marketing Partner</span>
                </div>
            </div>

            <a href="#contact" class="btn btn--gold">Work With Us</a>
        </div>

    </div>
</section>

{{-- SERVICES --}}
<section class="services" id="services">
    <div class="services__header reveal reveal--up">
        <p class="section-eyebrow">What We Offer</p>
        <h2 class="section-title">A Complete Suite of<br><em>Beverage Solutions</em></h2>
        <p class="services__intro">
            Every service is structured to be flexible, scalable, and results-driven —
            customised to your venue's size, objectives, and budget.
        </p>
    </div>

    <div class="services__grid">

        <div class="services__card reveal reveal--up" style="--delay: 0s">
            <div class="services__card-icon">◈</div>
            <h3 class="services__card-title">Full Bar Development</h3>
            <p class="services__card-desc">End-to-end bar business development for new openings or rebrands — concept, menu, operations, staff, and launch strategy.</p>
            <div class="services__card-price">€3,500 – €6,000</div>
            <a href="{{ route('contact') }}" class="services__card-link">Learn More →</a>
        </div>

        <div class="services__card services__card--featured reveal reveal--up" style="--delay: 0.1s">
            <div class="services__card-badge">Most Popular</div>
            <div class="services__card-icon">◈</div>
            <h3 class="services__card-title">Free 1-Day Consultancy</h3>
            <p class="services__card-desc">A full operational observation, menu evaluation, stock review, workflow analysis and a written strategic summary — completely free.</p>
            <div class="services__card-price">Free Entry Point</div>
            <a href="{{ route('contact') }}" class="services__card-link">Book Now →</a>
        </div>

        <div class="services__card reveal reveal--up" style="--delay: 0.2s">
            <div class="services__card-icon">◈</div>
            <h3 class="services__card-title">Cocktail Menu Creation</h3>
            <p class="services__card-desc">10–20 signature cocktails with full costing, margin optimisation, standardised recipes and storytelling descriptions.</p>
            <div class="services__card-price">€500 – €1,500</div>
            <a href="{{ route('contact') }}" class="services__card-link">Learn More →</a>
        </div>

        <div class="services__card reveal reveal--up" style="--delay: 0s">
            <div class="services__card-icon">◈</div>
            <h3 class="services__card-title">Staff Training</h3>
            <p class="services__card-desc">Mixology, speed service, guest experience, upselling, and performance coaching. Up to 15 people per session.</p>
            <div class="services__card-price">€350 – €750 / day</div>
            <a href="{{ route('contact') }}" class="services__card-link">Learn More →</a>
        </div>

        <div class="services__card reveal reveal--up" style="--delay: 0.1s">
            <div class="services__card-icon">◈</div>
            <h3 class="services__card-title">Operational Audit</h3>
            <p class="services__card-desc">Inventory analysis, waste reduction, supplier evaluation, workflow improvements and a profit margin enhancement plan.</p>
            <div class="services__card-price">€300 – €800</div>
            <a href="{{ route('contact') }}" class="services__card-link">Learn More →</a>
        </div>

        <div class="services__card reveal reveal--up" style="--delay: 0.2s">
            <div class="services__card-icon">◈</div>
            <h3 class="services__card-title">Monthly Retainer</h3>
            <p class="services__card-desc">Ongoing monthly support — operational reviews, menu updates, staff follow-ups, KPI tracking, and continuous optimisation.</p>
            <div class="services__card-price">€750 – €1,500 / mo</div>
            <a href="{{ route('contact') }}" class="services__card-link">Learn More →</a>
        </div>

    </div>
</section>

{{-- TESTIMONIALS --}}
<section class="testimonials" id="testimonials">
    <div class="testimonials__header reveal reveal--up">
        <p class="section-eyebrow">Client Results</p>
        <h2 class="section-title">What Venues Say<br><em>After Working With Us</em></h2>
    </div>

    <div class="testimonials__track-wrap">
        <div class="testimonials__track" id="testimonialsTrack">

            <div class="testimonials__card">
                <div class="testimonials__stars">★★★★★</div>
                <blockquote class="testimonials__quote">
                    "Gilbert completely transformed how our bar operates. Within two months our beverage costs dropped by 18% and the team finally had a system that actually worked. The cocktail menu he built has become our biggest talking point."
                </blockquote>
                <div class="testimonials__author">
                    <div class="testimonials__author-avatar">SM</div>
                    <div class="testimonials__author-info">
                        <span class="testimonials__author-name">Seán Murphy</span>
                        <span class="testimonials__author-role">Owner — The Copper Still, Dublin</span>
                    </div>
                </div>
            </div>

            <div class="testimonials__card">
                <div class="testimonials__stars">★★★★★</div>
                <blockquote class="testimonials__quote">
                    "We were opening a new cocktail bar and had no idea where to start with the operational side. Elevate came in and built everything from scratch — menu, training, station layout. The free consultation alone was worth more than what others charge."
                </blockquote>
                <div class="testimonials__author">
                    <div class="testimonials__author-avatar">RK</div>
                    <div class="testimonials__author-info">
                        <span class="testimonials__author-name">Rachel Kelly</span>
                        <span class="testimonials__author-role">F&B Director — Harbourside Hotel, Cork</span>
                    </div>
                </div>
            </div>

            <div class="testimonials__card testimonials__card--featured">
                <div class="testimonials__stars">★★★★★</div>
                <blockquote class="testimonials__quote">
                    "The staff training was exceptional. Our team went from inconsistent service to operating like a proper professional bar. Upselling increased, waste dropped, and guests started commenting on the quality of drinks. Genuinely impressive results."
                </blockquote>
                <div class="testimonials__author">
                    <div class="testimonials__author-avatar">PO</div>
                    <div class="testimonials__author-info">
                        <span class="testimonials__author-name">Patrick O'Brien</span>
                        <span class="testimonials__author-role">General Manager — Blackrock Gastropub</span>
                    </div>
                </div>
            </div>

            <div class="testimonials__card">
                <div class="testimonials__stars">★★★★★</div>
                <blockquote class="testimonials__quote">
                    "We brought Elevate in for an operational audit expecting minor tweaks. What we got was a complete overhaul of our inventory system, supplier contracts renegotiated, and a new menu that increased our average spend per head by €8."
                </blockquote>
                <div class="testimonials__author">
                    <div class="testimonials__author-avatar">AW</div>
                    <div class="testimonials__author-info">
                        <span class="testimonials__author-name">Aoife Walsh</span>
                        <span class="testimonials__author-role">Owner — The Velvet Lounge, Galway</span>
                    </div>
                </div>
            </div>

            <div class="testimonials__card">
                <div class="testimonials__stars">★★★★★</div>
                <blockquote class="testimonials__quote">
                    "Monthly retainer has been the best investment we've made. Having Gilbert check in regularly keeps the team sharp, the menu fresh, and our numbers on track. It's like having a beverage director without the full-time cost."
                </blockquote>
                <div class="testimonials__author">
                    <div class="testimonials__author-avatar">DF</div>
                    <div class="testimonials__author-info">
                        <span class="testimonials__author-name">Damien Foley</span>
                        <span class="testimonials__author-role">Operations Manager — The Grand Bar, Limerick</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="testimonials__controls">
        <button class="testimonials__btn" id="testimonialsPrev" aria-label="Previous">←</button>
        <div class="testimonials__dots" id="testimonialsDots"></div>
        <button class="testimonials__btn" id="testimonialsNext" aria-label="Next">→</button>
    </div>

</section>

{{-- PROCESS --}}
<section class="process" id="process">
    <div class="process__header reveal reveal--up">
        <p class="section-eyebrow">How It Works</p>
        <h2 class="section-title">A Proven Path to<br><em>Operational Excellence</em></h2>
    </div>

    <div class="process__steps">

        <div class="process__step reveal reveal--up" style="--delay: 0s">
            <div class="process__step-number">01</div>
            <div class="process__step-content">
                <h3>Initial Contact & Free 1-Day Consultancy</h3>
                <p>We visit your venue, observe operations, evaluate your menu, review stock and workflow — at zero cost to you. You'll receive a written strategic summary.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.08s">
            <div class="process__step-number">02</div>
            <div class="process__step-content">
                <h3>Full Assessment Report & Proposal</h3>
                <p>We deliver a detailed report of findings with a tailored proposal outlining the exact services, timeline, and investment required to transform your operation.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.16s">
            <div class="process__step-number">03</div>
            <div class="process__step-content">
                <h3>Agreement & Project Planning</h3>
                <p>Once aligned, we create a structured project plan with clear milestones, responsibilities, and measurable outcomes so every step is accountable.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.24s">
            <div class="process__step-number">04</div>
            <div class="process__step-content">
                <h3>Implementation Phase</h3>
                <p>We get to work — building menus, restructuring operations, redesigning workflows, and setting up cost control systems tailored to your venue.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.32s">
            <div class="process__step-number">05</div>
            <div class="process__step-content">
                <h3>Staff Training & System Integration</h3>
                <p>Your team is trained on new systems, cocktail programs, service standards, and performance benchmarks. They become brand ambassadors, not just bartenders.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.4s">
            <div class="process__step-number">06</div>
            <div class="process__step-content">
                <h3>Launch Support</h3>
                <p>We're on-site during your soft and hard launch — testing service flow, evaluating menu performance, and making real-time adjustments for a flawless opening.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.48s">
            <div class="process__step-number">07</div>
            <div class="process__step-content">
                <h3>Follow-Up & Performance Measurement</h3>
                <p>After launch we return to measure results against targets — revenue uplift, cost reduction, service speed, and guest satisfaction. Accountability is built in.</p>
            </div>
        </div>

        <div class="process__step reveal reveal--up" style="--delay: 0.56s">
            <div class="process__step-number">08</div>
            <div class="process__step-content">
                <h3>Optional Monthly Retainer</h3>
                <p>For venues wanting continuous improvement — ongoing reviews, menu refreshes, staff development, and KPI tracking to ensure long-term profitability.</p>
            </div>
        </div>

    </div>
</section>

{{-- CONTACT CTA --}}
<section class="contact-cta" id="contact">
    <div class="contact-cta__inner reveal reveal--up">
        <p class="section-eyebrow">Start Today</p>
        <h2 class="section-title">Ready to Transform<br><em>Your Venue?</em></h2>
        <p class="contact-cta__sub">
            Book your free 1-day consultancy — no commitment, no cost.<br>
            Experience what Elevate Beverage Solution can do for your business.
        </p>
        <div class="contact-cta__actions">
            <a href="{{ route('contact') }}" class="btn btn--gold">Book Free Consultation</a>
            <a href="mailto:contact@elevatebeveragesolution.ie" class="btn btn--outline">Email Us Directly</a>
        </div>
    </div>
</section>

@endsection
