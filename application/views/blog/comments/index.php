<h3>Comments</h3>
<p>
	<?= anchor('comments/create', 'Create Comment', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Title</t>
		<th>Comment</t>

		<th></th>
	</tr>
	<?php foreach ($comments as $comment): ?>
		<tr>
			<td><?= $comment->title ?></td>
			<td><?= $comment->comment ?></td>

			<td>
				<?= anchor('comments/edit/' . $comment->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>