# Basic Bedrock Theme Package for Concrete CMS v9

- [Basic Bedrock Theme Package for Concrete CMS v9](#basic-bedrock-theme-package-for-concrete-cms-v9)
  - [Concrete CMS Bedrock Documentation](#concrete-cms-bedrock-documentation)
  - [Description](#description)
  - [Installation](#installation)
  - [Personalize for your project](#personalize-for-your-project)
  - [Node / NPM / Laravel Mix Build CSS / JavaScript](#node--npm--laravel-mix-build-css--javascript)
  - [Laravel Mix CLI:](#laravel-mix-cli)
      - [Watch Assets for Changes](#watch-assets-for-changes)
      - [Polling](#polling)
      - [Hot Module Replacement](#hot-module-replacement)
    - [Compiling for Production](#compiling-for-production)
      - [Customize the Mix Configuration Path](#customize-the-mix-configuration-path)
    - [Pass Options to Webpack-CLI](#pass-options-to-webpack-cli)

## [Concrete CMS Bedrock Documentation](https://documentation.concretecms.org/developers/appendix/concrete-cms-bedrock-foundation-concrete-and-concrete-themes)

## Description

Using documentation from link above, I wanted to have a package ready to use for quick theme building for [Concrete CMS](https://www.concretecms.com/). Please feel free to add suggestions or pull requests.  

This package will automatically install the thumbnails for Bootstrap5 so there is no manaul setup of these needed in the Dashboard.

JS and CSS are setup as assets in the package controller and required in the page_theme.php.

---

## Installation

1. git clone https://github.com/davedew/afixia-theme-basic-bedrock.git where ever you want to temporarily download these files
2. Move the **basic_bedrock_build** folder to the root / public folder of your Concrete CMS site.  It should be on the same level as your application, concrete, and packages folder.
3. Move the **theme_basic_bedrock** within the packages folder to your Concrete CMS packages folder.
4. Done, you should be able to install the package / theme and go to your **basic_bedrock_build** folder and run **npm install** then **npx mix**.

---

## Personalize for your project

- Change the icon.png (97px x 97px) in the packages/theme_basic_bedrock directory.
- Change the thumbnail.png (360px x 270px) in the packages/theme_basic_bedrock/themes/basic_bedrock directory.
- To change the name and descriptions, for my example below I want my theme to be named "**Rock Solid**":
  -  **Directory names**
     - packages/theme_rock_solid
     - packages/theme_rock_solid/theme/rock_solid
   - **Namespaces**
     - **File:** packages/theme_rock_solid/controller.php
       - namespace Concrete\Package\ThemeRockSolid;
     - **File:** packages/theme_rock_solid/theme/rock_solid/page_theme.php
       - namespace Concrete\Package\ThemeRockSolid\Theme\RockSolid;
   - **Names and Descriptions**
     - **File:** packages/theme_rock_solid/controller.php
       - protected $pkgHandle = 'theme_rock_solid';
       - protected $themePath = 'themes/rock_solid/';
       - protected $themeName = 'Rock Solid';
       - protected $themeHandle = 'rock_solid';
       - public function getPackageDescription: 
       - public function on_start(): Names of assets
     - **File:** packages/theme_rock_solid/theme/rock_solid/page_theme.php
       - public function getThemeName()
       - public function getThemeDescription()
       - $this->requireAsset('basic-bedrock-app');
     - **File:** packages/theme_rock_solid/theme/rock_solid/description.txt
  
---
## Node / NPM / Laravel Mix Build CSS / JavaScript

Make sure to install your node modules to start in the [basic_bedrock_build](basic_bedrock_build/) directory:

```
npm install
```

If you do not have npm, you'll need to install [Node Js](https://nodejs.org/en/).

In [basic_bedrock_build](basic_bedrock_build/) you will see the Laravel Mix setup.  You should be able to use the following documentation from [laravel-mix/docs/cli.md](https://github.com/laravel-mix/laravel-mix/blob/master/docs/cli.md).

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