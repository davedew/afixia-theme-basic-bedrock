let mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        symlinks: false
    },
    externals: {
        jquery: 'jQuery',
        bootstrap: true,
        vue: 'Vue',
        moment: 'moment'
    },
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
mix.options({
    processCssUrls: false
})
    .setPublicPath('../packages/theme_basic_bedrock/themes/basic_bedrock/')
    .sass('src/scss/app.scss', 'css', {
        sassOptions: {
            includePaths: [
                path.resolve(__dirname, './node_modules/')
            ]
        }
    })
    .js('src/js/app.js', 'js')
    .browserSync({
        proxy: 'c59.test' // You need to change this to your local dev URL for npm run watch or npx mix watch
    });