<h3>Edit post_tag</h3>
<?= form_open('post_tags/edit/' . $post_tag->id) ?>
	<p>
		Post_id<br>
		<?= form_input('post_id', $post_tag->post_id, 'class="form-control"'); ?>
	</p>
	<p>
		Tag_id<br>
		<?= form_input('tag_id', $post_tag->tag_id, 'class="form-control"'); ?>
	</p>

	<p>
		<?= form_submit('submit', 'Update post_tag', 'class="btn btn-outline-success"') ?>
		or <?= anchor('post_tags', 'cancel'); ?>
	</p>
<?= form_close() ?>

<?= form_open('post_tags/delete/' . $post_tag->id, array('onsubmit', 'return confirmDelete')) ?>
	<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
	<button type='submit' class="btn btn-outline-success">Delete</button>
<?= form_close() ?>