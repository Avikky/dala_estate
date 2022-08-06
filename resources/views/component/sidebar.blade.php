<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ url('/home') }}" class="brand-link">
          
          <span class="brand-text text-white text-center" style="font-size: 14px;font-weight: bolder; text-transform: uppercase;">
            {{ $setting->sitename }}
          </span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <span class="p-1 text-white">
                Admin
              </span>
              <span class="dot text-green"></span>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">
                  <i class="nav-icon fa fa-th text-white"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/services') }}" class="nav-link">
                  <i class="nav-icon fa fa-product-hunt text-yellow"></i>
                  <p>Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('g.index') }}" class="nav-link">
                  <i class="nav-icon fa fa-product-hunt text-yellow"></i>
                  <p>Gallery uploads</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/housing') }}" class="nav-link">
                  <i class="nav-icon fa fa-bell text-purple"></i>
                  <p>Housing</p>
                </a>
              </li>

              <!-- <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-home text-green"></i>
                  <p>
                    Projects/CSR
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/admin/project') }}" class="nav-link ml-3">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Projects</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ url('/admin/project/create') }}" class="nav-link ml-3">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Project</p>
                    </a>
                  </li>
                </ul>
              </li> -->


              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-newspaper text-cyan"></i>
                    <p>
                      Blog
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ url('/admin/blog/create') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Posts</p> 
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ url('/admin/blog') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Posts</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ url('/admin/blog/category') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Categories</p>
                      </a>
                    </li>

                    <!--<li class="nav-item">
                      <a href="{{ url('/admin/blog/tag') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tags</p>
                      </a>
                    </li>-->

                  </ul>
              </li>

               <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-newspaper text-cyan"></i>
                    <p>
                      FAQ
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ url('/admin/faq') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create FAQ</p> 
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ url('/admin/blog') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All FAQ</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ url('/admin/faq/faqcat') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>FAQ Category</p>
                      </a>
                    </li>

                    <!--<li class="nav-item">
                      <a href="{{ url('/admin/blog/tag') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tags</p>
                      </a>
                    </li>-->

                  </ul>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/slider') }}" class="nav-link">
                  <i class="nav-icon fa fa-gear text-blue"></i>
                  <p>Sliders</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/team') }}" class="nav-link">
                  <i class="nav-icon fa fa-user text-indigo"></i>
                  <p>Team</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/testimonial') }}" class="nav-link">
                  <i class="nav-icon fa fa-users text-white"></i>
                  <p>Testimonials</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/partners') }}" class="nav-link">
                  <i class="nav-icon fa fa-truck text-green"></i>
                  <p>Partners</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{ url('/admin/messages') }}" class="nav-link">
                  <i class="nav-icon fa fa-envelope-o text-seal"></i>
                  <p>Messages</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/loan') }}" class="nav-link">
                  <i class="nav-icon fa fa-book text-green"></i>
                  <p>Loan Application </p><span class="badge badge-info badge-sm float-right">{{ $loancount }}</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/setting') }}" class="nav-link">
                  <i class="nav-icon fa fa-cogs text-pink"></i>
                  <p>Setting</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="nav-icon fa fa-power-off text-red"></i>
                  <p>{{ __('Logout') }}</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>