(function ($) {

    'use strict';

    $(document).ready(function () {

        window.Echo.channel('notes').listen('NotesEvent', function (e) {
            console.log(e.notes);
            var view_notes = $('#view_notes');
            // for (var i = 0; i <= e.notes.length; i++) {
            console.log(e.notes.status);
                if (e.notes.status == 1) {
                    view_notes.append(
                        '<li data-noteid="' + e.notes.id_notes + '">' +
                        '<div class="left">' +
                        '<div class="checkbox check-warning no-margin">' +
                        '<button type="button" name="check_notes" class="btn btn-xs _select_delete" value="' + e.notes.id_notes + '">Delete</button> &nbsp;' +
                        '</div>' +
                        '<div class="note-preview note-prev">' + e.notes.notes +
                        '<br>' +
                        '</div>' +
                        '</div>' +
                        '<div class="right pull-right">' +
                        '<span class="date check_hide">' + e.notes.tanggal + '</span>' +
                        '<a class="check_hide" href="test" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>' +
                        '</div>' +
                        '</li>'
                    );
                // }
            }
        });

    });
})(window.jQuery);
