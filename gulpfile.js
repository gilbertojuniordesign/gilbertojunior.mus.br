var gulp = require('gulp');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync').create();    
var sass = require('gulp-sass');	      // Requires the gulp-sass plugin
var prefix = require('gulp-autoprefixer');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('run-sequence');

gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sass())
    .pipe(prefix({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/js/**/*.js', browserSync.reload);
  gulp.watch('app/**/*.html', browserSync.reload);
  gulp.watch('app/**/*.php', browserSync.reload);
});

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: 'http://gilbertojunior.mus.br:8000' // utilizando virtual host no wamp
    });
});

gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      // proxy: '127.0.0.1'
    });
  });
 
  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});

gulp.task('useref', function(){
  return gulp.src('app/**/*.+(php|html)')
    .pipe(useref())                     // Compila arquivos js marcados
    .pipe(gulpIf('*.js', uglify()))     // Minifies only if it's a JavaScript file
    .pipe(gulpIf('*.css', cssnano()))   // Minifies only if it's a CSS file
    .pipe(gulp.dest('dist'))
});

gulp.task('images', function(){
  return gulp.src('app/images/**/*.+(png|jpg|gif|svg)')
  .pipe(imagemin())
  .pipe(gulp.dest('dist/images'))
});

gulp.task('fonts', function() {
  return gulp.src('app/fonts/**/*')
  .pipe(gulp.dest('dist/fonts'))
});

gulp.task('html-php', function () {
  return gulp.src('app/**/*.+(php|html)')
  .pipe(gulp.dest('./dist'));
});

gulp.task('clean:dist', function() {
  return del.sync('dist');
});

gulp.task('cache:clear', function (callback) {
return cache.clearAll(callback)
});

gulp.task('build', function (callback) {
  runSequence('clean:dist', 
    ['sass', 'useref', 'images', 'fonts'],
    callback
  )
});

gulp.task('default', function (callback) {
  runSequence(['sass','browserSync', 'watch'],
    callback
  )
})