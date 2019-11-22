<?php 
function begin() {?>
<!DOCTYPE html><!-- html 5 文件類型聲明  -->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>center88留言板</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel=stylesheet type="text/css" href="css/board.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/localization/messages_zh_TW.js"></script>
		<script>
		$().ready(function(){
            $("#postForm").validate();
            $("#modifyMyPwdForm").validate();
            $("#signupForm").validate({
            	//debug:true,
            	rules:{
                	set_id:{  
                        required:true,  
                        remote:{                         //自带远程验证存在的方法  
                            url:"tel.php",  				//太神奇啦??? 
                            type:"post",
                            data:{
                            	set_id:function(){
                                	return $("#set_id").val();
                            	}
							}
						}  
					}  
        		},
        		messages:{
    				set_id:{
    					remote:"帳號已被使用!"
    				}
    			}
            });
        });
        	
        </script>
        <style>
        .error{
        	color:red;
        }
        </style> 
    </head>

    <body>
        <div class="container">
<?php 
}

function sign() {?>
    <div class="row">
        <div class="col-md-12">
            <div class="sign">
            <?php if(empty($_SESSION["login_id"])){?>
            	<a href="index.php?action=login">會員登入</a>
            <?php }else{?>
            	<span>歡迎<?php echo $_SESSION["login_id"] ; ?></span>&nbsp;&nbsp;
            	<a href="index.php?action=logout">登出→</a>
            <?php }?>
            </div>
        </div>
    </div>
<?php
}

function banner() {?>
    <div class="row">
    	<div class="col-md-12">
        	<div class="banner">
        		<p><a href="index.php?action=list">center88留言板</a></p>
        	</div>
    	</div>
	</div>
<?php    
}

function sidebar() {?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DBCAB3;">
    	<a class="navbar-brand">留言板</a>
  <?php if(isset($_SESSION["login_id"])){?>
  			<form class="form-inline mr-auto" action="index.php" method="get">
    			<input type="hidden" name="action" value="searchlist">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" name="input" value="<?php if(isset($_GET["input"])){echo $_GET["input"];} ?>">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			
			<a class="navbar-brand">會員</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            	<ul class="navbar-nav text-right">
        			<li class="nav-item"><a class="nav-link" href="index.php?action=post">新增留言</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=modifyMyData">修改資料</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=modifyMyPwd">修改密碼</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=listMyMsg">我的留言</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?action=searchlist">回首頁</a></li>
                </ul>
            </div>
            <?php 
        }else{?>
    		<form class="form-inline my-2 my-lg-0" action="index.php" method="get">
    			<input type="hidden" name="action" value="searchlist">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" name="input" value="<?php if(isset($_GET["input"])){echo $_GET["input"];} ?>">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
  <?php }?>
    </nav>
<?php 
}

function pleaseLogin() {?>
    <h2>請先登入!</h2>
    <button onclick="location.href='index.php?action=login'">登入</button>
<?php     
}

function contentStart() {
	if(isset($_SESSION["login_id"])){?>
	<div class="row" style="text-align: center;">
    	<div class="col-md-12">
    		<div class="login_content">
    <?php 
	}else{?>
	<div class="row" style="text-align: center;">
	  	<div class="col-md-12">
	  		<div class="content">
	<?php  
	}
}

function contentEnd() {?>
			</div>
    	</div>
    </div>
<?php     
}

function viewend() {?>
		</div>
	</body>
</html>
<?php 
}
?>
