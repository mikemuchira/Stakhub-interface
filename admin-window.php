    <div class="mdl-grid admin-window">
            <form method="post" action="./logic/admin-authentification.php" enctype="multipart/form-data">
             <div class="mdl-textfield mdl-js-textfield">
                 <input class="mdl-textfield__input" type="text" name="admin_identity" value="SIR STARK">
                 <label class="mdl-textfield__label" for="username">Admin Username</label>
             </div>
             <div class="mdl-textfield mdl-js-textfield">
                 <input class="mdl-textfield__input" type="password" name="admin_key">
                 <label class="mdl-textfield__label" for="password">Admin Password</label>
             </div>
             <div class="mdl-textfield mdl-js-textfield">
                 <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="admin_login" value="Admin Login">
            </div>
            </form>
     </div>