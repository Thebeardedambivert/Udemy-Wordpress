<?php

function u_setup_theme()
{
    add_theme_support("editor-styles");

    add_editor_style([
        "https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap",
        "assets/theme/bootstrap-icons/bootstrap-icons.css",
        "assets/theme/public/index.css",
        "assets/editor.css",
    ]);
}