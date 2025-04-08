<h3>Posts</h3>
<p>
	<?php echo anchor('blog/posts/create', 'Create post', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Title</t>
		<th></th>
		<th>Date</t>
		<th></th>
	</tr>
	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post->title ?></td>
			<td><?php echo anchor('blog/home/post/' . $post->id, '👁️'); ?></td>
			<td><?php echo $post->created_at ?></td>
			<td>
				<?php echo anchor('blog/posts/edit/' . $post->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>