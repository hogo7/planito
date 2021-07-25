
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;right:0;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>
  
  
    <button class="w3-button w3-teal w3-xlarge w3-right w3-hide-large" onclick="w3_open()">&#9776;</button>
    <script>
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
        }
        
        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
        }
        </script>
             