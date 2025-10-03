<h3>Edit post_view</h3>
<?php echo form_open('post_views/edit/' . $post_view->id) ?>
	<p>
		Post_id<br>
		<?php echo form_input('post_id', $post_view->post_id, 'class="form-control"'); ?>
	</p>
	<p>
		Ip_address<br>
		<?php echo form_input('ip_address', $post_view->ip_address, 'class="form-control"'); ?>
	</p>
	<p>
		Created_at<br>
		<?php echo form_input('created_at', $post_view->created_at, 'class="form-control"'); ?>
	</p>

	<p>
		<?php echo form_submit('submit', 'Update post_view', 'class="btn btn-outline-success"') ?>
		or <?php echo anchor('post_views', 'cancel'); ?>
	</p>
<?php echo form_close() ?>

<?php echo form_open('post_views/delete/' . $post_view->id, array('onsubmit', 'return confirmDelete')) ?>
	<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
	<button type='submit' class="btn btn-outline-danger">Delete</button>
<?php echo form_close() ?>