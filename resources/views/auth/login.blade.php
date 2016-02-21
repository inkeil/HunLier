
<div ng-controller="LoginController">
    <div class="login-form padding20 block-shadow">
        <form role="form" method="POST" name="loginForm" ng-submit="submitForm(loginForm.$valid)" novalidate>
            <h1 class="text-light text-center">登录婚礼儿</h1>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">用户邮箱:</label>
                <input type="text"  ng-model="email" name="email" id="user_email" required>
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">用户密码:</label>
                <input type="password" ng-model="password"  name="password"  id="user_password" required>
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary" ng-disabled="loginForm.$invalid">登录</button>
                <button type="button" class="button link">Cancel</button>
            </div>
        </form>
    </div>
</div>
