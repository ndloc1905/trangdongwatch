<ul class="listImage">
{foreach from=$arrResult item=row key=i}
	<li><a title="{if $intType==3}Chèn vào hộp nội dung{else}Chọn làm ảnh đại diện{/if}"  href="javascript:selectFile(1, '{$row.file}');"><img src="{$smarty.const.HOST_UPLOAD}/image/{$row.username}/{$row.file}" /></a></li>
{/foreach}
</ul>