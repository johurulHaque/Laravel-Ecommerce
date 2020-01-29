 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="/images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Johurul Haque</p>
                <p class="designation" style="color: white;">Manager</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#order-pages" aria-expanded="false" aria-controls="order-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Orders</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="order-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders') }}">Show Orders</a></li>
                </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="brand-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Brands</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="brand-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands') }}">Show Brands</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Brand</a></li>
                </ul>
            </div>
          </li> 

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Categories</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="category-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}">Show Categories </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.create') }}">Add Category</a></li>
                </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Products</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">Show Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.create') }}">Add Product</a></li>
                </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="slider-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Sliders</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sliders') }}">Show Sliders</a></li>
                </ul>
            </div>
          </li>
          

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="division-pages"><img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Divisions</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="division-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.divisions') }}">Show Divisions</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.division.create') }}">Add Division</a></li>
                </ul>
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="district-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Manage Districts</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="district-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.districts') }}">Show Districts</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.district.create') }}">Add District</a></li>
                </ul>
            </div>
          </li>


        </ul>
      </nav>