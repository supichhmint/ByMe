@extends('layouts.headIndex') @section('title', 'Home') @section('content')

<body id="page-top" class="index">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Welcome</div>
                <div class="intro-lead-in">Are you looking for some Trip ?</div><br><br>
            
                <!-- laravel <a href="#services" class="page-scroll btn btn-xl">LOG IN</a>-->
                <a href="login" class="page-scroll btn btn-xl">LOG IN</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Agreement</h2>
                    <h3 class="section-subheading text-muted">เงื่อนไขและข้อตกลงง่ายๆ</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Booking</h4>
                    <p class="text-muted">จองง่ายๆแค่เพียงปลายนิ้ว</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-calendar-times-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Canceller</h4>
                    <p class="text-muted">ยกเลิกก่อน 7 วัน</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Refund</h4>
                    <p class="text-muted">รับประกันการคืนเงิน</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Search</h2>
                    <h3 class="section-subheading text-muted">" มองหาทริปอยู่ใช่ไหม? "</h3>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12 text-center">

                    <!-- Source Dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Source <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li><a href="#">Bangkok</a></li>
                            <li><a href="#">Lop Buri</a></li>
                            <li><a href="#">Chiang Mai</a></li>
                            <!--
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            -->
                        </ul>
                    </div>

                    <!-- destination Dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    destination <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li><a href="#">Bangkok</a></li>
                            <li><a href="#">Lop Buri</a></li>
                            <li><a href="#">Chiang Mai</a></li>
                            <!--
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            -->
                        </ul>
                    </div>

                    <!-- date Dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    date <span class="caret"></span>
                        </button>
                    </div><br><br><br><br>

                    <!-- search Button -->
                    <div id="success"></div>

                    <!--laravel-->
                    <a href="search"><button type="submit" class="btn btn-xl">Search Now!</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Highlight</h2>
                    <h3 class="section-subheading text-muted">ทริปท่องเที่ยวน่าสนใจอันดับต้น</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#tripModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/trip1_00.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>เขื่อนป่าสักชลสิทธิ์</h4>
                        <p class="text-muted">ลพบุรี</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#tripModalUnknow" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/unknowTrip.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNKNOW TRIP</h4>
                        <p class="text-muted">UNKNOW TRIP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#tripModalUnknow" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/unknowTrip.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNKNOW TRIP</h4>
                        <p class="text-muted">UNKNOW TRIP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#tripModalUnknow" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/unknowTrip.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNKNOW TRIP</h4>
                        <p class="text-muted">UNKNOW TRIP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#tripModalUnknow" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/unknowTrip.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNKNOW TRIP</h4>
                        <p class="text-muted">UNKNOW TRIP</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#tripModalUnknow" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/unknowTrip.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNKNOW TRIP</h4>
                        <p class="text-muted">UNKNOW TRIP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section 
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    -->

    <!-- Team Section 
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Developer Team</h2>
                    <h3 class="section-subheading text-muted">ทีมพัฒนา up to train</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Tonfon Puritchaya</h4>
                        <p class="text-muted">System Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ed Atiwat</h4>
                        <p class="text-muted">Front-end Developerr</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Mint supitchaya</h4>
                        <p class="text-muted">Back-end Devloper</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">อยู่ระหว่างการพัฒนา</p>
                </div>
            </div>
        </div>
    </section>

     <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="col-lg-12 text-center">
                    <h2 class="section-heading">thai railway</h2><br><br>
                   <iframe src="https://www.google.com/maps/d/embed?mid=1IJmjwx1ndajeDfh-s0QiDqfRwzQ&hl=en_US" width="640" height="480"></iframe> 
            </div>
        </div>
    </section>
    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">ติดต่อพวกเราได้โดยกรอกแบบฟอร์มด้านล่าง แล้วพวกเราจะรีบตอบกลับอย่างเร่งด่วน</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Up to train</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->


    <!-- Trip Modal 1 -->
    <!-- แก้ -->

    <div class="portfolio-modal modal fade" id="tripModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>เขื่อนป่าสักชลสิทธิ</h2>
                            <p class="item-intro text-muted">เที่ยว 1 วัน ชิวๆกับรถไฟไทย<br>by abc company</p>
                            <img class="img-responsive img-centered" src="img/portfolio/trip1_00.jpg" alt="">
                            <p>ทริปเที่ยวเพลินๆ 1 วันชิวๆ</p>

                            <br><br>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2 class="section-heading">Schedule</h2>
                                        <h3 class="section-subheading text-muted">" ไปไหนบ้างนะ "</h3>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>06.30-7.10</h4>
                                                        <h4 class="subheading">สถานีรถไฟหัวลำโพง</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">พร้อมกันที่สถานีรถไฟกรุงเทพ โดยมีเจ้าหน้าที่ของบริษัทฯ คอยให้การต้อนรับและอำนวยความสะดวกก่อนเดินทาง</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>10.00-10.40</h4>
                                                        <h4 class="subheading">รถไฟลอยน้ำ</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">ขบวนรถหยุด 40 นาที นำนักท่องเที่ยวชมทิวทัศน์และถ่ายภาพบริเวณ “เหนือเขื่อนป่าสักชลสิทธิ์”
                                                            พร้อมชม “รถไฟลอยน้ำ”</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>11.30-12.30</h4>
                                                        <h4 class="subheading">ร้านอาหารน่านน้ำป่าสัก</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">บริการอาหารกลางวัน ณ ร้านน่านน้ำป่าสัก</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>12.30-14.50</h4>
                                                        <h4 class="subheading">เขื่อนป่าสักชลสิทธิ์</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">ท่องเที่ยวบริเวณเขื่อนป่าสักชลสิทธิ์<br>o เพลิดเพลินกับวิถีชีวิตชุมชนไทยเบิ้ง
                                                            เป็นกลุ่มชนพื้นถิ่นที่ตั้งบ้านเรือนอยู่บริเวณลุ่มน้ำป่าสัก ในพื้นที่อำเภอพัฒนานิคม
                                                            อำเภอโคกสำโรง อำเภอสระโบสถ์ และอำเภอชัยบาดาล จังหวัดลพบุรี ชาวไทยเบิ้ง
                                                            มีขนบธรรมเนียมประเพณีและวัฒนธรรมคล้ายกลุ่มชนไทยภาคกลาง แต่ยังมีภาษา
                                                            ความเชื่อ เพลงพื้นบ้าน การละเล่น การทอผ้า ที่เป็นเอกลักษณ์ของกลุ่มชนอยู่
                                                            <br>o ชมพิพิธภัณฑ์การก่อสร้างเขื่อนป่าสักและโครงการพัฒนาลุ่มแม่น้ำป่าสักในพระราชดำริ
                                                            <br>o นั่งรถตัวหนอนชมสันเขื่อน
                                                            <br>o นั่งรถม้า ชื่นชมฟาร์มแพะ ฟาร์มแกะ
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <h4>Booking
                                                        <br><br>Now!
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <br><br>

                                <ul class="list-inline">
                                    <li>Travel Agency: abc company</li>
                                    <li>Date: 1 July 2017</li>
                                    <li>Cost: 500 baht</li>
                                </ul>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close This</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trip Unknow Modal 1 -->
    <!-- แก้ -->

    <div class="portfolio-modal modal fade" id="tripModalUnknow" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>UNKNOW TRIP</h2>
                            <p class="item-intro text-muted">จังหวัด<br>by abc company</p>
                            <img class="img-responsive img-centered" src="img/portfolio/unknowTrip.jpg" alt="">
                            <p>คำอธิบายทริป</p>

                            <br><br>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2 class="section-heading">Schedule</h2>
                                        <h3 class="section-subheading text-muted">" ไปไหนบ้างนะ "</h3>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>??.??-??.??</h4>
                                                        <h4 class="subheading">UNKNOW 01</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">คำอธิบาย?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>คำอธิบาย?</h4>
                                                        <h4 class="subheading">UNKNOW 02</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">คำอธิบาย?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>??.??-??.??</h4>
                                                        <h4 class="subheading">UNKNOW 03</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">คำอธิบาย?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                                                </div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading">
                                                        <h4>??.??-??.??</h4>
                                                        <h4 class="subheading">UNKNOW 04</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">คำอธิบาย?
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-inverted">
                                                <div class="timeline-image">
                                                    <h4>Booking
                                                        <br><br>Now!
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <br><br>

                                <ul class="list-inline">
                                    <li>Travel Agency: UNKNOW company</li>
                                    <li>Date: ? July ????</li>
                                    <li>Cost: ? baht</li>
                                </ul>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close This</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder
                                    for professionals. Startup Framework contains components and complex blocks (PSD+HTML
                                    Bootstrap themes and templates) which can easily be integrated into almost any design.
                                    All of these components are made in the same style, and can easily be integrated into
                                    projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Portfolio Modal 1 -->
    <!-- แก้ -->

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam
                                    quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis
                                    facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of
                                    them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>,
                                    or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2016</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder
                                    for professionals. Startup Framework contains components and complex blocks (PSD+HTML
                                    Bootstrap themes and templates) which can easily be integrated into almost any design.
                                    All of these components are made in the same style, and can easily be integrated into
                                    projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
                                    This is bright and spacious design perfect for people or startup companies looking to
                                    showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a
                                        href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and
                                    clean one page web template that was made exclusively for Best PSD Freebies. This template
                                    has a great portfolio, timeline, and meet your team sections that can be easily modified
                                    to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
                                    Escape is a one page web template that was designed with agencies in mind. This template
                                    is ideal for those looking for a simple one page solution to describe your business and
                                    offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>.
                                    Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful
                                    template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
        crossorigin="anonymous"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/agency.min.js"></script>

</body>
 @endsection
