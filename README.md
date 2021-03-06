![Art Institute of Chicago](https://raw.githubusercontent.com/Art-Institute-of-Chicago/template/master/aic-logo.gif)


# Gauguin Microsite
> A microsite for our 2017 Gauguin exhibition

This is a promotional website for the Art Institue of Chicago's [*Gauguin: Artist as Alchemist*](http://www.artic.edu/exhibition/gauguin-artist-alchemist) exhibition (June 25th – Sept. 10, 2017). It uses [Jigsaw](http://jigsaw.tighten.co/), a static site generator made with [Laravel](https://laravel.com/) components.


## Requirements

* PHP >= 5.6.4
* [Composer](https://getcomposer.org/)
* [npm](https://www.npmjs.com/) >= 2.11.3 (node.js v0.12 LTS)
* [Gulp](http://gulpjs.com/), specifically [gulp-cli](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)

Note that we included Jigsaw in `composer.json`, but for convenience, you may want to [install it globally](http://jigsaw.tighten.co/docs/installation/). [Laravel Elixir](https://laravel.com/docs/5.3/elixir) is an API for defining [Gulp](http://gulpjs.com/) tasks, which Jigsaw uses for compiling assets (e.g. SCSS into CSS).


## Installation

To get started with this project, use the following commands:

```shell
# Clone the repo to your computer
git clone https://github.com/art-institute-of-chicago/gauguin-microsite.git

# Enter the folder that was created by the clone
cd gauguin-microsite

# Install PHP dependencies (notably Jigsaw)
composer install

# Install Node.js packages
npm install

# Build the local version of the site
./vendor/bin/jigsaw build

# Run the development server
./vendor/bin/jigsaw serve
```

You can now view your site at http://localhost:8000 in your browser.

Please note that these instructions assume that Jigsaw is installed locally, via `composer.json`. If you installed Jigsaw globally, you can substitute calls to `./vendor/bin/jigsaw` with just `jigsaw`. See its [installation guide](http://jigsaw.tighten.co/docs/installation/) for more details.

You can alternatively use `gulp watch` to run a development server and access your site at http://localhost:3000. This will compile all the CSS, and the browser will automatically update when you make changes.


## Features

To start the slideshow on a given slide, use the `q` parameter value:

```
http://localhost:3000/?q=2
```

This will start the slideshow on the second slide.
