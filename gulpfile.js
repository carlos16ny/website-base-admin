var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    imagemin = require('gulp-imagemin');


gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
        proxy: '127.0.0.1:8000' 
      });
    });
    gulp.watch('**/*.php').on('change', function () {
      browserSync.reload();
    });
});
 
gulp.task('minify-img', function () {
    return gulp.src('assets/uploads/**/*.{jpg,png}')
        .pipe(imagemin())
        .pipe(gulp.dest(function(file) {
            return file.base;
          }));
});