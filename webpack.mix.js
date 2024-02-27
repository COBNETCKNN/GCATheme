let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
    .js("src/app.js", "js/main.js")
    .babel("src/app.js", "js/main.js")
    .sass('src/app.scss', 'css/main.css');

mix
    .browserSync({
        proxy: "http://gcatheme.local/",
        files: ["./**/*"],
});


mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.config.js')],
    });