/* File: gulpfile.js */

// grab our gulp packages
var gulp 			= require('gulp');
var	autoprefixer 	= require('gulp-autoprefixer');
var	concat 			= require('gulp-concat');
var jshint 			= require('gulp-jshint');
var cleanCSS 		= require('gulp-clean-css');
var plumber 		= require('gulp-plumber');
var notify 			= require('gulp-notify');
var sass 			= require('gulp-sass');
var uglify 			= require('gulp-uglify');
var rename 			= require('gulp-rename');
var watch 			= require('gulp-watch');
var livereload		= require('gulp-livereload');

// run our default tasks
gulp.task('default', ['sass', 'js', 'watch', 'concat']);

// Compile Sass to CSS
gulp.task('sass', function() {
	gulp.src('./sass/*.scss')
	.pipe(plumber(plumberErrorHandler))
	.pipe(sass())
	.pipe(autoprefixer(
		{
			browsers: [
				'> 1%',
				'last 2 versions',
				'firefox >= 4',
				'safari 7',
				'safari 8',
				'IE 8',
				'IE 9',
				'IE 10',
				'IE 11'
			],
			cascade: false
		}
	))
	.pipe(cleanCSS({debug: true}, function(details) {
	}))
	.pipe(gulp.dest(''))
	.pipe(livereload())
	.pipe(notify({
		message: 'Compiled Sass to CSS'
	}));
});

// Concatenate js files and minify
gulp.task('js', function () {
	gulp.src('js/lib/*.js')
	.pipe(plumber(plumberErrorHandler))
	.pipe(jshint())
	.pipe(jshint.reporter('default'))
	.pipe(concat('global.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('js'))
	.pipe(livereload())
	.pipe(notify({
		message: 'Combined and Minified JavaScript'
	}));
});

gulp.task('concat', function() {
  gulp.src(['./js/modernizr-custom.js', 
  	'./js/modernizr-touch-detect-min.js', 
  	'./js/jquery.min.js', 
  	'./js/owl.carousel.min.js', 
  	// './js/jquery.smooth-scroll.min.js', 
  	'./js/script.js',
  	'./js/jquery.validate.min.js',
  	'./js/formValidation.js', 
  	'./js/aos.js',
  	'./js/masonry.pkgd.min.js',
  	'./js/snap.svg-min.js'
  	])
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/'))
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('**/*.scss', ['sass']);
	gulp.watch('js/lib/*.js', ['js']);

});

var plumberErrorHandler = { errorHandler: notify.onError({
		title: 'Gulp',
		message: 'Error: <%= error.message %>'
	})
};
