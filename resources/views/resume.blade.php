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
                <button class="navbar-link active" data-nav-link>Resume</button>
          </a>
          </li>
          
          <li class="navbar-item">
          <a href="/portfolio">
            <button class="navbar-link" data-nav-link>Portfolio</button>
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
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">
            <div class="title-wrapper">
                <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
                </div>

                <h3 class="h3">Education</h3>
            </div>

            <ol class="timeline-list">
                <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Kolej Poly-Tech Mara Kuala Lumpur</h4>

                <span>2013 — 2014</span>

                <p class="timeline-text">
                Bachelor Degreen in Network & Mobile Computing<br />
                Fail on 4th Semester due to financial issue.
                </p>

                </li>
                <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Kolej Poly-Tech Mara Alor Setar</h4>

                <span>2008 — 2012</span>

                <p class="timeline-text">
                Diploma in Computer System & Networking<br />
                CGPA: 2.52
                </p>

                </li>
                <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Sekolah Menengah Kebangsaan Darulaman</h4>

                <span>2003 — 2007</span>

                <p class="timeline-text">
                Sijil Pelajaran Malaysia
                </p>

                </li>
            </ol>
        </section>


        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Web Developer</h4>
              <span>Osky Interactive (M) Sdn. Bhd.</span>
              <span>2022 — Present</span>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Programmer</h4>
              <p class="timeline-text">
                <span>Plisca (M) Sdn. Bhd.</span>
              <span>2020 — 2022</span>
            </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">IT Support</h4>
              <span>WebServer Malaysia c/o Acme Commerce Sdn Bhd.</span>
              <span>2019 — 2020</span>
              <p class="timeline-text">
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Software Engineer</h4>
              <span>DagangAsia Net Sdn. Bhd.</span>
              <span>2017 — 2019</span>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Technical Support</h4>
              <span>DagangAsia Net Sdn. Bhd.</span>
              <span>2015 — 2016</span>
            </li>
          </ol>
        </section>

</main>
</body>
@endsection

@section('javascript')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection