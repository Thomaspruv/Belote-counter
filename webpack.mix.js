const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

mix.webpackConfig({
    'resolve': {
        'fallback' : {
            'crypto': require.resolve('crypto-browserify'),
            'stream': require.resolve('stream-browserify'),
            'assert': require.resolve('assert'),
            'http': require.resolve('stream-http'),
            'https': require.resolve('https-browserify'),
            'os': require.resolve('os-browserify')
        }
    }
});

mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/custom.scss', 'public/css/custom.css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .sourceMaps();

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css/app.css')
//     .sass('resources/sass/custom.scss', 'public/css/custom.css')
//     .postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss')('./tailwind.config.js'),
//     require('autoprefixer'),
// ]);
