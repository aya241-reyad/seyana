 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">{{ auth()->user()->unreadNotifications->count() }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right ">
       
        <span class="dropdown-header bg-primary">notification :{{ auth()->user()->unreadNotifications->count() }}
        <span class="badge badge-pill badge-warning mr-auto my-auto float-left" ><a
          href="\mark_as_read_all" class="text-secondary">Read all</a>
        </span>
      </span>
        <div class="dropdown-divider"></div>
        @foreach (auth()->user()->unreadNotifications as $notification)

        <a href="{{ url('orders') }}/{{ $notification->data['id'] }}" class="dropdown-item text-secondary ">
          <h5 class="notification-label fas fa-envelope text-secondary ">{{ $notification->data['title'] }}
          
        </a>
        <span class="float-right text-muted text-sm">{{ $notification->created_at }}</span>
        @endforeach
    </li>
    <ul class="navbar-nav ml-auto">
      @auth
       <li class=" nav-item dropdown ">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>

      @endauth
    </ul>
    
  </ul>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
    </ul>
    

    </nav>