process.env.DISABLE_NOTIFIER = true;

var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

require('laravel-elixir-remove');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';
elixir.config.sourcemaps = false;

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    mix.sass('main.scss')
        .sass('reset.scss')
        .scripts(['main.js'], './source/js/main.js')
        .remove('source/**/*~')
        .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])

        // TODO: Run synchronously or put this logic into the upload script.
        // This removes Jigsaws direct-access to blocks as pages.
        // .remove('build_' + env + '/blocks/**')

        .browserSync({
            port: port,
            server: { baseDir: 'build_' + env },
            proxy: null,
            files: [ 'build_' + env + '/index.html' ],

            // https://github.com/BrowserSync/browser-sync/issues/344
            notify: false,
            open: false,

            // https://github.com/tightenco/jigsaw/issues/86
            // reloadDebounce: 500,
            // reloadOnRestart: true,

        });
});

