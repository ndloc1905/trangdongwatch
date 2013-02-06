{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">{if $arrResult}Sửa{else}Đăng{/if} tin</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyAdmin">
		<form id="frmPostTopic" name="frmPostTopic" onsubmit="return checkForm();" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/index/doposttopic?id={$arrResult.id|intval}">
		<div class="tabNewsH">
			<h4 class="titleNewsH">{if $arrResult}Sửa{else}Đăng{/if} tin</h4>
			<div class="inTabNewsH">
			<div class="padT10">
			<table cellpadding="6" cellspacing="0" border="0">
				<tr>
					<td width="180px" valign="top" align="right">Tin sẽ xuất hiện ở diễn đàn<span class="red">*</span></td>
					<td>
						{select_cateparent item0=$t->_('select') selected=$arrResult.parentid attribs="style=\"float:left;margin-right:2px;\" onchange=\"subcate(this.value)\""}
						<span id="idSubCate">{if $arrResult.parentid}{select_cate item0=$t->_('select') parentid=$arrResult.parentid selected=$arrResult.cateid}{/if}</span>
						<div id="idErrorForum" class="error" style="width:600px">Vui lòng chọn diễn đàn.</div>
						<div class="note" style="width:600px">Hãy chọn đúng diễn đàn và nhóm nếu đăng tin sai diễn đàn và nhóm nhiều lần sẽ bị khoá nick.</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Từ khoá tìm kiếm</td>
					<td>
						<input type="text" class="userInput" style="width:600px" id="ptags" name="ptags" value="{$arrResult.tags}">
						<div class="note" style="width:600px">Với số lượng Topic rất lớn bạn nên nhập tên hãng của sản phẩm để khách hàng có thể tìm thấy topic của bạn dễ dàng ở mục Tìm kiếm</div>
					</td>
				</tr>
				<tr>
					<td valign="top" width="180px" align="right">Ảnh đại diện bản tin</td>
					<td valign="top">
						<a href="javascript:uifile(2);" class="bntS1"><span>Chọn hình</span></a>&nbsp;
						<div class="clr"></div>
						<span id="idimage" style="{if $arrResult.image==''}display:none;{/if}">
							<input type="checkbox" id="pimage" name="pimage" value="{$arrResult.image}" checked="checked"/> <label for="pimage" id="idfilename">{$arrResult.image}</label>
						</span>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Tiêu đề bản tin<span class="red">*</span></td>
					<td>
						<input type="text" class="userInput" style="width:600px" id="ptitle" name="ptitle" value="{$arrResult.title}">
						<div class="note" style="width:600px" >Không được nhập quá 100 kí tự.</div>
						<div id="idErrorTitle" class="error" style="width:600px">Vui lòng nhập tiêu đề bản tin.</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Giá</td>
					<td>
						<input class="userInput" style="width:100px" type="text" id="pprice" name="pprice" value="{$arrResult.price}" />&nbsp;VNĐ
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Nội dung</td>
					<td>	
						{ckeditor name="pcontent" value=$arrResult.content height="400" width="600"}

						{*'pcontent'|fck:$arrResult.content:'FE':'600':'400'*} <div class="clr"></div>
						<a href="javascript:uifile(3);" class="bntS1"><span>Chèn hình vào nội dung</span></a>&nbsp;
					</td>
				</tr>				
				<tr>
					<td valign="top" align="right">{$t->_('captcha')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="text" id="pcaptcha" name="pcaptcha" value="" />
						<div class="error" id="idErrorCaptcha1" style="display:none;">{$t->_('msg_required_captcha')}</div>
						<div class="error" id="idErrorCaptcha2" style="display:none;">{$t->_('msg_invalid_captcha')}</div>
						<div class="space"></div>
						<div class="captcha"><span id="idCaptCha">{captcha}</span><img onclick="refreshCaptcha('idCaptCha');" style="margin-left:10px;margin-bottom:12px;cursor:pointer;" src="{$smarty.const.HOST}/images/ico/refresh.png" /></div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">&nbsp;</td>
					<td valign="middle">
					{if $arrResult && $arrResult.flags==2}
						<input type="button" class="bntLogin" value="Lưu" onclick="alert('Bạn không thể sửa, vị tin này đã bị BQT khóa.');" />
					{else}
						<input style="float:left;" type="button" class="bntLogin" value="{if $arrResult}Lưu{else}Đăng tin{/if}" onclick="postTopic({$arrResult.id|intval});" />
						<span id="idLoading" style="float:left;margin-left:5px;display:none;"><img src="images/loading.gif" /></span>
					{/if}
					</td>
				</tr>
			</table>
			</div>
			<div class="space"></div>
			</div>
		</div>
		</form>
	</div>
</div>
</div>
{include file="common/footer.tpl"}