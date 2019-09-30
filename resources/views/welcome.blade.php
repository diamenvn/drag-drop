<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://butaba.com/css/style/layout.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/polomoshnov/jQuery-UI-Resizable-Snap-extension/master/jquery.ui.resizable.snap.ext.js"></script>

    <!-- Drag & Drop -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/drop.js')}}"></script>
    <script src="https://namdev.top/js/draw.js"></script>
    <script src="https://www.cssscript.com/demo/draw-svg-paths-two-elements-leader-line/leader-line.min.js"></script>
    <title>Drag</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container w100">
        <div class="flex flex-around w100">
          <div class="editor-parent">
            <div class="editor-area">
              <div class="container" id="editor"></div>
            </div>
          </div>
          <div class="sidebar-parent-item">
            <div class="sidebar-area col-10">
              <div class="menu-tab flex flex-around">
                <div class="tab tab-add-item active">
                  THÊM YẾU TỐ
                </div>
                <div class="tab tab-add-item" aria-disable="true">
                  THUỘC TÍNH
                </div>
              </div>
              <div class="sidebar-menu-title" data-area="#menu-require">
                Điều kiện
              </div>
              <div class="area-select-menu-item area-item" id="menu-require">
                <div class="col-10 flex flex-around flex-wrap">
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-menu-title" data-area="#menu-require">
                Điều kiện
              </div>
              <div class="area-select-menu-item area-item" id="menu-require">
                <div class="col-10 flex flex-around flex-wrap">
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-menu-title" data-area="#menu-require">
                Điều kiện
              </div>
              <div class="area-select-menu-item area-item" id="menu-require">
                <div class="col-10 flex flex-around flex-wrap">
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="link" class="item">
                      Liên kết đã được nhấp vào
                    </div>
                  </div>
                  <div class="menu-item">
                    <div data-value="edit" class="item">
                      Trường tuỳ chỉnh đã được thay đổi
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
