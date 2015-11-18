// AQUI CONCATENO, MINIFICO E RENOMEIO OS ARQUIVOS CSSs QUE ESTÃO NA PASTA assets/css/public/

var gulp = require('gulp');
var concat = require('gulp-concat'); // junta todos os arquivos
var minifyCss = require('gulp-minify-css'); // minifica os arquivos
var rename = require('gulp-rename'); // renomeia os arquivos

gulp.task('concat-css', function(){
    return gulp.src([
            '../assets/css/public/reset.css',
            '../assets/css/public/grid.css',
            '../assets/css/public/owl-carousel.css',
            '../assets/css/public/owl-theme.css',
            '../assets/css/public/style.css'])
        .pipe(concat('all.css'))
        .pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(rename({
			suffix: '.min'
		}))
        .pipe(gulp.dest('../assets/css/'))
});
