{if $AppUI->id<=0}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="index, all"/>
<meta name="distribution" content="Global"/>
<title>Admin</title>
<base href="{$smarty.const.HOST_ADMIN}/"></base>
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
			                                <form id="frmLogin" name="frmLogin" method="post" action="{$smarty.const.HOST_LOGIN}">
			                                    <div class="userInput">
			                                        <label class="pusername">UserName:</label>
			                                        <input type="text" id="paloginusername" name="paloginusername" value="{$smarty.session.pusername}" />
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
{if $_strMsg!=''}<script type="text/javascript">showUI("{$_strMsg}");</script>{/if}
{if $_strErr!=''}<script type="text/javascript">alert("{$_strErr}");</script>{/if}
</html>
{else}
{include file="common/header.tpl"}
<div class="navMain">
<center style="margin-top:180px"><img src="images/main.gif" width="500" alt="" border="0" /></center>
</div>
{include file="common/footer.tpl"}
{/if}