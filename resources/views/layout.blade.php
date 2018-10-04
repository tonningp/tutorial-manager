<!DOCTYPE html>
<html>
<head>
  <title>CIS137 Tutorials</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  .w3-theme {color:#fff !important;background-color:#004d33 !important}
  .w3-btn {background-color:#004d33;margin-bottom:4px}
  .w3-code{border-left:4px solid  #004d33}
  .myMenu {margin-bottom:150px}
  </style>
  <link rel="stylesheet" href="/js/highlight/styles/{{ $theme }}.css">
  <script src="/js/highlight.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</head>

<body>

<!-- Top -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-large" style="z-index:4;">
    <a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">☰</a>
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuTut')">TUTORIALS</a>
   <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuRef')">REFERENCES</a>
  </div>
</div>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-collapse w3-animate-left" style="z-index:3;width:270px" id="mySidebar">
  <div class="w3-bar w3-hide-large w3-large">
    <a href="javascript:void(0)" onclick="w3_show_nav('menuTut')" class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">Tutorials</a>
    <a href="javascript:void(0)" onclick="w3_show_nav('menuRef')" class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">References</a>
  </div>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-right w3-xlarge w3-hide-large" title="Close Menu">×</a>
  <div id="menuTut" class="myMenu">
  <div class="w3-container">
    <h3>Tutorials</h3>
  </div>
  <a class="w3-bar-item w3-button" href="learn-html">Learn HTML</a>
  <a class="w3-bar-item w3-button" href="learn-css">Learn CSS</a>
  <a class="w3-bar-item w3-button" href="learn-colors">Learn Colors</a>
  </div>
  <div id="menuRef" class="myMenu" style="display:none">
  <div class="w3-container">
    <h3>References</h3>
  </div>
  <a class="w3-bar-item w3-button" href='https://www.w3schools.com/tags/default.asp'>HTML Tag Reference</a>
  <a class="w3-bar-item w3-button" href='https://www.w3schools.com/colors/default.asp'>HTML Color Reference</a>
  <a class="w3-bar-item w3-button" href='https://www.w3schools.com/cssref/default.asp'>CSS Reference</a>
  <a class="w3-bar-item w3-button" href='https://www.w3schools.com/cssref/css_selectors.asp'>CSS Selector Reference</a>
  </div>
</div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
  @yield('content')



<footer class="w3-panel w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity">
  <p><nav>
  <a href="https://boss.vvc.edu/cisclass" target="_blank">Boss.vvc.edu</a> |
  <a href="about.html" target="_top">ABOUT</a>
  </nav></p>
</footer>

<!-- END MAIN -->
</div>

<script>
// Script to open and close the sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
function w3_show_nav(name) {
    document.getElementById("menuTut").style.display = "none";
    document.getElementById("menuRef").style.display = "none";
    document.getElementById(name).style.display = "block";
    w3_open();
}

var decodeEntities = (function() {
  // this prevents any overhead from creating the object each time
  var element = document.createElement('div');

  function decodeHTMLEntities (str) {
    if(str && typeof str === 'string') {
      // strip script/html tags
      str = str.replace(/<script[^>]*>([\S\s]*?)<\/script>/gmi, '');
      str = str.replace(/<\/?\w(?:[^"'>]|"[^"]*"|'[^']*')*>/gmi, '');
      element.innerHTML = str;
      str = element.textContent;
      element.textContent = '';
    }

    return str;
  }

  return decodeHTMLEntities;
})();

function copy_to_clipboard(containerid) {
  function listener(e) 
  {
      e.preventDefault();
      var clipboardData = e.clipboardData || window.clipboardData;
      var el = document.getElementById(containerid);
      var str = decodeEntities(el.innerHTML);
      clipboardData.setData("text/plain", str.trim());
      alert('Code Copied');
  }
  document.addEventListener("copy",listener);
  document.execCommand("copy");
  document.removeEventListener("copy",listener);

}

</script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script> w3CodeColor(); </script>
</body>
</html>
