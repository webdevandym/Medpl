"use strick";

var gulp = require('gulp'),
	concatCss = require('gulp-concat-css'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	uncss = require('gulp-uncss'),
	rename = require("gulp-rename"),
	minify = require('gulp-minify');

gulp.task('CSS', function () {
  return gulp.src('web/css/*.css')
    .pipe(concatCss('bundle.css'))
	.pipe(autoprefixer({
		browsers: ['last 2 versions', '> 1%' , 'IE 7'],
		cascade: false
	}))
    .pipe(gulp.dest('web/css/concat'));
});

gulp.task('uncss',['CSS'], function () {
    return gulp.src('web/css/concat/bundle.css')
        .pipe(uncss({
            html: ['touncss.html']
        }))
        .pipe(gulp.dest('web/css/uncss'));
});

gulp.task('uncssBT', function () {
    return gulp.src('assets/941fa0c1/css/_bootstrap.css')
        .pipe(uncss({
            html: ['touncss.html','touncssBT.html'],
            ignore: [
                ".fade",
                ".fade.in",
                ".collapse",
                ".collapse.in",
                ".collapsing",
                ".alert-danger",
                ".open",
                "/open+/"
           ]
        }))
        .pipe(rename("bootstrap.css"))
        .pipe(gulp.dest('assets/941fa0c1/css/'));
});

gulp.task('compress', function() {
  gulp.src('web/js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js'],
        compress:{
					sequences     : true,  // join consecutive statemets with the “comma operator”
					properties    : true,  // optimize property access: a["foo"] → a.foo
					dead_code     : true,  // discard unreachable code
					drop_debugger : true,  // discard “debugger” statements
					unsafe        : false, // some unsafe optimizations (see below)
					conditionals  : true,  // optimize if-s and conditional expressions
					comparisons   : true,  // optimize comparisons
					evaluate      : true,  // evaluate constant expressions
					booleans      : true,  // optimize boolean expressions
					loops         : true,  // optimize loops
					unused        : true,  // drop unused variables/functions
					hoist_funs    : true,  // hoist function declarations
					hoist_vars    : false, // hoist variable declarations
					if_return     : true,  // optimize if-s followed by return/continue
					join_vars     : true,  // join var declarations
					cascade       : true,  // try to cascade `right` into `left` in sequences
					side_effects  : true,  // drop side-effect-free statements
					warnings      : true,  // warn about potentially dangerous optimizations/code
					global_defs   : { DEBUG: false}     // global definitions
	},
	preserveComments: ['all']
    }))
    .pipe(gulp.dest('web/js/tasks'))
});

gulp.task('compressBT', function() {
  gulp.src('assets/941fa0c1/js/bootstrap.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js'],
        compress:{
					sequences     : true,  // join consecutive statemets with the “comma operator”
					properties    : true,  // optimize property access: a["foo"] → a.foo
					dead_code     : true,  // discard unreachable code
					drop_debugger : true,  // discard “debugger” statements
					unsafe        : false, // some unsafe optimizations (see below)
					conditionals  : true,  // optimize if-s and conditional expressions
					comparisons   : true,  // optimize comparisons
					evaluate      : true,  // evaluate constant expressions
					booleans      : true,  // optimize boolean expressions
					loops         : true,  // optimize loops
					unused        : true,  // drop unused variables/functions
					hoist_funs    : true,  // hoist function declarations
					hoist_vars    : false, // hoist variable declarations
					if_return     : true,  // optimize if-s followed by return/continue
					join_vars     : true,  // join var declarations
					cascade       : true,  // try to cascade `right` into `left` in sequences
					side_effects  : true,  // drop side-effect-free statements
					warnings      : true,  // warn about potentially dangerous optimizations/code
					global_defs   : { DEBUG: false}     // global definitions
	},
	preserveComments: ['all']
    }))
    .pipe(gulp.dest('assets/941fa0c1/js/'))
});

gulp.task('compressJQ', function() {
  gulp.src('assets/1ba441a5/jquery.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js'],
        compress:{
					sequences     : true,  // join consecutive statemets with the “comma operator”
					properties    : true,  // optimize property access: a["foo"] → a.foo
					dead_code     : true,  // discard unreachable code
					drop_debugger : true,  // discard “debugger” statements
					unsafe        : false, // some unsafe optimizations (see below)
					conditionals  : true,  // optimize if-s and conditional expressions
					comparisons   : true,  // optimize comparisons
					evaluate      : true,  // evaluate constant expressions
					booleans      : true,  // optimize boolean expressions
					loops         : true,  // optimize loops
					unused        : true,  // drop unused variables/functions
					hoist_funs    : true,  // hoist function declarations
					hoist_vars    : false, // hoist variable declarations
					if_return     : true,  // optimize if-s followed by return/continue
					join_vars     : true,  // join var declarations
					cascade       : true,  // try to cascade `right` into `left` in sequences
					side_effects  : true,  // drop side-effect-free statements
					warnings      : true,  // warn about potentially dangerous optimizations/code
					global_defs   : { DEBUG: false}     // global definitions
	},
	preserveComments: ['all']
    }))
    .pipe(gulp.dest('assets/1ba441a5/'))
});


gulp.task('watch', function () {
	 gulp.watch('web/css/*css',['default'])
});

gulp.task('default', ['uncss']);

 
