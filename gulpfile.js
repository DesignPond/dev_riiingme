var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less', function() {
    return gulp.src('public/css/skins/*.less')
        .pipe(less())
        .pipe(gulp.dest('public/css/dist'));
});

gulp.task('watch', ['less'], function() {
    gulp.watch('public/css/skins/*.less', ['less']);
});

gulp.task('default', ['less', 'watch']);