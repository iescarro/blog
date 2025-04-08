<h3>Create post</h3>
<?php echo form_open('blog/posts/create'); ?>
<p>
	Category<br>
	<?php echo form_dropdown('category_id', $categories, $this->input->post('category_id'), 'class="form-control"'); ?>
</p>
<p>
	Title<br>
	<?php echo form_input('title', $this->input->post('title'), 'class="form-control"'); ?>
</p>
<p>
	Content<br>
	<?php echo form_textarea('content', $this->input->post('content'), 'id="content" class="form-control"'); ?>
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
	<?php echo form_submit('submit', 'Save post', 'class="btn btn-outline-success"'); ?>
	or <?php echo anchor('blog/posts', 'cancel'); ?>
</p>
<?php echo form_close(); ?>