
const webpack = require('webpack');
const path = require('path');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const { VueLoaderPlugin } = require('vue-loader');

module.exports = [
    {
        mode: 'development',
        entry: {
            app: './assets/js/bundle.js',
        },
        watch: false,
        devtool: 'inline-source-map',

        optimization: {
            minimizer: [
                new UglifyJsPlugin({
                    cache: true,
                    parallel: true,
                    sourceMap: false,
                    uglifyOptions: {
                        output: {
                            comments: false,
                        }
                    }
                })
            ]
        },
        output: {
            filename: 'bundle.js',
            path: path.resolve(__dirname, './build/js/')
        },

        node: {
            fs: "empty"
        },

        resolve: {
            extensions: [ '.js', '.vue' ],
            alias: {
                'vue$': 'vue/dist/vue.runtime.js',
                '@': path.resolve(__dirname, './build/js/')
            }
        },

        externals: {
            // require("jquery") is external and available
            //  on the global var jQuery
            "jquery": "jQuery"
        },

        plugins: [
            new VueLoaderPlugin()
        ],

        module: {
            rules: [
                {
                    test: /\.vue$/,
                    loader: 'vue-loader',
                    options: {

                    }
                },
                {
                    test: /\.m?js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                }


            ]
        }
    },

];
