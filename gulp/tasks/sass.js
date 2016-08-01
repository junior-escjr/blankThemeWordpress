// AQUI CONVERTE O ARQUIVO .scss PARA css

var gulp = require('gulp');
var concat = require('gulp-concat'); // junta todos os arquivos
var minifyCss = require('gulp-cssmin'); // minifica os arquivos
var rename = require('gulp-rename'); // renomeia os arquivos
var sass = require('gulp-sass');

gulp.task('sass', function () {
  gulp.src('../assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('all.css'))
    .pipe(gulp.dest('../assets/css/'))
    
    .pipe(minifyCss())
	.pipe(rename({
		suffix: '.min'
	}))
    .pipe(gulp.dest('../assets/css/'));
});
