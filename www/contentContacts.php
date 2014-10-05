<div id="content">

  <div id="contacts">

  <script src="js/form-check.js" type="text/javascript"></script>

  <form id="form_mail" class="blocks" action="action/send_mail.php" method="post" onsubmit="return checkForm(this);" >
   
  <p>
    <label> Имя*: </label>
    <input type="text" class="text" autocomplete="off"  placeholder="Введите имя"  name="custName"  onkeypress="checkNameLength()"
         onkeyup="checkNameLength()"  > 
    <span id="custName_report"   class=""></span>
  </p> 
  
  <p>
    <label> Компания: </label>
    <input type="text" class="text" autocomplete="off"  placeholder="Название организации" name="custCompany"  > 
  </p>
  
  <p>
    <label> Адрес e-mail*: </label>
    <input type="text" class="text" autocomplete="off"  placeholder="Введите електронный адресс"  name="custEmail"  onkeypress="checkEmail()" onkeyup="checkEmail()" > 
    <span id="custEmail_report"  class=""></span>
  </p>
  
  <p>
    <label> Номер телефона : </label>
    <input type="text" class="text" autocomplete="off"  placeholder="Введите телефонный номер"  name="custPhone" > 
  </p>
  
  <p class="area">
    <label> Сообщение*: </label>
    <textarea class="textarea" autocomplete="off" name="message" placeholder="Введите Ваше сообщение" onkeypress="checkMessage()" onkeyup="checkMessage()"></textarea>
    <span id="message_report"  class=""></span>
  </p>
  
  <sup>
  <small><em>* - поля обязательные для заполнения</em></small>
  </sup> &nbsp;
  
  <p>
    <label>&nbsp;</label>
    <input type="reset" class="btn" onclick="resetReport(['custName', 'message', 'custEmail' ])"  value="Сбросить" />
    <input type="submit" class="btn" value="Отправить" />
    
  </p>
  
</form>
</div>
 
 <div id="contacts">
 
 <map name="VkPage">
        <area shape="rect" coords="10,135,290,170" href="http://vk.com/aven21" target="_blank" alt="Перейти на страницу ВКонтакте"/>
 </map>  

 <img src="img/contact1.png" width="285px" alt="Наши Контакты" usemap="#VkPage" border="0" > 
 <img src="img/contact2.png" width="285px" alt="График Работы">
  
   </div>
 </div>