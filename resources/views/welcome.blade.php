<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karnataka Skill Development Corporation</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/site.css'])
</head>
<body class="dark-mode-area">

<button type="button" class="feedback-tab" aria-label="Feedback">
    <i class="fas fa-comments feedback-tab__icon" aria-hidden="true"></i>
    <span class="feedback-tab__label">Feedback</span>
</button>

<div class="social-icons">
    <a href="https://youtube.com/@ksdc" target="_blank" rel="noopener noreferrer" class="youtube" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
    <a href="https://www.instagram.com/skill_karnataka" target="_blank" rel="noopener noreferrer" class="instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://www.facebook.com/share/19Wkr8NfPR/" target="_blank" rel="noopener noreferrer" class="facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
</div>

<div class="sticky-header">
<div class="top-header">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-1">
        <div class="flex items-center gap-1">
            <div class="flex items-center gap-2 px-3 border-r border-white">
                <img src="https://kaushalkar.karnataka.gov.in/assets/front/itbt/images/header-profile.png" class="h-4">
                <span class="text-white text-xs uppercase">login</span>
            </div>
            <div class="px-3 border-r border-white">
                <a href="#" class="text-white text-xs uppercase" style="font-family:serif;">ಕನ್ನಡ</a>
            </div>
            <div class="flex items-center gap-2 px-3">
                <img src="https://kaushalkar.karnataka.gov.in/assets/front/itbt/images/visually-challenged.png" class="h-4">
                <span class="text-white text-xs uppercase">visually challenged</span>
            </div>
        </div>
        <div class="sub-header-actions">
            <div class="theme-toggle-wrap">
                <input type="checkbox" id="theme-toggle" class="theme-toggle-input" aria-label="Toggle dark mode">
                <label for="theme-toggle" class="theme-toggle-label">
                    <i class="fas fa-sun theme-toggle-sun" aria-hidden="true"></i>
                    <i class="fas fa-moon theme-toggle-moon" aria-hidden="true"></i>
                </label>
            </div>
            <div class="font-size-toolbar" role="toolbar" aria-label="Font size controls">
                <button type="button" class="font-size-btn font-size-btn--dec" id="fontDecrease" aria-label="Decrease font size">
                    <i class="fas fa-minus" aria-hidden="true"></i>
                </button>
                <span class="font-size-label" aria-hidden="true">A</span>
                <button type="button" class="font-size-btn font-size-btn--inc" id="fontIncrease" aria-label="Increase font size">
                    <i class="fas fa-plus" aria-hidden="true"></i>
                </button>
                <button type="button" class="font-size-btn font-size-btn--reset" id="fontReset" aria-label="Reset font size">
                    <i class="fas fa-arrows-rotate" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<section class="bg-white py-3">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="order-1">
                <img src="https://planning.karnataka.gov.in/frontend/opt1/images/cm_logo/chief_minister_of_karrnataka_en.png" class="h-20">
            </div>
            <div class="order-2 flex items-center gap-4">
                <img src="https://kaushalkar.karnataka.gov.in/uploads/dept_logo1760354624.png" class="h-[75px]">
                <div>
                    <p class="text-xl font-extrabold text-black">Karnataka Skill Development Corporation</p>
                    <p class="text-sm text-gray-600">Government of Karnataka</p>
                </div>
                <img src="https://kaushalkar.karnataka.gov.in/uploads/dept_photo1760354874.png" class="h-[95px]">
            </div>
            <div class="order-3">
                <img src="https://kaushalkar.karnataka.gov.in/uploads/hod_photo1760354624.png" class="h-[75px]">
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg navbar-sec shadow">
    <div class="max-w-7xl mx-auto px-4 navbar-sec__inner">
        <button
            type="button"
            class="navbar-hamburger"
            id="navbarHamburger"
            aria-controls="mainNav"
            aria-expanded="false"
            aria-label="Toggle navigation menu"
        >
            <span class="navbar-hamburger__icon" aria-hidden="true"><i class="fas fa-bars"></i></span>
        </button>
        <div id="mainNav" class="navbar-collapse main-nav-collapse">
            <ul class="navbar-nav main-nav-menu flex flex-col md:flex-row items-center gap-0 w-full justify-center">
                <li class="nav-item level_0">
                    <a class="nav-link nav-link-home" href="/" aria-label="Home"><i class="fas fa-home" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item level_0 has-dropdown relative group">
                    <a class="nav-link dropdown-toggle" href="#" data-mobile-dropdown>About Us <i class="fas fa-chevron-down text-[10px] ml-1"></i></a>
                    <div class="sub-mnu absolute top-full left-0 bg-white shadow-lg w-56 hidden group-hover:block z-50">
                        <a class="nav-link" href="#">About the Department</a>
                        <a class="nav-link" href="#">Vision and Mission</a>
                        <a class="nav-link" href="#">Board Of Directors</a>
                        <a class="nav-link" href="#">Organization structure</a>
                    </div>
                </li>
                <li class="nav-item level_0 has-dropdown relative group">
                    <a class="nav-link dropdown-toggle" href="#" data-mobile-dropdown>Schemes <i class="fas fa-chevron-down text-[10px] ml-1"></i></a>
                    <div class="sub-mnu absolute top-full left-0 bg-white shadow-lg w-56 hidden group-hover:block z-50">
                        <a class="nav-link" href="#">State Schemes</a>
                        <a class="nav-link" href="#">Central Schemes</a>
                    </div>
                </li>
                <li class="nav-item level_0"><a class="nav-link" href="#">Skill Policy</a></li>
                <li class="nav-item level_0"><a class="nav-link" href="#">Guidelines</a></li>
                <li class="nav-item level_0"><a class="nav-link" href="#">Contact Us</a></li>
                <li class="nav-item level_0"><a class="nav-link" href="#">Govt. Orders</a></li>
                <li class="nav-item level_0"><a class="nav-link" href="#">Resources</a></li>
                <li class="nav-item level_0"><a class="nav-link" href="#">Notifications</a></li>
                <li class="nav-item level_0"><a class="nav-link" href="#">RTI</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="slider">
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1752046578.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1752143602.jpg" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <i class="fas fa-angle-left"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <i class="fas fa-angle-right"></i>
        </button>
    </div>
</section>

<div class="border border-gray-200 overflow-hidden">
    <div class="flex items-stretch">
        <div class="bg-red-600 text-white px-4 py-3 text-sm font-semibold whitespace-nowrap">Latest News</div>
        <div class="flex-1 overflow-hidden">
            <marquee behavior="scroll" direction="left" scrollamount="4" class="py-3 text-sm font-semibold text-gray-800">Welcome to Karnataka Skill Development Corporation | Empowering youth through skill development | CMKKY 2.0 Guidelines released</marquee>
        </div>
    </div>
</div>

<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            <div class="lg:col-span-3 text-center">
                <img src="https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1760614063.jpg" class="w-[302px] h-[250px] object-cover rounded-lg shadow-md mx-auto">
                <p class="text-lg font-bold text-black mt-4">Dr. Sharanaprakash Rudrappa Patil</p>
                <p class="text-xs font-bold text-[var(--primary)]">Hon'ble Minister of Skill Development, Entrepreneurship and Livelihoods</p>
            </div>
            <div class="lg:col-span-6">
                <div class="w-24 h-1 bg-red-600 rounded mb-4"></div>
                <h2 class="text-2xl font-bold text-[var(--blue-dark)]">INTRODUCTION</h2>
                <p class="text-sm leading-relaxed text-gray-600 text-justify mt-4">Karnataka Skill Development Corporation (KSDC) is an autonomous body functioning as an agency of the State Government. The corporation aims to enhance employment opportunities for the youth of the state by providing them with technical, professional, and demand-driven skills. It is a key platform responsible for the implementation, management, and ownership of various skill development programs of both the State and Central Governments. It strives to create employment opportunities and address the issue of unemployment.</p>
                <div class="text-right mt-4">
                    <a href="#" class="inline-block bg-[var(--primary)] text-white font-bold px-6 py-3 rounded-xl hover:opacity-90">Know more about us</a>
                </div>
            </div>
            <div class="lg:col-span-3 text-center">
                <img src="https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1776850815.png" class="w-[302px] h-[250px] object-cover rounded-lg shadow-md mx-auto">
                <p class="text-lg font-bold text-black mt-4">Smt. Salma K. Fahim, IAS</p>
                <p class="text-xs font-bold text-[var(--primary)]">Secretary to Government, Department Of Skill Development Entrepreneurship and Livelihood</p>
            </div>
        </div>
    </div>
</section>

<div class="info-boxes mx-auto max-w-6xl my-8 px-6 py-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="info-box">
            <div class="box-title text-center relative">
                <i class="fa fa-files-o absolute right-4 top-1/2 -translate-y-1/2 bg-white text-red-600 p-3 rounded-full w-12 h-12 flex items-center justify-center"></i>
                INTRODUCTION
            </div>
            <div class="info-box__body max-h-72 overflow-y-auto">
                <ul class="divide-y divide-gray-300">
                    <li><a href="#" class="info-box__link">About Us</a></li>
                    <li><a href="#" class="info-box__link">Vision and Mission</a></li>
                    <li><a href="#" class="info-box__link">Organisation Structure</a></li>
                    <li><a href="#" class="info-box__link">Board of Directors</a></li>
                </ul>
            </div>
        </div>
        <div class="info-box">
            <div class="box-title text-center relative">
                <i class="fa fa-files-o absolute right-4 top-1/2 -translate-y-1/2 bg-white text-red-600 p-3 rounded-full w-12 h-12 flex items-center justify-center"></i>
                SERVICES AND SCHEMES
            </div>
            <div class="info-box__body max-h-72 overflow-y-auto">
                <ul class="divide-y divide-gray-300">
                    <li><a href="#" class="info-box__link">Chief Minister's Kaushalya Karnataka Yojane (CMKKY)</a></li>
                    <li><a href="#" class="info-box__link">NAL JAL Mitra</a></li>
                    <li><a href="#" class="info-box__link">Pradhan Mantri Kaushal Vikas Yojana (PMKVY)</a></li>
                    <li><a href="#" class="info-box__link">International Migration Centre Karnataka</a></li>
                    <li><a href="#" class="info-box__link">SANKALP & Other Special Initiatives</a></li>
                </ul>
            </div>
        </div>
        <div class="info-box">
            <div class="box-title text-center relative">
                <i class="fa fa-files-o absolute right-4 top-1/2 -translate-y-1/2 bg-white text-red-600 p-3 rounded-full w-12 h-12 flex items-center justify-center"></i>
                Online Services
            </div>
            <div class="info-box__body max-h-72 overflow-y-auto">
                <ul class="divide-y divide-gray-300">
                    <li><a href="#" class="info-box__link">Training Provider Registration</a></li>
                    <li><a href="#" class="info-box__link">Assessment Agency Registration</a></li>
                    <li><a href="#" class="info-box__link">Registration of Candidate for Training</a></li>
                </ul>
            </div>
        </div>
        <div class="info-box">
            <div class="box-title text-center relative">
                <i class="fa fa-files-o absolute right-4 top-1/2 -translate-y-1/2 bg-white text-red-600 p-3 rounded-full w-12 h-12 flex items-center justify-center"></i>
                DOCUMENTS
            </div>
            <div class="info-box__body max-h-72 overflow-y-auto">
                <ul class="divide-y divide-gray-300">
                    <li><a href="#" class="info-box__link">Usage of SKILL INDIA Logo</a></li>
                    <li><a href="#" class="info-box__link">C C T V Guidelines</a></li>
                    <li><a href="#" class="info-box__link">D S D O Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-[var(--blue-dark)] mb-2">Verticals under the Department</h2>
        <p class="text-center text-gray-500 mb-10">More information about the policies and benefits of the department's affiliated institutions</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $verticals = [
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751458330.jpg', 'title' => 'Centre for Entrepreneurship Development of Karnataka (CEDOK)', 'desc' => 'The Centre for Entrepreneurship Development of Karnataka (CEDOK), an autonomous organization...'],
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751458428.jpg', 'title' => 'Department of Industrial Training and Employment', 'desc' => 'Commissioner, Industrial Training and Employment, Bangalore (CITE)...'],
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751458440.jpg', 'title' => 'Karnataka German Multi Skill Development Centre', 'desc' => 'KGMSDCs will generate high quality skilled manpower...'],
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751458364.jpg', 'title' => 'Government Tool Room & Training Centre', 'desc' => 'To emerge as an International Centre of Excellence in Training production...'],
                ];
            @endphp
            @foreach($verticals as $v)
                <div class="bg-white rounded-lg p-4 shadow-md flex flex-col h-full">
                    <img src="{{ $v['img'] }}" class="w-16 h-16 object-contain mb-3">
                    <h6 class="font-bold text-[var(--blue-dark)] mb-2">{{ $v['title'] }}</h6>
                    <p class="text-xs text-gray-500 flex-1">{{ $v['desc'] }}</p>
                    <a href="#" class="inline-block mt-3 bg-[var(--primary)] text-white text-xs px-4 py-2 rounded hover:opacity-90 self-start">Read more</a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="initiatives-overlay py-16" style="background:url('https://images.unsplash.com/photo-1564936281284-202ff1e1e0e4?w=1200') center/cover no-repeat;">
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <h2 class="text-2xl font-bold text-center text-white mb-2">Major Initiatives of Corporation</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @php
                $initiatives = [
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751975058.jpeg', 'icon' => 'fa-bar-chart', 'title' => 'Chief Minister Kaushalya Karnataka Yojana', 'desc' => 'Stay updated! Click for the latest insights.'],
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751975439.jpeg', 'icon' => 'fa-university', 'title' => 'Industry Linkage Cell', 'desc' => 'Get the latest updates.'],
                    ['img' => 'https://kaushalkar.karnataka.gov.in/uploads/media_to_upload1751975364.jpg', 'icon' => 'fa-anchor', 'title' => 'Kalike Jothege Kaushalya', 'desc' => 'Skill-based education within formal academic framework.'],
                ];
            @endphp
            @foreach($initiatives as $item)
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
                    <img src="{{ $item['img'] }}" class="w-full h-48 object-cover">
                    <div class="-mt-8 flex justify-center">
                        <div class="w-16 h-16 rounded-full bg-[var(--primary)] flex items-center justify-center shadow-lg">
                            <i class="fa {{ $item['icon'] }} text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-base font-bold text-indigo-600 mb-2 line-clamp-2">{{ $item['title'] }}</h3>
                        <p class="text-sm text-gray-500 line-clamp-3">{{ $item['desc'] }}</p>
                        <a href="#" class="inline-block mt-3 bg-[var(--primary)] text-white text-xs px-4 py-2 rounded hover:opacity-90">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-[var(--blue-dark)] mb-6">Gallery</h2>
        <div class="flex justify-center gap-4 mb-6">
            <button class="px-5 py-2 bg-[var(--primary)] text-white rounded text-sm font-medium" onclick="switchTab('photos')">Photo Gallery</button>
            <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded text-sm font-medium" onclick="switchTab('videos')">Videos</button>
            <button class="px-5 py-2 bg-gray-200 text-gray-700 rounded text-sm font-medium" onclick="switchTab('podcasts')">Podcast</button>
        </div>
        <div id="photos" class="tab-content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <img src="https://kaushalkar.karnataka.gov.in/uploads/43701751978247.jpeg" class="w-full h-48 object-cover rounded-lg">
                    <p class="mt-2 font-bold">Kalburgi Udyoga Mela</p>
                </div>
                <div>
                    <img src="https://kaushalkar.karnataka.gov.in/uploads/34351751977891.jpg" class="w-full h-48 object-cover rounded-lg">
                    <p class="mt-2 font-bold">Paper Advertisement</p>
                </div>
            </div>
        </div>
        <div id="videos" class="tab-content hidden"><p class="text-gray-500 text-center">No videos to display</p></div>
        <div id="podcasts" class="tab-content hidden"><p class="text-gray-500 text-center">No podcasts to display</p></div>
    </div>
</section>

<section class="py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-8">
            <div class="text-center"><img src="https://ceg.karnataka.gov.in/frontend/opt1/images/CONTACT-DIRECTORY.png" class="h-16 mx-auto mb-2"><p class="text-xs font-semibold text-gray-700">Govt Contact Manual</p></div>
            <div class="text-center"><img src="https://ceg.karnataka.gov.in/frontend/opt1/images/IMPORTENT-WEBSITES.png" class="h-16 mx-auto mb-2"><p class="text-xs font-semibold text-gray-700">Important Websites</p></div>
            <div class="text-center"><img src="https://ceg.karnataka.gov.in/frontend/opt1/images/ceg11.png" class="h-16 mx-auto mb-2"><p class="text-xs font-semibold text-gray-700">e-Governance</p></div>
            <div class="text-center"><img src="https://ceg.karnataka.gov.in/frontend/opt1/images/E-SERVICES.png" class="h-16 mx-auto mb-2"><p class="text-xs font-semibold text-gray-700">e-Services</p></div>
            <div class="text-center"><img src="https://ceg.karnataka.gov.in/frontend/opt1/images/MOBILE-APPS.png" class="h-16 mx-auto mb-2"><p class="text-xs font-semibold text-gray-700">Government Apps</p></div>
            <div class="text-center"><img src="https://ceg.karnataka.gov.in/frontend/opt1/images/DOWNLOADS.png" class="h-16 mx-auto mb-2"><p class="text-xs font-semibold text-gray-700">Downloads</p></div>
        </div>
    </div>
</section>

<footer class="footer-section py-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-white text-lg font-bold mb-3">Disclaimer</h4>
                <div class="w-12 h-0.5 bg-[var(--primary)] mb-4"></div>
                <p class="text-sm leading-relaxed">Please note that this page also provides links to the websites / web pages of Govt. Ministries/Departments/Organisations. The content of these websites are owned by the respective organisations.</p>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-3">Website Policies</h4>
                <div class="w-12 h-0.5 bg-[var(--primary)] mb-4"></div>
                <ul class="space-y-2 text-sm">
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Copyright Policy</li>
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Hyperlinking Policy</li>
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Security Policy</li>
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Terms & Conditions</li>
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Privacy Policy</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-3">Accessibility Resources</h4>
                <div class="w-12 h-0.5 bg-[var(--primary)] mb-4"></div>
                <ul class="space-y-2 text-sm">
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Sitemap</li>
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Help</li>
                    <li class="hover:text-white cursor-pointer"><i class="fa fa-angle-right text-[var(--primary)] mr-2"></i>Screen Reader Access</li>
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap justify-between text-sm border-t border-gray-600 pt-4 mt-6">
            <span>Last Updated: June 2026</span>
            <span>Visitors Counter: 0</span>
            <span>Version: 1.0</span>
        </div>
        <div class="text-center text-sm border-t border-gray-600 pt-4 mt-4">
            <p>Content Owned and maintained by: Karnataka Skill Development Corporation, Government of Karnataka</p>
            <p>Designed & Developed by: KSDC &copy; {{ date('Y') }}, All Rights Reserved.</p>
        </div>
    </div>
</footer>

<div class="footer-bottom py-4">
    <div class="max-w-7xl mx-auto px-4 flex flex-wrap justify-center gap-4">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/cm_logo/Meity_logo.png" class="h-10">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/cm_logo/digital-india-logo.png" class="h-10">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/cm_logo/data-gov-logo.png" class="h-10">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/cm_logo/india-gov-logo.png" class="h-10">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/cm_logo/pm-india-logo.png" class="h-10">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/GIGW.jpeg" class="h-10">
        <img src="https://ceg.karnataka.gov.in/frontend/opt1/images/SSLcertificate.png" class="h-10">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        function syncNavbarStickyTop() {
            const topBar = document.querySelector('.top-header');
            if (topBar) {
                document.documentElement.style.setProperty('--top-bar-height', topBar.offsetHeight + 'px');
            }
        }
        syncNavbarStickyTop();
        window.addEventListener('resize', syncNavbarStickyTop);
    })();

    (function () {
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        if (localStorage.getItem('ksdc-theme') === 'dark') {
            themeToggle.checked = true;
            body.classList.add('dark-mode');
        }
        themeToggle?.addEventListener('change', function () {
            body.classList.toggle('dark-mode', this.checked);
            localStorage.setItem('ksdc-theme', this.checked ? 'dark' : 'light');
        });

        let fontScale = parseFloat(localStorage.getItem('ksdc-font-scale') || '1');
        const baseFontSize = 16;
        const applyFontScale = function () {
            document.documentElement.style.fontSize = (baseFontSize * fontScale) + 'px';
            localStorage.setItem('ksdc-font-scale', String(fontScale));
        };
        applyFontScale();
        document.getElementById('fontDecrease')?.addEventListener('click', function () {
            fontScale = Math.max(0.85, fontScale - 0.05);
            applyFontScale();
        });
        document.getElementById('fontIncrease')?.addEventListener('click', function () {
            fontScale = Math.min(1.35, fontScale + 0.05);
            applyFontScale();
        });
        document.getElementById('fontReset')?.addEventListener('click', function () {
            fontScale = 1;
            applyFontScale();
        });
    })();

    (function () {
        const hamburger = document.getElementById('navbarHamburger');
        const mainNav = document.getElementById('mainNav');
        if (!hamburger || !mainNav) return;

        const icon = hamburger.querySelector('i');
        const mobileMq = window.matchMedia('(max-width: 767px)');

        function setMenuOpen(open) {
            mainNav.classList.toggle('is-open', open);
            hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
            if (icon) {
                icon.classList.toggle('fa-bars', !open);
                icon.classList.toggle('fa-xmark', open);
            }
        }

        hamburger.addEventListener('click', function () {
            setMenuOpen(!mainNav.classList.contains('is-open'));
        });

        document.querySelectorAll('[data-mobile-dropdown]').forEach(function (link) {
            link.addEventListener('click', function (event) {
                if (!mobileMq.matches) return;
                event.preventDefault();
                link.parentElement.classList.toggle('is-open');
            });
        });

        mobileMq.addEventListener('change', function () {
            if (!mobileMq.matches) {
                setMenuOpen(false);
                document.querySelectorAll('.nav-item.has-dropdown.is-open').forEach(function (item) {
                    item.classList.remove('is-open');
                });
            }
        });
    })();

    function switchTab(tab) {
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.getElementById(tab).classList.remove('hidden');
        document.querySelectorAll('[onclick*="switchTab"]').forEach(btn => {
            btn.className = 'px-5 py-2 bg-gray-200 text-gray-700 rounded text-sm font-medium';
        });
        event.target.className = 'px-5 py-2 bg-[var(--primary)] text-white rounded text-sm font-medium';
    }
</script>
</body>
</html>
