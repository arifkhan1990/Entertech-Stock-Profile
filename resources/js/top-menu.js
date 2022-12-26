(function () {
    "use strict";

    // top Menu
    $(".top-menu").on("click", function () {
        if ($(this).parent().find("ul").length) {
            if ($(this).parent().find("ul").first()[0].offsetParent !== null) {
                $(this)
                    .find(".top-menu__sub-icon")
                    .removeClass("transform rotate-180");
                $(this).removeClass("top-menu--open");
                $(this)
                    .parent()
                    .find("ul")
                    .first()
                    .slideUp(300, function () {
                        $(this).removeClass("top-menu__sub-open");
                    });
            } else {
                $(this)
                    .find(".top-menu__sub-icon")
                    .addClass("transform rotate-180");
                $(this).addClass("top-menu--open");
                $(this)
                    .parent()
                    .find("ul")
                    .first()
                    .slideDown(300, function () {
                        $(this).addClass("top-menu__sub-open");
                    });
            }
        }
    });
})();
