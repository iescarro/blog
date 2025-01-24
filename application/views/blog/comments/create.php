<h3>Create comment</h3>
<?= form_open('comments/create'); ?>
	<p>
		Title<br>
		<?= form_input('title', $this->input->post('title'), 'class="form-control"'); ?>
	</p>
	<p>
		Comment<br>
		<?= form_input('comment', $this->input->post('comment'), 'class="form-control"'); ?>
	</p>

	<p>
		<?= form_submit('submit', 'Save comment', 'class="btn btn-outline-success"'); ?>
		or <?= anchor('comments', 'cancel'); ?>
	</p>
<?= form_close(); ?>