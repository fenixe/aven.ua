// Проверка формы отправки

	function checkMessage(){
		var messageValue = document.getElementsByName('message')[0].value;
		
        if (messageValue == ""){
			showErrorReport('message','Введите сообщение');
            return false;
			   }else {
			showCorrectReport('message','OK');
            return true;
				}
		}
	
	function checkNameLength(){
		var nameValue = document.getElementsByName('custName')[0].value;
		
		  if ( nameValue.length < 4){
	           showErrorReport('custName','Имя короче 4 знаков');
		   }else if (! (/^[а-яА-Яa-zA-Z]+$/.test(nameValue) ) ){
			    alert (item);
				showErrorReport('custName','Имя только из букв');
                return false;		
			}else {
				showCorrectReport('custName','OK');
                return true;
			}
		}	
	
	function checkEmail(){
		var emailValue = document.getElementsByName('custEmail')[0].value;
		if (! (/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z\-\.]+$/.test(emailValue) ) ) {
			     showErrorReport('custEmail','Неправельно введен e-mail!');
                 return false;
			}else {
	             showCorrectReport('custEmail','OK');
                 return true;                 
		  }
    }
	
	function showErrorReport(idName,report){
	    document.getElementById(idName+'_report').innerHTML= report;
	    document.getElementById(idName+'_report').className = ' blocks_label_error';
           if (idName == 'message'){
			   document.getElementById(idName+'_report').className += ' area_label_error';
		   }
		}
		
	function showCorrectReport(idName,report){
		   document.getElementById(idName+'_report').innerHTML= report;		   
		   document.getElementById(idName+'_report').className = ' blocks_label_ok';
		   if (idName == 'message'){
			   document.getElementById(idName+'_report').className += ' area_label_ok';
		      }
	}

    function resetReport(idName){
        idName.forEach(function (el){
            document.getElementById(el+'_report').innerHTML = null;
            document.getElementById(el+'_report').className = '';
        });

    }
	
function checkForm(form){
		var i = 0;
	do{
        if( form.elements[i].name == 'custName'){
			checkNameLength();
	    }
	    if( form.elements[i].name == 'custEmail'){
            checkEmail();
	    }
	    if ( form.elements[i].name == 'message') {
     	    checkMessage();
	    }
	    i++;
	}while (i < form.length);
	  
    if (checkNameLength() && checkEmail() && checkMessage() ){
	   	return true;
    }
    return false;	
}
  


	
	 
