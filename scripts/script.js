document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);

  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems);

  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems);

});

// Genadijaus
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(elems);
  
});
