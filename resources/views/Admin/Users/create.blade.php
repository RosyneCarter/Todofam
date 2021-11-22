@extends('layouts.app')
@section('content')
    <div id="wrapper">
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <!-- Container Fluid-->
          <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Users</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
              </ol>
            </div>
  
            <div class="row">
              <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ajouter un Utilisateur</h6>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
                      @csrf
                    <div class="d-flex align-items-start py-3 border-bottom"> 
                      <div class="pl-sm-4 pl-2" id="img-section">
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                          <label for="avatar" class="font-weight-light text-muted"></label>
                          <div class="input-group-append">
                            <label for="avatar" class="btn btn-light m-0 rounded-pill px-12">Choose a profile picture<i class="fa fa-cloud-upload mr-2 text-muted"></i>
                              <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                            </label>
                        </div>
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="">Pseudo</label>
                        <input type="text" class="form-control" name="nom" aria-describedby="emailHelp"
                          placeholder="Pseudo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                          placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
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



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box
}

.wrapper {
  padding: 30px 50px;
  border: 1px solid #ddd;
  border-radius: 15px;
  margin: 10px auto;
  max-width: 600px
}

h4 {
  letter-spacing: -1px;
  font-weight: 400
}

.img {
  width: 70px;
  height: 70px;
  border-radius: 6px;
  object-fit: cover
}

#img-section p,
#deactivate p {
  font-size: 12px;
  color: #777;
  margin-bottom: 10px;
  text-align: justify
}

#img-section b,
#img-section button,
#deactivate b {
  font-size: 14px
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}

select {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 40px;
    padding: 5px 10px
}

select:focus {
    outline: none
}

.button {
    background-color: #fff;
    color: #0779e4
}

.button:hover {
    background-color: #0779e4;
    color: #fff
}

.btn-primary {
    background-color: #0779e4
}

.danger {
    background-color: #fff;
    color: #e20404;
    border: 1px solid #ddd
}

.danger:hover {
    background-color: #e20404;
    color: #fff
}

@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}

#avatar {
  opacity: 0;
}

#avatar-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}
</style>
</head>
@endsection