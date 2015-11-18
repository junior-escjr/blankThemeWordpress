// AQUI MONITORA OS ARQUIVOS VERIFICANDO SE EXISTE ALTERAÇÕES

var gulp = require('gulp');
var watch = require('gulp-watch');

gulp.task('default', function(){
	gulp.watch('../assets/sass/*.scss', ['sass']) //MONITORA A PASTA SASS DO CSS
    gulp.watch('../assets/css/public/*.css', ['concat-css'])
});
