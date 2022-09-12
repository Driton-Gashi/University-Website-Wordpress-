<form class="search-form" method="get" action="<?php echo esc_url(site_url('/')) ?>">
    <label class="headline headline--medium" for="s">Perform a New Search:</label>
    <div class="search-form-row">
        <input placeholder="What are you loking for?" class="s" id="s" type="search" name="s" autocomplete="false">
        <input style="cursor:pointer;" class="search-submit" type="submit" value="Search">
    </div>
</form>