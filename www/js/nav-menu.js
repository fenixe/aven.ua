// Раскрывающийся список

function doMenu_Hide(ASubObj, ASpanObj) {	
     ASubObj.style.display = 'none' ;
	 ASpanObj.innerHTML = '+' ;
	
}

function doMenu_Show(ASubObj, ASpanObj) {
	ASubObj.style.display = 'block' ;
	ASpanObj.innerHTML = '&minus;' ;
}

function doMenu( AObjIndex) {
	var subObj = document.getElementById('chapter' + AObjIndex);
	var spanObj = document.getElementById('shSpan' + AObjIndex);
	if ( subObj.style.display == 'none' ) {
		doMenu_Show(subObj, spanObj) ;
		}
		else{
		 doMenu_Hide(subObj, spanObj) ; 
		} // if...else
	} // if

function onBodyLoad() {
doMenu_Hide(document.getElementById('chapter1'), document.getElementById('shSpan1'));
doMenu_Hide(document.getElementById('chapter2'), document.getElementById('shSpan2'));
doMenu_Hide(document.getElementById('chapter2_4'), document.getElementById('shSpan2_4'));
}

//Подсветка текущей ссылки


function shineLinks(id){
try{
	var el = document.getElementById(id).getElementsByTagName('a');
	var url = document.location.href;
	for ( var i = 0; i < el.length; i++){
		if (url == el[i].href){
			el[i].className += ' act';
		};
	};
}catch(error){}
};





				
			
			
			
			