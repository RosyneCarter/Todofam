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
                <li class="breadcrumb-item active" aria-current="page">Ajouter une tâche</li>
              </ol>
            </div>
  
            <div class="row">
              <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter Une Tâche</h6>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.taches.update', $taches->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="nom"></label>
                        <input type="text" class="form-control" name="nom" aria-describedby="text" value="{{$taches->nom}}">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$taches->description}}">
                      </div>
                      <div class="form-group">
                        <label for="date">Ajouter une date d'échéance</label>
                        <input type="date" class="form-control" name="ended_at" value="{{$taches->ended_at}}">
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