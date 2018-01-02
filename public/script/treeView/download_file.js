(function ($) {

    'use strict';

    $(document).ready(function () {

        //====================================== DOWNLOAD FILE ==========================================//

        /**=====================================================
         * untuk menampilkan modal untuk melakukan download file
         * =================================================== */
        $('#download_file').click(function () {
            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');//untuk memilih file yang akan di download, tidak lebih dari 1
            var get_type_file = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_file').text();//untuk membedakan jenis folder atau file
            var get_id_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();//untuk mengambil nilai id file yang ingin didownload
            var get_down_file = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .file_tree').text();//untuk mengambil file yang akan didownload

            /**===========================================================================
             * untuk menentukan dimana document yang diupload akan diletakkan
             * dan jika folder yang dipilih lebih dari satu maka akan menampilkan alert
             * dan jika folder yang dipilih hanya satu,
             * atau tidak ada folder yang dipilih maka folder akan diletakkan diluar.
             *========================================================================== */
            if (select_type.length <= 1) {

                /**=========================================================
                 * untuk membedakan antara yang dipilih folder atau file
                 * jika yang dipilih file akan menampilkan alert peringatan
                 * tapi jika yang dipilih folder maka akan menampilkan modal.
                 * ======================================================== */
                if (get_type_file == '3') {

                    $('#get_file_download').attr('href', 'images/' + get_down_file).attr('download', get_down_file);//untuk menagktifkan tombol download dan mengisinya dengan url file yang akan didownload

                    /**=================================================================
                     * untuk mengisi form yang akan digunakan untuk membuat log download
                     * =============================================================== */
                    $('#id_tree_download').val(get_id_tree);
                    $('#id_type_download').val(get_type_file);
                    $('#id_file_download').val(get_down_file);

                    $('#modalFillIn').modal('show');//untuk menampilkan modal

                    // console.log(get_type_file, get_down_file);

                } else {

                    alert('Anda hanya bisa memilih jenis file yang di upload');

                }

            } else {

                alert('anda hanya dapat memilih salah satu file saja');

            }
        });

        //================================================================================================//


        //===================================== LOG DOWNLOAD FILE =======================================//

        /**====================================
         * digunakan untuk membuat log download
         * ================================== */
        $('#file_download').click(function () {

            var get_type_file = $('#id_type_download').val();
            var get_id_tree = $('#id_tree_download').val();
            var get_down_file = $('#id_file_download').val();

            // console.log('success ' + get_down_file + ' ' + get_type_file + ' ' + get_id_tree);

            $.ajax({
                type: "GET",
                url: "get_download_file",
                data: {type: get_type_file, idTree: get_id_tree, fileTree: get_down_file},
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $('#modalFillIn').modal('hide');

                    /**===================================
                     * untuk menampilkan view log download
                     * ================================= */
                    $('#test_download').append(
                        '<tr>' +
                        '<td>' + data.tanggal + ' ' + data.time + '</td>' +
                        '<td>' + data.user[0].name + '</td>' +
                        '<td>' + data.file[0].title + '</td>' +
                        '</tr>'
                    );
                }
            });
        });

        //================================================================================================//

    });
})(window.jQuery);