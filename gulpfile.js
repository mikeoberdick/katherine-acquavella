
/* file: gulpfile.js */

var gulp = require('gulp'),
autoprefixer = require('gulp-autoprefixer'),
sass = require('gulp-sass'),
browserSync = require('browser-sync').create(),
sourcemaps = require('gulp-sourcemaps');

/* jshint task would be here */

gulp.task('build-css', function() {
  return gulp.src('wp-content/themes/wp-bootstrap/assets/sass/**/*.scss')
  	.pipe(sourcemaps.init())
    	.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
	.pipe(sourcemaps.write())
    .pipe(gulp.dest('wp-content/themes/wp-bootstrap'))
    .pipe(browserSync.stream());
});

gulp.task('css-prod', function() {
  return gulp.src('wp-content/themes/wp-bootstrap/assets/sass/**/*.scss')
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(autoprefixer({
		browsers: ['last 2 versions'],
		cascade: false
	}))
    .pipe(gulp.dest('wp-content/themes/wp-bootstrap'))
});

gulp.task('lint', function() {
	return gulp.src('wp-content/themes/wp-bootstrap/assets/js/**/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
});

gulp.task('watch', function() {
	browserSync.init({
	    proxy: "www.ka.dev"
	});
 	gulp.watch('wp-content/themes/wp-bootstrap/assets/sass/**/*.scss', ['build-css']);
 	gulp.watch("wp-content/themes/wp-boostrap/**/*.php").on('change', browserSync.reload);
});

