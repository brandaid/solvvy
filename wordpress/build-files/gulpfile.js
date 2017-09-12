var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer'); 
var reload = browserSync.reload;


gulp.task('sass', function(){
    return gulp.src('scss/**/*.scss')
               .pipe(sass().on('error', sass.logError))
               .pipe(sass())
               .pipe(autoprefixer({
                    browsers: ['last 10 versions'],
                    cascade: false
               }))
               .pipe(gulp.dest('../wp-content/themes/solvvy/'))
               .pipe(reload({stream:true}));
});

gulp.task('browser-sync', function(){
    var files = [
        './*.css',
        '../**/*.js',
        '../**/*.php'
    ];

    browserSync.init(files, {
        proxy: 'localhost:8888',
        browser: 'google chrome',
        notify: true
    });
});


gulp.task('default', ['sass', 'browser-sync'], function(){
    console.log('Run server');
    gulp.watch('scss/**/*.scss', ['sass']);
});
