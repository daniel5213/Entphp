<?php 
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$paises = R::findAll('pais');
?>


<h2>Lista de países</h2>
<table border="1">
<tr>
    <th>
		Nombre    	
    </th>
    <th>
		Personas que nacieron    	
    </th>
    <th>
		Personas que viven    	
    </th>

</tr>

<?php foreach ($paises as $pais): ?>
	<tr>
		<td>
			<?= $pais->nombre ?>
		</td>
					
		<td>
			<?php foreach ($pais->alias('nace')->ownPersonaList as $persona): ?>
				<?= $persona->nombre.' ' ?>			
			<?php endforeach;?>
		</td>
		
		
		<td>
			<?php foreach ($pais->alias('vive')->ownPersonaList as $persona): ?>
				<?= $persona->nombre.' ' ?>			
			<?php endforeach;?>
		</td>
	</tr>
<?php endforeach;?>
</table>

<a href="menu.php">Vovler al menú</a>
