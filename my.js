var myPath;
var path;
var pen_color ='#000000';
var pen_size = 1;


function onMouseDown(event) {
    // If we produced a path before, deselect it:
    if (path) {
        path.selected = false;
    }
    // Create a new path and set its stroke color to black:
    path = new Path({
        strokeColor: pen_color,
        strokeWidth: pen_size,
    });
}



function onMouseDrag(event) {
    path.add(event.point);
}

function onMouseUp(event) {

    // When the mouse is released, simplify it:
    path.simplify(10);

    // Select the path, so we can see its segments:
    //path.fullySelected = true;

}
