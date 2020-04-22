@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IRD IMAGES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 90vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body>

        <header>
        
            <a href="#"><img src='ird.png' alt="logo_IRD" id="logoird" /></a>
        </header>
        <div class="flex-center position-ref full-height">

      

        
       
            <form action=/post> 
  <label for="DateD">Date Début:</label>
  <input type="date" id="DateD" name="DateD">
  

  <label for="DateF">Date Fin:</label>
  <input type="date" id="DateF" name="DateF">
  

  <label for="Mode">Mode:</label>

  <input type="number" min="1" max="6"  name="Mode">

  <label for="Canal">Canal: </label>
<input type="number" min="1" max="2"  name="Canal">
<br><br><br>
<p><input  id="sub" type="submit" value="Télécharger"> </p>

</form>
<style>
#logoird {
    position: fixed;
    
    margin-left: -100px;
}

input {
    border: 1px solid gray;
    border-radius: 4px;
    font-size: 22px;

  }
label{
    font-size: 22px;
    color:white;
}

body { background-image: url('deux.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  max-width: 100%;
  height: auto;
 

}

#sub {
    display:block;
    margin-right: auto;
    margin-left: auto;
    
}
</style>


                </div>
            </div>
        </div>
    </div>
    </body>
</html>

        
                
               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
               
         
    </div>
</div>
@endsection
