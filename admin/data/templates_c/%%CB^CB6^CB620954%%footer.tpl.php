<?php /* Smarty version 2.6.20, created on 2011-07-21 11:33:57
         compiled from common/footer.tpl */ ?>
﻿		<div id="footer">
			<div class="inFooter fixed">
				<div class="copyRight">
					© donghoomega.vn All Rights Reserved.					
				</div>
				<div class="linkF">
					<?php echo $this->_tpl_vars['t']->_('note'); ?>
: <?php echo $this->_tpl_vars['t']->_('note_required'); ?>

				</div>
			</div>
		</div>		
		<?php echo '<script type="text/javascript">
			var HOST="'; ?>
<?php echo @HOST; ?>
<?php echo '";
			var HOST_ADMIN="'; ?>
<?php echo @HOST_ADMIN; ?>
<?php echo '";
			var msg_confirm_action = "'; ?>
<?php echo $this->_tpl_vars['t']->_('msg_confirm_action'); ?>
<?php echo '";
		</script>'; ?>
		
        <script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>        
        <script type="text/javascript" src="scripts/jquery.blockui.js"></script>           
        <script type="text/javascript" src="scripts/ajaxupload.3.5.js"></script>           
        <script type="text/javascript" src="scripts/chrome.js"></script>        
        <script type="text/javascript" src="scripts/ui/ui.datepicker.js"></script>        
		<script type="text/javascript" src="scripts/common.js"></script>
		<script type="text/javascript" src="scripts/fixIE6.js"></script>
		<?php $_from = $this->_tpl_vars['arrJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js']):
?><script type="text/javascript" src="<?php echo $this->_tpl_vars['js']; ?>
"></script><?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['_strMsg'] != ''): ?><script type="text/javascript">showUI("<?php echo $this->_tpl_vars['_strMsg']; ?>
");</script><?php endif; ?>
		<?php if ($this->_tpl_vars['_strErr'] != ''): ?><script type="text/javascript">alert("<?php echo $this->_tpl_vars['_strErr']; ?>
");</script><?php endif; ?>
    </body>
</html>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){
	cssdropdown.startchrome("chromemenu");	
});
</script>
'; ?>