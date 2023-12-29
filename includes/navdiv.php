<?php # navigation bar include ?>

<div id="navDiv">
	<table cellspacing="0" cellpadding="0" id="nav1" class="dm1">
		<tr>
			<td>
				<a class="item1 left" href="/">Home</a>
			</td>
			<td>
				<a class="item1" href="services.php">Services</a>
				<div class="section">
					<a class="item1" href="one-to-one.php">One-to-one</a>
					<a class="item1" href="couples_counselling_and_couples_coaching.php">Couples</a>
					<a class="item2" href="about_counselling_and_psychotherapy.php">Counselling &amp; Psychotherapy</a>
					<a class="item2" href="about_life_coaching.php">Life Coaching</a>
				</div>
			</td>
			<td>
				<a class="item1" href="about_haran.php">About Haran</a>
			</td>
			<td>
				<a class="item1 right" href="contact.php">Contact</a>
			</td>
		</tr>
    </table>
	<script type="text/javascript">
    var dm1 = new DropMenu1('nav1');
    dm1.position.top = -1;
    dm1.init();
    </script>
</div>
