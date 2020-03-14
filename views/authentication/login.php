<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$this->title; ?></title>
    <link rel="stylesheet" href="<?=url;?>ui/css/login.css">
  </head>
  <body>
    <div class="tile">
    <div class="tile-header">
      <h2 style="color: white; opacity: .75; font-size: 4rem; display: flex; justify-content: center; align-items: center; height: 100%;">SIGN IN</h2>
    </div>

    <div class="tile-body">
      <form id="form" action="<?=url;?>authentication/loginSubmit" method="post">
        <label class="form-input">
          <i class="material-icons">person</i>
          <input type="text" autofocus="true" required />
          <span class="label">Username</span>
          <span class="underline"></span>
        </label>

        <label class="form-input">
          <i class="material-icons">lock</i>
          <input type="hidden" name="action" value="login">
          <input type="password" required />
          <span class="label">Password</span>
          <div class="underline"></div>
        </label>

        <div class="submit-container clearfix" style="margin-top: 2rem;">
          <div id="submit" role="button" type="button" class="btn btn-irenic float-right" tabindex="0">
            <span> <input type="submit" name="" value="SIGN IN"> </span>
          </div>

          <div class="login-pending">
            <div class=spinner>
              <span class="dot1"></span>
              <span class="dot2"></span>
            </div>

            <div class="login-granted-content">
              <i class="material-icons">done</i>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
