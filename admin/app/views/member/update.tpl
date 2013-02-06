{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('member')}</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_MEMBER}/save?id={$arrResult.id|intval}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px" valign="top">{$t->_('account')}</td>
		<td valign="top">
			<table style="width:600px;" cellpadding="0" cellspacing="0" border="1">
				<tr>
					<td width="150px" valign="top">(*) {$t->_('username')}</td>
					<td>
						<input style="width:440px" type="text" id="pusername" name="pusername" value="{$arrResult.username}" />
						<div id="idErrorUserName1" class="error">{$t->_('msg_required_username')}</div>
						<div id="idErrorUserName2" class="error">{$t->_('msg_invalid_username')}</div>
						<div id="idErrorUserName3" class="error">{$t->_('msg_duplicate_username')}</div>
					</td>
				</tr>
				<tr{if $arrResult} style="display:none;"{/if}>
					<td valign="top">(*) {$t->_('password')}</td>
					<td>
						<input style="width:440px" type="password" id="ppassword" name="ppassword" value="" />
						<div class="error" id="idErrorPassword1">{$t->_('msg_required_password')}</div>
						<div class="error" id="idErrorPassword2">{$t->_('msg_invalid_password')}</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td width="150px" valign="top">{$t->_('basic_info')}</td>
		<td valign="top">
			<table style="width:600px;" cellpadding="0" cellspacing="0" border="1">
				<tr>
					<td width="150px" valign="top">{$t->_('avatar')}</td>
					<td>
						<input type="file" id="fimage" name="fimage">
						<input type="hidden" id="pimage" name="pimage" value="{$arrResult.image}" />
						{if $arrResult.image}
							<br/><input type="checkbox" name="poldimage" value="{$arrResult.image}" /> {$t->_('delete')}
						{/if}
					</td>
				</tr>
				<tr>
					<td valign="top">(*) {$t->_('email')}</td>
					<td>
						<input style="width:440px" type="text" id="pemail" name="pemail" value="{$arrResult.email}" />
						<div id="idErrorEmail1" class="error">{$t->_('msg_required_email')}</div>
						<div id="idErrorEmail2" class="error">{$t->_('msg_invalid_email')}</div>
						<div id="idErrorEmail3" class="error">{$t->_('msg_duplicate_email')}</div>
					</td>
				</tr>
				<tr>
					<td valign="top">(*) {$t->_('fullname')}</td>
					<td>
						<input style="width:440px" type="text" id="pfullname" name="pfullname" value="{$arrResult.fullname}" />
						<div id="idErrorFullName" class="error">{$t->_('msg_required_fullname')}</div>							
					</td>
				</tr>
				<tr>
					<td valign="top">(*) {$t->_('address')}</td>
					<td>
						<input style="width:440px" type="text" id="paddress" name="paddress" value="{$arrResult.address}" />
						<div id="idErrorAddress" class="error">{$t->_('msg_required_address')}</div>							
					</td>
				</tr>
				<tr>
					<td valign="top">{$t->_('gender')}</td>
					<td>{select_gender item0=$t->_('select')}</td>
				</tr>
				{*
				<tr>
					<td valign="top">{$t->_('birthdate')}</td>
					<td>{text_date dname="pbirthdate" value=$arrResult.birthdate}</td>
				</tr>
				*}
				<tr>
					<td valign="top">{$t->_('phone')}</td>
					<td><input style="width:440px" type="text" id="pphone" name="pphone" value="{$arrResult.phone}" /></td>
				</tr>
				<tr>
					<td valign="top">{$t->_('mobile')}</td>
					<td><input style="width:440px" type="text" id="pmobile" name="pmobile" value="{$arrResult.mobile}" /></td>
				</tr>
				{*
				<tr>
					<td valign="top">{$t->_('nick_yahoo')}</td>
					<td>
						<input style="width:440px" type="text" id="pyahoo" name="pyahoo" value="{$arrResult.yahoo}" />
						<div class="note">Nhập địa chỉ email yahoo</div>
					</td>
				</tr>
				<tr>
					<td valign="top">{$t->_('sologan')}</td>
					<td><input style="width:440px" type="text" id="psologan" name="psologan" value="{$arrResult.sologan}" /></td>
				</tr>
				<tr>
					<td valign="top">{$t->_('introduce')}</td>
					<td><textarea style="width:442px;height:100px;" id="pcontent" name="pcontent">{$arrResult.content}</textarea></td>
				</tr>
				<tr>
					<td valign="top">{$t->_('id_image')}</td>
					<td>
						<input type="file" id="fid_image" name="fid_image">
						<input type="hidden" id="pid_image" name="pid_image" value="{$arrResult.id_image}" />
						{if $arrResult.id_image}
							<br/><input type="checkbox" name="poldid_image" value="{$arrResult.id_image}" /> {$t->_('delete')}
						{/if}
					</td>
				</tr>
				*}
			</table>
		</td>
	</tr>


	<tr>
		<td valign="top">{$t->_('bank')}</td>
		<td valign="top">
			<table style="width:600px;" cellpadding="0" cellspacing="0" border="1">
				<tr>
					<td valign="top" style="width:150px;">{$t->_('bank_name')}</td>
					<td><input style="width:440px" type="text" id="pbank_name" name="pbank_name" value="{$arrResult.bank_name}" /></td>
				</tr>
				<tr>
					<td valign="top">{$t->_('bank_account')}</td>
					<td><input style="width:440px" type="text" id="pbank_account" name="pbank_account" value="{$arrResult.bank_account}" /></td>
				</tr>
				<tr>
					<td valign="top">{$t->_('bank_number')}</td>
					<td><input style="width:440px" type="text" id="pbank_no" name="pbank_no" value="{$arrResult.pbank_no}" /></td>
				</tr>
			</table>
		</td>
	</tr>	
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
	<input type="hidden" id="puserid" value="{$arrResult.id|intval}" />
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
	<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}
{literal}<script language="javascript">
$(function() {
$("#pbirthdate").datepicker({showButtonPanel: true});
$('#pbirthdate').datepicker('option', {dateFormat: 'dd/mm/yy'});
$("#pbirthdate").datepicker({showButtonPanel: true});
$('#pbirthdate').datepicker('option', {dateFormat: 'dd/mm/yy'});
});
</script>{/literal}