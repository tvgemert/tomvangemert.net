var gulp = require('gulp');
var less = require('gulp-less');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var path = require('path');

gulp.task('default', function() {
  // place code for your default task here
});
 
gulp.task('css', function () {
  return gulp.src('./source/css/style.less')
  	.pipe(sourcemaps.init())
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(cssnano())
    .pipe(rename('style.min.css'))
    .pipe(sourcemaps.write('../../maps'))    
    .pipe(gulp.dest('./web/css/'));
}); 

gulp.task('js', function() {
  return gulp.src([
    './source/js/jquery-2.2.0.min.js',
    './source/js/bootstrap.min.js',
    './source/js/main.js'    
  ])
    .pipe(sourcemaps.init())
    .pipe(concat('javascript.min.js'))
    .pipe(uglify())    
    .pipe(sourcemaps.write('../../maps'))
    .pipe(gulp.dest('./web/js/'));
});

gulp.task('watch', function () {
   gulp.watch('./source/css/*.less', ['css']);
   gulp.watch('./source/js/*.js', ['js']);
});

gulp.task('start', ['watch']);
gulp.task('default', ['css', 'js']);