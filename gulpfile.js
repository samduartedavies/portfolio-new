var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');

function handleError(err) {
  console.log(err.toString());
  this.emit('end');
}

sass.compiler = require('node-sass');

gulp.task('scss', function() {
  return gulp
    .src('common/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('common/css'));
});

gulp.task('compress-js', function() {
  gulp
    .src('common/js/main.js')
    .pipe(
      minify({
        ext: {
          src: '.js',
          min: '.min.js',
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '.min.js'],
      })
    )
    .pipe(gulp.dest('common/js/'));
});

gulp.task('prepare-css', () =>
  gulp
    .src('common/css/main.css')
    .pipe(
      autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false,
      })
    )
    .pipe(gulp.dest('common/css'))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest('common/css'))
);

gulp.task('browsers', () =>
  gulp
    .src('common/css/main.css')
    .pipe(
      autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false,
      })
    )
    .pipe(gulp.dest('common/css'))
);

gulp.task('watch', function() {
  gulp.watch('common/scss/*.{sass,scss}', ['scss']);
  // gulp.watch('common/css/main.css', ['browsers']);
  gulp.watch('common/css/main.css', ['prepare-css']);
  gulp.watch('common/js/main.js', ['compress-js']);
});

gulp.task('dev', ['sass']);

gulp.task('default', ['sass']);
