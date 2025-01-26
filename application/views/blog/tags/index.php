<h3>Tags</h3>
<p>
	<?= anchor('tags/create', 'Create Tag', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Name</t>
		<th>Slug</t>
		<th>Created_at</t>

		<th></th>
	</tr>
	<?php foreach ($tags as $tag): ?>
		<tr>
			<td><?= $tag->name ?></td>
			<td><?= $tag->slug ?></td>
			<td><?= $tag->created_at ?></td>

			<td>
				<?= anchor('tags/edit/' . $tag->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>