{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Quên mật khẩu</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">
	<form id="frmRegister" name="frmRegister" onsubmit="return checkForm();" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/index/doforgetpassword">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Quên mật khẩu</h4>
			<div class="inTabNewsH">
			<div class="padT10">
			<table cellpadding="6" cellspacing="0" border="0">
				<tr>
					<td width="180px" valign="top" align="right">Email đăng ký<span class="red">*</span></td>
					<td>
						<input type="text" class="userInput" id="pemail" name="pemail" value="" />
						<div class="error" id="idErrorEmail1" style="display:none;">{$t->_('msg_required_email')}</div>
						<div class="error" id="idErrorEmail2" style="display:none;">{$t->_('msg_invalid_email')}</div>
						<div class="error" id="idErrorEmail3" style="display:none;">{$t->_('msg_unregistered_email')}</div>
					</td>
				</tr>				
				<tr>
					<td valign="top" align="right">&nbsp;</td>
					<td valign="top">
						<input type="submit" style="float:left;margin-left:5px;" class="bntLogin" value="Gửi" />
						<span id="idLoading" style="float:left;margin-left:5px;display:none;"><img src="images/loading.gif" /></span>
					</td>
				</tr>
			</table>
			</div>
			<div class="space"></div>			
			</div>
		</div>
	</form>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}