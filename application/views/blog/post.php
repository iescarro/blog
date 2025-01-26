<h3><?php echo $post->title; ?></h3>
<?php if ($this->session->userdata('user_id')): ?>
    <p>
        <?php echo anchor('blog/posts/edit/' . $post->id, 'Edit'); ?>
    </p>
<?php endif; ?>

<p>
    <?php echo date('M d, Y', strtotime($post->created_at)); ?>
</p>

<?php echo nl2br($post->content); ?>