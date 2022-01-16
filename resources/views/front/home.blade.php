@extends('front.layouts.app')
@section('title', 'Best SEO, Digital Marketing, Web Development Company Toronto')
@section('description','We are a team of Digital Creators expertise in SEO, Digital and Social Media Marketing, Website Development, Application Development, IT consulting and Branding.')
@section('keywords','Best seo company in toronto,Best digital marketing company in toronto,Best web development companies in toronto,Toronto seo company,Toronto digital marketing agency,Best web development companies in toronto,Web development agency toronto,Low Cost SEO Services toronto')
@section('ogImage'){{asset('assets/img/logo.png')}}@endsection
@section('navClass','index')
@section('logo'){{asset('assets/img/logo.png')}}@endsection
@section('canonical','https://www.LAYALI BAHRAIN.com')
@section('content')
<div class="index">
    <div class="owl-carousel owl-theme banner-slider">

        <div class="item">
            <div class="banner-item">
                <div class="banner-image">
                    <img src="assets/img/business-strategy.png" alt="IT consulting & Branding" class="img-fluid d-none d-sm-block">
                    <img src="assets/img/business-strategy.png" alt="IT consulting & Branding" class="img-fluid d-block d-sm-none">
                </div>
                <div class="banner-details">
                    <h2 id="main-des">VAT CONSULTANCY</h2>
                    <a href="/services">More services</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-item">
                <div class="banner-image">
                    <img src="assets/img/a.png" alt="Website Design" class="img-fluid d-none d-sm-block">
                    <img src="assets/img/a.png" alt="Website Design" class="img-fluid d-block d-sm-none">
                </div>
                <div class="banner-details">
                    <h2 id="main-des">VISA AND EMBASSY SERVICES</h2>
                    <a href="/services">More services</a>
                </div>
            </div>
        </div>
        <!-- image -->
    </div>
    <div class="about">
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <h2>About</h2>
                    <p>LAYALI BAHRAIN</p>
                    <a href="{{route('about')}}" class="d-none d-sm-block">Read more</a>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <p style="text-align: justify;text-justify: inter-word;">We are a team of experienced
                                Digital Creators who provide cost effective, contemporary technological solutions
                                for a wider global reach. We help our clients harness the Digital wave by providing
                                exceptional services in Digital Marketing,Website and App Development , Branding,
                                Search Engine Optimisation, IT Consulting, & Software Development</p>
                        </div>
                        <div class="col-sm-6">
                            <p style="text-align: justify;text-justify: inter-word;">We prioritize our clients'
                                business strategy while handling their websites, social media and marketing
                                campaigns for greater consumer visibility and impact. In our view, the power of
                                human relationships is unmatched, which is why our team values transparency and
                                communication above anything else.</p>
                            <a href="{{route('about')}}" class="d-block d-sm-none">Read more</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="our-services" data-aos="fade-up">
        <div class="container">
            <h3 class="text-center">Our Services</h3>
            <a href="{{route('services')}}" class="text-center view-all">View All</a>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <div class="owl-carousel owl-theme services d-none d-sm-block" data-aos="fade-in">
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','branding')}}">
                                    <img src="{{asset('assets/img/branding.svg')}}" alt="Branding" class="service-image img-fluid">
                                    <h5>Vat Registration</h5>
                                 <p></p>
                                    <a href="{{route('services','branding')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Branding Services" class="img-fluid"></a>
                                </a>
                            </div>
                            <div class="service">
                                <a href="{{route('services','digital-marketing')}}">
                                    <img src="{{asset('assets/img/digital-marketing.svg')}}" alt="Digital Marketing" class="service-image img-fluid">
                                    <h5>Audit</h5>
                                   <p></p>
                                    <a href="{{route('services','digital-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Digital Marketing" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','it-consulting')}}">
                                    <img src="{{asset('assets/img/it-consulting.svg')}}" alt="IT consulting" class="service-image img-fluid">
                                    <h5>Tamkeen Application</h5>
                                   <p></p>
                                    <a href="{{route('services','it-consulting')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read IT consulting " class="img-fluid"></a>
                                </a>
                            </div>
                            <div class="service">
                                <a href="{{route('services','android-and-ios-development')}}">
                                    <img src="{{asset('assets/img/android-ios.svg')}}" alt="Android and iOS apps" class="service-image img-fluid">
                                    <h5>Company Formation</h5>
                                    
                                  <p></p>
                                    <a href="{{route('services','android-and-ios-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Android and iOS apps" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','android-and-ios-development')}}">
                                    <img src="{{asset('assets/img/android-ios.svg')}}" alt="App Development" class="service-image img-fluid">
                                    <h5>Amedment</h5>
                                   
                                  <p></p>
                                    <a href="{{route('services','android-and-ios-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read App Development" class="img-fluid"></a>
                                </a>
                            </div>
                            <div class="service">
                                <a href="{{route('services','custom-software-development')}}">
                                    <img src="{{asset('assets/img/software.svg')}}" alt="Custom Software Development" class="service-image img-fluid">
                                    <h5>Accounting And Audit</h5>
                                    
                                   <p></p>
                                    <a href="{{route('services','custom-software-development')}}" class="read-more"><img src="assets/img/more-grey.png" alt="Read Custom Software Development" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','search-engine-optimization')}}">
                                    <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt="Search Engine Optimization" class="service-image img-fluid">
                                    <h5>Book Keeping Service</h5>
                                  <p></p>
                                    <a href="{{route('services','search-engine-optimization')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Search Engine Optimization" class="img-fluid"></a>
                                </a>
                            </div>
                            <div class="service">
                                <a href="{{route('services','social-media-marketing')}}">
                                    <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt="Social Media Marketing" class="service-image img-fluid">
                                    <h5>Audit</h5>
                                    <p></p>
                                    <a href="{{route('services','social-media-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Social Media Marketing" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme services d-block d-sm-none" data-aos="fade-in">
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','branding')}}">
                                    <img src="{{asset('assets/img/branding.svg')}}" alt="Branding" class="service-image img-fluid">
                                    <h5>Tamkeen Application</h5>
                                  <p></p>
                                    <a href="{{route('services','branding')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Branding" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','digital-marketing')}}">
                                    <img src="{{asset('assets/img/digital-marketing.svg')}}" alt="Digital Marketing" class="service-image img-fluid">
                                    <h5>Company Formation</h5>
                                    <p></p>
                                    <a href="{{route('services','digital-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Digital Marketing" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','it-consulting')}}">
                                    <img src="{{asset('assets/img/it-consulting.svg')}}" alt="IT consulting" class="service-image img-fluid">
                                    <h5>Amedment</h5>
                                    <p></p>
                                    <a href="{{route('services','it-consulting')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read IT consulting " class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','android-and-ios-development')}}">
                                    <img src="{{asset('assets/img/android-ios.svg')}}" alt="App Development" class="service-image img-fluid">
                                    <h5>Accounting And Audit</h5>
                                    <p></p>
                                    <a href="{{route('services','android-and-ios-development')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read App Development" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','custom-software-development')}}">
                                    <img src="{{asset('assets/img/software.svg')}}" alt="Custom Software Development" class="service-image img-fluid">
                                    <h5>Book Keeping Service</h5>
                                    <p></p>
                                    <a href="{{route('services','custom-software-development')}}" class="read-more"><img src="assets/img/more-grey.png" alt="Read Custom Software Development" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','search-engine-optimization')}}">
                                    <img src="{{asset('assets/img/search-engine-optimization.svg')}}" alt="Search Engine Optimization" class="service-image img-fluid">
                                    <h5>Audit</h5>
                                    <p></p>
                                    <a href="{{route('services','search-engine-optimization')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Search Engine Optimization" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service">
                                <a href="{{route('services','social-media-marketing')}}">
                                    <img src="{{asset('assets/img/social-media-marketing.svg')}}" alt="Social Media Marketing" class="service-image img-fluid">
                                    <h5>Vat In bahrain</h5>
                                    <p></p>
                                    <a href="{{route('services','social-media-marketing')}}" class="read-more"><img src="{{asset('assets/img/more-grey.png')}}" alt="Read Social Media Marketing" class="img-fluid"></a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-clients">

    </div>
    <div class="row">
   <br>
        <!-- <div class="col-sm-4" data-aos="fade-up">
            <div class="container">
            <h1 id="managemnt">Management</h1>
            <p id="mana1">lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem </p>
            </div>
        </div> -->
    
        <div class="locations col-sm-12" data-aos="fade-up">
        <h1 class= "text-center" style="padding-bottom: 20px;">Map View</h1>
            <div class="container">
                <img src="assets/img/location.png" alt="Company Location" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@endsection
<style>
    #main-des {
        color: white;
    }
    #managemnt{
        text-align: center;
        padding: 20x;
        margin-top: 50px;
    }
    #mana1{
        text-align: center;
        /* padding: 20x; */
        margin-top: 20px;
    }
</style>