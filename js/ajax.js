
export function ajaxFunct() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("top-line").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../../ajaxtest.php", true);
    xmlhttp.send();
  }