  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{ url('Inicio') }}" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('Inicio') }}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- User Account Dropdown Menu-->
  <li class="dropdown user user-menu">
    <a href="#" class="nav-link" data-toggle="dropdown">
    @if(auth()->user()->foto == "")
      <img src="{{ url('storage/defecto.jpg') }}" class="user-image" alt="User Image">
    @else
      <img src="{{ url('storsge/.auth()->user()->foto') }}" class="user-image" alt="User Image">
    @endif
    </a>
    <ul class="dropdown-menu">
      {{-- User image --}}
      <li class="user-header">
        @if(auth()->user()->foto == "")
          <img src="{{ url('storage/defecto.jpg') }}" class="image-circle" alt="User Image">
        @else
          <img src="{{ url('storsge/.auth()->user()->foto') }}" class="image-circle" alt="User Image">
        @endif

        <p>
          {{auth()->user()->name}} - {{auth()->user()->rol}}
        </p>
      </li>
    </ul>
  </li>
  </nav>
  <!-- /.navbar -->