@extends('layouts.app')
@extends('layouts.app')

@section('title', 'Contact Us — Book Your Free Consultation | Elevate Beverage Solution')
@section('description', 'Get in touch with Elevate Beverage Solution Ltd. Book your free 1-day bar consultancy or enquire about our services. Based in Ireland, serving venues nationwide.')
@section('og_title', 'Contact Elevate Beverage Solution — Free 1-Day Bar Consultancy')
@section('og_description', 'Book your free 1-day bar consultancy today. No commitment, no cost. We respond within 24 hours.')
@section('content')

<section class="contact-hero">
    <div class="contact-hero__inner reveal reveal--up">
        <p class="section-eyebrow">Get In Touch</p>
        <h1 class="section-title">Let's Elevate<br><em>Your Venue</em></h1>
        <p class="contact-hero__sub">Book your free 1-day consultancy or enquire about any of our services. We respond within 24 hours.</p>
    </div>
</section>

<section class="contact-main">
    <div class="contact-main__inner">

        {{-- LEFT: Info --}}
        <div class="contact-info reveal reveal--left">

            <div class="contact-info__block">
                <span class="contact-info__label">Email</span>
                <a href="mailto:contact@elevatebeveragesolution.ie" class="contact-info__value">
                    contact@elevatebeveragesolution.ie
                </a>
            </div>

            <div class="contact-info__block">
                <span class="contact-info__label">Based In</span>
                <span class="contact-info__value">Ireland</span>
            </div>

            <div class="contact-info__block">
                <span class="contact-info__label">Response Time</span>
                <span class="contact-info__value">Within 24 hours</span>
            </div>

            <div class="contact-info__block">
                <span class="contact-info__label">Free Entry Point</span>
                <span class="contact-info__value">1-Day Bar Consultancy<br>
                    <small>No commitment. No cost.</small>
                </span>
            </div>

            <div class="contact-info__socials">
                <a href="#" class="contact-info__social-link">Instagram</a>
                <span>·</span>
                <a href="#" class="contact-info__social-link">TikTok</a>
                <span>·</span>
                <a href="#" class="contact-info__social-link">LinkedIn</a>
            </div>

        </div>

        {{-- RIGHT: Form --}}
        <div class="contact-form-wrap reveal reveal--right">

            @if(session('success'))
                <div class="contact-form__success">
                    <span>◈</span> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                @csrf

                <div class="form-row form-row--half">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name"
                            value="{{ old('name') }}"
                            placeholder="John Murphy"
                            class="{{ $errors->has('name') ? 'is-error' : '' }}">
                        @error('name') <span class="form-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email"
                            value="{{ old('email') }}"
                            placeholder="john@yourvenue.ie"
                            class="{{ $errors->has('email') ? 'is-error' : '' }}">
                        @error('email') <span class="form-error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="form-row form-row--half">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+353 87 000 0000">
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service…</option>
                            <option value="Free 1-Day Consultancy" {{ old('service') == 'Free 1-Day Consultancy' ? 'selected' : '' }}>Free 1-Day Consultancy</option>
                            <option value="Full Bar Development" {{ old('service') == 'Full Bar Development' ? 'selected' : '' }}>Full Bar Development</option>
                            <option value="Cocktail Menu Creation" {{ old('service') == 'Cocktail Menu Creation' ? 'selected' : '' }}>Cocktail Menu Creation</option>
                            <option value="Staff Training" {{ old('service') == 'Staff Training' ? 'selected' : '' }}>Staff Training</option>
                            <option value="Operational Audit" {{ old('service') == 'Operational Audit' ? 'selected' : '' }}>Operational Audit</option>
                            <option value="Monthly Retainer" {{ old('service') == 'Monthly Retainer' ? 'selected' : '' }}>Monthly Retainer</option>
                            <option value="Other" {{ old('service') == 'Other' ? 'selected' : '' }}>Other / General Enquiry</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6"
                        placeholder="Tell us about your venue and what you're looking to achieve…"
                        class="{{ $errors->has('message') ? 'is-error' : '' }}">{{ old('message') }}</textarea>
                    @error('message') <span class="form-error">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn--gold btn--full">
                    Send Enquiry
                </button>

            </form>
        </div>

    </div>
</section>

@endsection
