{include file="common/header.tpl"}

<div id="bodyMain">

<div class="navigation">

	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>

	<a href="{$smarty.const.HOST_FORUM}?id={$arrDetail.parentid}">{$arrCate[$arrDetail.parentid]}</a>

	{if $arrDetail.cateid}<a href="{$smarty.const.HOST_FORUM}?id={$arrDetail.cateid}">{$arrCate[$arrDetail.cateid]}</a>{/if}

	<a href="{url_topic_detail id=$arrDetail.id title=$arrDetail.title}" class="active">{$arrDetail.title}</a>

</div>

<div class="padT5B">

	<div class="titleDA">{$arrDetail.title}{if $arrDetail.price} - <span style="color:red;">Giá: {$arrDetail.price|number_format} VNĐ</span>{/if}</div>

	<div class="space"></div>

	<div class="padT2">

	<span class="datex">Thời gian đăng tin: {$arrDetail.postdate|date_format:"%H:%M %d/%m/%Y"}</span> bởi <a class="nickGreen" href="{$smarty.const.HOST}/{$objUser->username}">{$objUser->fullname}</a> {star ratings=$objUser->ratings username=$objUser->username}

	- Lượt xem: <strong>{$arrDetail.views|number_format}</strong>&nbsp;

	- <a href="javascript:void(0);" onclick="scrollToId('reply');">Phản hồi: <strong>{$arrDetail.comments}</strong></a>

	{if ($AppUI->id==$arrDetail.userid || $op === true) }- <a href="{$smarty.const.HOST_POSTTOPIC}?id={$arrDetail.id}">Sửa</a>{/if}

	</div>

</div>

<div class="space"></div>



<table width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#e3e3e3" style="border-collapse:collapse;">

<tr>

	<td width="190" valign="top" rowspan="2" style="border:1px solid #e3e3e3;">

		{item_profile item=$arrUser}

	</td>

	<td style="border-top:1px solid #e3e3e3;padding:2px;background:#E6EFFF;" valign="top">

		<div class="padT10 detailCotent">{$arrDetail.content}</div>

	</td>

	<td width="145" valign="top" align="center;" rowspan="2" style="border:1px solid #e3e3e3;padding:2px;">
{if $AppUI->username == "admin"}
<p>
<input onclick="upPost({$arrDetail.id});" style="margin-top:-5px" type="button" class="bntLogin" value="UP" />
</p>	

<p>
<a target="_blank" style="font-weight:bold; color:#ffffff; background-color:RED; padding:2px 5px;" href="/admin/topic/update?id={$arrDetail.id}">
Sửa
</a>
&nbsp;<a target="_blank" style="font-weight:bold; color:#ffffff; background-color:RED; padding:2px 5px;" href="/admin/topic/doaction?items={$arrDetail.id}&paction=1" onclick="if(confirm('Are you sure?')) return true;">
Xóa
</a>
</p>		
{/if}
		<strong>Thành viên {$objUser->fullname} là:</strong>

		<div class="space"></div>

		{title userid=$objUser->id certify=$objUser->certify}

	</td>

</tr>

<tr>

	<td valign="bottom" style="border-bottom:1px solid #e3e3e3;padding:2px;background:#E6EFFF;">

		<div style="border-top:1px dotted #e3e3e3;">

			{if $objUser->signature}

				{$objUser->signature|one_br}

				<div class="space"></div>

			{/if}

			<a href="{url_user_topic username=$objUser->username}">Những tin của <strong>{$objUser->fullname}</strong> đã đăng</a>

		</div>

	</td>

</tr>

</table>



{if $arrCommentSpecial}

<table width="100%" cellspacing="0" cellpadding="0" border="1" bordercolor="#e3e3e3">

<tr>

	<td valign="middle" style="padding:15px 15px; font-weight:bold;font-size:15px;" colspan="3">

	{foreach from=$arrCommentSpecial item=row key=i}

		<span style="color:red;">Sản phẩm này đã được đặt gạch có kèm bảo hiểm của Trung tâm bởi</span>

		<a class="{if $row.certify==0}black{elseif $row.certify==1}blue{else}green{/if}" href="{$smarty.const.HOST}/{$row.username}">{$row.fullname}</a>

		{star ratings=$row.ratings username=$row.username}

		{if $row.ctype==2 && $AppUI->id==$objUser->id}

			<span class="fr">

				<input onclick="certifyComment({$row.cid},1)" style="margin-top:-5px" type="button" class="bntLogin" value="Hủy xác nhận" />

				<input onclick="certifyComment({$row.cid},3)" style="margin-top:-5px" type="button" class="bntLogin" value="Xác nhận" />

			</span>

		{elseif $row.ctype==3}

			<span class="fr certify">Đã được chủ topic xác nhận</span>

		{else}

			<span class="fr blue">Đang chờ chủ topic xác nhận</span>

		{/if}

	{/foreach}

	</td>

</tr>

</table>

{/if}



{if $arrComment}

{foreach from=$arrComment item=row key=i}

<table width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#e3e3e3" style="border-collapse:collapse;">

<tr>

	<td width="190" valign="top" rowspan="2" style="border:1px solid #e3e3e3;">

		{item_profile item=$row}

	</td>

	<td style="border-top:1px solid #e3e3e3;padding:2px;" valign="top">

		<div style="border-bottom:1px dotted #e3e3e3;height:20px;color:green;">

			<div class="datex" style="float:left; width:200px;">Phản hồi lúc {$row.cpostdate|postdate}</div>

			<div class="actionComment">

			<ul>

			{if $AppUI->id==$row.userid && $row.ctype!=3}

				<li style="background:none;"><a href="javascript:scrollToId('reply');" onclick="editComment({$row.cid},{$row.ctype});">Sửa</a></li>

			{/if}

			</ul>

			</div>

		</div>

		<div class="padT5" style="padding-top:0px;">

			{$row.content}

		</div>		

		{if $row.ctype>1}

		<div class="padT5">

			<img src="upload/image/datgachbaohiem.gif" />

		</div>

		{/if}

		{*

		{if $row.ctype==3}

		<div class="padT5">

			<img src="upload/image/nhangachbaohiem.gif" />

		</div>

		{/if}

		*}

	</td>

	<td width="145" valign="top" align="center;" rowspan="2" style="border:1px solid #e3e3e3;padding:2px;">
{if $AppUI->username == "admin"}
<p><a target="_blank" style="font-weight:bold; color:#ffffff; background-color:RED; padding:2px 5px;" href="/admin/comment/update?id={$row.cid}">Sửa</a>.
<a target="_blank" style="font-weight:bold; color:#ffffff; background-color:RED; padding:2px 5px;" href="/admin/comment/doaction?items={$row.cid}&paction=1">Xóa</a>
</p>

{/if}
		<strong>Thành viên {$row.fullname} là:</strong>

		<div class="space"></div>

		{title userid=$row.userid certify=$row.certify}

	</td>

</tr>

<tr>

	<td valign="bottom" style="border-bottom:1px solid #e3e3e3;padding:2px;">

		<div style="border-top:1px dotted #e3e3e3;">

			{if $row.signature}

				{$row.signature|one_br}

				<div class="space"></div>

			{/if}

			<a href="{url_user_topic username=$row.username}">Những tin của <strong>{$row.fullname}</strong> đã đăng</a>

		</div>

	</td>

</tr>

</table>

{/foreach}

{if $intTotal>$intLimit}

<table width="100%" cellspacing="0" cellpadding="0" border="1" bordercolor="#e3e3e3" style="border-collapse:collapse;"><tr><td colspan="3">

	<div class="padT5 alignC">{paging total=$intTotal limit=$intLimit page=$intPage}</div>

</td></tr></table>

{/if}

{/if}



<div class="space"></div>

<div class="tabNewsH">

	<h4 class="titleNewsH">Đăng phải hồi cho bài viết trên</h4>

	<div class="inTabNewsH" style="background:#E6EFFF;border-bottom:1px solid #e3e3e3;border-left:1px solid #e3e3e3;border-right:1px solid #e3e3e3;padding:5px;">

		<div class="space"></div>

		<table width="100%">

		<tr>

			<td align="center" valign="top" width="190px">

			{if !$arrCommentSpecial}

			<div style="margin-top:5px">

				{if $AppUI->id != $arrDetail.userid}

					<img style="cursor:pointer;" id="imgDatGach" src="{$smarty.const.HOST}/images/bnt/datgach.gif" onclick="datgach()" />

				{else}

					<img style="cursor:pointer;" id="imgDatGach" src="{$smarty.const.HOST}/images/bnt/datgach.gif" onclick="alert('Bạn không thể đặt gạch cho chính bài viết cùa mình.')" />

				{/if}

			</div>

			<div style="margin-top:5px;display:none;" id="imgDatGachBaoHiem">

				<img src="upload/image/datgachbaohiem.gif" />

			</div>

			{/if}

			</td>

			<td align="left">

				<div id="reply">{ckeditor name="pcontent" value=$arrResult.content height="180" width="650"}</div><div class="space"></div>

				<a href="{if $AppUI->id<=0}{$smarty.const.HOST_LOGIN}{else}javascript:uifile(3);{/if}" class="bntS1"><span>Chèn hình vào nội dung</span></a>&nbsp;

				<input style="float:left;margin-left:5px;" type="button" class="bntLogin" value="Gửi phải hồi" onclick="{if $AppUI->id<=0}location.href='{$smarty.const.HOST_LOGIN}';{else}postComment({$arrDetail.id}){/if}" />

				<span id="idLoading" style="float:left;margin-left:5px;display:none;"><img src="{$smarty.const.HOST}/images/loading.gif" /></span>



				<span class="note" style="width:780px;">

					<strong>Bước 1:</strong> Đặt con trỏ tại vị trí cần chèn hình trong hộp soạn nội dung và bấm vào nút <strong>Chèn hình vào nội dung</strong>. <div class="clr"></div>

					<strong>Bước 2:</strong> Bấm vào hình để chèn vào nội dung.

				</span>



				<input type="hidden" id="ctype" name="ctype" value="1" />

				<input type="hidden" id="cid" name="cid" value="0" />

				<input type="hidden" id="ptopicid" name="ptopicid" value="{$arrDetail.id}" />

			</td>

		</tr>

		</table>

	</div>

</div>

{include file="common/footer.tpl"}