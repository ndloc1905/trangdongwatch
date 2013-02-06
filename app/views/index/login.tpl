{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Đăng nhập</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">
	<form id="frmLogin" name="frmLogin" onsubmit="return checkForm();" method="post">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Đăng nhập</h4>
			<div class="inTabNewsH">
			<div class="padT10">
			<table cellpadding="6" cellspacing="0" border="0">
				<tr>
					<td width="180px" valign="top" align="right">{$t->_('username')}<span class="red">*</span></td>
					<td><input type="text" class="userInput" id="ploginusername2" name="ploginusername2" value="{$arrRemember.0}"></td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('password')}<span class="red">*</span></td>
					<td><input type="password" id="ploginpassword2" name="ploginpassword2" value="{$arrRemember.1}"></td>
				</tr>
				<tr>
					<td valign="top" align="right"></td>
					<td>
						<input type="checkbox" id="premember2" name="premember2" value="1" checked="checked"> <label for="premember2">Lưu mật khẩu</label>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">&nbsp;</td>
					<td valign="top">
						<input type="hidden" id="ptourl" name="ptourl" value="{$strToUrl|base64d}" />
						<input type="button" onclick="doLogin2();" class="bntLogin" value="Đăng nhập" />
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