function stateValue(str) {
  if (str == "") {
    document.getElementById("city").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("city").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","stateinfo.php?s="+str,true);
    xmlhttp.send();
  }
}