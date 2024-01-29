@extends('layouts.app')

@section('content')    
<body>
<main>
<aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/profile.jpg" alt="Hafiz Mahamud" width="120">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Hafiz Mahamud">Hafiz Mahamud</h1>

          <p class="title">Programmer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:m.hafizmahamud@gmail.com" class="contact-link">m.hafizmahamud@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+12133522795" class="contact-link">(+60) 1133282842</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">December 06, 1990</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Semenyih, SELANGOR DARUL EHSAN</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/hafiz-mahamud-133b25b0/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </aside>

    <!--
      - #main-content
    -->
    <div class="main-content">
      <!--
        - #NAVBAR
      -->

      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
          <a href="/">
            <button class="navbar-link" data-nav-link>About</button>
          </a>
          </li>
          <li class="navbar-item">
          <a href="/resume">
                <button class="navbar-link" data-nav-link>Resume</button>
          </a>
          </li>
          
          <li class="navbar-item">
          <a href="/portfolio">
            <button class="navbar-link active" data-nav-link>Portfolio</button>
          </a>
          </li>
          <li class="navbar-item">
            <a href="/blog">
                <button class="navbar-link">Blog</button>
            </a>
          </li>
        </ul>
      </nav>

      <!--
        - #ABOUT
      -->

    <article class="about active" data-page="about">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <!-- <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li> -->

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">
            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://www.behance.net/gallery/184649937/MYINSTUN-SSO" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/myinstun.png" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">MYINSTUN SSO</h3>

                <p class="project-category">Web development</p>
              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://www.behance.net/gallery/184644105/Aplication-and-Server-Monitoring-System-(ASMOS)" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/asmos.png" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Application & Server Monitoring System (ASMOS)</h3>

                <p class="project-category">Web development</p>
              </a>
            </li>

          </ul>
        </section>
    </article>
    </div>
</main>
</body>
@endsection