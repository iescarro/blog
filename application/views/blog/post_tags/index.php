<h3>Post_tags</h3>
<p>
	<?= anchor('post_tags/create', 'Create Post_tag', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Post_id</t>
		<th>Tag_id</t>

		<th></th>
	</tr>
	<?php foreach ($post_tags as $post_tag): ?>
		<tr>
			<td><?= $post_tag->post_id ?></td>
			<td><?= $post_tag->tag_id ?></td>

			<td>
				<?= anchor('post_tags/edit/' . $post_tag->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>