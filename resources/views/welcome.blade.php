@extends('layouts.app_t')


@section('title')
    needling.us
@endsection

@section('content')
        <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Needling.us</h1>
                        <p class="intro-text">Connect With Your Community In Ways You Never Thought Possible.
                            <br>Created For All Of Us</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!--box-->
                <div class="box first">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="icon-apple icon-md icon-color1"></i>
                                <h4>iOS development</h4>
                                <p>Get your code on bitches</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="icon-android icon-md icon-color2"></i>
                                <h4>Android development</h4>
                                <p>Get your code on bitches</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="icon-windows icon-md icon-color3"></i>
                                <h4>Windows Phone development</h4>
                                <p>Get your code on bitches</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="icon-html5 icon-md icon-color4"></i>
                                <h4>Ruby on Rails development</h4>
                                <p>Get your code on bitches</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="icon-css3 icon-md icon-color5"></i>
                                <h4>Javascript development</h4>
                                <p>Get your code on bitches</p>
                            </div>
                        </div><!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6">
                            <div class="center">
                                <i class="icon-thumbs-up icon-md icon-color6"></i>
                                <h4>Responsive web design</h4>
                                <p>Get your code on bitches</p>
                            </div>
                        </div><!--/.col-md-4-->
                    </div><!--/.row-->
                </div><!--/.box-->
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center paralax_bg">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2 set_color">
                    <h2>Download This Great piece of software</h2>
                    <p>Download for free and use this all you want</p>
                    <a href="{{ url('/downloads') }}" class="btn btn-default btn-lg set_color">Download Page</a>
            </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Research the inner resources</h2>
                <p>We are prepared to do whatever it takes to do what we got to do.</p>
                <p><a href="">teddydeleon2@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="{{ url('/portfolio') }}" class="btn btn-default btn-lg"><i class="fa icon-heart-empty fa-fw"></i> <span class="network-name">Portfolio</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="btn btn-default btn-lg"><i class="fa icon-phone fa-fw"></i> <span class="network-name">Contact</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/downloads') }}" class="btn btn-default btn-lg"><i class="fa icon-circle-arrow-down fa-fw"></i> <span class="network-name">Downloads</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

@endsection

