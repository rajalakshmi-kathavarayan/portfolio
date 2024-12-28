@extends('layouts.app')

{{-- =========================  Main container start ================= --}}
<header>
    <div class="container-fluid banner py-3">
        <nav class="navbar navbar-expand-lg  bg-transparent py-3  btn-6">
            <div class="container ps-md-3 pe-md-4">
                <p class="navbar-brand text-white fw-bold px-md-4 fs-4 text-animation " ><i class="fa-solid fa-crown me-2"></i><span class="text-animation">The Queen</span></p>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-light text-white"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-blue m-1 px-md-4 m-md-0 m-lg-0" href="#home">< Home ></span></a>
                        </li>
                        <li class="nav-item  m-1 m-md-0 m-lg-0 ">
                            <a class="nav-link text-white fw-bold px-md-4 " href="#about">< About ></a>
                        </li>
                        <li class="nav-item m-1 m-md-0 m-lg-0 ">
                            <a class="nav-link text-white fw-bold px-md-4" href="#skills">< Skills ></a>
                        </li>
                        <li class="nav-item m-1 m-md-0 m-lg-0 ">
                            <a class="nav-link text-white fw-bold px-md-4" href="#portfolio">< Projects ></a>
                        </li>
                        <li class="nav-item m-1 m-md-0 m-lg-0 ">
                            <a class="nav-link text-white fw-bold px-md-4" href="#contact">< Contact ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ===================content===================== -->

    </div>
</header>
    <main>
        {{-- ============================  home section start ======================== --}}
        <div class="container-fluid home-bg py-4">
            <section class="home" id="home">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-6 my-sm-5 py-sm-5 px-md-4 home-contenet profile-text order-2 order-lg-1 mt-4">
                            <h2 class="text-white mt-2"><span>Hello!</span></h2>
                                <h1 class="typing-text text-white" ></h1>
                                <p class="text-white para-text mt-1 lh-lg">Experienced in crafting dynamic web applications with <span class="text-blue">Laravel (PHP)</span> and proficient in  <span class="text-blue">Python</span> for versatile solutions. Passionate about building innovative solutions that engage users and drive results.</p>
                            <div class="social mb-3 mb-lg-0 ">
                                <a href="https://github.com/rajalakshmi-kathavarayan"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/rajalakshmi-k-99079025b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </div>
                            <div class="mt-2 text-black">
                                <a href="{{ route('download.cv') }}" class="btn text-black downloadBtn rounded-1 mt-4 bg-lightblue py-2" >Download CV</a>
                            </div>
                        </div>
                        <div class="col-lg-6 developerImage  mt-0 pt-0 mb-3 pb-3 px-md-4 home-contenet  order-1 order-lg-2 mt-4 ps-lg-5">
                            <img src="{{ Vite::asset('resources/images/girl_image_2.png') }}"
                                    class="img-fluid devImage mt-0 pt-0" alt="devimag1">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- ============================  home section end ======================== --}}
        {{-- ============================  about section start ===================== --}}
        <div class="aboutSection">
            <section class="about home-contenet" id="about">
                <h2 class="text-bgblue text-center fw-bold px-2 pt-4">ABOUT ME</h2>
                <div class="container">
                    <div class="row d-md-flex justify-content-between gap-0 gx-0">
                        <div class=" col-md-5 col-lg-6 home-contenet">
                            <div class="zoom-effect about-image1 mt-0 pt-0">
                                <img src="{{ Vite::asset('resources/images/dev_girl.png') }}"
                                   class="devImage2   mt-0 pt-0"  alt="devimage2">
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6 mt-5 aboutContent ">
                            <p class="fs mt-4 lh-lg ">Experienced <span class="animated-text3 fw-bold">PHP Laravel MVC</span> developer with eight months of hands-on experience. Proficient in <span class="animated-text3 fw-bold">invoice generator</span> and possess foundational knowledge in <span class="animated-text3 fw-bold">Excel bulk import for candidate details</span>. Contributed effectively to <span class="animated-text3 fw-bold">projects related to invoice generation and candidate data management</span>. Skilled in problem-solving and creativity.</p>
                            <p class="fs mt-4 lh-lg ">Passionate <span class="animated-text3 fw-bold">Django Developer</span> eager to craft high-quality <span class="animated-text3 fw-bold">e-commerce websites</span>. Ready to apply technical expertise and deliver exceptional results. Excited about challenging opportunities in web development.</p>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center ">
                        <div class="col col-md-6 col-lg-7 d-md-flex justify-content-between gap-2 personalInfo ">
                            <div class="m-1 personal-info1">
                                <div class="text-secondary fs lh-lg">First Name : <span class="text-black">Rajalakshmi</span></div>
                                <div class="text-secondary fs lh-lg">Last Name : <span class="text-black">Kathavarayan</span></div>
                                <div class="text-secondary fs lh-lg">Age : <span class="text-black">21 Years</span></div>
                                <div class="text-secondary fs lh-lg">Email : <span class="text-black">rajalakshmi272002@gmail.com</span></div>
                                <div class="text-secondary fs lh-lg">Phone No : <span class="text-black">8681856979</span></div>

                            </div>
                            <div class="m-1 personal-info2">
                                <div class="text-secondary fs lh-lg">Address: <span class="text-black">6,Gangai St, Bharathi nagar,Tharamani</span></div>
                                <div class="text-secondary fs lh-lg">Pincode : <span class="text-black">chennai-113</span></div>
                                <div class="text-secondary fs lh-lg">Nationality : <span class="text-black">Indian</span></div>
                                <div class="text-secondary fs lh-lg">Languages  : <span class="text-black">Tamil,English</span></div>
                            </div>
                        </div>
                        <div class=" mt-0 pt-0  col-lg-4 ">
                            <div class="about-image2 zoom-effect mt-0 pt-0">
                                <img src="{{ Vite::asset('resources/images/about_image_5.jpg') }}"
                                class=" img-fluid devImage_2 mb-3 mt-0 pt-0 " alt="lapImage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg text-light education d-flex justify-content-center align=items-center">
                    <div class="container row justify-content-center pt-5 pb-5 px-5 animationText">
                        <h3 class="educationExperience text-center animationText py-3">EDUCATION & EXPERIENCE</h3>
                        <div class="col-md-5 col-lg-4 justify-content-center">
                            <div class="pb-4 text-end animationText edupara">
                                <h5 class="d-flex justify-content-end"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-graduation-cap d-flex align-self-center"></i></span></h5>
                                <p class="text-light">2020 - 2023</p>
                                <h5 class="text-secondary "> <strong class="text-white">BSc CS</strong> -Asan Memorial College</h5>
                                <P class="off1 mt-2">Aggregate of 86%.</P>
                            </div>
                            <div class="off-line"></div>
                            <div class="pt-5 text-end animationText edupara">
                                <h5 class="d-flex justify-content-end"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-graduation-cap d-flex align-self-center"></i></span></h5>
                                <p class="text-light">2019-2020</p>
                                <h5 class="text-secondary "><strong class="text-white">HSC </strong>- St.Antony's Higher Secondary School</h5>
                                <P class="off1 mt-2">Aggregate of 72%.</P>
                            </div>
                            <div class="off-line"></div>
                            <div class="pt-5 text-end animationText edupara">
                                <h5 class="d-flex justify-content-end"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-graduation-cap d-flex align-self-center"></i></span></h5>
                                <p class="text-light">2017-2018</p>
                                <h5 class="text-secondary "><strong class="text-white">SSLC </strong>- St.Antony's Higher Secondary School</h5>
                                <P class="off1 mt-2">Aggregate of 82%.</P>
                            </div>
                        </div>
                        <div class="col-1 d-none d-md-flex "><div class="st-line h-100 ms-md-2 ms-lg-4"></div></div>
                        <div class="col-md-5 col-lg-4 mt-md-5 ps-0 justify-content-center">
                            <div class="pb-4 text-start animationText exppara">
                                <h5 class="d-flex justify-content-start"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-briefcase d-flex align-self-center"></i></span></h5>
                                <p class="text-light">July 2023 - April 2024</p>
                                <h5 class="text-secondary "> <strong class="text-white">Full stack developer</strong> -Gowebez</h5>
                                <P class="off1 mt-2">lorem ipsum.</P>
                            </div>
                            <div class="off-line"></div>
                            <div class="pt-5 animationText exppara">
                                <h5 class="d-flex justify-content-start"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-briefcase d-flex align-self-center"></i></span></h5>
                                <p class="text-light">lorem ipsum</p>
                                <h5 class="text-secondary ">Lorem ipsum dolor sit.</h5>
                                <P class="off1 mt-2">lorem ipsum</P>
                            </div>
                            <div class="off-line"></div>
                            <div class="pt-5 animationText exppara">
                                <h5 class="d-flex justify-content-start"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-briefcase d-flex align-self-center"></i></span></h5>
                                <p class="text-light">lorem ipsum</p>
                                <h5 class="text-secondary ">Lorem ipsum dolor sit.</h5>
                                <P class="off1 mt-2">lorem ipsum</P>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- ============================ about section end ========================== --}}
        {{-- ===========================  skills section start ======================= --}}
        <section id="skills" class="skills py-3 ">
            <div class="container my-3 ">
                <div class="row ">
                    <div class="main-text col-12">
                        <span>Technical and Professional</span>
                        <h2 class="text-blue text-center text-uppercase myskill">My Skills</h2>
                    </div>
                    <div class="skill-main ">
                        <div class="skill-left ">
                            <h3 class="text-white">Technical Skills</h3>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-brands fa-laravel me-2"></i>Laravel(php)</p>
                                    <p class="text-white">90%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue php"></span>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-brands fa-python me-2"></i></i>Django(python)</p>
                                    <p class="text-white">85%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue dart"></span>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-solid fa-database me-2"></i>MySQL</p>
                                    <p class="text-white">95%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue sql"></span>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-brands fa-html5 me-2"></i>HTML</p>
                                    <p class="text-white">72%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue html"></span>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-brands fa-css3-alt me-2"></i>CSS</p>
                                    <p class="text-white">70%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue css"></span>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-brands fa-js me-2"></i>Javascript</p>
                                    <p class="text-white" >80%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue javascript"></span>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="info">
                                    <p class="text-white"><i class="fa-brands fa-bootstrap me-2"></i>Bootstrap</p>
                                    <p class="text-white">82%</p>
                                </div>
                                <div class="bar">
                                    <span class="text-blue bootstrap"></span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-right">
                            <h3 class="text-white mt-4 mt-md-0">Professional Skills</h3>
                            <div class="d-md-flex justify-content-center align-items-center gap-5">
                                <div class="content1 ">
                                    <div class="skill1 d-flex align-items-center justify-content-center mt-5" style="--percentage: 90;">
                                        <h5 class="text-white">90%</h5>
                                    </div>
                                    <p class="text-white mt-2">Team Work</p>
                                    <div class="skill2 d-flex align-items-center justify-content-center mt-5" style="--percentage: 80;">
                                        <h5 class="text-white">80%</h5>
                                    </div>
                                    <p class="text-white mt-2">Creativity</p>
                                    <div class="skill3 d-flex align-items-center justify-content-center mt-5" style="--percentage: 50;">
                                        <h5 class="text-white">50%</h5>
                                    </div>
                                    <p class="text-white mt-2">Project Management</p>
                                </div>
                                <div class="content2 mt-5 ">
                                    <div class="skill4 d-flex align-items-center justify-content-center mt-md-0 mt-5" style="--percentage: 70;">
                                        <h5 class="text-white">70%</h5>
                                    </div>
                                    <p class="text-white mt-2">Communication</p>
                                    <div class="skill4 d-flex align-items-center justify-content-center mt-5" style="--percentage: 75;">
                                        <h5 class="text-white">75%</h5>
                                    </div>
                                    <p class="text-white mt-2">Problem Solving</p>
                                    <div class="skill4 d-flex align-items-center justify-content-center mt-5" style="--percentage: 80;">
                                        <h5 class="text-white">80%</h5>
                                    </div>
                                    <p class="text-white mt-2">Time Management</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ===========================  skills section end ======================= --}}
        {{-- ===========================  projects section start =================== --}}
        <section id="portfolio" class="portfolio container-fluid bg py-5">
            <div class="main-text">
                <h2 class="text-blue text-center project">PROJECTS</h2>
            </div>
            <div class="container">
                <div class="fillter-buttons">
                    <button class="btn1 text-white border-0 outline-0" data-filter="all">All</button>
                    <button class="btn1 text-white border-0 outline-0" data-filter=".mobile">BackEnd</button>
                    <button class="btn1 text-white border-0 outline-0" data-filter=".web">FrontEnd</button>
                </div>
                <div class="portfolio-gallery ">
                    <div class="port-box rounded-3 mix web">
                        <div class="port-image">
                            <img src="{{ Vite::asset('resources/images/salon_2.png') }}" class="image1 "  alt="devimage2">
                        </div>
                        <div class="port-content">
                            <h3 class="text-white">Woman's & Men's salon website</h3>
                            <p class="text-white">Designed and developed a responsive women's salon website featuring services, portfolio, contact us, and about us sections using HTML, JavaScript, Bootstrap, and SCSS to ensure compatibility across all screen sizes</p>
                            <a href="https://github.com/rajalakshmi-kathavarayan/woman-salon"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="port-box rounded-3 mix web">
                        <div class="port-image">
                            <img src="{{ Vite::asset('resources/images/image-3.jpg') }}" class="image2 "  alt="devimage2">
                        </div>
                        <div class="port-content">
                            <h3 class="text-white">Portfolio website</h3>
                            <p class="text-white">The portfolio website was crafted using the Laravel framework, incorporating JavaScript for interactivity, Bootstrap for responsive design, and SCSS for enhanced styling, resulting in a seamless user experience    </p>
                            <a href="https://github.com/rajalakshmi-kathavarayan/portfolio"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="port-box rounded-3 mix web">
                        <div class="port-image">
                            <img src="{{ Vite::asset('resources/images/salon_3.png') }}" class="image3 "  alt="devimage2">
                        </div>
                        <div class="port-content">
                            <h3 class="text-white">Medcare Website</h3>
                            <p class="text-white">Crafted a responsive Medcare website showcasing services, portfolio, contact us, and about us sections utilizing HTML, JavaScript, Bootstrap, and SCSS for seamless adaptability across various screen sizes</p>
                            <a href="https://github.com/rajalakshmi-kathavarayan/medcare-website"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="port-box rounded-3 mix mobile ">
                        <div class="port-image">
                            <img src="{{ Vite::asset('resources/images/salon_6.jpg') }}" class="image4 "  alt="devimage2">
                        </div>
                        <div class="port-content">
                            <h3 class="text-white">Invoice Generator Web Application</h3>
                            <p class="text-white">Developed a  a dynamic web application using the Laravel framework to generate invoices, leveraging the DOMPDF package for PDF generation</p>
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="port-box rounded-3 mix web">
                        <div class="port-image">
                            <img src="{{ Vite::asset('resources/images/salon_5.png') }}" class="image5 "  alt="devimage2">
                        </div>
                        <div class="port-content">
                            <h3 class="text-white">Online Education website</h3>
                            <p class="text-white">Developed a responsive online e-learning website and education system using HTML, CSS, and Bootstrap</p>
                            <a href="https://github.com/rajalakshmi-kathavarayan/online-education"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="port-box rounded-3 mix mobile ">
                        <div class="port-image">
                            <img src="{{ Vite::asset('resources/images/portimage_7.jpg') }}" class="image6 "  alt="devimage2">
                        </div>
                        <div class="port-content">
                            <h3 class="text-white">Candidate portal</h3>
                            <p class="text-white">Developed a candidate portal enabling the storage of individual candidates and bulk import of Excel files from online job search portals</p>
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ===========================  projects section end =================== --}}
        {{-- =========================== contact section start =================== --}}
        <section class="contact-section " id="contact">
                <h3 class=" text-darkblue text-center mt-4">Contact Us</h3>
                <p class="text-center my-3 contacttext">Feel free to reach out to us with any questions, comments, or inquiries you may have.<br> We're here to help!</p>
                <div class="container mb-0 pb-0">
                    <div class="row justify-content-center gap-0 gx-0 px-lg-5 ">
                        <div class="contact-image col-lg-6 form-section">
                            <img src="{{ Vite::asset('resources/images/contact_iamge.jpg') }}" class="contact_image img-fluid"  alt="devimage2">
                        </div>
                        <div class="container form-section col-lg-6">
                            <form action="{{ route('contact.send')}}" method="POST" class="mt-4" id="contactForm">
                                @csrf
                                <div class="form-group">
                                    <label for="name mb-3">Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" class="input1 namesection mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="email mb-3">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" class="input1 mailsection mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="message mb-3">Message <span class="text-danger">*</span></label>
                                    <textarea id="message" name="message" placeholder="Enter your message" class="input1 messagesection mt-2"></textarea>
                                </div>
                                <div class="form-group text-center btnsection">
                                    <button type="submit" class="btn" id="submitButton">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="up-arrow-icon text-end pb-5 mx-2 px-4 ">
                    <a href="#home"><i class="fas fa-arrow-up bg rounded-circle px-3 py-2 text-white"></i></a>
                </div> --}}
        </section>
        {{-- =========================== contact section end =================== --}}
    </main>
@vite(['resources/js/home.js'])
