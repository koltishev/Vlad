const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const path = require('path');

const themePath = path.join(__dirname, '/');
const sassSrc = path.join(themePath, 'assets/sass/**/*.scss');
const cssDest = path.join(themePath, 'assets/css');

gulp.task('sass', function() {
    return gulp.src(sassSrc)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch', function() {
    gulp.watch(sassSrc, gulp.series('sass'));
});

gulp.task('default', gulp.series('sass', 'watch'));
