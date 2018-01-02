(function ($) {

    $(document).ready(function () {
        tinymce.init({
            selector: 'div.editable',
            inline: true,
            toolbar: 'bold italic underline',
            menubar: false
        });

        function get_notes() {
            $.ajax({
                type: "GET",
                url: "get_notes",
                dataType: "json",
                success: function (data) {
                    var view_notes = $('#view_notes');
                    for (var i = 0; i < data['notes'].length; i++) {
                        if (data['notes'][i].status == 1) {
                            view_notes.append(
                                '<li data-noteid="' + i + '">' +
                                '<div class="left">' +
                                '<div class="checkbox no-margin">' +
                                '<button style="margin-top: -25px;" type="button" name="check_notes" class="btn btn-xs _select_delete" value="' + data.notes[i].id_notes + '">Delete</button> &nbsp;' +
                                '</div>' +
                                '<div style="margin-top: -13px;" class="note-preview note-prev">' +
                                data.notes[i].notes +
                                '</div>' +
                                '</div>' +
                                '<div class="right pull-right">' +
                                '<span class="date check_hide">' + data.notes[i].tanggal + '</span>' +
                                '<a class="check_hide" href="test" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>' +
                                '</div>' +
                                '</li>'
                            );
                        }
                    }

                    $('#tanggal_view').append(
                        '<span>' + data.time + '</span>'
                    );

                    view_notes.on('click', 'li', function () {
                        $('#_save').addClass('hide').removeClass('active');

                        var button = $('#button_edit');
                        var select_delete = $(this).find('._select_delete').val();

                        button.removeClass('hide');
                        button.val(select_delete);
                        $('#_edit').removeClass('hide');
                    });

                    $('#close-note-link').click(function () {
                        $('#_save').addClass('hide');
                        $('#_edit').addClass('hide');
                    });

                    $('#create_notes').click(function () {
                        $('#_save').removeClass('hide');
                        $('._button_edit').addClass('hide');
                    });

                }
            });
        }

        get_notes();

        $('#quick-note').on('click', 'ul  #_edit', function () {
            $('#_edit').addClass('hide');
            $.ajax({
                type: "GET",
                url: "edit_notes",
                data: {id: $('#button_edit').val(), notes: $('#notes').html()},
                dataType: "json",
                success: function (data) {
                    $('#notes').html('');
                    var view_notes = $('#view_notes');
                    view_notes.html('');
                    for (var i = 0; i < data['notes'].length; i++) {
                        if (data['notes'][i].status == 1) {
                            view_notes.append(
                                '<li data-noteid="' + i + '">' +
                                '<div class="left">' +
                                '<div class="checkbox check-warning no-margin">' +
                                '<button type="button" name="check_notes" class="btn btn-xs _select_delete" value="' + data.notes[i].id_notes + '">Delete</button> &nbsp;' +
                                '</div>' +
                                '<div class="note-preview note-prev">' +
                                data.notes[i].notes +
                                '</div>' +
                                '</div>' +
                                '<div class="right pull-right">' +
                                '<span class="date check_hide">' + data.notes[i].tanggal + '</span>' +
                                '<a class="check_hide" href="test" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>' +
                                '</div>' +
                                '</li>'
                            );
                        }
                    }

                }
            });
        });


        $("#view_notes").on('click', 'li ._select_delete', function (e) {
            e.preventDefault();
            var data = $(this, 'li').val();
            $(this).parents('li').remove();
            $.ajax({
                type: 'GET',
                url: "delete_notes",
                data: {data: data},
                dataType: "json",
                success: function (data) {
                    // console.log(data);
                }
            });
        });

        $('.delete-note-link').click(function () {
                $('.check_hide').toggleClass('hide');
        });

        $('#_save').click(function () {
            var notes = $('#notes').html();
            $.ajax({
                type: "GET",
                url: "create_notes",
                data: {notes: notes},
                dataType: "json",
                success: function (data) {
                    // console.log(data);
                    $('#notes').html('');
                }
            });
        });

    });

})(window.jQuery);