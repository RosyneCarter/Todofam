

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>
<br><br><br><br><br>
<body>
    <div class="card card-primary col-md-6 container-fluid">
        <!-- Form Basic -->
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" align="center">
              <h6 class="m-0 font-weight-bold text-primary align-center">Se Connecter</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Adresse Mail</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Entrez votre adresse mail">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de Passe</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                  </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                  @if (Route::has('password.request'))
                      <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                          {{ __('Forgot your password?') }}
                      </a>
                  @endif
                  <button type="submit" class="btn btn-primary">
                      {{ __('Log in') }}
                  </button>
                </div>
            </div>
          </div>
        </form>
      </div>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/ruang-admin.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>  
</body>
</html>
