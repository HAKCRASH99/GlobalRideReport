<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Global Ride Report</title>
    <meta name="description" content="Read our latest articles on vehicle and boat history reports, safety tips, and market insights.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Particle.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
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

        [data-theme="dark"] .language-selector select,
        [data-theme="dark"] .mobile-language-selector select {
            background-color: #1E3052;
            border-color: #2A4A7A;
            color: #E8F4FF;
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

        [data-theme="dark"] .blog-section {
            background-color: #0F2442 !important;
        }

        [data-theme="dark"] .blog-meta {
            color: #B8D4F0;
        }

        [data-theme="dark"] .blog-content {
            background-color: #152642;
        }

        [data-theme="dark"] .blog-content h1, 
        [data-theme="dark"] .blog-content h2, 
        [data-theme="dark"] .blog-content h3 {
            color: #E8F4FF;
        }

        [data-theme="dark"] .blog-content p, 
        [data-theme="dark"] .blog-content li {
            color: #E8F4FF;
        }

        [data-theme="dark"] .blog-content blockquote {
            background-color: #1E3052;
            border-left-color: var(--accent);
            color: #E8F4FF;
        }

        [data-theme="dark"] .pagination button {
            background-color: #1E3052;
            color: #E8F4FF;
        }

        [data-theme="dark"] .pagination button:hover {
            background-color: var(--accent);
        }

        [data-theme="dark"] .pagination button.active {
            background-color: var(--accent);
            color: white;
        }

        /* Particle.js Container */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
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

        /* Blog Hero Section */
        .blog-hero {
            background: linear-gradient(135deg, var(--primary) 0%, #0d4a7c 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .blog-hero-content {
            position: relative;
            z-index: 1;
        }

        .blog-hero h1 {
            color: white;
            font-size: 3.5rem;
            margin-bottom: 1.8rem;
            line-height: 1.2;
        }

        .blog-hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 3rem;
            opacity: 0.9;
            font-weight: 400;
        }

        /* Blog Grid */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 35px;
            margin-bottom: 60px;
        }

        .blog-card {
            position: relative;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .blog-card-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: var(--radius) var(--radius) 0 0;
            background: linear-gradient(135deg, var(--accent) 0%, #0A3D62 100%);
            margin-bottom: 25px;
            transition: var(--transition);
            overflow: hidden;
        }

        .blog-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .blog-card:hover .blog-card-img img {
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
            flex-grow: 1;
        }

        .blog-card p {
            margin-bottom: 25px;
            flex-grow: 1;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
        }

        .pagination button {
            padding: 12px 20px;
            background-color: var(--light);
            border: 1px solid #e0e0e0;
            border-radius: var(--radius);
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
        }

        .pagination button:hover {
            background-color: var(--accent);
            color: white;
            border-color: var(--accent);
        }

        .pagination button.active {
            background-color: var(--accent);
            color: white;
            border-color: var(--accent);
        }

        /* Blog Content Page */
        .blog-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 60px 0;
        }

        .blog-content-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .blog-content-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: var(--radius);
            margin-bottom: 40px;
        }

        .blog-content h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .blog-content h2 {
            text-align: left;
            margin: 40px 0 20px;
            font-size: 2rem;
        }

        .blog-content h2:after {
            left: 0;
            transform: none;
        }

        .blog-content h3 {
            font-size: 1.5rem;
            margin: 30px 0 15px;
        }

        .blog-content ul, .blog-content ol {
            margin-bottom: 25px;
            padding-left: 25px;
        }

        .blog-content li {
            margin-bottom: 10px;
        }

        .blog-content blockquote {
            background-color: rgba(0, 174, 239, 0.05);
            border-left: 5px solid var(--accent);
            padding: 25px;
            margin: 30px 0;
            border-radius: 0 var(--radius) var(--radius) 0;
            font-style: italic;
        }

        .blog-content-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .back-to-blog {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .back-to-blog:hover {
            gap: 15px;
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
            
            .blog-hero h1 {
                font-size: 2.5rem;
            }
            
            .blog-hero p {
                font-size: 1.2rem;
            }
            
            .blog-content h1 {
                font-size: 2.2rem;
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
            
            .blog-hero {
                padding: 100px 0 60px;
            }
            
            .blog-hero h1 {
                font-size: 2.2rem;
            }
            
            .blog-hero p {
                font-size: 1.15rem;
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
            
            .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .blog-content-img {
                height: 300px;
            }
            
            .blog-content h1 {
                font-size: 2rem;
            }
            
            .blog-content h2 {
                font-size: 1.7rem;
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
            
            .blog-hero {
                padding: 80px 0 50px;
            }
            
            .blog-hero h1 {
                font-size: 2rem;
            }
            
            .blog-hero p {
                font-size: 1.1rem;
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
            
                /* .blog-content-img {
                    width: 250px;
                    height:100px !important;

                } */
            
            .blog-content h1 {
                font-size: 1.8rem;
            }
            
            .blog-content h2 {
                font-size: 1.5rem;
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
        <div id="loading-screen">
        <div class="loading-container">
            <!-- Logo -->
            <img src="images/logo2.png" class="loading-logo" alt="Global Ride Report">
            
            <!-- Animated Car Icon -->
            <div class="car-loader">
                <div class="car-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                    </svg>
                </div>
            </div>
            
            <!-- Loading Text -->
            <div class="loading-text">Loading Your Vehicle Reports</div>
            <div class="loading-subtext">Preparing your trusted vehicle history reports...</div>
            
            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress" id="loading-progress"></div>
            </div>
        </div>
    </div>

    <!-- Car Background Image -->
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
                    <li><a href="index.php" data-translate="nav.home">Home</a></li>
                    <li><a href="boat-home.php" data-translate="nav.boat_reports">Boat Reports</a></li>
                    <li><a href="index.php#services" data-translate="nav.services">Services</a></li>
                    <li><a href="index.php#pricing" data-translate="nav.pricing">Pricing</a></li>
                    <li><a href="index.php#about" data-translate="nav.about">About</a></li>
                    <li><a href="blog.php" class="active" data-translate="nav.blog">Blog</a></li>
                    <li><a href="index.php#contact" data-translate="nav.contact">Contact</a></li>
                </ul>
            </nav>
            
            <!-- Desktop Navigation Buttons -->
            <div class="nav-btns">
                <div class="language-selector">
                    <select id="language-selector">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                        <option value="zh">中文</option>
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
                <li><a href="index.php#boat-report" data-translate="nav.boat_reports">Boat Reports</a></li>
                <li><a href="index.php#services" data-translate="nav.services">Services</a></li>
                <li><a href="index.php#pricing" data-translate="nav.pricing">Pricing</a></li>
                <li><a href="index.php#about" data-translate="nav.about">About</a></li>
                <li><a href="blog.php" class="active" data-translate="nav.blog">Blog</a></li>
                <li><a href="index.php#contact" data-translate="nav.contact">Contact</a></li>
            </ul>
            
            <div class="mobile-nav-btns">
                <div class="mobile-language-selector">
                    <select id="mobile-language-selector">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                        <option value="zh">中文</option>
                    </select>
                </div>
                <a href="index.php#boat-report" class="btn btn-outline" style="width: 100%; text-align: center;" data-translate="nav.boat_reports">Boat Reports</a>
            </div>
        </div>
    </div>

    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div id="particles-js"></div>
        <div class="container blog-hero-content">
            <h1 data-translate="blog.hero_title">Global Ride Report Blog</h1>
            <p data-translate="blog.hero_subtitle">Expert insights on vehicle and boat history reports, safety tips, and market trends</p>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section" style="background-color: white;">
        <div class="container">
            <h2 data-translate="blog.latest_articles">Latest Articles</h2>
            <div class="blog-grid" id="blogGrid">
                <!-- Blog posts will be dynamically loaded here -->
            </div>
            
            <!-- Pagination -->
            <div class="pagination" id="pagination">
                <!-- Pagination buttons will be dynamically loaded here -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3 data-translate="footer.company">Global Ride Report</h3>
                    <p data-translate="footer.company_desc">Your trusted source for verified vehicle and boat history reports worldwide.</p>
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
                        <li><a href="index.php#boat-report" data-translate="nav.boat_reports">Boat Reports</a></li>
                        <li><a href="index.php#services" data-translate="nav.services">Services</a></li>
                        <li><a href="index.php#pricing" data-translate="nav.pricing">Pricing</a></li>
                        <li><a href="index.php#about" data-translate="nav.about">About</a></li>
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

    <script>
        // Language Data
        const translations = {
            en: {
                // Navigation
                "nav.home": "Home",
                "nav.boat_reports": "Boat Reports",
                "nav.services": "Services",
                "nav.pricing": "Pricing",
                "nav.about": "About",
                "nav.blog": "Blog",
                "nav.contact": "Contact",
                
                // Blog
                "blog.hero_title": "Global Ride Report Blog",
                "blog.hero_subtitle": "Expert insights on vehicle and boat history reports, safety tips, and market trends",
                "blog.latest_articles": "Latest Articles",
                "blog.read_more": "Read More",
                "blog.read_time": "min read",
                "blog.back_to_blog": "Back to Blog",
                "blog.previous": "Previous",
                "blog.next": "Next",
                
                // Footer
                "footer.company": "Global Ride Report",
                "footer.company_desc": "Your trusted source for verified vehicle and boat history reports worldwide.",
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
                "nav.boat_reports": "Informes de Barcos",
                "nav.services": "Servicios",
                "nav.pricing": "Precios",
                "nav.about": "Acerca de",
                "nav.blog": "Blog",
                "nav.contact": "Contacto",
                
                // Blog
                "blog.hero_title": "Blog de Global Ride Report",
                "blog.hero_subtitle": "Información experta sobre informes de historial de vehículos y barcos, consejos de seguridad y tendencias del mercado",
                "blog.latest_articles": "Artículos Más Recientes",
                "blog.read_more": "Leer Más",
                "blog.read_time": "min de lectura",
                "blog.back_to_blog": "Volver al Blog",
                "blog.previous": "Anterior",
                "blog.next": "Siguiente",
                
                // Footer
                "footer.company": "Global Ride Report",
                "footer.company_desc": "Su fuente confiable de informes de historial verificados de vehículos y barcos en todo el mundo.",
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
                "nav.boat_reports": "Rapports de Bateaux",
                "nav.services": "Services",
                "nav.pricing": "Tarification",
                "nav.about": "À Propos",
                "nav.blog": "Blog",
                "nav.contact": "Contact",
                
                // Blog
                "blog.hero_title": "Blog Global Ride Report",
                "blog.hero_subtitle": "Conseils d'experts sur les rapports d'historique des véhicules et bateaux, conseils de sécurité et tendances du marché",
                "blog.latest_articles": "Derniers Articles",
                "blog.read_more": "Lire Plus",
                "blog.read_time": "min de lecture",
                "blog.back_to_blog": "Retour au Blog",
                "blog.previous": "Précédent",
                "blog.next": "Suivant",
                
                // Footer
                "footer.company": "Global Ride Report",
                "footer.company_desc": "Votre source fiable pour des rapports d'historique vérifiés de véhicules et bateaux dans le monde entier.",
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
                
                // Blog
                "blog.hero_title": "全球骑行报告博客",
                "blog.hero_subtitle": "关于车辆和船只历史报告、安全提示和市场趋势的专家见解",
                "blog.latest_articles": "最新文章",
                "blog.read_more": "阅读更多",
                "blog.read_time": "分钟阅读",
                "blog.back_to_blog": "返回博客",
                "blog.previous": "上一页",
                "blog.next": "下一页",
                
                // Footer
                "footer.company": "全球骑行报告",
                "footer.company_desc": "您值得信赖的全球车辆和船只历史报告来源。",
                "footer.quick_links": "快速链接",
                "footer.legal": "法律",
                "footer.terms": "条款和条件",
                "footer.privacy": "隐私政策",
                "footer.disclaimer": "免责声明",
                "footer.refund": "退款政策",
                "footer.contact": "联系信息",
                "footer.copyright": "© 2025 全球骑行报告。保留所有权利。"
            }
        };

        // Blog Data with translations
        const blogPosts = [
            {
                id: 1,
                title: {
                    en: "How to Get a Salvage Title Cleared Legally",
                    es: "Cómo Obtener un Título de Salvamento Legalmente",
                    fr: "Comment Obtenir Légalement un Titre de Sauvetage",
                    zh: "如何合法清除报废车辆所有权"
                },
                snippet: {
                    en: "A salvage title doesn't have to block your path. Learn how to clear it safely for vehicles worldwide.",
                    es: "Un título de salvamento no tiene que bloquear su camino. Aprenda cómo limpiarlo de forma segura para vehículos en todo el mundo.",
                    fr: "Un titre de sauvetage ne doit pas bloquer votre chemin. Apprenez à le nettoyer en toute sécurité pour les véhicules du monde entier.",
                    zh: "报废车辆所有权不必阻碍您的道路。了解如何为全球车辆安全清除它。"
                },
                readTime: {
                    en: "5 min read",
                    es: "5 min de lectura",
                    fr: "5 min de lecture",
                    zh: "5 分钟阅读"
                },
                image: "images/salvage.png",
                fullContent: {
                    en: `
                        <p>A salvage title indicates a vehicle has been significantly damaged and repaired. Clearing it legally ensures your vehicle can be resold or insured.</p>
                        
                        <h2>Steps to clear a salvage title:</h2>
                        <ol>
                            <li>Complete all repairs with certified parts.</li>
                            <li>Obtain inspection certificates from authorized mechanics.</li>
                            <li>Submit required documentation to the local DMV / vehicle authority.</li>
                            <li>Pay any applicable fees and request the title update.</li>
                        </ol>
                        
                        <blockquote>
                            <p>Tip: Always verify regulations in your country, as rules vary across the 190+ countries we cover at Global Ride Report.</p>
                        </blockquote>
                    `,
                    es: `
                        <p>Un título de salvamento indica que un vehículo ha sido significativamente dañado y reparado. Limpiarlo legalmente asegura que su vehículo pueda ser revendido o asegurado.</p>
                        
                        <h2>Pasos para limpiar un título de salvamento:</h2>
                        <ol>
                            <li>Complete todas las reparaciones con piezas certificadas.</li>
                            <li>Obtenga certificados de inspección de mecánicos autorizados.</li>
                            <li>Envíe la documentación requerida a la DMV local / autoridad vehicular.</li>
                            <li>Pague las tarifas aplicables y solicite la actualización del título.</li>
                        </ol>
                        
                        <blockquote>
                            <p>Consejo: Siempre verifique las regulaciones en su país, ya que las reglas varían en los más de 190 países que cubrimos en Global Ride Report.</p>
                        </blockquote>
                    `,
                    fr: `
                        <p>Un titre de sauvetage indique qu'un véhicule a été considérablement endommagé et réparé. Le nettoyer légalement garantit que votre véhicule peut être revendu ou assuré.</p>
                        
                        <h2>Étapes pour nettoyer un titre de sauvetage :</h2>
                        <ol>
                            <li>Complétez toutes les réparations avec des pièces certifiées.</li>
                            <li>Obtenez des certificats d'inspection de mécaniciens autorisés.</li>
                            <li>Soumettez la documentation requise au DMV local / autorité véhiculaire.</li>
                            <li>Payez les frais applicables et demandez la mise à jour du titre.</li>
                        </ol>
                        
                        <blockquote>
                            <p>Astuce : Vérifiez toujours les réglementations dans votre país, car les règles varient dans les plus de 190 pays que nous couvrons chez Global Ride Report.</p>
                        </blockquote>
                    `,
                    zh: `
                        <p>报废车辆所有权表明车辆已严重损坏并修复。合法清除它可确保您的车辆可以转售或投保。</p>
                        
                        <h2>清除报废车辆所有权的步骤：</h2>
                        <ol>
                            <li>使用认证零件完成所有维修。</li>
                            <li>从授权机械师处获取检查证书。</li>
                            <li>将所需文件提交给当地DMV/车辆管理局。</li>
                            <li>支付任何适用费用并请求更新所有权。</li>
                        </ol>
                        
                        <blockquote>
                            <p>提示：始终验证您所在国家/地区的法规，因为我们在全球骑行报告覆盖的190多个国家/地区的规则各不相同。</p>
                        </blockquote>
                    `
                }
            },
            {
                id: 2,
                title: {
                    en: "How to Spot Odometer Rollback with a VIN Check",
                    es: "Cómo Detectar el Retroceso del Odómetro con una Verificación de VIN",
                    fr: "Comment Détecter le Retour en Arrière de l'Ododomètre avec une Vérification VIN",
                    zh: "如何使用VIN检查发现里程表回滚"
                },
                snippet: {
                    en: "Mileage should climb, never dip. Detect odometer rollbacks using VIN checks and vehicle inspection tips.",
                    es: "El kilometraje debe aumentar, nunca disminuir. Detecte retrocesos del odómetro usando verificaciones de VIN y consejos de inspección de vehículos.",
                    fr: "Le kilométrage devrait augmenter, jamais diminuer. Détectez les retours en arrière de l'odomètre à l'aide de vérifications VIN et de conseils d'inspection de véhicules.",
                    zh: "里程应该增加，永远不应减少。使用VIN检查和车辆检查提示检测里程表回滚。"
                },
                readTime: {
                    en: "5 min read",
                    es: "5 min de lectura",
                    fr: "5 min de lecture",
                    zh: "5 分钟阅读"
                },
                image: "images/odometer.png",
                fullContent: {
                    en: `
                        <p>Odometer rollback is a common fraud in used vehicles. By using VIN checks, you can:</p>
                        
                        <ul>
                            <li>Compare reported mileage against service history.</li>
                            <li>Check for inconsistencies in previous registrations.</li>
                            <li>Inspect wear and tear relative to age/mileage.</li>
                        </ul>
                        
                        <p>Global Ride Report provides verified VIN history, helping you make safe and informed purchases worldwide.</p>
                    `,
                    es: `
                        <p>El retroceso del odómetro es un fraude común en vehículos usados. Al usar verificaciones de VIN, puede:</p>
                        
                        <ul>
                            <li>Comparar el kilometraje reportado con el historial de servicio.</li>
                            <li>Verificar inconsistencias en registros anteriores.</li>
                            <li>Inspeccionar el desgaste en relación con la edad/kilometraje.</li>
                        </ul>
                        
                        <p>Global Ride Report proporciona historial de VIN verificado, ayudándole a realizar compras seguras e informadas en todo el mundo.</p>
                    `,
                    fr: `
                        <p>Le retour en arrière de l'odomètre est une fraude courante dans les véhicules d'occasion. En utilisant les vérifications VIN, vous pouvez :</p>
                        
                        <ul>
                            <li>Comparer le kilométrage déclaré avec l'historique d'entretien.</li>
                            <li>Vérifier les incohérences dans les enregistrements précédents.</li>
                            <li>Inspecter l'usure par rapport à l'âge/kilométrage.</li>
                        </ul>
                        
                        <p>Global Ride Report fournit un historique VIN vérifié, vous aidant à faire des achats sûrs et éclairés dans le monde entier.</p>
                    `,
                    zh: `
                        <p>里程表回滚是二手车中常见的欺诈行为。通过使用VIN检查，您可以：</p>
                        
                        <ul>
                            <li>将报告的里程与服务历史进行比较。</li>
                            <li>检查先前注册中的不一致之处。</li>
                            <li>检查相对于车龄/里程的磨损情况。</li>
                        </ul>
                        
                        <p>全球骑行报告提供经过验证的VIN历史记录，帮助您在全球范围内进行安全明智的购买。</p>
                    `
                }
            },
            {
                id: 3,
                title: {
                    en: "Pre-Purchase Car Inspection Explained",
                    es: "Inspección Previa a la Compra de un Automóvil Explicada",
                    fr: "Inspection Pré-Achat de Voiture Expliquée",
                    zh: "购车前检查说明"
                },
                snippet: {
                    en: "Avoid surprises by performing a thorough inspection before buying any used vehicle.",
                    es: "Evite sorpresas realizando una inspección exhaustiva antes de comprar cualquier vehículo usado.",
                    fr: "Évitez les surprises en effectuant une inspection approfondie avant d'acheter tout véhicule d'occasion.",
                    zh: "在购买任何二手车之前进行彻底检查，避免意外。"
                },
                readTime: {
                    en: "5 min read",
                    es: "5 min de lectura",
                    fr: "5 min de lecture",
                    zh: "5 分钟阅读"
                },
                image: "images/mechanic.png",
                fullContent: {
                    en: `
                        <p>Pre-purchase inspection ensures that the vehicle is in good condition before finalizing a purchase. Steps include:</p>
                        
                        <ol>
                            <li>Check engine performance and fluids.</li>
                            <li>Inspect brakes, tires, and suspension.</li>
                            <li>Review accident history via a vehicle report.</li>
                            <li>Verify VIN, registration, and ownership history.</li>
                        </ol>
                        
                        <p>Using Global Ride Report's verified data makes the inspection faster, safer, and more reliable.</p>
                    `,
                    es: `
                        <p>La inspección previa a la compra asegura que el vehículo esté en buenas condiciones antes de finalizar una compra. Los pasos incluyen:</p>
                        
                        <ol>
                            <li>Verificar el rendimiento del motor y los fluidos.</li>
                            <li>Inspeccionar frenos, neumáticos y suspensión.</li>
                            <li>Revisar el historial de accidentes a través de un informe del vehículo.</li>
                            <li>Verificar VIN, registro e historial de propiedad.</li>
                        </ol>
                        
                        <p>Usar los datos verificados de Global Ride Report hace que la inspección sea más rápida, segura y confiable.</p>
                    `,
                    fr: `
                        <p>L'inspection pré-achat garantit que le véhicule est en bon état avant de finaliser un achat. Les étapes incluent :</p>
                        
                        <ol>
                            <li>Vérifier les performances du moteur et les fluides.</li>
                            <li>Inspecter les freins, les pneus et la suspension.</li>
                            <li>Examiner l'historique des accidents via un rapport de véhicule.</li>
                            <li>Vérifier le VIN, l'enregistrement et l'historique de propriété.</li>
                        </ol>
                        
                        <p>Utiliser les données vérifiées de Global Ride Report rend l'inspection plus rapide, plus sûre et plus fiable.</p>
                    `,
                    zh: `
                        <p>购车前检查可确保在完成购买前车辆状况良好。步骤包括：</p>
                        
                        <ol>
                            <li>检查发动机性能和液体。</li>
                            <li>检查刹车、轮胎和悬挂系统。</li>
                            <li>通过车辆报告查看事故历史。</li>
                            <li>验证VIN、注册和所有权历史。</li>
                        </ol>
                        
                        <p>使用全球骑行报告的验证数据使检查更快、更安全、更可靠。</p>
                    `
                }
            },
            {
                id: 4,
                title: {
                    en: "How to Verify a Boat Before Purchase",
                    es: "Cómo Verificar un Barco Antes de la Compra",
                    fr: "Comment Vérifier un Bateau Avant l'Achat",
                    zh: "购买前如何验证船只"
                },
                snippet: {
                    en: "Don't sail blind. Learn to check a boat's history using HIN and registry data.",
                    es: "No navegue a ciegas. Aprenda a verificar el historial de un barco usando HIN y datos de registro.",
                    fr: "Ne naviguez pas à l'aveugle. Apprenez à vérifier l'historique d'un bateau en utilisant HIN et les données du registre.",
                    zh: "不要盲目航行。学习使用HIN和注册数据检查船只历史。"
                },
                readTime: {
                    en: "6 min read",
                    es: "6 min de lectura",
                    fr: "6 min de lecture",
                    zh: "6 分钟阅读"
                },
                image: "images/boat.png",
                fullContent: {
                    en: `
                        <p>Before buying a boat, always verify:</p>
                        
                        <ul>
                            <li>Hull Identification Number (HIN)</li>
                            <li>Registration and title history</li>
                            <li>Engine hours and maintenance logs</li>
                            <li>Accident or damage history</li>
                        </ul>
                        
                        <p>Global Ride Report offers trusted HIN verification for boats worldwide, giving peace of mind before purchase.</p>
                    `,
                    es: `
                        <p>Antes de comprar un barco, siempre verifique:</p>
                        
                        <ul>
                            <li>Número de Identificación del Casco (HIN)</li>
                            <li>Registro e historial de título</li>
                            <li>Horas del motor y registros de mantenimiento</li>
                            <li>Historial de accidentes o daños</li>
                        </ul>
                        
                        <p>Global Ride Report ofrece verificación de HIN confiable para barcos en todo el mundo, brindando tranquilidad antes de la compra.</p>
                    `,
                    fr: `
                        <p>Avant d'acheter un bateau, vérifiez toujours :</p>
                        
                        <ul>
                            <li>Numéro d'identification de la coque (HIN)</li>
                            <li>Enregistrement et historique du titre</li>
                            <li>Heures du moteur et journaux d'entretien</li>
                            <li>Historique des accidents ou des dommages</li>
                        </ul>
                        
                        <p>Global Ride Report offre une vérification HIN fiable pour les bateaux du monde entier, offrant une tranquillité d'esprit avant l'achat.</p>
                    `,
                    zh: `
                        <p>购买船只前，始终验证：</p>
                        
                        <ul>
                            <li>船体识别号 (HIN)</li>
                            <li>注册和所有权历史</li>
                            <li>发动机小时数和维护记录</li>
                            <li>事故或损坏历史</li>
                        </ul>
                        
                        <p>全球骑行报告为全球船只提供可信的HIN验证，让您在购买前安心。</p>
                    `
                }
            },
            {
                id: 5,
                title: {
                    en: "Understanding Vehicle Safety Recalls",
                    es: "Comprendiendo los Retiros de Seguridad de Vehículos",
                    fr: "Comprendre les Rappels de Sécurité des Véhicules",
                    zh: "了解车辆安全召回"
                },
                snippet: {
                    en: "Stay safe. Check if your car, truck, or trailer has any unresolved recalls.",
                    es: "Manténgase seguro. Verifique si su automóvil, camión o remolque tiene retiros sin resolver.",
                    fr: "Restez en sécurité. Vérifiez si votre voiture, camion ou remorque a des rappels non résolus.",
                    zh: "保持安全。检查您的汽车、卡车或拖车是否有任何未解决的召回。"
                },
                readTime: {
                    en: "4 min read",
                    es: "4 min de lectura",
                    fr: "4 min de lecture",
                    zh: "4 分钟阅读"
                },
                image: "images/safety.png",
                fullContent: {
                    en: `
                        <p>Vehicle recalls are issued to fix safety hazards. Steps:</p>
                        
                        <ol>
                            <li>Check VIN for recall notifications.</li>
                            <li>Visit authorized service centers for repairs.</li>
                            <li>Keep records of all completed repairs.</li>
                        </ol>
                        
                        <p>Global Ride Report ensures you never miss a safety recall, protecting you and your passengers.</p>
                    `,
                    es: `
                        <p>Los retiros de vehículos se emiten para corregir riesgos de seguridad. Pasos:</p>
                        
                        <ol>
                            <li>Verifique el VIN para notificaciones de retiro.</li>
                            <li>Visite centros de servicio autorizados para reparaciones.</li>
                            <li>Mantenga registros de todas las reparaciones completadas.</li>
                        </ol>
                        
                        <p>Global Ride Report asegura que nunca se pierda un retiro de seguridad, protegiéndolo a usted y a sus pasajeros.</p>
                    `,
                    fr: `
                        <p>Les rappels de véhicules sont émis pour corriger les risques pour la sécurité. Étapes :</p>
                        
                        <ol>
                            <li>Vérifiez le VIN pour les notifications de rappel.</li>
                            <li>Visitez les centres de service agréés pour les réparations.</li>
                            <li>Conservez les dossiers de toutes les réparations effectuées.</li>
                        </ol>
                        
                        <p>Global Ride Report garantit que vous ne manquez jamais un rappel de sécurité, vous protégeant ainsi que vos passagers.</p>
                    `,
                    zh: `
                        <p>车辆召回是为了修复安全隐患。步骤：</p>
                        
                        <ol>
                            <li>检查VIN是否有召回通知。</li>
                            <li>前往授权服务中心进行维修。</li>
                            <li>保留所有已完成维修的记录。</li>
                        </ol>
                        
                        <p>全球骑行报告确保您不会错过任何安全召回，保护您和您的乘客。</p>
                    `
                }
            },
            {
                id: 6,
                title: {
                    en: "Trailer History Reports: Why They Matter",
                    es: "Informes de Historial de Remolques: Por Qué Son Importantes",
                    fr: "Rapports d'Historique de Remorques : Pourquoi Ils Comptent",
                    zh: "拖车历史报告：为什么它们很重要"
                },
                snippet: {
                    en: "Don't buy a trailer blind. Learn what a trailer history report reveals.",
                    es: "No compre un remolque a ciegas. Aprenda lo que revela un informe de historial de remolques.",
                    fr: "N'achetez pas une remorque à l'aveugle. Découvrez ce que révèle un rapport d'historique de remorque.",
                    zh: "不要盲目购买拖车。了解拖车历史报告揭示的内容。"
                },
                readTime: {
                    en: "5 min read",
                    es: "5 min de lectura",
                    fr: "5 min de lecture",
                    zh: "5 分钟阅读"
                },
                image: "images/cargo.png",
                fullContent: {
                    en: `
                        <p>Trailer reports provide:</p>
                        
                        <ul>
                            <li>Ownership verification</li>
                            <li>Accident/damage records</li>
                            <li>Safety recall checks</li>
                            <li>Specifications and dimensions</li>
                        </ul>
                        
                        <p>Global Ride Report covers trailers worldwide, ensuring safe purchases.</p>
                    `,
                    es: `
                        <p>Los informes de remolques proporcionan:</p>
                        
                        <ul>
                            <li>Verificación de propiedad</li>
                            <li>Registros de accidentes/daños</li>
                            <li>Verificaciones de retiros de seguridad</li>
                            <li>Especificaciones y dimensiones</li>
                        </ul>
                        
                        <p>Global Ride Report cubre remolques en todo el mundo, asegurando compras seguras.</p>
                    `,
                    fr: `
                        <p>Les rapports de remorque fournissent :</p>
                        
                        <ul>
                            <li>Vérification de la propriété</li>
                            <li>Dossiers d'accidents/dommages</li>
                            <li>Vérifications des rappels de sécurité</li>
                            <li>Spécifications et dimensions</li>
                        </ul>
                        
                        <p>Global Ride Report couvre les remorques dans le monde entier, garantissant des achats sûrs.</p>
                    `,
                    zh: `
                        <p>拖车报告提供：</p>
                        
                        <ul>
                            <li>所有权验证</li>
                            <li>事故/损坏记录</li>
                            <li>安全召回检查</li>
                            <li>规格和尺寸</li>
                        </ul>
                        
                        <p>全球骑行报告覆盖全球拖车，确保安全购买。</p>
                    `
                }
            },
           

{
    id: 7,
    title: {
        en: "How to Protect Your Vehicle Data",
        es: "Cómo Proteger los Datos de su Vehículo",
        fr: "Comment Protéger les Données de votre Véhicule",
        zh: "如何保护您的车辆数据"
    },
    snippet: {
        en: "Keep your personal info safe while checking vehicle history online.",
        es: "Mantenga su información personal segura mientras verifica el historial del vehículo en línea.",
        fr: "Gardez vos informations personnelles en sécurité tout en vérifiant l'historique du véhicule en ligne.",
        zh: "在线检查车辆历史时保护您的个人信息安全。"
    },
    readTime: {
        en: "4 min read",
        es: "4 min de lectura",
        fr: "4 min de lecture",
        zh: "4 分钟阅读"
    },
    image: "images/sheild.png",
    fullContent: {
        en: `
            <p>Global Ride Report uses secure systems to protect:</p>
            
            <ul>
                <li>VIN / HIN data</li>
                <li>Customer emails and personal info</li>
                <li>Payment details</li>
            </ul>
            
            <p>We comply with international privacy standards to ensure safety and confidentiality for all our customers worldwide.</p>
            
            <h2>Best Practices for Data Protection:</h2>
            <ol>
                <li>Always use secure, encrypted connections when submitting vehicle data</li>
                <li>Verify the authenticity of vehicle history report providers</li>
                <li>Keep your login credentials secure and change passwords regularly</li>
                <li>Monitor your accounts for any suspicious activity</li>
            </ol>
            
            <blockquote>
                <p>Global Ride Report maintains the highest security standards to protect your sensitive information across all 190+ countries we serve.</p>
            </blockquote>
        `,
        es: `
            <p>Global Ride Report utiliza sistemas seguros para proteger:</p>
            
            <ul>
                <li>Datos de VIN / HIN</li>
                <li>Correos electrónicos e información personal de clientes</li>
                <li>Detalles de pago</li>
            </ul>
            
            <p>Cumplimos con los estándares internacionales de privacidad para garantizar la seguridad y confidencialidad de todos nuestros clientes en todo el mundo.</p>
            
            <h2>Mejores Prácticas para la Protección de Datos:</h2>
            <ol>
                <li>Siempre use conexiones seguras y encriptadas al enviar datos del vehículo</li>
                <li>Verifique la autenticidad de los proveedores de informes de historial de vehículos</li>
                <li>Mantenga sus credenciales de inicio de sesión seguras y cambie las contraseñas regularmente</li>
                <li>Monitoree sus cuentas para detectar cualquier actividad sospechosa</li>
            </ol>
            
            <blockquote>
                <p>Global Ride Report mantiene los más altos estándares de seguridad para proteger su información sensible en todos los más de 190 países que servimos.</p>
            </blockquote>
        `,
        fr: `
            <p>Global Ride Report utilise des systèmes sécurisés pour protéger :</p>
            
            <ul>
                <li>Données VIN / HIN</li>
                <li>E-mails clients et informations personnelles</li>
                <li>Détails de paiement</li>
            </ul>
            
            <p>Nous respectons les normes internationales de confidentialité pour garantir la sécurité et la confidentialité de tous nos clients dans le monde entier.</p>
            
            <h2>Meilleures Pratiques pour la Protection des Données :</h2>
            <ol>
                <li>Utilisez toujours des connexions sécurisées et cryptées lors de la soumission des données du véhicule</li>
                <li>Vérifiez l'authenticité des fournisseurs de rapports d'historique de véhicules</li>
                <li>Gardez vos identifiants de connexion sécurisés et changez les mots de passe régulièrement</li>
                <li>Surveillez vos comptes pour toute activité suspecte</li>
            </ol>
            
            <blockquote>
                <p>Global Ride Report maintient les normes de sécurité les plus élevées pour protéger vos informations sensibles dans tous les plus de 190 pays que nous desservons.</p>
            </blockquote>
        `,
        zh: `
            <p>全球骑行报告使用安全系统保护：</p>
            
            <ul>
                <li>VIN / HIN 数据</li>
                <li>客户电子邮件和个人信息</li>
                <li>付款详情</li>
            </ul>
            
            <p>我们遵守国际隐私标准，以确保全球所有客户的安全和机密性。</p>
            
            <h2>数据保护最佳实践：</h2>
            <ol>
                <li>提交车辆数据时始终使用安全加密连接</li>
                <li>验证车辆历史报告提供商的真实性</li>
                <li>保护您的登录凭据并定期更改密码</li>
                <li>监控您的账户是否有任何可疑活动</li>
            </ol>
            
            <blockquote>
                <p>全球骑行报告保持最高的安全标准，以保护我们在190多个国家/地区服务的所有客户的敏感信息。</p>
            </blockquote>
        `
    }
},
{
    id: 8,
    title: {
        en: "Understanding Market Value for Vehicles & Boats",
        es: "Comprendiendo el Valor de Mercado para Vehículos y Barcos",
        fr: "Comprendre la Valeur Marchande des Véhicules et Bateaux",
        zh: "了解车辆和船只的市场价值"
    },
    snippet: {
        en: "Learn how to accurately assess the value of a car, trailer, or boat before buying or selling.",
        es: "Aprenda a evaluar con precisión el valor de un automóvil, remolque o barco antes de comprar o vender.",
        fr: "Apprenez à évaluer avec précision la valeur d'une voiture, d'une remorque ou d'un bateau avant d'acheter ou de vendre.",
        zh: "学习在购买或出售前准确评估汽车、拖车或船只的价值。"
    },
    readTime: {
        en: "5 min read",
        es: "5 min de lectura",
        fr: "5 min de lecture",
        zh: "5 分钟阅读"
    },
    image: "images/valuation.png",
    fullContent: {
        en: `
            <p>Market value depends on several key factors that Global Ride Report helps you evaluate:</p>
            
            <ul>
                <li>Age, mileage, condition</li>
                <li>Brand reputation and model popularity</li>
                <li>Accident history and repair quality</li>
                <li>Supply and demand in your region</li>
                <li>Service history and maintenance records</li>
                <li>Current market trends and economic factors</li>
            </ul>
            
            <h2>How Global Ride Report Helps:</h2>
            <ol>
                <li>Provides comprehensive vehicle history data</li>
                <li>Compares similar vehicles in your market</li>
                <li>Identifies factors affecting resale value</li>
                <li>Offers insights into regional pricing trends</li>
            </ol>
            
            <p>Reports from Global Ride Report help you price fairly and avoid overpaying by providing accurate, verified data from trusted sources worldwide.</p>
            
            <blockquote>
                <p>With access to international vehicle databases, Global Ride Report gives you the most accurate market value assessment for any vehicle or boat in our 190+ country network.</p>
            </blockquote>
        `,
        es: `
            <p>El valor de mercado depende de varios factores clave que Global Ride Report le ayuda a evaluar:</p>
            
            <ul>
                <li>Edad, kilometraje, condición</li>
                <li>Reputación de la marca y popularidad del modelo</li>
                <li>Historial de accidentes y calidad de reparación</li>
                <li>Oferta y demanda en su región</li>
                <li>Historial de servicio y registros de mantenimiento</li>
                <li>Tendencias actuales del mercado y factores económicos</li>
            </ul>
            
            <h2>Cómo Ayuda Global Ride Report:</h2>
            <ol>
                <li>Proporciona datos completos del historial del vehículo</li>
                <li>Compara vehículos similares en su mercado</li>
                <li>Identifica factores que afectan el valor de reventa</li>
                <li>Ofrece información sobre tendencias de precios regionales</li>
            </ol>
            
            <p>Los informes de Global Ride Report le ayudan a fijar precios justos y evitar pagar de más al proporcionar datos precisos y verificados de fuentes confiables en todo el mundo.</p>
            
            <blockquote>
                <p>Con acceso a bases de datos internacionales de vehículos, Global Ride Report le brinda la evaluación más precisa del valor de mercado para cualquier vehículo o barco en nuestra red de más de 190 países.</p>
            </blockquote>
        `,
        fr: `
            <p>La valeur marchande dépend de plusieurs facteurs clés que Global Ride Report vous aide à évaluer :</p>
            
            <ul>
                <li>Âge, kilométrage, état</li>
                <li>Réputation de la marque et popularité du modèle</li>
                <li>Historique des accidents et qualité des réparations</li>
                <li>Offre et demande dans votre région</li>
                <li>Historique d'entretien et dossiers de maintenance</li>
                <li>Tendances actuelles du marché et facteurs économiques</li>
            </ul>
            
            <h2>Comment Global Ride Report Aide :</h2>
            <ol>
                <li>Fournit des données complètes sur l'historique du véhicule</li>
                <li>Compare des véhicules similaires sur votre marché</li>
                <li>Identifie les facteurs affectant la valeur de revente</li>
                <li>Offre des informations sur les tendances de prix régionales</li>
            </ol>
            
            <p>Les rapports de Global Ride Report vous aident à fixer des prix équitables et à éviter de surpayer en fournissant des données précises et vérifiées provenant de sources fiables dans le monde entier.</p>
            
            <blockquote>
                <p>Avec l'accès aux bases de données internationales de véhicules, Global Ride Report vous donne l'évaluation la plus précise de la valeur marchande pour tout véhicule ou bateau dans notre réseau de plus de 190 pays.</p>
            </blockquote>
        `,
        zh: `
            <p>市场价值取决于全球骑行报告帮助您评估的几个关键因素：</p>
            
            <ul>
                <li>车龄、里程、车况</li>
                <li>品牌声誉和车型受欢迎程度</li>
                <li>事故历史和维修质量</li>
                <li>您所在地区的供需情况</li>
                <li>服务历史和保养记录</li>
                <li>当前市场趋势和经济因素</li>
            </ul>
            
            <h2>全球骑行报告如何帮助：</h2>
            <ol>
                <li>提供全面的车辆历史数据</li>
                <li>比较您市场中类似车辆</li>
                <li>识别影响转售价值的因素</li>
                <li>提供区域定价趋势的见解</li>
            </ol>
            
            <p>全球骑行报告的报告通过提供来自全球可信来源的准确、验证数据，帮助您合理定价并避免多付。</p>
            
            <blockquote>
                <p>通过访问国际车辆数据库，全球骑行报告为您在我们190多个国家网络中的任何车辆或船只提供最准确的市场价值评估。</p>
            </blockquote>
        `
    }
},
{
    id: 9,
    title: {
        en: "How to Spot Fraud in Used Vehicles & Boats",
        es: "Cómo Detectar el Fraude en Vehículos y Barcos Usados",
        fr: "Comment Détecter la Fraude dans les Véhicules et Bateaux d'Occasion",
        zh: "如何发现二手车和船只中的欺诈"
    },
    snippet: {
        en: "Detect potential fraud early using VIN/HIN verification and inspection tips.",
        es: "Detecte el fraude potencial temprano usando verificación de VIN/HIN y consejos de inspección.",
        fr: "Détectez les fraudes potentielles tôt en utilisant la vérification VIN/HIN et des conseils d'inspection.",
        zh: "使用VIN/HIN验证和检查提示及早发现潜在欺诈。"
    },
    readTime: {
        en: "6 min read",
        es: "6 min de lectura",
        fr: "6 min de lecture",
        zh: "6 分钟阅读"
    },
    image: "images/vehicle.png",
    fullContent: {
        en: `
            <p>Common frauds in used vehicles and boats that Global Ride Report helps you identify:</p>
            
            <ul>
                <li>Odometer rollback and mileage tampering</li>
                <li>Stolen vehicle or boat with altered identification</li>
                <li>Fake ownership transfers and documentation</li>
                <li>Hidden accident damage and flood damage</li>
                <li>Rebuilt vehicles with salvage titles</li>
                <li>Cloned VIN/HIN numbers</li>
            </ul>
            
            <h2>Red Flags to Watch For:</h2>
            <ol>
                <li>Price significantly below market value</li>
                <li>Seller pressure to complete transaction quickly</li>
                <li>Inconsistent vehicle history or gaps in records</li>
                <li>Mismatched VIN/HIN locations or numbers</li>
                <li>Poor quality repairs or recent paint work</li>
                <li>Reluctance to provide complete documentation</li>
            </ol>
            
            <p>Global Ride Report provides verified, worldwide history reports to prevent fraud by giving you access to comprehensive vehicle and boat data from official registries and trusted databases across 190+ countries.</p>
            
            <blockquote>
                <p>Our international verification system cross-references multiple data sources to ensure every report is accurate and fraud-free, protecting buyers and sellers worldwide.</p>
            </blockquote>
        `,
        es: `
            <p>Fraudes comunes en vehículos y barcos usados que Global Ride Report le ayuda a identificar:</p>
            
            <ul>
                <li>Retroceso del odómetro y manipulación del kilometraje</li>
                <li>Vehículo o barco robado con identificación alterada</li>
                <li>Transferencias de propiedad falsas y documentación</li>
                <li>Daños por accidentes ocultos y daños por inundación</li>
                <li>Vehículos reconstruidos con títulos de salvamento</li>
                <li>Números de VIN/HIN clonados</li>
            </ul>
            
            <h2>Señales de Alerta a Tener en Cuenta:</h2>
            <ol>
                <li>Precio significativamente por debajo del valor de mercado</li>
                <li>Presión del vendedor para completar la transacción rápidamente</li>
                <li>Historial del vehículo inconsistente o lagunas en los registros</li>
                <li>Ubicaciones o números de VIN/HIN que no coinciden</li>
                <li>Reparaciones de mala calidad o trabajo de pintura reciente</li>
                <li>Renuencia a proporcionar documentación completa</li>
            </ol>
            
            <p>Global Ride Report proporciona informes de historial verificados en todo el mundo para prevenir fraudes al brindarle acceso a datos completos de vehículos y barcos de registros oficiales y bases de datos confiables en más de 190 países.</p>
            
            <blockquote>
                <p>Nuestro sistema de verificación internacional cruza múltiples fuentes de datos para garantizar que cada informe sea preciso y libre de fraudes, protegiendo a compradores y vendedores en todo el mundo.</p>
            </blockquote>
        `,
        fr: `
            <p>Fraudes courantes dans les véhicules et bateaux d'occasion que Global Ride Report vous aide à identifier :</p>
            
            <ul>
                <li>Retour en arrière de l'odomètre et falsification du kilométrage</li>
                <li>Véhicule ou bateau volé avec identification altérée</li>
                <li>Transferts de propriété faux et documentation</li>
                <li>Dommages d'accident cachés et dommages d'inondation</li>
                <li>Véhicules reconstruits avec titres de sauvetage</li>
                <li>Numéros VIN/HIN clonés</li>
            </ul>
            
            <h2>Signaux d'Alarme à Surveiller :</h2>
            <ol>
                <li>Prix nettement inférieur à la valeur marchande</li>
                <li>Pression du vendeur pour conclure rapidement la transaction</li>
                <li>Historique du véhicule incohérent ou lacunes dans les dossiers</li>
                <li>Emplacements ou numéros VIN/HIN non concordants</li>
                <li>Réparations de mauvaise qualité ou travaux de peinture récents</li>
                <li>Réticence à fournir une documentation complète</li>
            </ol>
            
            <p>Global Ride Report fournit des rapports d'historique vérifiés dans le monde entier pour prévenir la fraude en vous donnant accès à des données complètes sur les véhicules et bateaux provenant de registres officiels et de bases de données fiables dans plus de 190 pays.</p>
            
            <blockquote>
                <p>Notre système de vérification international recoupe plusieurs sources de données pour garantir que chaque rapport est précis et exempt de fraude, protégeant les acheteurs et les vendeurs du monde entier.</p>
            </blockquote>
        `,
        zh: `
            <p>全球骑行报告帮助您识别的二手车和船只常见欺诈：</p>
            
            <ul>
                <li>里程表回滚和里程篡改</li>
                <li>被盗车辆或船只，身份信息被更改</li>
                <li>虚假所有权转让和文件</li>
                <li>隐藏的事故损坏和洪水损坏</li>
                <li>重建车辆带有报废所有权</li>
                <li>克隆的VIN/HIN号码</li>
            </ul>
            
            <h2>需要注意的危险信号：</h2>
            <ol>
                <li>价格显著低于市场价值</li>
                <li>卖家施压要求快速完成交易</li>
                <li>车辆历史不一致或记录有空白</li>
                <li>VIN/HIN位置或号码不匹配</li>
                <li>维修质量差或近期喷漆工作</li>
                <li>不愿提供完整文件</li>
            </ol>
            
            <p>全球骑行报告提供经过验证的全球历史报告，通过让您访问来自190多个国家官方注册机构和可信数据库的全面车辆和船只数据来预防欺诈。</p>
            
            <blockquote>
                <p>我们的国际验证系统交叉引用多个数据源，确保每份报告都准确无误且无欺诈，保护全球买家和卖家。</p>
            </blockquote>
        `
    }
},
{
    id: 10,
    title: {
        en: "Benefits of Verified Vehicle & Boat Reports",
        es: "Beneficios de los Informes Verificados de Vehículos y Barcos",
        fr: "Avantages des Rapports Vérifiés de Véhicules et Bateaux",
        zh: "经过验证的车辆和船只报告的好处"
    },
    snippet: {
        en: "Know why buyers and sellers trust Global Ride Report for history verification.",
        es: "Sepa por qué compradores y vendedores confían en Global Ride Report para la verificación de historial.",
        fr: "Découvrez pourquoi les acheteurs et les vendeurs font confiance à Global Ride Report pour la vérification de l'historique.",
        zh: "了解为什么买家和卖家信任全球骑行报告进行历史验证。"
    },
    readTime: {
        en: "4 min read",
        es: "4 min de lectura",
        fr: "4 min de lecture",
        zh: "4 分钟阅读"
    },
    image: "images/benifits.png",
    fullContent: {
        en: `
            <p>Benefits of using Global Ride Report's verified vehicle and boat history reports:</p>
            
            <ul>
                <li>Confidence in purchase/sale decisions</li>
                <li>Accurate, verified history data from trusted sources</li>
                <li>Safe transactions worldwide with international coverage</li>
                <li>Transparency that builds trust with buyers and sellers</li>
                <li>Comprehensive data including accidents, ownership, and specifications</li>
                <li>Protection against fraud and misrepresentation</li>
            </ul>
            
            <h2>Why Choose Global Ride Report:</h2>
            <ol>
                <li>International coverage across 190+ countries</li>
                <li>Data sourced from official registries and authorities</li>
                <li>Secure, encrypted data protection</li>
                <li>Multi-language support for global customers</li>
                <li>Fast, reliable report delivery</li>
                <li>Expert customer support team</li>
            </ol>
            
            <p>Global Ride Report ensures every report is reliable, secure, and internationally recognized, giving you peace of mind whether you're buying or selling vehicles, trailers, or boats anywhere in the world.</p>
            
            <blockquote>
                <p>With millions of satisfied customers worldwide, Global Ride Report has established itself as the trusted partner for vehicle and boat history verification across international markets.</p>
            </blockquote>
        `,
        es: `
            <p>Beneficios de usar los informes de historial verificados de vehículos y barcos de Global Ride Report:</p>
            
            <ul>
                <li>Confianza en las decisiones de compra/venta</li>
                <li>Datos de historial precisos y verificados de fuentes confiables</li>
                <li>Transacciones seguras en todo el mundo con cobertura internacional</li>
                <li>Transparencia que genera confianza con compradores y vendedores</li>
                <li>Datos completos que incluyen accidentes, propiedad y especificaciones</li>
                <li>Protección contra fraudes y tergiversaciones</li>
            </ul>
            
            <h2>Por Qué Elegir Global Ride Report:</h2>
            <ol>
                <li>Cobertura internacional en más de 190 países</li>
                <li>Datos obtenidos de registros oficiales y autoridades</li>
                <li>Protección de datos segura y encriptada</li>
                <li>Soporte multilingüe para clientes globales</li>
                <li>Entrega de informes rápida y confiable</li>
                <li>Equipo de soporte al cliente experto</li>
            </ol>
            
            <p>Global Ride Report garantiza que cada informe sea confiable, seguro y reconocido internacionalmente, brindándole tranquilidad ya sea que esté comprando o vendiendo vehículos, remolques o barcos en cualquier parte del mundo.</p>
            
            <blockquote>
                <p>Con millones de clientes satisfechos en todo el mundo, Global Ride Report se ha establecido como el socio confiable para la verificación del historial de vehículos y barcos en los mercados internacionales.</p>
            </blockquote>
        `,
        fr: `
            <p>Avantages de l'utilisation des rapports d'historique vérifiés de véhicules et bateaux de Global Ride Report :</p>
            
            <ul>
                <li>Confiance dans les décisions d'achat/vente</li>
                <li>Données d'historique précises et vérifiées provenant de sources fiables</li>
                <li>Transactions sûres dans le monde entier avec une couverture internationale</li>
                <li>Transparence qui renforce la confiance avec les acheteurs et les vendeurs</li>
                <li>Données complètes incluant les accidents, la propriété et les spécifications</li>
                <li>Protection contre la fraude et les fausses déclarations</li>
            </ul>
            
            <h2>Pourquoi Choisir Global Ride Report :</h2>
            <ol>
                <li>Couverture internationale dans plus de 190 pays</li>
                <li>Données provenant de registres officiels et d'autorités</li>
                <li>Protection des données sécurisée et cryptée</li>
                <li>Support multilingue pour les clients internationaux</li>
                <li>Livraison de rapports rapide et fiable</li>
                <li>Équipe de support client experte</li>
            </ol>
            
            <p>Global Ride Report garantit que chaque rapport est fiable, sécurisé et reconnu internationalement, vous offrant une tranquillité d'esprit que vous achetiez ou vendiez des véhicules, remorques ou bateaux n'importe où dans le monde.</p>
            
            <blockquote>
                <p>Avec des millions de clients satisfaits dans le monde entier, Global Ride Report s'est imposé comme le partenaire de confiance pour la vérification de l'historique des véhicules et bateaux sur les marchés internationaux.</p>
            </blockquote>
        `,
        zh: `
            <p>使用全球骑行报告经过验证的车辆和船只历史报告的好处：</p>
            
            <ul>
                <li>对购买/销售决策有信心</li>
                <li>来自可信来源的准确、验证的历史数据</li>
                <li>具有国际覆盖范围的全球安全交易</li>
                <li>透明度建立与买家和卖家的信任</li>
                <li>包括事故、所有权和规格的全面数据</li>
                <li>防止欺诈和虚假陈述</li>
            </ul>
            
            <h2>为什么选择全球骑行报告：</h2>
            <ol>
                <li>覆盖190多个国家的国际覆盖范围</li>
                <li>来自官方注册机构和当局的数据</li>
                <li>安全、加密的数据保护</li>
                <li>为全球客户提供多语言支持</li>
                <li>快速、可靠的报告交付</li>
                <li>专业的客户支持团队</li>
            </ol>
            
            <p>全球骑行报告确保每份报告都可靠、安全且国际认可，无论您在世界任何地方购买或销售车辆、拖车或船只，都能让您安心。</p>
            
            <blockquote>
                <p>凭借全球数百万满意客户，全球骑行报告已成为国际市场上车辆和船只历史验证的值得信赖的合作伙伴。</p>
            </blockquote>
        `
    }
}
        ];

        // Language and pagination settings
        let currentLanguage = 'en';
        const postsPerPage = 6;
        let currentPage = 1;

        // Initialize the blog
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize language
            initializeLanguage();
            
            // Check if we're on a blog post page or the blog listing
            const urlParams = new URLSearchParams(window.location.search);
            const postId = urlParams.get('post');
            
            if (postId) {
                displayBlogPost(parseInt(postId));
            } else {
                displayBlogPosts();
            }
            
            // Initialize other functionality
            initializeThemeToggle();
            initializeMobileNav();
            initializeScrollToTop();
            initializeParticles();
        });

        // Initialize language functionality
        function initializeLanguage() {
            const languageSelector = document.getElementById('language-selector');
            const mobileLanguageSelector = document.getElementById('mobile-language-selector');
            
            // Get saved language preference or default to English
            const savedLanguage = localStorage.getItem('language') || 'en';
            currentLanguage = savedLanguage;
            
            // Set the selectors to the current language
            languageSelector.value = currentLanguage;
            mobileLanguageSelector.value = currentLanguage;
            
            // Apply translations
            applyTranslations(currentLanguage);
            
            // Add event listeners for language changes
            languageSelector.addEventListener('change', function() {
                currentLanguage = this.value;
                localStorage.setItem('language', currentLanguage);
                applyTranslations(currentLanguage);
                
                // Refresh blog content with new language
                const urlParams = new URLSearchParams(window.location.search);
                const postId = urlParams.get('post');
                
                if (postId) {
                    displayBlogPost(parseInt(postId));
                } else {
                    displayBlogPosts();
                }
            });
            
            mobileLanguageSelector.addEventListener('change', function() {
                currentLanguage = this.value;
                localStorage.setItem('language', currentLanguage);
                applyTranslations(currentLanguage);
                
                // Refresh blog content with new language
                const urlParams = new URLSearchParams(window.location.search);
                const postId = urlParams.get('post');
                
                if (postId) {
                    displayBlogPost(parseInt(postId));
                } else {
                    displayBlogPosts();
                }
            });
        }

        // Apply translations to the page
        function applyTranslations(language) {
            const elements = document.querySelectorAll('[data-translate]');
            
            elements.forEach(element => {
                const key = element.getAttribute('data-translate');
                if (translations[language] && translations[language][key]) {
                    element.textContent = translations[language][key];
                }
            });
        }

        // Display blog posts with pagination
        function displayBlogPosts() {
            const blogGrid = document.getElementById('blogGrid');
            const pagination = document.getElementById('pagination');
            
            // Calculate start and end indices for current page
            const startIndex = (currentPage - 1) * postsPerPage;
            const endIndex = startIndex + postsPerPage;
            const currentPosts = blogPosts.slice(startIndex, endIndex);
            
            // Clear existing content
            blogGrid.innerHTML = '';
            
            // Display posts for current page
            currentPosts.forEach(post => {
                const blogCard = document.createElement('div');
                blogCard.className = 'card blog-card';
                blogCard.innerHTML = `
                    <div class="blog-card-img">
                        <img src="${post.image}" alt="${post.title[currentLanguage]}" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzUwIiBoZWlnaHQ9IjIyMCIgdmlld0JveD0iMCAwIDM1MCAyMjAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzNTAiIGhlaWdodD0iMjIwIiBmaWxsPSIjMEEzRDYyIi8+CjxwYXRoIGQ9Ik0xNzUgMTEwQzE3NSAxMjMuODA3IDE2My44MDcgMTM1IDE1MCAxMzVDMTM2LjE5MyAxMzUgMTI1IDEyMy44MDcgMTI1IDExMEMxMjUgOTYuMTkzMiAxMzYuMTkzIDg1IDE1MCA4NUMxNjMuODA3IDg1IDE3NSA5Ni4xOTMyIDE3NSAxMTBaIiBmaWxsPSIjMDBBRUVGIi8+CjxwYXRoIGQ9Ik0xNzUgMTEwQzE3NSAxMjMuODA3IDE2My44MDcgMTM1IDE1MCAxMzVDMTM2LjE5MyAxMzUgMTI1IDEyMy44MDcgMTI1IDExMEMxMjUgOTYuMTkzMiAxMzYuMTkzIDg1IDE1MCA4NUMxNjMuODA3IDg1IDE3NSA5Ni4xOTMyIDE3NSAxMTBaIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiLz4KPHBhdGggZD0iTTE1MCAxMjBMMTYwIDEwMEgxNDBMMTUwIDEyMFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo='; this.alt='${post.title[currentLanguage]}';">
                    </div>
                    <div class="blog-meta">
                        <span>${post.readTime[currentLanguage]}</span>
                    </div>
                    <h3>${post.title[currentLanguage]}</h3>
                    <p>${post.snippet[currentLanguage]}</p>
                    <a href="?post=${post.id}" class="btn btn-outline" data-translate="blog.read_more">Read More</a>
                `;
                blogGrid.appendChild(blogCard);
            });
            
            // Apply translations to newly created elements
            applyTranslations(currentLanguage);
            
            // Display pagination
            displayPagination();
        }

        // Display pagination buttons
        function displayPagination() {
            const pagination = document.getElementById('pagination');
            const totalPages = Math.ceil(blogPosts.length / postsPerPage);
            
            // Clear existing pagination
            pagination.innerHTML = '';
            
            // Previous button
            if (currentPage > 1) {
                const prevButton = document.createElement('button');
                prevButton.innerHTML = '<i class="fas fa-chevron-left"></i> <span data-translate="blog.previous">Previous</span>';
                prevButton.addEventListener('click', () => {
                    currentPage--;
                    displayBlogPosts();
                });
                pagination.appendChild(prevButton);
            }
            
            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement('button');
                pageButton.textContent = i;
                if (i === currentPage) {
                    pageButton.classList.add('active');
                }
                pageButton.addEventListener('click', () => {
                    currentPage = i;
                    displayBlogPosts();
                });
                pagination.appendChild(pageButton);
            }
            
            // Next button
            if (currentPage < totalPages) {
                const nextButton = document.createElement('button');
                nextButton.innerHTML = '<span data-translate="blog.next">Next</span> <i class="fas fa-chevron-right"></i>';
                nextButton.addEventListener('click', () => {
                    currentPage++;
                    displayBlogPosts();
                });
                pagination.appendChild(nextButton);
            }
            
            // Apply translations to newly created elements
            applyTranslations(currentLanguage);
        }

        // Display a single blog post
        function displayBlogPost(postId) {
            const post = blogPosts.find(p => p.id === postId);
            
            if (!post) {
                // If post not found, redirect to blog listing
                window.location.href = 'blog.php';
                return;
            }
            
            // Replace the blog section with the single post content
            const blogSection = document.querySelector('.blog-section');
            blogSection.innerHTML = `
                <div class="container">
                    <a href="blog.php" class="back-to-blog">
                        <i class="fas fa-arrow-left"></i> <span data-translate="blog.back_to_blog">Back to Blog</span>
                    </a>    
                    <div class="blog-content">
                 <center>   <div class="blog-content-img">
                            <img style="width:850px; height:400px; object-fit:cover; margin:auto; border-radius:20px; border:3px solid #0A3D62; box-shadow:0px 2px #333" src="${post.image}" alt="${post.title[currentLanguage]}" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDkwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjMEEzRDYyIi8+CjxwYXRoIGQ9Ik00NTAgMjAwQzQ1MCAyNDcuNjE0IDQxMS42MTQgMjg2IDM2NCAyODZDMzE2LjM4NiAyODYgMjc4IDI0Ny42MTQgMjc4IDIwMEMyNzggMTUyLjM4NiAzMTYuMzg2IDExNCAzNjQgMTE0QzQxMS42MTQgMTE0IDQ1MCAxNTIuMzg2IDQ1MCAyMDBaIiBmaWxsPSIjMDBBRUVGIi8+CjxwYXRoIGQ9Ik00NTAgMjAwQzQ1MCAyNDcuNjE0IDQxMS42MTQgMjg2IDM2NCAyODZDMzE2LjM4NiAyODYgMjc4IDI0Ny42MTQgMjc4IDIwMEMyNzggMTUyLjM4NiAzMTYuMzg2IDExNCAzNjQgMTE0QzQxMS42MTQgMTE0IDQ1MCAxNTIuMzg2IDQ1MCAyMDBaIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjQiLz4KPHBhdGggZD0iTTM2NCAyNDBMMzg4IDE4MEgzNDBMMzY0IDI0MFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo='; this.alt='${post.title[currentLanguage]}';">
                        </div></center>
                        <div class="blog-content-header">
                            <h1>${post.title[currentLanguage]}</h1>
                            <div class="blog-content-meta">
                                <span>${post.readTime[currentLanguage]}</span>
                            </div>
                        </div>
                        
                        <div class="blog-post-content">
                            ${post.fullContent[currentLanguage]}
                        </div>
                    </div>
                </div>
            `;
            
            // Apply translations to newly created elements
            applyTranslations(currentLanguage);
            
            // Update page title
            document.title = `${post.title[currentLanguage]} | Global Ride Report Blog`;
        }

        // Initialize Particle.js
        function initializeParticles() {
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
                                opacity: 0.5
                            }
                        },
                        push: {
                            particles_nb: 4
                        }
                    }
                },
                retina_detect: true
            });
        }

        // Theme Toggle Functionality
        function initializeThemeToggle() {
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
        }

        // Mobile Navigation Functionality
        function initializeMobileNav() {
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
        }

        // Scroll to Top Functionality
        function initializeScrollToTop() {
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
        }
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
                            }, 800);
                        }, 500);
                    }
                    loadingProgress.style.width = `${progress}%`;
                }, 300);
            } else {
                // Returning visitor - hide loading screen immediately
                loadingScreen.style.display = 'none';
                mainContent.style.display = 'block';
            }
        });
    </script>
</body>
</html>