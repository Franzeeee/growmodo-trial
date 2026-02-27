<?php
/*
Template Name: Single Properties Page
Template Post Type: page
*/

get_header(); ?>

<style>
.under-dev-wrapper {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 40px 20px;
}

.under-dev-box {
    max-width: 600px;
}

.under-dev-box h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.under-dev-box p {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
}

.under-dev-box a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #703BF7;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
}
</style>

<div class="under-dev-wrapper">
    <div class="under-dev-box">
        <h1>🚧 Page Under Development</h1>
        <p>
            We're currently working on this page to bring you something amazing.
            Please check back soon.
        </p>
        <a href="<?php echo home_url(); ?>">Back to Home</a>
    </div>
</div>

<?php get_template_part('template-parts/component/scroll-top'); ?>
<?php get_footer(); ?>