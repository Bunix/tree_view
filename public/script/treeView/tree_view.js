/* ============================================================
 * Tree View
 * Render a tree view using jQuery Dynatree plugin
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function ($) {

    'use strict';

    $(document).ready(function () {

        //========================================== NEW FOLDER ==========================================//

        /**
         * Digunakan untuk menampilkan modal yang digunakan untuk menambah folder baru
         */
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
                    $('#modalSlideUp').modal('show');

                    // console.log('success');

                } else {

                    alert('Anda hanya dapat memilih jenis folder');

                }

            } else {

                alert('anda hanya dapat memilih satu atau tidak sama sekali');

            }

        });

        //================================================================================================//


        //========================================== NEW FOLDER ==========================================//

        /**=========================================================================
         * untuk memimilih jenis document yang ingin diupload penjualan atau notes
         * untuk sekarang hanya menyediakan upload document hasil dari penjualan
         * ======================================================================= */
        function getUploadDocument() {

            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');
            var get_type_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_tree').text();
            var get_id_type = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();

            if (select_type.length <= 1) {

                if (get_type_tree == 'folder' || get_type_tree == "") {

                    $('div[id=show3] > div > div > label').text('File Name');

                    $('#type_tree').text('children');
                    $('#id_tree').val(get_id_type);
                    $('#show1').removeClass('hide');
                    $('#show2').addClass('hide');
                    $('#post_submit').attr('type', 'button').attr('id', 'create');
                    $('#id_form1').attr('method', 'GET');
                    $('#modalSlideUp').modal('show');

                    console.log($('#id_tree').val());

                } else {

                    alert('Anda hanya dapat memilih jenis folder');

                }

            } else {

                alert('anda hanya dapat memilih salah satu folder atau tidak sama sekali');

            }

        }

        $('.cs-options ul > li[data-value="1"]').click(function () {
            getUploadDocument();
            $('#id_file').val('1');
        });

        $('.cs-options ul > li[data-value="2"]').click(function () {
            getUploadDocument();
            $('#id_file').val('2');
        });

        //========================================================//


        //===================== Create Menu Tree =================//

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

            console.log(id_tree, type_tree, title_tree, file_tree, id_file);

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
                    console.log(data);
                    window.location.reload();
                }
            });
        });

        //========================================================//


        //===================== Upload Image =====================//

        $('#uploadImage').click(function () {

            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');
            var get_type_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_tree').text();
            var get_id_type = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();

            if (select_type.length <= 1) {

                if (get_type_tree == 'folder' || get_type_tree == "") {

                    $('div[id=show3] > div > div > label').text('File Name');

                    $('#get_type_tree').val('children');
                    if (get_id_type == null) {
                        $('#id_tree').val('0');
                    } else {
                        $('#id_tree').val(get_id_type);
                    }
                    $('#id_file').val('3');
                    $('#show1').addClass('hide');
                    $('#show2').removeClass('hide');
                    $('#create').attr('type', 'submit').attr('id', 'post_submit');
                    $('#id_form1').attr('method', 'POST');
                    $('#modalSlideUp').modal('show');

                    console.log($('#id_tree').val());

                } else {

                    alert('Anda hanya dapat memilih jenis folder');

                }

            } else {

                alert('anda hanya dapat memilih salah satu folder atau tidak sama sekali');

            }

        });

        //========================================================//

        $('#download_file').click(function () {
            var get_id = $('#drag-tree');
            var select_type = get_id.find('.dynatree-container > li .dynatree-selected');
            var get_type_file = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .type_file').text();
            var get_id_tree = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .id_tree').text();
            var get_down_file = get_id.find('.dynatree-container > li .dynatree-selected > a[class=dynatree-title] .file_tree').text();

            if (select_type.length <= 1) {

                if (get_type_file == '3') {

                    $('#get_file_download').attr('href', 'images/' + get_down_file).attr('download', get_down_file);

                    $('#id_tree_download').val(get_id_tree);
                    $('#id_type_download').val(get_type_file);
                    $('#id_file_download').val(get_down_file);

                    $('#modalFillIn').modal('show');

                    console.log(get_type_file, get_down_file);

                } else {

                    alert('Anda hanya bisa memilih jenis file yang di upload');

                }

            } else {

                alert('anda hanya dapat memilih salah satu file saja');

            }
        });

        $('#file_download').click(function () {
            var get_type_file = $('#id_type_download').val();
            var get_id_tree = $('#id_tree_download').val();
            var get_down_file = $('#id_file_download').val();
            console.log('success ' + get_down_file + ' ' + get_type_file + ' ' + get_id_tree);
            $.ajax({
                type: "GET",
                url: "get_download_file",
                data: {type: get_type_file, idTree: get_id_tree, fileTree: get_down_file},
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $('#modalFillIn').modal('hide');
                    $('#test_download').append(
                        '<tr>' +
                        '<td>' + data.tanggal + ' ' + data.time + '</td>' +
                        '<td>' + data.user[0].name + '</td>' +
                        '<td>' + data.file[0].title + '</td>' +
                        '</tr>'
                    );
                    // window.location.reload();
                }
            });
        });

        $('input[id=upload]').on('click', function () {
            $('input[id=file_name]').attr('disabled', false);
            $('button[id=create]').attr('disabled', false);
        });

        $('input[id=folder]').on('click', function () {
            $('input[id=file_name]').attr('disabled', true);
            $('button[id=create]').attr('disabled', false);
        });

        $('#pdf').on('click', function () {
            var drag_tree = $('#drag-tree');

            var bulan = drag_tree.find('ul > li .dynatree-selected .dynatree-title .file_tree');
            var type_tree = drag_tree.find('ul > li .dynatree-selected .dynatree-title .type_tree');
            var type_file = drag_tree.find('ul > li .dynatree-selected .dynatree-title .type_file');

            if (type_tree.text() == 'children') {
                window.location.href = 'get_pdf/' + type_file.text() + '/' + bulan.text();
            } else {
                alert('tolong pilih salah satu dengan jenis file')
            }
        });

        $("#drag-tree").dynatree({
            checkbox: true,
            fx: {
                height: "toggle",
                duration: 200
            }, //Slide down animation
            dnd: {
                preventVoidMoves: true, // Prevent dropping nodes 'before self', etc.
                onDragStart: function (node) {
                    /** This function MUST be defined to enable dragging for the tree.
                     *  Return false to cancel dragging of node.
                     */
                    return true;
                },
                onDragEnter: function (node, sourceNode) {
                    /** sourceNode may be null for non-dynatree droppables.
                     *  Return false to disallow dropping on node. In this case
                     *  onDragOver and onDragLeave are not called.*  Return 'over', 'before, or 'after' to force a hitMode.
                     *  Return ['before', 'after'] to restrict available hitModes.
                     *  Any other return value will calc the hitMode from the cursor position.
                     */
                    // Prevent dropping a parent below another parent (only sort
                    // nodes under the same parent)
                    if (node.parent !== sourceNode.parent) {
                        return false;
                    }
                    // Don't allow dropping *over* a node (would create a child)
                    return ["before", "after"];
                },
                onDrop: function (node, sourceNode, hitMode, ui, draggable) {
                    /** This function MUST be defined to enable dropping of items on
                     *  the tree.
                     */
                    sourceNode.move(node, hitMode);
                }
            }
        });
    });
})(window.jQuery);