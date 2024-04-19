<li 
    class="post-preview"
    style="background-image: url(<?php echo($post['backgroundImageUrl']); ?>)"
>
    <a href="#">
        <?php if(!empty($post['tag'])): ?>
            <div class="post-preview__tag"><?= $post['tag'] ?></div>
        <?php endif; ?>
        <h2 class="post-preview__title"><?= $post['title'] ?></h2> 
        <span class="post-preview__description"><?= $post['description'] ?></span>
        <div class="post-preview__author post-author">
            <div class="post-author__info">
                <img class="post-author__avatar" src="<?php echo($post['author']['avatarUrl']) ?>" alt="avatar"/>
                <span class="post-author__name"><?= $post['author']['name'] ?></span>
            </div>
            <span class="post-author__publish-date"><?= $post['publicationDate'] ?></span>
        </div>
    </a>
</li>