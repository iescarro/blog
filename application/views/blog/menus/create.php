<h3>Create menu</h3>
<?php echo form_open('menus/create'); ?>
	<p>
		Name<br>
		<?php echo form_input('name', $this->input->post('name'), 'class="form-control"'); ?>
	</p>
	<p>
		Url<br>
		<?php echo form_input('url', $this->input->post('url'), 'class="form-control"'); ?>
	</p>
	<p>
		Sort_order<br>
		<?php echo form_input('sort_order', $this->input->post('sort_order'), 'class="form-control"'); ?>
	</p>

	<p>
		<?php echo form_submit('submit', 'Save menu', 'class="btn btn-outline-success"'); ?>
		or <?php echo anchor('menus', 'cancel'); ?>
	</p>
<?php echo form_close(); ?>