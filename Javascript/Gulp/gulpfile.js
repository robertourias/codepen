'use strict';

// grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    jshint = require('gulp-jshint'),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    sourcemapsupport = require('gulp-sourcemaps-support'),
    cleanCSS = require('gulp-clean-css'),
    browserSync = require('browser-sync').create();

// define the default task and add the watch task to it
gulp.task('default', ['watch']);

// create a default task and just log a message
// gulp.task('default', function() {
//   return gutil.log('Gulp is running!')
// });

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// configure the jshint task
gulp.task('lint', function() {
  return gulp.src('./js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: './'//Nome do diretório Raiz
    },
  })
});

gulp.task('scripts', function() {
  return gulp.src(['./js/outro.js', './js/init.js'])
    .pipe(sourcemaps.init())
    .pipe(concat('init.min.js'))
    .pipe(gutil.env.type === 'production' ? uglify() : gutil.noop())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist'));
});

gulp.task('minify-css', function() {
  return gulp.src('./css/*.css')
    .pipe(sourcemaps.init())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('dist'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', ['browserSync', 'sass'], function() {
  gulp.watch('./js/**/*.js', ['lint']);
  gulp.watch('./js/**/*.js', ['scripts']);
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('./sass/**/*.scss', ['minify-css']);
});
