let mix = require("laravel-mix");

mix.webpackConfig({
  externals: {
    jquery: "jQuery",
    bootstrap: true,
    vue: "Vue",
    moment: "moment",
  },
});
mix.setPublicPath("../packages/theme_basic_bedrock/themes/basic_bedrock/");

mix.sass("src/scss/app.scss", "css").js("src/js/app.js", "js");

// mix.browserSync({
//     proxy: 'c59.test' // You need to change this to your local dev URL for npm run watch or npx mix watch
// });
