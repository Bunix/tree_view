(function ($) {

    'use strict';

    $(document).ready(function () {

        //=================================== GET UPLOAD DOCUMENT =======================================//

        /**=========================================================================
         * untuk memimilih jenis document yang ingin diupload penjualan atau notes
         * untuk sekarang hanya menyediakan upload document hasil dari penjualan
         * ======================================================================= */
        function getUploadDocument() {

            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');//untuk memilih folder tempat file diletakkan
            var get_type_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_tree').text();//untuk membedakan jenis folder atau file
            var get_id_type = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();//untuk mengambil nilai id folder jika ada yang dipilih

            /**========================================================================
             * untuk menentukan dimana document yang diupload akan diletakkan
             * dan jika folder yang dipilih lebih dari satu maka akan menampilkan alert
             * dan jika folder yang dipilih hanya satu,
             * atau tidak ada folder yang dipilih maka folder akan diletakkan diluar.
             *======================================================================= */
            if (select_type.length <= 1) {

                /**=========================================================
                 * untuk membedakan antara yang dipilih folder atau file
                 * jika yang dipilih file akan menampilkan alert peringatan
                 * tapi jika yang dipilih folder maka akan menampilkan modal.
                 * ======================================================== */
                if (get_type_tree == 'folder' || get_type_tree == "") {

                    $('div[id=show3] > div > div > label').text('File Name');//Untuk mengganti title modal

                    $('#type_tree').text('children');
                    $('#id_tree').val(get_id_type);

                    $('#show1').removeClass('hide');
                    $('#show2').addClass('hide');
                    $('#post_submit').attr('type', 'button').attr('id', 'create');
                    $('#id_form1').attr('method', 'GET');

                    $('#modalSlideUp').modal('show');//untuk menampilkan modal

                    // console.log($('#id_tree').val());

                } else {

                    alert('Anda hanya dapat memilih jenis folder');

                }

            } else {

                alert('anda hanya dapat memilih salah satu folder atau tidak sama sekali');

            }

        }

        /**==================================
         * untuk mengambil id type Penjualan
         * ================================ */
        $('.cs-options ul > li[data-value="1"]').click(function () {
            getUploadDocument();
            $('#id_file').val('1');
        });

        /**==================================
         * untuk mengambil id type Notes
         * ================================ */
        $('.cs-options ul > li[data-value="2"]').click(function () {
            getUploadDocument();
            $('#id_file').val('2');
        });

        //================================================================================================//

    });
})(window.jQuery);