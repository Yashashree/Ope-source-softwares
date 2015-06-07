function settings_isolated_sections(action, pageload, change_bg_img_setting)
{
    if (action == "enabled")
    {
        $("body").addClass("isolated-sections");
        $(document).ready(function() {
            set_equal_heights_to_section_columns();
        });
        if (pageload == true || change_bg_img_setting == true) {
            $("#theme_settings_container #settings_isolated_sections").attr("checked", "checked");
        }
        if (pageload != true || change_bg_img_setting == true) {
            reinitialise_main_carousel();
            $.cookie('twlsky_isolated_sections', 'enabled');
        }
    }
    else
    {
        $("body").removeClass("isolated-sections");
        $(document).ready(function() {
            set_equal_heights_to_section_columns();
        });
        if (pageload == true || change_bg_img_setting == true) {
            $("#theme_settings_container #settings_isolated_sections").removeAttr("checked");
        }
        if (pageload != true || change_bg_img_setting == true) {
            reinitialise_main_carousel();
            $.cookie('twlsky_isolated_sections', 'disabled');
        }
    }
}

function settings_bg_theme(action, pageload)
{
    var current_active_class = $("#theme_settings_container #settings_bg_theme .active").attr("data-class");
    $("body").removeClass("background-"+current_active_class).addClass("background-"+action);
    $("#theme_settings_container #settings_bg_theme .active").removeClass("active");
    $("#theme_settings_container #settings_bg_theme ."+action).addClass("active");
    if (pageload != true) $.cookie('twlsky_bg_theme', action);
}

function settings_bg_img(action, pageload)
{
    if (action == "enabled")
    {
        var new_image_object = new Image();
        new_image_object.src = "images/temp/bg1.jpg";

        // set background to body
        $("body").css({
            "background-image":"url('images/temp/bg1.jpg')",
        });
        $("body").addClass("w_bg_image");

        if (pageload == true) {
            $("#theme_settings_container #settings_bg_img").attr("checked", "checked");
        }
        else {
            $.cookie('twlsky_bg_img', 'enabled');
        }

        if (pageload != true) { 
            settings_isolated_sections("disabled", false, true); 
        }
    }
    else
    {
        $("body").removeClass("w_bg_image");
        $("body").attr("style", "");
        if (pageload == true) {
            $("#theme_settings_container #settings_bg_img").removeAttr("checked");
        }
        else {
            $.cookie('twlsky_bg_img', 'disabled');
        }
    }
}

function settings_page_active_colour(action, pageload)
{
    var current_active_class = $("#theme_settings_container #settings_page_active_colour .active").attr("data-class");
    $("body").removeClass("twlsky-"+current_active_class).addClass("twlsky-"+action);
    $("#theme_settings_container #settings_page_active_colour .active").removeClass("active");
    $("#theme_settings_container #settings_page_active_colour ."+action).addClass("active");
    // if (pageload != true) $.cookie('twlsky_page_active_colour', action);
}

function settings_multicolour_menu(action, pageload)
{
    if (action == "enabled")
    {
        $("body").addClass("twlsky-mixedcolours");
        if (pageload == true) {
            $("#theme_settings_container #settings_multicolour_menu").attr("checked", "checked");
        }
        else {
            $.cookie('twlsky_multicolour_menu', 'enabled');
        }
    }
    else
    {
        $("body").removeClass("twlsky-mixedcolours");
        if (pageload == true) {
            $("#theme_settings_container #settings_multicolour_menu").removeAttr("checked");
        }
        else {
            $.cookie('twlsky_multicolour_menu', 'disabled');
        }
    }
}

function settings_fixed_header(action, pageload)
{
    if (action == "enabled")
    {
        $("header").attr("data-menu-fixed-at-top-on-scroll", "true");
        $(document).ready(function() {
            main_menu_fixed_at_top_on_scroll(true);
        });
        if (pageload == true) {
            $("#theme_settings_container #settings_fixed_header").attr("checked", "checked");
        }
        else {
            $.cookie('twlsky_fixed_header', 'enabled');
        }
    }
    else
    {
        $("header").attr("data-menu-fixed-at-top-on-scroll", "false");
        $(document).ready(function() {
            main_menu_fixed_at_top_on_scroll(true);
        });
        if (pageload == true) {
            $("#theme_settings_container #settings_fixed_header").removeAttr("checked");
        }
        else {
            $.cookie('twlsky_fixed_header', 'disabled');
        }
    }
}

function settings_loader(action, pageload)
{
    if (action == "enabled")
    {
        $("body").addClass("loader-bar");
        if (pageload == true) {
            $("#theme_settings_container #settings_loader").attr("checked", "checked");
        }
        else {
            $.cookie('twlsky_loader', 'enabled');
        }
    }
    else
    {
        $("body").removeClass("loader-bar");
        if (pageload == true) {
            $("#theme_settings_container #settings_loader").removeAttr("checked");
        }
        else {
            $.cookie('twlsky_loader', 'disabled');
        }
    }
}


function initialise_settings_click_functions()
{
    var theme_settings = $("#theme_settings_container");

    // OPENING SETTINGS ICON
    theme_settings.find("#open_settings_icon").click(function()
    {
        theme_settings.find("#settings_content").show().animate({
            left:0,
            opacity:1,
        }, "slow");
    });

    // CLOSING SETTINGS ICON
    theme_settings.find("#close_settings_icon").click(function()
    {
        theme_settings.find("#settings_content").animate({
            left:"-20px",
            opacity:0
        }, "fast", function(){ theme_settings.find("#settings_content").hide(); });
    });

    // ISOLATED SECTIONS CHECKBOX
    theme_settings.find("#settings_isolated_sections").change(function()
    {
        if (theme_settings.find("#settings_isolated_sections").is(':checked'))
        {
            settings_isolated_sections("enabled");
        }
        else
        {
            settings_isolated_sections("disabled");
        }
    });

    // FULL SCREEN BACKGROUND IMAGE
    theme_settings.find("#settings_bg_img").change(function()
    {
        if (theme_settings.find("#settings_bg_img").is(':checked'))
        {
            settings_bg_img("enabled");
        }
        else
        {
            settings_bg_img("disabled");
        }
    });

    // CHANGING BACKGROUND COLOUR THEME
    theme_settings.find("#settings_bg_theme").find("a").click(function(event)
    {
        event.preventDefault();

        var clicked_item = $(this).parent("li");
        var target_class = clicked_item.attr("data-class");
        settings_bg_theme(target_class);
    });

    // CHANGING PAGE ACTIVE COLOUR
    theme_settings.find("#settings_page_active_colour").find("a").click(function(event)
    {
        event.preventDefault();

        var clicked_item = $(this).parent("li");
        var target_class = clicked_item.attr("data-class");
        settings_page_active_colour(target_class);
    });

    // MULTICOLOUR MENU CHECKBOX
    theme_settings.find("#settings_multicolour_menu").change(function()
    {
        if (theme_settings.find("#settings_multicolour_menu").is(':checked'))
        {
            settings_multicolour_menu("enabled");
        }
        else
        {
            settings_multicolour_menu("disabled");
        }
    });

    // FIXED HEADER CHECKBOX
    theme_settings.find("#settings_fixed_header").change(function()
    {
        if (theme_settings.find("#settings_fixed_header").is(':checked'))
        {
            settings_fixed_header("enabled");
        }
        else
        {
            settings_fixed_header("disabled");
        }
    });

    // PAGE LOADER CHECKBOX
    theme_settings.find("#settings_loader").change(function()
    {
        if (theme_settings.find("#settings_loader").is(':checked'))
        {
            settings_loader("enabled");
        }
        else
        {
            settings_loader("disabled");
        }
    });

} 

function initialise_page_load_settings()
{
    if ($.cookie('twlsky_bg_theme') !== undefined){
        settings_bg_theme($.cookie('twlsky_bg_theme'), true);
    }

    if ($.cookie('twlsky_bg_img') !== undefined){
        settings_bg_img($.cookie('twlsky_bg_img'), true);
    }

    if ($.cookie('twlsky_multicolour_menu') !== undefined){
        settings_multicolour_menu($.cookie('twlsky_multicolour_menu'), true);
    }

    if ($.cookie('twlsky_fixed_header') !== undefined){
        settings_fixed_header($.cookie('twlsky_fixed_header'), true);
    }

    if ($.cookie('twlsky_loader') !== undefined){
        settings_loader($.cookie('twlsky_loader'), true);
    }

    if ($.cookie('twlsky_isolated_sections') !== undefined){
        settings_isolated_sections($.cookie('twlsky_isolated_sections'), true);
    }

}

function reinitialise_main_carousel()
{
    // Initialise Top Banner Carousel (Owl Carousel)
    var top_banner_carousel = $("#top-banner-carousel");
    if (top_banner_carousel.length > 0)
    {
        var top_banner_carousel = top_banner_carousel.data('owlCarousel');
        top_banner_carousel.reinit({
            singleItem: true,
            slideSpeed: 300,
            paginationSpeed: 700,
            autoPlay: 7000,
            lazyLoad: true,
            stopOnHover: true,
            pagination: false,
            navigation: false,
            autoHeight : true,
            transitionStyle: "fade"
        }); 

        // left nav
        if (top_banner_carousel.parent().find(".slider-nav-left").length == 1)
        {
            top_banner_carousel.parent().find(".slider-nav-left").off();
            top_banner_carousel.parent().find(".slider-nav-left").click(function(){
                top_banner_carousel.trigger('owl.prev');
            });  
        }

        // right nav
        if (top_banner_carousel.parent().find(".slider-nav-right").length == 1)
        {
            top_banner_carousel.parent().find(".slider-nav-right").off();
            top_banner_carousel.parent().find(".slider-nav-right").click(function(){
                top_banner_carousel.trigger('owl.next');
            });  
        }   
    }
}

initialise_page_load_settings();
initialise_settings_click_functions();