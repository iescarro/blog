<h3>Edit category</h3>
<?php echo form_open('blog/categories/edit/' . $category->id) ?>
<p>
	Name<br>
	<?php echo form_input('name', $category->name, 'class="form-control"'); ?>
</p>
<p>
	Slug<br>
	<?php echo form_input('slug', $category->slug, 'class="form-control"'); ?>
</p>
<p>
	Description<br>
	<?php echo form_textarea('description', $category->description, 'class="form-control"'); ?>
</p>

<p>
	<?php echo form_submit('submit', 'Update category', 'class="btn btn-outline-success"') ?>
	or <?php echo anchor('blog/categories', 'cancel'); ?>
</p>
<?= form_close() ?>

<?php echo form_open('categories/delete/' . $category->id, array('onsubmit', 'return confirmDelete')) ?>
<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
<button type='submit' class="btn btn-outline-danger">Delete</button>
<?php echo form_close() ?>