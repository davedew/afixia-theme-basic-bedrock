# Basic Bedrock Theme Package for Concrete CMS v9

## [Concrete CMS Bedrock Documentation](https://documentation.concretecms.org/developers/appendix/concrete-cms-bedrock-foundation-concrete-and-concrete-themes)

## Description

Using documentation from link above, I wanted to have a package ready to use for quick theme building for [Concrete CMS](https://www.concretecms.com/). Please feel free to add suggestions or pull requests.  

This package will automatically install the thumbnails for Bootstrap5 so there is no manaul setup of these needed in the Dashboard.

JS and CSS are setup as assets in the package controller and required in the page_theme.php.

## Node / NPM / Laravel Mix Build CSS / Javascript

Make sure to install your node modules to start in the [theme_basic_bedrock/themes/basic_bedrock/build](theme_basic_bedrock/themes/basic_bedrock/build/) directory:

```
npm install
```

If you do not have npm, you'll need to install [Node Js](https://nodejs.org/en/).

In [theme_basic_bedrock/themes/basic_bedrock/build](theme_basic_bedrock/themes/basic_bedrock/build/) you will see the Laravel Mix setup.  You should be able to use the following documentation from [laravel-mix/docs/cli.md](https://github.com/laravel-mix/laravel-mix/blob/master/docs/cli.md).

---

## Laravel Mix CLI:

To build assets for development, reach for the `npx mix` command. Mix will then read your `webpack.mix.js` configuration file, and compile your assets.

```
npx mix
```

#### Watch Assets for Changes

Particularly for larger projects, compilation can take a bit of time. For this reason, it's highly recommended that you instead leverage webpack's ability to watch your filesystem for changes. The `npx mix watch` command will handle this for you. Now, each time you update a file, Mix will automatically recompile the file and rebuild your bundle. 

```
npx mix watch
```

#### Polling

In certain situations, webpack may not automatically detect changes. An example of this is when you're on an NFS volume inside virtualbox. If this is a problem, pass the `--watch-options-poll` option directly to webpack-cli to turn on manual polling. 
 
 ```
 npx mix watch -- --watch-options-poll=1000
```

Of course, you can add this to a build script within your `package.json` file.

#### Hot Module Replacement

Hot module replacement is a webpack featured that gives supporting modules the ability to "live update" in certain situations. A live-update is when your application refreshes without requiring a page reload. In fact, this is what powers Vue's live updates when developing. To turn this feature on, include the `--hot` flag. 

```
npx mix watch --hot
```

### Compiling for Production

When it comes time to build your assets for a production environment, Mix will set the appropriate webpack options, minify your source code, and optionally version your assets based on your Mix configuration file (`webpack.mix.js`). To build assets for production, include the `--production` flag - or the alias `-p` - to the Mix CLI. Mix will take care of the rest!

```
npx mix --production
```

#### Customize the Mix Configuration Path

You may customise the location of your `webpack.mix.js` file by using the `--mix-config` option. For example, if you wish to load your `webpack.mix.js` file from a nested `build` directory, here's how:
 
 ```
 npx mix --mix-config=build/webpack.mix.js --production
```

### Pass Options to Webpack-CLI

If you end any `mix` call with two dashes (`--`), anything after it will be passed through to webpack-cli. For example, you can pass environment variables using webpack-cli's `--env` option: 

```
npx mix -- --env foo=bar
```