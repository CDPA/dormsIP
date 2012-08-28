<?php 
function printDormIPPage($selDorm){
?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.8.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".dorm").click(function(){
				$(".active > .dorm").parent().removeClass('active');
				$(this).parent().addClass( "active");
				var dormId = $(this).html();
				$.get("./dormIP/Dorm"+dormId+"_IP.txt", function(res){
					$("#iptable").html("<pre>"+res+"</pre>");
				});
				$("body").scrollTop(0);
				return false;
			});
		});
	</script>
</head>

<body>

<div class="navbar wrap">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">CDPA Dorm IP tables</a>
			<ul class="nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">翠亨 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a class="dorm" href="dormAIP.html">A</a></li>
						<li><a class="dorm" href="dormBIP.html">B</a></li>
						<li><a class="dorm" href="dormCIP.html">C</a></li>
						<li><a class="dorm" href="dormDIP.html">D</a></li>
						<li><a class="dorm" href="dormEIP.html">E</a></li>
						<li><a class="dorm" href="dormFIP.html">F</a></li>
						<li><a class="dorm" href="dormGIP.html">G</a></li>
						<li><a class="dorm" href="dormHIP.html">H</a></li>
						<li><a class="dorm" href="dormLIP.html">L</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">武嶺 <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a class="dorm" href="dorm1IP.html">1</a></li>
						<li><a class="dorm" href="dorm2IP.html">2</a></li>
						<li><a class="dorm" href="dorm3IP.html">3</a></li>
						<li><a class="dorm" href="dorm4IP.html">4</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="span10 well" id="iptable">
<?php 
		$dormList = array('1','2','3','4','A','B','C','D','E','F','G','H','L');
		if(in_array($selDorm,$dormList)){
		    echo '<pre>' .
		    file_get_contents(dirname(__FILE__) . "/dormIP/Dorm".$selDorm."_IP.txt").
			'</pre>';
		}else{
?>
	<div class="row">
		<div class="span7">
			<img src="/2006/title.jpg" class="img-polaroid" />
		</div>
	</div>
	<div class="row">
		<div class="span5">
			<pre>
<strong>CDPA 簡介</strong>
    CDPA，一群熱心宿網的同學所組成的「中山校園宿舍網路推廣協會」，簡稱「中山網推會」， 是學生組織。 
    英文簡稱 NSYSU-CDPA。
    為提供同學更好的宿網品質，由本協會負責宿舍網路的服務， 以維持網路的品質並減少計中實際管理上的困難。
			</pre>
		</div>
	</div>
<?php
		}
?>
</div>
<?php
}
?>
