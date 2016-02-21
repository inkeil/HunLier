
<div ng-controller="ProfileController">
	<div class="grid padding5">
		<div class="row cells12">
		
			<div class="cell colspan3 bg-white">
			
				<div class="ownner bg-red block-shadow padding10 fg-white text-shadow">
					<div>
					<a  class="fg-white" href="#">
						<div class="image-container bordered">
							<div class="frame">
								<img align="absmiddle" title="砂锅居士" alt="砂锅居士" src="/images/1170733_50.jpg">
							</div>
						</div>
					</a>
					</div>	
					<div class="meta-info padding5 no-padding-left">
						<a class="nickname fg-white margin5" href="#"><b>砂锅居士</b></a>
							<a href="/#/u/123/settings/info" class="fg-white margin5">修改资料</a>		
					</div>
					<div class="sate fg-white">
						<a href="#" class="fg-white margin5">关注<span>（1）</span></a>	
						<a href="#" class="fg-white margin5">粉丝<span>（1）</span></a>	
					</div>
				</div>
				
				<div class="fg-white block-shadow bg-lightBlue padding10 margin5 text-shadow no-margin-left no-margin-right">
						这个人很懒，什么都没有留下~	
				</div>
				
				<div class="fg-white block-shadow text-center bg-darkPink padding20 margin5 text-shadow no-margin-left no-margin-right">
						<a class="fg-white" href="#">发表博文</a>	
				</div>
				
				<div class="panel block-shadow margin5 text-shadow no-margin-left no-margin-right  success">
					<div class="heading clear-float">
						<span class="title place-left">关注</span>
						<span class="more place-right"><a class="fg-white" href="#">更多>></a></span>
					</div>
					<div id="fellows" class="content padding5">
						<ul class="clear-float no-margin no-padding">
							<li class="place-left padding5"><a><img src="/images/1170733_50.jpg" height="30" width="30" /></a></li>
							<li class="place-left padding5"><a><img src="/images/1170733_50.jpg" height="30" width="30" /></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="panel block-shadow margin5 text-shadow no-margin-left no-margin-right success">
					<div class="heading">
						<span class="title">粉丝</span>
						<span class="more place-right"><a class="fg-white" href="#">更多>></a></span>
					</div>
					<div id="fans" class="content padding5">
						<ul class="clear-float no-margin no-padding">
							<li class="place-left padding5"><a><img src="/images/1170733_50.jpg" height="30" width="30" /></a></li>
							<li class="place-left padding5"><a><img src="/images/1170733_50.jpg" height="30" width="30" /></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="panel block-shadow margin5 text-shadow no-margin-left no-margin-right success">
					<div class="heading">
						<span class="title">访客统计</span>
					</div>
					<div class="content padding10">
						<ul>
							<li><label>今日访问：</label>0 (<a href="http://my.oschina.net/u/1170733/visitors">最新访客»</a>)</li>
							<li><label>昨日访问：</label>2</li>
							<li><label>本周访问：</label>2</li>
							<li><label>本月访问：</label>5</li>
							<li><label>所有访问：</label>1672</li>
						</ul>
					</div>
				</div>
				
			</div>
			<!--middle-->
			<div class="cell colspan9">
				
				<div class="tweet padding10 bg-white">
					<div class="clear-float padding5">
						<span class="place-left">今天你动弹了吗？</span>
						<span class="place-right">还可以输入<b class="fg-red">160</b>字</span>					
					</div>
					<div data-text-auto-resize="true" data-role="input" class="input-control textarea full-size no-margin">
						<textarea></textarea>
					</div>
					<div class="clear-float">
						<div class="place-left tweet-opts">
						     <span>插入： <a href="#">表情</a> <a href="#">图片</a></span> 
						</div>
						<div class="place-right">
							<button class="button success text-shadow">发布</button>
						</div>
					</div>
				</div>
				
				<div class="daily padding10 bg-white margin10 no-margin-left no-margin-right">
					<div data-save-state="true" data-role="tabcontrol" class="tabcontrol">
						<ul class="tabs">
							<li class="active"><a href="#11"><span class="rounded">最新动态</span></a></li>
							<li class=""><a href="#22"><span class="rounded">讨论</span></a></li>
							<li class=""><a href="#33"><span class="rounded">博客</span></a></li>
						</ul>
						<div class="frames">
							<div id="11" class="frame fg-white" style="display: block;">
									
							</div>
							<div id="22" class="frame fg-white" style="display: none;">
									
							</div>
							<div id="33" class="frame fg-white" style="display: none;">
									
							</div>
						</div>
					</div>
				
				</div>
				
			</div>
			<!--right-->

			
		</div>
	</div>
</div>