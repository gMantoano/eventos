  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ config('app.main_url') }}" class="brand-link"> 
      <span class="brand-text font-weight-light">Eventos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/biblioteca/AdminLTE/dist/img/avatar-1299805_640.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="javascript:;" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="javascript:;" class="nav-link"> <!-- active -->
              <i class="nav-icon fas fa-book"> </i>
              <p>
                Cadastro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ config('cad.cliente') }}" class="nav-link">
					              <i class="nav-icon far fa-edit" style="margin-left:16px;"></i> <p>Clientes</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ config('cad.cliente') }}" class="nav-link">
					              <i class="nav-icon far fa-edit" style="margin-left:16px;"></i> <p>Fornecedores</p> 
                </a>
              </li>
            </ul>
            
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="javascript:;" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Estações
                <i class="fas fa-angle-left right"></i>
                <!--span class="badge badge-info right">6</span-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/estacoes/tratar_clientes" class="nav-link">
					<i class="nav-icon far fa-edit" style="margin-left:14px;"></i> <p>Tratar clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/topologia" class="nav-link"> <!-- active -->
					<i class="nav-icon fas fa-network-wired" style="margin-left:14px;"></i> <p>Avaliar topologia</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/descomissionamento" class="nav-link">
					<i class="nav-icon fas fa-power-off" style="margin-left:14px;"></i> <p>Descomissionamento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/tratar_quarentena" class="nav-link">
					<i class="nav-icon far fa-pause-circle" style="margin-left:14px;"></i> <p>Tratar quarentena</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/tratar_financeiro" class="nav-link"> <!-- active -->
					<i class="nav-icon fas fa-hand-holding-usd" style="margin-left:14px;"></i> <p>Tratar financeiro</p> 
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="javascript:;" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Cargas
                <i class="fas fa-angle-left right"></i>
                <!--span class="badge badge-info right">6</span-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i style="margin-left:14px;" class="nav-icon fas fa-circle"></i>
                  <p>
                    Tratar cliente
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ config('app.main_url') }}/cargas/b2b" class="nav-link">
    					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:30px;"></i> <p>B2B</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ config('app.main_url') }}/cargas/varejo" class="nav-link">
    					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:30px;"></i> <p>Varejo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ config('app.main_url') }}/cargas/uso_proprio" class="nav-link">
    					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:30px;"></i> <p>Uso Próprio</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ config('app.main_url') }}/cargas/tup" class="nav-link">
    					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:30px;"></i> <p>TUP</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ config('app.main_url') }}/cargas/escolas" class="nav-link">
    					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:30px;"></i> <p>Escolas</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/cargas/topologia" class="nav-link">
					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:14px;"></i> <p>Topologia</p>
                </a>
              </li -->
              <li class="nav-item">
                <a href="{{ config('app.main_url') }}/estacoes/lote" class="nav-link">
					<i class="nav-icon fas fa-cloud-upload-alt" style="margin-left:14px;"></i> <p>Carregar estações</p>
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