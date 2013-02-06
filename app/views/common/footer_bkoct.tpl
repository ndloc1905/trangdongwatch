    <div class="space"></div>

	<div class="space"></div>

	<div class="rowFooter">

	{if $strAction!='detail'}

		{$arrContent6.content_vi}

	{else}

		{$arrContent3.content_vi}

	{/if}

	{if $AppUI->id>0 && $AppUI->certify==0}

	<div class="space"></div>

	<center><a href="{$smarty.const.HOST_ACCOUNT}#certify" style="color:#00C"> <b><span style="color:red;font-size:14px;">Click</span> vào đây để được xác thực CMND để trở thành thành viên chính thức của diễn đàn!</b></a><br />

</script></center>

	{/if}

	</div>

	<div id="footer">

		<div class="in">

			<div class="menuF">

				<div class="bold">

					<a href="{$smarty.const.HOST_ABOUTUS}">Giới thiệu</a>	|

					<a href="{$smarty.const.HOST_RULES}">Nội Quy Của Diễn đàn</a>	|

					<a href="{$smarty.const.HOST_HELP}">Hướng dẫn sử dụng diễn đàn</a>	 |

					<a href="{$smarty.const.HOST_CONTACT}">Liên hệ BQT</a>

				</div>

				<div class="padT5">

					© Copyright 2011 donghoomega.vn. All rights Reserved.

				</div>

			</div>

			<div class="clr"></div>

		</div>

	</div>

</div>

{literal}<script type="text/javascript">var HOST="{/literal}{$smarty.const.HOST}{literal}";var msg_confirm_delete="{/literal}{$t->_('msg_confirm_delete')}{literal}";</script>{/literal}

<script type="text/javascript" src="{$smarty.const.HOST}/scripts/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="{$smarty.const.HOST}/scripts/jquery.blockui.js"></script>

<script type="text/javascript" src="{$smarty.const.HOST}/scripts/jquery-ui-1.8.custom.min.js"></script>

<script type="text/javascript" src="{$smarty.const.HOST}/scripts/jquery.ac_search.js"></script>

<script type="text/javascript" src="{$smarty.const.HOST}/scripts/common.js"></script>

{if $AppUI->id<=0}<script type="text/javascript" src="{$smarty.const.HOST}/scripts/login.js"></script>{/if}

{foreach from=$arrJS item=js}<script type="text/javascript" src="{$smarty.const.HOST}/{$js}"></script>{/foreach}

{if $_strMsg!=''}<script type="text/javascript">showUI("{$_strMsg}");</script>{/if}

{if $_strErr!=''}<script type="text/javascript">alert("{$_strErr}");</script>{/if}

{literal}


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32932677-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



{/literal}

</body>

</html>