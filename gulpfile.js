var gulp = require('gulp'),
    scss = require('gulp-sass'),
    compressor_js = require('gulp-minify'),
    jquery = require('jquery'),
    sync = require('browser-sync').create();

gulp.task('html', function() {
    gulp.src('app/*.html')
        .pipe(gulp.dest('dist'))
        .pipe(sync.stream());
});

gulp.task('scss', function() {
    return gulp.src('app/scss/style.scss')
        .pipe(scss())
        .pipe(gulp.dest('dist/css'))
        .pipe(sync.stream());
});

gulp.task('projscss', function() {
    return gulp.src('app/scss/project.scss')
        .pipe(scss())
        .pipe(gulp.dest('dist/css'))
        .pipe(sync.stream());
});

gulp.task('js', function() {
    return gulp.src('app/js/*.js')
        .pipe(compressor_js(
            {
                min:'.min.js'
            }
        ))
        .pipe(gulp.dest('dist/js'))
        .pipe(sync.stream());
});

gulp.task('svg', function() {
    return gulp.src('app/assets/svg/*.svg')
        .pipe(gulp.dest('dist/assets/svg/'))
        .pipe(sync.stream());
});
gulp.task('img', function() {
    return gulp.src('app/assets/img/*')
        .pipe(gulp.dest('dist/assets/img/'))
        .pipe(sync.stream());
});
gulp.task('fonts', function() {
    return gulp.src('app/assets/fonts/*')
        .pipe(gulp.dest('dist/assets/fonts/'))
        .pipe(sync.stream());
});
gulp.task('jquery', function () {
    return gulp.src('./node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('dist/js/'));
});

gulp.task('watch', function () {
    gulp.watch('./app/scss/**/*.scss', ['scss', 'projscss']);
    gulp.watch(['./app/*.html'], ['html']);
    gulp.watch(['./app/js/*.js'], ['js']);
});

gulp.task('sync', ['html', 'scss', 'projscss', 'watch', 'js', 'svg', 'img', 'fonts', 'jquery'], function() {
    sync.init({
        server: __dirname + '/dist'
    });
});

gulp.task('default', ['sync'], function() {});