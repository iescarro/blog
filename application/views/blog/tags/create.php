<h3>Create tag</h3>
<?= form_open('tags/create'); ?>
	<p>
		Name<br>
		<?= form_input('name', $this->input->post('name'), 'class="form-control"'); ?>
	</p>
	<p>
		Slug<br>
		<?= form_input('slug', $this->input->post('slug'), 'class="form-control"'); ?>
	</p>
	<p>
		Created_at<br>
		<?= form_input('created_at', $this->input->post('created_at'), 'class="form-control"'); ?>
	</p>

	<p>
		<?= form_submit('submit', 'Save tag', 'class="btn btn-outline-success"'); ?>
		or <?= anchor('tags', 'cancel'); ?>
	</p>
<?= form_close(); ?>