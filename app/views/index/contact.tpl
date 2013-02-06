{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Liên hệ BQT</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">	
		<div class="tabNewsH">
			<h4 class="titleNewsH">Liên hệ BQT</h4>
			<div class="inTabNewsH">
				<div class="contactFrom">
				<div class="padT15 alignC">Để liên hệ trực tiếp với chúng tôi vui lòng điền thông tin dưới đây</div>
				<form id="frmContact" name="frmContact" onsubmit="return checkForm();" method="post" action="{$smarty.const.HOST}/index/docontact?ptype=1">
					<label>{$t->_('fullname')}:<span class="red">*</span></label> <input type="text" id="pfullname" name="pfullname" class="inpContact" value="{$AppUI->fullname}" /> <br />
					<label>Email:<span class="red">*</span></label> <input type="text" id="pemail" name="pemail" class="inpContact" value="{$AppUI->email}" /> <br />
					<label>{$t->_('address')}:<span class="red">*</span></label> <input type="text" id="paddress" name="paddress" class="inpContact" value="{$AppUI->address}" /> <br />
					<label>{$t->_('phone')}:</label> <input type="text" id="pphone" name="pphone" class="inpContact"  value="{$AppUI->phone}" /> <br />
					<label>{$t->_('company')}:</label> <input type="text" id="pcompany" name="pcompany" class="inpContact" value="{$AppUI->company}" /> <br />
					<label>{$t->_('content')}:<span class="red">*</span></label><textarea id="pcontent" name="pcontent" cols="" rows="" class="areaContact"></textarea> <br />
					<label>&nbsp;</label><input type="submit" class="bntSe" value="{$t->_('send')}" /><br />
					<div class="clr"></div>							
				</form>
				</div>
				<div class="space"></div>
			</div>
		</div>	
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}
{literal}
<script language="javascript">
function checkForm() {
	var msg_required_fullname="{/literal}{$t->_('msg_required_fullname')}{literal}";
	var msg_required_address="{/literal}{$t->_('msg_required_address')}{literal}";
	var msg_required_email="{/literal}{$t->_('msg_required_email')}{literal}";
	var msg_invalid_email="{/literal}{$t->_('msg_invalid_email')}{literal}";	
	var msg_required_content="{/literal}{$t->_('msg_required_content')}{literal}";
	var pfullname=jQuery.trim($('#pfullname').val());
	var paddress=jQuery.trim($('#paddress').val());
	var pemail=jQuery.trim($('#pemail').val());
	var ptitle=jQuery.trim($('#ptitle').val());
	var pcontent=jQuery.trim($('#pcontent').val());
	if (pfullname=='') {
		alert(msg_required_fullname);
		$('#pfullname').focus();
		return false;
	}
	if (pemail=='') {
		alert(msg_required_email);
		$('#pemail').focus();
		return false;
	}
	if (checkFormatEmail(pemail)==false) {
		alert(msg_invalid_email);
		$('#pemail').focus();
		return false;
	}
	if (paddress=='') {
		alert(msg_required_address);
		$('#paddress').focus();
		return false;
	}
	if (pcontent=='') {
		alert(msg_required_content);
		$('#pcontent').focus();
		return false;
	}
	return true;
}
</script>
{/literal}