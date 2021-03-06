
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>PromoShop</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('admin/home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Category</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="{{route('admin.category')}}">Category</a>
            
          <a class="dropdown-item" href="{{route('admin.sub_category')}}">Sub-Category</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Product</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="{{route('admin.product')}}">Add Product</a>
          <a class="dropdown-item" href="{{URL::to('/site-logo')}}">Site Logo</a>
          <a class="dropdown-item" href="{{route('admin.banner')}}">Banner</a>
          <a class="dropdown-item" href="{{URL::to('/manage-order')}}">Manage Order</a>
          <a class="dropdown-item" href="{{URL::to('/contact-manage')}}">Contact</a>
          <a class="dropdown-item" href="register.html">Delivary man</a>
     
          
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>