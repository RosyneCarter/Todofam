@extends('layouts.app')


@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('', 'PharMaSol') }}</title>

<style>
/*
* user card
*/
.cssui-usercard__header{
  padding: ;
  margin-right: 4%;
  display: flex;
  align-items: left;
}

.cssui-usercard__avatar {
  border-radius: 50%;
  border: 4px solid #fff;
  box-sizing: border-box;
  margin-right: 4%;
  width: 10rem;
  height: 10rem;

  
}

.cssui-usercard__name .container {
  font-size: 3.5rem;
  font-weight: 300;
  margin-top: 0; 
  margin-right: 4%; 
  margin-bottom: 0;  
  
}


.container .p {
  top:100px;
  border-radius: 50%;
  border: 4px solid #fff;
  box-sizing: border-box;
  margin-right: 20%;
  margin-top: 100;
  width: 25rem;
  height: 0rem; 
  
}
.footer {
  border-radius: 50%;
  border: 4px solid #fff;
  box-sizing: border-box;
  margin-right: 20%;
  width: 0rem;
  height: 100rem; 
  
}


/*
* demo styles
*/

</style>
</head>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>PharMaSol</title>
   
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="components.css">
   
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="vertical-menu.css">
   <link rel="stylesheet" type="text/css" href="app-user.css">
    <!-- END: Page CSS-->

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern" background="">
    <!-- BEGIN: Content-->
  <div class="app-content content">
      <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
          <div class="content-header row">
        </div>
          <div class="content-body">
            <!-- page users view start -->
            <section class="page-users-view">
              <div class="row" class="col-8 col-md-12">
                <!-- account start -->
                <div class="col-12 col-md-12">
                  <div class="card col-md-10 container-fluid"  >
                    <div class="card-header">
                      <div class="card-title"><strong>Compte</strong></div>
                    </div>
                      <div class="card-body" align="center">
                        <div class="row">
                          <div class="users-view-image">
                            <img src="{{asset('img/'.$users->avatars)}}" class="cssui-usercard__avatar" alt="Avatar">
                        </div>
                        <br>
                          <div class="col-12 col-sm-9 col-md-6 col-lg-5" style="margin-left: 70px">
                            <table class = "table table-striped table-bordered" id="example">
                              <tr>
                                <td class="font-weight-bold">Nom</td>
                                  <td>{{$users->name}}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Adresse Mail</td>
                                  <td>{{$users->email}}</td>
                              </tr>
                            </table>
                          </div>
                          <div class="col-2 col-md-4 col-lg-2">
                            <table  class = "table table-striped table-bordered" id="example">
                              <tr>
                                <td class="font-weight-bold">Status</td>
                                  <td>active</td>
                                </tr>
                              <tr>
                                <td class="font-weight-bold">Role</td>
                                  <td>{{implode(', ', $users->roles()->get()->pluck('role')->toArray())}}
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="col-12" align="left">
                            <h3 class="cssui-usercard__name"></h3>
                            <a class="btn btn-primary" id="modifier" href="{{route('admin.users.edit', $users->id)}}">Modifier ses infomations</a><br><br>
                          <ul class="list-inline ">
                            <li class="list-inline-item">
                              <a href="https://mobile.twitter.com/CarterRosyne?s=09">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="https://www.facebook.com/rosynefangamla.kopelda">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- account end -->
              </div>    
            </section>
            <!-- page users view end -->
          </div>
      </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <!-- END: Footer-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
  <!-- Footer -->

@endsection