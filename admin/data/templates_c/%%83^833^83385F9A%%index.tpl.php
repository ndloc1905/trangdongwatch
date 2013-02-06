<?php /* Smarty version 2.6.20, created on 2011-07-21 14:07:31
         compiled from index/index.tpl */ ?>
<?php if ($this->_tpl_vars['AppUI']->id <= 0): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="index, all"/>
<meta name="distribution" content="Global"/>
<title>Admin</title>
<base href="<?php echo @HOST_ADMIN; ?>
/"></base>
<link href="css/index.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/tag.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div class="navBody">
	<div class="navHeader">		
		<div class="navMain">
			<center>
			<div class="mainLogin">				
				<div class="boxLogin">
			        <div class="loginItem">
			            <div class="loginItems">
			                <div class="loginContent">
			                    <h2 style="float:left;">Administration Login</h2>
			                    <div class="noteAcl">
			                        <div class="imgKey">
			                            <img src="images/icon/key.gif" alt="" border="0" width="82" height="119"/>
			                        </div>
			                    </div>
			                    <div class="frmLogin">
			                        <div class="frmLoginItem">
			                            <div class="frmLoginItems">
			                                <form id="frmLogin" name="frmLogin" method="post" action="<?php echo @HOST_LOGIN; ?>
">
			                                    <div class="userInput">
			                                        <label class="pusername">UserName:</label>
			                                        <input type="text" id="paloginusername" name="paloginusername" value="<?php echo $_SESSION['pusername']; ?>
" />
			                                    </div>
			                                    <div class="userInput">
			                                        <label class="ppassword">Password:</label>
			                                        <input type="password" id="paloginpassword" name="paloginpassword" value="" />
			                                    </div>
			                                    <div class="secAction">
			                                        <input type="image" src="images/btn/login.gif" alt=""/>
			                                    </div>
			                                </form>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
				</center>	
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
<?php if ($this->_tpl_vars['_strMsg'] != ''): ?><script type="text/javascript">showUI("<?php echo $this->_tpl_vars['_strMsg']; ?>
");</script><?php endif; ?>
<?php if ($this->_tpl_vars['_strErr'] != ''): ?><script type="text/javascript">alert("<?php echo $this->_tpl_vars['_strErr']; ?>
");</script><?php endif; ?>
</html>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<center style="margin-top:180px"><img src="images/main.gif" width="500" alt="" border="0" /></center>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>