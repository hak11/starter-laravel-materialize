'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./public/materialize/sass/materialize.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./public/materialize/css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./public/materialize/sass/materialize.scss', ['sass']);
});


gulp.task('default', ['sass','sassCustom']);