@extends('layouts.app')

@section('content')
{{-- <div class="container"> 
    <div class="row justify-content-center">--}}
   <!DOCTYPE html>
                <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>IRD IMAGES</title>

                        
                             <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                                {{-- <style>
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
                              
                                  </style> --}}


            </head>


    <body>


        <header>

            <div class="container">

                <div class="row">

                    <div class="col-xs-1 col-md-1 col-lg-1">

                        <a href="#"><img src='ird.png' alt="logo_IRD" id="logoird" /></a>

                    </div>

                </div>

            </div>        
                    
                    
            
        

        </header>
        
        

      

        
       
  {{-- <label for="DateD">Date Début:</label> --}}
  {{-- <input type="date" id="DateD" name="DateD">
  

  <label for="DateF">Date Fin:</label> --}}
  {{-- <input type="date" id="DateF" name="DateF">
  

  <label for="Mode">Mode:</label>

  <select name="Mode" id="pet-select">
    <option value="">--Choissisez votre Mode--</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>

  <label for="Canal">Canal: </label>

<select name="Canal" id="pet-select">
    <option value="">--Choissisez votre Canal--</option>
    <option value="1">1</option>
    <option value="2">2</option>
</select>
<br><br><br>


<p><input  id="sub" type="submit" value="Télécharger"> </p>

</form> --}}

<div class="container"> 


        <div class="row justify-content-center">


                        <div class="signupSection">
                            <div class="info">
                            <h2>Bienvenue sur la plateforme de téléchargement</h2>
                                <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
                                    

                            </div>
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





                                    <style>
                                            
                                            @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: #111;
  background-repeat: no-repeat;
}

.signupSection {
  background: url(https://source.unsplash.com/TV2gg2kZD1o/1600x800);
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 800px;
  height: 450px;
  text-align: center;
  display: flex;
  color: white;
  box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, 0.5);
  margin-bottom: 10px;
  margin-top: 50px;
}

.info {
  width: 45%;
  background: rgba(20, 20, 20, 0.8);
  padding: 100px 0;
  border-right: 5px solid rgba(30, 30, 30, 0.8);
  text-align: center;
}
.info h2 {
  padding-top: 30px;
  font-weight: 300;
}
.info p {
  font-size: 18px;
}
.info .icon {
  font-size: 8em;
  padding: 20px 0;
  color: #0ab4b4;
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
                                                

                                                    }
                                                    #formulo{
                                                    display: inline-block;
                                                    width: 100px;
                                                    text-align: left;
                                                    color:#0ab4b4;
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
