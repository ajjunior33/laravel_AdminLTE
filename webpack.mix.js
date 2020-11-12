const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(
    "node_modules/@fortawesome/fontawesome-free/css/all.css",
    "public/site/fontawesome.css"
)

    .sass("resources/views/scss/adminlte.scss", "public/site/adminlte.css")
    .sass("resources/views/scss/bootstrap.scss", "public/site/bootstrap.css")
    .scripts(
        "node_modules/admin-lte/dist/js/adminlte.js",
        "public/site/adminlte.js"
    )
    .scripts(
        "node_modules/bootstrap/dist/js/bootstrap.bundle.js",
        "public/site/bootstrap.js"
    )
    .scripts("node_modules/jquery/dist/jquery.js", "public/site/jquery.js")
    .copy("node_modules/admin-lte/dist/img", "public/site/images-lte");
