import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import del from 'del';
import browserSync from "browser-sync";
const PRODUCTION = yargs.argv.prod;
const sass = require('gulp-sass')(require('sass'));

export const styles = () => {
  return src('src/scss/styles.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('dist/css'))
    .pipe(server.stream());
}

export const images = () => {
  return src('src/images/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(dest('dist/images'));
}

export const js = () => {
  return src('src/js/**/*.js')
    .pipe(dest('dist/js'));
}

export const copy = () => {
  return src(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'])
    .pipe(dest('dist'));
}

export const watchForChanges = () => {
  watch('src/scss/**/*.scss', (styles));
  watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  watch('src/js/**/*.js', series(js, reload));
  watch(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'], series(copy, reload));
  watch("**/*.php", reload);
}

export const clean = () => del(['dist']);

const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: "http://wordpressdevsite.local/" // put your local website link here
  });
  done();
};
export const reload = done => {
  server.reload();
  done();
};

export const dev = series(clean, parallel(styles, images, js, copy), serve, watchForChanges)
export const build = series(clean, parallel(styles, images, js, copy))
export default dev;