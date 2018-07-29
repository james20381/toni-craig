<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toni Craig</title>

    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> --}} {{--
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="main-nav scroller" id="main-nav">
        <a href="#section1">This</a>
        <a href="#section2">Little</a>
        <a href="#section3">Piggy</a>
        <a href="#section4">Went</a>
        <a href="https://www.google.com.au/">To</a>
        <a href="#">Market</a>
    </nav>

    <div class="page-wrap">

        <div class="hamburger">
            <a href="#main-nav" class="open-menu" style="text-decoration: none;">
            ☰
          </a>
            <a href="#" class="close-menu" style="text-decoration: none;">
            ☰
          </a>


        </div>



        <div class="base" id="section1">

            <div class="oneyellow" id="">
                <div class="container-fluid" style="">
                    <div class="row">
                        <div class="col" style="">
                            <div class="img-backing-card img-reveal4"></div>
                            <img class="img-reveal3" style="height: 80vh;" src="{{asset('/img/toni-craig.jpg')}}" alt="">
                        </div>
                        <div class="col" style="">
                            <div class="card card3 img-reveal5" style="border: none; color: white; width: 60rem;">
                                <div class="card-body">
                                    <h1 class="card-title">Lorem Ipsum</h1>
                                    <h2 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h2>
                                    <p class="card-text">Officia esse nostrud culpa est qui consequat aute. Ipsum non incididunt adipisicing incididunt
                                        culpa Lorem aute. Reprehenderit Lorem laborum laborum Lorem deserunt reprehenderit
                                        amet amet Lorem cupidatat.</p>
                                    <a href="https://www.google.com.au/" class="card-link" target="_blank">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="fourblack"></div>
            <div class="twoblue" id="">
                <div class="container" style="padding-left: 0; padding-right: 0;">
                    <div class="row" style="margin-left: 0; margin-right: 0;">
                        <div class="col" style="margin-top: 38rem; padding-left: 0; padding-right: 0;">
                            <div class="card card-move2 img-reveal2" style="border: none;">
                                <div class="card-body" style="padding: 0;">
                                    <h1 class="card-title">Hair Stylist</h1>
                                    <h2 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h2>
                                    <p class="card-text">Officia esse nostrud culpa est qui consequat aute. Ipsum non incididunt adipisicing incididunt
                                        culpa Lorem aute. Reprehenderit Lorem laborum laborum Lorem deserunt reprehenderit
                                        amet amet Lorem cupidatat. Labore id aute proident excepteur excepteur aliqua minim
                                        ea fugiat et dolore. Aliqua ullamco tempor ea culpa nulla Lorem.</p>
                                    <a href="https://www.google.com.au/" class="card-link" target="_blank">Card link</a>
                                    <a href="#" class="card-link">Another link</a>


                                </div>
                            </div>
                            {{-- <img class="img-reveal2" style="border: 3px solid #545d61;" src="{{asset('/img/toni-craig-blue.jpg')}}"
                                alt=""> <img src="{{asset('/img/barber-chair-blue.jpg')}}" alt="" style="width: 30rem;"> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4" style="padding-left: 0; padding-right: 0;">
                            <img class="img-reveal2 img-fluid" style="border: 3px solid #545d61; width: 30rem;" src="{{asset('/img/hair1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-4" style="padding-left: 0; padding-right: 0;">
                            <img class="img-reveal2 img-fluid" style="border: 3px solid #545d61; width: 30rem; " src="{{asset('/img/hair2.jpg')}}" alt="">
                        </div>
                        <div class="col-md-4" style="padding-left: 0; padding-right: 0;">
                            <img class="img-reveal2 img-fluid" style="border: 3px solid #545d61; width: 30rem; " src="{{asset('/img/hair3.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="fugiatEtDolore img-reveal2">
                                <h3 style="margin-bottom: 0;">Fugiat et Dolore</h3>
                                <a href="#">
                                    <p style="color: #c99782;">by <strong>aliqua</strong>minim.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="col" style="position: relative;">
                            <div class="arrowcontainer img-reveal2" style="position: absolute; bottom: 0; right: 0;">
                                <a class="" href="#section3">
    @include('partials._thin-arrow')
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="twoblue-anchor" id="section3" style="position: absolute; top: 900px; left: 0; height: 100px; width: 100%;"></div>
            </div>

            <div class="threered">
                <div class="container-fluid">
                    <div class="row" style="margin-top: 8rem;">
                        {{--
                        <div style="height: 100vh;" class="col d-flex justify-content-center align-items-center"> --}}
                            <div class="col">

                                <div class="hero scroller" style="float: left; margin-left: 15rem;">
    @include('partials._tc-logo')

                                    <p style="width: 40rem;">Dolor sunt incididunt non velit pariatur adipisicing elit nulla eu ipsum. Eu dolor nisi
                                        esse laboris dolor incididunt ea. Exercitation aute qui quis elit Lorem. Amet irure
                                        ipsum aute minim in nulla sint anim ut.</p>
                                    <a class="" href="#section2">
                                        <p style="font-weight: 600;">Learn More</p>
    @include('partials._thin-arrow')
                                    </a>
                                </div>
                                <img class="img-reveal2" style="width: 70rem; float: right;" src="{{asset('/img/toni-craig-sketch.svg')}}" alt="">
                            </div>
                                
                                

                                {{-- <img class="img-reveal2 img-fluid" style="position: absolute;
                                bottom: -200px; right: -450px; width: 7rem;" src="{{asset('/img/scissors-blue.svg')}}" alt="">
                                <img class="img-reveal2 img-fluid" style="position: absolute;
                                bottom: -100px; right: -350px; width: 7rem;" src="{{asset('/img/comb-blue-light.svg')}}"
                                    alt="">
                                <img class="img-reveal2 img-fluid" style="position: absolute;
                                bottom: 200px; right: -450px; width: 7rem;" src="{{asset('/img/scissors-maroon.svg')}}"
                                    alt="">
                                <img class="img-reveal2 img-fluid" style="position: absolute;
                                bottom: 250px; right: -120px; width: 7rem;" src="{{asset('/img/shears.svg')}}" alt="">
                                <img class="img-reveal2 img-fluid" style="position: absolute;
                                bottom: -50px; right: -200px; width: 7rem;" src="{{asset('/img/shears-maroon.svg')}}" alt="">
                                <img class="img-reveal2 img-fluid" style="position: absolute;
                                bottom: 100px; right: -280px; width: 5rem;" src="{{asset('/img/comb-maroon-light.svg')}}" alt=""> --}}
                            
                        </div>
                    </div>
                    {{-- <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                    <img class="img-reveal2" style="width: 70rem; margin-left: 20rem;" src="{{asset('/img/toni-craig-sketch.svg')}}" alt="">
                            </div>

                        </div>
                    </div> --}}

                    {{-- <div class="row">
                        <div class="col">
                            
                        {{-- </div> --}}
                    {{-- </div> --}} 
                    <div class="threered-anchor" id="section2" style="position: absolute; top: 490px; left: 0; height: 100px; width: 100%;"></div>
                </div>
            </div>



        </div>

        <script src="{{asset('js/app.js')}}"></script>
        {{--
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script> --}} {{--
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}} {{--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.4.0/scrollreveal.min.js"></script> --}} {{--
        <script>
            // Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal('.img-reveal', { 
    duration: 2000,
    origin: 'left'
});
        </script> --}} {{--
        <script>
            AOS.init();
        </script> --}}
</body>

</html>