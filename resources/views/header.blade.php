 <!-- Navbar & Hero Start -->

 
 <div class="container-xxl position-relative p-0  " >
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">Filatec</h1> -->
                    <img  class= "logo" src="theme/img/logo.png"  alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto  py-0">
                        <a  href="{{ url('/') }}" class="nav-item nav-link ">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                            <div class="dropdown-menu m-0">
                            <a href="{{ url('/about') }}" class="dropdown-item">About Us</a>
                          
                                <!-- <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a> -->
                                <a href="{{ url('/contact') }}" class="dropdown-item">Contact us</a>
                                
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Where we focus</a>
                            <div class="dropdown-menu m-0">
                            <a href="{{ url('/agriculture') }}" class="dropdown-item">Agriculture and Food system</a>
                                <a href="{{ url('/private') }}" class="dropdown-item">Private sector development</a>
                                <a href="{{ url('/resillience') }}" class="dropdown-item">Resillience Programming</a>
                                <a href="{{ url('/climate') }}" class="dropdown-item">

                                Climate Change and Environmental Sustainability</a>
<a href="{{ url('/knowledge_management') }}" class="dropdown-item">
Knowledge management and analytics</a>
                            </div>
                        </div>
                        <!-- <a  href="{{ url('/about') }}" class="nav-item nav-link ">What we do</a> -->
                        
                       
                        <a  href="{{ url('/project') }}" class="nav-item nav-link">Projects</a>
                        <a href="{{ url('/careers') }}" class="nav-item nav-link">Careers</a>
                    
                    </div>
                    <!-- <a href="{{ url('/quote') }}" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Free Quote</a> -->
                </div>
            </nav>

        </div>
        <!-- Navbar & Hero End -->
        