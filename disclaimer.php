<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer | Global Ride Report</title>
    <meta name="description" content="Global Ride Report Disclaimer - Important legal information about the use of our services and reports.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo1.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0A3D62;
            --accent: #00AEEF;
            --background: #F5F7FA;
            --footer: #1A1A1A;
            --text: #333333;
            --light: #FFFFFF;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
            --radius: 12px;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        [data-theme="dark"] {
            --primary: #4A9DE3;
            --accent: #00AEEF;
            --background: #0A1A2F;
            --footer: #0A1424;
            --text: #E8F4FF;
            --light: #152642;
            --shadow: 0 10px 30px rgba(0,0,0,0.3);
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
            padding-top: 80px;
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
            margin-bottom: 2rem;
            position: relative;
            font-weight: 700;
        }

        h3 {
            font-size: 1.8rem;
            margin-top: 2.5rem;
            margin-bottom: 1.2rem;
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
            box-shadow: 0 8px 20px rgba(0,174,239,0.3);
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
            box-shadow: 0 12px 25px rgba(0,174,239,0.4);
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
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }

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
            background-color: rgba(0,0,0,0.05);
            color: var(--accent);
        }

        [data-theme="dark"] .theme-toggle:hover {
            background-color: rgba(74,157,227,0.1);
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
            background-color: rgba(0,0,0,0.05);
            color: var(--accent);
        }

        [data-theme="dark"] .mobile-theme-toggle:hover {
            background-color: rgba(74,157,227,0.1);
        }

        header {
            background-color: rgba(255,255,255,0.95);
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(10px);
            transition: background-color 0.3s ease;
            height: 80px;
        }

        [data-theme="dark"] header {
            background-color: rgba(21,38,66,0.95);
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
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

        .mobile-nav-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0,0,0,0.5);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .mobile-nav-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .mobile-nav {
            position: fixed;
            top: 0;
            right: -320px;
            width: 85%;
            max-width: 320px;
            height: 100%;
            background-color: var(--light);
            box-shadow: -5px 0 30px rgba(0,0,0,0.15);
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
            background-color: rgba(0,0,0,0.05);
            color: var(--accent);
            transform: rotate(90deg);
        }

        [data-theme="dark"] .mobile-nav-close:hover {
            background-color: rgba(74,157,227,0.1);
        }

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
            background-color: rgba(0,174,239,0.05);
            padding-left: 28px;
        }

        [data-theme="dark"] .mobile-nav a:hover {
            background-color: rgba(74,157,227,0.1);
        }

        .mobile-nav-btns {
            padding: 15px 20px;
            border-top: 1px solid #eee;
            background-color: var(--light);
            flex-shrink: 0;
            position: sticky;
            bottom: 0;
            z-index: 1002;
        }

        .language-selector select, .mobile-language-selector select {
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

        .language-selector select:focus, .mobile-language-selector select:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0,174,239,0.2);
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

        .terms-hero {
            background: linear-gradient(135deg, var(--primary) 0%, #0d4a7c 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .terms-hero h1 {
            color: white;
            font-size: 3.5rem;
            margin-bottom: 1.8rem;
            line-height: 1.2;
        }

        .terms-hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
            font-weight: 400;
        }

        .terms-content {
            padding: 80px 0;
        }

        .terms-section {
            margin-bottom: 50px;
        }

        .terms-section h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
            position: relative;
            padding-bottom: 10px;
        }

        .terms-section h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), var(--primary));
            border-radius: 2px;
        }

        .terms-section h3 {
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .terms-section p {
            margin-bottom: 1.2rem;
            line-height: 1.8;
        }

        .terms-section ul, .terms-section ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }

        .terms-section li {
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }

        .terms-section .note {
            background-color: rgba(0,174,239,0.1);
            border-left: 4px solid var(--accent);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 var(--radius) var(--radius) 0;
        }

        .terms-section .highlight {
            background-color: rgba(10,61,98,0.05);
            padding: 25px;
            border-radius: var(--radius);
            margin: 25px 0;
            border: 1px solid rgba(10,61,98,0.1);
        }

        .terms-section table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .terms-section th {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        .terms-section td {
            padding: 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .terms-section tr:nth-child(even) {
            background-color: rgba(0,0,0,0.02);
        }

        [data-theme="dark"] .terms-section tr:nth-child(even) {
            background-color: rgba(255,255,255,0.05);
        }

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
            box-shadow: 0 5px 15px rgba(0,174,239,0.3);
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
            box-shadow: 0 8px 20px rgba(0,174,239,0.4);
        }

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
            background-color: rgba(255,255,255,0.1);
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
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #999;
            font-size: 0.95rem;
        }

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

            .terms-hero h1 {
                font-size: 2.5rem;
            }

            .terms-hero p {
                font-size: 1.2rem;
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

            .terms-hero {
                padding: 100px 0 60px;
            }

            .terms-hero h1 {
                font-size: 2.2rem;
            }

            .terms-hero p {
                font-size: 1.15rem;
            }

            .terms-content {
                padding: 60px 0;
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

            .terms-hero {
                padding: 80px 0 40px;
            }

            .terms-hero h1 {
                font-size: 2rem;
            }

            .terms-hero p {
                font-size: 1.1rem;
            }

            .terms-content {
                padding: 40px 0;
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
    </style>
</head>
<body>
    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </button>
    
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo2.png" class="logo-img light-logo" alt="Global Ride Report">
                    <img src="images/logo1.png" class="logo-img dark-logo" alt="Global Ride Report">
                </a>
            </div>
            <nav class="desktop-nav">
                <ul>
                    <li><a href="index.php" data-translate="nav.home">Home</a></li>
                    <li><a href="boat-home.php" data-translate="nav.boat_reports">Boat Reports</a></li>
                    <li><a href="index.php#services" data-translate="nav.services">Services</a></li>
                    <li><a href="index.php#pricing" data-translate="nav.pricing">Pricing</a></li>
                    <li><a href="index.php#about" data-translate="nav.about">About</a></li>
                    <li><a href="blog.php" data-translate="nav.blog">Blog</a></li>
                    <li><a href="index.php#contact" data-translate="nav.contact">Contact</a></li>
                </ul>
            </nav>
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
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    
    <div class="mobile-nav-overlay"></div>
    <div class="mobile-nav">
        <div class="mobile-nav-content" style="margin-top:120px;">
            <ul>
                <li style="display:flex;align-items:center;justify-content:space-between;">
                    <a href="index.php" data-translate="nav.home">Home</a>
                    <div style="display: flex; align-items: center;">
                        <button class="mobile-theme-toggle" id="mobileThemeToggle">
                            <i class="fas fa-moon"></i>
                        </button>
                        <button class="mobile-nav-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </li>
                <li><a href="boat-home.php" data-translate="nav.boat_reports">Boat Reports</a></li>
                <li><a href="index.php#services" data-translate="nav.services">Services</a></li>
                <li><a href="index.php#pricing" data-translate="nav.pricing">Pricing</a></li>
                <li><a href="index.php#about" data-translate="nav.about">About</a></li>
                <li><a href="blog.php" data-translate="nav.blog">Blog</a></li>
                <li><a href="index.php#contact" data-translate="nav.contact">Contact</a></li>
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
                <a href="boat-home.php" class="btn btn-outline" style="width: 100%; text-align: center;" data-translate="nav.boat_reports">Boat Reports</a>
            </div>
        </div>
    </div>
    
    <section class="terms-hero">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-translate="disclaimer.title">Disclaimer</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-translate="disclaimer.subtitle">Important legal information about the use of our services and reports</p>
        </div>
    </section>
    
    <section class="terms-content">
        <div class="container">
            <div class="card" data-aos="fade-up" data-aos-duration="800">
                <div class="terms-section">
                    <h2 data-translate="disclaimer.general_title">General Information</h2>
                    <p data-translate="disclaimer.general_text1">The information provided on Global Ride Report is for general informational purposes only.</p>
                    <p data-translate="disclaimer.general_text2">While we strive to ensure accuracy, we cannot guarantee that all data is complete, up-to-date, or free from errors.</p>
                    
                    <h3 data-translate="disclaimer.vehicle_title">Vehicle & Boat Reports</h3>
                    <p data-translate="disclaimer.vehicle_text1">Our reports are based on verified sources, including governmental agencies, registries, and trusted databases.</p>
                    <p data-translate="disclaimer.vehicle_text2">Global Ride Report is not responsible for any discrepancies, omissions, or inaccuracies in third-party data.</p>
                    <p data-translate="disclaimer.vehicle_text3">Reports are meant to assist buyers and sellers in making informed decisions, but should not be the sole basis for purchasing or selling a vehicle or boat.</p>
                    
                    <h3 data-translate="disclaimer.legal_title">No Legal or Financial Advice</h3>
                    <p data-translate="disclaimer.legal_text1">The content and reports provided do not constitute legal, financial, or professional advice.</p>
                    <p data-translate="disclaimer.legal_text2">Users are encouraged to consult local authorities or professionals for any legal, financial, or regulatory matters related to vehicle or boat transactions.</p>
                    
                    <h3 data-translate="disclaimer.liability_title">Limitation of Liability</h3>
                    <p data-translate="disclaimer.liability_text1">Global Ride Report shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use our services.</p>
                    <p data-translate="disclaimer.liability_text2">Users are responsible for verifying all details independently before making any decisions.</p>
                    
                    <h3 data-translate="disclaimer.links_title">Third-Party Links</h3>
                    <p data-translate="disclaimer.links_text1">Our website may include links to trusted third-party services.</p>
                    <p data-translate="disclaimer.links_text2">We do not control these external sites and are not responsible for their content or privacy practices.</p>
                    
                    <h3 data-translate="disclaimer.risk_title">Use at Your Own Risk</h3>
                    <p data-translate="disclaimer.risk_text1">By using Global Ride Report services, you acknowledge that all decisions are made at your own risk.</p>
                    <p data-translate="disclaimer.risk_text2">We recommend cross-checking the information in your local jurisdiction or with professional services when needed.</p>
                    
                    <h3 data-translate="disclaimer.updates_title">Updates to Disclaimer</h3>
                    <p data-translate="disclaimer.updates_text1">This Disclaimer may be updated at any time without prior notice.</p>
                    <p data-translate="disclaimer.updates_text2">Updates take effect immediately upon posting on the website.</p>
                    
                    <h3 data-translate="disclaimer.contact_title">Contact Us</h3>
                    <p data-translate="disclaimer.contact_text">For any questions or clarifications regarding this Disclaimer, please contact us:</p>
                    <p>📧 info@globalridereport.com</p>
                    
                    <div class="note">
                        <p><strong data-translate="disclaimer.last_updated">Last Updated:</strong> <span data-translate="disclaimer.last_updated_date">January 1, 2025</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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
                        <li><a href="index.php" data-translate="nav.home">Home</a></li>
                        <li><a href="boat-home.php" data-translate="nav.boat_reports">Boat Reports</a></li>
                        <li><a href="index.php#services" data-translate="nav.services">Services</a></li>
                        <li><a href="index.php#pricing" data-translate="nav.pricing">Pricing</a></li>
                        <li><a href="index.php#about" data-translate="nav.about">About</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3 data-translate="footer.legal">Legal</h3>
                    <ul class="footer-links">
                        <li><a href="terms-conditions.php" data-translate="footer.terms">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.php" data-translate="footer.privacy">Privacy Policy</a></li>
                        <li><a href="disclaimer.php" class="active" data-translate="footer.disclaimer">Disclaimer</a></li>
                        <li><a href="refund-policy.php" data-translate="footer.refund">Refund Policy</a></li>
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
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Language Manager
        class LanguageManager {
            constructor() {
                this.currentLanguage = localStorage.getItem('language') || 'en';
                this.translations = {};
                this.init();
            }

            async init() {
                await this.loadTranslations();
                this.applyLanguage(this.currentLanguage);
                this.setupEventListeners();
            }

            async loadTranslations() {
                try {
                    const response = await fetch('/api/translations');
                    if (response.ok) {
                        this.translations = await response.json();
                    } else {
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
                        "nav.home": "Home",
                        "nav.boat_reports": "Boat Reports",
                        "nav.services": "Services",
                        "nav.pricing": "Pricing",
                        "nav.about": "About",
                        "nav.blog": "Blog",
                        "nav.contact": "Contact",
                        "lang.english": "English",
                        "lang.spanish": "Español",
                        "lang.french": "Français",
                        "lang.chinese": "中文",
                        "disclaimer.title": "Disclaimer",
                        "disclaimer.subtitle": "Important legal information about the use of our services and reports",
                        "disclaimer.general_title": "General Information",
                        "disclaimer.general_text1": "The information provided on Global Ride Report is for general informational purposes only.",
                        "disclaimer.general_text2": "While we strive to ensure accuracy, we cannot guarantee that all data is complete, up-to-date, or free from errors.",
                        "disclaimer.vehicle_title": "Vehicle & Boat Reports",
                        "disclaimer.vehicle_text1": "Our reports are based on verified sources, including governmental agencies, registries, and trusted databases.",
                        "disclaimer.vehicle_text2": "Global Ride Report is not responsible for any discrepancies, omissions, or inaccuracies in third-party data.",
                        "disclaimer.vehicle_text3": "Reports are meant to assist buyers and sellers in making informed decisions, but should not be the sole basis for purchasing or selling a vehicle or boat.",
                        "disclaimer.legal_title": "No Legal or Financial Advice",
                        "disclaimer.legal_text1": "The content and reports provided do not constitute legal, financial, or professional advice.",
                        "disclaimer.legal_text2": "Users are encouraged to consult local authorities or professionals for any legal, financial, or regulatory matters related to vehicle or boat transactions.",
                        "disclaimer.liability_title": "Limitation of Liability",
                        "disclaimer.liability_text1": "Global Ride Report shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use our services.",
                        "disclaimer.liability_text2": "Users are responsible for verifying all details independently before making any decisions.",
                        "disclaimer.links_title": "Third-Party Links",
                        "disclaimer.links_text1": "Our website may include links to trusted third-party services.",
                        "disclaimer.links_text2": "We do not control these external sites and are not responsible for their content or privacy practices.",
                        "disclaimer.risk_title": "Use at Your Own Risk",
                        "disclaimer.risk_text1": "By using Global Ride Report services, you acknowledge that all decisions are made at your own risk.",
                        "disclaimer.risk_text2": "We recommend cross-checking the information in your local jurisdiction or with professional services when needed.",
                        "disclaimer.updates_title": "Updates to Disclaimer",
                        "disclaimer.updates_text1": "This Disclaimer may be updated at any time without prior notice.",
                        "disclaimer.updates_text2": "Updates take effect immediately upon posting on the website.",
                        "disclaimer.contact_title": "Contact Us",
                        "disclaimer.contact_text": "For any questions or clarifications regarding this Disclaimer, please contact us:",
                        "disclaimer.last_updated": "Last Updated:",
                        "disclaimer.last_updated_date": "January 1, 2025",
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
                        "nav.home": "Inicio",
                        "nav.boat_reports": "Informes de Embarcaciones",
                        "nav.services": "Servicios",
                        "nav.pricing": "Precios",
                        "nav.about": "Acerca de",
                        "nav.blog": "Blog",
                        "nav.contact": "Contacto",
                        "lang.english": "Inglés",
                        "lang.spanish": "Español",
                        "lang.french": "Francés",
                        "lang.chinese": "Chino",
                        "disclaimer.title": "Descargo de Responsabilidad",
                        "disclaimer.subtitle": "Información legal importante sobre el uso de nuestros servicios e informes",
                        "disclaimer.general_title": "Información General",
                        "disclaimer.general_text1": "La información proporcionada en Global Ride Report es solo para fines informativos generales.",
                        "disclaimer.general_text2": "Si bien nos esforzamos por garantizar la precisión, no podemos garantizar que todos los datos sean completos, actualizados o libres de errores.",
                        "disclaimer.vehicle_title": "Informes de Vehículos y Embarcaciones",
                        "disclaimer.vehicle_text1": "Nuestros informes se basan en fuentes verificadas, incluidas agencias gubernamentales, registros y bases de datos confiables.",
                        "disclaimer.vehicle_text2": "Global Ride Report no es responsable de discrepancias, omisiones o inexactitudes en los datos de terceros.",
                        "disclaimer.vehicle_text3": "Los informes están destinados a ayudar a compradores y vendedores a tomar decisiones informadas, pero no deben ser la única base para comprar o vender un vehículo o embarcación.",
                        "disclaimer.legal_title": "Sin Asesoramiento Legal o Financiero",
                        "disclaimer.legal_text1": "El contenido y los informes proporcionados no constituyen asesoramiento legal, financiero o profesional.",
                        "disclaimer.legal_text2": "Se recomienda a los usuarios consultar con autoridades locales o profesionales para cualquier asunto legal, financiero o regulatorio relacionado con transacciones de vehículos o embarcaciones.",
                        "disclaimer.liability_title": "Limitación de Responsabilidad",
                        "disclaimer.liability_text1": "Global Ride Report no será responsable de ningún daño directo, indirecto, incidental o consecuente resultante del uso o la imposibilidad de usar nuestros servicios.",
                        "disclaimer.liability_text2": "Los usuarios son responsables de verificar todos los detalles de forma independiente antes de tomar cualquier decisión.",
                        "disclaimer.links_title": "Enlaces de Terceros",
                        "disclaimer.links_text1": "Nuestro sitio web puede incluir enlaces a servicios confiables de terceros.",
                        "disclaimer.links_text2": "No controlamos estos sitios externos y no somos responsables de su contenido o prácticas de privacidad.",
                        "disclaimer.risk_title": "Uso bajo su Propio Riesgo",
                        "disclaimer.risk_text1": "Al utilizar los servicios de Global Ride Report, reconoce que todas las decisiones se toman bajo su propio riesgo.",
                        "disclaimer.risk_text2": "Recomendamos verificar la información en su jurisdicción local o con servicios profesionales cuando sea necesario.",
                        "disclaimer.updates_title": "Actualizaciones del Descargo de Responsabilidad",
                        "disclaimer.updates_text1": "Este Descargo de Responsabilidad puede actualizarse en cualquier momento sin previo aviso.",
                        "disclaimer.updates_text2": "Las actualizaciones entran en vigencia inmediatamente después de su publicación en el sitio web.",
                        "disclaimer.contact_title": "Contáctenos",
                        "disclaimer.contact_text": "Para cualquier pregunta o aclaración con respecto a este Descargo de Responsabilidad, por favor contáctenos:",
                        "disclaimer.last_updated": "Última Actualización:",
                        "disclaimer.last_updated_date": "1 de enero de 2025",
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
                        "nav.home": "Accueil",
                        "nav.boat_reports": "Rapports Bateaux",
                        "nav.services": "Services",
                        "nav.pricing": "Tarifs",
                        "nav.about": "À Propos",
                        "nav.blog": "Blog",
                        "nav.contact": "Contact",
                        "lang.english": "Anglais",
                        "lang.spanish": "Espagnol",
                        "lang.french": "Français",
                        "lang.chinese": "Chinois",
                        "disclaimer.title": "Avertissement",
                        "disclaimer.subtitle": "Informations juridiques importantes concernant l'utilisation de nos services et rapports",
                        "disclaimer.general_title": "Informations Générales",
                        "disclaimer.general_text1": "Les informations fournies sur Global Ride Report sont uniquement à des fins d'information générale.",
                        "disclaimer.general_text2": "Bien que nous nous efforcions d'assurer l'exactitude, nous ne pouvons pas garantir que toutes les données soient complètes, à jour ou exemptes d'erreurs.",
                        "disclaimer.vehicle_title": "Rapports Véhicules et Bateaux",
                        "disclaimer.vehicle_text1": "Nos rapports sont basés sur des sources vérifiées, y compris des agences gouvernementales, des registres et des bases de données fiables.",
                        "disclaimer.vehicle_text2": "Global Ride Report n'est pas responsable des divergences, omissions ou inexactitudes dans les données tierces.",
                        "disclaimer.vehicle_text3": "Les rapports sont destinés à aider les acheteurs et les vendeurs à prendre des décisions éclairées, mais ne doivent pas être la seule base pour l'achat ou la vente d'un véhicule ou d'un bateau.",
                        "disclaimer.legal_title": "Pas de Conseils Juridiques ou Financiers",
                        "disclaimer.legal_text1": "Le contenu et les rapports fournis ne constituent pas des conseils juridiques, financiers ou professionnels.",
                        "disclaimer.legal_text2": "Les utilisateurs sont encouragés à consulter les autorités locales ou des professionnels pour toute question juridique, financière ou réglementaire liée aux transactions de véhicules ou de bateaux.",
                        "disclaimer.liability_title": "Limitation de Responsabilité",
                        "disclaimer.liability_text1": "Global Ride Report ne sera pas responsable des dommages directs, indirects, accessoires ou consécutifs résultant de l'utilisation ou de l'impossibilité d'utiliser nos services.",
                        "disclaimer.liability_text2": "Les utilisateurs sont responsables de vérifier tous les détails de manière indépendante avant de prendre toute décision.",
                        "disclaimer.links_title": "Liens Tiers",
                        "disclaimer.links_text1": "Notre site web peut inclure des liens vers des services tiers de confiance.",
                        "disclaimer.links_text2": "Nous ne contrôlons pas ces sites externes et ne sommes pas responsables de leur contenu ou de leurs pratiques de confidentialité.",
                        "disclaimer.risk_title": "Utilisation à vos Propres Risques",
                        "disclaimer.risk_text1": "En utilisant les services de Global Ride Report, vous reconnaissez que toutes les décisions sont prises à vos propres risques.",
                        "disclaimer.risk_text2": "Nous recommandons de vérifier les informations dans votre juridiction locale ou avec des services professionnels lorsque nécessaire.",
                        "disclaimer.updates_title": "Mises à jour de l'Avertissement",
                        "disclaimer.updates_text1": "Cet Avertissement peut être mis à jour à tout moment sans préavis.",
                        "disclaimer.updates_text2": "Les mises à jour prennent effet immédiatement après leur publication sur le site web.",
                        "disclaimer.contact_title": "Contactez-nous",
                        "disclaimer.contact_text": "Pour toute question ou clarification concernant cet Avertissement, veuillez nous contacter :",
                        "disclaimer.last_updated": "Dernière Mise à Jour :",
                        "disclaimer.last_updated_date": "1 janvier 2025",
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
                        "nav.home": "首页",
                        "nav.boat_reports": "船只报告",
                        "nav.services": "服务",
                        "nav.pricing": "价格",
                        "nav.about": "关于我们",
                        "nav.blog": "博客",
                        "nav.contact": "联系我们",
                        "lang.english": "英语",
                        "lang.spanish": "西班牙语",
                        "lang.french": "法语",
                        "lang.chinese": "中文",
                        "disclaimer.title": "免责声明",
                        "disclaimer.subtitle": "关于使用我们服务和报告的重要法律信息",
                        "disclaimer.general_title": "一般信息",
                        "disclaimer.general_text1": "Global Ride Report上提供的信息仅用于一般信息目的。",
                        "disclaimer.general_text2": "虽然我们努力确保准确性，但不能保证所有数据都是完整、最新或无错误的。",
                        "disclaimer.vehicle_title": "车辆和船只报告",
                        "disclaimer.vehicle_text1": "我们的报告基于经过验证的来源，包括政府机构、注册机构和可信赖的数据库。",
                        "disclaimer.vehicle_text2": "Global Ride Report不对第三方数据的任何差异、遗漏或不准确负责。",
                        "disclaimer.vehicle_text3": "报告旨在帮助买家和卖家做出明智的决定，但不应该是购买或出售车辆或船只的唯一依据。",
                        "disclaimer.legal_title": "无法律或财务建议",
                        "disclaimer.legal_text1": "提供的内容和报告不构成法律、财务或专业建议。",
                        "disclaimer.legal_text2": "鼓励用户就与车辆或船只交易相关的任何法律、财务或监管事项咨询当地当局或专业人士。",
                        "disclaimer.liability_title": "责任限制",
                        "disclaimer.liability_text1": "对于因使用或无法使用我们的服务而导致的任何直接、间接、附带或后果性损害，Global Ride Report概不负责。",
                        "disclaimer.liability_text2": "用户在做出任何决定之前有责任独立核实所有细节。",
                        "disclaimer.links_title": "第三方链接",
                        "disclaimer.links_text1": "我们的网站可能包含指向可信第三方服务的链接。",
                        "disclaimer.links_text2": "我们不控制这些外部网站，也不对其内容或隐私实践负责。",
                        "disclaimer.risk_title": "风险自负使用",
                        "disclaimer.risk_text1": "通过使用Global Ride Report服务，您承认所有决定均自行承担风险。",
                        "disclaimer.risk_text2": "我们建议在需要时在您当地管辖区域或与专业服务交叉检查信息。",
                        "disclaimer.updates_title": "免责声明更新",
                        "disclaimer.updates_text1": "本免责声明可随时更新，恕不另行通知。",
                        "disclaimer.updates_text2": "更新在发布到网站上后立即生效。",
                        "disclaimer.contact_title": "联系我们",
                        "disclaimer.contact_text": "对于有关本免责声明的任何问题或澄清，请联系我们：",
                        "disclaimer.last_updated": "最后更新：",
                        "disclaimer.last_updated_date": "2025年1月1日",
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
                document.getElementById('language-selector').value = lang;
                document.getElementById('mobile-language-selector').value = lang;
                
                document.querySelectorAll('[data-translate]').forEach(element => {
                    const key = element.getAttribute('data-translate');
                    if (this.translations[lang] && this.translations[lang][key]) {
                        element.textContent = this.translations[lang][key];
                    }
                });
                
                document.documentElement.lang = lang;
                
                setTimeout(() => {
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                }, 100);
            }
        }

        const languageManager = new LanguageManager();

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: function() {
                return window.innerWidth < 768;
            }
        });

        // Mobile Navigation
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

        mobileMenuToggle.addEventListener('click', openMobileNav);
        mobileNavClose.addEventListener('click', closeMobileNav);
        mobileNavOverlay.addEventListener('click', closeMobileNav);

        document.querySelectorAll('.mobile-nav a').forEach(link => {
            link.addEventListener('click', closeMobileNav);
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                closeMobileNav();
            }
        });

        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const mobileThemeToggle = document.getElementById('mobileThemeToggle');
        const body = document.body;

        const currentTheme = localStorage.getItem('theme') || 'light';
        body.setAttribute('data-theme', currentTheme);
        updateThemeIcon(currentTheme);

        function toggleTheme() {
            const currentTheme = body.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        }

        function updateThemeIcon(theme) {
            const icon = theme === 'light' ? 'fa-moon' : 'fa-sun';
            themeToggle.innerHTML = `<i class="fas ${icon}"></i>`;
            mobileThemeToggle.innerHTML = `<i class="fas ${icon}"></i>`;
        }

        themeToggle.addEventListener('click', toggleTheme);
        mobileThemeToggle.addEventListener('click', toggleTheme);

        // Scroll to Top
        const scrollToTopBtn = document.getElementById('scrollToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>