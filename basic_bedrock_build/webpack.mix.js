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

mix.js('src/app.js', 'js').setPublicPath('../packages/theme_basic_bedrock/themes/basic_bedrock/');

mix.sass('../packages/theme_basic_bedrock/themes/basic_bedrock/css/scss/app.scss', 'css').setPublicPath('../packages/theme_basic_bedrock/themes/basic_bedrock/');