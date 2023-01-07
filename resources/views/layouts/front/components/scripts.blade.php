

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
      var plus = document.getElementsByClassName("plus")
      var minus = document.getElementsByClassName("minus")
      var num = document.querySelector(".num")

      for (var i = 0;i < plus.length;i++)
      { 
        plus[i].addEventListener("click", function() {
          var buttonClicked = event.target;
          var input = buttonClicked.parentElement.children[1];
          var inputValue = parseInt(input.value);
          input.value = inputValue + 1
        })
      }

      for (var i = 0;i < minus.length;i++)
      { 
        minus[i].addEventListener("click", function() {
          var buttonClicked = event.target;
          var input = buttonClicked.parentElement.children[1];
          var inputValue = parseInt(input.value);
          console.log(inputValue)
          input.value = inputValue != 0 ? inputValue - 1 : 0
        })
      }
  </script>
  <script>
    filterByType('all');
    function clearFilters(){
        var cb = document.getElementsByClassName('filter');
        for(var i=0;i<cb.length;i++){
            cb[i].checked = false;
        }
        
    }

    function filterByType(id){
      var x, i
      x = document.getElementsByClassName('filterDiv')
      if( id == 'all') id = '';
      for(i=0;i<x.length;i++){
        removeClass(x[i], "show")
        if(x[i].className.indexOf(id) > -1) addClass(x[i], "show")
       }
    }

    function addClass(element, name){
      var i, arr1, arr2
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for(i=0;i<arr2.length;i++){
        if(arr1.indexOf(arr2[i]) == -1){
          element.className += " " + arr2[i];
        }
      }
    }

    function removeClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

  </script>
  <script>
    function sortPriceDec() {
      var list, i, switching, b, shouldSwitch;
      list = document.getElementById("id01");
      switching = true;
      while (switching) {
        switching = false;
        b = list.getElementsByTagName("h4");
        
        for (i = 0; i < (b.length - 1); i++) {
          shouldSwitch = false;

          if (parseInt(b[i].innerHTML.substring(2,10)) < parseInt(b[i+1].innerHTML.substring(2,10))) {

            shouldSwitch = true;
            break;
          }
        }
        if (shouldSwitch) {
          /* If a switch has been marked, make the switch
          and mark the switch as done: */
          b[i].parentNode.parentNode.parentNode.parentNode.insertBefore(b[i + 1].parentNode.parentNode.parentNode, b[i].parentNode.parentNode.parentNode);
          switching = true;
        }
      }
    }function sortPriceInc() {
      var list, i, switching, b, shouldSwitch;
      list = document.getElementById("id01");
      switching = true;
      while (switching) {
        switching = false;
        b = list.getElementsByTagName("h4");
        
        for (i = 0; i < (b.length - 1); i++) {
          shouldSwitch = false;

          if (parseInt(b[i].innerHTML.substring(2,10)) > parseInt(b[i+1].innerHTML.substring(2,10))) {

            shouldSwitch = true;
            break;
          }
        }
        if (shouldSwitch) {
          /* If a switch has been marked, make the switch
          and mark the switch as done: */
          b[i].parentNode.parentNode.parentNode.parentNode.insertBefore(b[i + 1].parentNode.parentNode.parentNode, b[i].parentNode.parentNode.parentNode);
          switching = true;
        }
      }
    }
    </script>
  <script>
    var tnc = document.getElementsByClassName("tnc")
    var body = document.getElementById("tncbodybtn")
    var side = document.getElementById("tncsidebtn")
    for (var i = 0; i < tnc.length; i++) {
      tnc[i].addEventListener('change', function(){
        if(this.checked){
          body.disabled = false
          side.disabled = false
        } else {
          body.disabled = true
          side.disabled = true
        }
      })
    }
  </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
  <script src="{{ asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>