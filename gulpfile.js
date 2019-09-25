let gulp = require("gulp");
let cleanCSS = require("gulp-clean-css");
let uglifyJS = require("gulp-uglify");
let rename = require("gulp-rename");

gulp.task("css", () => {
    return gulp.src(["assets/css/*.css", "!assets/css/*.min.css"])
        .pipe(cleanCSS({
            compatibility: "ie8"
        }))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest("assets/css"));
});

gulp.task("js", () => {
    return gulp.src(["assets/js/*.js", "!assets/js/*.min.js"])
        .pipe(uglifyJS())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest("assets/js"));
});

gulp.task("default", gulp.series("css", "js"));