$('#ajax-test').click(function(){
	$.get('index.php', function(data){
		$('body').append(data);
	})
});