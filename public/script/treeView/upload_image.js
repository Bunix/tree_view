(function ($) {

    'use strict';

    $(document).ready(function () {

        //====================================== UPLOAD IMAGE ==========================================//

        /**================================
         * Upload file images dan lain-lain
         * ============================== */
        $('#uploadImage').click(function () {

            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');//untuk memilih folder tempat file diletakkan
            var get_type_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_tree').text();//untuk membedakan jenis folder atau file
            var get_id_type = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();//untuk mengambil nilai id folder jika ada yang dipilih

            /**===========================================================================
             * untuk menentukan dimana file/image yang ingin diupload akan diletakkan
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
                if (get_type_tree == 'folder' || get_type_tree == "") {

                    $('div[id=show3] > div > div > label').text('File Name');//Untuk mengganti title modal

                    var tree_id = $('#id_tree');

                    /**======================================================================================
                     * untuk membedakan antara ada folder yang dipilih untuk tempat menyimpan file atau tidak
                     * ==================================================================================== */
                    if (get_id_type == null) {
                        tree_id.val('0');
                    } else {
                        tree_id.val(get_id_type);
                    }

                    $('#get_type_tree').val('children');
                    $('#id_file').val('3');

                    $('#show1').addClass('hide');
                    $('#show2').removeClass('hide');
                    $('#create').attr('type', 'submit').attr('id', 'post_submit');
                    $('#id_form1').attr('method', 'POST');

                    $('#modalSlideUp').modal('show');//untuk menampilkan modal

                    // console.log(tree_id.val());

                } else {

                    alert('Anda hanya dapat memilih jenis folder');

                }

            } else {

                alert('anda hanya dapat memilih salah satu folder atau tidak sama sekali');

            }

        });

        //================================================================================================//

    });
})(window.jQuery);