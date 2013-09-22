# Iron Bootstrap BETA v1.1
Welcome to **Iron Bootstrap**, a basic yet comprehensive starting point for developing WordPress themes (with IE7+ compatibility). Iron Bootstrap makes use of a **modified combination** of various software & assets.

## Software included in this package
> Note: All support for Iron Bootstrap is provided in the links to these packages.

- [LT3 Wordpress Theme v2.1](https://github.com/beaucharman/lt3)
- [Grunt Project Kickstarter v2.0](https://github.com/beaucharman/grunt-project-kickstarter)
- [Inuit CSS v5.0](http://inuitcss.com)
- [Unsemantic Grid](http://unsemantic.com)

## Design Package
> Note: Grid does not match Unsemantic grid and is merely a measuring tool.

- [Illustrator Wireframe UI Symbols](http://dribbble.com/shots/760177-Wireframe-Blueprint-Kit)
- [Illustrator 960grid](http://960.gs/)

# Installation
> Note: requires knowledge/installations of CLI such as Terminal, local PHP/Apache, Git and SASS.

1. Git clone this repo to your desired location.
2. Make sure you have followed the installation instructions [here](https://github.com/beaucharman/grunt-project-kickstarter) in regards to setting up Grunt.
3. Go to your project directory and run `sudo npm install`.
4. Download the latest stable [Wordpress](http://wordpress.org).
5. Unzip and place the files into "application/environment".
6. Run the Wordpress standard install from your browser.
7. Run `grunt build` in your project root directory (where your GruntFile is).
8. Open your Wordpress admin and change the theme to yours.
9. And you're ready to start developing!

## Suggested Workflow
1. Make changes to your theme files in the application/development directory & Source files.
2. Run `grunt build` after your changes
3. Refresh your browser.

### Alternatively
You can run `grunt watch` and only `grunt build` when you have made changes to source/SASS. Currently `grunt watch` only copies changes made to your development files.

## Notes
- Please used the latest **stable** version of WordPress when developing.
- IB uses jQuery 1.10.2
