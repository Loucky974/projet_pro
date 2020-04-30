@extends('layouts.app')

@section('title','Contact','User')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')


<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="admin.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">  {{ Auth::user()->name }}</h4>
        <p class="font-weight-light text-muted mb-0">Admin</p>
      </div>
    </div>
  </div>



  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="{{ route('ajaxproducts.index') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                {{__('Users management' )}}
            </a>
    </li>
    <li class="nav-item">
      <a href="#news" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                {{__(   'News')}}
            </a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                {{__(  'Send a Messages')}}
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('contact.index') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                {{__(  ' Messages archives')}}
            </a>
    </li>
  
  </ul>

  </div>
<!-- End vertical navbar -->
<div class="row backgrounding" id="box">

    <div class="content" id="contenu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Tous les messages</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Sent At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $key=>$contact)
                                        <tr>
                                            <td>{{ $contact->user->name }}</td>
                                            <td>{{ $contact->user->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->created_at }}</td>
                                            <td>
                                                <a href="{{ route('contact.show',$contact->id) }}" class="btn btn-info btn-sm"><i class="material-icons">details</i></a>

                                                <form id="delete-form-{{ $contact->id }}" action="{{ route('contact.destroy',$contact->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $contact->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
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

       .backgrounding{
        background-image: url('spacex--p-KCm6xB9I-unsplash.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
     
    }
    #titre{
        color:white;
    }
    thead{
        background: rgba(20, 40, 40, 0.8);
        color: white;
    }
   </style>


@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush