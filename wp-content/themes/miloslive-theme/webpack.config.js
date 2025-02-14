const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  entry: {
    main: path.resolve(__dirname, 'src/js/theme.js'),
    'hero-banner': path.resolve(__dirname, 'blocks/hero-banner/index.js'),
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'assets/js'),
    library: ['miloslive', '[name]'],
    libraryTarget: 'window',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react'],
          },
        },
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(), // Automatski briše assets/js pre svakog builda
    new MiniCssExtractPlugin({
      filename: '../css/[name].css',
    }),
  ],
  externals: {
    '@wordpress/blocks': 'wp.blocks',
    '@wordpress/block-editor': 'wp.blockEditor',
    '@wordpress/components': 'wp.components',
    '@wordpress/i18n': 'wp.i18n',
  },
  mode: 'development',
  devtool: false, // Ako treba debug, koristi 'source-map'
  watch: true,
  watchOptions: {
    ignored: /node_modules/, // Ignorisanje promena u node_modules
  },
};
