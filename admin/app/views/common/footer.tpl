		<div id="footer">
			<div class="inFooter fixed">
				<div class="copyRight">
					© donghoomega.vn All Rights Reserved.					
				</div>
				<div class="linkF">
					{$t->_('note')}: {$t->_('note_required')}
				</div>
			</div>
		</div>		
		{literal}<script type="text/javascript">
			var HOST="{/literal}{$smarty.const.HOST}{literal}";
			var HOST_ADMIN="{/literal}{$smarty.const.HOST_ADMIN}{literal}";
			var msg_confirm_action = "{/literal}{$t->_('msg_confirm_action')}{literal}";
		</script>{/literal}		
        <script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>        
        <script type="text/javascript" src="scripts/jquery.blockui.js"></script>           
        <script type="text/javascript" src="scripts/ajaxupload.3.5.js"></script>           
        <script type="text/javascript" src="scripts/chrome.js"></script>        
        <script type="text/javascript" src="scripts/ui/ui.datepicker.js"></script>        
		<script type="text/javascript" src="scripts/common.js"></script>
		<script type="text/javascript" src="scripts/fixIE6.js"></script>
		{foreach from=$arrJS item=js}<script type="text/javascript" src="{$js}"></script>{/foreach}
		{if $_strMsg!=''}<script type="text/javascript">showUI("{$_strMsg}");</script>{/if}
		{if $_strErr!=''}<script type="text/javascript">alert("{$_strErr}");</script>{/if}
    </body>
</html>
{literal}
<script type="text/javascript">
$(document).ready(function(){
	cssdropdown.startchrome("chromemenu");	
});
</script>
{/literal}