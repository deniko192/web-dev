<li class="recent-posts__item small-post-preview">
    <a href="#">
        <img class="small-post-preview__image"  src="<?php echo($post['imageUrl']) ?>" alt="post-bg"/>
        <div class="small-post-preview__text-content">
            <h6 class="small-post-preview__title"><?= $post['title'] ?></h6>
            <span class="small-post-preview__description"><?= $post['description'] ?></span>
        </div>
        <div class="small-post-preview__author post-author">
            <div class="post-author__info">
                <img class="post-author__avatar" src="<?php echo($post['author']['avatarUrl']) ?>" alt="avatarUrl"/>
                <span class="post-author__name"><?= $post['author']['name'] ?></span>
            </div>
            <span class="post-author__publish-date"><?= $post['publicationDate']?></span>
        </div>
    </a>
</li>