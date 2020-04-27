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

            </head>
    <body>


        <header>

          

        </header>

  <div class="row backgrounding" id="box">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <h3 id="titre"> {{__('Welcome to the download platform')}}  </h3>
                  <div class="card-body">
                    <h5> {{__('Please fill in the fields' )}}</h5><br>
                <form action="#" method="POST"  name="signupform">
                  @csrf
                   
                  <div class="form-group row">
                    
                    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                    <div class="col-md-6">
                        <input id="dateD" type="date"  name="DateD"  required >

                        
                    </div>
                </div>


                <div class="form-group row">
                    
                  <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                  <div class="col-md-6">
                      <input id="dateF" type="date"  name="DateF"  required >

                      
                  </div>
              </div>
              <div class="form-group row">
                    
                <label for="Mode" class="col-md-4 col-form-label text-md-right">{{ __('Mode') }}</label>

                <div class="col-md-6">
                  <select name="Mode" id="pet-select">
                    <option value="" required>--Choissisez votre Mode--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                </select>
                    
                </div>
            </div>
      
            <div class="form-group row">
                    
              <label for="Canal" class="col-md-4 col-form-label text-md-right">{{ __(' Channel') }}</label>

              <div class="col-md-6">
                
                  <select name="Canal" id="pet-select">
                    <option value="">--Choissisez votre Canal--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            </select>
             
                  
              </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" id="sub-btn">
                    {{ __('Downlaod') }}
                </button>
                        
                             
                                
            </div>
          </div>          
                          
                </form>



               </div>

            </div>

        </div>
  </div>    
  
</div>    
 <style>
.backgrounding{
        background-image: url('spacex--p-KCm6xB9I-unsplash.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        
      
    }

    #box {
align-content: center;
margin: 0 auto;
width: inherit;
color:white;
}

.card-body{
 
 position: relative;

 padding-top: 10%;
 background: rgba(20, 40, 40, 0.8);
 margin-bottom:  10%;
}

#titre{
    padding-top: 5%;
text-align: center;
}

#sub-btn{
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

  </style>
 </body>
    </html>

  @if (session('status'))
          <div class="alert alert-success" role="alert">
                  {{ session('status') }}
          </div>
  @endif


@endsection
