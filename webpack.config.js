const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
	mode: 'production',
	entry: './assets/scss/style.scss',
	output: {
		path: __dirname
	},
	watchOptions: {
		ignored: /node_modules/,
	},
	module: {
		rules: [
			{
				test: /\.s[ac]ss$/i,
				use: [
					MiniCssExtractPlugin.loader,
					"css-loader",
					"sass-loader"
				],
			}
		]
	},
	plugins: [
		// Extracts css into its own file
		new MiniCssExtractPlugin({
			filename: './assets/css/style.css'
		})
	]
};