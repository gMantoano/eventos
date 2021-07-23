@section('title', 'DE-Average')
@include('header')
@include('sidebar')
@include('navbar')

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
		
		<!--div class="row">
			<div class="col-12">
				<div class="form-group float-right">
					<div class="input-group-prepend float-left">
						<span class="input-group-text" style="padding: 6px !important;background: #ccc;">Filtrar informações: </span>
					</div>
					<div class="select2-purple float-right" style="min-width:130px;">
						<select id="panorama_filtro_lote" class="select2 remove-load-hidden" multiple="multiple" data-placeholder="Selecione uma opção" data-dropdown-css-class="select2-purple" style="width: 100%;">
							<optgroup label="Lotes">
								<option data-grupo="1" selected>1º lote</option>
								<option data-grupo="2">2º lote</option>
								<option data-grupo="3">3º lote</option>
							</optgroup>
							<optgroup label="Grupos">
								<option data-grupo="1">1º grupo</option>
								<option data-grupo="2">2º grupo</option>
								<option data-grupo="3">3º grupo</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
		</div-->
		
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

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-6">
            <div class="card card-border-purple card-outline">
              <div class="card-header">
                <h3 class="card-title">Status Geral</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7">
                    <div class="chart-responsive">
                      <div class="spinner-grow loadingio-spinner-pulse-holder" style="width: 3rem;height: 3rem;position: absolute;margin-left: 50%;margin-top: 60px;" role="status"><span class="sr-only">Carregando...</span></div>
                      <canvas id="pieChartStatusGeral" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-5">
                    <ul class="chart-legend clearfix">
                      @foreach ($status as $key => $value)
                      <li class="{{ (in_array($value->sta_id, [1,2,3,4,7,10,11]))?'':'hidden' }}"><i class="far fa-circle text-{{ $value->sta_cor }}"></i> {{ $value->sta_id == 2 ? 'Pendente Solução' : $value->sta_nome }}</li>
                      @endforeach
                      <br />
                      <br />
                      <br />
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- Left col -->
          <div class="col-md-6">
            <div class="card card-border-purple card-outline">
              <div class="card-header">
                <h3 class="card-title">Dependência Única</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-7">
                    <div class="chart-responsive">
                      <div class="spinner-grow loadingio-spinner-pulse-holder" style="width: 3rem;height: 3rem;position: absolute;margin-left: 50%;margin-top: 60px;" role="status"><span class="sr-only">Carregando...</span></div>
                      <canvas id="pieChartDepUnica" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-5">
                    <ul class="chart-legend clearfix">
                      @foreach ($tipo as $key => $value)
                          @switch($value->esttipo_id)
                                @case(1)
                                    <li><i class="far fa-circle text-success"></i> {{ $value->esttipo_nome }}</li>
                                    @break
                                @case(2)
                                    <li><i class="far fa-circle text-danger"></i> {{ $value->esttipo_nome }}</li>
                                    @break
                                @case(3)
                                    <li><i class="far fa-circle text-primary"></i> {{ $value->esttipo_nome }}</li>
                                    @break
                                @case(4)
                                    <li><i class="far fa-circle text-info"></i> {{ $value->esttipo_nome }}</li>
                                    @break
                                @case(5)
                                    <li><i class="far fa-circle text-warning"></i> {{ $value->esttipo_nome }}</li>
                                    @break
                                @case(6)
                                    <li><i class="far fa-circle text-purple"></i> {{ $value->esttipo_nome }}</li>
                                    @break
                                @default
                                    <li><i class="far fa-circle text-secondary"></i> {{ $value->esttipo_nome }}</li>
                          @endswitch
                      @endforeach
                      <li><i class="far fa-circle text-secondary"></i> N/A</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <div class="card card-border-purple card-outline">
              <div class="card-header">
                <h3 class="card-title">Estações</h3>

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
                  <table class="table m-0 table-bordered table-hover dataTable" id="result_panorama_estacoes">
                    <thead>
                    <tr>
                        <th>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Estação&nbsp;Código&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Estação&nbsp;(UF+LOC+EST)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Semana&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Grupo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>B2B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Varejo/Empresarial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Uso&nbsp;Próprio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>TUP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Escolas&nbsp;e&nbsp;Afins&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Topologia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Dependência&nbsp;única&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Status&nbsp;Geral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
						<tr>
						  <td colspan="14"><center>Carregando...</center></td>
						</tr>
						<tr>
						  <td colspan="14"><center>Carregando...</center></td>
						</tr>
						<tr>
						  <td colspan="14"><center>Carregando...</center></td>
						</tr>
						<tr>
						  <td colspan="14"><center>Carregando...</center></td>
						</tr>
						<tr>
						  <td colspan="14"><center>Carregando...</center></td>
						</tr>
					</tbody>
                  </table>
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
    var tabela_resultado = '#result_panorama_estacoes';
    $(function () {
    	function carregarPagonaraGeralInfo(json){
    		$('.loadingio-spinner-pulse-holder').hide();
    		$('#percentual_concluida').html(json.percentual_estacao.concluida);
    		$('#percentual_andamento').html(json.percentual_estacao.andamento);
    		$('#percentual_nao_iniciado').html(json.percentual_estacao.nao_iniciado);
    		$('#percentual_pendente').html(json.percentual_estacao.pendente);

    		updateBarGraph(pieChartStatusGeral, ['Concluído', 'Pendente Solução', 'Em andamento', 'Pronto para iniciar', 'Despriorizado', 'Pendente Financeiro', 'Desligada'], ['#28a745', '#dc3545', '#ffc107', '#17a2b8', '#007bff', '#6f42c1', '#6c757d'], [
        			json.qtd_estacao.concluida
        			, json.qtd_estacao.pendente
        			, json.qtd_estacao.andamento
        			, json.qtd_estacao.nao_iniciado
        			, json.qtd_estacao.despriorizada
        			, json.qtd_estacao.pendente_fi
        			, json.qtd_estacao.desligada]);
    		updateBarGraph(pieChartDepUnica, ['B2B', ' Varejo/Empresarial', ' Uso Próprio', 'TUP', 'Escolas e Afins', 'Topologia', 'N/A'], ['#28a745', '#dc3545', '#007bff', '#17a2b8', '#ffc107', '#6f42c1', '#6c757d'], [
        			json.dependencia.b2b
        			, json.dependencia.varejo
        			, json.dependencia.uso_proprio
        			, json.dependencia.tup
        			, json.dependencia.escolas
        			, json.dependencia.topologia
        			, json.dependencia.na]);
        }
		$(tabela_resultado+' thead tr').clone(true).appendTo( tabela_resultado+' thead' );
	    $(tabela_resultado+' thead tr:eq(1) th').each( function (i) {
	        var title = $(this).text(), data_name = limpaEspeciais($(this).text()), conteudo = '<input name="'+data_name+'" type="text" class="form-control selectpicker" placeholder="Busca '+title+'" />';

	        if([3].includes(i)){ //dependencia 
    			conteudo = '\
    			<select class="form-control selectpicker" name="'+data_name+'">\
    				<option value="">'+ title +'</option>\
    				@foreach ($semana as $key => $value)\ <option value="{{ $value->est_semana }}">{{ $value->est_semana }}</option>\ @endforeach\
    			</select>';
	        }else if([4].includes(i)){ //dependencia 
				conteudo = '\
    			<select class="form-control selectpicker" name="'+data_name+'">\
    				<option value="">'+ title +'</option>\
    				@foreach ($grupo as $key => $value)\ <option value="{{ $value->est_grupo }}">{{ $value->est_grupo }}</option>\ @endforeach\
    			</select>';
	        }else if([5,6,7,8,9,10].includes(i)){ //dependencia 
				conteudo = '\
    			<select class="form-control selectpicker" name="'+data_name+'">\
    				<option value="">'+ title +'</option>\
    				@foreach ($status as $key => $value)\ <option value="{{ $value->sta_id }}">{{ $value->sta_nome }}</option>\ @endforeach\
    			</select>';
	        }else  if([11].includes(i)){ //status 
    			conteudo = '\
    			<select class="form-control selectpicker" name="'+data_name+'">\
    				<option value="">'+ title +'</option>\
    				@foreach ($tipo as $key => $value)\ <option value="Falta {{ $value->esttipo_nome }}">{{ $value->esttipo_nome }}</option>\ @endforeach\
    				<option value="N/A">N/A</option>\
        		</select>';
	        }else  if([12].includes(i)){ //status 
				conteudo = '\
    			<select class="form-control selectpicker" name="'+data_name+'">\
    				<option value="">'+ title +'</option>\
    				@foreach ($status as $key => $value)\ <option value="{{ $value->sta_nome }}">{{ $value->sta_nome }}</option>\ @endforeach\
    			</select>';
	        }
			
	        $(this).html( conteudo );
	    });
	    
		var table_panorama_estacoes = $(tabela_resultado).DataTable({
			"stateSave": true,
			"orderCellsTop": true,
	    	"lengthMenu": [[25, 50, 100, 200, 500], [25, 50, 100, 200, 500]],
	    	"pageLength": 25,
	    	"headers":{"X-CSRF-TOKEN":"{{ csrf_token() }}"},
	        "ajax": {
	            "url": "{{ config('app.main_url') }}/estacoes/panorama_geral",
	            "data": function ( customData ) {
	            	customData._token = "{{ csrf_token() }}";
	        		$('.loadingio-spinner-pulse-holder').show();
					customData.json = "true"; 
					customData.filtros = {};
					$('.dataTableResultContainer').find('input[name],select[name],textarea[name]').each(function( index ) {
						customData.filtros[$( this ).attr('name')] = $('[name="'+$( this ).attr('name')+'"]').first().val();
					});
					console.log(customData);
				},
				"dataType": "json",
				"cache": false,
				dataSrc: function (json) {
			         carregarPagonaraGeralInfo(json);
			         return json.data;
			    },
        		"type": "post",
    		    "beforeSend": function( xhr ) {
    		    	$(tabela_resultado).closest('.dataTableResultContainer').find('.loading-table-result-bg').show();
			    },
				"error": function (xhr, error, code)
				{
					if('419'==xhr.status){
						alert('Sessão expirada por favor atualize a página.');
						return;
					}else if('abort' != code){ //abortado pelo usuario
						alert('Erro '+code+', por favor tente mais tarde.')
						console.log(code);
						console.log(xhr);
					}
				}
	        },
            "filter": true,
            "language": DataTablePtBr,
	        "processing": true,
	        "serverSide": true,
            "dom": 'Bl<"toolbar-busca">tipr',
            "scrollX": true,
            "fixedHeader": {
				header: true,
				headerOffset: 56,
            },
            "columnDefs": [ //definindo informações das colunas
		        { targets: [5,6,7,8,9,10,11,12], className: 'text-center'}
	        ],
            "initComplete": function(settings, json) { //executado uma vez ao finalizar primeiro carregamento
            	$('div.toolbar-busca').html('\
                <div class="input-group hidden-xs">\
                    <input type="text" name="busca_geral" class="form-control pull-right" id="busca_geral" placeholder="Filtrar em todas as colunas">\
                    <div class="input-group-btn">\
						<button type="button" class="btn btn-default" id="buscaComunicado"><i class="fa fa-search text-purple"></i></button>\
					</div>\
              	</div>');

				$("#buscaComunicado").click(function() {
					table_panorama_estacoes.draw();
                });
				$(".selectpicker").change(function() {
					$('[name="'+$(this).attr('name')+'"]').val($(this).val());
					table_panorama_estacoes.draw();
                });
				$("#busca_geral").on('keypress',function(e) {
            	    if(e.which == 13) {
            	    	table_panorama_estacoes.draw();
            	    }
            	});

	        	$('body').on('bodyClassChange', function() {
                	var updateFixedHeader = setInterval(function(){ 
                    	$('.dataTables_scrollBody').trigger( "scroll" ); 
                	}, 1);
                	setInterval(function(){ clearInterval(updateFixedHeader); updateFixedHeader = null; }, 500);
               	});
                $('.dataTables_scrollBody').on('scroll',function(){
                    var $div = $('table.dataTable.fixedHeader-floating');
                	var baseOffset = $('table.dataTable.fixedHeader-floating').offset();
                	var baseBodyOffset = $('.dataTables_scrollBody').offset();
                	//console.log(baseBodyOffset.left);
                	if(baseOffset){
                    	$div.offset({
                			left: - $(this).scrollLeft() + baseBodyOffset.left,
                			top: baseOffset.top
                		});
                	}
                });
            },
	        buttons : [
	            {
	                extend: 'excelHtml5',
	                text: '<i class="far fa-file-excel text-purple"></i> Exportar',
	                title: '',
	                filename: 'DE-Average - '+ moment().format("DD-MMM-YYYY"),
	                className: 'btn btn-default'
	            },
	        ]
	    }).on( 'xhr', function () { //finalizou carregamento do json
		    $(tabela_resultado).closest('.dataTableResultContainer').find('.loading-table-result-bg').hide();
	    }).on( 'xhr', function () { //finalizou carregamento do json
		    $(tabela_resultado).closest('.dataTableResultContainer').find('.loading-table-result-bg').hide();
	    });
		
		$(tabela_resultado+' tbody').on( 'click', 'tr', function () {
			$(tabela_resultado+' tbody tr').removeClass('selected');
			$(this).toggleClass('selected');
		});
	});

	//graficos
	function updateBarGraph(chart, label, color, data) {
      chart.data.datasets.pop();
      chart.data.datasets.push({
        label: label,
        backgroundColor: color,
        data: data
      });
      chart.update();
    }
	if($('#pieChartStatusGeral').length>0) {
		var pieChartStatusGeralCanvas = $('#pieChartStatusGeral').get(0).getContext('2d')
		var pieData        = {
		  labels: ['Concluído', 'Pendente Solução', 'Em andamento', 'Pronto para iniciar', 'Despriorizada', 'Pendente Financeiro', 'Desligada'],
		  datasets: [
			{
			  data: [0],
			  backgroundColor : ['#00a65a'],
			}
		  ]
		}
		var pieOptions     = {
		  legend: {
			display: false
		  }
		}
		//Create pie or douhnut chart
		// You can switch between pie and douhnut using the method below.
		var pieChartStatusGeral = new Chart(pieChartStatusGeralCanvas, {
		  type: 'doughnut',
		  data: pieData,
		  options: pieOptions      
		})
	}
	if($('#pieChartDepUnica').length>0) {
		var pieChartCanvas2 = $('#pieChartDepUnica').get(0).getContext('2d')
		var pieData2        = {
		  labels: ['B2B', ' Varejo/Empresarial', ' Uso Próprio', 'TUP', 'Escolas e Afins', 'Topologia', 'N/A'],
		  datasets: [
			{
			  data: [0],
			  backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#6c757d'],
			}
		  ]
		}
		var pieOptions2     = {
		  legend: {
			display: false
		  }
		}
		//Create pie or douhnut chart
		// You can switch between pie and douhnut using the method below.
		var pieChartDepUnica = new Chart(pieChartCanvas2, {
		  type: 'pie',
		  data: pieData2,
		  options: pieOptions2     
		})
	}
	</script>
	<style>
        /*table.dataTable.fixedHeader-floating {
             display: none !important;
        }
        .dataTables_scrollHeadInner{
            margin-left: 0px;
            width: 100% !important;
            position: fixed;
            display: block;
            overflow: hidden;
            margin-right: 30px;
            background: white;
            z-index: 1000;
        }
        .dataTables_scrollBody{
            padding-top: 60px;
        }*/
	</style>
@stop

@include('footer')