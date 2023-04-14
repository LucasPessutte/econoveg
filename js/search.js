$(".search-overlay-menu-btn").on("click", function(a) {
        $(".search-overlay-menu").addClass("open"),
            $('.search-overlay-menu > form > input[type="search"]').focus()
    }),
    $(".search-overlay-close").on("click", function(a) {
        $(".search-overlay-menu").removeClass("open")
    }),
    $(".search-overlay-menu, .search-overlay-menu .search-overlay-close").on("click keyup", function(a) {
        (a.target == this || "search-overlay-close" == a.target.className || 27 == a.keyCode) && $(this).removeClass("open")
    });