@extends('layouts.app')

{{-- ===========================  projects section start =================== --}}
<section id="portfolio" class="portfolio container-fluid bg py-3">
    <div class="main-text">
        <h2 class="text-blue text-center project">Projects</h2>
    </div>
    <div class="container">
        <div class="fillter-buttons">
            <button class="btn1 text-white border-0 outline-0" data-filter="all">All</button>
            <button class="btn1 text-white border-0 outline-0" data-filter=".mobile">Mobile app</button>
            <button class="btn1 text-white border-0 outline-0" data-filter=".web">Web app</button>
        </div>
        <div class="portfolio-gallery ">
            <div class="port-box rounded-3 mix web">
                <div class="port-image">
                    <img src="{{ Vite::asset('resources/images/portimage_9.jpg') }}" class="image1 "  alt="devimage2">
                </div>
                <div class="port-content">
                    <h3 class="text-white">ERP Software</h3>
                    <p class="text-white">8 months of hands-on experience in ERP projects, I've adeptly designed and implemented tailored solutions to enhance business operations</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="port-box rounded-3 mix web">
                <div class="port-image">
                    <img src="{{ Vite::asset('resources/images/image-3.jpg') }}" class="image2 "  alt="devimage2">
                </div>
                <div class="port-content">
                    <h3 class="text-white">Portfolio website</h3>
                    <p class="text-white">The portfolio website was crafted using the Laravel framework, incorporating JavaScript for interactivity, Bootstrap for responsive design, and SCSS for enhanced styling, resulting in a seamless user experience    </p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="port-box rounded-3 mix web">
                <div class="port-image">
                    <img src="{{ Vite::asset('resources/images/image-4.jpg') }}" class="image3 "  alt="devimage2">
                </div>
                <div class="port-content">
                    <h3 class="text-white">Graphic design</h3>
                    <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis neque placeat libero dolorum recusandae temporibus</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="port-box rounded-3 mix mobile ">
                <div class="port-image">
                    <img src="{{ Vite::asset('resources/images/portimage_8.jpg') }}" class="image4 "  alt="devimage2">
                </div>
                <div class="port-content">
                    <h3 class="text-white">Notes Application</h3>
                    <p class="text-white">Developed a robust notes application using Flutter framework, integrating Sqflite for local database management and Firebase for cloud synchronization</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="port-box rounded-3 mix web">
                <div class="port-image">
                    <img src="{{ Vite::asset('resources/images/portimage_02.jpg') }}" class="image5 "  alt="devimage2">
                </div>
                <div class="port-content">
                    <h3 class="text-white">CRM Projects</h3>
                    <p class="text-white">With 8 months of practical involvement in HRMS and CRM projects, I've skillfully crafted and implemented customized solutions to elevate business functionalities</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="port-box rounded-3 mix mobile ">
                <div class="port-image">
                    <img src="{{ Vite::asset('resources/images/portimage_7.jpg') }}" class="image6 "  alt="devimage2">
                </div>
                <div class="port-content">
                    <h3 class="text-white">Biometric Authentication Application</h3>
                    <p class="text-white">Created a cutting-edge biometric authentication application, employing Flutter framework for cross-platform compatibility and ensuring seamless user experience with advanced biometric security features</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ===========================  projects section end =================== --}}
