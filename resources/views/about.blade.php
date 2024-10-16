@extends('layouts.app')

@section('content')
    <main>
        <section class="content-box-area mt-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4">
                        <div class="card profile-card">
                            <div class="card-body">
                                <div class="image text-center">
                                    <img src="assets/img/images/profile.png" alt="profile">
                                </div>
                                <div class="text">
                                    <h3 class="card-title">Cris Rayaan 👋</h3>
                                    <p>A Passionate <span>Full Stack Developer</span> 🖥️ & <span>Product Designer</span> having
                                        <span>12
                        years</span> of Experiences over 24+
                                        Country Worldwide.</p>
                                    <div class="common-button-groups">
                                        <a class="btn btn-call" href="#">
                                            <svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5 4H9.5L11.5 9L9 10.5C10.071 12.6715 11.8285 14.429 14 15.5L15.5 13L20.5 15V19C20.5 19.5304 20.2893 20.0391 19.9142 20.4142C19.5391 20.7893 19.0304 21 18.5 21C14.5993 20.763 10.9202 19.1065 8.15683 16.3432C5.3935 13.5798 3.73705 9.90074 3.5 6C3.5 5.46957 3.71071 4.96086 4.08579 4.58579C4.46086 4.21071 4.96957 4 5.5 4Z"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M15.5 7C16.0304 7 16.5391 7.21071 16.9142 7.58579C17.2893 7.96086 17.5 8.46957 17.5 9"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.5 3C17.0913 3 18.6174 3.63214 19.7426 4.75736C20.8679 5.88258 21.5 7.4087 21.5 9"
                                                      stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Book A call
                                        </a>
                                        <button class="btn btn-copy" data-clipboard-text="example@example.com">
                                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 10C8 9.46957 8.21071 8.96086 8.58579 8.58579C8.96086 8.21071 9.46957 8 10 8H18C18.5304 8 19.0391 8.21071 19.4142 8.58579C19.7893 8.96086 20 9.46957 20 10V18C20 18.5304 19.7893 19.0391 19.4142 19.4142C19.0391 19.7893 18.5304 20 18 20H10C9.46957 20 8.96086 19.7893 8.58579 19.4142C8.21071 19.0391 8 18.5304 8 18V10Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M16 8V6C16 5.46957 15.7893 4.96086 15.4142 4.58579C15.0391 4.21071 14.5304 4 14 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6V14C4 14.5304 4.21071 15.0391 4.58579 15.4142C4.96086 15.7893 5.46957 16 6 16H8"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Copy Email
                                        </button>
                                    </div>
                                    <div class="social-media-icon">
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card content-box-card">
                            <div class="card-body">
                                <div class="top-info">
                                    <div class="text">
                                        <h1 class="main-title">Hi, This Is <span>Cris Rayaan</span> 👋</h1>
                                        <p>A Passionate <b>Full Stack Developer</b> 🖥️ & <b>Product Designer</b> having
                                            <b>12 years</b> of Experiences over 24+ Country Worldwide. </p>
                                    </div>
                                    <div class="available-btn">
                                        <span><i class="fas fa-circle"></i> Available For Hire</span>
                                    </div>
                                </div>
                                <div class="counter-area">
                                    <div class="counter">
                                        <div class="counter-item">
                                            <h3 class="number">40+</h3>
                                            <p class="subtitle">Year of Experience</p>
                                        </div>
                                        <div class="counter-item">
                                            <h3 class="number">86+</h3>
                                            <p class="subtitle">Project Completed
                                            </p>
                                        </div>
                                        <div class="counter-item">
                                            <h3 class="number">72+</h3>
                                            <p class="subtitle">Happy Client
                                            </p>
                                        </div>
                                    </div>
                                    <div class="circle-area">
                                        <div class="circle-text">
                                            <img class="circle-image" src="assets/img/about-us/circle-text.svg" alt="circle-text">
                                            <img class="circle-image circle-image-light d-none"
                                                 src="assets/img/about-us/circle-text-light.svg" alt="circle-text">
                                            <span class="arrow-down">
                          <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 5V35" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            <path d="M15 30L20 35L25 30" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                          </svg>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="working-with-area">
                                    <h2 class="main-common-title">Working With 50+ Brands ✨ Worldwide
                                    </h2>
                                    <div class="working-with-main">
                                        <div class="items">
                                            <img src="assets/img/icons/notion.svg" alt="notion">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/webflow.svg" alt="webflow">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/mico.svg" alt="mico">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/framer.svg" alt="framer">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/zeplin.svg" alt="zeplin">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/figma.svg" alt="figma">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/notion.svg" alt="notion">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/webflow.svg" alt="webflow">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/mico.svg" alt="mico">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/framer.svg" alt="framer">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/zeplin.svg" alt="zeplin">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/figma.svg" alt="figma">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/notion.svg" alt="notion">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/webflow.svg" alt="webflow">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/mico.svg" alt="mico">
                                        </div>
                                        <div class="items">
                                            <img src="assets/img/icons/framer.svg" alt="framer">
                                        </div>
                                    </div>
                                </div>
                                <div class="client-feedback">
                                    <h2 class="main-common-title">Trusted By 1200+ Clients
                                    </h2>
                                    <div class="row client-feedback-slider">
                                        <div class="col-lg-6">
                                            <div class="feedback-item">
                                                <div class="feedback-top-info">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="website">
                                                        <a href="#">Framer.com
                                                            <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                                <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>
                                                        "We've been using BentoFolio for over a year now, and I must say, it's been a game-changer
                                                        for us. The user interface is intuitive and the feature.
                                                    </p>
                                                </div>
                                                <div class="designation">
                                                    <p><span>Oliver Clain</span> - Product Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="feedback-item">
                                                <div class="feedback-top-info">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="website">
                                                        <a href="#">Framer.com
                                                            <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                                <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>
                                                        "We've been using BentoFolio for over a year now, and I must say, it's been a game-changer
                                                        for us. The user interface is intuitive and the feature.
                                                    </p>
                                                </div>
                                                <div class="designation">
                                                    <p><span>Oliver Clain</span> - Product Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="feedback-item">
                                                <div class="feedback-top-info">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="website">
                                                        <a href="#">Framer.com
                                                            <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                                <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                                                      stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>
                                                        "We've been using BentoFolio for over a year now, and I must say, it's been a game-changer
                                                        for us. The user interface is intuitive and the feature.
                                                    </p>
                                                </div>
                                                <div class="designation">
                                                    <p><span>Oliver Clain</span> - Product Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="awards-recognitions">
                                    <h2 class="main-common-title">Awards and Recognitions
                                    </h2>
                                    <div class="awards-recognitions-main">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="d-block w-100">
                                                    <div class="awards-item">
                                                        <div class="award-name">
                                                            <div class="icon">
                                                                <img src="assets/img/icons/adobe.svg" alt="adobe">
                                                            </div>
                                                            <div class="text">
                                                                <h4 class="title">Adobe Design Contest</h4>
                                                                <p class="year">2022 - 2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="winner-tag">
                                                            <h4 class="title">
                                                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9Z"
                                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 15L15.4 20.89L16.998 17.657L20.596 17.889L17.196 12" stroke-width="1.5"
                                                                          stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M6.80234 12L3.40234 17.89L7.00034 17.657L8.59834 20.889L11.9983 15"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Runner Up
                                                            </h4>
                                                        </div>
                                                        <div class="project-btn">
                                <span>
                                  View Project
                                  <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                  </svg>
                                </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-block w-100">
                                                    <div class="awards-item">
                                                        <div class="award-name">
                                                            <div class="icon">
                                                                <img src="assets/img/icons/dribbble.svg" alt="dribbble">
                                                            </div>
                                                            <div class="text">
                                                                <h4 class="title">Dribbble Design Contest</h4>
                                                                <p class="year">2022 - 2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="winner-tag">
                                                            <h4 class="title">
                                                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9Z"
                                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 15L15.4 20.89L16.998 17.657L20.596 17.889L17.196 12" stroke-width="1.5"
                                                                          stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M6.80234 12L3.40234 17.89L7.00034 17.657L8.59834 20.889L11.9983 15"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Gold Winner
                                                            </h4>
                                                        </div>
                                                        <div class="project-btn">
                                <span>
                                  View Project
                                  <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                  </svg>
                                </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-block w-100">
                                                    <div class="awards-item">
                                                        <div class="award-name">
                                                            <div class="icon">
                                                                <img src="assets/img/icons/awwwards.png" alt="awwwards">
                                                            </div>
                                                            <div class="text">
                                                                <h4 class="title">Awwwards Nominee</h4>
                                                                <p class="year">2022 - 2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="winner-tag">
                                                            <h4 class="title">
                                                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9Z"
                                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 15L15.4 20.89L16.998 17.657L20.596 17.889L17.196 12" stroke-width="1.5"
                                                                          stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M6.80234 12L3.40234 17.89L7.00034 17.657L8.59834 20.889L11.9983 15"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Runner Up
                                                            </h4>
                                                        </div>
                                                        <div class="project-btn">
                                <span>
                                  View Project
                                  <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                  </svg>
                                </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-block w-100">
                                                    <div class="awards-item">
                                                        <div class="award-name">
                                                            <div class="icon">
                                                                <img src="assets/img/icons/behance.svg" alt="behance">
                                                            </div>
                                                            <div class="text">
                                                                <h4 class="title">Behance Design Contest</h4>
                                                                <p class="year">2022 - 2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="winner-tag">
                                                            <h4 class="title">
                                                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9Z"
                                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12 15L15.4 20.89L16.998 17.657L20.596 17.889L17.196 12" stroke-width="1.5"
                                                                          stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M6.80234 12L3.40234 17.89L7.00034 17.657L8.59834 20.889L11.9983 15"
                                                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Gold Winner
                                                            </h4>
                                                        </div>
                                                        <div class="project-btn">
                                <span>
                                  View Project
                                  <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                  </svg>
                                </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="article-publications">
                                    <h2 class="main-common-title">Article and Publications</h2>
                                    <div class="article-publications-main">
                                        <div class="row article-publications-slider">
                                            <div class="col-lg-6">
                                                <div class="article-publications-item">
                                                    <div class="image">
                                                        <a href="article.blade.php" class="d-block w-100">
                                                            <img src="assets/img/blog/blog-img-1.jpg" alt="blog-img-1" class="img-fluid w-100">
                                                        </a>
                                                        <a href="article.blade.php" class="tags">Development</a>
                                                    </div>
                                                    <div class="text">
                                                        <a href="article.blade.php" class="title">Want To Upgrade Your Brain? Stop Doing These 7
                                                            Things</a>
                                                        <ul class="list-unstyled">
                                                            <li>15 min read</li>
                                                            <li>Nov 6, 2023</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="article-publications-item">
                                                    <div class="image">
                                                        <a href="article.blade.php" class="d-block w-100">
                                                            <img src="assets/img/blog/blog-img-2.jpg" alt="blog-img-2" class="img-fluid w-100">
                                                        </a>
                                                        <a href="article.blade.php" class="tags">Development</a>
                                                    </div>
                                                    <div class="text">
                                                        <a href="article.blade.php" class="title">Want To Upgrade Your Brain? Stop Doing These 7
                                                            Things</a>
                                                        <ul class="list-unstyled">
                                                            <li>15 min read</li>
                                                            <li>Nov 6, 2023</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="article-publications-item">
                                                    <div class="image">
                                                        <a href="article.blade.php" class="d-block w-100">
                                                            <img src="assets/img/blog/blog-img-3.jpg" alt="blog-img-3" class="img-fluid w-100">
                                                        </a>
                                                        <a href="article.blade.php" class="tags">Development</a>
                                                    </div>
                                                    <div class="text">
                                                        <a href="article.blade.php" class="title">Want To Upgrade Your Brain? Stop Doing These 7
                                                            Things</a>
                                                        <ul class="list-unstyled">
                                                            <li>15 min read</li>
                                                            <li>Nov 6, 2023</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-together-slider">
                                    <div class="slider-main d-flex gap-4 align-items-center">
                                        <div class="slider-item">
                                            <a href="contact.blade.php">Let's 👋 Work Together</a>
                                            <a href="contact.blade.php">Let's 👋 Work Together</a>
                                        </div>
                                        <div class="slider-item">
                                            <a href="contact.blade.php">Let's 👋 Work Together</a>
                                            <a href="contact.blade.php">Let's 👋 Work Together</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- background shape area start -->
        <div class="background-shapes">
            <div class="shape-1 common-shape">
                <img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
            </div>
            <div class="shape-2 common-shape">
                <img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
            </div>
            <div class="threed-shape-1 move-with-cursor" data-value="1">
                <img src="assets/img/bg/object-3d-1.png" alt="object-3d-1">
            </div>
            <div class="threed-shape-2 move-with-cursor" data-value="1">
                <img src="assets/img/bg/object-3d-2.png" alt="object-3d-2">
            </div>
        </div>
        <!-- background shape area end -->
    </main>
@endsection
