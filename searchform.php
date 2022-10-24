<form role="search" method="get" class="search-form flex flex-col gap-6" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field rounded-md w-3/4 px-4 py-1 border border-current focus-visible:outline-none focus-visible:ring-green-400 focus-visible:ring-4" placeholder="Search …" value="<?php echo get_search_query() ?>" name="s">
	</label>
	<input type="submit" class="search-submit w-fit py-1 px-4 rounded-md border border-current inline-flex hover:bg-neutral-dark-500 transition-colors duration-200 text-primary-default bg-secondary cursor-pointer font-bold" value="Search">
</form>