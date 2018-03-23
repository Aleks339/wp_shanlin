      $(document).ready(function(){
        $("#send-btn").click(function(){
          $("#message").hide();
          if (!validate()){
            $("#message").show();
            return false;
          }
          return false;
        });
        var validate = function(){
          if ($("#name").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваше имя');
            return false;
          }
          if ($("#age").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваш возраст');
            return false;
          }
          if ($("#tel").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваш телефон');
            return false;
          }          
          if ($("#email").val() == "") {
            $("#message").text('Укажите, пожалуйста, Ваш email');
            return false;
          }
          if (!isValidEmailAddress($("#email").val())){
            $("#message").text('Укажите, пожалуйста, корректный почтовый адрес');
            return false;
          }  
          if (!isValidTelNum($("#tel").val())){
            $("#message").text('Укажите, пожалуйста, корректный телефонный номер');
            return false;
          }
          return true;
        }
        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }
        function isValidTelNum(TelNum) {
            var phone_pattern = new RegExp (/([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/); 
            return phone_pattern.test(TelNum);
        }
      $('input[name="age"]').keyup(function(e){
          if (/\D/g.test(this.value)){
            this.value = this.value.replace(/\D/g, '');
          }
        });  
        
      })