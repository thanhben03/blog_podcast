<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bentofolio - Bootstrap Personal Portfolio Template</title>
  <meta name="description" content="Bentofolio - Bootstrap Personal Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawsome/css/all.min.css">
  <link rel="stylesheet" href="assets/fontawsome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
  <div id="page-content">
    <!-- header part start -->
    <header class="header-area">
      <nav class="navbar">
        <div class="container">
          <div class="menu-container">
            <div class="logo">
              <a class="navbar-brand me-0" href="index.blade.php">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 1.5C0 1.10218 0.158035 0.720644 0.43934 0.43934C0.720644 0.158035 1.10218 0 1.5 0L9 0C9.39782 0 9.77936 0.158035 10.0607 0.43934C10.342 0.720644 10.5 1.10218 10.5 1.5V22.5C10.5 22.8978 10.342 23.2794 10.0607 23.5607C9.77936 23.842 9.39782 24 9 24H1.5C1.10218 24 0.720644 23.842 0.43934 23.5607C0.158035 23.2794 0 22.8978 0 22.5V1.5ZM13.5 1.5C13.5 1.10218 13.658 0.720644 13.9393 0.43934C14.2206 0.158035 14.6022 0 15 0L22.5 0C22.8978 0 23.2794 0.158035 23.5607 0.43934C23.842 0.720644 24 1.10218 24 1.5V9C24 9.39782 23.842 9.77936 23.5607 10.0607C23.2794 10.342 22.8978 10.5 22.5 10.5H15C14.6022 10.5 14.2206 10.342 13.9393 10.0607C13.658 9.77936 13.5 9.39782 13.5 9V1.5ZM13.5 15C13.5 14.6022 13.658 14.2206 13.9393 13.9393C14.2206 13.658 14.6022 13.5 15 13.5H22.5C22.8978 13.5 23.2794 13.658 23.5607 13.9393C23.842 14.2206 24 14.6022 24 15V22.5C24 22.8978 23.842 23.2794 23.5607 23.5607C23.2794 23.842 22.8978 24 22.5 24H15C14.6022 24 14.2206 23.842 13.9393 23.5607C13.658 23.2794 13.5 22.8978 13.5 22.5V15Z"
                    class="logo-icon" />
                </svg>
                <span>Bento<span class="primary">Folio</span></span>
              </a>
            </div>
            <div class="navbar-main d-flex flex-grow-1">
              <div class="logo inner-logo d-block d-xl-none">
                <a class="navbar-brand me-0" href="index.blade.php">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 1.5C0 1.10218 0.158035 0.720644 0.43934 0.43934C0.720644 0.158035 1.10218 0 1.5 0L9 0C9.39782 0 9.77936 0.158035 10.0607 0.43934C10.342 0.720644 10.5 1.10218 10.5 1.5V22.5C10.5 22.8978 10.342 23.2794 10.0607 23.5607C9.77936 23.842 9.39782 24 9 24H1.5C1.10218 24 0.720644 23.842 0.43934 23.5607C0.158035 23.2794 0 22.8978 0 22.5V1.5ZM13.5 1.5C13.5 1.10218 13.658 0.720644 13.9393 0.43934C14.2206 0.158035 14.6022 0 15 0L22.5 0C22.8978 0 23.2794 0.158035 23.5607 0.43934C23.842 0.720644 24 1.10218 24 1.5V9C24 9.39782 23.842 9.77936 23.5607 10.0607C23.2794 10.342 22.8978 10.5 22.5 10.5H15C14.6022 10.5 14.2206 10.342 13.9393 10.0607C13.658 9.77936 13.5 9.39782 13.5 9V1.5ZM13.5 15C13.5 14.6022 13.658 14.2206 13.9393 13.9393C14.2206 13.658 14.6022 13.5 15 13.5H22.5C22.8978 13.5 23.2794 13.658 23.5607 13.9393C23.842 14.2206 24 14.6022 24 15V22.5C24 22.8978 23.842 23.2794 23.5607 23.5607C23.2794 23.842 22.8978 24 22.5 24H15C14.6022 24 14.2206 23.842 13.9393 23.5607C13.658 23.2794 13.5 22.8978 13.5 22.5V15Z"
                      class="logo-icon" />
                  </svg>
                  <span>Bento<span class="primary">Folio</span></span>
                </a>
              </div>
                <x-nav />
              <div class="header-right-info d-flex align-items-center">
                <button class="theme-control-btn">
                  <span class="dark">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.8005 3C10.207 3.0003 8.64356 3.44286 7.27683 4.28049C5.91011 5.11811 4.79139 6.31937 4.04002 7.75612C3.28865 9.19288 2.93281 10.8112 3.01046 12.4386C3.08811 14.0659 3.59633 15.6411 4.48091 16.9963C5.3655 18.3514 6.59326 19.4356 8.03324 20.1333C9.47322 20.8309 11.0714 21.1157 12.6573 20.9574C14.2432 20.7991 15.7573 20.2036 17.0381 19.2344C18.319 18.2652 19.3185 16.9587 19.9301 15.4542C20.2302 14.7162 19.5111 13.9746 18.7875 14.2752C17.5475 14.7888 16.1706 14.8418 14.8963 14.425C13.622 14.0082 12.5308 13.1479 11.8126 11.9937C11.0943 10.8396 10.7943 9.4645 10.9648 8.10764C11.1353 6.75077 11.7655 5.49792 12.7458 4.5669L12.8136 4.4949C13.2986 3.9279 12.913 3.0072 12.1464 3.0072H11.9122L11.8524 3.0018L11.7996 3H11.8005Z"
                        fill="#1A1F2C" />
                    </svg>
                    <small class="theme-text d-block d-xl-none">Change appearance</small>
                  </span>
                  <span class="light">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M12 19C12.2449 19 12.4813 19.09 12.6644 19.2527C12.8474 19.4155 12.9643 19.6397 12.993 19.883L13 20V21C12.9997 21.2549 12.9021 21.5 12.7272 21.6854C12.5522 21.8707 12.313 21.9822 12.0586 21.9972C11.8042 22.0121 11.5536 21.9293 11.3582 21.7657C11.1627 21.6021 11.0371 21.3701 11.007 21.117L11 21V20C11 19.7348 11.1054 19.4804 11.2929 19.2929C11.4804 19.1054 11.7348 19 12 19Z"
                        fill="#FD7E41" />
                      <path
                        d="M18.3127 16.9099L18.4067 16.9929L19.1067 17.6929C19.2861 17.8729 19.3902 18.1144 19.398 18.3683C19.4057 18.6223 19.3165 18.8697 19.1485 19.0602C18.9804 19.2508 18.7462 19.3702 18.4933 19.3943C18.2403 19.4184 17.9877 19.3454 17.7867 19.1899L17.6927 19.1069L16.9927 18.4069C16.8202 18.2347 16.7165 18.0053 16.7012 17.7619C16.6859 17.5186 16.76 17.278 16.9097 17.0855C17.0593 16.893 17.2741 16.7618 17.5137 16.7166C17.7533 16.6713 18.0012 16.7152 18.2107 16.8399L18.3127 16.9099Z"
                        fill="#FD7E41" />
                      <path
                        d="M7.00747 16.993C7.17965 17.1652 7.28308 17.3943 7.29836 17.6373C7.31364 17.8803 7.23972 18.1206 7.09047 18.313L7.00747 18.407L6.30747 19.107C6.12751 19.2863 5.88604 19.3905 5.63209 19.3982C5.37814 19.406 5.13076 19.3168 4.94019 19.1487C4.74963 18.9807 4.63017 18.7464 4.60607 18.4935C4.58198 18.2406 4.65506 17.988 4.81047 17.787L4.89347 17.693L5.59347 16.993C5.781 16.8055 6.03531 16.7002 6.30047 16.7002C6.56563 16.7002 6.81994 16.8055 7.00747 16.993Z"
                        fill="#FD7E41" />
                      <path
                        d="M3.99987 11C4.25475 11.0003 4.4999 11.0979 4.68524 11.2728C4.87057 11.4478 4.9821 11.687 4.99704 11.9414C5.01198 12.1958 4.92919 12.4464 4.7656 12.6418C4.60201 12.8373 4.36996 12.9629 4.11687 12.993L3.99987 13H2.99987C2.74499 12.9997 2.49984 12.9021 2.3145 12.7272C2.12916 12.5522 2.01763 12.313 2.0027 12.0586C1.98776 11.8042 2.07054 11.5536 2.23413 11.3582C2.39772 11.1627 2.62977 11.0371 2.88287 11.007L2.99987 11H3.99987Z"
                        fill="#FD7E41" />
                      <path
                        d="M20.9999 11C21.2547 11.0003 21.4999 11.0979 21.6852 11.2728C21.8706 11.4478 21.9821 11.687 21.997 11.9414C22.012 12.1958 21.9292 12.4464 21.7656 12.6418C21.602 12.8373 21.37 12.9629 21.1169 12.993L20.9999 13H19.9999C19.745 12.9997 19.4998 12.9021 19.3145 12.7272C19.1292 12.5522 19.0176 12.313 19.0027 12.0586C18.9878 11.8042 19.0705 11.5536 19.2341 11.3582C19.3977 11.1627 19.6298 11.0371 19.8829 11.007L19.9999 11H20.9999Z"
                        fill="#FD7E41" />
                      <path
                        d="M6.21264 4.80985L6.30664 4.89285L7.00664 5.59285C7.18599 5.77281 7.29011 6.01429 7.29787 6.26824C7.30562 6.52219 7.21642 6.76957 7.04839 6.96013C6.88036 7.1507 6.64609 7.27016 6.39316 7.29425C6.14024 7.31834 5.88763 7.24526 5.68664 7.08985L5.59264 7.00685L4.89264 6.30685C4.72073 6.13453 4.61757 5.90543 4.6025 5.66248C4.58744 5.41954 4.6615 5.17945 4.8108 4.98721C4.9601 4.79497 5.1744 4.66378 5.41351 4.61824C5.65262 4.57271 5.90013 4.61594 6.10964 4.73985L6.21264 4.80985Z"
                        fill="#FD7E41" />
                      <path
                        d="M19.1071 4.89288C19.2793 5.06508 19.3827 5.29418 19.398 5.5372C19.4132 5.78023 19.3393 6.02048 19.1901 6.21288L19.1071 6.30688L18.4071 7.00688C18.2271 7.18623 17.9856 7.29036 17.7317 7.29811C17.4777 7.30587 17.2304 7.21667 17.0398 7.04864C16.8492 6.8806 16.7298 6.64633 16.7057 6.39341C16.6816 6.14049 16.7547 5.88788 16.9101 5.68688L16.9931 5.59288L17.6931 4.89288C17.8806 4.70541 18.1349 4.6001 18.4001 4.6001C18.6652 4.6001 18.9196 4.70541 19.1071 4.89288Z"
                        fill="#FD7E41" />
                      <path
                        d="M12 2C12.2449 2.00003 12.4813 2.08996 12.6644 2.25272C12.8474 2.41547 12.9643 2.63975 12.993 2.883L13 3V4C12.9997 4.25488 12.9021 4.50003 12.7272 4.68537C12.5522 4.8707 12.313 4.98223 12.0586 4.99717C11.8042 5.01211 11.5536 4.92933 11.3582 4.76573C11.1627 4.60214 11.0371 4.3701 11.007 4.117L11 4V3C11 2.73478 11.1054 2.48043 11.2929 2.29289C11.4804 2.10536 11.7348 2 12 2Z"
                        fill="#FD7E41" />
                      <path
                        d="M12 7C12.9797 6.99994 13.9378 7.28769 14.7553 7.8275C15.5729 8.36731 16.2138 9.1354 16.5986 10.0364C16.9833 10.9373 17.0949 11.9315 16.9195 12.8953C16.7441 13.8592 16.2893 14.7502 15.6118 15.4579C14.9343 16.1655 14.0638 16.6585 13.1085 16.8756C12.1532 17.0928 11.1552 17.0245 10.2383 16.6793C9.3215 16.334 8.52629 15.7271 7.95146 14.9338C7.37663 14.1405 7.04752 13.1958 7.005 12.217L7 12L7.005 11.783C7.06092 10.4958 7.61161 9.27978 8.54222 8.38866C9.47284 7.49754 10.7115 7.00007 12 7Z"
                        fill="#FD7E41" />
                    </svg>
                    <small class="theme-text d-block d-xl-none">Change appearance</small>
                  </span>
                </button>
                <a href="contact.html" class="lets-talk-btn">
                  Let's Talk
                  <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="mobile-menu-overlay d-block d-lg-none"></div>
            <div class="mobile-menu-control-bar d-block d-xl-none">
              <button class="mobile-menu-control-bar">
                <i class="fas fa-bars"></i>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- header part end -->

    <!-- main area part start -->
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
                <div class="card-body portfolio-card contact-card">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title">Let's 👋 <span>Work</span> Together</h1>
                      <p>I'm here to help if you're searching for a product designer to bring your idea to life or a
                        design partner to help take your business to the next level.</p>
                    </div>
                  </div>
                  <div class="contact-area">
                    <div class="leave-comments-area">
                      <div class="comments-box">
                        <form id="contact-form" action="assets/mail.php" method="POST">
                          <div class="row gx-3">
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Name</label>
                                <input name="name" required type="text" class="form-control shadow-none" placeholder="Enter your name">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none" placeholder="Enter your email">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Subject</label>
                                <input name="subject" required type="text" class="form-control shadow-none" placeholder="Subject">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Budget</label>
                                <select name="budget" required class="form-select shadow-none">
                                  <option disabled selected>Select budget...</option>
                                  <option value="$5000">$5000</option>
                                  <option value="$5000 - $1000">$5000 - $10000</option>
                                  <option value="$10000 - $2000">$10000 - $20000</option>
                                  <option value="$20000">$20000+</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Comment</label>
                                <textarea name="message" class="form-control shadow-none" rows="4"
                                  placeholder="Type details about your inquiry"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <button class="submit-btn" type="submit">
                                Send Message
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </button>
                            </div>
                          </div>
                        </form>
                        <p class="ajax-response mb-0"></p>
                      </div>
                    </div>
                    <div class="contact-map-area">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25280012016!2d-74.14448732737499!3d40.69763123331177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1711832776336!5m2!1sen!2sbd"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="frequently-asked-questions">
                      <h2 class="main-common-title">Frequently Asked Questions
                      </h2>
                      <div class="frequently-asked-questions-main">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What does a product designer need to know?
                                <span class="ms-auto">
                                  <span class="icon ms-4">
                                    <img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
                                    <img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
                                  </span>
                                </span>
                              </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>I'm here to help if you're searching for a product designer to bring your idea to
                                  life
                                  or a design partner to help take your business to the next level.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What does a product designer need to know?
                                <span class="ms-auto">
                                  <span class="icon ms-4">
                                    <img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
                                    <img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
                                  </span>
                                </span>
                              </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>I'm here to help if you're searching for a product designer to bring your idea to
                                  life
                                  or
                                  a design partner to help take your business to the next level.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What does a product designer need to know?
                                <span class="ms-auto">
                                  <span class="icon ms-4">
                                    <img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
                                    <img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
                                  </span>
                                </span>
                              </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>I'm here to help if you're searching for a product designer to bring your idea to
                                  life
                                  or
                                  a design partner to help take your business to the next level.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What does a product designer need to know?
                                <span class="ms-auto">
                                  <span class="icon ms-4">
                                    <img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
                                    <img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
                                  </span>
                                </span>
                              </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>I'm here to help if you're searching for a product designer to bring your idea to
                                  life
                                  or
                                  a design partner to help take your business to the next level.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What does a product designer need to know?
                                <span class="ms-auto">
                                  <span class="icon ms-4">
                                    <img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
                                    <img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
                                  </span>
                                </span>
                              </button>
                            </h4>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>I'm here to help if you're searching for a product designer to bring your idea to
                                  life
                                  or
                                  a design partner to help take your business to the next level.</p>
                              </div>
                            </div>
                          </div>
                        </div>
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
    <!-- main area part end -->

    <!-- footer part start -->
    <footer class="footer-area">
      <div class="container">
        <div class="text text-center">
          <p>@ BentoFolio 2024, Design By <a href="#">MarvelTheme</a></p>
        </div>
      </div>
    </footer>
    <!-- footer part end -->
  </div>

  <!-- JS here -->
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/clipboard.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>


</html>
