@extends('layouts.frontend.master')
@section('title')
    Live Output
@endsection
@section('content')

<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="section3125">
                    <div class="live1452">
                        <iframe src="{{asset($session->video)}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="user_dt5">
                        <div class="user_dt_left">
                            <div class="live_user_dt">
                                <div class="user_img5">
                                    <img src="{{asset('frontend/images/left-imgs/img-4.jpg')}}" alt="">												
                                </div>
                                <div class="user_cntnt">
                                    <h4>Jassica William</h4>
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                        <div class="user_dt_right">
                            <ul>
                                <li>
                                    <a href="#" class="lkcm152"><i class='uil uil-eye'></i><span>1452</span></a>
                                </li>
                                <li>
                                    <a href="#" class="lkcm152"><i class='uil uil-thumbs-up'></i><span>100</span></a>
                                </li>
                                <li>
                                    <a href="#" class="lkcm152"><i class='uil uil-thumbs-down'></i><span>20</span></a>
                                </li>
                                <li>
                                    <a href="#" class="lkcm152"><i class='uil uil-share-alt'></i><span>9</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>							
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="right_side">							
                    <div class="fcrse_3">
                        <div class="cater_ttle">
                            <h4>Live Chat</h4>
                        </div>
                        <div class="live_chat">
                            <div class="chat1">
                                <p><a href="#">John Doe</a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet molestie leo ac pellentesque</p>
                                <p><a href="#">Poonam</a>Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                                <p><a href="#">Jass</a>Nulla sollicitudin nec nisi at pellentesque. Cras fringilla est et sem tempor</p>
                                <p><a href="#">Albert Smith</a>Pellentesque ultricies risus sit amet congue euismod</p>
                                <p><a href="#">Jassica William</a>Nullam efficitur tristique consequat</p>
                                <p><a href="#">Joy Dua</a>Proin sed leo eleifend,</p>
                                <p><a href="#">Zoena Singh</a>Aliquam dignissim elementum sem id rutrum</p>
                                <p><a href="#">Amritpal Singh</a>Fusce a elit at libero sollicitudin tincidunt</p>
                                <p><a href="#">Johnson</a>Ut laoreet lobortis ornare</p>
                                <p><a href="#">Jashan</a>Sed pretium erat eu turpis condimentum</p>
                            </div>
                        </div>
                        <div class="live_comment">
                            <input class="live_input" type="text" placeholder="Say Something..." />
                            <button class="btn_live"><i class='uil uil-message'></i></button>
                        </div>
                    </div>													
                </div>
            </div>
            <div class="col-md-12">
                <div class="section3125 mb-15 mt-20">
                    <h4 class="item_title">Live Streams</h4>
                    <a href="live_streams.html" class="see150">See all</a>
                    <div class="la5lo1">
                        <div class="owl-carousel live_stream owl-theme">

                        @foreach($sessions as $s)
                            <div class="item">
                                <div class="stream_1">
                                    <a href="{{route('live_output', $s->id)}}" class="stream_bg">
                                        <img src="{{asset('frontend/images/left-imgs/img-9.jpg')}}" alt="">
                                        <h4>Edututs+</h4>
                                        <p>live<span></span></p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>					
        </div>
    </div>
</div>

@endsection