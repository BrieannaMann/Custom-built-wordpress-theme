<?php
get_header();
echo "Page-Contact.php";
?>
<div class="flex">
<div>
<div class="about">
	<h1> FIND US </h1>
    <div id="map">
      <iframe width="80%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJV8QansdzhlQRatww-ihk6jo&key=AIzaSyAVbHEerVLRAURU4vv65s6FCGU1s9z5u8Y" allowfullscreen></iframe>
    </div>
    
</div>
<div class="our-story">
	<h2> We take camping supplies very seriously.
</h2>
		<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we've got your covered. Please contact us below with any questions comments or suggestions.</p>
	<h2> Send us Email!</h2>
		<form action="mailto:info@inhabitent.com" method="post" enctype="text/plain">
		Name:<br>
		<input type="text" name="name"><br>
		E-mail:<br>
		<input type="email" name="mail"><br>
        Subject:<br>
		<input type="text" value name="subject" id="form-subject"><br>
		Comment:<br>
		<input type="text" name="comment" size="50"><br><br>
		<input type="submit" value="Send">
		<input type="reset" value="Reset">
		</form>

</div>
</div>
<div class="side-bar grey-border-left">
<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer(); 
?>