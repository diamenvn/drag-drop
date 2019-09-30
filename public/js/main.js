function NewDragable(){
  $allParentItem = $('.area-item').find('.item');
  for (i = 0; i < $allParentItem.length; i++) { // Next search
    AddDraggable($allParentItem[i]);
  }
}

function AddDraggable(element){
  $(element).draggable({
    accept: function(d) {
      if (d.hasClass("editor-area")) {
        return true;
      }
    },
    helper: "clone"
  });
  Droppable();
}

function Droppable() {
  $(".editor-area").droppable({
    classes: {
      "ui-droppable-hover": "highlight"
    },
    drop: function(event, ui) {
      CallBackDroppable(event, ui, $(this));
    }
  });
}

function CallBackDroppable(event, ui, object) {
  fnName = 'drop_' + ui.draggable.attr('data-value');
  data = [event, ui, object];
  try {
    this[fnName](data);
  } catch (e) {console.log(e)}
}

$(function(){
  $line = new DrawLine($('#editor'), 'img', '');
  $line.start();
  NewDragable();
});
