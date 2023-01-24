<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!--menu-is-opening menu-open-->
            
               
               <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                Admin
                <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                  
                  <li class="nav-item menu-is-opening">
                <a href="{{ route('users.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Page</p>
                </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('changePasswordGet') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>change password</p>
                  </a>
                  </li>
                </ul>
                </li>
             


                <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                  Client
                  <i class="fas fa-angle-left right"></i>
                  </p>
                  </a>
                  <ul class="nav nav-treeview">
                    
                    <li class="nav-item menu-is-opening">
                  <a href="{{ route('clients.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Page</p>
                  </a>
                  </li>
                  </ul>
                  </li>
                
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-landmark"></i>
                    <p>
                    Category
                    <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                      
                      <li class="nav-item menu-is-opening">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Category Page</p>
                    </a>
                    </li>
                    </ul>
                    </li> 

                    <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-recycle"></i>
                      <p>
                      Service
                      <i class="fas fa-angle-left right"></i>
                      </p>
                      </a>
                      <ul class="nav nav-treeview">
                        
                        <li class="nav-item menu-is-opening">
                      <a href="{{ route('services.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Service Page</p>
                      </a>
                      </li>
                      </ul>
                      </li> 


                      <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                        SubService
                        <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                          
                          <li class="nav-item menu-is-opening">
                        <a href="{{ route('subservices.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>SubService Page</p>
                        </a>
                        </li>
                        </ul>
                        </li> 

                        <li class="nav-item">
                          <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-magnet"></i>
                          <p>
                          Units
                          <i class="fas fa-angle-left right"></i>
                          </p>
                          </a>
                          <ul class="nav nav-treeview">
                            
                            <li class="nav-item menu-is-opening">
                          <a href="{{ route('units.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Unit Page</p>
                          </a>
                          </li>
                          </ul>
                          </li> 

                          <li class="nav-item">
                          <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-store"></i>
                          <p>
                         Orders
                          <i class="fas fa-angle-left right"></i>
                          </p>
                          </a>
                          <ul class="nav nav-treeview">
                            
                            <li class="nav-item menu-is-opening">
                          <a href="{{ route('orders.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Order Page</p>
                          </a>
                          </li>
                          </ul>
                          </li> 
               
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                           Options
                            <i class="fas fa-angle-left right"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                              
                              <li class="nav-item menu-is-opening">
                            <a href="{{ route('options.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Option Page</p>
                            </a>
                            </li>
                            </ul>
                            </li> 

                            <li class="nav-item">
                              <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-star"></i>
                              <p>
                             Banners
                              <i class="fas fa-angle-left right"></i>
                              </p>
                              </a>
                              <ul class="nav nav-treeview">
                                
                                <li class="nav-item menu-is-opening">
                              <a href="{{ route('getbanner') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Create Banner</p>
                              </a>
                              </li>
                              </ul>
                              </li> 







                              <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>
                               Quests
                                <i class="fas fa-angle-left right"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  
                                  <li class="nav-item menu-is-opening">
                                <a href="{{ route('quests.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>quests Page</p>
                                </a>
                                </li>
                                </ul>
                                </li> 

              
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>