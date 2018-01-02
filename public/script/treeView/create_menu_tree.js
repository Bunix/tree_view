(function ($) {

    'use strict';

    $(document).ready(function () {

        //=================================== CREATE MENU TREE =======================================//

        /**========================================================================
         * untuk menambah menu tree (Folder, File document penjualan, upload image)
         * ====================================================================== */
        $('#create').click(function () {

            var get_id_tree = $('#id_tree').val();
            var type_tree = $('#type_tree').text();
            var title_tree = $('#title_tree').val();
            var file_tree = $('#file_tree').val();
            var id_file = $('#id_file').val();

            if (get_id_tree != "") {
                var id_tree = get_id_tree;
            } else {
                id_tree = "0";
            }

            // console.log(id_tree, type_tree, title_tree, file_tree, id_file);

            $.ajax({
                type: "GET",
                url: "post_tree",
                data: {
                    id_tree: id_tree,
                    type_tree: type_tree,
                    title_tree: title_tree,
                    file_tree: file_tree,
                    id_file: id_file
                },
                dataType: "json",
                success: function (data) {
                    // console.log(data);
                    window.location.reload();
                }
            });
        });

        //================================================================================================//

    });
})(window.jQuery);