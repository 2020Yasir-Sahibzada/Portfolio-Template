<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @livewireStyles
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.umd.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header id="header" class="header d-flex flex-column justify-content-center">

        <i class="header-toggle d-xl-none bi bi-list"></i>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
            </ul>
        </nav>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="{{ asset('img/hero-bg.jpg') }}" alt="">

            <div class="container" data-aos="zoom-out">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2>Mohammad Yasir Sahibzada</h2>
                        <p>I'm <span class="typed"
                                data-typed-items="Designer, Developer, Data Analytic">Designer</span><span
                                class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                        <div class="social-links">
                            <a href="https://x.com/YasirSahibzada5"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://www.linkedin.com/in/yasir-sahibzada-583b341a2/"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Hello, I'm Mohammad Yasir Sahibzada from Nangarhar. I graduated from Kabul University in 2023 with a
                    degree in Information Systems. My journey in technology began with a curiosity that evolved into a
                    deep passion for software development, data science, and machine learning. I love creating efficient
                    and innovative software solutions, diving into data to uncover valuable insights, and exploring the
                    transformative power of machine learning.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/profile-img.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Software Developer.</h2>
                        <p class="py-3 fst-italic">
                            During my time at university, I developed a strong foundation in these areas and worked on
                            various projects that honed my skills. I am committed to continuous learning and staying
                            updated with the latest advancements in technology. Collaboration and teamwork are essential
                            to me, and I enjoy working with others to push the boundaries of what is possible.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>14 May
                                            2000</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.yasirsahibzada2022.com</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+93 79 20
                                            48900</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>ID Number:</strong>
                                        <span>1398-0700-32216</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kabul,
                                            Afghanistan</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>Bachelor</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>yasirsahibzada90@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            Thank you for visiting my portfolio. Let's connect and explore opportunities to create
                            impactful and innovative solutions together!
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-headset"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-people"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>I have developed a diverse set of skills through education and hands-on experience in various
                    projects. I am committed to continuously enhancing my skills and staying current with the latest
                    industry trends and technologies.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>HTML & CSS</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Bootstrap & Tailwind CSS</span> <i
                                    class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Machine Learning</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>PHP</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Laravel & Packages</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>SQL & NoSQL</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>VUE.JS</span> <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Sumary</h3>

                        <div class="pb-0 resume-item">
                            <h4>Yasir Sahibzada</h4>
                            <p><em>Mohammad Yasir Sahibzada, a 2023 Information Systems graduate from Kabul University,
                                    passionate about software development, data science, and machine learning.</em></p>
                            <ul>
                                <li>Ahmad Shah Baba Mina, Kabul, AFG</li>
                                <li>+93 79 20 48900</li>
                                <li>yasirsahibzada90@gmail.com</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Computer Science</h4>
                            <h5>2019 - 2023</h5>
                            <p><em>Kabul University, Karte Char, Kabul</em></p>
                            <ul>
                                <li>Graduated with a Bachelor of Computer Science in Information Systems.</li>
                                <li>Developed skills in programming languages such as Java, Python, and SQL.</li>
                                <li>Gained experience in database management and data analysis.</li>
                                <li>Collaborated effectively in team projects and group assignments.</li>
                                <li>Learned about software engineering and software development.</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>High School Graduation</h4>
                            <h5>2006 - 2018</h5>
                            <p><em>Ibrahim Khwakhogai High School, Ahmad Shah Baba Mina, Kabul</em></p>
                            <ul>
                                <li>Strong foundation in core subjects: Math, Science and Social Studies</li>
                                <li>Participated in extracurricular activities (e.g., sports, clubs)</li>
                                <li>Developed teamwork and leadership abilities</li>
                                <li>Consistently maintained good grades</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>English Language Diploma</h4>
                            <h5>2020 - 2021</h5>
                            <p><em>New Rana Academy, Majid Mall, Kabul</em></p>
                            <ul>
                                <li>Completed English Language Diploma</li>
                                <li>Communication skills in English</li>
                                <li>Proficient in reading, writing, and speaking English</li>
                                <li>Skilled in understanding and using English in everyday situations</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Web Developer</h4>
                            <h5>2023-Nov - 2024-Jan</h5>
                            <p><em>Rise Paints and Chemicals, Kabul</em></p>
                            <p>
                                Developed a user-friendly web app for Rise Paint and Chemicals. This app includes all
                                the company's information, making it easy for users to find what they need. I used the
                                latest technologies to ensure a modern and efficient user experience.
                            </p>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Software Developer</h4>
                            <h5>2024-Feb - 2024-Sep</h5>
                            <p><em>Modern Boost Technology, Shahre Naw, Kabul</em></p>
                            <p>Worked as a Software Developer at Modern Boost Technology from February to September
                                2024. I developed and maintained software applications, wrote efficient code, and
                                collaborated with the team to deliver high-quality software products.</p>
                            <ul>
                                <li>Developing and maintaining software applications</li>
                                <li>Writing clean and efficient code</li>
                                <li>Collaborating with team members for timely delivery of high-quality software
                                    products.</li>
                                <li>Expertise in various programming languages and technologies</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Full Stack Developer - Part Time</h4>
                            <h5>2024-Sep - Present</h5>
                            <p><em>Kabul City Walk Hotel & Suites, Ansari Square, Kabul</em></p>
                            <p>As a Full Stack Developer at Kabul City Walk Hotel and Suites, I develop and maintain web
                                applications, ensuring optimal performance and user experiance. My responsibilities
                                include
                                implementing front-end components with modern frameworks, managing server-side logic,
                                optimizing application for speed, and maintaining databases. I collaborate wit teams to
                                meet requirements and deliver scalable solutions.</p>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Software Developer</h4>
                            <p><em>Sahibzada Company, Kabul</em></p>
                            <p>Designed and developed a web application using Laravel Filament and Livewire that
                                supports
                                company operations by tracking and visualizing expenses, income, debts and overall
                                activities. The
                                application features a dedicated user friendly dashboard to display key metrics and data
                                visualizations, providing clear insights into financial and operational performance.</p>
                            <ul>
                                <li>Manage company finances, income, expenses and debts.</li>
                                <li>Provides a clear view fo company operations.</li>
                                <li>Dashboard that shows key details.</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->



        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>References</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <h3>Abdul Salam Rasooly</h3>
                                            <h4>Deputy Officer of Rise Company</h4>
                                            <ul>
                                                <li>risepaints.com</li>
                                                <li>info@risepaints.com</li>
                                                <li>0093 (0) 78 15 15 724</li>
                                            </ul>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center col-lg-2" style="background-color: lightgrey;">

                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <h3>Nejab Bakhshi</h3>
                                            <h4>Director of Modern Boost Technology</h4>
                                            <ul>
                                                <li>mbt.af</li>
                                                <li>president@mbt.af</li>
                                                <li>0093 (0) 78 88 00 326</li>
                                            </ul>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center col-lg-2" style="background-color: lightgrey;">

                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <h3>Abdul Basit Momand</h3>
                                            <h4>Manager, Kabul City Walk Hotel & Suits</h4>
                                            <ul>
                                                <li>kabulcitywalkhotel.com</li>
                                                <li>president@kabulcitywalkhotel.com</li>
                                                <li>0093 (0) 78 58 77 996</li>
                                            </ul>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center col-lg-2" style="background-color: lightgrey;">

                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="flex-shrink-0 bi bi-geo-alt"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Ahmad Shah Baba Mena, Bagrami, Kabul, Afghanistan</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="flex-shrink-0 bi bi-telephone"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+93 (0) 792048900</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="flex-shrink-0 bi bi-envelope"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>yasirsahibzada90@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                    <livewire:contact-form />
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <h3 class="sitename">Mohammad Yasir Sahibzada</h3>
            <p>Passionate Software Developer.</p>
            <div class="social-links d-flex justify-content-center">
                <a href="https://x.com/YasirSahibzada5"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.linkedin.com/in/yasir-sahibzada-583b341a2/"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="container">
                <div class="copyright">
                    <span>Copyright</span> <strong class="px-1 sitename">Yasir Sahibzada</strong> <span>All Rights
                        Reserved 2023</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>





    @livewireScripts

  </body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.umd.js"></script>

</html>
