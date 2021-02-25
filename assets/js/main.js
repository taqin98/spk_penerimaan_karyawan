document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'complete') {
     document.getElementById('interactive');
     $('#loader').hide();
   }
 }