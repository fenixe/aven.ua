<div id="content">

   <script type="text/javascript">
           hs.graphicsDir = 'js/graphics/';
		   hs.align = 'center';
		   hs.transitions = [ 'expand', 'crossfade' ];
		   hs.wrapperClassName = 'dark borderless floating-caption';
		   hs.fadeInOut = true;
		   hs.dimmingOpacity = .75;
		    
			//Добавляем панель управления
			if (hs.addSlideshow) hs.addSlideshow( {
				//slideshowGroup: 'group1',
				interval: 3000,
				repeat: false,
				useControls: true,
				fixedControls: 'fit' ,
				overlayOptions: {
					opacity: .6,
					position: 'bottom center',
					hideOnMouseOut: true
				}
			} );
      </script>
			
  <div id="cont_galary" >
         
         <h2>Хлебные фургоны</h2>
         
         <script type="text/javascript">  // выводим все фотографии из папк img для первой группы
            var alter = 'Хлебные фургоны';
			var group = 1;
	   for (var i=1; i <= 6; i++){
       document.write('<a href="img/3.' + group + '/3.' + group + '.' + i + '.jpg" class="higslide" onclick=" return hs.expand(this, { slideshowGroup: ' + group + ' } ) " > ' 
							  + '<img src="img/3.' + group + '/3.' + group + '.' + i + '.jpg"  width="260px"  height="260px" alt=" ' + alter + ' " title="Нажмите чтобы увеличеть" /></a>');
	 }
       </script>
       
   </div>
  
         <div style="clear: both;"></div>
  
   <div id="cont_galary" >
         
         <h2>Фургоны промтоварные и изотермические</h2>
        
     <script type="text/javascript">  // выводим все фотографии из папк img для второй группы
		    var alter = 'Фургоны промтоварные и изотермические';
			var group = 2;
	   for (var i=1; i <= 15; i++){
       document.write('<a href="img/3.' + group + '/3.' + group + '.' + i + '.jpg" class="higslide" onclick=" return hs.expand(this, { slideshowGroup: ' + group + ' } ) " > ' 
							  + '<img src="img/3.' + group + '/3.' + group + '.' + i + '.jpg"  width="260px"  height="260px" alt=" ' + alter + ' " title="Нажмите чтобы увеличеть" /></a>');
	 }
       </script>
       
  </div>
              <div style="clear: both;"></div>
    <div id="cont_galary" >
         
         <h2>Реконструкция кузовов и комплектующие автофургона</h2>
           
     <script type="text/javascript">  // выводим все фотографии из папк img для третей группы
		    var alter = 'Реконструкция кузовов и комплектующие автофургона';
			var group = 3;
	   for (var i=1; i <= 27; i++){
       document.write('<a href="img/3.' + group + '/3.' + group + '.' + i + '.jpg" class="higslide" onclick=" return hs.expand(this, { slideshowGroup: ' + group + ' } ) " > ' 
							  + '<img src="img/3.' + group + '/3.' + group + '.' + i + '.jpg"  width="260px"  height="260px" alt=" ' + alter + ' " title="Нажмите чтобы увеличеть" /></a>');
	 }
       </script>
       
    </div>
  
        <div style="clear: both;"></div>
  
  
</div>