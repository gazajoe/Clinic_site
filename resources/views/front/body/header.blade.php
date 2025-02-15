 <!-- Back to top button -->
 <div class="back-to-top"></div>

 <header>
   <div class="topbar">
     <div class="container">
       <div class="row">
         <div class="col-sm-8 text-sm">
           <div class="site-info">
             <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
             <span class="divider">|</span>
             <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
           </div>
         </div>
         <div class="col-sm-4 text-right text-sm">
           <div class="social-mini-button">
             <a href="#"><span class="mai-logo-facebook-f"></span></a>
             <a href="#"><span class="mai-logo-twitter"></span></a>
             <a href="#"><span class="mai-logo-dribbble"></span></a>
             <a href="#"><span class="mai-logo-instagram"></span></a>
           </div>
         </div>
       </div> <!-- .row -->
     </div> <!-- .container -->
   </div> <!-- .topbar -->

   <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
     <div class="container">
       <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

       <form action="#">
         <div class="input-group input-navbar">
           <div class="input-group-prepend">
             <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
           </div>
           <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
         </div>
       </form>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupport">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
             <a class="nav-link" href="{{url('/')}}">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="about.html">About Us</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('doctor.all')}}">Doctors</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('blog')}}">News</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('contact.page')}}">Contact</a>
</li>
             @php
                       use Illuminate\Support\Facades\Route;
                   @endphp
                   @if(Route::has('login'))
                       @auth
                       
                    
                       <li class="nav-item">
                               <a class="btn btn-primary ml-lg-3" href="{{route('user.appointment')}}">My Appointment</a>|  
                           </li>

                       <div class="btn-group" id ="navbarSupport">
                               <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{Auth::user()->name}}
                               </button>
                               <div class="dropdown-menu">
                                 <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                         </div>

         @else
                           <li class="nav-item">
                               <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                           </li>
                           <li class="nav-item">
                               <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                           </li>
                       @endauth
                   @endif
               </ul>
           </div> <!-- .navbar-collapse -->
       </div> <!-- .container -->
   </nav>
</header>