
<div ng-controller="InfoController">
	<div class="grid padding5">
		<div class="row cells12">
		
			<div class="cell colspan3 bg-white">
				<div class="panel alert">
					<div class="heading">
						<span class="title">空间管理</span>
					</div>
					<div class="content padding10 bg-white">
						<div class="listview">
							<div class="list">
								<span class="list-title"><a href="/#/u/123123/settings/inbox">查看私信</a></span>
							</div>
							<div class="list">
								<span class="list-title"><a href="/#/u/123123/settings/info">修改资料</a></span>
							</div>
							<div class="list">
								<span class="list-title"><a href="/#/u/123123/settings/portrait">修改头像</a></span>
							</div>
							<div class="list">
								<span class="list-title"><a href="/#/u/123123/settings/password">修改密码</a></span>
							</div>
							<div class="list">
								<span class="list-title"><a href="/#/u/123123/settings/account">账号绑定</a></span>
							</div>
							<div class="list">
								<span class="list-title"><a href="/#/u/123123/settings/email">登录邮箱</a></span>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--middle-->
			<div class="cell colspan9 bg-white">
				<div class="panel alert">
					<div class="heading">
						<span class="title">空间管理</span>
					</div>
					<div class="content padding10 bg-white">
						<div data-save-state="true" data-role="tabcontrol" class="tabcontrol">
							<ul class="tabs">
								<li class="active"><a href="#11"><span class="rounded">基本信息</span></a></li>
								<li class=""><a href="#22"><span class="rounded">联系信息</span></a></li>
								<li class=""><a href="#33"><span class="rounded">职业技能</span></a></li>
							</ul>
							<div class="frames">
								<div id="11" class="frame fg-white" style="display: block;">
									<form method="POST" action="/action/profile/update_basic_info" class="AutoCommitJSONForm" id="BasicForm" style="display: block;">
									<table>
										<tbody><tr>
											<th>登录帐号</th>		
											<td>
												38694102@qq.com
															<a  class="fg-darkGreen" href="http://my.oschina.net/u/1170733/admin/change-email">更改邮箱地址</a>
											</td>
										</tr>
										<tr>
											<th>昵称</th>		
											<td>
												<div class="input-control text full-size">
													<input type="text" value="砂锅居士" maxlength="16" size="20" name="name"/>
												</div>
											</td>
										</tr>
										<tr>
											<th>性别</th>		
											<td>
												<label class="input-control radio small-check">
													<input type="radio" name="sex" value="1"/>
													<span class="check"></span>
													<span class="caption">男</span>
												</label>
												<label class="input-control radio small-check">
													<input type="radio" name="sex" value="0"/>
													<span class="check"></span>
													<span class="caption">女</span>
													<span class="caption">注册后不允许修改性别</span>
												</label>
											</td>	
										</tr>
										<tr>
											<th>出生年月</th>		
											<td>
												<div class="input-control select small-select">
													<select name="y">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</div>
												年
												<div class="input-control select small-select">
													<select name="m">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</div>
												月	
												<div class="input-control select small-select">
													<select name="d">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</div>
												日
											</td>	
										</tr>
										<tr>
											<th>居住地区</th>		
											<td>
												<div class="input-control select small-select">
													<select name="m">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</div>
												省
												<div class="input-control select small-select">
													<select name="d">
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</div>
												市
											</td>
										</tr>
										<tr>
											<th>个性签名<br>不超过100字</th>		
											<td>
												<div  class="input-control textarea full-size" data-text-auto-resize="true" data-role="input">
													<textarea></textarea>
												</div>
											</td>    		
										</tr>
										<tr>
											<th></th>		
											<td>
												<label class="input-control checkbox small-check">
													<input type="checkbox" checked="">
													<span class="check"></span>
													<span class="caption">邮件订阅每周精粹</span>
												</label>
											</td>    		
										</tr>
										<tr>
											<th></th>		
											<td>
												<label class="input-control checkbox small-check">
													<input type="checkbox" checked="">
													<span class="check"></span>
													<span class="caption">有回复或者关注软件的新闻发布时邮件提醒我</span>
												</label>
											</td>    		
										</tr>
										<tr><th colspan="2"></th></tr>
										<tr class="submit">
											<th></th>
											<td><input type="submit" class="button success" value="保存修改"></td>
										</tr>
									</tbody></table>
									</form>	
								</div>
								<div id="22" class="frame fg-white" style="display: none;">
									<form  method="POST" action="/action/profile/update_contact_info" id="ContactForm">
										<table>
											
											<tbody><tr>
												<th>联系电话</th>		
												<td>
													<div class="input-control text full-size">
														<input type="text" class="TEXT" value="" size="20" name="tel">&nbsp;&nbsp;
													</div>		
													<label class="input-control checkbox small-check">
														<input type="checkbox" checked="">
														<span class="check"></span>
														<span class="caption">对外公开</span>
													</label>
												</td>    		
											</tr>
											<tr>
												<th>邮箱地址</th>
												<td>
													<div class="input-control text full-size">
													<input type="text" class="TEXT" size="40" value="" name="email" id="f_email">&nbsp;&nbsp;
													</div>	
													<label class="input-control checkbox small-check">
														<input type="checkbox" checked="">
														<span class="check"></span>
														<span class="caption">对外公开</span>
													</label>
													<a  class="fg-darkGreen" onclick="javascript:$('#f_email').val('38694102@qq.com');$('#f_msn').focus();" href="javascript:;">使用跟帐号相同Email地址</a>
												</td>		
											</tr>
											<tr>
												<th>微博</th>		
												<td>
													<div class="input-control text full-size">
														<input type="text" value="" class="TEXT" size="40" name="msn" id="f_msn">
													</div>
												</td>    		
											</tr>
											<tr>
												<th>QQ</th>		
												<td>
													<div class="input-control text full-size">
														<input type="text" value="" class="TEXT" size="20" name="qq">
													</div>
												</td>    		
											</tr>
											<tr>
												<th>我的其它网站</th>
												<td>
												<div class="input-control text full-size">
													<input type="text" value="" class="TEXT" size="40" name="website">   		
												</div>
												</td> 
											</tr>
											<tr><th colspan="2"></th></tr>
											<tr class="submit">
												<th></th>	
												<td>
												<input type="submit" class="button success" value="保存修改">
												<input type="reset" class="button">
												</td>
											</tr>
										</tbody></table>
										</form>	
								</div>
								<div id="33" class="frame fg-white" style="display: none;">
								
									<div class="FormSection">
										<strong>我是一名：</strong>
										<select name="job" id="resume_industry">
											<option selected="" value="1">程序员 </option>
											<option value="2">高级程序员 </option>
											<option value="3">技术主管 </option>
											<option value="4">项目经理 </option>
											<option value="5">产品经理 </option>
											<option value="6">网页/平面设计</option>
											<option value="7">架构师 </option>
											<option value="8">部门经理 </option>
											<option value="9">QA/测试工程师</option>
											<option value="10">系统管理员 </option>
											<option value="11">数据库管理员 </option>
											<option value="12">售前工程师</option>
											<option value="13">个人站长 </option>
											<option value="14">CTO(技术副总裁)</option>
											<option value="15">人事招聘</option>
											<option value="18">CEO</option>
											<option value="0">其它</option>
										</select>
										<strong>工作年限：</strong>
										<select name="work_years" id="resume_workyear">
											<option value="100">在读学生</option>
											<option value="101">应届毕业生</option>
											<option value="1">1年以上</option>
											<option selected="" value="2">2年以上</option>
											<option value="3">3年以上</option>
											<option value="5">5年以上</option>
											<option value="10">10年以上</option>
										</select>
									</div>
									
									
									<div class="FormSection Fields">
										<strong>专长的领域：（最多选3个）</strong>
										<ul style="overflow:hidden;">
											<li>			<input type="checkbox" checked="" value="1" name="field" id="cb_field_1">
												<label class="SELECTED" for="cb_field_1">WEB开发</label>
											</li>
											<li>			<input type="checkbox" value="2" name="field" id="cb_field_2">
												<label for="cb_field_2">游戏开发</label>
											</li>
													<li>			<input type="checkbox" value="3" name="field" id="cb_field_3">
												<label for="cb_field_3">手机软件开发</label>
											</li>
													<li>			<input type="checkbox" value="4" name="field" id="cb_field_4">
												<label for="cb_field_4">桌面软件开发</label>
											</li>
													<li>			<input type="checkbox" value="5" name="field" id="cb_field_5">
												<label for="cb_field_5">服务器端开发</label>
											</li>
													<li>			<input type="checkbox" value="6" name="field" id="cb_field_6">
												<label for="cb_field_6">网页设计/UI/UED</label>
											</li>
													<li>			<input type="checkbox" value="7" name="field" id="cb_field_7">
												<label for="cb_field_7">软件测试/QA</label>
											</li>
													<li>			<input type="checkbox" value="8" name="field" id="cb_field_8">
												<label for="cb_field_8">软件开发管理</label>
											</li>
													<li>			<input type="checkbox" value="9" name="field" id="cb_field_9">
												<label for="cb_field_9">运维/系统/网络管理</label>
											</li>
													<li>			<input type="checkbox" value="10" name="field" id="cb_field_10">
												<label for="cb_field_10">DBA/数据库</label>
											</li>
													<li>			<input type="checkbox" value="11" name="field" id="cb_field_11">
												<label for="cb_field_11">网站运营/站长</label>
											</li>
													<li>			<input type="checkbox" value="12" name="field" id="cb_field_12">
												<label for="cb_field_12">人事招聘</label>
											</li>
													<li>			<input type="checkbox" value="13" name="field" id="cb_field_13">
												<label for="cb_field_13">CTO/CEO/CXO</label>
											</li>
													<li>
												<input type="checkbox" value="0" name="field" id="cb_field_0">
												<label for="cb_field_0">其它领域</label>
											</li>
										</ul>
									</div>
									
									<div class="submit">
										<input type="submit" class="button success" value="保存修改">
										<input type="reset" class="button">
									</div>
									
									
								</div>
							</div>
						</div>	
				</div>
				</div>
			</div>
			<!--right-->

			
		</div>
	</div>
</div>							 