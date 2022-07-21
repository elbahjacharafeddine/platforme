<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
 
    <div class="container-fluid py-1 px-3"  style="display: flex;" >
         <nav aria-label="breadcrumb" class="d-sm-inline d-none">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"  >
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
                </ol>
            </nav>
        <div   class="d-sm-inline d-none" style="text-align:center;" >
        <img src="../assets/img/esef.jpeg"  alt="..." style="max-width:50%;height:auto;"> 
        </div>

        

      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar" style="text-align:left;"> 
                <a href="{{ url('/logout')}}" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none" style="pading:20%;">Sign Out</span>
                </a>
        </div>  
    </div>
   
</nav>
<!-- End Navbar -->