module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        cssmin: {
            t1: {
                files: {
                    'public/css/libs.css': [
                        'resources/assets/css/pace-theme-flash.css',
                        'resources/assets/css/bootstrap.min.css',
                        'resources/assets/css/jquery.scrollbar.css',
                        'resources/assets/css/select2.min.css',
                        'resources/assets/css/switchery.min.css',
                        'resources/assets/css/MetroJs.css',
                        'resources/assets/css/dialog.css',
                        'resources/assets/css/dialog-sandra.css',
                        'resources/assets/css/owl.carousel.css',
                        'resources/assets/css/bootstrap3-wysihtml5.min.css',
                        'resources/assets/css/bootstrap-tagsinput.css',
                        'resources/assets/css/dropzone.css',
                        'resources/assets/css/summernote.css',
                        'resources/assets/css/bootstrap-timepicker.min.css',
                        'resources/assets/css/ion.rangeSlider.css',
                        'resources/assets/css/ion.rangeSlider.skinFlat.css',
                        'resources/assets/css/jquery.nouislider.css',
                        'resources/assets/css/jquery.nestable.css',
                        'resources/assets/css/component.css',
                        'resources/assets/css/nv.d3.min.css',
                        'resources/assets/css/mapplic.css',
                        'resources/assets/css/rickshaw.min.css',
                        'resources/assets/css/datepicker3.css',
                        'resources/assets/css/daterangepicker-bs3.css',
                        'resources/assets/css/dataTables.bootstrap.min.css',
                        'resources/assets/css/dataTables.fixedColumns.min.css',
                        'resources/assets/css/datatables.responsive.css'
                    ]
                }
            }
        },

        uglify: {
            t1: {
                files: {
                    'public/js/libs.js': [
                        'resources/assets/js/pace.min.js',
                        'resources/assets/js/jquery-1.11.1.min.js',
                        'resources/assets/js/modernizr.custom.js',
                        'resources/assets/js/jquery-ui.min.js',
                        'resources/assets/js/tether.min.js',
                        'resources/assets/js/bootstrap.min.js',
                        'resources/assets/js/jquery-easy.js',
                        'resources/assets/js/jquery.unveil.min.js',
                        'resources/assets/js/jquery.ioslist.min.js',
                        'resources/assets/js/jquery.actual.min.js',
                        'resources/assets/js/jquery.scrollbar.min.js',
                        'resources/assets/js/select2.full.min.js',
                        'resources/assets/js/classie.js',
                        'resources/assets/js/stepsForm.js',
                        'resources/assets/js/switchery.min.js',
                        'resources/assets/js/imagesloaded.pkgd.min.js',
                        'resources/assets/js/isotope.pkgd.min.js',
                        'resources/assets/js/bootstrap-tabcollapse.js',
                        'resources/assets/js/ion.rangeSlider.min.js',
                        'resources/assets/js/jquery.nouislider.min.js',
                        'resources/assets/js/jquery.liblink.js',
                        'resources/assets/js/jquery.dynatree.min.js',
                        'resources/assets/js/jquery.nestable.js',
                        'resources/assets/js/jquery.validate.min.js',
                        'resources/assets/js/bootstrap3-wysihtml5.all.min.js',
                        'resources/assets/js/autoNumeric.js',
                        'resources/assets/js/dropzone.min.js',
                        'resources/assets/js/bootstrap-tagsinput.min.js',
                        'resources/assets/js/jquery.inputmask.min.js',
                        'resources/assets/js/jquery.bootstrap.wizard.min.js',
                        'resources/assets/js/jquery.validate.min.js',
                        'resources/assets/js/summernote.min.js',
                        'resources/assets/js/bootstrap-timepicker.min.js',
                        'resources/assets/js/typeahead.bundle.min.js',
                        'resources/assets/js/typeahead.jquery.min.js',
                        'resources/assets/js/handlebars-v4.0.5.js',
                        'resources/assets/js/dialogFx.js',
                        'resources/assets/js/owl.carousel.min.js',
                        'resources/assets/js/nvd3/d3.v3.js',
                        'resources/assets/js/nvd3/nv.d3.min.js',
                        'resources/assets/js/nvd3/src/utils.js',
                        'resources/assets/js/nvd3/src/tooltip.js',
                        'resources/assets/js/nvd3/src/interactiveLayer.js',
                        'resources/assets/js/nvd3/src/axis.js',
                        'resources/assets/js/nvd3/src/line.js',
                        'resources/assets/js/nvd3/src/lineWithFocusChart.js',
                        'resources/assets/js/mapplic/js/hammer.js',
                        'resources/assets/js/mapplic/js/jquery.mousewheel.js',
                        'resources/assets/js/mapplic/js/mapplic.js',
                        'resources/assets/js/rickshaw.min.js',
                        'resources/assets/js/MetroJs.min.js',
                        'resources/assets/js/jquery.sparkline.min.js',
                        'resources/assets/js/skycons.js',
                        'resources/assets/js/bootstrap-datepicker.js',
                        'resources/assets/js/moment.min.js',
                        'resources/assets/js/daterangepicker.js',
                        'resources/assets/js/jquery.dataTables.min.js',
                        'resources/assets/js/dataTables.tableTools.min.js',
                        'resources/assets/js/dataTables.bootstrap.min.js',
                        'resources/assets/js/jquery-datatable-bootstrap.js',
                        'resources/assets/js/lodash.min.js',
                        'resources/assets/js/interact.min.js',
                        'resources/assets/js/moment-with-locales.min.js',
                        'resources/assets/js/jquery.sieve.min.js',
                        'resources/assets/js/pages.min.js'
                    ]
                }
            }
        }
    });
};