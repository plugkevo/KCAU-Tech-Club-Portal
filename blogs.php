<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KCA TECH BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
    .light-theme {
    /**light theme colors */
    --background-primary: #3D1383;
    --background-secondary:#9E8605 ;
    --action-primary: hsl(214, 32%, 91%);
    --action-secondary: hsl(210, 38%, 95%);
    --foreground-primary: hsl(218, 23%, 23%);
    --foreground-secondary: hsl(216, 15%, 52%);
    --foreground-tertiary: hsl(214, 20%, 69%);
    --accent: hsl(229, 76%, 66%);
    }
    .dark-theme {
    /*** dark theme colors */
    --background-primary: hsl(218, 23%, 23%);
    --background-secondary: hsl(220, 26%, 14%);

    --action-primary: hsl(216, 15%, 52%);
    --action-secondary: hsl(218, 23%, 23%);

    --foreground-primary: hsl(210, 38%, 95%);
    --foreground-secondary: hsl(211, 25%, 84%);
    --foreground-tertiary: hsl(214, 20%, 69%);

    --accent: hsl(229, 76%, 66%);

    }

    :root {

    /**
    * color
    */

    --white: hsl(0, 0%, 100%);

    /**
    * typography 
    */

    --fs-base: 0.85rem;
    --fs-1: 1.875rem;
    --fs-2: 1.5rem;
    --fs-3: 1.25rem;
    --fs-4: 0.875rem;
    --fs-5: 0.75rem;

    /**
    * spacing 
    */

    --py: 5rem;

    }





    /*-----------------------------------*\ 
    #RESET
    \*-----------------------------------*/

    *, *::before, *::after {
    margin:  0;
    padding: 0;
    box-sizing: border-box;
    }

    a { text-decoration: none; }

    li { list-style: none; }

    img, button { display: block; }

    a, span { display: inline-block; }

    button {
    font: inherit;
    border: none;
    background: none;
    cursor: pointer;
    }

    html {
    font-family: "Inter", sans-serif;
    font-size: var(--fs-base); /* base font-size (0.85rem = 13.6px) */
    line-height: 1.8;
    }

    :focus { outline-offset: 4px; }


    /**
    * scrollbar style
    */

    ::-webkit-scrollbar { width: 16px; }


    ::-webkit-scrollbar-thumb {
    background: var(--accent);
    border-radius: 20px;
    border: 4px solid;
    }

    .light-theme::-webkit-scrollbar-thumb { border-color: hsl(0, 0%, 90%); }

    .dark-theme::-webkit-scrollbar-thumb { border-color: hsl(219, 27%, 20%); }

    .light-theme::-webkit-scrollbar-track { background: hsl(0, 0%, 90%); }

    .dark-theme::-webkit-scrollbar-track { background: hsl(219, 27%, 20%); }
    /*-----------------------------------*\ 
    #BASE STYLE
    \*-----------------------------------*/
    .h1,
    .h2,
    .h3,
    .h4 {
    display: block;
    color: var(--foreground-primary);
    }
    .h1 {
    font-size: var(--fs-1);
    font-weight: 900;
    }
    .h2 {
    font-size: var(--fs-2);
    font-weight: 700;
    }
    .h3 {
    font-size: var(--fs-3);
    font-weight: 700;
    }
    .h4 {
    font-size: var(--fs-4);
    font-weight: 700;
    }
    .text-sm { font-size: var(--fs-4); }
    .text-tiny { font-size: var(--fs-5); }
    /*-----------------------------------*\ 
    #REUSED STYLE
    \*-----------------------------------*/
    .container {
    margin-inline: auto;
    margin: auto; /* fallback for margin-inline */
    padding: 0 15px;
    }
    .btn {
    min-width: 10rem;
    border-radius: 100px;
    }
    .btn-primary {
    background: var(--accent);
    color: var(--white);
    padding: 0.6875rem 1.1875rem;
    }
    .btn-primary:hover {
    background: var(--foreground-secondary);
    color: var(--action-primary);
    }
    .btn-secondary {
    background: var(--action-secondary);
    color: var(--foreground-secondary);
    padding: 0.5rem 1rem;
    border: 3px solid var(--foreground-tertiary);
    }

    .btn-secondary:hover { border-color: var(--accent); }





    /*-----------------------------------*\ 
    #Extra style for dark theme
    \*-----------------------------------*/

    .dark-theme .btn-primary:hover { color: var(--background-primary); }
    .dark-theme .blog-topic {
        background: var(--action-primary);
        color: var(--foreground-secondary);
    }
    .dark-theme .blog-topic:hover {
        background: var(--foreground-primary);
        color: var(--action-primary);
    }
        .dark-theme .load-more:hover { color: var(--white); }
        .dark-theme .aside .h2 { color: var(--foreground-primary); }
    /*-----------------------------------*\ 
    #HEADER
    \*-----------------------------------*/
    header { background: var(--background-primary); }
    header .flex-wrapper { display: none; }
    .navbarr {
    display:         flex;
    justify-content: space-between;
    align-items:     center;
    gap: 15px;
    padding: 15px 0;
    }
    .logo-light,
    .logo-dark { display: none; }
    .light-theme .logo-light,
    .dark-theme .logo-dark { display: block; }
    header .btn-group {
    display:     flex;
    align-items: center;
    gap: 15px;
    }
    .theme-btn-mobile,
    .nav-menu-btn,
    .nav-close-btn {
        background: var(--action-secondary);
        color: var(--foreground-tertiary);
        width:  40px;
        height: 40px;
        display:         flex;
        justify-content: center;
        align-items:     center;
        border-radius: 50%;
        font-size: 25px;
    }
    :is(.theme-btn-mobile,
    .nav-menu-btn,
    .nav-close-btn):hover {
        background: var(--accent);
        color: var(--white);
    }
    .theme-btn-mobile ion-icon { display: none; }
    .theme-btn-mobile.light .sun,
    .theme-btn-mobile.dark .moon { display: block; }
    .mobile-nav {
        position: fixed;
        inset: 0;
        background: var(--background-primary);
        padding: 70px 20px;
        overflow: auto;
        overscroll-behavior: contain;
        transform: translateX(100%);
        visibility: hidden;
        transition: 0.5s cubic-bezier(1, 0, 0.30, 0.70);
        z-index: 10;
    }
    .mobile-nav.active {
        transform: translateX(0);
        visibility: visible;
    }
    .nav-close-btn {
        position: absolute;
        top:   20px;
        right: 20px;
    }
    .mobile-nav .wrapper {
        padding-bottom: 1.25rem;
        margin-bottom:  1.25rem;
        border-bottom: 1px solid var(--action-primary);
    }
    .mobile-nav .nav-title { margin-bottom: 1rem; }
    .mobile-nav .nav-item { margin-bottom: 0.5rem; }
    .mobile-nav .nav-link {
        font-size: var(--fs-3);
        color: var(--foreground-secondary);
    }
    .mobile-nav .nav-link:hover { color: var(--accent); }
    /*-----------------------------------*\ 
    #HERO SECTION
    \*-----------------------------------*/
    .hero {
        background: var(--background-primary);
        padding-top:    2rem;
        padding-bottom: var(--py);
        text-align: center;
    }
    .hero .h1 {
        margin-bottom: 1rem;
        line-height: 1.6;
    }
    .hero b {
        color: var(--accent);
        font-weight: inherit;
    }
    .hero .h3 {
        color: var(--foreground-secondary);
        margin-bottom: 2rem;
    }
    .hero .btn-group {
        display:         flex;
        justify-content: center;
        flex-wrap:       wrap;
        gap: 15px;
        text-align: center;
    }
    .hero .right { display: none; }
    /*-----------------------------------*\ 
    #BLOG SECTION
    \*-----------------------------------*/
    .main {
        background: var(--background-secondary);
        padding: var(--py) 0;
    }
    .blog .h2 {
        line-height: 1.3;
        margin-bottom: 3rem;
        text-align: center;
    }
    .blog-card-group { margin-bottom: 3rem; }
    .blog-card {
        background: var(--background-primary);
        padding: 10px;
        margin-bottom: 1rem;
        border-radius: 10px;
        box-shadow: 0 10px 10px hsla(0, 0%, 0%, 0.05);
        transition: 0.25s ease;
    }

    .blog-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 10px hsla(0, 0%, 0%, 0.1);
    }
    .blog-card-banner { display: none; }
    .blog-content-wrapper { padding: 10px 5px; }
    .blog-topic {
        background: var(--action-secondary);
        color: var(--foreground-secondary);
        font-weight: 600;
        padding: 0.25rem 1rem;
        border-radius: 5px;
        margin-bottom: 1rem;
    }
    .blog-topic:hover {
        background: var(--foreground-secondary);
        color: var(--action-secondary);
    }
    .blog-card .h3 {
        line-height: 1.4;
        margin-bottom: 1rem;
    }
    .blog-card .h3:hover {
        text-decoration: underline;
        text-decoration-thickness: 2px;
    }
    .blog-text,
    .profile-wrapper { display: none; }
    .blog .wrapper {
        display:         flex;
        justify-content: space-between;
        align-items:     center;
        flex-wrap:       wrap;
        gap: 15px;
    }
    .blog .h4 { color: var(--foreground-secondary); }
    .blog .h4:hover { color: var(--accent); }
    .blog .text-sm {
        display:     flex;
        align-items: center;
        gap: 5px;
        color: var(--foreground-tertiary);
    }
    .blog .separator {
        background: var(--foreground-tertiary);
        margin-inline: 3px;
        margin: 0 3px; /* fallback for margin-inline */
        width:  3px;
        height: 3px;
        border-radius: 3px;
    }
    .blog ion-icon { --ionicon-stroke-width: 50px; }
    .load-more {
        margin-inline: auto;
        margin: auto; /* fallback for margin-inline */
        background: var(--foreground-secondary);
        color: var(--background-secondary);
        padding: 0.6875rem 1.1875rem;
    }
    .load-more:hover { background: var(--accent); }

    /*-----------------------------------*\ 
    #ASIDE
    \*-----------------------------------*/
    .aside { display: none; }
    /*-----------------------------------*\ 
    #FOOTER
    \*-----------------------------------*/
    footer { background: var(--background-primary); }
    footer .container {
        padding: var(--py) 15px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
    }
    footer .wrapper { text-align: center; }
    .footer-logo { margin-bottom: 10px; }
    .footer-text {
        color: var(--foreground-secondary);
        max-width: 300px;
        margin-inline: auto;
        margin: auto; /* fallback for margin-inline */
    }
    .footer-title {
        color: var(--foreground-primary);
        font-weight: 700;
        margin-bottom: 0.4rem;
    }
    .footer-link { color: var(--foreground-secondary); }
    .footer-link:hover { color: var(--accent); }
    .copyright {
        color: var(--foreground-secondary);
        font-size: var(--fs-4);
        text-align: center;
        padding: 1rem;
        border-top: 1px solid var(--action-primary);
    }
    .copyright a {
        color: var(--accent);
        font-weight: 500;
    }
    .copyright a:hover { text-decoration: underline; }
    /*-----------------------------------*\ 
    #MEDIA QUERIES
    \*-----------------------------------*/
    /**
    * responsive for larger than 550px screen
    */
    @media (min-width: 550px) {
    :root {
        /**
        * typography 
        */
        --fs-base: 0.90rem;
    }
    /**
    * BLOG 
    */
    .blog-card {
        display: grid;
        grid-template-columns: 3fr 4fr;
        gap: 20px;
    }
    .blog-card-banner {
        display: block;
        overflow: hidden;
        border-radius: 5px;
    }
    .blog-banner-img {
        width:  100%;
        height: 100%;
        object-fit: cover;
    }
    }
    /**
    * responsive for larger than 650px screen
    */
    @media (min-width: 650px) {
    :root {
        /**
        * typography 
        */
        --fs-1: 2.25rem;
    }
    /**
    * REUSED STYLE 
    */
    .container { padding: 0 30px; }
    /**
    * HEADER 
    */
    .navbar { padding: 30px 0; }
    /**
    * BLOG 
    */
    .blog .h2 {
        position: relative;
        text-align: left;
        padding-left: 2rem;
    }
    .blog .h2::before {
        content: '';
        position: absolute;
        top:  0;
        left: 0;
        background: var(--action-primary);
        width:  5px;
        height: 100%;
        border-radius: 5px;
    }
    .blog-text,
    .profile-wrapper { display: block; }
    .blog-text {
        color: var(--foreground-secondary);
        font-size: var(--fs-4);
        display: -webkit-box;
        line-clamp: 3;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 1rem;
    }
    .blog .wrapper-flex {
        display:         flex;
        justify-content: start;
        align-items:     center;
        gap: 10px;
    }
    .profile-wrapper {
        width:  56px;
        height: 56px;
        background: var(--action-primary);
        padding: 3px;
        border-radius: 50%;
    }
    .profile-wrapper img { border-radius: 50%; }
    .blog .wrapper {
        flex-direction: column;
        align-items: start;
        gap: 0;
    }
    /**
    * FOOTER 
    */

    footer .container {
        padding: var(--py) 30px;
        grid-template-columns: 2fr 1fr 1fr;
    }
    footer .wrapper { text-align: left; }
    .footer-text { margin: 0; }
    }
    /**
    * responsive for larger than 768px screen
    */
    @media (min-width: 768px) {
    /**
    * REUSED STYLE 
    */
    .container { max-width: 800px; }

    }





    /**
    * responsive for larger than 1024px screen
    */

    @media (min-width: 1024px) {

    :root {

        /**
        * typography 
        */

        --fs-base: 1rem;
        --fs-1: 3rem;

    }



    /**
    * REUSED STYLE 
    */

    .container { max-width: 1150px; }



    /**
    * HEADER 
    */

    header .btn-group { display: none; }

    header .flex-wrapper {
        display: flex;
        gap: 30px;
    }

    .desktop-nav {
        display:     flex;
        align-items: center;
        gap: 30px;
    }

    .desktop-nav .nav-link {
        color: var(--foreground-secondary);
        font-weight: 700;
    }

    .desktop-nav .nav-link:hover { color: var(--accent); }

    .theme-btn-desktop {
        position: relative;
        background: var(--background-secondary);
        color: var(--white);
        width:  52px;
        height: 26px;
        display:         flex;
        justify-content: center;
        align-items:     center;
        gap: 10px;
        border-radius: 100px;
    }

    .theme-btn-desktop.light {
        background: linear-gradient(45deg, hsl(7, 100%, 71%), hsl(46, 100%, 65%));
    }

    .theme-btn-desktop.dark {
        background: linear-gradient(45deg, hsl(225, 100%, 60%), hsl(296, 80%, 40%));
    }

    .theme-btn-desktop::before {
        content: '';
        position: absolute;
        background: var(--white);
        width:  21px;
        height: 21px;
        border-radius: 30px;
        top: 50%;
        left: 3px;
        transform: translateY(-50%);
        box-shadow: 0 2px 10px -2px hsla(0, 0%, 0%, 0.05);
        z-index: 2;
    }
    .theme-btn-desktop.dark::before { left: calc(100% - 24px); }
    /**
    * HERO 
    */
    .hero { text-align: left; }
    .hero .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 50px;
    }
    .hero .btn-group {
        justify-content: start;
        gap: 30px;
    }
    .hero .right {
        position: relative;
        display:         flex;
        justify-content: center;
        align-items:     center;
    }
    .hero .pattern-bg {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        height: 200px;
        background: url(../images/pattern.png);
        background-size: contain;
        opacity: 0.2;
    }
    .hero .img-box {
        position: relative;
        z-index: 2;
    }
    .hero-img {
        width:  100%;
        height: 100%;
        object-fit: contain;
        border-radius: 0 0 280px 230px;
        transform: translate(10px, -10px);
    }
    .hero .shape {
        position: absolute;
        top:  50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -42%) rotate(-20deg);
    }
    .hero .shape-1 {
        background: var(--accent);
        width:  90%;
        height: 90%;
        z-index: -1;
    }
    .hero .shape-2 {
        width:  92%;
        height: 92%;
        box-shadow: inset 0 -30px 0 var(--action-primary);
        z-index: 2;
    }



    /**
    * MAIN 
    */

    .main .container {
        display: grid;
        grid-template-columns: 5fr 2fr;
        gap: 60px;
    }



    /**
    * ASIDE 
    */

    .aside {
        display: block;
        align-self: stretch;
    }

    .aside .h2 {
        color: var(--foreground-secondary);
        margin-bottom: 3rem;
        text-align: center;
        line-height: 1.3;
    }

    .aside .wrapper {
        background: var(--background-primary);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 5px 5px hsla(0, 0%, 0%, 0.05);
    }

    .topics { margin-bottom: 3rem; }

    .topic-btn {
        display:     flex;
        align-items: stretch;
        background: var(--background-primary);
        border-radius: 10px;
        box-shadow: 0 5px 5px hsla(0, 0%, 0%, 0.05);
        overflow: hidden;
    }

    .topic-btn:not(:last-child) { margin-bottom: 1rem; }

    .topic-btn .icon-box {
        font-size: 22px;
        width: 70px;
        display:         flex;
        justify-content: center;
        align-items:     center;
        background: var(--action-primary);
        color: var(--foreground-secondary);
    }

    .topic-btn:hover .icon-box {
        background: var(--accent);
        color: var(--white);
    }

    .topic-btn ion-icon { --ionicon-stroke-width: 40px; }

    .topic-btn p {
        padding: 15px;
        color: var(--foreground-secondary);
        font-weight: 700;
    }

    .tags { margin-bottom: 3rem; }

    .tags .wrapper {
        display:   flex;
        flex-wrap: wrap;
        gap: 0.2rem;
    }

    .tags .hashtag {
        background: var(--action-primary);
        color: var(--foreground-secondary);
        padding: 5px 10px;
        font-size: var(--fs-5);
        font-weight: 700;
        border-radius: 5px;
    }

    .tags .hashtag:hover {
        background: var(--foreground-secondary);
        color: var(--action-primary);
    }

    .contact { margin-bottom: 3rem; }

    .contact p {
        color: var(--foreground-secondary);
        margin-bottom: 1rem;
    }

    .social-link {
        display:         flex;
        justify-content: center;
        align-items:     center;
        gap: 10px;
    }

    .social-link .icon-box {
        width:  45px;
        height: 45px;
        background: var(--action-secondary);
        border-radius: 50%;
        display:         flex;
        justify-content: center;
        align-items:     center;
        font-size: 22px;
    }
    .social-link .discord { color: hsl(235, 86%, 65%); }
    .social-link .twitter { color: hsl(203, 89%, 53%); }
    .social-link .facebook { color: hsl(220, 46%, 48%); }
    .social-link .icon-box:hover {
        background: var(--accent);
        color: var(--white);
    }
    .newsletter {
        position: sticky;
        top: 3rem;
        margin-bottom: 98px;
    }
    .newsletter p {
        color: var(--foreground-secondary);
        margin-bottom: 1rem;
    }
    .newsletter input {
        border: none;
        background: var(--action-primary);
        display: block;
        width: 100%;
        padding: 0.5rem 1rem;
        font: inherit;
        color: var(--foreground-secondary);
        border-radius: 5px;
        margin-bottom: 1rem;
    }
    .newsletter input::placeholder { color: inherit; }
    .newsletter input:focus {
        outline: 2px solid;
        outline-offset: 0;
    }
    .newsletter .btn-primary {
        margin-inline: auto;
        margin: auto; /* fallback for margin-inline */
    }
    /**
    * FOOTER 
    */
    .footer-title { font-size: 1.125rem; }

    .footer-link { margin-bottom: 0.3rem; }

    }
    </style>
</head>
<body class="light-theme" style="margin-top: ">
  <!--HEADER-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 60px;">
    <div class="container-fluid nav">
        <a class="navbar-brand" href="#">
            <img src="images/Screenshot (192).png" alt="" width="40" height="30" class="d-inline-block align-text-top">
        </a>
        <a class="navbar-brand" href="#">KCAU Tech Club</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.php">Blogs</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="forum.php">Forums</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="job_board.php">Jobs</a>
                </li>                    
            </ul>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" style=" justify-content: end;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign_up.php">Sign Up</a>
                    </li>
                    <li class="nav-item" >
                        <a href="profile.php"><img src="images/download 4.jpeg" name="profile_img" style="height: 30px; width: 30px; border-radius: 50%;" alt=""></a>
                    </li>
                </ul>
            </div>              
        </div>
    </div>
</nav>
  <header class="fixed-top" style="margin-top: 60px; height: 65px;">
    <div class="container">
      <nav class="navbarr">
        <a href="#">
          <img src="images/logo-light.svg" alt="SimpleBlog logo" width="150" class="logo-light">
          <img src="images/logo-dark.svg" alt="SimpleBlog logo" width="150" class="logo-dark">
        </a>
        <div class="btn-group">
          <button class="theme-btn theme-btn-mobile light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>
          <button class="nav-menu-btn">
            <ion-icon name="menu-outline"></ion-icon>
          </button>
        </div>
        <div class="flex-wrapper">
          <ul class="desktop-nav">
            <li>
              <a href="#" class="nav-link"></a>
            </li>
            <li>
              <a href="#" class="nav-link">SEARCH BLOG</a>
            </li>
            <li>
              <a href="#" class="nav-link">POST BLOG</a>
            </li>
          </ul>
          <button class="theme-btn theme-btn-desktop light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>
        </div>
  </header>
        <div class="mobile-nav">
          <button class="nav-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>
          <div class="wrapper">
            <p class="h3 nav-title"></p>
            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link"></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"></a>
              </li>
            </ul>
          </div>
          <div>
            <p class="h3 nav-title">Topics</p>
            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Database</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Accessibility</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Web Performance</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <main style="margin-top: 125px;">
    <!--HERO SECTION-->
    <div class="hero">

      <div class="container">

        <div class="left">

          <h1 class="h1">
            BLOG WITH US <b>KCA TECH&nbsp; CLUB</b>.
            <br>WHERE TALENT MEETS GAME
          </h1>
          <p class="h3">
           <abbr title="Accessibility"></abbr>
          </p>
          <div class="btn-group">
            <a href="#" class="btn btn-primary">POST BLOG</a>
            <a href="#" class="btn btn-secondary">PLAY BLOG</a>
          </div>
        </div>
        <div class="right">
          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="images/blog-1.png" alt="" class="hero-img">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="container">
        <!--
          - BLOG SECTION
        -->
        <div class="blog">
          <h2 class="h2">Latest Blog Post</h2>
          <div class="blog-card-group">
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-1.png" alt="Building microservices with Dropwizard, MongoDB & Docker"
                  width="250" class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Database</button>
                <h3>
                  <a href="#" class="h3">
                    Building microservices with Dropwizard, MongoDB & Docker
                  </a>
                </h3>
                <p class="blog-text">
                  This NoSQL database oriented to documents (by documents like JSON) combines some of the features from
                  relational
                  databases, easy to use and the multi-platform is the best option for scale up and have fault
                  tolerance, load balancing,
                  map reduce, etc.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia Walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">MARCUS</a>
                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 17, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-2.png" alt="Fast web page loading on a $20 feature phone" width="250"
                  class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Web Performance</button>
                <h3><a href="" class="h3">Fast web page loading on a $20 feature phone</a></h3>
                <p class="blog-text">
                  Feature phones are affordable (under $20-25), low-end devices enabling 100s of millions of users in
                  developing countries
                  to leverage the web. Think of them as a light version of a smart phone.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">JOY MUNGAI</a>
                    <p class="text-sm">
                      <time datetime="2021-12-10">Dec 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-3.png" alt="Accessibility Tips for Web Developers" width="250"
                  class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Accessibility</button>
                <h3><a href="" class="h3">Accessibility Tips for Web Developers</a></h3>
                <p class="blog-text">
                  It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key
                  areas of
                  disability we can optimize for: visual, hearing, mobility, cognition, speech and neural. Many tools
                  and resources can
                  help here, even if you're totally new to web accessibility.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">DON THE MUNGA</a>
                    <p class="text-sm">
                      <time datetime="2021-11-28">Nov 28, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-4.png" alt="Dynamically Securing Databases using Hashicorp Vault"
                  width="250" class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Database</button>
                <h3><a href="" class="h3">Dynamically Securing Databases using Hashicorp Vault</a></h3>
                <p class="blog-text">
                  Nowadays, it's hard to profoundly talk about security in the IT industry, since it has to be
                  considered on so many
                  different levels: from securing code chunks, securing containers, up to securing complex
                  infrastructures and defining
                  strong authorization and authentication policies across the enterprise.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4"></a>
                    <p class="text-sm">
                      <time datetime="2021-11-20">Nov 20, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-5.png"
                  alt="Adaptive Loading - Improving Web Performance on low-end devices" width="250"
                  class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Web Performance</button>
                <h3><a href="" class="h3">Adaptive Loading - Improving Web Performance on low-end devices</a></h3>
                <p class="blog-text">
                  Adaptive Loading: Do not just respond based on screen size, adapt based on actual device hardware.
                  Any user can have a slow experience. In a world with widely varying device capabilities, a "one-size"
                  fits all
                  experience may not always work. Sites that delight users on high-end devices can be unusable on
                  low-end ones,
                  particularly on median mobile and desktop hardware and in emerging markets.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">PLUG _KEVO</a>
                    <p class="text-sm">
                      <time datetime="2021-11-10">Nov 10, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-6.png"
                  alt="Don't Develop Just for Yourself - A Developer's Checklist to Accessibility" width="250"
                  class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Accessibility</button>
                <h3><a href="" class="h3">Don't Develop Just for Yourself - A Developer's Checklist to Accessibility</a>
                </h3>
                <p class="blog-text">
                  We, as developers, tend to develop sites unconsciously for people like ourselves. If we don't actively
                  pay attention,
                  the sites are often accessible only for certain types of people: Sighted mouse-users, who have good
                  fine motor skills
                  and are good at using computers.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">ALVIN</a>
                    <p class="text-sm">
                      <time datetime="2021-10-25">Oct 25, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-7.png"
                  alt="Building a Restful CRUD API with Node JS, Express, and MongoDB" width="250"
                  class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Database</button>
                <h3><a href="" class="h3" style="color: black;">Building a Restful CRUD API with Node JS, Express, and MongoDB</a></h3>
                <p class="blog-text">
                  Application Programming Interface is the abbreviation for API. An API is a software interface that
                  enables two apps to
                  communicate with one another. In other words, an API is a messenger that sends your request to the
                  provider and then
                  returns the response to you.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">ROYAL </a>
                    <p class="text-sm">
                      <time datetime="2021-10-15">Oct 15, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-8.png" alt="Monitoring Performance with the PageSpeed Insights API"
                  width="250" class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Web Performance</button>
                <h3><a href="" class="h3">Monitoring Performance with the PageSpeed Insights API</a></h3>
                <p class="blog-text">
                  The PageSpeed Insights API provides free access to performance monitoring for web pages and returns
                  data with
                  suggestions for how to improve. The V5 API includes lab data from Lighthouse and real-world data from
                  the Chrome User
                  Experience Report (CrUX).
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">YANE Jr</a>
                    <p class="text-sm">
                      <time datetime="2021-10-03">Oct 3, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-9.png" alt="The best web accessibility tools for developers in 2021"
                  width="250" class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Accessibility</button>
                <h3><a href="" class="h3">The best web accessibility tools for developers in 2021</a>
                </h3>
                <p class="blog-text">
                  The quality of the tools you use defines the speed with which you can diagnose and resolve problems.
                  Each year the landscape changes dramatically in web technologies, and of late the tooling for
                  accessibility is no
                  exception.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">MO SALAD</a>
                    <p class="text-sm">
                      <time datetime="2021-09-13">Sep 13, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-card">
              <div class="blog-card-banner">
                <img src="images/blog-10.png"
                  alt="How to connect a React frontend with a NodeJS/Express backend" width="250"
                  class="blog-banner-img">
              </div>
              <div class="blog-content-wrapper">
                <button class="blog-topic text-tiny">Database</button>
                <h3><a href="" class="h3">How to connect a React frontend with a NodeJS/Express backend</a></h3>
                <p class="blog-text">
                  The MERN (MongoDB, Express, React, NodeJS) stack is very popular for making full stack applications,
                  utilizing
                  Javascript for both the backend and frontend as well as a document-oriented or non relational database
                  (MongoDB),
                  meaning that it's structured like JSON rather than a large excel sheet like SQL databases are.
                </p>
                <div class="wrapper-flex">
                  <div class="profile-wrapper">
                    <img src="images/author.png" alt="Julia walker" width="50">
                  </div>
                  <div class="wrapper">
                    <a href="#" class="h4">VAN MAGUIRE</a>
                    <p class="text-sm">
                      <time datetime="2021-09-21">Sep 21, 2021</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="btn load-more">Load More</button>
        </div>
        <!--ASIDE-->
        <div class="aside">
          <div class="topics">
            <h2 class="h2">Topics</h2>
            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="server-outline"></ion-icon>
              </div>
              <p>Database</p>
            </a>
            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>
              <p>Accessibility</p>
            </a>
            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>
              <p>Web Performance</p>
            </a>
          </div>
          <div class="tags">
            <h2 class="h2">Tags</h2>
            <div class="wrapper">
              <button class="hashtag">#mongodb</button>
              <button class="hashtag">#nodejs</button>
              <button class="hashtag">#a11y</button>
              <button class="hashtag">#mobility</button>
              <button class="hashtag">#inclusion</button>
              <button class="hashtag">#webperf</button>
              <button class="hashtag">#optimize</button>
              <button class="hashtag">#performance</button>
            </div>
          </div>
          <div class="contact">
            <h2 class="h2">Let's Talk</h2>
            <div class="wrapper">
              <p>
                Do you want to learn more about KCA TECH CLUB? Let us have a
                conversation.
              </p>
              <ul class="social-link">
                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-discord"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="newsletter">
            <h2 class="h2">Newsletter</h2>
            <div class="wrapper">
              <p>
                Subscribe to our newsletter to be among the first to keep up with the latest updates.
              </p>
              <form action="#">
                <input type="email" name="email" placeholder="Email Address" required>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--#FOOTER-->
  <footer>
    <div class="container">
      <div class="wrapper">
        <a href="#" class="footer-logo">
          <img src="images/logo-light.svg" alt="SimpleBlog Logo" width="150" class="logo-light">
          <img src="images/logo-dark.svg" alt="SimpleBlog Logo" width="150" class="logo-dark">
        </a>
        <p class="footer-text">
          Learn about Web accessibility, Web performance, and Database management.
        </p>
      </div>
      <div class="wrapper">
        <p class="footer-title">Quick Links</p>
        <ul>
          <li>
            <a href="#" class="footer-link">Advertise with us</a>
          </li>
          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>
          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="wrapper">
        <p class="footer-title">Legal Stuff</p>
        <ul>
          <li>
            <a href="#" class="footer-link">Privacy Notice</a>
          </li>
          <li>
            <a href="#" class="footer-link">Cookie Policy</a>
          </li>
          <li>
            <a href="#" class="footer-link">Terms Of Use</a>
          </li>
        </ul>
      </div>
    </div>
    <p class="copyright">
      &copy; Copyright 2024 <a href="#">KCATECHCLUB</a>
    </p>
  </footer>
  <!--custom js link-->
  <script src="assets/js/script.js"></script>
  <!--ionicon link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
