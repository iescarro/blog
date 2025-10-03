<h3>Post_views</h3>
<p>
	<?php echo anchor('post_views/create', 'Create Post_view', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Post_id</th>
		<th>Ip_address</th>
		<th>Created_at</th>

		<th></th>
	</tr>
	<?php foreach ($post_views as $post_view): ?>
		<tr>
			<td><?php echo $post_view->post_id ?></td>
			<td><?php echo $post_view->ip_address ?></td>
			<td><?php echo $post_view->created_at ?></td>

			<td>
				<?php echo anchor('post_views/edit/' . $post_view->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>