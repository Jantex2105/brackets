$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', '../php/post.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(data) { //Данные отправлены успешно
            console.log(true);
            alert('Данные занесены!');
            location.reload()
    	},
    	error: function(response) { // Данные не отправлены
            alert('Увы! Данные загрузить не получилось.');
    	}
 	});
}