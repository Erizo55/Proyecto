var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var useref = require('gulp-useref');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('gulp-run-sequence');
var sftp = require('gulp-sftp');


gulp.task('browserSync', function(){
	browserSync.init({
		server: {
			baseDir: 'app'
		},
	});
});

gulp.task('css', function(){
	return gulp.src('app/css/*.css')
		.pipe(browserSync.reload({
			stream: true
		}));
});

gulp.task('html', function(){
	return gulp.src('app/*.html')
		.pipe(browserSync.reload({
			stream: true
		}));
});

gulp.task('js', function(){
	return gulp.src('app/js/*.js')
		.pipe(browserSync.reload({
			stream: true
		}));
});


gulp.task('watchcss', ['browserSync'], function(){
	gulp.watch('app/css/*.css',['css']);
});

gulp.task('watchhtml', ['browserSync'], function(){
	gulp.watch('app/*.html',['html']);
});

gulp.task('watchjs', ['browserSync'], function(){
	gulp.watch('app/js/*.js',['js']);
});

gulp.task('watch', function(callback){
	runSequence(['watchhtml','watchcss','watchjs'], callback);
});

gulp.task('useref', function(){
	return gulp.src('app/*.html')
		.pipe(useref())
		.pipe(gulpIf('*.js', uglify()))
		.pipe(gulpIf('*.css', cssnano()))
		.pipe(gulp.dest('dist'));
});

gulp.task('images', function(){
	return gulp.src('app/css/img/**/*.+(png|jpg|jpeg|gif|svg)')
		.pipe(gulp.dest('dist/css/img'));
});

gulp.task('fonts', function(){
	return gulp.src('app/css/fonts/**/*')
		.pipe(gulp.dest('dist/css/fonts'));
		
});

gulp.task('clean:dist', function(){
	return del.sync('dist');
});


gulp.task('default', function(callback){
	runSequence('clean:dist',['useref','images','fonts'],'subir', callback);
});

gulp.task('subir', function(){
	return gulp.src('dist/**/**/*')
	.pipe(sftp({
		host: '192.168.20.18',
		user: 'DAW211',
		pass: 'paso',
		port: '22',
		remotePath: 'public_html'
	}));
});