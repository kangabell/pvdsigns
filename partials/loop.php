<div class="flex">
<?php
while (have_posts()) : the_post();
	get_template_part('partials/tile');
endwhile;
?>
</div>
<div class="pagination">
	<?php posts_nav_link(' ','&#8592; Newer Posts', 'Older Posts &#8594;'); ?>
</div>