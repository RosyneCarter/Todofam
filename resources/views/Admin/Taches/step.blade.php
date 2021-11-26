@extends('layouts.app')
@section('content')
  <script type="application/javascript">
    function deleteItem(e){
      let id = e.getAttribute('data-id');
      const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          if (result.isConfirmed){
            $.ajax({
              type:'DELETE',
              url:'{{url("Enseignement")}}/' +id,
              data:{
                  "_token": "{{ csrf_token() }}",
              },
            success:function(data) {
              if (data.success){
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    "success"
                );
            $("#"+id+"").remove(); // you can add name div to remove
                                    
            }
          }
        });
        location.reload();
      }
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Clicked ok to cancel :)',
          'error'
        );
      }
  });
  }
  </script>
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
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter une étape</h6>
                </div>
                <div class="row m-1 p-3 px-5 justify-content-end">
              </div>
                <div class="card-body">
                  <form class="new-added-form" method="POST" action="{{route('admin.etapes.store')}}" enctype="multipart/form-data">
                  @csrf
                    <section id="elm" class="mb-4" >
                      <div class="row">
                        <div class="col-md-6">
                          <label for="nom">{{ __('Nom') }}</label>
                          <input type="text" class="form-control" name="nom" aria-describedby="text"
                          placeholder="Entrer le Nom">
                        </div>
                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                          <label for="password">{{ __('Tache') }}</label>
                          <select class="form-control" id="multiselect" name="nom" required>
                            @foreach($taches as $tache)
                              <option value="{{$tache->id}}">{{$tache->nom}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </section>      
                      <button type="submit" class="btn btn-primary">@lang('Save')</button>
                      <a href = "" title="Ajouter" id="plus" style="float: right;"><i style="color:white; background-color: #296ceb;border-color:#2976eb; border-radius:4px; border:none; font-weight:500px; padding:12px 15px;" class="fa fa-plus"></i></a>
                      <a href = "" title="Retirer" id="minus" style="float: right; margin-right:5px;"><i style="color:white; background-color: #2969f3;border-color:#2984ec; border-radius:4px; border:none; font-weight:500px; padding:12px 15px;" class="fa fa-minus"></i></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>             
<!-- /PSMFLMXF -->
@endsection