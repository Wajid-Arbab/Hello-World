<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
							<?php if(isset($msg) && $msg != ""){?>
								<p class="login-box-msg text-danger"><?php echo $msg;?></p>
							<?php } ?>

								<!-- Form -->
								<form action = "/login/process" method="post">
									<div class="form-group">
										<input type="email"  name="email" class="form-control" checked placeholder="Your Email*">
									</div>
									<div class="form-group">
										<input type="password" name="password"  class="form-control" placeholder="Your Password" checked>
									</div>
									
										 <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
									
								</form>
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<div class="text-center dont-have">Don't have an account? <a href="/register/index">Register</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>