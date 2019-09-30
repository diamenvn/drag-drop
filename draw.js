class DrawLine {
  constructor(start, acceptEnd) {
    this.selected = null;
    this.createSvg = null;
    this.start = start;
    this.end = acceptEnd;
  }

  start() {
    $(this.start).mousedown(function(event){
      if (!!this.selected){
      	this.drawLinePath([$firstX, $firstY, $(this).offset().left, $(this).offset().top]);
        $createSvg = null;
        selected = null;
        return;
      }

    	this.selected = $(this);
    	this.createSvg = this.CreateSVG();
      $firstX = selected.offset().left;
      $firstY = selected.offset().top;

      $(document).mousemove(function(event){
        if (!!this.selected) {
        	this.drawLinePath([$firstX, $firstY, event.pageX, event.pageY]);
        }
      });


    });
  }

  drawLinePath($option){
	   var dStrLeft =
        "M" +
        ($option[0]) + "," + ($option[1]) + " " +
        "C" +
        ($option[0] - 100) + "," + ($option[1]) + " " +
        ($option[2] - 100) + "," + ($option[3]) + " " +
        ($option[2]) + "," + ($option[3]);
        $(this.createSvg).find('path').attr('d', dStrLeft);
    }

    CreateSVG() {
    	var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      svg.appendChild(createline(0,0,1900,800,'green', 2));
      var svgContainer = document.getElementById("svgContainer");
      svgContainer.appendChild(svg);
      return svg;
    }

    Createline(x1, y1, x2, y2, color, w) {
    	var aLine = document.createElementNS('http://www.w3.org/2000/svg', 'path');
     	return this.CreateParentLine(aLine, w, color);
    }

    CreateParentLine(line, strokeWidth, color){
      var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
      g.setAttribute('fill', 'none');
      g.setAttribute('stroke', color);
      g.setAttribute('stroke-width', strokeWidth);
      g.appendChild(line);
      return g;
    }
}
