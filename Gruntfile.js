module.exports = function (grunt) {

    "use strict";
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssc: {
            build: {
                options: {
                    sortSelectors: true,
                    lineBreaks: true,
                    sortDeclarations: true,
                    consolidateViaDeclarations: false,
                    consolidateViaSelectors: false,
                    consolidateMediaQueries: false
                },
                files: {
                    'assets2/css/site.css': 'assets2/css/site.css'
                }
            }
        },

        cssmin: {
            build: {
                src: 'assets2/css/site.css',
                dest: 'assets2/compiled/<%= pkg.name %>.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'assets2/css/site.css': 'assets2/sass/site.scss',
                    'assets2/css/custom.css': 'assets2/sass/custom.scss'

                }
            }
        },

        watch: {

            js: {
                files: ['assets2/js/site.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['assets2/sass/**/*.scss'],
                tasks: ['buildcss']
            },
            livereload: {
                files: ['*.php', 'assets2/css/*.css', 'assets2/js/*.js'],
                options: {
                    livereload: true
                }
            }
        },

        uglify: {
            build: {
                files: {
                    'assets2/compiled/<%= pkg.name %>.min.js': [
                        'assets2/js/site.js'


                    ]
                }
            }
        }

    });


    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-cssc');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'uglify', 'cssc', 'cssmin', 'watch']);
    grunt.registerTask('buildcss', ['sass', 'cssc', 'cssmin']);

};
