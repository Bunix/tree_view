(function ($) {

    'use strict';

    $(document).ready(function () {

        //========================================== NEW FOLDER ==========================================//

        /**===========================================================================
         * Digunakan untuk menampilkan modal yang digunakan untuk menambah folder baru
         * ========================================================================= */
        $('#newFolder').click(function () {

            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');//untuk fiolder yang ingin ditambahkan
            var get_type_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_tree').text();//untuk membedakan jenis folder atau file
            var get_id_type = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();//untuk mengambil nilai id

            /**===========================================================================
             * untuk menentukan dimana folder baru akan diletakkan
             * dan jika folder yang dipilih lebih dari satu maka akan menampilkan alert
             * dan jika tidak ada folder yang dipilih maka folder akan diletakkan diluar.
             *============================================================================*/
            if (select_type.length <= 1) {

                /**========================================================================
                 * untuk membedakan antara yang dipilih folder atau file
                 * jika yang dipilih file akan menampilkan alert peringatan
                 * tapi jika yang dipilih folder maka akan menampilkan modal.
                 * ========================================================================*/
                if (get_type_tree == 'folder' || get_type_tree == "") {

                    $('div[id=show3] > div > div > label').text('Folder Name');//Untuk mengganti title modal

                    $('#type_tree').text('folder');
                    $('#id_tree').val(get_id_type);

                    $('#show1').addClass('hide');
                    $('#show2').addClass('hide');
                    $('#post_submit').attr('type', 'button').attr('id', 'create');
                    $('#id_form1').attr('method', 'GET');

                    $('#modalSlideUp').modal('show');//untuk menampilkan modal

                    // console.log('success');

                } else {

                    alert('Anda hanya dapat memilih jenis folder');

                }

            } else {

                alert('anda hanya dapat memilih satu atau tidak sama sekali');

            }

        });

        //================================================================================================//

    });
})(window.jQuery);