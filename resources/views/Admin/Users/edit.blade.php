@extends('layouts.app')
@section('content')
    <div id="wrapper">
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <!-- Container Fluid-->
          <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Tâches</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Accueil</a></li>
                <li class="breadcrumb-item">Tâches</li>
                <li class="breadcrumb-item active" aria-current="page">Modifier un utilisateur</li>
              </ol>
            </div>
  
            <div class="row">
              <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Modifier un utilisateur</h6>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.users.update', $users->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="nom"></label>
                        <input type="text" class="form-control" name="nom" aria-describedby="text" value="{{$users->nom}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Adresse Mail</label>
                        <input type="email" class="form-control" name="email" value="{{$users->email}}">
                      </div>
                      <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" name="password" value="{{$users->password}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!---Container Fluid-->
        </div>
      </div>
    </div>
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
@endsection