const path = require("path");
const { VueLoaderPlugin } = require("vue-loader");


module.exports = {
    mode: "development",
    entry: {
        index: "./src/index.js",
    },
    output: {
        filename: "[name].js",
        chunkFilename: "[name].js",
        path: path.resolve(__dirname, "./assets/js"),
        publicPath: "/assets/js",
    }, module: {
        rules: [
            // ... other rules
            {
                test: /\.vue$/,
                loader: "vue-loader",
            },
            {
                test: /\.js$/,
                loader: "babel-loader",
            },
            {
                test: /\.svg$/,
                use: ["vue-loader", "vue-svg-loader"],
            },
        ],
    },
    plugins: [
        // make sure to include the plugin!
        new VueLoaderPlugin(),
    ],
};
