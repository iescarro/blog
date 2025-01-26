<h3>Create post_tag</h3>
<?= form_open('post_tags/create'); ?>
	<p>
		Post_id<br>
		<?= form_input('post_id', $this->input->post('post_id'), 'class="form-control"'); ?>
	</p>
	<p>
		Tag_id<br>
		<?= form_input('tag_id', $this->input->post('tag_id'), 'class="form-control"'); ?>
	</p>

	<p>
		<?= form_submit('submit', 'Save post_tag', 'class="btn btn-outline-success"'); ?>
		or <?= anchor('post_tags', 'cancel'); ?>
	</p>
<?= form_close(); ?>