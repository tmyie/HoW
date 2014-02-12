<?php include('header.php');?>
<?php include('nav.php');?>
<div class="container profile-page">
	<div class="profile-stats">
	<div class="col33 counter-col">
		<div class="center-container">
		<p>Entries</p>
		<div class="counter">7</div>
		<p>Following</p>
		<div class="counter">33</div>
		<p>Followers</p>
		<div class="counter">20</div>
	</div>
	</div>
	<div class="col33 user-details">
		<div class="center-container">
		<img src="images/post-avatar.jpg" alt="">
		<h1 class="name">Rick James</h1>
		<h2 class="quote">
			I don't think the internet 
			could have consciousness.”
		</h2>
		</div>
	</div>
	<div class="col33">
		<div class="center-container">
		<ol>
			<li>Robinson Crusoe</li>
			<li>Dangerous Liasons</li>
			<li>The Black Sheep</li>
		</ol>
		</div>
	</div>
</div>
	<div class="clear"></div>
	<div class="settings">
		<div class="col33 accounts-tab">Accounts</div>
		<div class="col33 notes-tab">Notes</div>
		<div class="col33 entries-tab ">Entres</div>

		<div class="clear"></div>

		<div class="settings-inside">
			<div class="col66">
				<h1>Change Public Profile</h1>
				<form action="">

					<dt><label for="">Display Name</label></dt>
					<dd><input type="text"></dd>

					<dt><label for="">Favourite book/writer/influence</label></dt>

					<dd><input type="text"></dd>
					<dd><input type="text"></dd>
					<dd><input type="text"></dd>

					<dt><label for="">Profile Picture</label></dt>
					<dd><textarea name="" id="" cols="30" rows="10" placeholder="this is a placeholder"></textarea></dd>
					<p>
						<dd><input type="submit" value="Update profile" class="update-profile-button"></p></dd>
				</form>

			</div>
			<div class="col33">
				<ul>
					<li class="red'">Change Public Profile</li>
					<li>My Orders</li>
					<li>Who I Follow</li>
					<li>Change Password</li>
					<li>Mark Entries</li>
					<li>Check Credit Balance</li>
					<li>Buy Credits</li>
					<li>Buy Credits as Gift</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end settings -->

</div>
<!-- end container -->

<?php include('footer.php')?>