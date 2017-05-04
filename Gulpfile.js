var gulp = require('gulp');
var browserSync = require('browser-sync').create();

// Static Server + watching scss/html files
gulp.task('serve', [], function() {

    browserSync.init({
        proxy: "http://localhost:8888/signatures/",
        injectChanges: true,
        baseDir: "./",
        port: 8080
    });
    gulp.watch("./**/*.*").on('change', browserSync.reload);
});


gulp.task('default', ['serve']);
