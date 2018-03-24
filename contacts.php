<? include 'header.php'; ?>
    
  <div class="container-fluid p-0">
    <section  class="resume-section p-3 p-lg-5 d-flex flex-column" id="feedback">
       <address>
        <form action = "action.php" method = "post"  class="form-horizontal">
              <h2>Форма связи</h2>
            <div class = "row">
               <div class="form-group col-md-6">
                  <label for="name" class = "control-label col-sm-12"><b>Как Вас зовут?</b></label>
                  <input type="text" class="form-control col-sm-12" id="name">
              </div>
              <div class="form-group col-md-6">
                  <label for="age" class = "control-label col-sm-12"><b>Сколько Вам лет?</b></label>
                  <input type="text" class="form-control col-sm-12" id="age" name = "age">
              </div>
              <div class="form-group col-md-6">
                  <label for="tel" class = "control-label col-sm-12"><b>Как Вам лучше позвонить?</b></label>
                  <input type="tel" class="form-control col-sm-12" id="tel">
              </div>
              <div class="form-group col-md-6">
                  <label for="email" class = "control-label col-sm-12"><b>По какому e-mail Вам лучше написать?</b></label>
                  <input type="email" class="form-control col-sm-12" id="email">
              </div>                        
              <div class="form-group col-md-6">
                 <b>Для каких целей Вам необходим китайский?</b> <br>
                      <input type="checkbox" name="goal1" value="me">Для себя<br>
                      <input type="checkbox" name="goal2" value="job">Для карьеры<br>
                      <input type="checkbox" name="goal3" value="study">Для учёбы<br>
                      <input type="checkbox" name="goal4" value="travel">Для путешествий<br>
                      <input type="checkbox" name="goal5" value="exam">Для сдачи ЕГЭ или ГИА<br>
                      <input type="checkbox" name="goal6" value="hsk">Для сдачи HSK<br>
                      <input type="checkbox" name="goal7" value="lover">Любимый человек из Китая<br>
                      <input type="checkbox" name="goal8" value="other">Другое<br>
              </div>
              <div class="form-group col-md-6">
                  <b>Вы изучали китайский ранее?</b><br>
                      <input type="checkbox" name="prev1" value="no">Нет, не изучал(а)<br>
                      <input type="checkbox" name="prev2" value="me">Да, самостоятельно<br>
                      <input type="checkbox" name="prev3" value="privTeach">Да, с репетитором<br>
                      <input type="checkbox" name="prev4" value="courses">Да, на курсах<br>
                      <input type="checkbox" name="prev5" value="school">Да, в школе<br>
                      <input type="checkbox" name="prev6" value="uni">Да, в ВУЗе/ССУЗе<br>
                      <input type="checkbox" name="prev7" value="china">Да, жил(а) в Китае<br>
                      <input type="checkbox" name="prev8" value="family">Да, в семье говорили (говорят) по-китайски<br>
                      <input type="checkbox" name="prev9" value="other">Да, другое<br>
              </div>
              <div class="form-group col-md-6">
                  <b>С каким разделом китайского у Вас наибольшие проблемы?</b><br>
                      <input type="checkbox" name="problems1" value="no">Ни с каким: я пока не знаю китайского<br>
                      <input type="checkbox" name="problems2" value="me">Письмо<br>
                      <input type="checkbox" name="problems3" value="courses">Произношение<br>
                      <input type="checkbox" name="problems4" value="school">Разговорная речь<br>
                      <input type="checkbox" name="problems5" value="uni">Грамматика<br>
                      <input type="checkbox" name="problems6" value="family">Чтение<br>
                      <input type="checkbox" name="problems7" value="other">Восприятие на слух<br>
                      <input type="checkbox" name="problems8" value="other">Китайская культура и жизнь в Китае<br>
              </div>
              <div class="form-group col-md-6">
                 <b>Какая форма занятий наиболее предпочтичельна для Вас?</b> <br>
                      <input type="checkbox" name="howmanypeople1" value="group">В группе<br>
                      <input type="checkbox" name="howmanypeople2" value="personally">Индивидуально<br>
                  <br>
                    <button type="submit" class="btn btn-primary btn-lg" id = "send-btn">Отправить</button>
                    <div id = "message"></div>
                  </div>
              </div>
        </form>
    </address>  
 </section>
</div>