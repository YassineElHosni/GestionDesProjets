<!Doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials._links')

</head>

    <div class="text-center">

      <h1 >Events Follow Up</h1>
    <h3 >Application pour la gestion des evenements de l'EMSI</h3>
   </div>
    <!-- Styles -->
 @include('partials._style')

<body>

    <!--  <nav class="navbar navbar-dark bg-success mb-4">
        <! Branding Image
                <a class="navbar-brand" href="{{ url('/Events') }}">
                    Events Follow Up
                </a>
      <div class="navbar-center mb-3" >-->
 <!--mes boutons-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-success">
   <a class="navbar-brand" href="{{ url('/Projets') }}">Projects Follow Up</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarColor02">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
         @yield('bouttons')
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
       </li>

         <!-- si non authentifié -->

             <li class="nav-item">
                           @if (Auth::guest())
                              <ul class="nav-item navbar-right">
                             <a class="nav-link" href="{{ route('login') }}">Login</a>
                              <!-- <a class="nav-link" href="{{ route('register') }}">Register</a>-->
                                </li>
                              </ul>
                                 @else <!-- si  authentifié -->
                                 <li class="nav-item">
                                   <?php $id=Auth::user()->id ?>
                                   <a class="nav-link" href="{{ route('Users.show',$id ) }}">Mon profile</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Users.index') }}">Gestion Utilisateurs</a>
                                 </li>
                                 <li class="nav-item">
                                   <a class="nav-link" href="Events/create">Ajouter Evenement</a>
                                 </li>
                                   <a class="nav-link" href="/message">Envoyer Message</a> </li>
                                 <a class="nav-link" href="/Boite"><span class="badge">*</span>Notifications</a>
                                  </li>
                                     <ul class="nav-item navbar-right">
                                      <li class="nav-item">
                                       <a class="nav-link" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                           {{ Auth::user()->Nom }} <span class="caret"></span> Logout
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                            </form>
                                        </li></ul>

                                 @endif
                             </ul>

     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" placeholder="Search" type="text">
       <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
 </nav>

<!--recherche barr!-->

      @if(session()->has('flash'))
          <div class="container">
               <div class="alert alert-success">{{ session('flash') }}</div>
         </div>
      @endif
        <div class="container">
          @yield('content') </div>
        <!-- Scripts
        <script src="{{ asset('js/app.js') }}"></script>-->


        <hr>
  </body>
  </html>
