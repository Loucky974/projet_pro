<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>IRD</title>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
   
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
   

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">  
 <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
  

    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }

    </style>
<style>
    #contenu{
    margin-left:16rem;
}

#sidebar.active {
  margin-left: -20rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

.vertical-nav {
  
  width: 15rem;
  height:100%;
  position: absolute;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
}
.active,.nav-link:hover
{
background-color:rgba(26, 85, 109, 0.384) ;
color: cornsilk;
}
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
</head>
<body>





<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
               <img src='ird.png' alt="logo_IRD" id="logoird" /></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
                        @if (Route::has('register'))
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>





    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
          <div class="media d-flex align-items-center"><img src="admin.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
              <h4 class="m-0">  {{ Auth::user()->name }}</h4>
              <p class="font-weight-light text-muted mb-0">User</p>
            </div>
          </div>
        </div>
      
      
      
        
        <ul class="nav flex-column bg-white mb-0">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link text-dark font-italic">
                      <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                      {{__('Download Plateform' )}}
                  </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('news.index') }}" class="nav-link text-dark font-italic active">
                      <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                      {{__(   'News')}}
                  </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact.user') }}"  class="nav-link text-dark font-italic">
                      <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                      {{__(  'Send a Message')}}
                  </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact.index') }}" class="nav-link text-dark font-italic">
                      <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                      {{__(  'Messages received')}}
                  </a>
          </li>
      
          <li class="nav-item">
            <a href="{{ route('contact.show') }}" class="nav-link text-dark font-italic">
                      <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                      {{__(  'Messages sent')}}
                  </a>
          </li>
        
        </ul>
      
      
        </div>
      






















  <div class="row backgrounding" id="box">
<div class="container" id="contenu">


    <h3 id="titre">{{__('Welcome to news area')}}</h3>

  

    <div class="row">
    <div class='list-group gallery'>

            @if($images->count())
                @foreach($images as $image)
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                        <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                        <div class='text-center'>
                            <small class='text-muted'>{{ $image->title }}</small>
                        </div> <!-- text-center / end -->
                    </a>
                   
                </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->

</div>

</body>


<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
</html>