var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass(
        'app.scss')
        .browserify('app.js')
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts')
        .version(['css/app.css', 'js/app.js'])
});