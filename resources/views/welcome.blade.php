<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TADAAA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">


</head>
<body>
    <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                @endif

                <div class="content">
                    

                    <div class="links">

                       


                        <br><br><br>
                        
                         <!-- <a href="{{action('Hazim_Form\Users_Controllers@welcomepage')}}"> -->
                         <a href="{{route('showing.welcomepage')}}">
                            
                       
                            <div class="title m-b-md">

                                <b>GOLEK 2.0</b>


                            </div>


                        <br><br><br>
                        <a href="{{action('Hazim_Form\Craw_Controllers@welcomePage')}}">
                            <div class="title m-b-md">

                                <b>CRAW</b>


                            </div>




                        </div>
                    </div>
                </div>
            </body>
            </html>
