<h3>Edit post</h3>
<?php echo form_open('blog/posts/edit/' . $post->id) ?>
<p>
	Category<br>
	<?php echo form_dropdown('category_id', $categories, $post->category_id, 'class="form-control"'); ?>
</p>
<p>
	Title<br>
	<?php echo form_input('title', $post->title, 'class="form-control"'); ?>
</p>
<p>
	Content<br>
	<?php echo form_textarea('content', $post->content, 'id="content" class="form-control"'); ?>
	<link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
	<script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
	<script>
		const content = new EasyMDE({
			element: document.getElementById('content'),
			// maxHeight: "300px" // Adjust the height as needed
		});
	</script>
</p>

<p>
	<?php echo form_submit('submit', 'Update post', 'class="btn btn-outline-success"') ?>
	or <?php echo anchor('blog/posts', 'cancel'); ?>
</p>
<?= form_close() ?>

<?php echo form_open('blog/posts/delete/' . $post->id, array('onsubmit', 'return confirmDelete')) ?>
<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
<button type='submit' class="btn btn-outline-danger">Delete</button>
<?php echo form_close() ?>