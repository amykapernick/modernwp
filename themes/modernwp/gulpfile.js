require('dotenv').config()

const { watch, series } = require('gulp')

const { build, bundle } = require('./gulp/build')
const { compileSass } = require('./gulp/scss')
const { compileReactBlocks } = require('./gulp/blocks')
const { sassPartials, phpFiles, browserSync, reactBlocks } = require('./gulp/config')

const serve = async () => {
	browserSync.init({
		port: process.env.PORT || 3000,
		proxy: process.env.WP_URL,
		notify: false,
		injectChanges: true,
		open: false,
	})

	watch(sassPartials, series(compileSass))
	// watch(reactBlocks, series(compileReactBlocks))
	watch(phpFiles).on('change', browserSync.reload)
}

exports.build = build
exports.bundle = bundle
exports.default = series(compileSass, serve)
exports.sass = compileSass