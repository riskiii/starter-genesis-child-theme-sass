// Require our dependencies
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('styles', function(){
	return gulp.src('sass/style.scss')
	.pipe(sass({
		outputStyle: 'expanded', // Options: nested, expanded, compact, compressed
		indentType: 'tab',
		indentWidth: 1
	})) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('./'))
	.pipe(browserSync.reload({stream: true}));
});

// Gulp watch syntax
gulp.task('serve', function(){

	// Kick off BrowserSync.
	browserSync.init({
		proxy: "www.wpsite.dev"
    });

	gulp.watch('sass/**/*.scss', ['styles']);
	gulp.watch('./**/*.php',browserSync.reload);
});

gulp.task('default',['styles', 'serve']);
