<h3>Edit comment</h3>
<?= form_open('comments/edit/' . $comment->id) ?>
	<p>
		Title<br>
		<?= form_input('title', $comment->title, 'class="form-control"'); ?>
	</p>
	<p>
		Comment<br>
		<?= form_input('comment', $comment->comment, 'class="form-control"'); ?>
	</p>

	<p>
		<?= form_submit('submit', 'Update comment', 'class="btn btn-outline-success"') ?>
		or <?= anchor('comments', 'cancel'); ?>
	</p>
<?= form_close() ?>

<?= form_open('comments/delete/' . $comment->id, array('onsubmit', 'return confirmDelete')) ?>
	<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
	<button type='submit' class="btn btn-outline-success">Delete</button>
<?= form_close() ?>