
let gulp=require('gulp');

//引入less编译模块
let less=require('gulp-less');

//引入css压缩模块
let cleanCss=require('gulp-clean-css');

//引入重命名板块
let rename=require('gulp-rename');

//引入热刷新模块
let livereload=require('gulp-livereload');

//压缩js
let uglify=require('gulp-uglify');

//引入gulp-babel
let babel = require('gulp-babel');

//引入路径模块
let path=require('path');


//gulp-less  gulp-clean-css  gulp-rename   gulp-livereload 
gulp.task('lessTask',()=>{
    gulp.src('./src/less/*.less')
        .pipe(less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
        }))
        .pipe(cleanCss())
        .pipe(rename(function(path){
            path.basename+='.min';
        }))
        .pipe(gulp.dest('./dist/css'))
        .pipe(livereload());
})


//压缩js
gulp.task('jsTask',()=>{
    gulp.src('./src/js/*.js')
    .pipe(babel({
        presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(rename(function(path){
        path.basename+='.min';
    }))
    .pipe(gulp.dest('./dist/js'))
    .pipe(livereload());
})


//监听者
gulp.task('default',()=>{
    livereload.listen();
    gulp.watch('./src/less/*.less',['lessTask']);
    gulp.watch('./src/js/*.js',['jsTask']);
 })