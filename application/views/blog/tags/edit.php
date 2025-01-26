<h3>Edit tag</h3>
<?= form_open('tags/edit/' . $tag->id) ?>
	<p>
		Name<br>
		<?= form_input('name', $tag->name, 'class="form-control"'); ?>
	</p>
	<p>
		Slug<br>
		<?= form_input('slug', $tag->slug, 'class="form-control"'); ?>
	</p>
	<p>
		Created_at<br>
		<?= form_input('created_at', $tag->created_at, 'class="form-control"'); ?>
	</p>

	<p>
		<?= form_submit('submit', 'Update tag', 'class="btn btn-outline-success"') ?>
		or <?= anchor('tags', 'cancel'); ?>
	</p>
<?= form_close() ?>

<?= form_open('tags/delete/' . $tag->id, array('onsubmit', 'return confirmDelete')) ?>
	<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
	<button type='submit' class="btn btn-outline-success">Delete</button>
<?= form_close() ?>