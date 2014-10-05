<div id="content">

<script src="js/form-check.js" type="text/javascript"></script>



<form id="form" class="blocks" action="action/custom_reviews.php" method="post" onSubmit="return checkForm(this)" >
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
    <input type="text" class="text" autocomplete="off"  placeholder="Введите телефонный номер"  name="custPhone"  > 
  </p>
  
  <p class="area">
    <label> Сообщение*: </label>
    <textarea class="textarea" name="message" onkeypress="checkMessage()" onkeyup="checkMessage()"></textarea>
    <span id="message_report"  class=""></span>
  </p>
  
  <sup>
  <small><em>* - поля обязательные для заполнения</em></small>
  </sup> &nbsp;
  
  <p>
    <label>&nbsp;</label>
    <input type="reset"  class="btn" onclick="resetReport(['custName', 'message', 'custEmail' ])"   value="Сбросить" />
    <input type="submit" class="btn" value="Отправить" />
  </p>
</form>
    <div id="content">
       <?php  include 'action/pagination.php' ?>
    </div>
</div>