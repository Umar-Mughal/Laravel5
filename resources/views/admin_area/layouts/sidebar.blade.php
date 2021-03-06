<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/umar.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Umar Mughal</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            
            <li>
                <a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i> Categories </a>
            </li>

            <li>
                <a href="{{ route('admins.index') }}"><i class="fa fa-circle-o"></i> Admins </a>
            </li>
            
           <li>
                <a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i> Products </a>
            </li>

        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>