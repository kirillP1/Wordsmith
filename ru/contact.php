<?
/*
Template name: Contact-ru
*/
get_header("ru");
?>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php the_content(); ?>

<?php endwhile; else: ?>

<p>Не найдено записей по вашему запросу</p>

<?php endif; ?>
    </div>
</div>

<?
get_footer("ru");
