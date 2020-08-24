<!DOCTYPE html>
<html>
    <body>
        <div class="container">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter has-text-centered" id="login-column">
                    <h1 class="title">Newletter</h1>
                    <form action = "" method = "post">
                        <div class="field">
                          <p class="control">
                            <input class="input" type="text" name="username" placeholder="Username">
                          </p>
                        </div>
                        <div class="field">
                          <p class="control">
                            <input class="input" type="password" name="password" id="password" placeholder="Password">
                          </p>
                        </div>
                        <div class="field">
                          <p class="control">
                            <input class="button is-success" type="submit" value="Submit" id="login-button">
                          </p>
                        </div>
                    </form>
                    <div id="error">
                        <?php echo $error; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>