<h3>Create post_view</h3>
<?php echo form_open('post_views/create'); ?>
	<p>
		Post_id<br>
		<?php echo form_input('post_id', $this->input->post('post_id'), 'class="form-control"'); ?>
	</p>
	<p>
		Ip_address<br>
		<?php echo form_input('ip_address', $this->input->post('ip_address'), 'class="form-control"'); ?>
	</p>
	<p>
		Created_at<br>
		<?php echo form_input('created_at', $this->input->post('created_at'), 'class="form-control"'); ?>
	</p>

	<p>
		<?php echo form_submit('submit', 'Save post_view', 'class="btn btn-outline-success"'); ?>
		or <?php echo anchor('post_views', 'cancel'); ?>
	</p>
<?php echo form_close(); ?>