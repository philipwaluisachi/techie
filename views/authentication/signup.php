<h2>Signup</h2>
<div class="container">
  <form action="<?=url;?>authentication/submit?action=signup" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="firstName" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="lastName" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" name="email" placeholder="E-mail" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Password</label>
      <input type="password" class="form-control" id="validationDefault01" placeholder="Password" name="password" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Confirm Password</label>
      <input type="password" class="form-control" id="validationDefault02" placeholder="Confirm Password" name="confirmpassword" required>
    </div>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="checkbox" type="checkbox" value="1" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
