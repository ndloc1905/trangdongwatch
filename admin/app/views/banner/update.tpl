{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Banner</h3>
<form method="POST" onsubmit="return checkForm();" enctype="multipart/form-data" action="{$smarty.const.HOST_BANNER}/save?id={$arrResult.id}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="200" valign="top">(*) {$t->_('page')}</td>
		<td>
			<div style="float:left;width:600px;">
			<table style="width:580px" cellpadding="0" cellspacing="0" border="0">
			<tr><td><input value="0" type="checkbox" onclick="checkAll('pageid[]', this.checked ? 1 : 0)" /> {$t->_('all')}</td></tr>
			{foreach from=$arrPage item=row key=i}
				<tr><td><input type="checkbox" name="pageid[]" value="{$row.id}" {if $row.id==$row.pageid}checked="checked"{/if} /> {if $l=='vi'}{$row.name_vi}{else}{$row.name_en}{/if}</td></tr>
			{/foreach}
			</table>
			</div>
			<div class="clr"></div>
			<div id="idErrorPage" class="error">Vui lòng chọn trang đặt Banner.</div>
		</td>
	</tr>
	<tr>
		<td>(*) {$t->_('name')}</td>
		<td>
			<input style="width:600px" type="text" id="pname" name="pname" value="{$arrResult.name}" />
			<div class="clr"></div>
			<div id="idErrorName" class="error">Vui lòng nhập tên Banner.</div>
		</td>
	</tr>
	<tr>
		<td>(*) {$t->_('column')}</td>
		<td>
			<select id="pcolumn" name="pcolumn" style="width:605px;">				
				<option value="-1">{$t->_('select')}</option>				
				<option value="0"{if $arrResult.col==0 && $arrResult.col!=''} selected="selected"{/if}>Top banner (width:440px, height:80px) - Banner chổ đặt logo</option>				
				<option value="1"{if $arrResult.col==1} selected="selected"{/if}>{$t->_('left')} (width:90px)</option>				
				<option value="3"{if $arrResult.col==3} selected="selected"{/if}>{$t->_('right')} (width:132px)</option>
			</select>
			<div class="clr"></div>
			<div id="idErrorColumn" class="error">Vui lòng chọn cột.</div>
		</td>
	</tr>		
	<tr>
		<td>(*) Banner</td>
		<td>			
			<input type="button" value="Upload" id="btnUpload" class="btnAction" style="float:left;" /><span id="idstatus" style="display:none;">Đang upload...</span>
			<span id="idbanner" style="margin-top:5px;{if $strBanner==''}display:none;{/if}">
				<input style="margin-top:3px;" type="checkbox" id="pbanner" name="pbanner" value="{$strBanner}" checked="checked"/> <label for="pbanner" id="idfilename">{$strBanner}</label>
			</span>
			<div class="clr"></div>
			<div id="idErrorBanner" class="error">Vui lòng chọn Banner (File hình hoặc Flash)</div>		
			<div class="note" style="width:600px;">
				- Hình: .jpg,.png,.jpeg,.gif hoặc Flash: .swf <div class="clr"></div>
				- Hình hoặc Flash banner phải có width=190 (cột trái) và width=132 (cột phải) 
			</div>			
		</td>
	</tr>
	<tr>
		<td>(*) Kích thước (px) = width x height</td>
		<td>
			<input type="text" style="width:50px;" id="pwidth" name="pwidth" value="{$arrResult.width}" /> x
			<input type="text" style="width:50px;" id="pheight" name="pheight" value="{$arrResult.height}" />
			<div class="clr"></div>
			<div id="idErrorSize" class="error">Vui lòng nhập kích thước banner.</div>
		</td>
	</tr>	
	<tr>
		<td>Link</td>
		<td><input type="text" style="width:600px;" id="plink" name="plink" value="{$arrResult.link}" /></td>
	</tr>
	<tr>
		<td>{$t->_('zorder')}</td>
		<td><input type="text" style="width:600px;" id="pzorder" name="pzorder" value="{$arrResult.zorder}" /></td>
	</tr>
</table>
<div class="padT2">
	<input type="hidden" id="ptype" name="ptype"  value="{$arrResult.type}" />
	<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
	<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}