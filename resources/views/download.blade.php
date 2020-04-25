@extends('layouts.app')

@section('content')

   <!DOCTYPE html>
                <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>IRD IMAGES</title>


                             <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                             <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
                             <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
                             <link rel="stylesheet" href="css/bootstrap.min.css">


                                  {{-- <style>
                                    body{
                                        background-image: url(public/spacex--p-KCm6xB9I-unsplash.jpg);
                                        background-size:cover;
                                    }
                                    hr{
                                        background: white;
                                    }

                                    .contact-form{
                                        background:rgba(0,0,0, .6);
                                        color:white;
                                        margin-top: 50px;
                                        padding: 20px;
                                        box-shadow: 0px 0px 0px 0px grey;
                                        transform: translate(12%, -10%);
                                    }
                               </style> --}}


            </head>


    <body>


        <header>

            <div class="container justify-content-center">

                <div class="row">

                    <div class="col-xs-1 col-md-1 col-lg-1">

                        <a href="#"><img src='ird.png' alt="logo_IRD" id="logoird" /></a>

                    </div>

                </div>

            </div>


        </header>


        <div class="container contact-form " id="tt">



            <div class="row" id ="blockG">

               <div class="col-md-6 "   id ="blockGG">
                
                        <h3>Bienvenue sur la plateforme de téléchargement</h3>
                        
                 
               </div>

               <div class="col-md-6" id="blockD">

                <form action="#" method="POST"  name="signupform">
                    <h3>Veuillez renseigner les champs </h3><br>
                        <ul class="noBullet">
                            <li>
                                <label for="DateD" id="formulo">Date Début:</label>
                                    <input type="date" id="DateD" name="DateD" required/>
                            </li>
                            <li>
                                <label for="DateF" id="formulo">Date Fin</label>
                                    <input type="date" id="DateF" name="DateF" required/>
                            </li>
                            <li>
                                <label for="Mode" id="formulo">Mode:</label>
                                    <select name="Mode" id="pet-select">
                                        <option value="">--Choissisez votre Mode--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                    </select>
                            </li>
                            <li>
                                <label for="Canal" id="formulo">Canal: </label>
                                    <select name="Canal" id="pet-select">
                                            <option value="">--Choissisez votre Canal--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                    </select>
                            </li>
                            <li id="center-btn">
                                    <input type="submit" id="sub-btn" name="join" alt="submit" value="Télécharger">
                            </li>
                        </ul>
                </form>



               </div>

            </div>

        </div>
        
 {{--
 <div class="container">
        <div class="row">

            <div class=".col-sm-12">
                        <div class="signupSection">
                            <div class="info">
                                <h2>Bienvenue sur la plateforme de téléchargement</h2>
                                <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
                            </div>
                        </div>
            </div>


                                <div class=".col-sm-12">
                                    <form action="#" method="POST" class="signupForm" name="signupform">
                                        <h2>Veuillez renseigner les champs </h2><br>
                                            <ul class="noBullet">
                                                <li>
                                                    <label for="DateD" id="formulo">Date Début:</label>
                                                        <input type="date" id="DateD" name="DateD" required/>
                                                </li>
                                                <li>
                                                    <label for="DateF" id="formulo">Date Fin</label>
                                                        <input type="date" id="DateF" name="DateF" required/>
                                                </li>
                                                <li>
                                                    <label for="Mode" id="formulo">Mode:</label>
                                                        <select name="Mode" id="pet-select">
                                                            <option value="">--Choissisez votre Mode--</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                        </select>
                                                </li>
                                                <li>
                                                    <label for="Canal" id="formulo">Canal: </label>
                                                        <select name="Canal" id="pet-select">
                                                                <option value="">--Choissisez votre Canal--</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                        </select>
                                                </li>
                                                <li id="center-btn">
                                                        <input type="submit" id="sub-btn" name="join" alt="submit" value="Télécharger">
                                                </li>
                                            </ul>
                                    </form>

                                </div>
        </div>
</div>
 --}}
                                    <style>

                                             @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
  
  background: #111;
  background-repeat: no-repeat;
  
}

.full-height {
                height: 80vh;
            }
#tt
{
    background: url(https://source.unsplash.com/TV2gg2kZD1o);
    background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
 
  transform: translate(-50%, -50%);
 text-align: center;
 color: white;
 margin-bottom: 1%;
  margin-top: 5%;
  
}

 #blockGG   {
   
    background: rgba(20, 40, 40, 0.8);
 
  margin:auto;
  text-align: center;
}


#blockD   {
    background: rgba(20, 40, 40, 0.8);
  transition: .2s;
}

.signupForm {
  width: 70%;
  padding: 30px 0;
  background: rgba(20, 40, 40, 0.8);
  transition: .2s;
}
.signupForm h2 {
  font-weight: 300;
}

.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid #0ab4b4;
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, 0.2);
  color: white;
  outline: none;
}

.noBullet {
  list-style-type: none;
  padding: 0;
}

#sub-btn {
  border: 1px solid #0ab4b4;
  background: rgba(20, 20, 20, 0.6);
  font-size: 18px;
  color: white;
  margin-top: 20px;
  padding: 10px 50px;
  cursor: pointer;
  transition: .4s;
}
#sub-btn:hover {
  background: rgba(20, 20, 20, 0.8);
  padding: 10px 80px;
}
                                             input, #pet-select {
                                                display: inline-block;
                                                width: 200px;
                                                border: 1px solid gray;
                                                border-radius: 4px;
                                                font-size: 16px;
                                                margin: 10px 10px;
                                                width:60%;
                                               


                                                    }
                                            #formulo{
                                                    display: inline-block;
                                                    width: 6.25rem;
                                                    text-align: left;
                                                    color:#0ab4b4;
                                                    }

                                            body { background-image: url('deux.jpg');
                                            background-repeat: no-repeat;
                                            background-size:cover;
                                            max-width: 100%;
                                            


                                                    }

                                            #sub {
                                                display:block;
                                                margin-right: auto;
                                                margin-left: auto;

                                                    }
                                    </style>


    </body>
</html>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


@endsection
