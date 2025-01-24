<h3>Posts</h3>
<p>
	<?php echo anchor('blog/posts/create', 'Create Post', 'class="btn btn-outline-success"') ?>
</p>
<table class="table table-hover">
	<tr>
		<th>Title</t>
		<th>Content</t>
		<th></th>
	</tr>
	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post->title ?></td>
			<td><?php echo $post->content ?></td>
			<td>
				<?php echo anchor('blog/posts/edit/' . $post->id, 'Edit'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>