<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo"><a href="{{route('admin.home')}}" class="simple-text logo-normal">
        Laravel Admin
      </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin.home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#tablesExamples" aria-expanded="false">
              <i class="material-icons">grid_on</i>
              <p> User Management
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples" style="">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('admin.users.index')}}">
                    <span class="sidebar-mini"> US</span>
                    <span class="sidebar-normal"> Users </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('admin.roles.index')}}">
                    <span class="sidebar-mini"> RS </span>
                    <span class="sidebar-normal"> Roles </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('admin.permissions.index')}}">
                    <span class="sidebar-mini"> PS </span>
                    <span class="sidebar-normal"> Permissions </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </div>
      </div>