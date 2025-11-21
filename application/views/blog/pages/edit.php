<h3>Edit page</h3>
<?php echo form_open('pages/edit/' . $page->id) ?>
	<p>
		Title<br>
		<?php echo form_input('title', $page->title, 'class="form-control"'); ?>
	</p>
	<p>
		Content<br>
		<?php echo form_input('content', $page->content, 'class="form-control"'); ?>
	</p>
	<p>
		Created_at<br>
		<?php echo form_input('created_at', $page->created_at, 'class="form-control"'); ?>
	</p>

	<p>
		<?php echo form_submit('submit', 'Update page', 'class="btn btn-outline-success"') ?>
		or <?php echo anchor('pages', 'cancel'); ?>
	</p>
<?php echo form_close() ?>

<?php echo form_open('pages/delete/' . $page->id, array('onsubmit', 'return confirmDelete')) ?>
	<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
	<button type='submit' class="btn btn-outline-danger">Delete</button>
<?php echo form_close() ?>