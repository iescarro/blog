<h3>Edit post</h3>
<?= form_open('blog/posts/edit/' . $post->id) ?>
<p>
	Title<br>
	<?= form_input('title', $post->title, 'class="form-control"'); ?>
</p>
<p>
	Content<br>
	<?= form_input('content', $post->content, 'class="form-control"'); ?>
</p>

<p>
	<?= form_submit('submit', 'Update post', 'class="btn btn-outline-success"') ?>
	or <?= anchor('posts', 'cancel'); ?>
</p>
<?= form_close() ?>

<?= form_open('posts/delete/' . $post->id, array('onsubmit', 'return confirmDelete')) ?>
<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
<button type='submit' class="btn btn-outline-success">Delete</button>
<?= form_close() ?>