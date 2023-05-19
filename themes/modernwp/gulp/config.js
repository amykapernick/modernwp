const browserSync = require('browser-sync')

module.exports = {
	themeFolders: [
		'functions',
		'src',
		'blocks',
		'layouts',
		'partials',
		'acf',
		'parts',
		'src',
		'data',
		'dist',
	],
	themeFiles: [
		'./*.php',
		'./*.css',
		'./screenshot.png',
		'./screenshot.jpg',
	],
	phpFiles: [
		'./*.php',
		'./**/*.php',
	],
	sourceMaps: '/src/maps',
	cssFiles: '.',
	compileFiles: [
		'src/scss/style.scss',
		'src/scss/editor.scss',
		'partials/**/*.module.scss',
		'layouts/**/*.module.scss',
		'blocks/**/*.module.scss',
		'parts/**/*.module.scss',
		'**/*.module.scss',
	],
	sassPartials: [
		'src/scss/**/*.scss',
		'partials/**/*.scss',
		'layouts/**/*.scss',
		'blocks/**/*.scss',
		'parts/**/*.scss',
	],
	reactBlocks: [
		'blocks/react/**/*.js',
	],
	reactBlocksFile: 'reactBlocks.js',
	browserSync: browserSync.create(),
}