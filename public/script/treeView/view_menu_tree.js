(function ($) {

    'use strict';

    $(document).ready(function () {

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