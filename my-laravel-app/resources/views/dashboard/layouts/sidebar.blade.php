
<nav class="navbar-default navbar-side" role="navigation">
   <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
         <li class="text-center">
            <img src="assets/img/find_user.png" class="user-image img-responsive">
         </li>
         <li>
            <a class="active-menu" href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dashboard</font></font></a>
         </li>
         <li>
            <a href="{{Route('admin.showbloglist')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Blogs</font></font></a>
         </li>
         <li>
         <a href="{{ Route('admin.addcategories') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Add Categoery</font></font></a>
         </li>
         <li>
            <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Banners</font></font><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse" style="height: 0px;">
               <li>
                  <a href="{{ Route('admin.add-banners') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Add Banner</font></font></a>
               </li>
               <li>
                  <a href="{{ Route('admin.show-banners') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Banner List</font></font></a>
               </li>
               
            </ul>
         </li>
         <li>
            <a href="table.html"><font style="vertical-align: inherit;">Theme Options</font></font></a>
         </li>
         <li>
            <a href="form.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Book yours now</font></font></a>
         </li>
         
      </ul>
   </div>
</nav>

<!-- <script src="{{ asset('/admin-styles/assets/js/jquery-1.10.2.js') }}"></script> -->
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('/admin-styles/assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('/admin-styles/assets/js/jquery.metisMenu.js') }}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{ asset('/admin-styles/assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('/admin-styles/assets/js/morris/morris.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('/admin-styles/assets/js/custom.js') }}"></script>
    