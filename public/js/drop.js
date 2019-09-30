function drop_link(data){
  event = data[0];
  ui = data[1];
  drop = data[2];
  positionTop = ui.position.top - drop.offset().top;
  positionLeft = ui.position.left - drop.offset().left;

  drop.children('.container').append(DropLinkAddHtmlToArea(positionTop, positionLeft));
}

function DropLinkAddHtmlToArea(positionTop, positionLeft){
  $html = '<div class="absolute item" style="top: ' + positionTop + 'px; left: ' + positionLeft + 'px">'
        + '<div class="container relative">'
        + '<div class="description">Liên kết đã được nhấp vào</div>'
        + '</div>'
        + '</div>';
  $result = $($html).find('.container').append(AddDotInAndOut()).parent();
  DragDropAfterRender($result);
  return $result;
}

function DragDropAfterRender($object){
  $object.draggable(
    {
      cancel : 'img'
    },

  );



}


function AddDotInAndOut(){
  $html = '<div class="in">'
        + '<div class="dot"><img src="icon/dot-and-circle.svg" /></div>'
        + '</div>'
        + '<div class="out flex absolute">'
        + '<div class="dot left"><img src="icon/success.svg" /></div>'
        + '<div class="dot right"><img id="hihi" src="icon/loschen.svg" /></div>'
        + '</div>';
  return $html;
}
