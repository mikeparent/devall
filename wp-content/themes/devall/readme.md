# Devall Wordpress Theme

Custom WordPress theme for Devall & Sons.

### Tech

Devall uses a number of open source projects to function properly:

* [Node.js](https://nodejs.org/)
* [jQuery](https://jquery.com/)
* [SASS](https://sass-lang.com/)
* [Grunt.js](https://gruntjs.com/)
* [WordPress](https://www.wordpress.org)


### Installation

Devall requires [Node.js](https://nodejs.org/) v4+ to run.

Install the dependencies and devDependencies and start the server.

```sh
$ cd devall
$ npm install
```

### Development

The Devall Theme uses Node.js + Grunt + SASS + GIT CI for fast developing.
Make a change in any of the scss files and node will rebuild the css files!

Open your favorite Terminal and run these commands.

```sh
$ npm run watch-css
```
Once any changes are made and you are happy with them please push checkout and merge to the master.

```sh
$ git checkout master
$ git pull
$ git merge [branch name]
```

Doing this may spring some errors and may require you to commit to some of the new changes from the merge, this is completly fine just commit those changes in and let me know.

```sh
$ git add .
$ git commit -m "Additional files from merge"
```
Once this is complete go ahead with the push
```sh
$ git push
```

Once the work has been pushed over to the Master branch it will automatically be deployed on to the staging server in wp-content/themes/devall
