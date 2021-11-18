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

mix.js('src/app.js', 'js').setPublicPath('../');

mix.sass('../css/scss/app.scss', 'css').setPublicPath('../');