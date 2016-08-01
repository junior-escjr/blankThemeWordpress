// AQUI CONCATENO, MINIFICO E RENOMEIO OS ARQUIVOS CSSs QUE ESTÃO NA PASTA assets/css/public/

var gulp = require('gulp');
var concat = require('gulp-concat'); // junta todos os arquivos
var minifyCss = require('gulp-cssmin'); // minifica os arquivos
var rename = require('gulp-rename'); // renomeia os arquivos

gulp.task('concat-css', function(){
    return gulp.src([
            '../assets/sass/style.scss'])
        .pipe(concat('all.css'))
        .pipe(minifyCss())
		.pipe(rename({
			suffix: '.min'
		}))
        .pipe(gulp.dest('../assets/css/'))
});
