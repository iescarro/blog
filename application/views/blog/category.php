<p>
    📢 <?php echo anchor('.', config_item('app_name')); ?>
    | <?php echo anchor('blog/category/' . $post->category_id, $post->category_name); ?>
</p>
<h3><?php echo $post->title; ?></h3>
<?php if ($this->session->userdata('user_id')): ?>
    <p>
        <?php echo anchor('blog/posts/edit/' . $post->id, 'Edit'); ?>
    </p>
<?php endif; ?>

<p>
    <small>
        <?php echo date('M d, Y', strtotime($post->created_at)); ?>
    </small>
</p>

<?php echo nl2br($post->content); ?>