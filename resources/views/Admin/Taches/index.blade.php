@extends('layouts.app')
@section('content')
<body> 
          <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
        </div>
        <div class="row">
              <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                  </div>
                  <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                      <div class="dt-buttons btn-group">
                        <div class="float-md-left d-block mb-1">
                          <a href="{{ route('admin.taches.create') }}" class="btn btn-primary">Ajouter une tâche</a>
                        </div>
                      </div>
                      <thead class="thead-light">
                        <tr>
                          <th>Id</th>
                          <th>Completed</th>
                          <th>Nom</th>
                          <th>Date Définie</th>
                          <th>Action</th>
                          <th>Ajouter des étapes</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Id</th>
                          <th>Completed</th>
                          <th>Nom</th>
                          <th>Date Définie</th>
                          <th>Action</th>
                          <th>Ajouter des étapes</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach ($taches as $tache)
                          <tr>
                            <td scope = "row"> {{$tache->id}} </td>
                            <td scope = "row"><input type="checkbox" name="colors" data-toggle="modal" data-target="#tacheModal" value="blue"/></td>
                            <td> {{$tache->nom}} </td>
                            <td> {{$tache->ended_at}} </td>
                            <td>
                              <a href ="{{ route('admin.taches.show', $tache->id) }}"><button class = "btn btn-warning" title="Vusialiser"><i class="fa fa-eye"></i></button></a>
                              <a href ="{{ route('admin.taches.edit', $tache->id) }}"><button class = "btn btn-success" title="Editer"><i class="iconify" data-icon="bi:pencil-square"></i></button></a>
                              @can('manage-user')
                              <form action="{{ route('admin.taches.destroy', $tache->id) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger" title="supprimer"><i class="iconify" data-icon="feather:trash-2" aria-hidden="true"></i></button>
                              </form> 
                              @endcan   
                              </div>
                            </td>
                            <td><div class="float-md-left d-block mb-1">
                              <a href="{{ route('admin.etapes.create') }}" class="btn btn-primary">Ajouter une tâche</a>
                            </div></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Page level custom scripts -->
    <script>
      $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        // $('#dataTableHover').DataTable(); // ID From dataTable with Hover
      });
    </script>


    <!-- Modal Logout -->
<div class="modal fade" id="tacheModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabelLogout">Êtes-vous sûr d'avoir accompli cette tâche ?</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p><label for="myfile">Ajouter des fichiers justificatifs:</label>
        <input type="file" id="myfile" name="myfile"></p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
      <a href="" class="btn btn-primary" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Envoyer</a>
      <form id="logout-form" action="" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </div>
</div>
</div>



  </body>
@endsection