<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <meta name="description"
        content="Bowl like a pro at Strike Academy! Lessons, leagues, tournaments & parties for all ages. Strike the perfect outing!" />
    <meta name="keywords"
        content="bowling academy, learn to bowl, bowling lessons, bowling training, improve bowling game, bowling tips, bowling drills, bowling equipment, bowling shoes, bowling ball fitting, bowling league, bowling tournament, bowling party">
    <meta name="keywords"
        content="bowling for beginners, learn to bowl from scratch, first time bowling, bowling for kids, family bowling">
    <meta name="keywords"
        content=" improve bowling score, bowling drills for intermediate players, bowling tips for accuracy, bowling techniques, spare shooting, strike shooting, bowling ball selection, bowling training for advanced players, bowling coaching">
    <meta name="keywords"
        content=" how to become a pro bowler, tournament preparation, mental game for bowling, high score bowling, bowling equipment for advanced players">
    <meta name="keywords"
        content="fun bowling, social bowling, competitive bowling, bowling for health, bowling for fitness, bowling for stress relief, bowling team building">

    <!-- <title>
@isset($title)
    {{ $title }} |
@endisset {{ config('app.name') }}
</title> -->
    <title>
        @isset($title)
            Strike Academy | {{ $title }}
        @else
            Strike Academy
        @endisset
    </title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<script>
    const toggleSideMenu = () => {
        let sideNav = document.getElementById("nav-menu");
        let sideNavBtn = document.getElementById("nav-menu-toggle");
        sideNav.classList.toggle("opened");
        sideNavBtn.classList.toggle("opened");
    };

    window.addEventListener("resize", () => {
        try {
            let sideNav = document.getElementById("nav-menu");
            let sideNavBtn = document.getElementById("nav-menu-toggle");
            if (window.innerWidth > 600) {
                sideNav.classList.remove("opened");
                sideNavBtn.classList.remove("opened");
            }
        } catch (error) {}
    });

    document.onclick = function(e) {
        try {
            let sideNav = document.getElementById("nav-menu");
            let sideNavBtn = document.getElementById("nav-menu-toggle");
            if (!sideNav.contains(e.target) && !sideNavBtn.contains(e.target)) {
                sideNav.classList.remove("opened");
                sideNavBtn.classList.remove("opened");
            }
        } catch (error) {}
    };
</script>

<body>
    
    <header>
        <div class="width-limiter align-center justify-between">
            <a href="/"><img src="{{ asset('assets/images/logo-alt.png') }}" alt="Logo.png" height="80" /></a>

            <div class="align-center">
                <a class="itps-link text-deco-none pFont border-smooth trans-ease-out" href="/itps">
                    ITPS Portal
                </a>
                <button id="nav-menu-toggle" onClick="toggleSideMenu()">
                    <svg width="32" height="32" fill="none" stroke="currentColor" strokeLinecap="round"
                        strokeLinejoin="round" strokeWidth="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.975 5.975h16" />
                        <path d="M3.975 11.975h16" />
                        <path d="M3.975 17.975h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <nav id="nav-menu" class="sFont">
        <ul class="list-style-none">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/coaches">Our Coaches</a>
            </li>
            <li>
                <a href="/programmes">Programmes</a>
            </li>
            <li>
                <a href="/marketplace">Marketplace</a>
            </li>
            <li>
                <a href="/events">Events</a>
            </li>
            <li>
                <a href="/calendar">Calendar</a>
            </li>
            <li>
                <a href="/gallery">Gallery</a>
            </li>
            <li>
                <a href="/resources">Resources</a>
            </li>
            <li>
                <a href="/testimonials">Testimonials</a>
            </li>
            <li>
                <a href="/important-policies">Important Policies</a>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>

    <nav id="navbar">
        <div class="navbar-spacer"></div>
        <div class="width-limiter">
            <ul id="navbar-list" class="justify-center list-style-none trans-ease-out">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/programmes">Programmes</a>
                </li>
                <li>
                    <a href="/marketplace">Marketplace</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);">
                        Community
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m18 9.5-6 6-6-6h12Z"></path>
                        </svg>
                    </a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="/events">Events</a>
                        </li>
                        <li>
                            <a href="/calendar">Calendar</a>
                        </li>
                        <li>
                            <a href="/gallery">Gallery</a>
                        </li>
                        <li>
                            <a href="/resources">Resources</a>
                        </li>
                        <li>
                            <a href="/testimonials">Testimonials & Case Studies</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);">
                        About Strike
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m18 9.5-6 6-6-6h12Z"></path>
                        </svg>
                    </a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="/about-us">About Us</a>
                        </li>
                        <li>
                            <a href="/coaches">Our Coaches</a>
                        </li>
                        <li>
                            <a href="/important-policies">Important Policies</a>
                        </li>
                        <li>
                            <a href="/contact-us">Contact Us</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
