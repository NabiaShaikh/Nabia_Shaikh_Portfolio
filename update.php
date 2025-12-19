<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nabia Shaikh | Contact Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <?php include'connection_form.php' ?>
    <link rel="stylesheet" href="form.css">
    <style>
           :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
      --secondary: #6366f1;
      --dark: #1e293b;
      --light: #f8fafc;
      --gray: #64748b;
      --gray-light: #e2e8f0;
      --success: #10b981;
      --danger: #ef4444;
      --text: #334155;
      --text-light: #94a3b8;
      --transition: all 0.3s ease;
      --shadow: 0 10px 30px -15px rgba(0, 0, 0, 0.1);
      --border-radius: 8px;
    }

    .dark {
      --primary: #3b82f6;
      --primary-dark: #2563eb;
      --secondary: #818cf8;
      --dark: #f8fafc;
      --light: #0f172a;
      --gray: #94a3b8;
      --gray-light: #1e293b;
      --text: #e2e8f0;
      --text-light: #64748b;
      --shadow: 0 10px 30px -15px rgba(2, 12, 27, 0.7);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 80px;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light);
      color: var(--text);
      transition: var(--transition);
      overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      line-height: 1.2;
    }

    p {
      line-height: 1.7;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    section {
      padding: 5rem 0;
    }

    .section-heading {
      text-align: center;
      margin-bottom: 3rem;
      position: relative;
    }

    .section-heading h2 {
      font-size: 2.5rem;
      color: var(--dark);
      margin-bottom: 1rem;
      display: inline-block;
    }

    .section-heading h2::after {
      content: '';
      position: absolute;
      width: 50px;
      height: 4px;
      background: var(--primary);
      border-radius: 2px;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
    }

    .section-heading p {
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto;
    }

    .btn {
      display: inline-block;
      padding: 0.8rem 2rem;
      background-color: var(--primary);
      color: white;
      border: none;
      border-radius: var(--border-radius);
      font-size: 1rem;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      transition: var(--transition);
      box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    }

    .btn:hover {
      background-color: var(--primary-dark);
      transform: translateY(-3px);
    }

    .btn:active {
      transform: translateY(1px);
    }

    .btn-outline {
      background-color: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
    }

    .btn-outline:hover {
      background-color: var(--primary);
      color: white;
    }

    .btn-sm {
      padding: 0.5rem 1.25rem;
      font-size: 0.875rem;
    }

    /* Header */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
      z-index: 1000;
      transition: var(--transition);
    }

    .dark header {
      background-color: rgba(15, 23, 42, 0.9);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .header-scrolled {
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--dark);
      text-decoration: none;
    }

    .logo span {
      color: var(--primary);
    }

    .nav-links {
      display: flex;
      list-style: none;
      margin-bottom: 0;
    }

    .nav-item {
      margin: 0 1rem;
    }

    .nav-link {
      color: var(--dark);
      text-decoration: none;
      padding: 0.5rem;
      font-weight: 500;
      transition: var(--transition);
    }

    .nav-link:hover,
    .nav-link.active {
      color: var(--primary);
    }

    .theme-toggle {
      background: none;
      border: none;
      color: var(--dark);
      font-size: 1.2rem;
      cursor: pointer;
      transition: var(--transition);
      margin-left: 1.5rem;
    }

    .theme-toggle:hover {
      color: var(--primary);
    }

    .menu-toggle {
      display: none;
      background: none;
      border: none;
      color: var(--dark);
      font-size: 1.5rem;
      cursor: pointer;
    }

    /* Hero Section */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      background-image:
        radial-gradient(circle at 10% 20%, rgba(91, 104, 235, 0.05) 0%, rgba(0, 0, 0, 0) 65%),
        radial-gradient(circle at 90% 70%, rgba(91, 204, 235, 0.05) 0%, rgba(0, 0, 0, 0) 65%);
      position: relative;
      overflow: hidden;
    }

    .hero-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .hero-name {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: var(--primary-dark);
    }

    .hero-title {
      font-size: 1.5rem;
      color: var(--primary);
      margin-bottom: 1.5rem;
    }

    .hero-desc {
      margin-bottom: 2.5rem;
      max-width: 500px;
      color: var(--text-light);
    }

    .hero-image {
      flex: 1;
      min-width: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .profile-img {
      width: 300px;
      height: 300px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid var(--gray);
      box-shadow: 0 0 50px var(--gray);
      animation: float 3s ease-in-out infinite;
      filter: grayscale(0.2) contrast(1.1);
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    .hero-social {
      margin-top: 2.5rem;
      display: flex;
      gap: 1.25rem;
    }

    .hero-social a {
      font-size: 1.25rem;
      color: var(--dark);
      transition: var(--transition);
    }

    .hero-social a:hover {
      color: var(--primary);
      transform: translateY(-3px);
    }

    /* About Section */
    .about-content {
      display: flex;
      align-items: flex-start;
      gap: 3rem;
      flex-wrap: wrap;
    }

    .about-text {
      flex: 1;
      min-width: 300px;
    }

    .about-skills {
      flex: 1;
      min-width: 300px;
    }

    .skill-category {
      margin-bottom: 2rem;
    }

    .skill-category h3 {
      margin-bottom: 1rem;
      color: var(--dark);
      font-size: 1.25rem;
    }

    .skill-list {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .skill-item {
      background-color: var(--gray-light);
      color: var(--dark);
      padding: 0.5rem 1rem;
      border-radius: var(--border-radius);
      font-size: 0.875rem;
      font-weight: 500;
      transition: var(--transition);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .skill-item:hover {
      background-color: var(--primary);
      color: white;
    }

    .skill-item i {
      font-size: 1rem;
    }

    .tech-stack {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .tech-icon {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      transition: var(--transition);
    }

    .tech-icon:hover {
      transform: translateY(-5px);
    }

    .tech-icon i {
      font-size: 2.5rem;
      color: var(--primary);
    }

    .tech-name {
      font-size: 0.75rem;
      color: var(--text-light);
    }

    /* Projects Section */
    .projects-filter {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2.5rem;
    }

    .filter-btn {
      background: var(--gray-light);
      color: var(--text);
      border: none;
      padding: 0.5rem 1.25rem;
      border-radius: var(--border-radius);
      cursor: pointer;
      transition: var(--transition);
      font-weight: 500;
    }

    .filter-btn:hover,
    .filter-btn.active {
      background-color: var(--primary);
      color: white;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 2rem;
    }

    .project-card {
      background-color: white;
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }

    .dark .project-card {
      background-color: var(--gray-light);
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px -20px rgba(0, 0, 0, 0.2);
    }

    .project-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .project-content {
      padding: 1.5rem;
    }

    .project-title {
      font-size: 1.25rem;
      margin-bottom: 0.75rem;
      color: var(--dark);
    }

    .project-desc {
      margin-bottom: 1.25rem;
      color: var(--text-light);
      font-size: 0.875rem;
    }

    .project-tech {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }

    .project-tech span {
      background-color: var(--gray-light);
      color: var(--text);
      padding: 0.25rem 0.75rem;
      border-radius: var(--border-radius);
      font-size: 0.75rem;
    }

    .project-links {
      display: flex;
      gap: 1rem;
    }

    /* Services Section */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
    }

    .service-card {
      background-color: white;
      padding: 2.5rem 2rem;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
      text-align: center;
      transition: var(--transition);
    }

    .dark .service-card {
      background-color: var(--gray-light);
    }

    .service-card:hover {
      transform: translateY(-10px);
      border-color: var(--primary);
      box-shadow: 0 10px 30px var(--primary);
    }

    .service-icon {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .service-title {
      font-size: 1.25rem;
      margin-bottom: 1rem;
      color: var(--dark);
    }

    .service-desc {
      color: var(--text-light);
      font-size: 0.875rem;
    }


    /* Contact Section */
    .contact-content {
      display: flex;
      flex-wrap: wrap;
      gap: 3rem;
    }

    .contact-info {
      flex: 1;
      min-width: 300px;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .contact-icon {
      font-size: 1.25rem;
      color: var(--primary);
    }

    .contact-details h4 {
      margin-bottom: 0.25rem;
      color: var(--dark);
      font-size: 1.125rem;
    }

    .contact-details p {
      color: var(--text-light);
    }

    .contact-form {
      flex: 1;
      min-width: 300px;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      display: block;
      margin-bottom: 0.5rem;
      color: var(--dark);
      font-weight: 500;
    }

    .form-input {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid var(--gray-light);
      border-radius: var(--border-radius);
      background-color: white;
      color: var(--text);
      transition: var(--transition);
    }

    .dark .form-input {
      background-color: var(--gray-light);
      border-color: var(--gray);
      color: var(--text);
    }

    .form-input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
    }

    .form-textarea {
      min-height: 150px;
      resize: vertical;
    }

    .form-submit {
      width: 100%;
    }

    .message-status {
      margin-top: 1rem;
      padding: 1rem;
      border-radius: var(--border-radius);
      text-align: center;
      display: none;
    }

    .message-success {
      background-color: rgba(16, 185, 129, 0.1);
      color: var(--success);
      border: 1px solid var(--success);
    }

    .message-error {
      background-color: rgba(239, 68, 68, 0.1);
      color: var(--danger);
      border: 1px solid var(--danger);
    }

    /* Footer */
    footer {
      background-color: var(--gray-light);
      padding: 2rem 0;
      text-align: center;
      margin-top: 3rem;
    }

    .footer-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
    }

    .footer-social {
      display: flex;
      gap: 1rem;
    }

    .footer-social a {
      font-size: 1.25rem;
      color: var(--dark);
      transition: var(--transition);
    }

    .footer-social a:hover {
       color: var(--primary);
      transform: translateY(-3px);
    }

    .footer-text {
      color: var(--text-light);
    }

    /* Loader */
    .loader {
      display: inline-block;
      width: 30px;
      height: 30px;
      border: 3px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      border-top-color: white;
      animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    /* Scroll to top */
    .scroll-top {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background-color: var(--primary);
      color: white;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
      z-index: 99;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .scroll-top.active {
      opacity: 1;
      visibility: visible;
    }

    .scroll-top:hover {
      background-color: var(--primary-dark);
      transform: translateY(-3px);
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    /* =========================
   REMOVE HORIZONTAL GAP
========================= */

    html,
    body {
      width: 100%;
      max-width: 100%;
      overflow-x: hidden;
    }

    /* Prevent images & sections overflow */
    img,
    section,
    div {
      max-width: 100%;
    }

    .hero {
      overflow: hidden;
    }

    .nav-links {
      box-sizing: border-box;
    }

    .scroll-top {
      right: 1rem;
    }

    /* ================================
   Mobile S (320px)
================================ */
    @media (max-width: 320px) {

      .hero-name {
        font-size: 1.7rem;
      }

      .hero-title {
        font-size: 1rem;
      }

      .profile-img {
        width: 180px;
        height: 180px;
        margin-top: 25px;
      }

      .btn {
        padding: 0.6rem 1.0rem;
        font-size: 0.85rem;
      }

      .hero-cta {
        margin-right: 15px;
      }

      .para {
        padding-right: 10px;
      }

      .hero-social {
        justify-content: center;
      }

      .project-card {
        margin-right: 20px;
      }

      .container {
        justify-items: center;
      }

      #contactForm {
        margin-right: 20px;
        
      }
      .contact-content {
    flex-direction: column;
    align-items: center;
    width: 50%;
    height: 120%;
    margin: auto;
    padding-top: 4%;
    padding-bottom: 4%;
    border-radius: 20px;
    
  }
      
    }


    /* ================================
   Mobile M (375px)
================================ */
    @media (max-width: 375px) {

      .hero-name {
        font-size: 1.9rem;
      }

      .hero-title {
        font-size: 1.1rem;
      }

      .profile-img {
        width: 250px;
        height: 250px;
        margin-top: 25px;
      }
    }


    /* ================================
   Mobile L (425px)
================================ */
    @media (max-width: 425px) {

      .hero-content {
        flex-direction: column-reverse;
        text-align: center;
      }

      .hero-social {
        justify-content: center;
      }

      .projects-grid,
      .services-grid {
        grid-template-columns: 1fr;
      }

      .btn {
        padding: 0.6rem 1.3rem;
        font-size: 0.85rem;
      }

      #con {
        margin-right: 10px;
      }

      .para {
        margin-right: 10px;
      }

      .profile-img {
        margin-top: 25px;
      }
    }


    /* ================================
   Tablet (768px)
================================ */
    @media (max-width: 768px) {

      /* Navbar */
      .menu-toggle {
        display: block;
      }

      .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--light);
        flex-direction: column;
        align-items: center;
        gap: 1.5rem;
        padding: 2rem 0;
        display: none;
      }

      .nav-links.active {
        display: flex;
      }

      /* Layout */
      .about-content,
      .contact-content {
        flex-direction: column;
      }

      .projects-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      }
    }

    /* ===== Tablet Fix (768px) ===== */
    @media (max-width: 768px) {

      /* Hero buttons one line */
      .hero-cta {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: nowrap;
      }

      .hero-cta .btn {
        width: auto;
        white-space: nowrap;
      }

      /* Moon + Menu in one line */
      .nav-right {
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }
    }


    /* ================================
   Laptop (1024px)
================================ */
    @media (max-width: 1024px) {

      .hero-name {
        font-size: 2.4rem;
      }

      .hero-title {
        font-size: 1.3rem;
      }

      .projects-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      }
    }

    /* =========================
   MOBILE MENU FIX
========================= */

    @media (max-width: 768px) {

      .menu-toggle {
        display: block;
        z-index: 1100;
      }

      .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--light);
        display: none;
        flex-direction: column;
        align-items: center;
        padding: 2rem 0;
        z-index: 1000;
      }

      .nav-links.active {
        display: flex;
      }

      .dark .nav-links {
        background: var(--light);
      }
    }
 .contact-content {
    flex-direction: column;
    align-items: center;
    width: 50%;
    height: 120%;
    margin: auto;
    padding-top: 4%;
    padding-bottom: 4%;
    border-radius: 20px;
    
  }
  .contact-content:hover {
      transform: translateY(-10px);
      border-color: var(--primary);
      box-shadow: 0 10px 30px var(--primary);
    }

   /* =========================
   GLASS AESTHETIC BACKGROUND
========================= */

body {
  background: linear-gradient(135deg, #f8fafc, #eef2ff);
  color: var(--text);
}

/* Glass contact card */
.contact-content {
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border-radius: 20px;
  padding: 4%;
  margin: auto;
  box-shadow: 0 20px 45px rgba(37, 99, 235, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.4);
  transition: all 0.4s ease;
}

/* Hover animation */
.contact-content:hover {
  transform: translateY(-10px) scale(1.01);
  box-shadow: 0 30px 60px rgba(37, 99, 235, 0.3);
}

/* Inputs glass feel */
.form-input {
  background: rgba(255, 255, 255, 0.6);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0, 0, 0, 0.08);
}

/* =========================
   DARK MODE GLASS
========================= */

.dark body {
  background: linear-gradient(135deg, #0f172a, #1e293b);
}

.dark .contact-content {
  background: rgba(30, 41, 59, 0.75);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.dark .form-input {
  background: rgba(30, 41, 59, 0.6);
  color: #e5e7eb;
}
/* =========================
   CLEAN & SIMPLE FORM STYLE
========================= */

.contact-form {
  width: 100%;
}

#contactForm {
  display: flex;
  flex-direction: column;
  gap: 0.8rem;
}

/* Label */
.form-label {
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--dark);
  margin-bottom: 2px;
}

/* Input fields */
.form-input {
  width: 100%;
  padding: 0.7rem 0.9rem;
  border-radius: 6px;
  border: 1px solid #d1d5db;
  background-color: #ffffff;
  font-size: 0.9rem;
  transition: border-color 0.25s ease, box-shadow 0.25s ease;
}

/* Focus effect */
.form-input:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.15);
}

/* Remove extra br space */
#contactForm br {
  display: none;
}

/* Buttons */
.form-submit {
  margin-top: 0.6rem;
  padding: 0.75rem;
  border-radius: 6px;
  font-weight: 500;
}

/* Secondary button (Check) */
.contact-form a.form-submit {
  background: #f1f5f9;
  color: var(--dark);
  border: 1px solid #cbd5f5;
}

.contact-form a.form-submit:hover {
  background: #e2e8f0;
}

/* Dark mode */
.dark .form-label {
  color: #e5e7eb;
}

.dark .form-input {
  background-color: #0f172a;
  border-color: #334155;
  color: #e5e7eb;
}

.dark .contact-form a.form-submit {
  background: #1e293b;
  border-color: #334155;
}
 
    </style>
           
</head>

<body>
<!-- Header -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="logo">Nabia<span>Shaikh</span></a>
                <div class="nav-links" id="navLinks">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="index.php" class="nav-link">About</a>
                    <a href="index.php" class="nav-link">Projects</a>
                    <a href="index.php" class="nav-link">Services</a>
                    <a href="form.php" class="nav-link">Contact</a>
                    
                </div>
                <div class="nav-right">
                    <button class="theme-toggle" id="themeToggle">
                        <i class="fas fa-moon"></i>
                    </button>
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <section id="contact" class="contact">
    <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <h2>Contact Me</h2>
                <p>Get in touch for collaborations or inquiries</p>
            </div>
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Pakistan.</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>nabiafatima120@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>+92  319-394-7457</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Website</h4>
                            <p>https://github.com/NabiaShaikh</p>
                        </div>
                    </div>
                </div>

        <!-- Sign Up Form -->
         <div class="contact-form" data-aos="fade-left" data-aos-delay="400">
        <form id="signinForm" class="form active" onsubmit="return handleSignIn(event)" method="post">
            <div class="message" id="signinSuccess"></div>
            <div class="error" id="signinError"></div>
            <?php 
    include 'connection_form.php';

    
        $id=$_GET['id'];
        //show id
        $showquery="select * from sign_form1 where id=$id";

        $showdata=mysqli_query($con,  $showquery);

        $arrdata=mysqli_fetch_array($showdata);

    if(isset($_POST['submit'])){

        $idupdate=$_GET['id'];

        $username=$_POST['user'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

       
        $update_query=" update sign_form1 set id=$id, username='$username', password='$password', 
        email='$email',phone='$phone' where id= $idupdate ";

          $result= mysqli_query($con , $update_query);
          if(  $result){
            ?>
            <script>
                alert("update the data")
            </script>
            <?php
          }
          else {
            ?>
            <script>
                alert("update not the data")
            </script>
            <?php
          }
    }
   
    ?>
            <label for="message" class="form-label">Name</label>
            <input type="text" id="signupUsername"  class="form-input" placeholder="" name="user" value="<?php echo 
        $arrdata['username'] ;?>">
            <br><br>
           <label for="message" class="form-label">Password</label>
            <input type="password" id="signupPassword" class="form-input" placeholder="" required name="password" value="<?php echo 
        $arrdata['password'] ;?>">
           <br><br>
            <label for="message" class="form-label">Email</label>
            <input type="email" id="signupPassword" class="form-input" placeholder="" required name="email" value="<?php echo 
        $arrdata['email'] ;?>">
           <br><br>
            <label for="message" class="form-label">Contact Number</label>
            <input type="int" id="signupPassword" class="form-input" placeholder="" required name="phone" value="<?php echo 
        $arrdata['phone'] ;?>">
            <br><br>
            <input type="submit" value="Submit" class="btn form-submit"  value="Sign Up" name="submit">
            <br><br>
            <a href="display.php" class="btn form-submit" style=" text-align: center;" >Check</a>
              <div id="messageSuccess" class="message-status message-success">
                            Thank you for your message! I'll get back to you soon.
                        </div>
                        <div id="messageError" class="message-status message-error">
                            Oops! Something went wrong. Please try again later.
                        </div>
        </form>
      </div>
      </div>
    </div>
</section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-social">
                    <a href="javascript:void(0)" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/NabiaShaikh" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="javascript:void(0)" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/_shk.01_/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <p class="footer-text">&copy; 2025 Nabia Shaikh. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
<script src="javascript.js" >
    document.addEventListener("DOMContentLoaded", () => {

  // AOS
  AOS.init({
    duration: 1000,
    once: true,
    mirror: false
  });

  const header = document.getElementById('header');
  const navLinks = document.getElementById('navLinks');
  const menuToggle = document.getElementById('menuToggle');
  const themeToggle = document.getElementById('themeToggle');
  const scrollTop = document.getElementById('scrollTop');
  const contactForm = document.getElementById('contactForm');
  const submitBtn = document.getElementById('submitBtn');
  const messageSuccess = document.getElementById('messageSuccess');
  const messageError = document.getElementById('messageError');
  const filterBtns = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  /* ===== MOBILE MENU ===== */
  menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    menuToggle.innerHTML = navLinks.classList.contains('active')
      ? '<i class="fas fa-times"></i>'
      : '<i class="fas fa-bars"></i>';
  });

  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('active');
      menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
    });
  });

  /* ===== THEME TOGGLE ===== */
  const getCurrentTheme = () => localStorage.getItem('theme') || 'light';

  const setTheme = (theme) => {
    document.body.classList.toggle('dark', theme === 'dark');
    localStorage.setItem('theme', theme);
    themeToggle.innerHTML = theme === 'dark'
      ? '<i class="fas fa-sun"></i>'
      : '<i class="fas fa-moon"></i>';
  };

  setTheme(getCurrentTheme());

  themeToggle.addEventListener('click', () => {
    setTheme(getCurrentTheme() === 'light' ? 'dark' : 'light');
  });

  /* ===== SCROLL ===== */
  window.addEventListener('scroll', () => {
    header.classList.toggle('header-scrolled', window.scrollY > 100);
    scrollTop.classList.toggle('active', window.scrollY > 500);
  });

  scrollTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  /* ===== PROJECT FILTER ===== */
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      projectCards.forEach(card => {
        card.style.display =
          filter === 'all' || card.dataset.category === filter
            ? 'block'
            : 'none';
      });
    });
  });

  /* ===== CONTACT FORM ===== */
  contactForm.addEventListener('submit', e => {
    e.preventDefault();

    submitBtn.innerHTML = '<div class="loader"></div>';
    submitBtn.disabled = true;
    messageSuccess.style.display = 'none';
    messageError.style.display = 'none';

    setTimeout(() => {
      submitBtn.innerHTML = '<span>Send Message</span>';
      submitBtn.disabled = false;
      messageSuccess.style.display = 'block';
      contactForm.reset();

      setTimeout(() => {
        messageSuccess.style.display = 'none';
      }, 5000);
    }, 1500);
  });

});
const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

menuToggle.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});


</script>
</body>

</html>
 <!-- <form id="signinForm" class="form active" onsubmit="return handleSignIn(event)" method="post">
            <div class="message" id="signinSuccess"></div>
            <div class="error" id="signinError"></div>
            
    <?php 
    include 'connection_form.php';

    
        $id=$_GET['id'];
        //show id
        $showquery="select * from sign_form1 where id=$id";

        $showdata=mysqli_query($con,  $showquery);

        $arrdata=mysqli_fetch_array($showdata);

    if(isset($_POST['submit'])){

        $idupdate=$_GET['id'];

        $username=$_POST['user'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

       
        $update_query=" update sign_form1 set id=$id, username='$username', password='$password', 
        email='$email',phone='$phone' where id= $idupdate ";

          $result= mysqli_query($con , $update_query);
          if(  $result){
            ?>
            <script>
                alert("update the data")
            </script>
            <?php
          }
          else {
            ?>
            <script>
                alert("update not the data")
            </script>
            <?php
          }
    }
   
    ?>
            <input type="text" id="signupUsername" placeholder="Username" name="user" value="<?php echo 
        $arrdata['username'] ;?>">
            <input type="password" id="signupPassword" placeholder="Password" required name="password" value="<?php echo 
        $arrdata['password'] ;?>">
            <input type="email" id="signupPassword" placeholder="Email" required name="email" value="<?php echo 
        $arrdata['email'] ;?>">
            <input type="int" id="signupPassword" placeholder="Contact Number" required name="phone" value="<?php echo 
        $arrdata['phone'] ;?>">
            <input type="submit" value="Sign Up" name="submit">
            <a href="display.php">check</a>
        </form> -->