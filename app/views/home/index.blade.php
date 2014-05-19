@extends('shared.layout')
@section('links')
<link href="{{URL::asset('bootstrap-3.1.1/css/jquery.bxslider.css')}}" type="text/css" rel="stylesheet"/>
@stop

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('bootstrap-3.1.1/js/jquery.bxslider.min.js')}}"></script>
@stop
@section('embedded-scripts')
<script>
    $(function(){
        $('.bxslider').bxSlider({
          minSlides: 3,
          maxSlides: 4,
          slideWidth: 170,
          slideMargin: 10
        });
    });
</script>
@stop
@section('contents')
<div class="banner">
    <img src="{{URL::asset('images/banner.png')}}" style="width: 1360px;"/>
</div>

<section>
    <h1>Projects and Updates</h1>
    <div class="matter">
        <div class="row">
            <div class="col-md-4">
                <div class="col-content">
                    <div class="img1-col4">
                        <img src="{{URL::asset('images/v1.jpg')}}"/>
                        <div class="overlay1">
                            <div class="plus"></div>
                            <p class="text_box">Title</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-content">
                   <div class="img2-col4">
                        <img src="{{URL::asset('images/v1.jpg')}}"/>
                        <div class="overlay2" style="background:#fcc;opacity:1;">
                            <div class="plus"></div>
                            <p class="text_box">Title</p>
                        </div>
                    </div>
                   
                   <div class="img2-col4">
                       <!--<img src="{{URL::asset('images/v1.jpg')}}" height="179" width="100%" style="position:relative;z-index: 10;"/>-->
                        <div class="overlay2">
                            <div class="plus"></div>
                            <p class="text_box">Title</p>
                        </div>
                   </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-content">
                   <div class="img2-col4">
                       <div class="overlay2">
                            <div class="plus"></div>
                            <p class="text_box">Title</p>
                        </div>
                   </div>
                   
                   <div class="img2-col4">
                       <div class="overlay2">
                            <div class="plus"></div>
                            <p class="text_box">Title</p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section>
    <h1>Directors</h1>
    
    <div class="matter">
         <div class="director director-left">
             <p class="desc">Non-responsive layouts highlight a key drawback to fixed elements.Any fixed component, such as a fixed navbar, will not be scrollable when the viewport becomes narrower than the page content.In other words, given the non-responsive container width of 970px and a viewport of 800px, you'll potentially hide 170px of content.
        </div>
        <div class="director title title-left">
            <span class="name">Tonil</span><span class="surname">Maharjan</span>
        </div>
        <div class="director director-right">
            <p class="desc"> Non-responsive layouts highlight a key drawback to fixed elements. Any fixed component, such as a fixed navbar, will not be scrollable when the viewport becomes narrower than the page content. In other words, given the non-responsive container width of 970px and a viewport of 800px, you'll potentially hide 170px of content.</p> 
        </div>
        <div class="director title title-right">
            <span class="name">Sanjay</span><span class="surname">Shrestha</span>
        </div>
        <img src="{{URL::asset('images/directors.png')}}"/>
    </div>
</section>
<section>
    <h1>Clients</h1>
    <div class="matter">
        <div class="client-slider">
            <ul class="bxslider">
                <li><img src="{{URL::asset('images/v1.jpg')}}" /></li>
                <li><img src="{{URL::asset('images/v1.jpg')}}" /></li>
                <li><img src="{{URL::asset('images/v1.jpg')}}" /></li>
                <li><img src="{{URL::asset('images/v1.jpg')}}" /></li>
                <li><img src="{{URL::asset('images/v1.jpg')}}" /></li>
                <li><img src="{{URL::asset('images/v1.jpg')}}" /></li>
              </ul>
        </div>
    </div>
</section>
@stop
