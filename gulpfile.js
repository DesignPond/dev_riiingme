var combiner = require('stream-combiner2');
var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less', function() {
    var combined = combiner.obj([
        gulp.src('public/css/*.less'),
        less(),
        gulp.dest('public/css')
    ]);

    // any errors in the above streams will get caught
    // by this listener, instead of being thrown:
    combined.on('error', console.error.bind(console));

    return combined;
});

gulp.task('watch', ['less'], function() {
    gulp.watch('public/css/*.less', ['less']);
});

gulp.task('default', ['less', 'watch']);
