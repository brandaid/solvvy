var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function(){
    return gulp.src('scss/**/*.scss')
               .pipe(sass().on('error', sass.logError))
               .pipe(sass())
               .pipe(autoprefixer({
                    browsers: ['last 10 versions'],
                    cascade: false
               }))
               .pipe(gulp.dest('../wp-content/themes/solvvy/'));
});