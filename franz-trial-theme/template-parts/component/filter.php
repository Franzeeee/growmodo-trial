<div class="filter-container property-filter-container">
    <div class="search-bar">
        <input type="text" placeholder="Search properties..." name="property-search" id="property-search">
        <button class="search-button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/search.svg" alt="Search Icon">
        </button>
    </div>
    <div class="select-container">
        <div class="select-group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location-grey.svg" alt="Property Type Icon">
            <select name="property-location" id="property-location">
                <option value="">All Locations</option>
                <option value="house">House</option>
                <option value="apartment">Apartment</option>
                <option value="condo">Condo</option>
            </select>
        </div>

        <div class="select-group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/property.svg" alt="Property Type Icon">
            <select name="property-type" id="property-type">
                <option value="">All Types</option>
                <option value="house">House</option>
                <option value="apartment">Apartment</option>
                <option value="condo">Condo</option>
            </select>
        </div>

        <div class="select-group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/money.svg" alt="Pricing Range Icon">
            <select name="property-type" id="pricing-range">
                <option value="">All Types</option>
                <option value="house">House</option>
                <option value="apartment">Apartment</option>
                <option value="condo">Condo</option>
            </select>
        </div>


        <div class="select-group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/box.svg" alt="Property Type Icon">
            <select name="property-size" id="property-size">
                <option value="">All Sizes</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>

        <div class="select-group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar.svg" alt="Build Year Icon">
            <select name="build-year" id="build-year">
                <option value="">All Years</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select>
        </div>
    </div>
</div>