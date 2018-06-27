<?php
	$title = "Title";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			TITLE
		</div>
		<div class="card-body">
			This is body
		</div>

			<div class="tab">
  <a href="#" class="tablinks" onclick="openCity(event, 'London')">London</a>
  <a href="#" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a>
  <a href="#" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
	 var tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

	</div>
</div>

<?php include 'partial_lower.php'; ?>