<h3>Categories</h3>
<p>
	<?php echo anchor('blog/categories/create', 'Create Category', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Name</t>
		<th>Slug</t>
		<th>Description</t>

		<th></th>
	</tr>
	<?php foreach ($categories as $category): ?>
		<tr>
			<td><?php echo $category->name ?></td>
			<td><?php echo $category->slug ?></td>
			<td><?php echo $category->description ?></td>

			<td>
				<?php echo anchor('blog/categories/edit/' . $category->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>