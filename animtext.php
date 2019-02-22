<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="Animation Text/styletextanim.css">
</head>
<body>
<div class="container">
	<span class="text1">Welcome</span>
	<span style="color: red" class="text2">Top Ranker</span>

</div>
<div>
<p hidden=""> The download will begin in <span id="countdowntimer">5 </span> Seconds</p>


<!----countdown loading text--->
<script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    window.location="admin/index.php"
    },5000);
</script>

</body>
</html>
