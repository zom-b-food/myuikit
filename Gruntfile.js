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
                    'assets-bs/css/un-minimized-core.css': 'assets-bs/css/un-minimized-core.css'
                }
            }
        },

        cssmin: {
            build: {
                src: 'assets-bs/css/un-minimized-core.css',
                dest: 'assets-bs/compiled/<%= pkg.name %>.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'assets-bs/css/un-minimized-core.css': 'assets-bs/sass/site.scss',
                    'assets-bs/css/custom.css': 'assets-bs/sass/custom.scss'
                    /*  not included in pgk.name.min.css  (not global enough) build these separately--not included in globals.jsp */
                    /*'assets-mat/css/components/tabs.css': 'assets-mat/sass/components/tabs.scss'*/
                    /*'assets-mat/css/components/amslides.css': 'assets-mat/sass/components/amslides.scss'*/

                }
            }
        },

        watch: {

            js: {
                files: ['assets-bs/js/<%= pkg.name %>.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['assets-bs/sass/**/*.scss'],
                tasks: ['buildcss']
            },
            livereload: {
                files: ['*.php', 'assets-bs/css/*.css', 'assets-bs/js/*.js'],
                options: {
                    livereload: true
                }
            }
        },

        uglify: {
            build: {
                files: {
                    'assets-bs/compiled/<%= pkg.name %>.min.js': [
                        'assets-bs/js/site.js'


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
