<h3>Create post</h3>
<?php echo form_open('blog/posts/create'); ?>
<p>
	Title<br>
	<?php echo form_input('title', $this->input->post('title'), 'class="form-control"'); ?>
</p>
<p>
	Content<br>
	<?php echo form_textarea('content', $this->input->post('content'), 'class="form-control"'); ?>
</p>

<p>
	<?php echo form_submit('submit', 'Save post', 'class="btn btn-outline-success"'); ?>
	or <?php echo anchor('blog/posts', 'cancel'); ?>
</p>
<?php echo form_close(); ?>