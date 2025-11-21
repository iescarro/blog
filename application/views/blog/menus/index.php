<h3>Menus</h3>
<p>
	<?php echo anchor('menus/create', 'Create Menu', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Url</th>
		<th>Sort_order</th>

		<th></th>
	</tr>
	<?php foreach ($menus as $menu): ?>
		<tr>
			<td><?php echo $menu->name ?></td>
			<td><?php echo $menu->url ?></td>
			<td><?php echo $menu->sort_order ?></td>

			<td>
				<?php echo anchor('menus/edit/' . $menu->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>