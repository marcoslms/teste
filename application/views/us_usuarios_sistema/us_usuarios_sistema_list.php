<div class="container">
	
	<div class="page-header">
		<h1>Usuarios</h1>
	</div>

	<table id="us_usuarios_sistema" class="display" cellspacing="0" width="100%">
		
		<button  onclick="window.location.href='<?php  echo base_url($this->router->class) . "/cadastrar";  ?>'" class="btn btn-large" style="background-color:darkgray;float:right;margin-bottom:1%;" >
            <b><span style="color:green;">Novo</span> Usuario</b>
        </button>

		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Login</th>
				<th>Data Acesso</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>

		<tbody>
			<?php  foreach ($us_usuarios_sistema as $key => $value) {  ?>
				<tr>
					<td><?php  echo $value['id_us'];  ?></td>
					<td><?php  echo $value['nome_us'];  ?></td>
					<td><?php  echo $value['login_us'];  ?></td>

					<td><?php  echo $value['dt_acesso'] ? formatDate($value['dt_acesso'],'yyyy-mm-dd hh:mm:ss', 'dd/mm/yyyy hh:mm:ss') : "00/00/0000 00:00:00";  ?></td>
                   
					<td>Editar</td>
					<td>Deletar</td> 
				</tr>
			<?php  }  ?>
		</tbody>

	</table>

	

	<script type="text/javascript">

        $(document).ready(function() {

            var table = $('#us_usuarios_sistema').DataTable( {

                "columnDefs": [ 
                    {
                        "targets": -1,
                        "data": null,
                        "defaultContent": '<a href="<?php  echo base_url("ta_tarefas");  ?>/deletar"><span class="glyphicon glyphicon-trash"></span></a>'
                    },
                    {
                        "targets": -2,
                        "data": null,
                        "defaultContent": '<a href="<?php  echo base_url("ta_tarefas");  ?>/editar"><span class="glyphicon glyphicon-edit"></span></a>'
                    } 
                ],

                "language": {
                 
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }

            } );

            $('#us_usuarios_sistema').on( 'click', 'a', function () {

                var data = table.row( $(this).parents('tr') ).data();

                window.location.replace($(this).attr('href') + "/" + data[0]);

                return false;
            } );

        } );



    </script>

</div>