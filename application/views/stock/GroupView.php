<div id="" class="container">
	<table class="striped">
		<legend><h4>Categorias</h4></legend>
		<thead>
			<td>Nome</td>
			<td>Ações</td>
		</thead>
		<tbody>
				<?php
					foreach($groups as $row){ 
						echo "<tr>";
						echo "<td>";
						echo $row['name_group'];
						echo "</td>";
						echo '<td>';
						echo '<a class="" href="#updateGroupModal">Alterar</a>';
						echo '</td>';
						echo '<td>';
						echo '<a class="" href="#deleGroupModal">Apagar</a>';
						echo '</td>';
						echo"</tr>";
					}
				?>
		</tbody>
	</table>	
</div>
