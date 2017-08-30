var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer'); 
var browserSync = require('browser-sync').create();


gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "http://localhost:8888/",
        browser: "google chrome"
    });

    gulp.watch("scss/**/*.scss", ['sass']);
    gulp.watch("../wordpress/wp-content/themes/solvvy/**/*.php").on('change', browserSync.reload);
    gulp.watch("../wordpress/wp-content/themes/solvvy/**/*.js").on('change', browserSync.reload);


});

gulp.task('autoprefixer', () =>
    gulp.src('scss/**/*.scss')
        .pipe(gulp.dest('scss/'))
);


gulp.task('sass', function() {
	return gulp.src('scss/**/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(sass())
	.pipe(autoprefixer({
        browsers: ['last 10 versions'],
        cascade: false
    }))
	.pipe(gulp.dest('../wordpress/wp-content/themes/solvvy/'))
	.pipe(browserSync.stream());
});



