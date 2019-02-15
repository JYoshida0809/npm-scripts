const path = require('path');

module.exports = {
  watch: true,
  stats: 'minimal',
  mode: 'development',
  entry: './www/main.js',
  output: {
    path: path.resolve(__dirname, 'www/js/'),
    filename: 'bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {
            loader: "babel-loader",
            options: {
              babelrc: false,
              presets: [["@babel/preset-env", {
                modules: false,
                useBuiltIns: "usage"
              }]]
            }
          }
        ]
      }
    ]
  }
};
