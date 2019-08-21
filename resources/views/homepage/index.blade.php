@extends('layouts.app')

@section('content')

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                            <a href="/"><i class="far fa-arrow-alt-circle-left fa-3x"></i></a>

                        {{--<ul class="contact-info">--}}
                            {{--<li>--}}
                                {{--<a href="/"><i class="business-icon-arrow-pointing-to-left"></i></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="btn btn-style-1 waves mb-0" href="{{ route('resume.download') }}">Download CV</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div><!-- col -->
                    <div class="col text-right">
                        <a class="btn btn-style-1 waves mb-0" href="{{ route('resume.download') }}">Download CV</a>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-fluid -->

        </header><!-- HEADER -->

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">

                        <div class="personal-info style-1">
                            <div class="profile-image">

                                {{--<img src="./images/profile-image.jpg" alt="">--}}
                                <img src="{{asset('images/profile/jack2.jpg')}}" alt="">

                            </div><!-- profile-image -->
                            <div class="personal-details">

                                <h1>Jiajie Fan</h1>
                                <h4>Software Engineer</h4>

                                <ul>
                                    <li>
                                        <span>Age: </span>
                                        25
                                    </li>
                                    <li>
                                        <span>E-mail: </span>
                                        <a href="mailto:#">dlfjj123@gmail.com</a>
                                    </li>
                                    <li>
                                        <span>Favourite Food: </span>
                                        Sashimi
                                    </li>
                                </ul>

                                <div class="social-media">

                                    <a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                                    <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>

                                </div><!-- social-media -->

                            </div><!-- personal-details -->
                        </div><!-- personal-info -->

                        <div class="headline">

                            <h2>About me</h2>
                            <h6>What I love</h6>

                        </div><!-- headline -->

                        <p>
                            Well-rounded software engineer with
                            two years’ experience building web
                            application and enhancing
                            corporation's database effectiveness;
                            Able to write well structured code for
                            project continuity; Skills include
                            computer networking, analytical
                            thinking and creative problem
                            solving; Sophisticated with SQL, SAS,
                            PHP, Python, Javascript and Excel.
                        </p>

                        {{--<div class="row mt-5">--}}
                        {{--<div class="col-sm-6">--}}

                        {{--<div class="counter">--}}

                        {{--<div class="counter-value" data-value="3"></div>--}}
                        {{--<div class="counter-details">Coder <br> degrees</div>--}}

                        {{--</div><!--counter -->--}}

                        {{--</div><!-- col -->--}}
                        {{--<div class="col-sm-6">--}}

                        {{--<div class="counter">--}}

                        {{--<div class="counter-value" data-value="25"></div>--}}
                        {{--<div class="counter-details">Projects <br> completed</div>--}}

                        {{--</div><!--counter -->--}}

                        {{--</div><!-- col -->--}}
                        {{--<div class="col-sm-6">--}}

                        {{--<div class="counter">--}}

                        {{--<div class="counter-value" data-value="311"></div>--}}
                        {{--<div class="counter-details">Satisfied <br> clients</div>--}}

                        {{--</div><!--counter -->--}}

                        {{--</div><!-- col -->--}}
                        {{--<div class="col-sm-6">--}}

                        {{--<div class="counter">--}}

                        {{--<div class="counter-value" data-value="2"></div>--}}
                        {{--<div class="counter-details">Design <br> courses</div>--}}

                        {{--</div><!--counter -->--}}

                        {{--</div><!-- col -->--}}
                        {{--</div>--}}

                        <div class="headline mt-5">

                            <h2>My passions</h2>
                            <h6>What I love</h6>

                        </div><!-- headline -->

                        <div class="row">
                            <div class="col-sm-4 p-0">

                                <div class="pie-chart-container">
                                    <div class="pie-chart" data-percent="95" data-size="150" data-line-width="3" data-track-color="#ebebeb"
                                         data-bar-color="#6e14c9">

                                        <div class="pie-chart-details">

                                            <div class="pie-chart-percent">
                                                <span class="value"></span>%
                                            </div><!-- pie-chart-percent -->

                                            <p>Web Development</p>

                                        </div><!-- pie-chart-details -->

                                    </div><!-- pie-chart -->
                                </div><!-- pie-chart-container -->

                            </div><!-- col -->
                            <div class="col-sm-4 p-0">


                                <div class="pie-chart-container">
                                    <div class="pie-chart" data-percent="85" data-size="150" data-line-width="3" data-track-color="#ebebeb"
                                         data-bar-color="#6e14c9">

                                        <div class="pie-chart-details">

                                            <div class="pie-chart-percent">
                                                <span class="value"></span>%
                                            </div><!-- pie-chart-percent -->

                                            <p>Data Analytics</p>

                                        </div><!-- pie-chart-details -->

                                    </div><!-- pie-chart -->
                                </div><!-- pie-chart-container -->

                            </div><!-- col -->
                            <div class="col-sm-4 p-0">

                                <div class="pie-chart-container">
                                    <div class="pie-chart" data-percent="65" data-size="150" data-line-width="3" data-track-color="#ebebeb"
                                         data-bar-color="#6e14c9">

                                        <div class="pie-chart-details">

                                            <div class="pie-chart-percent">
                                                <span class="value"></span>%
                                            </div><!-- pie-chart-percent -->

                                            <p>Algorithm</p>

                                        </div><!-- pie-chart-details -->

                                    </div><!-- pie-chart -->
                                </div><!-- pie-chart-container -->

                            </div><!-- col -->
                        </div><!-- row -->

                        <div class="headline mt-5">

                            <h2>Technical Skills</h2>
                            <h6>I am good at</h6>

                        </div><!-- headline -->

                        <br>

                        <div class="skills-container">
                            <div class="skills-item">

                                <div class="skills-item-title">

                                    <h4>Programming</h4>
                                    <span>Expert</span>

                                </div><!-- skills-item-title -->

                                {{--<p>Practice makes perfect</p>--}}

                                <br>

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="90">
                                            <span>90%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">PHP</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="85">
                                            <span>85%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Javascript</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="87">
                                            <span>87%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Python</div>

                                </div><!-- progress-bar-container -->
                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="95">
                                            <span>95%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">SQL</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="85">
                                            <span>85%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">HTML & CSS</div>

                                </div><!-- progress-bar-container -->

                            </div><!-- skills-item -->
                            <div class="skills-item">

                                <div class="skills-item-title">

                                    <h4>Framework & Software</h4>
                                    <span>Expert</span>

                                </div><!-- skills-item-title -->

                                {{--<p>Diam sit amet massa tempor porta semper eget ex. Mauris ornare lacus in efficitur volutpat. Vestibulum--}}
                                {{--ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam congue id odio a--}}
                                {{--maximus.</p>--}}

                                <br>

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="90">
                                            <span>90%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Laravel</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="98">
                                            <span>98%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Vue.js</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="80">
                                            <span>80%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Apache Server</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="60">
                                            <span>60%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Apache Hadoop</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="86">
                                            <span>86%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Digital Ocean</div>

                                </div><!-- progress-bar-container -->


                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="70">
                                            <span>70%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">PHPStorm</div>

                                </div><!-- progress-bar-container -->

                                <div class="progress-bar-container">

                                    <div class="progress">
                                        <div class="progress-bar" data-width="80">
                                            <span>80%</span>
                                        </div><!-- progress-bar -->
                                    </div><!-- progress -->

                                    <div class="progress-bar-title">Linux</div>

                                </div><!-- progress-bar-container -->

                            </div><!-- skills-item -->
                        </div><!-- skills-container -->

                    </div><!-- col -->
                    <div class="col-xl-1"></div>
                    <div class="col-xl-6 ml-auto mr-auto">

                        <div class="headline">

                            <h2>Work Experience</h2>
                            <h6>Previous jobs</h6>

                        </div><!-- headline -->

                        <br>

                        <div class="work-experience-container">
                            <div class="work-experience-item">

                                <div class="work-experience-title">

                                    <h4>Software Engineer</h4>
                                    <h5>American Dunnage Inc</h5>
                                    <h6>January 2018 - Present</h6>

                                </div><!-- work-experience-title -->

                                <p>
                                    Responsible for maintaining a database for the companies
                                    database using MySQL; Builds and designs company website
                                    using Vuejs and bootstrap. Continues to develop company’s ERP
                                    system with Laravel and PHP.
                                </p>

                                <br>

                                <ul class="disk-list">
                                    <li>Using Laravel Query Builder to write procedures and MySQL Workbench to manage company’s MySQL database</li>
                                    <li>Migrated slow-running legacy Laravel 4.2 to Laravel 5.6 for company’s ERP users to lower security risk of deprecated package and enhanced web application’s overall performance</li>
                                    <li>Modified existing report module and added purchasing report feature by adding Laravel controller, providing request API and generating necessary routes for CRUD requests handling</li>
                                    <li>Added feature to export desired data to formatted excel format using Maatwebsite/Excel package in PHP </li>
                                    <li>Devised and implemented sale module for tracking detail of every sale call using Twilio REST API with PHP</li>
                                    <li>Developed php using barryvdh/laravel-snappy pdf to print out orders’ invoices</li>
                                    <li>Using Vue.js and Bootstrap framework as front-end with input validation to create showcase website in Javascript, CSS, HTML as a independent project</li>
                                    <li>Created a simple apache server with MySQL database as the back-end of the showcase website for collecting potential contact information</li>
                                </ul>

                            </div><!-- work-experience-item -->
                            <div class="work-experience-item">

                                <div class="work-experience-title">

                                    <h4>Data Analyst Intern</h4>
                                    <h5>Unshackled Ventures</h5>
                                    <h6>July 2017 - December 2017</h6>

                                </div><!-- work-experience-title -->

                                <p>
                                    Responsible for building a web scrapying tool for collecting data from linkedin, facebook, and twitter; Cleaned up and transformed to a readable format.
                                </p>

                                <br>

                                <ul class="disk-list">
                                    <li>Wrote Python scripts for selenium, scrapy, and beautifulsoup package to mine data from multiple websites</li>
                                    <li>Using Python scripts for handling 20 GB CSV data to perform ELT of the data through AWS EC2 cloud</li>
                                    <li>Analyzed data using Tableau’s table calculation to find potential investors for company’s portfolio’s startups.</li>
                                </ul>

                            </div><!-- work-experience-item -->
                            <div class="work-experience-item">

                                <div class="work-experience-title">

                                    <h4>Data Analyst Intern</h4>
                                    <h5>Tianyuan Technology Information Corp</h5>
                                    <h6>May 2016 - August 2017</h6>

                                </div><!-- work-experience-title -->

                                <p>
                                    Big data summer training program
                                </p>

                                <br>

                                <ul class="disk-list">
                                    <li>Assisted the team in the report of a phone’s price prediction based on big data provided by Chinese carriers</li>
                                    <li>Implemented a pre-built machine learning script on the data using Hadoop distributed file system.</li>
                                    <li>Wrote Python script to mine additional data from e-commerce website.</li>
                                </ul>

                            </div><!-- work-experience-item -->

                        </div><!-- work-experience-container -->

                        <div class="headline">

                            <h2>Education</h2>
                            <h6>Academic career</h6>

                        </div><!-- headline -->

                        <div class="education-container" id="accordion1">
                            <div class="education-item">

                                <div class="education-title" data-toggle="collapse" data-target="#collapse1-1">

                                    <h4>Bachelor of Business Administration, Management Information System</h4>
                                    <h5>Baylor University</h5>
                                    <h6>Graduated in May 2017 (4 years)</h6>

                                </div><!-- education-title -->

                                <p class="collapse" id="collapse1-1" data-parent="#accordion1">
                                    I graduated from Baylor University with a BBA in management of information system. The school taught me the fundamental knowledge of business and technology.
                                    I learnt to manage database with SQL Server, made my own game with JAVA, and created POS system with my teammates.
                                </p>

                            </div><!-- education-item -->
                        </div><!-- education-container -->

                        <div class="portfolio-container">

                            <div class="headline mb-0">

                                <h2>Portfolio</h2>
                                <h6>My work</h6>

                            </div><!-- headline -->


                        </div><!-- portfolio-container -->

                        <div class="isotope cols-3 gutter mt-5">
                            <div class="isotope-item categ-1 categ-2">

                                <div class="portfolio-item">

                                    <div class="portfolio-item-thumbnail">

                                        <img src="{{asset('images/portfolio/portfolio1.gif')}}" alt="">


                                        <div class="portfolio-item-hover">

                                            <div class="portfolio-item-description">

                                                <h5><a href="#">Design project</a></h5>
                                                <p>Branding</p>

                                            </div><!-- portfolio-item-description -->

                                            <a class="fancybox zoom-action" data-fancybox="portfolio"
                                               href="{{asset('images/portfolio/portfolio2.gif')}}">
                                                <i class="business-icon-magnifying-glass"></i>
                                            </a>

                                        </div><!-- portfolio-item-hover -->

                                    </div><!-- portfolio-item-thumbnail -->

                                </div><!-- portfolio-item -->

                            </div><!-- isotope-item -->

                            <div class="isotope-item categ-3 categ-4">

                                <div class="portfolio-item">

                                    <div class="portfolio-item-thumbnail">

                                        <img src="{{asset('images/portfolio/image-2.jpg')}}" alt="">

                                        <div class="portfolio-item-hover">

                                            <div class="portfolio-item-description">

                                                <h5><a href="#">Design project</a></h5>
                                                <p>Branding</p>

                                            </div><!-- portfolio-item-description -->

                                            {{--<a class="fancybox zoom-action" data-fancybox="portfolio"--}}
                                               {{--href="{{asset('images/portfolio/image-2.jpg')}}">--}}
                                                {{--<i class="business-icon-magnifying-glass"></i>--}}
                                            {{--</a>--}}
                                            <div class="ancybox zoom-action embed-responsive embed-responsive-16by9" data-fancybox="portfolio">
                                                <i class="business-icon-magnifying-glass"></i>
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                            </div>

                                        </div><!-- portfolio-item-hover -->

                                    </div><!-- portfolio-item-thumbnail -->

                                </div><!-- portfolio-item -->

                            </div><!-- isotope-item -->

                            <div class="isotope-item categ-3 categ-4">

                                <div class="portfolio-item">

                                    <div class="portfolio-item-thumbnail">

                                        <img src="{{asset('images/portfolio/image-2.jpg')}}" alt="">

                                        <div class="portfolio-item-hover">

                                            <div class="portfolio-item-description">

                                                <h5><a href="#">Design project</a></h5>
                                                <p>Branding</p>

                                            </div><!-- portfolio-item-description -->

                                            <a class="fancybox zoom-action" data-fancybox="portfolio"
                                               href="{{asset('images/portfolio/image-2.jpg')}}">
                                                <i class="business-icon-magnifying-glass"></i>
                                            </a>

                                        </div><!-- portfolio-item-hover -->

                                    </div><!-- portfolio-item-thumbnail -->

                                </div><!-- portfolio-item -->

                            </div><!-- isotope-item -->

                        </div><!-- isotope-item -->
                    </div><!-- col -->
                </div><!-- row -->


            </div><!-- container-fluid -->

        </div><!-- PAGE CONTENT -->



        <!-- FOOTER -->
        <footer id="footer">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <p class="copyright mb-0">2019 DLFJJ &copy; All Rights reserved</p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-fluid -->

        </footer><!-- FOOTER -->

    </div><!-- MAIN CONTAINER -->


    <!-- SCROLL UP -->


@endsection