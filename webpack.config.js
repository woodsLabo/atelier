const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");

module.exports = {
  entry: {
    "singleJs": path.resolve(__dirname, "./assets/src/js/Single.js"),
    "index": path.resolve(__dirname, "./assets/src/scss/index.scss"),
    "archive": path.resolve(__dirname, "./assets/src/scss/archive.scss"),
    "single": path.resolve(__dirname, "./assets/src/scss/single.scss"),
  },
  output: {
    path: path.resolve(__dirname, "./assets/dist/"),
    filename: "js/[name].js",
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        loader: "babel-loader",
        exclude: /node_modules/,
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
    ],
  },
  plugins: [
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: "css/[name].css",
    }),
  ],
};
