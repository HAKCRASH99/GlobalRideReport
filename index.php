<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Ride Report | Verified Vehicle History Reports Worldwide</title>
    <meta name="description" content="Get verified vehicle and boat history reports from trusted global sources. Check VIN or HIN details before buying or selling for complete peace of mind.">
    <meta name="keywords" content="vehicle history report, VIN check, boat history, HIN verification, car report, global ride report">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* Base Styles & Variables */
        :root {
            --primary: #0A3D62;
            --accent: #00AEEF;
            --background: #F5F7FA;
            --footer: #1A1A1A;
            --text: #333333;
            --light: #FFFFFF;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --radius: 12px;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Dark Mode Variables - Blue Theme */
        [data-theme="dark"] {
            --primary: #4A9DE3;
            --accent: #00AEEF;
            --background: #0A1A2F;
            --footer: #0A1424;
            --text: #E8F4FF;
            --light: #152642;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .hero {
            background: linear-gradient(135deg, #0A3D62 0%, #0d4a7c 100%);
        }

        [data-theme="dark"] .card {
            border: 1px solid rgba(74, 157, 227, 0.1);
        }

        [data-theme="dark"] .form-group input,
        [data-theme="dark"] .form-group textarea,
        [data-theme="dark"] .language-selector select,
        [data-theme="dark"] .mobile-language-selector select {
            background-color: #1E3052;
            border-color: #2A4A7A;
            color: #E8F4FF;
        }

        [data-theme="dark"] .pricing-tabs {
            background: #1E3052;
        }

        [data-theme="dark"] .tab-btn {
            color: #E8F4FF;
        }

        [data-theme="dark"] .faq-question {
            background-color: #1E3052;
        }

        [data-theme="dark"] .faq-answer {
            background-color: #152642;
        }

        [data-theme="dark"] .mobile-nav,
        [data-theme="dark"] .mobile-nav a,
        [data-theme="dark"] .mobile-nav-btns {
            background-color: #152642;
            color: #E8F4FF;
        }

        [data-theme="dark"] .mobile-nav li {
            border-bottom-color: #2A4A7A;
        }

        [data-theme="dark"] .mobile-nav-header {
            background-color: #152642;
            border-bottom-color: #2A4A7A;
        }

        [data-theme="dark"] .mobile-nav-btns {
            border-top-color: #2A4A7A;
        }

        [data-theme="dark"] #services,
        [data-theme="dark"] #pricing,
        [data-theme="dark"] #blog,
        [data-theme="dark"] .testimonials-section {
            background-color: #0F2442 !important;
        }

        [data-theme="dark"] .service-icon {
            background: rgba(74, 157, 227, 0.1);
        }

        [data-theme="dark"] .stat-card {
            background: linear-gradient(135deg, #1E3052 0%, #152642 100%);
        }

        [data-theme="dark"] .process-steps:before {
            background: linear-gradient(90deg, var(--accent), #4A9DE3);
        }

        [data-theme="dark"] .service-card:before {
            background: linear-gradient(90deg, var(--accent), #4A9DE3);
        }

        [data-theme="dark"] h2:after {
            background: linear-gradient(90deg, var(--accent), #4A9DE3);
        }

        [data-theme="dark"] .price span {
            color: #B8D4F0;
        }

        [data-theme="dark"] .blog-meta {
            color: #B8D4F0;
        }

        [data-theme="dark"] .testimonial-location {
            color: #B8D4F0;
        }

        [data-theme="dark"] .faq-question:hover {
            background-color: #2A4A7A;
        }
        
        /* Car Background Image */
        .car-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/bg.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.25;
            z-index: -1;
            pointer-events: none;
        }
        
        [data-theme="dark"] .car-background {
            opacity: 0.03;
        }
        
        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent) 0%, #008ec7 100%);
            color: white;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(0, 174, 239, 0.3);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
        }
        
        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 174, 239, 0.4);
        }

        /* Custom Scrollbar Styles */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--background);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 6px;
            border: 2px solid var(--background);
            transition: var(--transition);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
            transform: scale(1.05);
        }

        /* For Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--background);
        }

        /* Dark mode specific scrollbar adjustments */
        [data-theme="dark"] ::-webkit-scrollbar-thumb {
            background: var(--accent);
        }

        [data-theme="dark"] ::-webkit-scrollbar-thumb:hover {
            background: #4A9DE3;
        }

        [data-theme="dark"] * {
            scrollbar-color: var(--accent) var(--background);
        }

        /* Logo Styles - Fixed Height */
        .logo-img {
            width: 160px;
            height: 40px;
            object-fit: contain;
            transition: var(--transition);
        }

        .logo-img.light-logo {
            display: block;
        }

        .logo-img.dark-logo {
            display: none;
        }

        [data-theme="dark"] .logo-img.light-logo {
            display: none;
        }

        [data-theme="dark"] .logo-img.dark-logo {
            display: block;
        }

        /* Language Switcher Styles */
        .language-selector select,
        .mobile-language-selector select {
            padding: 10px 18px;
            border: 1px solid #e0e0e0;
            border-radius: var(--radius);
            background-color: white;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            transition: var(--transition);
            min-width: 120px;
        }

        .language-selector select:focus,
        .mobile-language-selector select:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 174, 239, 0.2);
        }

        /* Fixed Layout for Language Switching */
        .hero h1, .hero p {
            text-align: center;
            max-width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .desktop-nav a {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 120px;
        }
        
        .mobile-nav a {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Spanish Language Specific Styles for Navigation */
        html[lang="es"] .desktop-nav a {
            font-size: 0.85rem;
        }
        
        html[lang="es"] .mobile-nav a {
            font-size: 0.85rem;
        }

        /* Particles Background */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .particles-overlay {
            position: relative;
            z-index: 1;
        }

        /* Pricing Grid - Balanced Layout */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        /* For larger screens - 4 cards in one row */
        @media (min-width: 1200px) {
            .pricing-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* For medium screens - 2 cards per row */
        @media (max-width: 1199px) and (min-width: 768px) {
            .pricing-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* For small screens - 1 card per row */
        @media (max-width: 767px) {
            .pricing-grid {
                grid-template-columns: 1fr;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            overflow-x: hidden;
            width: 100%;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--background);
            color: var(--text);
            line-height: 1.7;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            width: 100%;
            position: relative;
            padding-top: 80px; /* Added for fixed header */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary);
            margin-bottom: 1.2rem;
            line-height: 1.3;
        }

        h1 {
            font-size: 3.2rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            font-weight: 700;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--accent), #0A3D62);
            border-radius: 3px;
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            font-weight: 400;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 25px;
        }

        section {
            padding: 100px 0;
            position: relative;
            width: 100%;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            background: linear-gradient(135deg, var(--accent) 0%, #008ec7 100%);
            color: white;
            border: none;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 1.05rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 174, 239, 0.3);
        }

        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 174, 239, 0.4);
        }

        .btn:hover:before {
            left: 100%;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--accent);
            color: white;
        }

        .card {
            background-color: var(--light);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 35px;
            transition: var(--transition);
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.03);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.3rem;
            color: var(--primary);
            transition: var(--transition);
            padding: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .theme-toggle:hover {
            background-color: rgba(0, 0, 0, 0.05);
            color: var(--accent);
        }

        [data-theme="dark"] .theme-toggle:hover {
            background-color: rgba(74, 157, 227, 0.1);
        }

        .mobile-theme-toggle {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.3rem;
            color: var(--primary);
            transition: var(--transition);
            padding: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-left: auto;
            margin-right: 10px;
        }

        .mobile-theme-toggle:hover {
            background-color: rgba(0, 0, 0, 0.05);
            color: var(--accent);
        }

        [data-theme="dark"] .mobile-theme-toggle:hover {
            background-color: rgba(74, 157, 227, 0.1);
        }

        /* Header & Navigation - Fixed Height */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(10px);
            transition: background-color 0.3s ease;
            height: 80px; /* Fixed height */
        }

        [data-theme="dark"] header {
            background-color: rgba(21, 38, 66, 0.95);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            width: 100%;
            height: 100%;
        }

        .logo {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
        }

        .logo-text span {
            color: var(--accent);
        }

        /* Desktop Navigation */
        .desktop-nav {
            display: flex;
            flex: 1;
            justify-content: center;
        }

        .desktop-nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
            padding: 0;
            margin: 0;
        }

        .desktop-nav li {
            margin: 0;
        }

        .desktop-nav a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
            font-size: 0.95rem;
            padding: 8px 0;
        }

        .desktop-nav a:hover {
            color: var(--accent);
        }

        .desktop-nav a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--accent);
            transition: var(--transition);
            border-radius: 2px;
        }

        .desktop-nav a:hover:after {
            width: 100%;
        }

        .nav-btns {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-shrink: 0;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
            background: none;
            border: none;
            z-index: 1001;
            padding: 8px;
        }

        /* Overlay */
        .mobile-nav-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .mobile-nav-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Mobile Nav (Sidebar) */
        .mobile-nav {
            position: fixed;
            top: 0;
            right: -320px;
            width: 85%;
            max-width: 320px;
            height: 100%;
            background-color: var(--light);
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.15);
            z-index: 999;
            transition: right 0.3s ease;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .mobile-nav.active {
            right: 0;
        }

        /* Mobile Nav Header */
        .mobile-nav-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            background-color: var(--light);
            position: sticky;
            top: 0;
            z-index: 1002;
        }

        .mobile-nav-logo {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
        }

        .mobile-nav-logo span {
            color: var(--accent);
        }

        /* Close Button */
        .mobile-nav-close {
            background: none;
            border: none;
            font-size: 1.3rem;
            color: var(--primary);
            cursor: pointer;
            transition: var(--transition);
            padding: 6px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .mobile-nav-close:hover {
            background-color: rgba(0, 0, 0, 0.05);
            color: var(--accent);
            transform: rotate(90deg);
        }

        [data-theme="dark"] .mobile-nav-close:hover {
            background-color: rgba(74, 157, 227, 0.1);
        }

        /* Nav Content */
        .mobile-nav-content {
            padding: 0;
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .mobile-nav ul {
            list-style: none;
            margin-top: 0;
            padding: 0;
            flex: 1;
        }

        .mobile-nav li {
            margin: 0;
            border-bottom: 1px solid #f3f3f3;
        }

        .mobile-nav li:last-child {
            border-bottom: none;
        }

        .mobile-nav a {
            display: block;
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            font-size: 0.95rem;
            padding: 14px 20px;
            transition: var(--transition);
            background-color: var(--light);
        }

        .mobile-nav a:hover {
            color: var(--accent);
            background-color: rgba(0, 174, 239, 0.05);
            padding-left: 28px;
        }

        [data-theme="dark"] .mobile-nav a:hover {
            background-color: rgba(74, 157, 227, 0.1);
        }

        /* Bottom Buttons */
        .mobile-nav-btns {
            padding: 15px 20px;
            border-top: 1px solid #eee;
            background-color: var(--light);
            flex-shrink: 0;
            position: sticky;
            bottom: 0;
            z-index: 1002;
        }

        .mobile-language-selector {
            width: 100%;
            margin-bottom: 15px;
        }

        .mobile-nav .btn {
            width: 100%;
            text-align: center;
            justify-content: center;
            font-size: 0.95rem;
            padding: 14px 20px;
        }

        /* Hero Section - Fixed Height */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, #0d4a7c 100%);
            color: white;
            padding: 150px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            width: 100%;
            min-height: 700px; /* Fixed minimum height */
            display: flex;
            align-items: center;
        }

        .hero-content {
            width: 100%;
        }

        .hero h1 {
            color: white;
            font-size: 3.5rem;
            margin-bottom: 1.8rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 3rem;
            opacity: 0.9;
            font-weight: 400;
        }

        .report-form {
            background-color: var(--light);
            border-radius: var(--radius);
            padding: 40px;
            max-width: 650px;
            margin: 0 auto;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--primary);
            font-size: 1.05rem;
        }

        .form-group input {
            width: 100%;
            padding: 16px 20px;
            border: 1px solid #e0e0e0;
            border-radius: var(--radius);
            font-size: 1.05rem;
            transition: var(--transition);
            font-family: 'Inter', sans-serif;
        }

        .form-group input:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 174, 239, 0.2);
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-text {
            flex: 1;
        }

        .about-stats {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .stat-card {
            background-color: var(--light);
            border-radius: var(--radius);
            padding: 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.03);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 8px;
            font-family: 'Montserrat', sans-serif;
        }

        .stat-text {
            font-size: 1.1rem;
            color: var(--primary);
            font-weight: 600;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }

        .service-card {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
            padding-top: 20px;
        }

        .service-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), #0A3D62);
            border-radius: 2px;
        }

        .service-icon {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 25px;
            transition: var(--transition);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(10, 61, 98, 0.05);
            border-radius: 50%;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
            background: rgba(10, 61, 98, 0.1);
        }

        .service-card h3 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        /* Process Section */
        .process-steps {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
        }

        .process-steps:before {
            content: '';
            position: absolute;
            top: 60px;
            left: 10%;
            width: 80%;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), #0A3D62);
            z-index: 1;
            border-radius: 2px;
        }

        .step {
            text-align: center;
            position: relative;
            z-index: 2;
            flex: 1;
            padding: 0 20px;
        }

        .step-number {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--accent) 0%, #008ec7 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 700;
            margin: 0 auto 25px;
            box-shadow: 0 10px 20px rgba(0, 174, 239, 0.3);
            transition: var(--transition);
        }

        .step:hover .step-number {
            transform: scale(1.1);
        }

        .step h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        /* Pricing Section */
        .pricing-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            background: white;
            padding: 8px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .tab-btn {
            padding: 14px 30px;
            background-color: transparent;
            border: none;
            color: var(--primary);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border-radius: calc(var(--radius) - 4px);
            flex: 1;
            font-family: 'Inter', sans-serif;
            font-size: 1.05rem;
        }

        .tab-btn.active {
            background: linear-gradient(135deg, var(--accent) 0%, #008ec7 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(0, 174, 239, 0.3);
        }

        .pricing-card {
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 40px 30px;
        }

        .pricing-card.featured {
            transform: scale(1.05);
            border: 2px solid var(--accent);
            box-shadow: 0 15px 35px rgba(0, 174, 239, 0.2);
        }

        .pricing-badge {
            position: absolute;
            top: 25px;
            right: -35px;
            background-color: var(--accent);
            color: white;
            padding: 8px 40px;
            transform: rotate(45deg);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .price {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            margin: 25px 0;
            font-family: 'Montserrat', sans-serif;
        }

        .price span {
            font-size: 1.1rem;
            color: #777;
            font-weight: 500;
        }

        .features-list {
            list-style: none;
            text-align: left;
            margin-bottom: 35px;
        }

        .features-list li {
            margin-bottom: 12px;
            padding-left: 30px;
            position: relative;
            font-size: 1.05rem;
        }

        .features-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 35px;
        }

        .team-card {
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .team-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent) 0%, #0A3D62 100%);
            margin: 0 auto 25px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .team-card:hover .team-img {
            transform: scale(1.05);
        }

        .team-card h3 {
            margin-bottom: 8px;
            font-size: 1.4rem;
        }

        .team-role {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 18px;
            font-size: 1.1rem;
        }

        /* Testimonials */
        .testimonials-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }

        .testimonial {
            text-align: center;
            padding: 0 25px;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 25px;
            font-size: 1.25rem;
            line-height: 1.8;
            position: relative;
        }

        .testimonial-text:before, .testimonial-text:after {
            content: '"';
            font-size: 4rem;
            color: var(--accent);
            opacity: 0.3;
            position: absolute;
            font-family: Georgia, serif;
        }

        .testimonial-text:before {
            top: -20px;
            left: -15px;
        }

        .testimonial-text:after {
            bottom: -50px;
            right: -15px;
        }

        .testimonial-author {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.2rem;
        }

        .testimonial-location {
            color: #777;
            font-size: 1rem;
        }

        /* Testimonial Carousel Styles */
        .testimonial-carousel {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .testimonial-slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .testimonial-slide {
            flex: 0 0 100%;
            text-align: center;
            padding: 0 25px;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .testimonial-slide.active {
            opacity: 1;
            position: relative;
        }

        .carousel-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-prev,
        .carousel-next {
            background: var(--accent);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 5px 15px rgba(0, 174, 239, 0.3);
        }

        .carousel-prev:hover,
        .carousel-next:hover {
            background: #008ec7;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 174, 239, 0.4);
        }

        .carousel-indicators {
            display: flex;
            gap: 10px;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            background: #ddd;
            cursor: pointer;
            transition: var(--transition);
        }

        .indicator.active {
            background: var(--accent);
            transform: scale(1.2);
        }

        /* Dark mode adjustments for carousel */
        [data-theme="dark"] .indicator {
            background: #2A4A7A;
        }

        [data-theme="dark"] .indicator.active {
            background: var(--accent);
        }

        /* Responsive adjustments for carousel */
        @media (max-width: 768px) {
            .carousel-controls {
                max-width: 250px;
            }
            
            .carousel-prev,
            .carousel-next {
                width: 45px;
                height: 45px;
            }
        }

        @media (max-width: 576px) {
            .carousel-controls {
                max-width: 220px;
            }
            
            .carousel-prev,
            .carousel-next {
                width: 40px;
                height: 40px;
            }
            
            .indicator {
                width: 10px;
                height: 10px;
            }
        }

        .stars {
            color: #FFC107;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        /* Testimonial Profile Images */
        .testimonial-profile {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 3px solid var(--accent);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* FAQ Section */
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-item {
            margin-bottom: 20px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .faq-item:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .faq-question {
            background-color: var(--light);
            padding: 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            transition: var(--transition);
            font-size: 1.15rem;
        }

        .faq-question:hover {
            background-color: #f8f9fa;
        }

        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
            background-color: white;
        }

        .faq-item.active .faq-answer {
            padding: 25px;
            max-height: 500px;
        }

        .faq-toggle {
            font-size: 1.5rem;
            color: var(--accent);
            transition: var(--transition);
            font-weight: 300;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        /* Blog Section */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }

        .blog-card {
            position: relative;
            overflow: hidden;
        }

        .blog-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: var(--radius) var(--radius) 0 0;
            transition: var(--transition);
        }

        .blog-card:hover img {
            transform: scale(1.05);
        }

        .blog-meta {
            display: flex;
            justify-content: space-between;
            color: #777;
            font-size: 0.95rem;
            margin-bottom: 18px;
            font-weight: 500;
        }

        .blog-card h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        /* Contact Section */
        .contact-container {
            display: flex;
            gap: 60px;
        }

        .contact-form {
            flex: 1;
        }

        .contact-info {
            flex: 1;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
        }

        .info-icon {
            font-size: 1.8rem;
            color: var(--accent);
            margin-right: 20px;
            margin-top: 5px;
        }

        /* Footer */
        footer {
            background-color: var(--footer);
            color: white;
            padding: 80px 0 25px;
            position: relative;
            width: 100%;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-col h3 {
            color: white;
            margin-bottom: 30px;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
            font-size: 1.2rem;
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #999;
            font-size: 0.95rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .desktop-nav {
                display: none;
            }
            
            .nav-btns {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .header-container {
                padding: 15px 0;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            h2 {
                font-size: 2rem;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .process-steps {
                flex-direction: column;
                gap: 50px;
            }
            
            .process-steps:before {
                display: none;
            }
            
            .contact-container {
                flex-direction: column;
            }
            
            .pricing-card.featured {
                transform: none;
            }
            
            .scroll-to-top {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }

        @media (max-width: 768px) {
            .mobile-nav {
                width: 85%;
                max-width: 320px;
            }
            
            .mobile-nav a {
                padding: 14px 20px;
                font-size: 0.95rem;
            }
            
            .mobile-nav-header {
                padding: 15px 18px;
            }
            
            .mobile-nav-close {
                padding: 6px;
                width: 38px;
                height: 38px;
                font-size: 1.4rem;
            }
            
            .header-container {
                padding: 12px 0;
            }
            
            .logo-text {
                font-size: 1.3rem;
            }
            
            .hero {
                padding: 120px 0;
                min-height: 600px;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1.15rem;
            }
            
            .report-form {
                padding: 30px 25px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            section {
                padding: 80px 0;
            }
            
            .card {
                padding: 30px 25px;
            }
            
            .container {
                max-width: 720px;
                padding: 17px 20px;
            }
            
            .about-stats {
                grid-template-columns: 1fr;
            }
            
            .services-grid, .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }
            
            .car-background {
                background-attachment: scroll;
            }
        }

        @media (max-width: 576px) {
            .mobile-nav {
                width: 95%;
                max-width: 280px;
            }
            
            .mobile-nav a {
                padding: 12px 15px;
                font-size: 0.9rem;
            }
            
            .mobile-nav-header {
                padding: 10px 15px;
            }
            
            .mobile-nav-close {
                padding: 5px;
                width: 34px;
                height: 34px;
                font-size: 1.25rem;
            }
            
            .logo-text {
                font-size: 1.2rem;
            }
            
            .hero {
                padding: 100px 0;
                min-height: 550px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .report-form {
                padding: 25px 20px;
            }
            
            section {
                padding: 70px 0;
            }
            
            .card {
                padding: 25px 20px;
            }
            
            .container {
                padding: 17px 15px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.7rem;
            }
            
            .step-number {
                width: 80px;
                height: 80px;
                font-size: 1.8rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .price {
                font-size: 2.5rem;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .scroll-to-top {
                bottom: 15px;
                right: 15px;
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }
            #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0A3D62 0%, #0d4a7c 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.8s ease, visibility 0.8s ease;
        }

        #loading-screen.fade-out {
            opacity: 0;
            visibility: hidden;
        }

        .loading-logo {
            width: 180px;
            height: 60px;
            margin-bottom: 40px;
            object-fit: contain;
        }

        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .car-loader {
            width: 80px;
            height: 80px;
            position: relative;
            margin-bottom: 30px;
        }

        .car-icon {
            width: 100%;
            height: 100%;
            position: absolute;
            animation: rotate 2s linear infinite;
        }

        .car-icon svg {
            width: 100%;
            height: 100%;
            fill: #00AEEF;
        }

        .loading-text {
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            text-align: center;
        }

        .loading-subtext {
            color: rgba(255, 255, 255, 0.8);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            text-align: center;
            max-width: 300px;
        }

        .progress-bar {
            width: 200px;
            height: 4px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 2px;
            margin-top: 20px;
            overflow: hidden;
        }

        .progress {
            width: 0%;
            height: 100%;
            background-color: #00AEEF;
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Dark mode support for loading screen */
        [data-theme="dark"] #loading-screen {
            background: linear-gradient(135deg, #0A3D62 0%, #0d4a7c 100%);
        }
    </style>
</head>
<body>
    <!-- Car Background Image -->
    <div id="loading-screen">
        <div class="loading-container">
            <div class="car-loader">
                <div class="car-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
            </div>
            <div class="loading-text">Loading Your Vehicle Reports</div>
            <div class="loading-subtext">Preparing your trusted vehicle history reports...</div>
            <div class="progress-bar">
                <div class="progress" id="loading-progress"></div>
            </div>
        </div>
    </div>
    <div id="main-content" style="display: none;">
    <div class="car-background"></div>
    
    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <!-- Light Mode Logo -->
                <img src="images/logo2.png" style="height:70px;" class="logo-img light-logo" alt="Global Ride Report">
                <!-- Dark Mode Logo -->
                <img src="images/logo1.png" style="height:70px;" class="logo-img dark-logo" alt="Global Ride Report">
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul>
                    <li><a href="#home" data-translate="nav.home">Home</a></li>
                    <li><a href="boat-home.php" data-translate="nav.boat_reports">Boat Reports</a></li>
                    <li><a href="#services" data-translate="nav.services">Services</a></li>
                    <li><a href="#pricing" data-translate="nav.pricing">Pricing</a></li>
                    <li><a href="#about" data-translate="nav.about">About</a></li>
                    <li><a href="blog.php" data-translate="nav.blog">Blog</a></li>
                    <li><a href="#contact" data-translate="nav.contact">Contact</a></li>
                </ul>
            </nav>
            
            <!-- Desktop Navigation Buttons -->
            <div class="nav-btns">
                <div class="language-selector">
                    <select id="language-selector">
                        <option value="en" data-translate="lang.english">English</option>
                        <option value="es" data-translate="lang.spanish">Español</option>
                        <option value="fr" data-translate="lang.french">Français</option>
                        <option value="zh" data-translate="lang.chinese">中文</option>
                    </select>
                </div>
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
                <a href="boat-home.php" class="btn btn-outline" data-translate="nav.boat_reports">Boat Reports</a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav-overlay"></div>

    <!-- Mobile Navigation -->
    <div class="mobile-nav">
        <div class="mobile-nav-content" style="margin-top:120px;">
            <ul>
                <li style="display:flex;align-items:center;justify-content:space-between;">
                    <a href="#home" data-translate="nav.home">Home</a>
                    <div style="display: flex; align-items: center;">
                        <button class="mobile-theme-toggle" id="mobileThemeToggle">
                            <i class="fas fa-moon"></i>
                        </button>
                        <button class="mobile-nav-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </li>
                <li><a href="#boat-report" data-translate="nav.boat_reports">Boat Reports</a></li>
                <li><a href="#services" data-translate="nav.services">Services</a></li>
                <li><a href="#pricing" data-translate="nav.pricing">Pricing</a></li>
                <li><a href="#about" data-translate="nav.about">About</a></li>
                <li><a href="blog.php" data-translate="nav.blog">Blog</a></li>
                <li><a href="#contact" data-translate="nav.contact">Contact</a></li>
            </ul>
            
            <div class="mobile-nav-btns">
                <div class="mobile-language-selector">
                    <select id="mobile-language-selector">
                        <option value="en" data-translate="lang.english">English</option>
                        <option value="es" data-translate="lang.spanish">Español</option>
                        <option value="fr" data-translate="lang.french">Français</option>
                        <option value="zh" data-translate="lang.chinese">中文</option>
                    </select>
                </div>
                <a href="#boat-report" class="btn btn-outline" style="width: 100%; text-align: center;" data-translate="nav.boat_reports">Boat Reports</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div id="particles-js"></div>
        <div class="container particles-overlay hero-content">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-translate="hero.title">Get a Verified Vehicle History Report Before You Buy or Sell</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-translate="hero.subtitle">Whether you're buying or selling, check VIN or plate details from trusted global sources for peace of mind.</p>
            
            <div class="report-form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="form-row">
                    <div class="form-group">
                        <label for="email" data-translate="form.email">Enter email address</label>
                        <input type="email" id="email" placeholder="your.email@example.com" data-translate-placeholder="form.email_placeholder">
                    </div>
                    <div class="form-group">
                        <label for="vin" data-translate="form.vin">Enter VIN / Plate Number</label>
                        <input type="text" id="vin" placeholder="e.g. 1HGCM82633A123456" data-translate-placeholder="form.vin_placeholder">
                    </div>
                </div>
                <button class="btn" style="width: 100%;" id="getReportBtn" data-translate="form.get_report">Get Report</button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2 data-aos="fade-up" data-translate="about.title">About Us</h2>
            <div class="about-content">
                <div class="about-text" data-aos="fade-right" data-aos-duration="800">
                    <p data-translate="about.text1">Welcome to Global Ride Report, your trusted source for verified vehicle and boat history reports worldwide.</p>
                    <p data-translate="about.text2">We help buyers, sellers, and owners make confident decisions by providing accurate, transparent, and data-backed reports from verified international sources.</p>
                    <p data-translate="about.text3">In today's fast-moving market, transparency is everything. Whether you're buying or selling a car, bike, truck, or boat, our mission is to give you the clarity you deserve.</p>
                </div>
                <div class="about-stats" data-aos="fade-left" data-aos-duration="800">
                    <div class="stat-card">
                        <div class="stat-number">6+</div>
                        <div class="stat-text" data-translate="about.stat1">Years of Trusted Experience</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">32K+</div>
                        <div class="stat-text" data-translate="about.stat2">Verified Customers Served</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">190+</div>
                        <div class="stat-text" data-translate="about.stat3">Supported Countries</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">99%</div>
                        <div class="stat-text" data-translate="about.stat4">Customer Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" style="background-color: white;">
        <div class="container">
            <h2 data-aos="fade-up" data-translate="services.title">Our Services</h2>
            <div class="services-grid">
                <div class="card service-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 data-translate="services.service1.title">Market Value Assessment</h3>
                    <p data-translate="services.service1.description">We evaluate your vehicle's market value by considering supply & demand, condition, age, mileage, brand reputation, and market trends.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-gas-pump"></i>
                    </div>
                    <h3 data-translate="services.service2.title">Fuel Efficiency Analysis</h3>
                    <p data-translate="services.service2.description">We examine your vehicle's fuel performance, overall condition, and key features to give a realistic efficiency rating.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 data-translate="services.service3.title">Information Protection</h3>
                    <p data-translate="services.service3.description">We securely access verified international vehicle records and liaise with relevant authorities, keeping your data safe.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-car-crash"></i>
                    </div>
                    <h3 data-translate="services.service4.title">Damages & Accident History</h3>
                    <p data-translate="services.service4.description">Detailed reports on collisions, uncommon accident types, and their causes help you understand the true condition.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 data-translate="services.service5.title">Vehicle Specifications</h3>
                    <p data-translate="services.service5.description">From engine performance to safety features, our comprehensive specs give you complete knowledge of the vehicle.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 data-translate="services.service6.title">Ownership & Title Verification</h3>
                    <p data-translate="services.service6.description">We provide verified information about current ownership, title checks, and lien status giving you confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section>
        <div class="container">
            <h2 data-aos="fade-up" data-translate="process.title">Get Your Report in 3 Easy Steps</h2>
            <div class="process-steps">
                <div class="step" data-aos="fade-up" data-aos-duration="800">
                    <div class="step-number">1</div>
                    <h3 data-translate="process.step1.title">Enter Your Details</h3>
                    <p data-translate="process.step1.description">Provide your email and VIN or HIN. Our system securely verifies your vehicle or boat records worldwide.</p>
                </div>
                <div class="step" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <h3 data-translate="process.step2.title">Select Package & Payment</h3>
                    <p data-translate="process.step2.description">Choose the plan that suits your needs. Pay securely via credit/debit card or crypto with automatic currency conversion.</p>
                </div>
                <div class="step" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="step-number">3</div>
                    <h3 data-translate="process.step3.title">Receive Your Verified Report</h3>
                    <p data-translate="process.step3.description">Get your trusted, detailed vehicle or boat history report delivered directly to your email within the guaranteed deadline.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
      <section id="pricing" style="background-color: white;">
        <div class="container">
            <h2 data-aos="fade-up" data-translate="pricing.title">Pricing Plans</h2>
            <div class="pricing-tabs">
                <button class="tab-btn active" data-type="vehicle" data-translate="pricing.vehicle_reports">Vehicle Reports</button>
                <button class="tab-btn" data-type="boat" data-translate="pricing.boat_reports">Boat Reports</button>
            </div>
            
            <!-- Vehicle Reports Pricing -->
            <div class="pricing-content" id="vehicle-pricing">
                <div class="pricing-grid">
                    <div class="card pricing-card" data-aos="fade-up" data-aos-duration="800">
                        <div class="pricing-badge" data-translate="pricing.best_deal">Best Deal</div>
                        <h3 data-translate="pricing.vehicle.plan1.name">Basic</h3>
                        <div class="price">$50</div>
                        <ul class="features-list">
                            <li data-translate="pricing.vehicle.plan1.feature1">2 Vehicle Reports</li>
                            <li data-translate="pricing.vehicle.plan1.feature2">Title Verification</li>
                            <li data-translate="pricing.vehicle.plan1.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.vehicle.plan1.feature4">Vehicle Specifications</li>
                            <li data-translate="pricing.vehicle.plan1.feature5">Accident Information</li>
                            <li data-translate="pricing.vehicle.plan1.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="vehicle-basic" data-price="50" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                    
                    <div class="card pricing-card featured" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="pricing-badge" data-translate="pricing.most_popular">Most Popular</div>
                        <h3 data-translate="pricing.vehicle.plan2.name">Standard</h3>
                        <div class="price">$70</div>
                        <ul class="features-list">
                            <li data-translate="pricing.vehicle.plan2.feature1">4 Vehicle Reports</li>
                            <li data-translate="pricing.vehicle.plan2.feature2">Title Verification</li>
                            <li data-translate="pricing.vehicle.plan2.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.vehicle.plan2.feature4">Vehicle Specifications</li>
                            <li data-translate="pricing.vehicle.plan2.feature5">Accident Information</li>
                            <li data-translate="pricing.vehicle.plan2.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="vehicle-standard" data-price="70" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                    
                    <div class="card pricing-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <h3 data-translate="pricing.vehicle.plan3.name">Premium</h3>
                        <div class="price">$100</div>
                        <ul class="features-list">
                            <li data-translate="pricing.vehicle.plan3.feature1">7 Vehicle Reports</li>
                            <li data-translate="pricing.vehicle.plan3.feature2">Title Verification</li>
                            <li data-translate="pricing.vehicle.plan3.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.vehicle.plan3.feature4">Vehicle Specifications</li>
                            <li data-translate="pricing.vehicle.plan3.feature5">Accident Information</li>
                            <li data-translate="pricing.vehicle.plan3.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="vehicle-premium" data-price="100" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                    
                    <div class="card pricing-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <h3 data-translate="pricing.vehicle.plan4.name">Platinum</h3>
                        <div class="price">$140</div>
                        <ul class="features-list">
                            <li data-translate="pricing.vehicle.plan4.feature1">10 Vehicle Reports</li>
                            <li data-translate="pricing.vehicle.plan4.feature2">Title Verification</li>
                            <li data-translate="pricing.vehicle.plan4.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.vehicle.plan4.feature4">Vehicle Specifications</li>
                            <li data-translate="pricing.vehicle.plan4.feature5">Accident Information</li>
                            <li data-translate="pricing.vehicle.plan4.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="vehicle-platinum" data-price="140" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                </div>
            </div>
            
            <!-- Boat Reports Pricing -->
            <div class="pricing-content" id="boat-pricing" style="display: none;">
                <div class="pricing-grid">
                    <div class="card pricing-card" data-aos="fade-up" data-aos-duration="800">
                        <div class="pricing-badge" data-translate="pricing.best_deal">Best Deal</div>
                        <h3 data-translate="pricing.boat.plan1.name">Basic</h3>
                        <div class="price">$70</div>
                        <ul class="features-list">
                            <li data-translate="pricing.boat.plan1.feature1">1 Boat Report</li>
                            <li data-translate="pricing.boat.plan1.feature2">Registration & HIN Verification</li>
                            <li data-translate="pricing.boat.plan1.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.boat.plan1.feature4">Boat Specifications</li>
                            <li data-translate="pricing.boat.plan1.feature5">Accident Information</li>
                            <li data-translate="pricing.boat.plan1.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="boat-basic" data-price="70" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                    
                    <div class="card pricing-card featured" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="pricing-badge" data-translate="pricing.most_popular">Most Popular</div>
                        <h3 data-translate="pricing.boat.plan2.name">Standard</h3>
                        <div class="price">$100</div>
                        <ul class="features-list">
                            <li data-translate="pricing.boat.plan2.feature1">3 Boat Reports</li>
                            <li data-translate="pricing.boat.plan2.feature2">Registration & HIN Verification</li>
                            <li data-translate="pricing.boat.plan2.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.boat.plan2.feature4">Boat Specifications</li>
                            <li data-translate="pricing.boat.plan2.feature5">Accident Information</li>
                            <li data-translate="pricing.boat.plan2.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="boat-standard" data-price="100" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                    
                    <div class="card pricing-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <h3 data-translate="pricing.boat.plan3.name">Premium</h3>
                        <div class="price">$160</div>
                        <ul class="features-list">
                            <li data-translate="pricing.boat.plan3.feature1">5 Boat Reports</li>
                            <li data-translate="pricing.boat.plan3.feature2">Registration & HIN Verification</li>
                            <li data-translate="pricing.boat.plan3.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.boat.plan3.feature4">Boat Specifications</li>
                            <li data-translate="pricing.boat.plan3.feature5">Accident Information</li>
                            <li data-translate="pricing.boat.plan3.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="boat-premium" data-price="160" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                    
                    <div class="card pricing-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <h3 data-translate="pricing.boat.plan4.name">Platinum</h3>
                        <div class="price">$220</div>
                        <ul class="features-list">
                            <li data-translate="pricing.boat.plan4.feature1">7 Boat Reports</li>
                            <li data-translate="pricing.boat.plan4.feature2">Registration & HIN Verification</li>
                            <li data-translate="pricing.boat.plan4.feature3">Safety Recall Status</li>
                            <li data-translate="pricing.boat.plan4.feature4">Boat Specifications</li>
                            <li data-translate="pricing.boat.plan4.feature5">Accident Information</li>
                            <li data-translate="pricing.boat.plan4.feature6">Never Expires</li>
                        </ul>
                        <button class="btn buy-now-btn" data-plan="boat-platinum" data-price="220" data-translate="pricing.buy_now">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section>
        <div class="container">
            <h2 data-aos="fade-up" data-translate="team.title">Our Team</h2>
            <div class="team-grid">
                <div class="card team-card" data-aos="fade-up" data-aos-duration="800">
                    <div class="team-img">
                        <img src="images/ethan.jpeg" alt="Ethan Clarke" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                    </div>
                    <h3>Ethan Clarke</h3>
                    <div class="team-role" data-translate="team.role1">Operations Manager</div>
                    <p data-translate="team.description1">Manages workflows and partner integrations.</p>
                </div>
                
                <div class="card team-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="team-img">
                        <img src="images/sofia.jpeg" alt="Sofia Hernandez" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                    </div>
                    <h3>Sofia Hernandez</h3>
                    <div class="team-role" data-translate="team.role2">Customer Success Lead</div>
                    <p data-translate="team.description2">Responds to customers and resolves issues.</p>
                </div>
                
                <div class="card team-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="team-img">
                        <img src="images/noah.jpeg" alt="Noah Kim" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                    </div>
                    <h3>Noah Kim</h3>
                    <div class="team-role" data-translate="team.role3">Data Verification Expert</div>
                    <p data-translate="team.description3">Confirms registry and history data.</p>
                </div>
                
                <div class="card team-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="team-img">
                        <img src="images/olivia.jpeg" alt="Olivia Brown" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                    </div>
                    <h3>Olivia Brown</h3>
                    <div class="team-role" data-translate="team.role4">QA & Compliance Officer</div>
                    <p data-translate="team.description4">Ensures report standards and compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section style="background-color: white;" class="testimonials-section">
        <div class="container">
            <h2 data-aos="fade-up" data-translate="testimonials.title">Trusted by Customers Worldwide</h2>
            <div class="testimonials-container">
                <div class="testimonial-carousel">
                    <div class="testimonial-slides">
                        <div class="testimonial-slide active" data-index="0">
                            <div class="testimonial-profile">
                                <img src="images/johnm.jpeg" alt="John M.">
                            </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"I received my vehicle report quickly and it was extremely detailed. Very reliable service!"</p>
                            <p class="testimonial-author">John M.</p>
                            <p class="testimonial-location">USA</p>
                        </div>
                        <div class="testimonial-slide" data-index="1">
                            <div class="testimonial-profile">
                                <img src="images/emma.jpeg" alt="Emma L.">
                            </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Global Ride Report made buying my boat easy. Everything was verified and accurate."</p>
                            <p class="testimonial-author">Emma L.</p>
                            <p class="testimonial-location">UK</p>
                        </div>
                        <div class="testimonial-slide" data-index="2">
                            <div class="testimonial-profile">
                                <img src="images/carlos.jpeg" alt="Carlos R.">
                            </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Highly recommend! The vehicle history report gave me full confidence before purchase."</p>
                            <p class="testimonial-author">Carlos R.</p>
                            <p class="testimonial-location">Brazil</p>
                        </div>
                        <div class="testimonial-slide" data-index="3">
                            <div class="testimonial-profile">
                                <img src="images/aisha.jpeg" alt="Aisha K.">
                            </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Fast, secure, and trustworthy. The report covered everything I needed to know."</p>
                            <p class="testimonial-author">Aisha K.</p>
                            <p class="testimonial-location">UAE</p>
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <button class="carousel-prev" aria-label="Previous testimonial">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="carousel-indicators">
                            <button class="indicator active" data-index="0" aria-label="Show testimonial 1"></button>
                            <button class="indicator" data-index="1" aria-label="Show testimonial 2"></button>
                            <button class="indicator" data-index="2" aria-label="Show testimonial 3"></button>
                            <button class="indicator" data-index="3" aria-label="Show testimonial 4"></button>
                        </div>
                        <button class="carousel-next" aria-label="Next testimonial">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section>
        <div class="container">
            <h2 data-aos="fade-up" data-translate="faq.title">Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item" data-aos="fade-up" data-aos-duration="800">
                    <div class="faq-question">
                        <span data-translate="faq.question1">What is a Global Ride Report?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p data-translate="faq.answer1">A Global Ride Report is a detailed document providing verified information about a vehicle, trailer, or boat's history. Reports may include market value estimates, specifications, safety recall status, accident history, and registration checks.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="faq-question">
                        <span data-translate="faq.question2">Who can use Global Ride Report?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p data-translate="faq.answer2">Our service is designed for both buyers and owners worldwide. Buyers gain transparency before purchase, while sellers build trust by providing verified history. We provide reports globally for cars, trucks, motorcycles, trailers, and boats.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="faq-question">
                        <span data-translate="faq.question3">What is a VIN or HIN?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p data-translate="faq.answer3">VIN (Vehicle Identification Number) is a unique 17-character code identifying your vehicle. HIN (Hull Identification Number) is a unique code identifying your boat. These numbers reveal manufacturer details, specifications, safety recalls, and more.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="faq-question">
                        <span data-translate="faq.question4">Where can I find my VIN or HIN?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p data-translate="faq.answer4">Vehicles & Trailers: Driver-side dashboard (through windshield), driver-side door pillar, engine firewall/under hood, registration, title, or insurance papers. Boats: Starboard or port side hull, transom or registration plate, boat documentation/title.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="faq-question">
                        <span data-translate="faq.question5">Are there any discounts?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p data-translate="faq.answer5">Yes, we currently offer 10% discount on all reports when payment is made using cryptocurrency. This provides a secure, fast, and cost-effective way to purchase your report.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="faq-question">
                        <span data-translate="faq.question6">Where do you provide services?</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p data-translate="faq.answer6">Global Ride Report offers worldwide coverage for vehicles, trailers, and boats in over 190+ countries, including USA, UK, EU, UAE, Canada, Australia, and more. Verified information is sourced from official registries, authorities, and trusted databases.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" style="background-color: white;">
        <div class="container">
            <h2 data-aos="fade-up" data-translate="blog.title">Latest from Our Blog</h2>
            <div class="blog-grid">
                <div class="card blog-card" data-aos="fade-up" data-aos-duration="800">
                    <img src="images/salvage.png" alt="How to Get a Salvage Title Cleared Legally">
                    <div class="blog-meta">
                        <span data-translate="blog.meta">5 min read</span>
                    </div>
                    <h3 data-translate="blog.post1.title">How to Get a Salvage Title Cleared Legally</h3>
                    <p data-translate="blog.post1.description">A salvage title doesn't have to block your path. Learn how to clear it safely for vehicles worldwide.</p>
                    <a href="blog.php" class="btn btn-outline" data-translate="blog.read_more">Read More</a>
                </div>
                
                <div class="card blog-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <img src="images/odometer.png" alt="How to Spot Odometer Rollback with a VIN Check">
                    <div class="blog-meta">
                        <span data-translate="blog.meta">5 min read</span>
                    </div>
                    <h3 data-translate="blog.post2.title">How to Spot Odometer Rollback with a VIN Check</h3>
                    <p data-translate="blog.post2.description">Mileage should climb, never dip. Detect odometer rollbacks using VIN checks and vehicle inspection tips.</p>
                    <a href="blog.php" class="btn btn-outline" data-translate="blog.read_more">Read More</a>
                </div>
                
                <div class="card blog-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <img src="images/mechanic.png" alt="Pre-Purchase Car Inspection Explained">
                    <div class="blog-meta">
                        <span data-translate="blog.meta">5 min read</span>
                    </div>
                    <h3 data-translate="blog.post3.title">Pre-Purchase Car Inspection Explained</h3>
                    <p data-translate="blog.post3.description">Avoid surprises by performing a thorough inspection before buying any used vehicle.</p>
                    <a href="blog.php" class="btn btn-outline" data-translate="blog.read_more">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 data-aos="fade-up" data-translate="contact.title">Contact Us</h2>
            <div class="contact-container">
                <div class="contact-form" data-aos="fade-right" data-aos-duration="800">
                    <div class="card">
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="contact-name" data-translate="contact.name">Name</label>
                                <input type="text" id="contact-name" name="name" placeholder="Your full name" data-translate-placeholder="contact.name_placeholder" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-email" data-translate="contact.email">Email</label>
                                <input type="email" id="contact-email" name="email" placeholder="your.email@example.com" data-translate-placeholder="contact.email_placeholder" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" data-translate="contact.message">Message</label>
                                <textarea id="contact-message" name="message" rows="5" placeholder="How can we help you?" data-translate-placeholder="contact.message_placeholder" style="width: 100%; padding: 16px 20px; border: 1px solid #e0e0e0; border-radius: 12px; font-size: 1.05rem; font-family: 'Inter', sans-serif;" required></textarea>
                            </div>
                            <button type="submit" class="btn" id="submitBtn" data-translate="contact.send_message">Send Message</button>
                            <div id="formMessage" style="margin-top: 20px; display: none;"></div>
                        </form>
                    </div>
                </div>
                
                <div class="contact-info" data-aos="fade-left" data-aos-duration="800">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 data-translate="contact.address_title">Address</h3>
                            <p>75 NW 2nd St, Homestead, FL 33030, USA</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 data-translate="contact.email_title">Email</h3>
                            <p>support@globalridereport.com</p>
                            <p>info@globalridereport.com</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 data-translate="contact.phone_title">Phone</h3>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3 data-translate="footer.company">Global Ride Report</h3>
                    <p data-translate="footer.description">Your trusted source for verified vehicle and boat history reports worldwide.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3 data-translate="footer.quick_links">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home" data-translate="nav.home">Home</a></li>
                        <li><a href="#boat-report" data-translate="nav.boat_reports">Boat Reports</a></li>
                        <li><a href="#services" data-translate="nav.services">Services</a></li>
                        <li><a href="#pricing" data-translate="nav.pricing">Pricing</a></li>
                        <li><a href="#about" data-translate="nav.about">About</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3 data-translate="footer.legal">Legal</h3>
                    <ul class="footer-links">
                        <li><a href="#" data-translate="footer.terms">Terms & Conditions</a></li>
                        <li><a href="#" data-translate="footer.privacy">Privacy Policy</a></li>
                        <li><a href="#" data-translate="footer.disclaimer">Disclaimer</a></li>
                        <li><a href="#" data-translate="footer.refund">Refund Policy</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3 data-translate="footer.contact">Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 75 NW 2nd St, Homestead, FL</li>
                        <li><i class="fas fa-envelope"></i> support@globalridereport.com</li>
                        <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p data-translate="footer.copyright">&copy; 2025 Global Ride Report. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    </div>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS (Animate On Scroll) - This should be done after DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS with proper settings
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100,
                disable: function() {
                    return window.innerWidth < 768;
                }
            });
            
            // Refresh AOS after language changes
            window.addEventListener('load', function() {
                AOS.refresh();
            });
        });

        // Language Translation System with API Integration
        class LanguageManager {
            constructor() {
                this.currentLanguage = localStorage.getItem('language') || 'en';
                this.translations = {};
                this.init();
            }

            async init() {
                // Load translations from API or local storage
                await this.loadTranslations();
                this.applyLanguage(this.currentLanguage);
                this.setupEventListeners();
            }

            async loadTranslations() {
                try {
                    // Try to load from API first
                    const response = await fetch('/api/translations');
                    if (response.ok) {
                        this.translations = await response.json();
                    } else {
                        // Fallback to local translations
                        this.loadLocalTranslations();
                    }
                } catch (error) {
                    console.warn('API not available, using local translations');
                    this.loadLocalTranslations();
                }
            }

            loadLocalTranslations() {
                this.translations = {
                    en: {
                        // Navigation
                        "nav.home": "Home",
                        "nav.boat_reports": "Boat Reports",
                        "nav.services": "Services",
                        "nav.pricing": "Pricing",
                        "nav.about": "About",
                        "nav.blog": "Blog",
                        "nav.contact": "Contact",
                        
                        // Language selector
                        "lang.english": "English",
                        "lang.spanish": "Español",
                        "lang.french": "Français",
                        "lang.chinese": "中文",
                        
                        // Hero section
                        "hero.title": "Get a Verified Vehicle History Report Before You Buy or Sell",
                        "hero.subtitle": "Whether you're buying or selling, check VIN or plate details from trusted global sources for peace of mind.",
                        
                        // Form
                        "form.email": "Enter email address",
                        "form.email_placeholder": "your.email@example.com",
                        "form.vin": "Enter VIN / Plate Number",
                        "form.vin_placeholder": "e.g. 1HGCM82633A123456",
                        "form.get_report": "Get Report",
                        
                        // About section
                        "about.title": "About Us",
                        "about.text1": "Welcome to Global Ride Report, your trusted source for verified vehicle and boat history reports worldwide.",
                        "about.text2": "We help buyers, sellers, and owners make confident decisions by providing accurate, transparent, and data-backed reports from verified international sources.",
                        "about.text3": "In today's fast-moving market, transparency is everything. Whether you're buying or selling a car, bike, truck, or boat, our mission is to give you the clarity you deserve.",
                        "about.stat1": "Years of Trusted Experience",
                        "about.stat2": "Verified Customers Served",
                        "about.stat3": "Supported Countries",
                        "about.stat4": "Customer Satisfaction Rate",
                        
                        // Services section
                        "services.title": "Our Services",
                        "services.service1.title": "Market Value Assessment",
                        "services.service1.description": "We evaluate your vehicle's market value by considering supply & demand, condition, age, mileage, brand reputation, and market trends.",
                        "services.service2.title": "Fuel Efficiency Analysis",
                        "services.service2.description": "We examine your vehicle's fuel performance, overall condition, and key features to give a realistic efficiency rating.",
                        "services.service3.title": "Information Protection",
                        "services.service3.description": "We securely access verified international vehicle records and liaise with relevant authorities, keeping your data safe.",
                        "services.service4.title": "Damages & Accident History",
                        "services.service4.description": "Detailed reports on collisions, uncommon accident types, and their causes help you understand the true condition.",
                        "services.service5.title": "Vehicle Specifications",
                        "services.service5.description": "From engine performance to safety features, our comprehensive specs give you complete knowledge of the vehicle.",
                        "services.service6.title": "Ownership & Title Verification",
                        "services.service6.description": "We provide verified information about current ownership, title checks, and lien status giving you confidence.",
                        
                        // Process section
                        "process.title": "Get Your Report in 3 Easy Steps",
                        "process.step1.title": "Enter Your Details",
                        "process.step1.description": "Provide your email and VIN or HIN. Our system securely verifies your vehicle or boat records worldwide.",
                        "process.step2.title": "Select Package & Payment",
                        "process.step2.description": "Choose the plan that suits your needs. Pay securely via credit/debit card or crypto with automatic currency conversion.",
                        "process.step3.title": "Receive Your Verified Report",
                        "process.step3.description": "Get your trusted, detailed vehicle or boat history report delivered directly to your email within the guaranteed deadline.",
                        
                        // Pricing section
                        "pricing.title": "Pricing Plans",
                        "pricing.vehicle_reports": "Vehicle Reports",
                        "pricing.boat_reports": "Boat Reports",
                        "pricing.best_deal": "Best Deal",
                        "pricing.most_popular": "Most Popular",
                        "pricing.buy_now": "Buy Now",
                        "pricing.vehicle.plan1.name": "Basic",
                        "pricing.vehicle.plan1.feature1": "2 Vehicle Reports",
                        "pricing.vehicle.plan1.feature2": "Title Verification",
                        "pricing.vehicle.plan1.feature3": "Safety Recall Status",
                        "pricing.vehicle.plan1.feature4": "Vehicle Specifications",
                        "pricing.vehicle.plan1.feature5": "Accident Information",
                        "pricing.vehicle.plan1.feature6": "Never Expires",
                        "pricing.vehicle.plan2.name": "Standard",
                        "pricing.vehicle.plan2.feature1": "4 Vehicle Reports",
                        "pricing.vehicle.plan2.feature2": "Title Verification",
                        "pricing.vehicle.plan2.feature3": "Safety Recall Status",
                        "pricing.vehicle.plan2.feature4": "Vehicle Specifications",
                        "pricing.vehicle.plan2.feature5": "Accident Information",
                        "pricing.vehicle.plan2.feature6": "Never Expires",
                        "pricing.vehicle.plan3.name": "Premium",
                        "pricing.vehicle.plan3.feature1": "7 Vehicle Reports",
                        "pricing.vehicle.plan3.feature2": "Title Verification",
                        "pricing.vehicle.plan3.feature3": "Safety Recall Status",
                        "pricing.vehicle.plan3.feature4": "Vehicle Specifications",
                        "pricing.vehicle.plan3.feature5": "Accident Information",
                        "pricing.vehicle.plan3.feature6": "Never Expires",
                        "pricing.vehicle.plan4.name": "Platinum",
                        "pricing.vehicle.plan4.feature1": "10 Vehicle Reports",
                        "pricing.vehicle.plan4.feature2": "Title Verification",
                        "pricing.vehicle.plan4.feature3": "Safety Recall Status",
                        "pricing.vehicle.plan4.feature4": "Vehicle Specifications",
                        "pricing.vehicle.plan4.feature5": "Accident Information",
                        "pricing.vehicle.plan4.feature6": "Never Expires",
                        "pricing.boat.plan1.name": "Basic",
                        "pricing.boat.plan1.feature1": "1 Boat Report",
                        "pricing.boat.plan1.feature2": "Registration & HIN Verification",
                        "pricing.boat.plan1.feature3": "Safety Recall Status",
                        "pricing.boat.plan1.feature4": "Boat Specifications",
                        "pricing.boat.plan1.feature5": "Accident Information",
                        "pricing.boat.plan1.feature6": "Never Expires",
                        "pricing.boat.plan2.name": "Standard",
                        "pricing.boat.plan2.feature1": "3 Boat Reports",
                        "pricing.boat.plan2.feature2": "Registration & HIN Verification",
                        "pricing.boat.plan2.feature3": "Safety Recall Status",
                        "pricing.boat.plan2.feature4": "Boat Specifications",
                        "pricing.boat.plan2.feature5": "Accident Information",
                        "pricing.boat.plan2.feature6": "Never Expires",
                        "pricing.boat.plan3.name": "Premium",
                        "pricing.boat.plan3.feature1": "5 Boat Reports",
                        "pricing.boat.plan3.feature2": "Registration & HIN Verification",
                        "pricing.boat.plan3.feature3": "Safety Recall Status",
                        "pricing.boat.plan3.feature4": "Boat Specifications",
                        "pricing.boat.plan3.feature5": "Accident Information",
                        "pricing.boat.plan3.feature6": "Never Expires",
                        "pricing.boat.plan4.name": "Platinum",
                        "pricing.boat.plan4.feature1": "7 Boat Reports",
                        "pricing.boat.plan4.feature2": "Registration & HIN Verification",
                        "pricing.boat.plan4.feature3": "Safety Recall Status",
                        "pricing.boat.plan4.feature4": "Boat Specifications",
                        "pricing.boat.plan4.feature5": "Accident Information",
                        "pricing.boat.plan4.feature6": "Never Expires",
                        
                        // Team section
                        "team.title": "Our Team",
                        "team.role1": "Operations Manager",
                        "team.description1": "Manages workflows and partner integrations.",
                        "team.role2": "Customer Success Lead",
                        "team.description2": "Responds to customers and resolves issues.",
                        "team.role3": "Data Verification Expert",
                        "team.description3": "Confirms registry and history data.",
                        "team.role4": "QA & Compliance Officer",
                        "team.description4": "Ensures report standards and compliance.",
                        
                        // Testimonials
                        "testimonials.title": "Trusted by Customers Worldwide",
                        
                        // FAQ section
                        "faq.title": "Frequently Asked Questions",
                        "faq.question1": "What is a Global Ride Report?",
                        "faq.answer1": "A Global Ride Report is a detailed document providing verified information about a vehicle, trailer, or boat's history. Reports may include market value estimates, specifications, safety recall status, accident history, and registration checks.",
                        "faq.question2": "Who can use Global Ride Report?",
                        "faq.answer2": "Our service is designed for both buyers and owners worldwide. Buyers gain transparency before purchase, while sellers build trust by providing verified history. We provide reports globally for cars, trucks, motorcycles, trailers, and boats.",
                        "faq.question3": "What is a VIN or HIN?",
                        "faq.answer3": "VIN (Vehicle Identification Number) is a unique 17-character code identifying your vehicle. HIN (Hull Identification Number) is a unique code identifying your boat. These numbers reveal manufacturer details, specifications, safety recalls, and more.",
                        "faq.question4": "Where can I find my VIN or HIN?",
                        "faq.answer4": "Vehicles & Trailers: Driver-side dashboard (through windshield), driver-side door pillar, engine firewall/under hood, registration, title, or insurance papers. Boats: Starboard or port side hull, transom or registration plate, boat documentation/title.",
                        "faq.question5": "Are there any discounts?",
                        "faq.answer5": "Yes, we currently offer 10% discount on all reports when payment is made using cryptocurrency. This provides a secure, fast, and cost-effective way to purchase your report.",
                        "faq.question6": "Where do you provide services?",
                        "faq.answer6": "Global Ride Report offers worldwide coverage for vehicles, trailers, and boats in over 190+ countries, including USA, UK, EU, UAE, Canada, Australia, and more. Verified information is sourced from official registries, authorities, and trusted databases.",
                        
                        // Blog section
                        "blog.title": "Latest from Our Blog",
                        "blog.meta": "5 min read",
                        "blog.read_more": "Read More",
                        "blog.post1.title": "How to Get a Salvage Title Cleared Legally",
                        "blog.post1.description": "A salvage title doesn't have to block your path. Learn how to clear it safely for vehicles worldwide.",
                        "blog.post2.title": "How to Spot Odometer Rollback with a VIN Check",
                        "blog.post2.description": "Mileage should climb, never dip. Detect odometer rollbacks using VIN checks and vehicle inspection tips.",
                        "blog.post3.title": "Pre-Purchase Car Inspection Explained",
                        "blog.post3.description": "Avoid surprises by performing a thorough inspection before buying any used vehicle.",
                        
                        // Contact section
                        "contact.title": "Contact Us",
                        "contact.name": "Name",
                        "contact.name_placeholder": "Your full name",
                        "contact.email": "Email",
                        "contact.email_placeholder": "your.email@example.com",
                        "contact.message": "Message",
                        "contact.message_placeholder": "How can we help you?",
                        "contact.send_message": "Send Message",
                        "contact.address_title": "Address",
                        "contact.email_title": "Email",
                        "contact.phone_title": "Phone",
                        
                        // Footer
                        "footer.company": "Global Ride Report",
                        "footer.description": "Your trusted source for verified vehicle and boat history reports worldwide.",
                        "footer.quick_links": "Quick Links",
                        "footer.legal": "Legal",
                        "footer.terms": "Terms & Conditions",
                        "footer.privacy": "Privacy Policy",
                        "footer.disclaimer": "Disclaimer",
                        "footer.refund": "Refund Policy",
                        "footer.contact": "Contact Info",
                        "footer.copyright": "© 2025 Global Ride Report. All Rights Reserved."
                    },
                    es: {
                        // Navigation
                        "nav.home": "Inicio",
                        "nav.boat_reports": "Informes de Embarcaciones",
                        "nav.services": "Servicios",
                        "nav.pricing": "Precios",
                        "nav.about": "Acerca de",
                        "nav.blog": "Blog",
                        "nav.contact": "Contacto",
                        
                        // Language selector
                        "lang.english": "Inglés",
                        "lang.spanish": "Español",
                        "lang.french": "Francés",
                        "lang.chinese": "Chino",
                        
                        // Hero section
                        "hero.title": "Obtenga un Informe Verificado del Historial del Vehículo Antes de Comprar o Vender",
                        "hero.subtitle": "Ya sea que esté comprando o vendiendo, verifique los detalles del VIN o de la placa de fuentes globales confiables para su tranquilidad.",
                        
                        // Form
                        "form.email": "Ingrese su dirección de correo electrónico",
                        "form.email_placeholder": "su.correo@ejemplo.com",
                        "form.vin": "Ingrese VIN / Número de Placa",
                        "form.vin_placeholder": "ej. 1HGCM82633A123456",
                        "form.get_report": "Obtener Informe",
                        
                        // About section
                        "about.title": "Acerca de Nosotros",
                        "about.text1": "Bienvenido a Global Ride Report, su fuente confiable de informes verificados del historial de vehículos y embarcaciones en todo el mundo.",
                        "about.text2": "Ayudamos a compradores, vendedores y propietarios a tomar decisiones seguras proporcionando informes precisos, transparentes y respaldados por datos de fuentes internacionales verificadas.",
                        "about.text3": "En el mercado actual de rápido movimiento, la transparencia lo es todo. Ya sea que esté comprando o vendiendo un automóvil, motocicleta, camión o embarcación, nuestra misión es brindarle la claridad que merece.",
                        "about.stat1": "Años de Experiencia Confiable",
                        "about.stat2": "Clientes Verificados Atendidos",
                        "about.stat3": "Países Soportados",
                        "about.stat4": "Tasa de Satisfacción del Cliente",
                        
                        // Services section
                        "services.title": "Nuestros Servicios",
                        "services.service1.title": "Evaluación del Valor de Mercado",
                        "services.service1.description": "Evaluamos el valor de mercado de su vehículo considerando oferta y demanda, condición, edad, kilometraje, reputación de la marca y tendencias del mercado.",
                        "services.service2.title": "Análisis de Eficiencia de Combustible",
                        "services.service2.description": "Examinamos el rendimiento de combustible, la condición general y las características clave de su vehículo para dar una calificación de eficiencia realista.",
                        "services.service3.title": "Protección de Información",
                        "services.service3.description": "Accedemos de forma segura a registros de vehículos internacionales verificados y nos comunicamos con las autoridades relevantes, manteniendo sus datos seguros.",
                        "services.service4.title": "Daños e Historial de Accidentes",
                        "services.service4.description": "Informes detallados sobre colisiones, tipos de accidentes poco comunes y sus causas le ayudan a comprender la condición real.",
                        "services.service5.title": "Especificaciones del Vehículo",
                        "services.service5.description": "Desde el rendimiento del motor hasta las características de seguridad, nuestras especificaciones completas le brindan conocimiento completo del vehículo.",
                        "services.service6.title": "Verificación de Propiedad y Título",
                        "services.service6.description": "Proporcionamos información verificada sobre la propiedad actual, verificaciones de título y estado de gravamen, brindándole confianza.",
                        
                        // Process section
                        "process.title": "Obtenga Su Informe en 3 Sencillos Pasos",
                        "process.step1.title": "Ingrese Sus Datos",
                        "process.step1.description": "Proporcione su correo electrónico y VIN o HIN. Nuestro sistema verifica de forma segura los registros de su vehículo o embarcación en todo el mundo.",
                        "process.step2.title": "Seleccione Paquete y Pago",
                        "process.step2.description": "Elija el plan que se adapte a sus necesidades. Pague de forma segura mediante tarjeta de crédito/débito o criptomonedas con conversión automática de moneda.",
                        "process.step3.title": "Reciba Su Informe Verificado",
                        "process.step3.description": "Obtenga su informe confiable y detallado del historial del vehículo o embarcación entregado directamente a su correo electrónico dentro del plazo garantizado.",
                        
                        // Pricing section
                        "pricing.title": "Planes de Precios",
                        "pricing.vehicle_reports": "Informes de Vehículos",
                        "pricing.boat_reports": "Informes de Embarcaciones",
                        "pricing.best_deal": "Mejor Oferta",
                        "pricing.most_popular": "Más Popular",
                        "pricing.buy_now": "Comprar Ahora",
                        "pricing.vehicle.plan1.name": "Básico",
                        "pricing.vehicle.plan1.feature1": "2 Informes de Vehículos",
                        "pricing.vehicle.plan1.feature2": "Verificación de Título",
                        "pricing.vehicle.plan1.feature3": "Estado de Retiro por Seguridad",
                        "pricing.vehicle.plan1.feature4": "Especificaciones del Vehículo",
                        "pricing.vehicle.plan1.feature5": "Información de Accidentes",
                        "pricing.vehicle.plan1.feature6": "Nunca Caduca",
                        "pricing.vehicle.plan2.name": "Estándar",
                        "pricing.vehicle.plan2.feature1": "4 Informes de Vehículos",
                        "pricing.vehicle.plan2.feature2": "Verificación de Título",
                        "pricing.vehicle.plan2.feature3": "Estado de Retiro por Seguridad",
                        "pricing.vehicle.plan2.feature4": "Especificaciones del Vehículo",
                        "pricing.vehicle.plan2.feature5": "Información de Accidentes",
                        "pricing.vehicle.plan2.feature6": "Nunca Caduca",
                        "pricing.vehicle.plan3.name": "Premium",
                        "pricing.vehicle.plan3.feature1": "7 Informes de Vehículos",
                        "pricing.vehicle.plan3.feature2": "Verificación de Título",
                        "pricing.vehicle.plan3.feature3": "Estado de Retiro por Seguridad",
                        "pricing.vehicle.plan3.feature4": "Especificaciones del Vehículo",
                        "pricing.vehicle.plan3.feature5": "Información de Accidentes",
                        "pricing.vehicle.plan3.feature6": "Nunca Caduca",
                        "pricing.vehicle.plan4.name": "Platino",
                        "pricing.vehicle.plan4.feature1": "10 Informes de Vehículos",
                        "pricing.vehicle.plan4.feature2": "Verificación de Título",
                        "pricing.vehicle.plan4.feature3": "Estado de Retiro por Seguridad",
                        "pricing.vehicle.plan4.feature4": "Especificaciones del Vehículo",
                        "pricing.vehicle.plan4.feature5": "Información de Accidentes",
                        "pricing.vehicle.plan4.feature6": "Nunca Caduca",
                        "pricing.boat.plan1.name": "Básico",
                        "pricing.boat.plan1.feature1": "1 Informe de Embarcación",
                        "pricing.boat.plan1.feature2": "Verificación de Registro y HIN",
                        "pricing.boat.plan1.feature3": "Estado de Retiro por Seguridad",
                        "pricing.boat.plan1.feature4": "Especificaciones de la Embarcación",
                        "pricing.boat.plan1.feature5": "Información de Accidentes",
                        "pricing.boat.plan1.feature6": "Nunca Caduca",
                        "pricing.boat.plan2.name": "Estándar",
                        "pricing.boat.plan2.feature1": "3 Informes de Embarcación",
                        "pricing.boat.plan2.feature2": "Verificación de Registro y HIN",
                        "pricing.boat.plan2.feature3": "Estado de Retiro por Seguridad",
                        "pricing.boat.plan2.feature4": "Especificaciones de la Embarcación",
                        "pricing.boat.plan2.feature5": "Información de Accidentes",
                        "pricing.boat.plan2.feature6": "Nunca Caduca",
                        "pricing.boat.plan3.name": "Premium",
                        "pricing.boat.plan3.feature1": "5 Informes de Embarcación",
                        "pricing.boat.plan3.feature2": "Verificación de Registro y HIN",
                        "pricing.boat.plan3.feature3": "Estado de Retiro por Seguridad",
                        "pricing.boat.plan3.feature4": "Especificaciones de la Embarcación",
                        "pricing.boat.plan3.feature5": "Información de Accidentes",
                        "pricing.boat.plan3.feature6": "Nunca Caduca",
                        "pricing.boat.plan4.name": "Platino",
                        "pricing.boat.plan4.feature1": "7 Informes de Embarcación",
                        "pricing.boat.plan4.feature2": "Verificación de Registro y HIN",
                        "pricing.boat.plan4.feature3": "Estado de Retiro por Seguridad",
                        "pricing.boat.plan4.feature4": "Especificaciones de la Embarcación",
                        "pricing.boat.plan4.feature5": "Información de Accidentes",
                        "pricing.boat.plan4.feature6": "Nunca Caduca",
                        
                        // Team section
                        "team.title": "Nuestro Equipo",
                        "team.role1": "Gerente de Operaciones",
                        "team.description1": "Gestiona flujos de trabajo e integraciones de socios.",
                        "team.role2": "Líder de Éxito del Cliente",
                        "team.description2": "Responde a los clientes y resuelve problemas.",
                        "team.role3": "Experto en Verificación de Datos",
                        "team.description3": "Confirma datos del registro e historial.",
                        "team.role4": "Oficial de Control de Calidad y Cumplimiento",
                        "team.description4": "Garantiza estándares de informes y cumplimiento.",
                        
                        // Testimonials
                        "testimonials.title": "Confiado por Clientes en Todo el Mundo",
                        
                        // FAQ section
                        "faq.title": "Preguntas Frecuentes",
                        "faq.question1": "¿Qué es un Global Ride Report?",
                        "faq.answer1": "Un Global Ride Report es un documento detallado que proporciona información verificada sobre el historial de un vehículo, remolque o embarcación. Los informes pueden incluir estimaciones de valor de mercado, especificaciones, estado de retiro por seguridad, historial de accidentes y verificaciones de registro.",
                        "faq.question2": "¿Quién puede usar Global Ride Report?",
                        "faq.answer2": "Nuestro servicio está diseñado tanto para compradores como para propietarios en todo el mundo. Los compradores obtienen transparencia antes de la compra, mientras que los vendedores generan confianza al proporcionar historial verificado. Proporcionamos informes a nivel global para automóviles, camiones, motocicletas, remolques y embarcaciones.",
                        "faq.question3": "¿Qué es un VIN o HIN?",
                        "faq.answer3": "VIN (Número de Identificación del Vehículo) es un código único de 17 caracteres que identifica su vehículo. HIN (Número de Identificación del Casco) es un código único que identifica su embarcación. Estos números revelan detalles del fabricante, especificaciones, retiros por seguridad y más.",
                        "faq.question4": "¿Dónde puedo encontrar mi VIN o HIN?",
                        "faq.answer4": "Vehículos y Remolques: Salpicadero del lado del conductor (a través del parabrisas), pilar de la puerta del lado del conductor, cortafuegos del motor/ debajo del capó, registro, título o documentos de seguro. Embarcaciones: Casco del lado de estribor o babor, espejo de popa o placa de registro, documentación/título de la embarcación.",
                        "faq.question5": "¿Hay algún descuento?",
                        "faq.answer5": "Sí, actualmente ofrecemos un 10% de descuento en todos los informes cuando el pago se realiza utilizando criptomonedas. Esto proporciona una forma segura, rápida y rentable de comprar su informe.",
                        "faq.question6": "¿Dónde ofrecen servicios?",
                        "faq.answer6": "Global Ride Report ofrece cobertura mundial para vehículos, remolques y embarcaciones en más de 190 países, incluidos EE. UU., Reino Unido, UE, EAU, Canadá, Australia y más. La información verificada se obtiene de registros oficiales, autoridades y bases de datos confiables.",
                        
                        // Blog section
                        "blog.title": "Últimas Publicaciones de Nuestro Blog",
                        "blog.meta": "5 min de lectura",
                        "blog.read_more": "Leer Más",
                        "blog.post1.title": "Cómo Limpiar Legalmente un Título de Salvamento",
                        "blog.post1.description": "Un título de salvamento no tiene que bloquear su camino. Aprenda a limpiarlo de forma segura para vehículos en todo el mundo.",
                        "blog.post2.title": "Cómo Detectar Retroceso del Odómetro con una Verificación de VIN",
                        "blog.post2.description": "El kilometraje debe aumentar, nunca disminuir. Detecte retrocesos del odómetro utilizando verificaciones de VIN y consejos de inspección de vehículos.",
                        "blog.post3.title": "Explicación de la Inspección Previa a la Compra de un Automóvil",
                        "blog.post3.description": "Evite sorpresas realizando una inspección exhaustiva antes de comprar cualquier vehículo usado.",
                        
                        // Contact section
                        "contact.title": "Contáctenos",
                        "contact.name": "Nombre",
                        "contact.name_placeholder": "Su nombre completo",
                        "contact.email": "Correo Electrónico",
                        "contact.email_placeholder": "su.correo@ejemplo.com",
                        "contact.message": "Mensaje",
                        "contact.message_placeholder": "¿Cómo podemos ayudarle?",
                        "contact.send_message": "Enviar Mensaje",
                        "contact.address_title": "Dirección",
                        "contact.email_title": "Correo Electrónico",
                        "contact.phone_title": "Teléfono",
                        
                        // Footer
                        "footer.company": "Global Ride Report",
                        "footer.description": "Su fuente confiable de informes verificados del historial de vehículos y embarcaciones en todo el mundo.",
                        "footer.quick_links": "Enlaces Rápidos",
                        "footer.legal": "Legal",
                        "footer.terms": "Términos y Condiciones",
                        "footer.privacy": "Política de Privacidad",
                        "footer.disclaimer": "Descargo de Responsabilidad",
                        "footer.refund": "Política de Reembolso",
                        "footer.contact": "Información de Contacto",
                        "footer.copyright": "© 2025 Global Ride Report. Todos los derechos reservados."
                    },
                    fr: {
                        // Navigation
                        "nav.home": "Accueil",
                        "nav.boat_reports": "Rapports Bateaux",
                        "nav.services": "Services",
                        "nav.pricing": "Tarifs",
                        "nav.about": "À Propos",
                        "nav.blog": "Blog",
                        "nav.contact": "Contact",
                        
                        // Language selector
                        "lang.english": "Anglais",
                        "lang.spanish": "Espagnol",
                        "lang.french": "Français",
                        "lang.chinese": "Chinois",
                        
                        // Hero section
                        "hero.title": "Obtenez un Rapport d'Historique Véhicule Vérifié Avant d'Acheter ou de Vendre",
                        "hero.subtitle": "Que vous achetiez ou vendiez, vérifiez les détails du VIN ou de la plaque d'immatriculation auprès de sources mondiales fiables pour une tranquillité d'esprit.",
                        
                        // Form
                        "form.email": "Entrez votre adresse email",
                        "form.email_placeholder": "votre.email@exemple.com",
                        "form.vin": "Entrez le VIN / Numéro de Plaque",
                        "form.vin_placeholder": "ex. 1HGCM82633A123456",
                        "form.get_report": "Obtenir le Rapport",
                        
                        // About section
                        "about.title": "À Propos de Nous",
                        "about.text1": "Bienvenue chez Global Ride Report, votre source fiable de rapports d'historique vérifiés de véhicules et de bateaux dans le monde entier.",
                        "about.text2": "Nous aidons les acheteurs, les vendeurs et les propriétaires à prendre des décisions en toute confiance en fournissant des rapports précis, transparents et étayés par des données provenant de sources internationales vérifiées.",
                        "about.text3": "Dans le marché actuel en évolution rapide, la transparence est essentielle. Que vous achetiez ou vendiez une voiture, une moto, un camion ou un bateau, notre mission est de vous donner la clarté que vous méritez.",
                        "about.stat1": "Années d'Expérience Fiable",
                        "about.stat2": "Clients Vérifiés Servis",
                        "about.stat3": "Pays Supportés",
                        "about.stat4": "Taux de Satisfaction Client",
                        
                        // Services section
                        "services.title": "Nos Services",
                        "services.service1.title": "Évaluation de la Valeur Marchande",
                        "services.service1.description": "Nous évaluons la valeur marchande de votre véhicule en considérant l'offre et la demande, l'état, l'âge, le kilométrage, la réputation de la marque et les tendances du marché.",
                        "services.service2.title": "Analyse de l'Efficacité Énergétique",
                        "services.service2.description": "Nous examinons les performances énergétiques, l'état général et les caractéristiques clés de votre véhicule pour donner une note d'efficacité réaliste.",
                        "services.service3.title": "Protection des Informations",
                        "services.service3.description": "Nous accédons en toute sécurité aux registres de véhicules internationaux vérifiés et collaborons avec les autorités compétentes, en gardant vos données en sécurité.",
                        "services.service4.title": "Dommages et Historique des Accidents",
                        "services.service4.description": "Des rapports détaillés sur les collisions, les types d'accidents inhabituels et leurs causes vous aident à comprendre l'état réel.",
                        "services.service5.title": "Spécifications du Véhicule",
                        "services.service5.description": "Des performances du moteur aux caractéristiques de sécurité, nos spécifications complètes vous donnent une connaissance complète du véhicule.",
                        "services.service6.title": "Vérification de la Propriété et du Titre",
                        "services.service6.description": "Nous fournissons des informations vérifiées sur la propriété actuelle, les vérifications de titre et le statut de privilège, vous donnant ainsi confiance.",
                        
                        // Process section
                        "process.title": "Obtenez Votre Rapport en 3 Étapes Simples",
                        "process.step1.title": "Entrez Vos Détails",
                        "process.step1.description": "Fournissez votre email et VIN ou HIN. Notre système vérifie en toute sécurité les registres de votre véhicule ou bateau dans le monde entier.",
                        "process.step2.title": "Sélectionnez le Forfait et Paiement",
                        "process.step2.description": "Choisissez le plan qui correspond à vos besoins. Payez en toute sécurité par carte de crédit/débit ou crypto avec conversion automatique de devise.",
                        "process.step3.title": "Recevez Votre Rapport Vérifié",
                        "process.step3.description": "Recevez votre rapport d'historique de véhicule ou bateau détaillé et fiable directement dans votre email dans le délai garanti.",
                        
                        // Pricing section
                        "pricing.title": "Plans Tarifaires",
                        "pricing.vehicle_reports": "Rapports Véhicules",
                        "pricing.boat_reports": "Rapports Bateaux",
                        "pricing.best_deal": "Meilleure Offre",
                        "pricing.most_popular": "Plus Populaire",
                        "pricing.buy_now": "Acheter Maintenant",
                        "pricing.vehicle.plan1.name": "Basique",
                        "pricing.vehicle.plan1.feature1": "2 Rapports Véhicules",
                        "pricing.vehicle.plan1.feature2": "Vérification de Titre",
                        "pricing.vehicle.plan1.feature3": "Statut des Rappels de Sécurité",
                        "pricing.vehicle.plan1.feature4": "Spécifications du Véhicule",
                        "pricing.vehicle.plan1.feature5": "Informations sur les Accidents",
                        "pricing.vehicle.plan1.feature6": "N'Expire Jamais",
                        "pricing.vehicle.plan2.name": "Standard",
                        "pricing.vehicle.plan2.feature1": "4 Rapports Véhicules",
                        "pricing.vehicle.plan2.feature2": "Vérification de Titre",
                        "pricing.vehicle.plan2.feature3": "Statut des Rappels de Sécurité",
                        "pricing.vehicle.plan2.feature4": "Spécifications du Véhicule",
                        "pricing.vehicle.plan2.feature5": "Informations sur les Accidents",
                        "pricing.vehicle.plan2.feature6": "N'Expire Jamais",
                        "pricing.vehicle.plan3.name": "Premium",
                        "pricing.vehicle.plan3.feature1": "7 Rapports Véhicules",
                        "pricing.vehicle.plan3.feature2": "Vérification de Titre",
                        "pricing.vehicle.plan3.feature3": "Statut des Rappels de Sécurité",
                        "pricing.vehicle.plan3.feature4": "Spécifications du Véhicule",
                        "pricing.vehicle.plan3.feature5": "Informations sur les Accidents",
                        "pricing.vehicle.plan3.feature6": "N'Expire Jamais",
                        "pricing.vehicle.plan4.name": "Platine",
                        "pricing.vehicle.plan4.feature1": "10 Rapports Véhicules",
                        "pricing.vehicle.plan4.feature2": "Vérification de Titre",
                        "pricing.vehicle.plan4.feature3": "Statut des Rappels de Sécurité",
                        "pricing.vehicle.plan4.feature4": "Spécifications du Véhicule",
                        "pricing.vehicle.plan4.feature5": "Informations sur les Accidents",
                        "pricing.vehicle.plan4.feature6": "N'Expire Jamais",
                        "pricing.boat.plan1.name": "Basique",
                        "pricing.boat.plan1.feature1": "1 Rapport Bateau",
                        "pricing.boat.plan1.feature2": "Vérification d'Enregistrement et HIN",
                        "pricing.boat.plan1.feature3": "Statut des Rappels de Sécurité",
                        "pricing.boat.plan1.feature4": "Spécifications du Bateau",
                        "pricing.boat.plan1.feature5": "Informations sur les Accidents",
                        "pricing.boat.plan1.feature6": "N'Expire Jamais",
                        "pricing.boat.plan2.name": "Standard",
                        "pricing.boat.plan2.feature1": "3 Rapports Bateau",
                        "pricing.boat.plan2.feature2": "Vérification d'Enregistrement et HIN",
                        "pricing.boat.plan2.feature3": "Statut des Rappels de Sécurité",
                        "pricing.boat.plan2.feature4": "Spécifications du Bateau",
                        "pricing.boat.plan2.feature5": "Informations sur les Accidents",
                        "pricing.boat.plan2.feature6": "N'Expire Jamais",
                        "pricing.boat.plan3.name": "Premium",
                        "pricing.boat.plan3.feature1": "5 Rapports Bateau",
                        "pricing.boat.plan3.feature2": "Vérification d'Enregistrement et HIN",
                        "pricing.boat.plan3.feature3": "Statut des Rappels de Sécurité",
                        "pricing.boat.plan3.feature4": "Spécifications du Bateau",
                        "pricing.boat.plan3.feature5": "Informations sur les Accidents",
                        "pricing.boat.plan3.feature6": "N'Expire Jamais",
                        "pricing.boat.plan4.name": "Platine",
                        "pricing.boat.plan4.feature1": "7 Rapports Bateau",
                        "pricing.boat.plan4.feature2": "Vérification d'Enregistrement et HIN",
                        "pricing.boat.plan4.feature3": "Statut des Rappels de Sécurité",
                        "pricing.boat.plan4.feature4": "Spécifications du Bateau",
                        "pricing.boat.plan4.feature5": "Informations sur les Accidents",
                        "pricing.boat.plan4.feature6": "N'Expire Jamais",
                        
                        // Team section
                        "team.title": "Notre Équipe",
                        "team.role1": "Responsable des Opérations",
                        "team.description1": "Gère les flux de travail et les intégrations de partenaires.",
                        "team.role2": "Responsable de la Réussite Client",
                        "team.description2": "Répond aux clients et résout les problèmes.",
                        "team.role3": "Expert en Vérification des Données",
                        "team.description3": "Confirme les données du registre et de l'historique.",
                        "team.role4": "Responsable QA et Conformité",
                        "team.description4": "Garantit les normes de rapport et la conformité.",
                        
                        // Testimonials
                        "testimonials.title": "Fiable par les Clients du Monde Entier",
                        
                        // FAQ section
                        "faq.title": "Questions Fréquemment Posées",
                        "faq.question1": "Qu'est-ce qu'un Global Ride Report ?",
                        "faq.answer1": "Un Global Ride Report est un document détaillé fournissant des informations vérifiées sur l'historique d'un véhicule, remorque ou bateau. Les rapports peuvent inclure des estimations de valeur marchande, des spécifications, le statut des rappels de sécurité, l'historique des accidents et les vérifications d'enregistrement.",
                        "faq.question2": "Qui peut utiliser Global Ride Report ?",
                        "faq.answer2": "Notre service est conçu pour les acheteurs et les propriétaires du monde entier. Les acheteurs obtiennent de la transparence avant l'achat, tandis que les vendeurs renforcent la confiance en fournissant un historique vérifié. Nous fournissons des rapports à l'échelle mondiale pour les voitures, camions, motos, remorques et bateaux.",
                        "faq.question3": "Qu'est-ce qu'un VIN ou HIN ?",
                        "faq.answer3": "VIN (Numéro d'Identification du Véhicule) est un code unique de 17 caractères identifiant votre véhicule. HIN (Numéro d'Identification de la Coque) est un code unique identifiant votre bateau. Ces numéros révèlent les détails du fabricant, les spécifications, les rappels de sécurité et plus encore.",
                        "faq.question4": "Où puis-je trouver mon VIN ou HIN ?",
                        "faq.answer4": "Véhicules et Remorques : Tableau de bord côté conducteur (à travers le pare-brise), montant de porte côté conducteur, pare-feu du moteur/sous le capot, enregistrement, titre ou papiers d'assurance. Bateaux : Coque tribord ou bâbord, tableau arrière ou plaque d'immatriculation, documentation/titre du bateau.",
                        "faq.question5": "Y a-t-il des réductions ?",
                        "faq.answer5": "Oui, nous offrons actuellement 10% de réduction sur tous les rapports lorsque le paiement est effectué en utilisant des cryptomonnaies. Cela fournit un moyen sécurisé, rapide et rentable d'acheter votre rapport.",
                        "faq.question6": "Où fournissez-vous des services ?",
                        "faq.answer6": "Global Ride Report offre une couverture mondiale pour les véhicules, remorques et bateaux dans plus de 190 pays, y compris les États-Unis, le Royaume-Uni, l'UE, les Émirats Arabes Unis, le Canada, l'Australie et plus encore. Les informations vérifiées proviennent de registres officiels, d'autorités et de bases de données fiables.",
                        
                        // Blog section
                        "blog.title": "Dernières Publications de Notre Blog",
                        "blog.meta": "5 min de lecture",
                        "blog.read_more": "Lire Plus",
                        "blog.post1.title": "Comment Légaliser un Titre de Véhicule Accidenté",
                        "blog.post1.description": "Un titre de véhicule accidenté ne doit pas bloquer votre chemin. Apprenez à le légaliser en toute sécurité pour les véhicules du monde entier.",
                        "blog.post2.title": "Comment Détecter un Compteur Kilométrique Trafiqué avec une Vérification VIN",
                        "blog.post2.description": "Le kilométrage devrait augmenter, jamais diminuer. Détectez les compteurs kilométriques trafiqués en utilisant les vérifications VIN et les conseils d'inspection de véhicules.",
                        "blog.post3.title": "Explication de l'Inspection Pré-Achat d'une Voiture",
                        "blog.post3.description": "Évitez les surprises en effectuant une inspection approfondie avant d'acheter tout véhicule d'occasion.",
                        
                        // Contact section
                        "contact.title": "Contactez-Nous",
                        "contact.name": "Nom",
                        "contact.name_placeholder": "Votre nom complet",
                        "contact.email": "Email",
                        "contact.email_placeholder": "votre.email@exemple.com",
                        "contact.message": "Message",
                        "contact.message_placeholder": "Comment pouvons-nous vous aider ?",
                        "contact.send_message": "Envoyer le Message",
                        "contact.address_title": "Adresse",
                        "contact.email_title": "Email",
                        "contact.phone_title": "Téléphone",
                        
                        // Footer
                        "footer.company": "Global Ride Report",
                        "footer.description": "Votre source fiable de rapports d'historique vérifiés de véhicules et de bateaux dans le monde entier.",
                        "footer.quick_links": "Liens Rapides",
                        "footer.legal": "Légal",
                        "footer.terms": "Conditions Générales",
                        "footer.privacy": "Politique de Confidentialité",
                        "footer.disclaimer": "Avertissement",
                        "footer.refund": "Politique de Remboursement",
                        "footer.contact": "Informations de Contact",
                        "footer.copyright": "© 2025 Global Ride Report. Tous droits réservés."
                    },
                    zh: {
                        // Navigation
                        "nav.home": "首页",
                        "nav.boat_reports": "船只报告",
                        "nav.services": "服务",
                        "nav.pricing": "价格",
                        "nav.about": "关于我们",
                        "nav.blog": "博客",
                        "nav.contact": "联系我们",
                        
                        // Language selector
                        "lang.english": "英语",
                        "lang.spanish": "西班牙语",
                        "lang.french": "法语",
                        "lang.chinese": "中文",
                        
                        // Hero section
                        "hero.title": "在购买或出售前获取经过验证的车辆历史报告",
                        "hero.subtitle": "无论您是购买还是出售，都可以从可信赖的全球来源检查VIN或车牌详细信息，让您安心。",
                        
                        // Form
                        "form.email": "输入电子邮件地址",
                        "form.email_placeholder": "您的电子邮件@example.com",
                        "form.vin": "输入VIN/车牌号",
                        "form.vin_placeholder": "例如：1HGCM82633A123456",
                        "form.get_report": "获取报告",
                        
                        // About section
                        "about.title": "关于我们",
                        "about.text1": "欢迎来到Global Ride Report，您在全球范围内获取经过验证的车辆和船只历史报告的可信赖来源。",
                        "about.text2": "我们通过提供来自经过验证的国际来源的准确、透明和数据支持的报告，帮助买家、卖家和车主做出自信的决策。",
                        "about.text3": "在当今快速变化的市场中，透明度至关重要。无论您是购买还是出售汽车、摩托车、卡车或船只，我们的使命都是为您提供应有的清晰度。",
                        "about.stat1": "值得信赖的经验年数",
                        "about.stat2": "已验证客户服务数量",
                        "about.stat3": "支持的国家数量",
                        "about.stat4": "客户满意度",
                        
                        // Services section
                        "services.title": "我们的服务",
                        "services.service1.title": "市场价值评估",
                        "services.service1.description": "我们通过考虑供需、状况、年龄、里程、品牌声誉和市场趋势来评估您车辆的市场价值。",
                        "services.service2.title": "燃油效率分析",
                        "services.service2.description": "我们检查您车辆的燃油性能、整体状况和关键特征，以给出现实的效率评级。",
                        "services.service3.title": "信息保护",
                        "services.service3.description": "我们安全地访问经过验证的国际车辆记录，并与相关当局联系，确保您的数据安全。",
                        "services.service4.title": "损坏和事故历史",
                        "services.service4.description": "关于碰撞、不常见事故类型及其原因的详细报告帮助您了解真实状况。",
                        "services.service5.title": "车辆规格",
                        "services.service5.description": "从发动机性能到安全功能，我们全面的规格让您完全了解车辆。",
                        "services.service6.title": "所有权和所有权验证",
                        "services.service6.description": "我们提供关于当前所有权、所有权检查和留置权状态的验证信息，给您信心。",
                        
                        // Process section
                        "process.title": "3个简单步骤获取您的报告",
                        "process.step1.title": "输入您的详细信息",
                        "process.step1.description": "提供您的电子邮件和VIN或HIN。我们的系统安全地验证您在全球的车辆或船只记录。",
                        "process.step2.title": "选择套餐和付款",
                        "process.step2.description": "选择适合您需求的计划。通过信用卡/借记卡或加密货币安全支付，自动进行货币转换。",
                        "process.step3.title": "接收您的验证报告",
                        "process.step3.description": "在保证的期限内，将您可信赖的详细车辆或船只历史报告直接发送到您的电子邮件。",
                        
                        // Pricing section
                        "pricing.title": "价格计划",
                        "pricing.vehicle_reports": "车辆报告",
                        "pricing.boat_reports": "船只报告",
                        "pricing.best_deal": "最佳交易",
                        "pricing.most_popular": "最受欢迎",
                        "pricing.buy_now": "立即购买",
                        "pricing.vehicle.plan1.name": "基础版",
                        "pricing.vehicle.plan1.feature1": "2份车辆报告",
                        "pricing.vehicle.plan1.feature2": "所有权验证",
                        "pricing.vehicle.plan1.feature3": "安全召回状态",
                        "pricing.vehicle.plan1.feature4": "车辆规格",
                        "pricing.vehicle.plan1.feature5": "事故信息",
                        "pricing.vehicle.plan1.feature6": "永不过期",
                        "pricing.vehicle.plan2.name": "标准版",
                        "pricing.vehicle.plan2.feature1": "4份车辆报告",
                        "pricing.vehicle.plan2.feature2": "所有权验证",
                        "pricing.vehicle.plan2.feature3": "安全召回状态",
                        "pricing.vehicle.plan2.feature4": "车辆规格",
                        "pricing.vehicle.plan2.feature5": "事故信息",
                        "pricing.vehicle.plan2.feature6": "永不过期",
                        "pricing.vehicle.plan3.name": "高级版",
                        "pricing.vehicle.plan3.feature1": "7份车辆报告",
                        "pricing.vehicle.plan3.feature2": "所有权验证",
                        "pricing.vehicle.plan3.feature3": "安全召回状态",
                        "pricing.vehicle.plan3.feature4": "车辆规格",
                        "pricing.vehicle.plan3.feature5": "事故信息",
                        "pricing.vehicle.plan3.feature6": "永不过期",
                        "pricing.vehicle.plan4.name": "白金版",
                        "pricing.vehicle.plan4.feature1": "10份车辆报告",
                        "pricing.vehicle.plan4.feature2": "所有权验证",
                        "pricing.vehicle.plan4.feature3": "安全召回状态",
                        "pricing.vehicle.plan4.feature4": "车辆规格",
                        "pricing.vehicle.plan4.feature5": "事故信息",
                        "pricing.vehicle.plan4.feature6": "永不过期",
                        "pricing.boat.plan1.name": "基础版",
                        "pricing.boat.plan1.feature1": "1份船只报告",
                        "pricing.boat.plan1.feature2": "注册和HIN验证",
                        "pricing.boat.plan1.feature3": "安全召回状态",
                        "pricing.boat.plan1.feature4": "船只规格",
                        "pricing.boat.plan1.feature5": "事故信息",
                        "pricing.boat.plan1.feature6": "永不过期",
                        "pricing.boat.plan2.name": "标准版",
                        "pricing.boat.plan2.feature1": "3份船只报告",
                        "pricing.boat.plan2.feature2": "注册和HIN验证",
                        "pricing.boat.plan2.feature3": "安全召回状态",
                        "pricing.boat.plan2.feature4": "船只规格",
                        "pricing.boat.plan2.feature5": "事故信息",
                        "pricing.boat.plan2.feature6": "永不过期",
                        "pricing.boat.plan3.name": "高级版",
                        "pricing.boat.plan3.feature1": "5份船只报告",
                        "pricing.boat.plan3.feature2": "注册和HIN验证",
                        "pricing.boat.plan3.feature3": "安全召回状态",
                        "pricing.boat.plan3.feature4": "船只规格",
                        "pricing.boat.plan3.feature5": "事故信息",
                        "pricing.boat.plan3.feature6": "永不过期",
                        "pricing.boat.plan4.name": "白金版",
                        "pricing.boat.plan4.feature1": "7份船只报告",
                        "pricing.boat.plan4.feature2": "注册和HIN验证",
                        "pricing.boat.plan4.feature3": "安全召回状态",
                        "pricing.boat.plan4.feature4": "船只规格",
                        "pricing.boat.plan4.feature5": "事故信息",
                        "pricing.boat.plan4.feature6": "永不过期",
                        
                        // Team section
                        "team.title": "我们的团队",
                        "team.role1": "运营经理",
                        "team.description1": "管理工作流程和合作伙伴整合。",
                        "team.role2": "客户成功主管",
                        "team.description2": "响应客户并解决问题。",
                        "team.role3": "数据验证专家",
                        "team.description3": "确认注册和历史数据。",
                        "team.role4": "质量保证与合规官",
                        "team.description4": "确保报告标准和合规性。",
                        
                        // Testimonials
                        "testimonials.title": "受到全球客户的信赖",
                        
                        // FAQ section
                        "faq.title": "常见问题",
                        "faq.question1": "什么是Global Ride Report？",
                        "faq.answer1": "Global Ride Report是一份详细文件，提供关于车辆、拖车或船只历史的验证信息。报告可能包括市场价值估算、规格、安全召回状态、事故历史和注册检查。",
                        "faq.question2": "谁可以使用Global Ride Report？",
                        "faq.answer2": "我们的服务面向全球的买家和车主。买家在购买前获得透明度，而卖家通过提供验证历史建立信任。我们为汽车、卡车、摩托车、拖车和船只提供全球报告。",
                        "faq.question3": "什么是VIN或HIN？",
                        "faq.answer3": "VIN（车辆识别号）是识别您车辆的独特17位代码。HIN（船体识别号）是识别您船只的独特代码。这些数字揭示了制造商详细信息、规格、安全召回等。",
                        "faq.question4": "我在哪里可以找到我的VIN或HIN？",
                        "faq.answer4": "车辆和拖车：驾驶员侧仪表板（通过挡风玻璃）、驾驶员侧门柱、发动机防火墙/引擎盖下、注册、所有权或保险文件。船只：右舷或左舷船体、船尾或注册牌、船只文件/所有权。",
                        "faq.question5": "有任何折扣吗？",
                        "faq.answer5": "是的，我们目前在使用加密货币支付时对所有报告提供10%的折扣。这提供了一种安全、快速且经济高效的方式购买您的报告。",
                        "faq.question6": "您在哪些地方提供服务？",
                        "faq.answer6": "Global Ride Report为190多个国家的车辆、拖车和船只提供全球覆盖，包括美国、英国、欧盟、阿联酋、加拿大、澳大利亚等。验证信息来自官方注册机构、当局和可信赖的数据库。",
                        
                        // Blog section
                        "blog.title": "我们博客的最新文章",
                        "blog.meta": "5分钟阅读",
                        "blog.read_more": "阅读更多",
                        "blog.post1.title": "如何合法清除残值所有权",
                        "blog.post1.description": "残值所有权不必阻碍您的道路。了解如何为全球车辆安全清除它。",
                        "blog.post2.title": "如何通过VIN检查发现里程表回滚",
                        "blog.post2.description": "里程应该上升，永远不应下降。使用VIN检查和车辆检查提示检测里程表回滚。",
                        "blog.post3.title": "购车前检查说明",
                        "blog.post3.description": "在购买任何二手车之前进行彻底检查，避免意外。",
                        
                        // Contact section
                        "contact.title": "联系我们",
                        "contact.name": "姓名",
                        "contact.name_placeholder": "您的全名",
                        "contact.email": "电子邮件",
                        "contact.email_placeholder": "您的电子邮件@example.com",
                        "contact.message": "消息",
                        "contact.message_placeholder": "我们如何帮助您？",
                        "contact.send_message": "发送消息",
                        "contact.address_title": "地址",
                        "contact.email_title": "电子邮件",
                        "contact.phone_title": "电话",
                        
                        // Footer
                        "footer.company": "Global Ride Report",
                        "footer.description": "您在全球范围内获取经过验证的车辆和船只历史报告的可信赖来源。",
                        "footer.quick_links": "快速链接",
                        "footer.legal": "法律",
                        "footer.terms": "条款和条件",
                        "footer.privacy": "隐私政策",
                        "footer.disclaimer": "免责声明",
                        "footer.refund": "退款政策",
                        "footer.contact": "联系信息",
                        "footer.copyright": "© 2025 Global Ride Report。保留所有权利。"
                    }
                };
            }

            setupEventListeners() {
                document.getElementById('language-selector').addEventListener('change', (e) => {
                    this.applyLanguage(e.target.value);
                });

                document.getElementById('mobile-language-selector').addEventListener('change', (e) => {
                    this.applyLanguage(e.target.value);
                });
            }

            applyLanguage(lang) {
                this.currentLanguage = lang;
                localStorage.setItem('language', lang);
                
                // Update language selector
                document.getElementById('language-selector').value = lang;
                document.getElementById('mobile-language-selector').value = lang;
                
                // Update all translatable elements
                document.querySelectorAll('[data-translate]').forEach(element => {
                    const key = element.getAttribute('data-translate');
                    if (this.translations[lang] && this.translations[lang][key]) {
                        element.textContent = this.translations[lang][key];
                    }
                });
                
                // Update placeholder texts
                document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
                    const key = element.getAttribute('data-translate-placeholder');
                    if (this.translations[lang] && this.translations[lang][key]) {
                        element.placeholder = this.translations[lang][key];
                    }
                });
                
                // Update HTML lang attribute
                document.documentElement.lang = lang;
                
                // Refresh AOS after language change
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            }
        }

        const languageManager = new LanguageManager();

        // Particles.js Configuration
        document.addEventListener('DOMContentLoaded', function() {
            // Load particles.js dynamically
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
            script.onload = function() {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 80,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle",
                            stroke: {
                                width: 0,
                                color: "#000000"
                            }
                        },
                        opacity: {
                            value: 0.3,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 3,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 2,
                                size_min: 0.1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#ffffff",
                            opacity: 0.2,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: true,
                            straight: false,
                            out_mode: "out",
                            bounce: false,
                            attract: {
                                enable: false,
                                rotateX: 600,
                                rotateY: 1200
                            }
                        }
                    },
                    interactivity: {
                        detect_on: "canvas",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "grab"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            },
                            resize: true
                        },
                        modes: {
                            grab: {
                                distance: 140,
                                line_linked: {
                                    opacity: 0.4
                                }
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    retina_detect: true
                });
            };
            document.head.appendChild(script);
        });

        // Mobile Navigation Toggle
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const mobileNav = document.querySelector('.mobile-nav');
        const mobileNavOverlay = document.querySelector('.mobile-nav-overlay');
        const mobileNavClose = document.querySelector('.mobile-nav-close');

        function openMobileNav() {
            mobileNav.classList.add('active');
            mobileNavOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileNav() {
            mobileNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Event listeners
        mobileMenuToggle.addEventListener('click', openMobileNav);
        mobileNavClose.addEventListener('click', closeMobileNav);
        mobileNavOverlay.addEventListener('click', closeMobileNav);

        // Close mobile nav when clicking on a link
        document.querySelectorAll('.mobile-nav a').forEach(link => {
            link.addEventListener('click', closeMobileNav);
        });

        // Close mobile nav on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                closeMobileNav();
            }
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
            });
        });

        // Pricing Tabs
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Dark/Light Mode Toggle
        const themeToggle = document.getElementById('themeToggle');
        const mobileThemeToggle = document.getElementById('mobileThemeToggle');
        const body = document.body;

        // Check for saved theme preference or default to light
        const currentTheme = localStorage.getItem('theme') || 'light';
        body.setAttribute('data-theme', currentTheme);
        updateThemeIcon(currentTheme);

        // Toggle theme function
        function toggleTheme() {
            const currentTheme = body.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        }

        // Update theme icon based on current theme
        function updateThemeIcon(theme) {
            const icon = theme === 'light' ? 'fa-moon' : 'fa-sun';
            themeToggle.innerHTML = `<i class="fas ${icon}"></i>`;
            mobileThemeToggle.innerHTML = `<i class="fas ${icon}"></i>`;
        }

        // Event listeners for theme toggles
        themeToggle.addEventListener('click', toggleTheme);
        mobileThemeToggle.addEventListener('click', toggleTheme);

        // Contact Form Handling
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const formMessage = document.getElementById('formMessage');

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(this);
                
                // Show loading state
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                submitBtn.disabled = true;
                
                // Send AJAX request
                fetch('submit_contact.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Reset button
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Show message
                    formMessage.style.display = 'block';
                    formMessage.innerHTML = data.message;
                    
                    if (data.success) {
                        formMessage.style.color = 'green';
                        formMessage.innerHTML = '✅ ' + data.message;
                        contactForm.reset();
                        
                        // Hide message after 5 seconds
                        setTimeout(() => {
                            formMessage.style.display = 'none';
                        }, 5000);
                    } else {
                        formMessage.style.color = 'red';
                        formMessage.innerHTML = '❌ ' + data.message;
                    }
                })
                .catch(error => {
                    // Reset button
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Show error message
                    formMessage.style.display = 'block';
                    formMessage.style.color = 'red';
                    formMessage.innerHTML = '❌ An error occurred. Please try again.';
                    console.error('Error:', error);
                });
            });
        }

        // Scroll to Top Functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');
        
        // Show/hide scroll to top button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });
        
        // Scroll to top when button is clicked
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Pricing Tabs Functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const vehiclePricing = document.getElementById('vehicle-pricing');
        const boatPricing = document.getElementById('boat-pricing');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                tabBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Show/hide pricing content based on data-type
                const type = btn.getAttribute('data-type');
                if (type === 'vehicle') {
                    vehiclePricing.style.display = 'block';
                    boatPricing.style.display = 'none';
                } else if (type === 'boat') {
                    vehiclePricing.style.display = 'none';
                    boatPricing.style.display = 'block';
                }
            });
        });

        // Testimonial Carousel Functionality
        const carouselSlides = document.querySelectorAll('.testimonial-slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevButton = document.querySelector('.carousel-prev');
        const nextButton = document.querySelector('.carousel-next');
        let currentSlide = 0;
        let autoSlideInterval;

        // Function to show a specific slide
        function showSlide(index) {
            // Hide all slides
            carouselSlides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Remove active class from all indicators
            indicators.forEach(indicator => {
                indicator.classList.remove('active');
            });
            
            // Show the selected slide
            carouselSlides[index].classList.add('active');
            indicators[index].classList.add('active');
            
            currentSlide = index;
        }

        // Function to show next slide
        function nextSlide() {
            let nextIndex = currentSlide + 1;
            if (nextIndex >= carouselSlides.length) {
                nextIndex = 0;
            }
            showSlide(nextIndex);
        }

        // Function to show previous slide
        function prevSlide() {
            let prevIndex = currentSlide - 1;
            if (prevIndex < 0) {
                prevIndex = carouselSlides.length - 1;
            }
            showSlide(prevIndex);
        }

        // Start auto-sliding
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }

        // Stop auto-sliding
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Event listeners for navigation buttons
        prevButton.addEventListener('click', function() {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        nextButton.addEventListener('click', function() {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        // Event listeners for indicators
        indicators.forEach(indicator => {
            indicator.addEventListener('click', function() {
                stopAutoSlide();
                const index = parseInt(this.getAttribute('data-index'));
                showSlide(index);
                startAutoSlide();
            });
        });

        // Pause auto-slide on hover
        const carousel = document.querySelector('.testimonial-carousel');
        carousel.addEventListener('mouseenter', stopAutoSlide);
        carousel.addEventListener('mouseleave', startAutoSlide);

        // Initialize the carousel
        showSlide(0);
        startAutoSlide();

        // Buy Now Button Functionality
        document.querySelectorAll('.buy-now-btn').forEach(button => {
            button.addEventListener('click', function() {
                const plan = this.getAttribute('data-plan');
                const price = this.getAttribute('data-price');
                
                // Store the selected plan and price in localStorage
                localStorage.setItem('selectedPlan', plan);
                localStorage.setItem('selectedPrice', price);
                
                // Redirect to checkout page
                window.location.href = 'checkout.php';
            });
        });

        // Get Report Button Functionality
        document.getElementById('getReportBtn').addEventListener('click', function() {
            const email = document.getElementById('email').value;
            const vin = document.getElementById('vin').value;
            
            // Store the entered data in localStorage
            localStorage.setItem('userEmail', email);
            localStorage.setItem('userVIN', vin);
            
            // Redirect to checkout page
            window.location.href = 'checkout.php';
        });

        // Loading Screen Functionality - This should be the LAST part of your script
        document.addEventListener('DOMContentLoaded', function() {
            const loadingScreen = document.getElementById('loading-screen');
            const mainContent = document.getElementById('main-content');
            const loadingProgress = document.getElementById('loading-progress');
            
            // Check if this is the first visit
            const hasVisited = localStorage.getItem('hasVisited');
            
            if (!hasVisited) {
                // First visit - show loading screen
                loadingScreen.style.display = 'flex';
                mainContent.style.display = 'none';
                
                // Simulate loading progress
                let progress = 0;
                const progressInterval = setInterval(() => {
                    progress += Math.random() * 15;
                    if (progress > 100) {
                        progress = 100;
                        clearInterval(progressInterval);
                        
                        // Mark as visited and hide loading screen after a short delay
                        localStorage.setItem('hasVisited', 'true');
                        
                        setTimeout(() => {
                            loadingScreen.classList.add('fade-out');
                            setTimeout(() => {
                                loadingScreen.style.display = 'none';
                                mainContent.style.display = 'block';
                                // Refresh AOS after loading screen is hidden
                                if (typeof AOS !== 'undefined') {
                                    AOS.refresh();
                                }
                            }, 800);
                        }, 500);
                    }
                    loadingProgress.style.width = `${progress}%`;
                }, 300);
            } else {
                // Returning visitor - hide loading screen immediately
                loadingScreen.style.display = 'none';
                mainContent.style.display = 'block';
                // Refresh AOS after main content is displayed
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            }
        });
    </script>
</body>
</html>