var gulp = require('gulp'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    compass = require('gulp-compass'),
    connect = require('gulp-connect'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    minifyHTML = require('gulp-minify-html'),
    // minifyPHP = require('gulp-php-minify'),
    ftp = require('gulp-ftp'),
    concat = require('gulp-concat');
    path = require('path');

var env,
    jsSources,
    sassSources,
    htmlSources,
    outputDir,
    sassStyle;

env = 'development';

if (env==='development') {
  outputDir = 'builds/development/';
  sassStyle = 'expanded';
} else {
  outputDir = 'builds/production/';
  sassStyle = 'compressed';
}

jsSources = [
  'components/scripts/jqloader.js',
  'components/scripts/TweenMax.min.js',
  'components/scripts/jquery.scrollmagic.min.js',
  'components/scripts/jquery.colorbox-min.js',
  'components/scripts/jquery.colorbox.js',
  'components/scripts/jquery-1.10.1.min.js',
  'components/scripts/script.js'
];
sassSources = ['/components/sass/style.scss'];
htmlSources = [outputDir + '*.html'];

gulp.task('js', function() {
  gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(browserify())
    .on('error', gutil.log)
    .pipe(gulpif(env === 'production', uglify()))
    .pipe(gulp.dest(outputDir + 'js'))
    .pipe(connect.reload())
});

gulp.task('compass', function() {
  gulp.src(sassSources)
    .pipe(compass({
      sass: 'components/sass',
      css: outputDir + 'css',
      images: outputDir + 'images',
      style: sassStyle,
      require: ['susy', 'breakpoint']
    })
    .on('error', function(err){
        new gutil.PluginError('COMPASS', err, {showStack: true});
      }
        )
      )
//    .pipe(gulp.dest( outputDir + 'css'))
    .pipe(connect.reload())
});

gulp.task('watch', function() {
  gulp.watch(jsSources, ['js']);
  gulp.watch(['components/sass/*.scss', 'components/sass/*/*.scss'], ['compass']);
  gulp.watch('builds/development/**/*.html', ['html']);
  gulp.watch('builds/development/*/*.php', ['minify:php']);
});

gulp.task('connect', function() {
  connect.server({
    root: outputDir,
    livereload: true
  });
});

gulp.task('html', function() {
  gulp.src('builds/development/**/*.html')
    .pipe(gulpif(env === 'production', minifyHTML()))
    .pipe(gulpif(env === 'production', gulp.dest(outputDir)))
    .pipe(connect.reload())
});

// gulp.task('minify:php', function() { 
//   gulp.src('builds/development/**/*.php')
//     .pipe(gulpif(env === 'production', minifyHTML()))
//     .pipe(gulpif(env === 'production', minifyPHP({binary: 'C:\\wamp\\bin\\php\\php5.6.19\\php.exe'})))
//     .pipe(gulpif(env === 'production', gulp.dest(outputDir)))
//     .pipe(connect.reload())
// });


// Copy images to production
gulp.task('move', function() {
  gulp.src('builds/development/images/**/*.*')
  .pipe(gulpif(env === 'production', gulp.dest(outputDir+'images')))
});

gulp.task('ftp', function(){
return gulp.src('src/*')
        .pipe(ftp({
            host: 'ftp.farmdalenaz.org',
            user: 'marrob113',
            pass: 'Baller.03'
        }))
        // you need to have some kind of stream after gulp-ftp to make sure it's flushed 
        // this can be a gulp plugin, gulp.dest, or any kind of stream 
        // here we use a passthrough stream 
        .pipe(gutil.noop());

}); 
gulp.task('default', ['watch', 'html', 'js', 'compass', 'move', 'ftp', 'connect']);