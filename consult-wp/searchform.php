
<!--- Blog Search Form --->
<form action="<?php echo esc_url( home_url( '/' ) );?>" method="get" class="blog_search">
    <input type="text" name="s" placeholder="<?php echo esc_html('Search...', 'consult');?>">
    <div class="blog_search_btn"> <input type="submit" value="&#xf002;"></div>
</form>