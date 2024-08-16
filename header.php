    <!-- Trigger button to open the modal -->
    <!-- <button id="openModalBtn" >Open Modal</button> -->

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="modalForm" class="contact-form-validated faq-one__form" method="post" novalidate="novalidate">
                <!-- form fields here -->
                <div class="result"></div>
            </form>
        </div>
    </div>

    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="index.php"><img src="assets\images\shapes\Sreyasi_op3.png" width="250px" /></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Our innovative solutions reduce costs and enhance performance, driving growth for your business.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="process_form.php" class="contact-form-validated" novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="thm-btn form-inner__btn">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->



    <header class="main-header">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="container">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.php"><img src="assets\images\shapes\Sreyasi_op3.png" alt=""></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="">
                                        <a href="index.php">Home </a>
                                    </li>
                                    <li>
                                        <a href="about.php">About</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="technical_management.php">Technical Management</a></li>
                                            <li><a href="Crew_Management.php">Crew Management</a></li>
                                            <li><a href="Maritime_Consultancy.php">Maritime Consultancy</a></li>
                                            <li><a href="flag_state_documentation.php">Flag State Documentation</a></li>
                                            <li><a href="travel_management.php">Travel Management</a></li>
                                            <li><a href="crew_training.php">Crew Training & Education</a></li>
                                           
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">CDC/COC</a>
                                        <ul>
                                            <li><a href="panama_coc.php">Panama CDC/COC</a></li>
                                            <li><a href="honduras_coc.php">Honduras CDC/COC</a></li>
                                            <li><a href="liberian_coc.php">Liberian CDC/COC</a></li>
                                            <li><a href="cook_island_coc.php">Cook Island CDC/COC</a></li>
                                            <li><a href="st_kitts_nevis_cdc.php">St. Kitts & Nevis CDC/COC</a></li>
                                            <li><a href="palau_coc.php">Palau CDC/COC</a></li>
                                            <li><a href="indian_cdc.php">Indian CDC/COC</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Join With Us</a>
                                        <ul>
                                            <li><a href="sea_job.php">Sea Jobs</a></li>
                                            <li><a href="shore_job.php">Shore Jobs</a></li>

                                        </ul>
                                    </li>

                                    <!-- <li class="">
                                    <a href="#">Blog</a>
                                </li> -->
                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-nav-sidebar-btn-box">
                                <!-- <div class="main-menu__nav-sidebar-icon">
                                    <a class="navSidebar-button" href="#">
                                        <span class="icon-dots-menu-one"></span>
                                        <span class="icon-dots-menu-two"></span>
                                        <span class="icon-dots-menu-three"></span>
                                    </a>
                                </div> -->
                                <div class="main-menu__btn-box">
                                    <a onclick=openModal() href="contact.php" class="thm-btn main-menu__btn">
                                        Get a Free Quote
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div>