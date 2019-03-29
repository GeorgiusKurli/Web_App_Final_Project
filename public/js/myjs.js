//script to create a bootstrap alert
function bootstrap_alert(error, design="warning"){
	$('#alert_placeholder').html('<div class="alert alert-' + design +' alert-dismissable fade show">'+error+'<button type="button" class="close" data-dismiss="alert"><span>&times</span></button></div>')
}