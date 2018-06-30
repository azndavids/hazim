<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TADAAA EDIT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">


</head>
<body>
    <div class="flex-center position-ref full-height">
       <div class="row">




          <div class="panel-heading">
           <b>USER TEST DATA EDIT</b>
           <br>
           <div class="clearfix"></div>
       </div>

       <div class="panel-body">

          <b>		

             @foreach($users as $user)


             <br><br>      USER ID : {{$user->idCraw}}
             <br>&emsp;&emsp;    NAME    :   {{$user->nameCraw}} 
             <br>&emsp;&emsp;    Phone Number:   {{$user->phoneCraw}}  
             <br>&emsp;&emsp;    Email:  {{$user->emailCraw}}  
             <br>&emsp;&emsp;    Status:    {{$user->statusCraw}}

             <br><br><!-- <br><br>&emsp;&emsp;<button type="button" href="{{action('Hazim_Form\Users_Controllers@index')}}">EDIT</button><br>								 -->

             @endforeach
         </div>

         <div class="links">


             <br><br><br><br>

             @method('PATCH')

             <form method="POST" action="{{action('Hazim_Form\Craw_Controllers@editOR')}}"> 

                @csrf

                EDIT ID:
                <input type="id" name="id" class="form-control">
                <button type="submit" >Edit</button>
                <!-- into another blade file form only -->
            </form>

        </br></br>

        <a href="{{action('Hazim_Form\Craw_Controllers@welcomePage')}}">
            <b>BACK</b>
        </a>
    </div>
</div>	
</div>


</body>
</html>






