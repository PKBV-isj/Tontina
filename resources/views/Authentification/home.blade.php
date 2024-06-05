@extends('layouts.app')
        @section('css')
        <!--<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/apple-icon.png') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('assets2/vendor/fonts/boxicons.css') }}" />-->

        <!-- Core CSS -->
        <!--<link rel="stylesheet" href="{{ asset('assets2/vendor/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets2/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('assets2/css/demo.css') }}" />-->

        <!-- Vendors CSS -->
        <!--<link rel="stylesheet" href="{{ asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />-->

        <!-- Page CSS -->

        <!-- Helpers -->
        <!--<script src="{{ asset('assets2/vendor/js/helpers.js') }}"></script>-->
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets2/js/config.js') }}"></script>
        @endsection
        @section('title', 'Menbres')
        @section('nav')

        <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              Tontina/ Menbres
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Menbres
                  </a>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link me-2" href="../pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-up.html">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-in.html">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>-->
              </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <!--<li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                </li>-->
                <li class="nav-item">
                  <a href="#" class="btn btn-sm mb-0 me-1 bg-gradient-dark" data-bs-toggle="modal" data-bs-target="#modalCenter">Ajouter un Menbre</a>

                  </li>
              </ul>
            </div>
          </div>
        </nav>
        @endsection

        @section('content')

        <!--Modal ajouter-->

        <div class="modal fade " id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Ajouter un Menbre</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <form action="{{ route('admin.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <div class="modal-body">
                                    <div class="row g-2">
                                        <div class="col mb-3">
                                            <label for="name" class="form-label">Nom</label>
                                            <input type="text" name="nom" class="form-control" placeholder="Entrez le nom" /> </div>
                                             <div class="col mb-3">
                                                 <label for="login" class="form-label">Login</label>
                                                <input type="text" name="login" class="form-control" placeholder="Entrez le login" />
                                            </div>
                                        </div>
                                         <div class="row g-2"> <div class="col mb-3">
                                            <label for="password" class="form-label">Mot de passe</label>
                                            <input type="password" name="password" class="form-control" placeholder="xxxxxxxxx" />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="passwordConfirm" class="form-label">Confirmer le mot de passe</label>
                                            <input type="password" name="password1" class="form-control" placeholder="xxxxxxxxx" />
                                        </div>
                                    </div>
                                    <div class="row g-2"> <div class="col mb-3">
                                         <label for="AnneEntree" class="form-label">Année d'entrée</label>
                                          <input type="date" name="anneeEntree" class="form-control" />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nbDeFemmes" class="form-label">Nombre de femmes</label>
                                            <input type="number" name="nbDeFemmes" class="form-control" />
                                        </div>
                                    </div>
                                     <div class="row g-2">
                                        <div class="col mb-3">
                                             <label for="role" class="form-label">Rôle</label>
                                             <select name="role" class="form-control">
                                                <option value="user">user</option>
                                                <option value="admin">admin</option>
                                                <option value="secretaire">secretaire</option>
                                                <option value="moderateur">moderateur</option>
                                            </select>
                                        </div>
                                     </div>
                                     </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>

                            </form>
                          </div>
                        </div>
        </div>



                       <!-- @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif-->


                        <!--Table Menbre-->

    <div class="container-fluid  py-8 px-3">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
        <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>

                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Login</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Annee Entrre</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>

                  </thead>
                  <tbody>
                  @foreach($user as $us)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset($us->photo) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $us->nom }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $us->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $us->login }}</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>

                      <td class="align-middle text-center text-sm">
                            @if($us->actif)
                            <span class="badge badge-sm bg-gradient-success">Online</span>
                            @else
                            <span class="badge badge-sm bg-gradient-danger">Offline</span>
                            @endif
                        </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $us->anneeEntree }}</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
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



        @endsection
        @section('footer')

        @endsection
        @section('js')
        <!--<script src="{{ asset('assets2/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets2/vendor/libs/popper/popper.js') }}"></script>-->
        <script src="{{ asset('assets2/vendor/js/bootstrap.js') }}"></script>
        <!--<script src="{{ asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets2/vendor/js/menu.js') }}"></script>-->

        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <!--<script src="{{ asset('assets2/js/main.js') }}"></script>-->

        <!-- Page JS -->
        <script src="{{ asset('assets2/js/ui-modals.js') }}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        @endsection
