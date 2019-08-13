const path = require('path');
const webpack = require('webpack');
const uglifyJsPlugin = require('uglifyjs-webpack-plugin');

module.exports = {
    // Here the application starts executing and webpack starts bundling
    entry: {
        Global: './node/es6/Global.es6',
    },
    // the target directory for all output files
    output: {
        path: path.resolve(__dirname, 'public/assets/js/build')
    },
    // Chosen mode tells webpack to use its built-in optimizations accordingly.
    mode: 'development',
    // configuration regarding modules
    module: {
        // rules for modules (configure loaders, parser options, etc.)
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ['babel-loader']
            }
        ]
    },
    resolve: {
        alias: {
            modules: path.resolve(__dirname + '../node_modules')
        },
        extensions: ['.es6', '.js', '.jsx']
    },
    plugins: [
        new uglifyJsPlugin(),
        new webpack.HotModuleReplacementPlugin()
    ]
};