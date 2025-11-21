<h3>Pages</h3>
<p>
	<?php echo anchor('pages/create', 'Create Page', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Title</th>
		<th>Content</th>
		<th>Created_at</th>

		<th></th>
	</tr>
	<?php foreach ($pages as $page): ?>
		<tr>
			<td><?php echo $page->title ?></td>
			<td><?php echo $page->content ?></td>
			<td><?php echo $page->created_at ?></td>

			<td>
				<?php echo anchor('pages/edit/' . $page->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>