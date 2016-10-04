		<div class="container">
			<form action="mail.php" method="POST">
				<div class="top-section">
					<h3>Register Your Team</h3>
					<div class="form-group clearfix" style="width:~'calc(50% - 20px)';">
						<input type="text" name="team_name" required>
						<label for="team-name">Team Name</label>
					</div>
					<div id="dynamicInput">
					  	<div class="form-group clearfix">
							<input type="text" name="player_1" required>
								<button class="btn add-more" type="button" onClick="addInput('dynamicInput');">+</button>
							<label for="player_1"> Player 1 </label>
						</div>
							<div class="form-group clearfix">
							<input type="text" name="player_2" required>
								<button class="btn add-more" type="button" onClick="addInput('dynamicInput');">+</button>
							<label for="player_2"> Player 2 </label>
						</div>
							<div class="form-group clearfix">
							<input type="text" name="player_3" required>
								<button class="btn add-more" type="button" onClick="addInput('dynamicInput');">+</button>
							<label for="player_3"> Player 3 </label>
						</div>
					</div>
				</div>
				<div class="bottom-section">
					<h3>Point of Contact</h3>
					<div class="form-group clearfix">
						<input type="text" name="contact_name" required>
						<label for="contact_name">Name</label>
					</div>
					<div class="form-group clearfix">
						<input type="number" name="phone_number" required>
						<label for="phone_number">Phone Number</label> 
					</div>
					<div class="form-group clearfix">
						<input type="email" name="email" required>
						<label for="email">Email</label>
					</div>
				</div>

				<br />
				
				<input type="submit" value="Send"><input type="reset" value="Clear">
			</form>
		</div>
</div>
<script type="text/javascript">
var counter = 3;
var limit = 5;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " players");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.className = "form-group";
          newdiv.innerHTML = "<input type='text' name='player_" + (counter + 1) + "' required><button class='btn add-more' type='button' onClick='addInput(\"dynamicInput\"\);'>+</button><label for='player_" + (counter + 1) + "'> Player " + (counter + 1) + "</label>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}

</script>
