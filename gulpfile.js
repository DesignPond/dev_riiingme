var combiner = require('stream-combiner2');
var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less', function() {

    var combined = combiner.obj([
        gulp.src('public/stylw.less'),
        less(),
        gulp.dest('public')
    ]);

    // any errors in the above streams will get caught
    // by this listener, instead of being thrown:
    combined.on('error', console.error.bind(console));

    return combined;
});

gulp.task('less2', function() {

    var combined = combiner.obj([
        gulp.src('public/administration/less/app.less'),
        less(),
        gulp.dest('public/administration/css')
    ]);

    // any errors in the above streams will get caught
    // by this listener, instead of being thrown:
    combined.on('error', console.error.bind(console));

    return combined;
});

gulp.task('user', function() {

    var combined = combiner.obj([
        gulp.src('public/administration/less/user.less'),
        less(),
        gulp.dest('public/administration/css')
    ]);

    // any errors in the above streams will get caught
    // by this listener, instead of being thrown:
    combined.on('error', console.error.bind(console));

    return combined;
});

gulp.task('watch', ['less','less2','user'], function() {
    gulp.watch('public/css/*.less', ['less']);
    gulp.watch('public/administration/less/*.less', ['less2']);
    gulp.watch('public/administration/less/user.less', ['user']);
});

gulp.task('default', ['less','less2','user', 'watch']);
