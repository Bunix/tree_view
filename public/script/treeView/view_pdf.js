(function ($) {

    'use strict';

    $(document).ready(function () {

        //====================================== VIEW FILE UPLOAD ==========================================//

        /**========================================
         * untuk menampilkan file dengan bentuk pdf
         * ====================================== */
        $('#pdf').on('click', function () {

            var drag_tree = $('#drag-tree');
            var get_file = drag_tree.find('ul > li .dynatree-selected .dynatree-title .file_tree');//untuk mengambil file yang akan ditampilkan
            var type_tree = drag_tree.find('ul > li .dynatree-selected .dynatree-title .type_tree');//untuk memilih jenis file atau folder
            var type_file = drag_tree.find('ul > li .dynatree-selected .dynatree-title .type_file');//untuk membedakan jenis folder atau file

            var view_file = get_file.text();
            var view_bulan = view_file[0] + view_file[1];//mengambil nilai bulan
            var view_tahun = view_file[3] + view_file[4] + view_file[5] + view_file[6];//mengambil nilai tahun

            /**========================================
             * untuk membedakan jenis file atau folder
             * ====================================== */
            if (type_tree.text() == 'children') {
                window.location.href = 'get_pdf/' + type_file.text() + '/' + view_bulan + '/' + view_tahun;
            } else {
                alert('tolong pilih salah satu dengan jenis file')
            }
        });

        //================================================================================================//

    });
})(window.jQuery);