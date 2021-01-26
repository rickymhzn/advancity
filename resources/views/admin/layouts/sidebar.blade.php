<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
          <img src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" alt="Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">{{ $sitesetting->company_name }}</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
                    <!-- Sidebar Menu -->
          <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                         <a href="{{ route('dashboard') }}" class="nav-link active">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>Dashboard</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.sliders') }}" class="nav-link">
                         <i class="far fa-images"></i>
                              <p>Sliders</p>
                         </a>
                    </li>
                    <li class="nav-item has-treeview">
                         <a href="#" class="nav-link">
                              <i class="fas fa-plane-departure"></i>
                              <p>
                                   Destination
                                   <i class="fas fa-angle-left right"></i>
                                   <span class="badge badge-info right">2</span>
                              </p>
                         </a>
                         <ul class="nav nav-treeview">
                              <li class="nav-item">
                                   <a href="{{ route('admin.countries') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Country</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="{{ route('admin.countryinfos') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Country Info</p>
                                   </a>
                              </li>

                         </ul>
                    </li>
                    <li class="nav-item has-treeview">
                         <a href="#" class="nav-link">
                         <i class="fas fa-book-reader"></i>
                              <p>
                                   Courses
                                   <i class="fas fa-angle-left right"></i>
                                   <span class="badge badge-info right">2</span>
                              </p>
                         </a>
                         <ul class="nav nav-treeview">
                              <li class="nav-item">
                                   <a href="{{ route('admin.courses') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Courses</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="{{ route('admin.subjects') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Subjects</p>
                                   </a>
                              </li>

                         </ul>
                    </li>
                    
                    <li class="nav-item">
                         <a href="{{ route('admin.ctas') }}" class="nav-link">
                         <i class="fas fa-ad"></i>
                              <p>Call To Actions</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.teams') }}" class="nav-link">
                         <i class="fas fa-user-friends"></i>
                              <p>Team Members</p>
                              <span class="badge badge-info right">10</span>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.universities') }}" class="nav-link">
                         <i class="fas fa-university"></i>
                              <p>Universities</p>
                              <span class="badge badge-info right">50</span>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.services') }}" class="nav-link">
                         <i class="fas fa-tools"></i>
                              <p>Services</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.pages') }}" class="nav-link">
                         <i class="far fa-file-alt"></i>
                              <p>Pages</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.counters') }}" class="nav-link">
                         <i class="fas fa-stopwatch-20"></i>
                              <p>Counter</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('admin.testimonials') }}" class="nav-link">
                         <i class="far fa-comments"></i>
                              <p>Testimonials</p>
                              <span class="badge badge-info right">14</span>
                         </a>
                    </li>
                   
                    @if(Auth::user()->admin)
                    <li class="nav-item">
                         <a href="{{ route('admin.users') }}" class="nav-link">
                         <i class="fas fa-users"></i>
                              <p>Users</p>
                              <span class="badge badge-info right">2</span>
                         </a>
                    </li>
                    @endif
                    <li class="nav-header">Settings</li>
                    <li class="nav-item">
                         <a href="{{ route('settings') }}" class="nav-link">
                         <i class="fas fa-cogs"></i>
                              <p>Settings</p>
                         </a>
                    </li>
               </ul>
          </nav>
          <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
</aside>