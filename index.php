<!DOCTYPE html>
<html>
<head>
	<title>Jane's News Report</title>
</head>
<body>

<h1>Jane's News Report</h1>
<div class="content">
	
</div>

<!-- import jquery by cdn -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
	
$.get(
'http://dev.com/news-rest-api/news',
function(data){
	var str='';
	// jquery foreach
$.each(data, function(key,value){
str=str+'<h2>'+value.title+'</h2>'+'<h5>'+value.content+'</h5>';
});
$('.content').html(str);
}
);

</script>
</body>
</html>