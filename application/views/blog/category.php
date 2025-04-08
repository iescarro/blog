<h3><?php echo $category->name; ?></h3>

<?php foreach ($recent_posts as $post): ?>
    <h4>
        <?php echo anchor('blog/home/post/' . $post->id . '/' . str_slug($post->title), $post->title); ?>
    </h4>
    <p>
        <small>
            Author: <?php echo $post->author; ?> |
            Published: <?php echo date('M d, Y', strtotime($post->created_at)); ?> |
            <?php echo $post->comments_count; ?> comments
        </small>
    </p>
    <p>
        <?php echo post_teaser($post->content,  300); ?>
    </p>
<?php endforeach; ?>