<?php 
/**
*Template Name: Placeholder
*/
get_header(); ?>
<div class="container-fluid section_height place_background-holder">
    <div class="pl_cap_left_block"></div>
    <div class="pl_leavs_right_block"></div>
    <div class="row text-layer">
        <div class="col-12">
            <div class="opener_header_wrapper">
                <div class="header_block">
                    <h1 class="header_up">Chefs Team </h1>
                    <h2 class="header_low"> Fest</h2>
                </div>
                <div class="message_wrapper">
                <p>Билеты скоро в продаже!</p>
                </div>
            </div>
        </div>

        <div class="date_wrapper">
            <h2>28-31 июля 2021</h2>
        </div>
    </div>
</div>
<div class="container-fluid contact_holder">
    <div class="row contact_form_wrapper">
    <div class="placeholder_form_background"></div>
    <h2>Оставь свои контакты, чтобы первым узнать о старте продаж.</h2>
       
        <!-- <div class="side_pic pic_left_1"></div>
        <div class="side_pic pic_right_1"></div>
        <div class="side_pic pic_left_2"></div>
        <div class="side_pic pic_right_2"></div> -->
        <!-- <div class="side_pic pic_center"></div> -->
        <div class="col-12 contact_column">
            <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>       
        </div>
    </div>

</div>
<?php get_footer(); ?>