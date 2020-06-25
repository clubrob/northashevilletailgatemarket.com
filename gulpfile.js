const { src, dest, series, watch } = require('gulp');
const del = require('del');

const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const csso = require('gulp-csso');

const babel = require('gulp-babel');
const browserify = require('browserify');
const sourcemaps = require('gulp-sourcemaps');
const terser = require('gulp-uglify-es').default;

function processCSS() {
  return src('./src/scss/theme.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(csso())
    .pipe(dest('./'));
}

function processJS() {
  return src('./src/js/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel())
    .pipe(terser())
    .pipe(sourcemaps.write())
    .pipe(dest('./js'));
}

function fileWatch() {
  watch('src/scss/**/*.scss', processCSS);
  watch('src/js/**/*.js', processJS);
}

exports.watch = series(processCSS, processJS, fileWatch);

exports.build = series(processCSS, processJS);
