@extends('layouts.app')
    {{-- ============================  about section start ===================== --}}
    <div class="aboutSection">
        <section class="about home-contenet" id="about">
            <h2 class="text-bgblue text-center fw-bold px-2 pt-4">ABOUT ME</h2>
            <div class="container">
                <div class="row d-md-flex justify-content-between gap-0 gx-0">
                    <div class=" col-md-5 col-lg-6 home-contenet">
                        <div class="zoom-effect about-image1">
                            <img src="{{ Vite::asset('resources/images/phpdev2-removebg-preview.png') }}"
                               classs="devImage2 img-fluid"  alt="devimage2">
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 mt-4 aboutContent ">
                        <p class="fs mt-4 lh-lg ">Experienced  <span class="animated-text3 fw-bold">PHP Laravel MVC</span>  developer with eight months of hands-on experience. Proficient in <span class="animated-text3 fw-bold">ERP software</span> and possess foundational knowledge in <span class="animated-text3 fw-bold">HRMS</span>. Contributed effectively to <span class="animated-text3 fw-bold">ERP and HRMS projects</span>. Skilled in problem-solving and creativity.</p>
                        <p class="fs mt-4 lh-lg ">Passionate <span class="animated-text3 fw-bold"> Flutter Developer</span>  eager to craft high-quality  <span class="animated-text3 fw-bold">mobile applications</span>. Ready to apply technical expertise and deliver exceptional results. Excited about challenging opportunities in mobile app development.</p>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col col-md-6 col-lg-7 d-md-flex justify-content-between gap-2 personalInfo ">
                        <div class="m-1 personal-info1">
                            <div class="text-secondary fs lh-lg">First Name : <span class="text-black">Thennarasan</span></div>
                            <div class="text-secondary fs lh-lg">Last Name : <span class="text-black">Ganesan</span></div>
                            <div class="text-secondary fs lh-lg">Age : <span class="text-black">21 Years</span></div>
                            <div class="text-secondary fs lh-lg">Email : <span class="text-black">thennarasan2208@gmail.com</span></div>
                            <div class="text-secondary fs lh-lg">Phone No : <span class="text-black">9940436554</span></div>

                        </div>
                        <div class="m-1 personal-info2">
                            <div class="text-secondary fs lh-lg">Address<span class="text-black">10,valmikist,thiruvalluvar nagar,perungudi</span></div>
                            <div class="text-secondary fs lh-lg">Pincode : <span class="text-black">chennai-96</span></div>
                            <div class="text-secondary fs lh-lg">Nationality : <span class="text-black">Indian</span></div>
                            <div class="text-secondary fs lh-lg">Languages  : <span class="text-black">Tamil,English</span></div>
                        </div>
                    </div>
                    <div class="  col-lg-4 ">
                        <div class="about-image2 zoom-effect ">
                            <img src="{{ Vite::asset('resources/images/phpdev4.jpg') }}"
                            class=" img-fluid devImage_2 " alt="lapImage">
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
                            <h5 class="text-secondary ">BSc CS -Asan Memorial College</h5>
                            <P class="off1 mt-2">Aggregate of 72%.</P>
                        </div>
                        <div class="off-line"></div>
                        <div class="pt-5 text-end animationText edupara">
                            <h5 class="d-flex justify-content-end"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-graduation-cap d-flex align-self-center"></i></span></h5>
                            <p class="text-light">2019-2020</p>
                            <h5 class="text-secondary ">HSC - Evaans Matriculation School</h5>
                            <P class="off1 mt-2">Aggregate of 69%.</P>
                        </div>
                        <div class="off-line"></div>
                        <div class="pt-5 text-end animationText edupara">
                            <h5 class="d-flex justify-content-end"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-graduation-cap d-flex align-self-center"></i></span></h5>
                            <p class="text-light">2017-2018</p>
                            <h5 class="text-secondary ">SSLC - Evaans Matriculation School</h5>
                            <P class="off1 mt-2">Aggregate of 78%.</P>
                        </div>
                    </div>
                    <div class="col-1 d-none d-md-flex "><div class="st-line h-100 ms-md-2 ms-lg-4"></div></div>
                    <div class="col-md-5 col-lg-4 mt-md-5 ps-0 justify-content-center">
                        <div class="pb-4 text-start animationText exppara">
                            <h5 class="d-flex justify-content-start"><span class="bg-lightblue d-flex align-item-center justify-content-center"><i class="fa fa-briefcase d-flex align-self-center"></i></span></h5>
                            <p class="text-light">2023 - PRESENT</p>
                            <h5 class="text-secondary ">Php developer -iFive Technology Pvt. Ltd.</h5>
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
