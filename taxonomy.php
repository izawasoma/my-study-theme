<?php 
$menu_slug = get_query_var("menu");
$menu = get_term_by("slug",$menu_slug,"menu");
?>
<?php get_header(); ?>
  <main>
    <section class="section section-foodList">
      <div class="section_inner">
        <div class="section_header">
          <h2 class="heading heading-primary"><span>フード紹介</span>FOOD</h2>
        </div>

        <section class="section_body">
          <h3 class="heading heading-secondary"><?php single_term_title(""); ?><span><?php echo strtoupper($menu->slug); ?></span></h3>
          <ul class="foodList">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <?php get_template_part("template-parts/loop","food"); ?>
                <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </section>
      </div>
    </section>
  </main>
<?php get_footer(); ?>