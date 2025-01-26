<h3>Create category</h3>
<?php echo form_open('blog/categories/create'); ?>
<p>
	Name<br>
	<?php echo form_input('name', $this->input->post('name'), 'class="form-control"'); ?>
</p>
<p>
	Slug<br>
	<?php echo form_input('slug', $this->input->post('slug'), 'class="form-control"'); ?>
</p>
<p>
	Description<br>
	<?php echo form_textarea('description', $this->input->post('description'), 'class="form-control"'); ?>
</p>

<p>
	<?php echo form_submit('submit', 'Save category', 'class="btn btn-outline-success"'); ?>
	or <?php echo anchor('blog/categories', 'cancel'); ?>
</p>
<?php echo form_close(); ?>