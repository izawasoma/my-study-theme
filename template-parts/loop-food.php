<li class="foodList_item">
    <div class="foodCard">
        <a href="<?php the_permalink(); ?>">
            <div class="foodCard_pic">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("medium"); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="noimage">
                <?php endif; ?>
                <img src="assets/img/food/drink_img02@2x.png" alt="">
            </div>
            <div class="foodCard_body">
                <h4 class="foodCard_title"><?php the_title(); ?></h4>
                <p class="foodCard_price">¥600</p>
            </div>
        </a>
    </div>
</li>