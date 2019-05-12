<div class="sidebar">
 {{-- <br> --}}
  <a class="active" href="#home">MTO</a>
  <a href="#news">PO</a>
  <a href="#contact">GRN</a>
  <button class="dropdown-btn">Dropdown &nbsp; 
      <i class="fas fa-angle-down" style="font-size:15px;"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#about">Vendor</a>
</div>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;




for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>