<h3>Create post</h3>
<?= form_open('blog/posts/create'); ?>
<p>
	Title<br>
	<?= form_input('title', $this->input->post('title'), 'class="form-control"'); ?>
</p>
<p>
	Content<br>
	<?= form_input('content', $this->input->post('content'), 'class="form-control"'); ?>
</p>

<p>
	<?= form_submit('submit', 'Save post', 'class="btn btn-outline-success"'); ?>
	or <?= anchor('posts', 'cancel'); ?>
</p>
<?= form_close(); ?>