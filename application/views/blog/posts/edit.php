<h3>Edit post</h3>
<?php echo form_open('blog/posts/edit/' . $post->id) ?>
<p>
	Title<br>
	<?php echo form_input('title', $post->title, 'class="form-control"'); ?>
</p>
<p>
	Content<br>
	<?php echo form_textarea('content', $post->content, 'class="form-control"'); ?>
</p>

<p>
	<?php echo form_submit('submit', 'Update post', 'class="btn btn-outline-success"') ?>
	or <?php echo anchor('blog/posts', 'cancel'); ?>
</p>
<?= form_close() ?>

<?php echo form_open('blog/posts/delete/' . $post->id, array('onsubmit', 'return confirmDelete')) ?>
<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
<button type='submit' class="btn btn-outline-danger">Delete</button>
<?php echo form_close() ?>