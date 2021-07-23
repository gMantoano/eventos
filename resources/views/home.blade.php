 

@section('content') 
@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.navbar')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Panorama geral</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ config('app.main_url') }}">Home</a></li>
              <li class="breadcrumb-item active">Panorama geral</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
            
      <div class="container-fluid">
        
        
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Concluído</span>
                <span class="info-box-number">
                    <span id="percentual_concluida"></span>
                    <div class="spinner-grow spinner-grow-sm loadingio-spinner-pulse-holder" role="status"><span class="sr-only">Carregando...</span></div>
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-hourglass-half"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Em andamento</span>
                <span class="info-box-number">
                    <span id="percentual_andamento"></span>
                    <div class="spinner-grow spinner-grow-sm loadingio-spinner-pulse-holder" role="status"><span class="sr-only">Carregando...</span></div>
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="far fa-hourglass"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pronto para iniciar</span>
                <span class="info-box-number">
                    <span id="percentual_nao_iniciado"></span>
                    <div class="spinner-grow spinner-grow-sm loadingio-spinner-pulse-holder" role="status"><span class="sr-only">Carregando...</span></div>
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-hourglass-start"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pendente</span>
                <span class="info-box-number">
                    <span id="percentual_pendente"></span>
                    <div class="spinner-grow spinner-grow-sm loadingio-spinner-pulse-holder" role="status"><span class="sr-only">Carregando...</span></div>
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
 
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <div class="card card-border-purple card-outline">
              <div class="card-header">
                <h3 class="card-title">Eventos em andamentos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive dataTableResultContainer">
                  <div class="loading-table-result-bg"></div>
                 
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-footer -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@section('js')
    <script>
   
    $(function () {
        function carregarPagonaraGeralInfo(json){
            $('.loadingio-spinner-pulse-holder').hide();
            $('#percentual_concluida').html(json.percentual_estacao.concluida);
            $('#percentual_andamento').html(json.percentual_estacao.andamento);
            $('#percentual_nao_iniciado').html(json.percentual_estacao.nao_iniciado);
            $('#percentual_pendente').html(json.percentual_estacao.pendente);

             
        } 
         
    });

  
     
    </script>
    <style>
  
    </style>
@stop

@include('layouts.footer')
