 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
   <a class="navbar-brand" href="{{ url('/Projets') }}">Projects Connect To All</a>
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
                          <!-- if (Auth::guest()) -->
                              <ul class="nav-item navbar-right">
                             <a class="nav-link" href="{{ route('login') }}">Login</a>

                           <!-- tester si db est vide -- if()..route('register') }}">Register</a>-->
                                </li>
                              </ul>
                                <!-- si  authentifié -->

                              <li class="nav-item">
                                    <a class="nav-link" href="#">Gestion Utilisateurs</a>
                                 </li>
                                 <li class="nav-item">
                                   <a class="nav-link" href="#">Gestion Projets</a>
                                 </li>

                                 <a class="nav-link" href="/Boite"><span class="badge">*</span>Notifications</a>
                                  </li>

                                  <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Name auth <!-- php $id=Auth::user()->name ? -->

                                    </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fa fa-btn fa-user mr-1"></i>Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out mr-1"></i>Logout</a>
                                      </div>
                                  </div>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                            </form>
                                        </li></ul>

                              <!--   endif  -->
                             </ul>

     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" placeholder="Search" type="text">
       <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
 </nav>
 <br>
 <br>
 <br>
 <br>
