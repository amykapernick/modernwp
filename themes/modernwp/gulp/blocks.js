const { src, dest } = require('gulp')
const concat = require('gulp-concat-util')
const babel = require('gulp-babel')

const { reactBlocks, reactBlocksFile } = require('./config')

const globalData = {
	header: `(function (wp) {
		const { registerBlockType } = wp.blocks;
		const { RichText } = wp.blockEditor;
		const { components, editor, blocks, element, i18n } = wp;
	});`,
	footer: `})(window.wp)`,
}

const compileReactBlocks = () => (
	src(reactBlocks)
		.pipe(concat(reactBlocksFile))
		.pipe(concat.header(globalData.header))
		.pipe(concat.footer(globalData.footer))
		.pipe(
			babel({
				presets: ['@babel/preset-react']
			})
		)
		.pipe(dest('dist/js'))
)

module.exports = {
	compileReactBlocks,
}