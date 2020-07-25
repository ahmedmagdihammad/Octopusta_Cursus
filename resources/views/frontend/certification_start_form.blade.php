@extends('layouts.frontend.master_certificat')
@section('title')
    Certification Start Form
@endsection	
@section('content')	

<div class="_215b15">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">						
                <div class="title125">						
                    <div class="titleleft">					
                        <div class="ttl121">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('certification_center')}}">Certification Center</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Certification Fill Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="titleright">						
                        <a href="{{route('certification_center')}}" class="blog_link"><i class="uil uil-angle-double-left"></i>Back to Certification Center</a>
                    </div>
                </div>
                <div class="title126">	
                    <h2>Certification Fill Form</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="faq1256">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">					
            <div class="col-lg-6 col-md-8">						
                <div class="certi_form">
                    <div class="sign_form">
                        <h2>Fill in before you start:</h2>
                        <form>
                            <div class="ui search focus mt-40">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="text" name="fullname" value="" id="id_fullname" required="" maxlength="64" placeholder="Full Name">															
                                </div>
                            </div>
                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email Address">															
                                </div>
                            </div>
                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh11 swdh19">
                                    <input class="prompt srch_explore" type="text" name="phonenumber" value="" id="id_phonenumber" required="" maxlength="10" placeholder="Phone Number">															
                                </div>
                            </div>
                            <div class="category_cop">
                                <h4>Select Category</h4>
                                <div class="panel-groupaccordion" id="accordiontest">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingOne">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" href="#" aria-expanded="false" aria-controls="collapseOne">
                                                    Development
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordiontest">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">										
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>WordPress</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>HTML CSS</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Full Time</label>
                                                            </div>
                                                        </div>
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>MotoCMS 3</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Joomla</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Full Time</label>
                                                            </div>
                                                        </div>	
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>OpenCart</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Joomla Pro</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>WordPress Pro</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>WordPress Elementor</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>WordPress Elementor Pro</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>PrestaShop</label>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingTwo">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#" aria-expanded="false" aria-controls="collapseTwo">
                                                    Finance & Accounting
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordiontest">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">										
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Accounting</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Finance Fundamentals</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Bookkeeping</label>
                                                            </div>
                                                        </div>
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Political Science</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Finance</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Cryptocurrency</label>
                                                            </div>
                                                        </div>																													
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingThree">
                                                <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" href="#" aria-expanded="false" aria-controls="collapseThree">
                                                    Design
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree" data-parent="#accordiontest">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">										
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Adobe Photoshop</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Adobe Illustrator</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Adobe After Effects</label>
                                                            </div>
                                                        </div>
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Adobe InDesign</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Unity</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Drawing</label>
                                                            </div>
                                                        </div>	
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Game Development Fundamentals</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>3D Modeling</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Motion Graphics</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>2D Animation</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>T-Shirt Design</label>
                                                            </div>
                                                        </div>																
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingfour">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapsefour" href="#" aria-expanded="false" aria-controls="collapsefour">
                                                    Marketing
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapsefour" class="panel-collapse collapse" aria-labelledby="headingfour" data-parent="#accordiontest">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">										
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Google Ads (Adwords)</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Google Ads (AdWords) Certification</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Social Marketing</label>
                                                            </div>
                                                        </div>
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Email Marketing</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Business Strategy</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>SEO</label>
                                                            </div>
                                                        </div>	
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>PPC Advertising</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Blogging</label>
                                                            </div>
                                                        </div>																														
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingfive">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapsefive" href="#" aria-expanded="false" aria-controls="collapsefive">
                                                    Teaching & Academics
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapsefive" class="panel-collapse collapse" aria-labelledby="headingfive" data-parent="#accordiontest">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">										
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Math</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Humanities</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Engineering</label>
                                                            </div>
                                                        </div>
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Science</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Social Science</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>English Language</label>
                                                            </div>
                                                        </div>	
                                                        <div class="field fltr-radio">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>German Language</label>
                                                                </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Sign Language</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>French Language</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>Spanish Language</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>English Grammar</label>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <div class="ui radio checkbox">
                                                                <input type="radio" name="example2" tabindex="0" class="hidden">
                                                                <label>IELTS</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>										
                                </div>
                            </div>
                            <p class="testtrm145">By signing up, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a>.</p>
                            <button class="login-btn" type="submit">Lets Go</button>
                        </form>
                        <p class="questrm145">Please be ready to answer <span>20 questions</span> within <span>1 hours</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection