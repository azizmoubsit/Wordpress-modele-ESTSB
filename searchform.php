<form class="d-flex" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="form-control me-2" name="s" type="search" placeholder="Que recherchez vous?" aria-label="Search" value="<?php get_search_query();?>">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</form>