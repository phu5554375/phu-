@extends('frontend.layout.app')

@section('content')
    <div class="popup-facebook" id="face-pop">
          
          <div class="content-face">
            <h3 class="title-face">Đăng nhập facebook để có trải nghiệm tốt hơn</h3>
           <a  class="login-btn" href="redirect/facebook"><i class="fab fa-facebook-f"></i> Login</a>
          </div>
         
        </div>
    <div id="siteContainer">

        <header id="siteHeader" class="site-header" style="background-image: url('paperoll/assets/img/cover-roll.jpg'); background-size: cover; background-position: center;">
            <div class="main-nav">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-siteHeaderMenuCollapse" aria-expanded="false"><i class="ion-navicon-round"></i></button>
          <h1 class="navbar-brand">
            <a href="{{url('/')}}" style="background-image: url(' {{url('paperoll/assets/img/logo.png')}}');    
    "></a></h1>
                </div>
                <div id="bs-siteHeaderMenuCollapse" class="collapse navbar-collapse px-0">
                    <div class="main-nav-container navbar-right clearfix">
                        
                            <ul class="main-menu-list">
                                <li><a href="#">Tiếng việt</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Tiếng anh</a></li>
                            </ul>  
                    </div>
                    </div>
              </div>
            </div>
                    <section class="hello">
                        <article>
                            <h1>Turn your photos into a concrete roll of paper.</h1>
                            <a class="start button button--flat" href="{{url('/editor')}}">Get my roll (9.90€)</a>
                        </article>
                        <aside>
                            <div class="roll"></div>
                        </aside>
                    </section>
            
        </header>
        <div id="siteContent" class="isg-front-page">
            <section class="highlights" data-background="#aadaca">
                <article>
        <ul>
            <li>
                <img src="paperoll/stock/icons/create-roll.svg" width="200" alt="Create your roll using you social photos."><br><span>Create your roll using<br> you best photos.</span>
            </li>
        <li>
            <img src="paperoll/stock/icons/print-roll.svg" width="200" alt="We print it on a concrete roll paper, up to 8 meters !"><br>
            <span>We print it on a concrete<br>roll of paper, up to 8 meters!</span>
        </li>
        <li>
            <img src="paperoll/stock/icons/shipping-roll.svg" width="200" alt="We ship the roll."><br><span>Hold your horses !<br> We ship the roll.</span>
        </li>
            </ul>
    </article>
            </section>

    <section class="pictures" data-background="#faf5eb">
        <article>
            <h2>Meet Paperoll.</h2>
            
            

            @foreach ($tbl_intros as $tbl_intro)
            <div class="pictures-item">
                <div class="pictures-item-image {{$tbl_intro-> class_attr}}" style="background-image: url({{$tbl_intro-> image}})"></div>
                <div class="pictures-item-text">
                    <h3>{{$tbl_intro-> name}}</h3>
                    <p>{{$tbl_intro-> desc}}</p>
                </div></div>
            @endforeach


                        <div class="call-button">
                            <a class="start button button--flat" href="{{url('/editor')}}"><i class="fa fa-magic" aria-hidden="true"></i>&nbsp; Get my roll (9.90€)</a>
                        </div>
                    </article>
                </section>
                <section class="newsletter">
                    <article><h4>Get Paperoll product news</h4>
                        <form id="newsletter" method="post"><input id="email" required="" type="email" placeholder="Email"><input type="submit" value="Subscribe"></form>
                    </article>
                </section>
                <footer>
                    <nav>
                        <a class="link" href="{{url('/fqa')}}">FAQ</a>
                        <a class="link" href="{{url('/terms')}}">Terms</a>
                        <a class="link" href="{{url('/contact')}}">Contact</a>
                        <a class="social" href="">
                            <i class="fab fa-instagram"></i></a>
                        <a class="social" href="">
                            <i class="fab fa-facebook"></i></a>
                            <a class="social" href=""><i class="fab fa-twitter-square"></i></a>
                        </nav></footer>
        </div>
    
    <!-- END Site Footer -->
    </div>

    @endsection
  

