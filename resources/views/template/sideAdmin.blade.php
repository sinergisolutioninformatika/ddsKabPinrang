 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  @if(Auth::user()->level == 'admin')
                  <li><a><i class="fa fa-gear"></i> Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li id="manuser"><a href="javascript:;">Management User</a></li>
                      <li id="walidata"><a href="javascript:;">Walidata</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-database"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li id="skpd"><a href="javascript:;">SKPD</a></li>
                      <li id="kec"><a href="javascript:;">Kecamatan</a></li>
                      <li id="pus"><a href="javascript:;">Puskesmas</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->level == 'user' or Auth::user()->level == 'admin')
                  <li><a><i class="fa fa-gear"></i> SKPD <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li id="id1"><a href="javascript:;">Dinas Pendidikan</a></li>
                      <li id="id2"><a href="javascript:;">Dinas Kehutanan</a></li>
                    </ul>
                  </li>
                  @endif
                </ul>
              </div>
            </div>