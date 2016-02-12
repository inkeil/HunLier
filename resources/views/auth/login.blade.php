
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" name="loginForm" ng-submit="submitForm(loginForm.$valid)" novalidate>
                        {!! csrf_field() !!}

                        <div class="form-group" ng-class="{'form-group has-error': error_email}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" ng-model="email" name="email" required>
                                    <span class="help-block" ng-show="loginForm.email.$error.required">
                                        <strong>邮箱是必须的</strong>
                                    </span>
									<span class="help-block" ng-show="loginForm.email.$error.email">
                                        <strong>非法的邮箱</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group" ng-class="{'form-group has-error': error_password}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" ng-model="password" class="form-control" name="password" required>
                                    <span class="help-block" ng-show="loginForm.password.$error.required">
                                        <strong>密码是必须的</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" ng-model="remember" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" ng-disabled="loginForm.$invalid">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/#/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
