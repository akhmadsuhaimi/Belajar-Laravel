<div class="wrapper col0">
    <div id="topbar">
      <div id="slidepanel">
        <div class="topbox">
          <h2>Admin Login Here</h2>
          <form action="{{ url('postlogin') }}" method="post">
            {{ csrf_field() }}
            <fieldset>
              <legend>Admin Login Form</legend>
              <label for="teachername">Email:
                <input type="email" name="email" id="teachername" value="" />
              </label>
              <label for="teacherpass">Password:
                <input type="password" name="password" id="teacherpass" value="" />
              </label>
              <label for="teacherremember">
                <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
                Remember me</label>
              <p>
                <input type="submit" id="teacherlogin" value="Login" />
                &nbsp;
              </p>
            </fieldset>
          </form>
        </div>
        <br class="clear" />
      </div>
      <div id="loginpanel">
        <ul>
          <li class="left">Log In Here &raquo;</li>
          <li class="right" id="toggle"><a id="slideit">Administration</a><a id="closeit" style="display: none;">Close Panel</a></li>
        </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
  <!-- ####################################################################################################### -->
  <div class="wrapper col1">
    <div id="header">
      <div id="logo">
        <h1>Desa Ramania</h1>
      </div>
      <div id="topnav">
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('struktur-desa') }}">Profile Desa</a></li>
          <li><a href="{{ url('Tambah-Surat') }}">Pengajuan</a></li>
        </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
  