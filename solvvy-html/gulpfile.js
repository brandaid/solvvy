var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer'); 
var browserSync = require('browser-sync').create();


gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./solvvy",
        port: 9000,
        browser: "google chrome"
    });

    gulp.watch("scss/**/*.scss", ['sass']);
    gulp.watch("./solvvy/*.html").on('change', browserSync.reload);

});

gulp.task('autoprefixer', () =>
    gulp.src('scss/**/*.scss')
        .pipe(gulp.dest('/scss'))
);


gulp.task('sass', function() {
	return gulp.src('scss/**/*.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(sass())
	.pipe(autoprefixer({
        browsers: ['last 10 versions'],
        cascade: false
    }))
	.pipe(gulp.dest('./solvvy'))
	.pipe(browserSync.stream());
});



// gulp.task('watch', function() {
// 	gulp.watch('scss/**/*.scss',['sass']);
// });



