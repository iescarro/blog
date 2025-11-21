<h3>Edit menu</h3>
<?php echo form_open('menus/edit/' . $menu->id) ?>
	<p>
		Name<br>
		<?php echo form_input('name', $menu->name, 'class="form-control"'); ?>
	</p>
	<p>
		Url<br>
		<?php echo form_input('url', $menu->url, 'class="form-control"'); ?>
	</p>
	<p>
		Sort_order<br>
		<?php echo form_input('sort_order', $menu->sort_order, 'class="form-control"'); ?>
	</p>

	<p>
		<?php echo form_submit('submit', 'Update menu', 'class="btn btn-outline-success"') ?>
		or <?php echo anchor('menus', 'cancel'); ?>
	</p>
<?php echo form_close() ?>

<?php echo form_open('menus/delete/' . $menu->id, array('onsubmit', 'return confirmDelete')) ?>
	<?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
	<button type='submit' class="btn btn-outline-danger">Delete</button>
<?php echo form_close() ?>