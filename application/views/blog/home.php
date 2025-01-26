<?php foreach ($recent_posts as $post): ?>
    <h4><?php echo $post->title; ?></h4>
    <?php if ($this->session->userdata('user_id')): ?>
        <p><?php echo anchor('blog/posts/edit/' . $post->id, 'Edit'); ?></p>
    <?php endif; ?>
    <p>
        <small>
            Author: <?php echo $post->author; ?> |
            Published: <?php echo date('M d, Y', strtotime($post->created_at)); ?> |
            <?php echo $post->comments_count; ?> comments
        </small>
    </p>
    <p>
        <?php echo post_teaser($post->content,  300); ?>
        <?php echo anchor('blog/home/post/' . $post->id, 'Read more'); ?>
    </p>
<?php endforeach; ?>