var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less', function() {
    return gulp.src('public/css/*.less')
        .pipe(less())
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', ['less'], function() {
    gulp.watch('public/css/*.less', ['less']);
});

gulp.task('default', ['less', 'watch']);