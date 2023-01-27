module.exports = {
    //...
    externals: {
        jquery: 'jQuery',
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ],
    loaders: [
            { test: /[\\\/]modernizr dependecie path[\\\/]modernizr\.js$/,
                loader: "imports?this=>window!exports?window.Modernizr" }
    ]
};
