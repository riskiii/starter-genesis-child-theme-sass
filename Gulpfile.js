// Require our dependencies
var browserSync = require('browser-sync').create();
var gulp = require('gulp');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

/**
 * Handle errors and alert the user.
 */
function handleErrors () {
    var args = Array.prototype.slice.call(arguments);

    notify.onError({
        title: 'Task Failed [<%= error.message %>',
        message: 'See console.',
        sound: 'Sosumi' // See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
    }).apply(this, args);

    gutil.beep(); // Beep 'sosumi' again

    // Prevent the 'watch' task from stopping
    this.emit('end');
}

gulp.task('styles', function(){
    return gulp.src('assets/sass/*.scss')

    // Deal with errors.
        .pipe(plumber({ errorHandler: handleErrors }))

        // Wrap tasks in a sourcemap.
        .pipe(sourcemaps.init())

        // Compile Sass using LibSass.
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'expanded', // Options: nested, expanded, compact, compressed
            indentType: 'tab',
            indentWidth: 1
        }))

        // Create sourcemap.
        .pipe(sourcemaps.write())

        // Create style.css.
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

// Gulp watch syntax
gulp.task('serve', function(){

	// Kick off BrowserSync.
	browserSync.init({
		proxy: "www.wpsite.dev"
    });

	gulp.watch('assets/sass/**/*.scss', ['styles']);
	gulp.watch('./**/*.php',browserSync.reload);
});

gulp.task('default',['styles', 'serve']);
