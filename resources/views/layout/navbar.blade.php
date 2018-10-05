  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="{{\route('admin.user.dashboard')}}" class="logo"><b><span>MSU</span>Shifting Program</b></a>
  <!--logo end-->

  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li>
        <form method="post" action="{{\route('admin.logout')}}">
          {{ csrf_field() }}
          <button type="submit" class="logout" >Logout</button>
        </form>
      </li>
    </ul>
  </div>
