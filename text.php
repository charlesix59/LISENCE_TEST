<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta http-equiv="content-type" />
		<meta content="text/html" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
		<meta name="referrer" content="no-referrer">
		<link rel="stylesheet" type="text/css" href="textstyle.css" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/style.css" />
		<script src="jquery-3.6.0.min.js" ></script>
    </head>
    <body>
		<?php
		    session_start();
		    ?>
		<nav class="navbar navbar-default navbar-static-top" style="position: absolute;top: 0rem;">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#">bilibili</a>
		        </div>
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="https://space.bilibili.com/">个人中心</a></li>
		            <li class="active"><a href="sign_in.html">管理员登陆<span class="sr-only"></span></a></li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>
		</nav>
		<br/>
    <?php
        $con = mysqli_connect("localhost","root","root");
        mysqli_select_db($con,"text");
        $result=mysqli_query($con,"select * from user");
        ?>
	<div style="background-image: linear-gradient(#DFDFDF,#e0c1ff);width: 60%;position: absolute;left: 20%;top: 10%;">
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<div class='line'>";
            echo $row['name']."&nbsp;&nbsp;&nbsp;".$row['pulldate'];
            echo "<br /><p class='textrow'>";
            echo $row['text'];
            echo "</p>";
            $inf="<a href='./delete.php?id=".$row['text']."'>删除</a>";
            echo $inf;
            /*echo "<form action='delete.php' method='post'>
                <input type='submit' value='删除'>
                </form>
                ";*/
            echo "</div>";
        }
    ?>
	
    <div class="from">
    <form style="position: relative;left: 0.5rem;" action="insert.php" method="post">
    <br>
        ID:&nbsp;
        <input type="text" name="name"><br>
       <textarea style="width: 60%;height: 6rem;border-radius: 0.25rem;border: gray 0.03125rem solid;margin: 0.3125rem;" placeholder="white something"
       type="text" name="txt"></textarea>&nbsp;
       <input style="height: 5rem;width: 5rem;color: #FFFFFF;background-color: #00BFFF;border-radius: 0.3125rem;
       border: none;position: relative;top: -3.9rem;white-space: normal;font-size: medium;" 
        type="submit" value="发表&#13;评论">
    </form>
    </div>
    <?php
    echo "状态:".$_SESSION['flag'];
    ?>
    </div>
	<script src="js/bootstrap.min.js"></script>
	<div class="container">
	  <div class="container_rotate">
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	    <div class="rotate">
	      <div class="flip_rotate">
	        <div class="flip_pos">
	          <div class="flip"></div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
    </body>
</html>