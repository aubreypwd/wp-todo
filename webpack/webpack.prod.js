const webpack = require( 'webpack' );
const ExtractTextPlugin = require( 'extract-text-webpack-plugin' );
const autoprefixer = require( 'autoprefixer' );

const config = {
	mode: 'production',
	// This allows for JS and SCSS source maps.
	devtool: 'cheap-source-map',
	plugins: [
		// Extract the CSS file.
		new ExtractTextPlugin( '../css/main.css' ),

		// Configure autoprefixer.
		new webpack.LoaderOptionsPlugin({
			options: {
				postcss: [
					autoprefixer()
				]
			}
		})
	]
};

module.exports = config;
