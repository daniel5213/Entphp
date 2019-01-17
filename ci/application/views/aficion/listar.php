<h2>Lista de aficiones</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nombre</th>
		<th>Estatura Media</th>
		<th>Edad Media</th>
		<th>nº personas copartidas</th>
		<th>Acciones</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion): ?>
		<tr>
			<td>
				<?= $aficion->nombre ?>
			</td>
			<td><?php 
			$sql = <<<SQL
    select round(avg(estatura),2) from persona 
        where id 
            in ( select persona_id from practica 
                  where aficion_id=( select id from aficion where id=$aficion->id))

SQL;
			$sql=R::getAssoc($sql);
			foreach ($sql as $resultado){
			    if ($resultado==""){
			        echo "-----";}else{
			            echo $resultado."cm";
			        }
			}
			?> 
			<td>
			<!-- <form action="<?php base_url()?>aficion/listar" method="post">
			<input type="text" name="<?php $aficion->id?>"value="<?php $aficion->id?>" visibility="hidden"></form>	 -->
			<?php 
			$sql = <<<SQL
                select DISTINCT ROUND(avg(TIMESTAMPDIFF(YEAR,fnac,CURDATE())), 1) from persona 
                       where id in ( 
                           select DISTINCT persona_id from practica
                                 where aficion_id=( 
                                       select DISTINCT id from aficion
                                             where id=$aficion->id))
SQL;
			$sql=R::getAssoc($sql);
			foreach ($sql as $resultado){
			    if ($resultado==""){
			        echo "-----";}else{
			            echo $resultado;
			        }
			}
			?>
	</td>
			<td>
			<?= $compartidos[$aficion->id]?>
				</td>
								
			
			<td class="form-inline text-center">
				<form action="<?=base_url()?>aficion/update" method="post">
					<button><img src="<?=base_url()?>assets/img/edit.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$aficion->id ?>"/>
				</form>
				
				<form action="<?=base_url()?>aficion/delete" method="post">
					<button><img src="<?=base_url()?>assets/img/trash.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$aficion->id ?>"/>
				</form>
			</td>
			
		</tr>
	<?php endforeach;?>
</table>