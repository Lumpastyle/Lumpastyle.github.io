var gulp = require('gulp'),
    php = require('gulp-connect-php'),
    scss = require('gulp-sass'),
    compressor_js = require('gulp-minify'),
    jquery = require('jquery'),
    browserSync = require('browser-sync');

gulp.task('html', function() {
    gulp.src('app/*.php')
        .pipe(gulp.dest('dist'))
        .pipe(browserSync.stream());
});

gulp.task('scss1', function() {
    return gulp.src('app/scss/style.scss')
        .pipe(scss())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('scss2', function() {
    return gulp.src('app/scss/styledemo.scss')
        .pipe(scss())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp.src('app/js/*.js')
        .pipe(compressor_js(
            {
                min:'.min.js'
            }
        ))
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.stream());
});

gulp.task('svg', function() {
    return gulp.src('app/assets/svg/*.svg')
        .pipe(gulp.dest('dist/assets/svg/'))
        .pipe(browserSync.stream());
});
gulp.task('img', function() {
    return gulp.src('app/assets/img/*')
        .pipe(gulp.dest('dist/assets/img/'))
        .pipe(browserSync.stream());
});
gulp.task('fonts', function() {
    return gulp.src('app/assets/fonts/*')
        .pipe(gulp.dest('dist/assets/fonts/'))
        .pipe(browserSync.stream());
});
gulp.task('jquery', function () {
    return gulp.src('./node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('dist/js/'));
});

gulp.task('browserSync', ['html', 'scss1', 'scss2', 'js', 'svg', 'img', 'fonts', 'jquery'],  function() {
    php.server({}, function (){
        browserSync({
            proxy: '127.0.0.1:8000/dist/'
        });
    });

    gulp.watch('./app/scss/**/*.scss', ['scss1']);
    gulp.watch('./app/scss/**/_demo.scss', ['scss2']);
    gulp.watch('./app/*.php', ['html']);
    gulp.watch('./app/js/*.js', ['js']);
});

gulp.task('default', ['browserSync'], function() {});