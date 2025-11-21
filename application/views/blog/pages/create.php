<h3>Create page</h3>
<?php echo form_open('pages/create'); ?>
	<p>
		Title<br>
		<?php echo form_input('title', $this->input->post('title'), 'class="form-control"'); ?>
	</p>
	<p>
		Content<br>
		<?php echo form_input('content', $this->input->post('content'), 'class="form-control"'); ?>
	</p>
	<p>
		Created_at<br>
		<?php echo form_input('created_at', $this->input->post('created_at'), 'class="form-control"'); ?>
	</p>

	<p>
		<?php echo form_submit('submit', 'Save page', 'class="btn btn-outline-success"'); ?>
		or <?php echo anchor('pages', 'cancel'); ?>
	</p>
<?php echo form_close(); ?>