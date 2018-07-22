<?php include "header.php"; ?>

  	<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-login">

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@email.com">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your Password">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Login</button>
			    </div>

			</form>
  		</div>
  	</div>


<?php include "footer.php"; ?>