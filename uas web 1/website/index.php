<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- cusotom css -->

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>

<body>
    
<!--Header-->
<header>
    <div class="main-container">
        <div class="nav">
            <div class="logo">
                <a href="/">My Portofolios</a>
            </div>
            <nav>
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolios">Portfolio</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li>
                        <a href="resume.pdf" target="_blank">
                        <button class="btn">Resume</button>
                    </a>
                </li>
                </ul>
            </nav>

            <div class="burger">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
        </div>

        <section id="hero">
            <div class="hero-left">
                <h3 class="pre-title">My name is</h3>
                <h1 class="hero-name">Hendito <span>Kristian Yuda</span></h1>
                <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis quos voluptatum ratione cum numquam delectus optio fugiat saepe facere laborum provident voluptatibus ullam odio error, minima fugit qui vero ea quod officiis ipsum quidem nostrum? Eveniet dolor cum tenetur, blanditiis voluptas aliquam necessitatibus, id obcaecati expedita cumque odit amet placeat eaque nostrum officia molestias. Mollitia illum error aspernatur quos, magnam, nesciunt in odio, nihil totam quaerat culpa nobis velit!
                </p>
            </div>
            <div class="hero-right">
                <img src="./images/hero.svg" alt="Person Standing"/>
            </div>
        </section>
    </div>


</header>
<!--end Header-->

<!-- Services -->
<section id="services">
    <div class="services main-container">
        <h3 class="pre-title">services</h3>
        <h1 class="section-title services-title">Specialized In</h1>

        <div class="grid-3">
            <!-- Service 1 -->
            <div class="service">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="24" 
                    height="24" 
                    viewBox="0 0 24 24"
                    >
                    <path d="M16.896 10l-4.896-8-4.896 8-7.104-4 3 11v5h18v-5l3-11-7.104 4zm-11.896 10v-2h14v2h-14zm14.2-4h-14.4l-1.612-5.909 4.615 2.598 4.197-6.857 4.197 6.857 4.615-2.598-1.612 5.909z"
                    />
                    </svg>
                </div>
                <h4>UI/UX Design</h4>
                <p>
                    Turn what you have in midnd of a digital product into reality. For
                    any platform you condisder
                </p>
            </div>

            <!-- Service 2 -->
            <div class="service">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="24" 
                    height="24" 
                    viewBox="0 0 24 24">
                    <path d="M14 2v2h-4v-2h4zm2-2h-8v6h8v-6zm-12 20v2h-2v-2h2zm2-2h-6v6h6v-6zm16 2v2h-2v-2h2zm2-2h-6v6h6v-6zm-11-7v-3h-2v3h-9v5h2v-3h7v3h2v-3h7v3h2v-5h-9zm0 9v2h-2v-2h2zm2-2h-6v6h6v-6z"
                    />
                    </svg>
                </div>
                <h4>Application  Development</h4>
                <p>
                    Standard designing, building, and implementing your applications with documentation.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="service">
                <div class="service-icon">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12m2.557 16h-5.115c.546 2.46 1.441 4.114 2.558 5.744 1.194-1.741 2.041-3.41 2.557-5.744m-7.157 0h-4.567c1.236 2.825 3.704 4.972 6.755 5.716-1.048-1.733-1.783-3.658-2.188-5.716m13.767 0h-4.567c-.391 1.988-1.095 3.887-2.175 5.694 3.012-.763 5.517-2.895 6.742-5.694m-14.005-6h-4.962c-.267 1.313-.267 2.685 0 4h4.915c-.119-1.329-.101-2.672.047-4m7.661 0h-5.647c-.165 1.326-.185 2.672-.053 4h5.753c.133-1.328.111-2.673-.053-4m6.977 0h-4.963c.148 1.328.166 2.671.048 4h4.915c.26-1.285.273-2.648 0-4m-12.156-7.729c-3.077.732-5.567 2.886-6.811 5.729h4.653c.435-2.042 1.178-3.985 2.158-5.729m2.355-.048c-1.089 1.77-1.91 3.453-2.463 5.777h4.927c-.534-2.246-1.337-3.948-2.464-5.777m2.368.069c1.013 1.812 1.733 3.76 2.146 5.708h4.654c-1.232-2.816-3.762-4.958-6.8-5.708"
                        />
                    </svg>
                </div>
                <h4>Web Development</h4>
                <p>
                   Create and maintain your websites and also take care of its performance and traffic capacity.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end of services -->

<!-- Portfolio -->
<section id="portfolios">
    <div class="portfolios main-container">
        <h3 class="pre-title">My Works</h3>
        <h1 class="section-title">Feutured Portfolios</h1>

        <div class="grid-3">
            <!-- portfolio 1 -->
            <div class="portfolio">
                <div class="portfolio-cover">
                    <img src="./images/portfolios/portfolio-1.png" alt="Portfolio 1">
                </div>

                <div class="portfolio-info">
                    <div class="portfolio-title">
                        <h4>Agency Website</h4>
                        <a href="/" class="portfolio-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                        </a>
                    </div>

                    <div class="portfolio-tags">
                        <div>React</div>
                        <div>Tailwind</div>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi distinctio cum dolores soluta natus praesentium ullam fugit magni aliquid a minus, commodi ab autem repellat recusandae libero voluptatem. Neque, quaerat?
                    </p>
                </div>
            </div>

            <!-- Portfolio 2 -->
            <div class="portfolio">
                <div class="portfolio-cover">
                    <img src="./images/portfolios/portfolio-2.png" alt="Portfolio 1">
                </div>

                <div class="portfolio-info">
                    <div class="portfolio-title">
                        <h4>Landing Page</h4>
                        <a href="/" class="portfolio-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                        </a>
                    </div>

                    <div class="portfolio-tags">
                        <div>Viu</div>
                        <div>Contentful</div>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi distinctio cum dolores soluta natus praesentium ullam fugit magni aliquid a minus, commodi ab autem repellat recusandae libero voluptatem. Neque, quaerat?
                    </p>
                </div>
            </div>   

            <!-- Portfolio 3 -->
            <div class="portfolio">
                <div class="portfolio-cover">
                    <img src="./images/portfolios/portfolio-3.jpeg.jpg" alt="Portfolio 3">
                </div>

                <div class="portfolio-info">
                    <div class="portfolio-title">
                        <h4>Dashboard Admin</h4>
                        <a href="/" class="portfolio-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                        </a>
                    </div>

                    <div class="portfolio-tags">
                        <div>React</div>
                        <div>Materialize</div>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi distinctio cum dolores soluta natus praesentium ullam fugit magni aliquid a minus, commodi ab autem repellat recusandae libero voluptatem. Neque, quaerat?
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end of portfolio -->

<!-- Skills & education -->
<section id="skills">
    <div class="skills main-container">
        <h3 class="pre-title">Learning Path</h3>
        <h1 class="section-title">Skills & Education</h1>

        <div class="skills-grid">
            <div class="skills-left">
                <!-- education 1 -->
                <div class="education">
                    <div class="line">
                        <div></div>
                    </div>

                    <div class="education-info">
                        <h4 class="education-title">Kingston University</h4>
                        <p>Master's Degree - Software Enginering</p>
                        <h4 class="education-years">2019 - 2023</h4>
                    </div>
                </div>

                <!-- education 2 -->
                <div class="education">
                    <div class="line">
                        <div></div>
                    </div>

                    <div class="education-info">
                        <h4 class="education-title">Kingston University</h4>
                        <p>Master's Degree - Software Enginering</p>
                        <h4 class="education-years">2019 - 2023</h4>
                    </div>
                </div>
                
                <!-- education 3 -->
                <div class="education">
                    <div class="line">
                        <div></div>
                    </div>

                    <div class="education-info">
                        <h4 class="education-title">Kingston University</h4>
                        <p>Master's Degree - Software Enginering</p>
                        <h4 class="education-years">2019 - 2023</h4>
                    </div>
                </div>                
            </div>
            <div class="skills-right">
                <p>
                    For 5+ years, Ihave continously learning in the field of front end and experimenting with
                    new technologies and frameworks, and here you can see a summary of my skills. Field of
                    front-end and experimenting with new technologies.
                </p>

                <div class="skills-list">
                    <ul>
                        <li>React JS</li>
                        <li>Node JS</li>
                        <li>MongoDB</li>
                        <li>HTML</li>
                        <li>Vue JS</li>
                    </ul>

                    <ul>
                        <li>CSS</li>
                        <li>Typescript</li>
                        <li>Next JS</li>
                        <li>GraphQl</li>
                        <li>Angular JS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Skills & education -->

<!-- Contact -->
<section id="contact">
    <div class="contact main-container">
        <div class="contact-left">
            <form class="contact-form" action="process.php" method="POST">
               <div>
                <input type="text" placeholder="Name" name="name">
               </div>
               <div>
                <input type="email" placeholder="Email" name="email">
               </div>
               <div>
                <textarea 
                name="message" 
                id="message"
                placeholder="Message" 
                cols="30" 
                rows="10"
                ></textarea>
               </div>
               <div>
                <button class="btn-submit">Send Message</button>
               </div>
            </form>
        </div>
        <div class="contact-right">
            <!-- contact item 1 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 19c4.5-3.893 8-6.872 8-11.23 0-4.291-3.582-7.77-8-7.77s-8 3.479-8 7.77c0 4.358 3.5 7.337 8 11.23zm-5.761-10h2.761v-2h-2.786c.393-2.446 2.324-4.379 4.786-4.799v2.799h2v-2.799c2.462.42 4.393 2.353 4.786 4.799h-2.786v2h2.761c-.452 2.368-2.354 4.223-4.761 4.632v-2.632h-2v2.632c-2.406-.409-4.309-2.264-4.761-4.632zm13.761 7h-1.801c-.629.673-1.316 1.335-2.041 2h2.605l.5 1h-4.218l-1.146 1h1.025l.858 2h-7.487l.858-2h.947c-.389-.336-.772-.669-1.147-1h-1.995l-1.011-1h1.895c-.725-.664-1.41-1.327-2.039-2h-1.803l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z"/></svg>
                </div>
            <div class="contact-item-detail">
                <h4>Address</h4>
                <p>Jl.Kaswari Desa.Mojopurno,Kec.Wungu</p>
            </div>
            </div>
            <!-- contact item 2 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
                </div>
            <div class="contact-item-detail">
                <h4>Phone</h4>
                <p>+62 858-522-xxx</p>
            </div>
            </div>
            <!-- contact item 3 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
                </div>
            <div class="contact-item-detail">
                <h4>Email</h4>
                <p>henditokristian@gmail.com</p>
            </div>
            </div>

        </div>
    </div>
</section>
<!-- end of contact -->

<!-- Footer -->
<footer>
    <div class="footer-icons">
        <a href="https://instagram.com/hendito_ky?igshid=MTk0NTkyODZkYg==">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a href="https://x.com/JesterABD?t=wGw3Rz-6h94PdH_CsbZiVA&s=09">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
        </a>
        <a href="https://www.linkedin.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
        </a>
        <a href="https://github.com/Hendito02/Hendito02.github.io">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        </a>
    </div>
    <p>&#169; 2023 - Made by HenKY</p>
</footer>

<!-- end of Footer -->

<script src="scripts/main.js"></script>
</body>
</html>
