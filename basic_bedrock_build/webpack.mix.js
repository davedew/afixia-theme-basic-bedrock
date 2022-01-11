let mix = require('laravel-mix');

mix.webpackConfig({
    module: {
        rules: [
            {
                resolve: {
                    alias: {
                        "concretecms-bedrock": "@concretecms/bedrock"
                    }
                }
            }
        ],
    },
})

mix.js('src/js/app.js', 'js').setPublicPath('../packages/theme_basic_bedrock/themes/basic_bedrock/');

mix.sass('src/scss/app.scss', 'css').setPublicPath('../packages/theme_basic_bedrock/themes/basic_bedrock/');

mix.browserSync({
    proxy: 'c591.test' // You need to change this to your local dev URL for npm run watch or npx mix watch
});