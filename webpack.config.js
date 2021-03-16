
module.exports = function() {
    return {
      entry: "./assets/js/app.js",
       output: {
           path: __dirname + "/dist",
           filename: "bundle.js"
       },
       module: {
            loaders: [
                {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
                {test: /\.css$/, loader: "style-loader!css-loader", exclude: /node_modules/},
                {test: /\.scss$/, loader: "style-loader!css-loader!sass-loader", exclude: /node_modules/},
                {test: /\.(png|jpg|gif|woff|woff2|ttf|eot|svg)$/, loader: 'url-loader', exclude: /node_modules/},
                {
                    test: /\.js$/,
                    loader: 'babel-loader',

                    exclude: /node_modules/
                }
            ]
        }
    }
}
