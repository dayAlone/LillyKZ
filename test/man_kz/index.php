<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Cубъективная оценка эд :: Lilly Answers That Matter");
$APPLICATION->SetPageProperty('KEYWORDS', "эректильная дисфункция, эрекция, мужское здоровье, сексуальное здоровье, лечение эрекции, проблемы эрекции, лечение эректильной дисфункции, симптомы эректильной дисфункции, причины эректильной дисфункции,  курение и эрекция, алкоголь и эрекция, половой акт, секс и потенция, тест эрекции, тестирование потенции, оценка эрекции, консультация уролога");
$APPLICATION->SetPageProperty('DESCRIPTION', "Протестировать свою эрекцию: субъективная оценка эректильной дисфункции.");

?> 
<div class="test_container">
    <div class="col-md-6 col-md-offset-3">
		<div id="test-man">
	   <div id="wrapper" class="default">
        <div class="test_frame">
            <h2>ЭД СУБЪЕКТИВТІ БАҒАСЫ*</h2>
            <p id="pretest_small">Сіздің жауабыңызға барынша сәйкес келетін нұсқаны таңдаңыз   </p>
        </div>
        <div class="test_content man">
            <div id="pretest_block">
                <div class="questions" id="q_00">
                    <h3>ЗІҢІЗДІҢ ОСЫ КЕЗДЕГІ ЖЫНЫСТЫҚ ӨМІРІҢІЗГЕ ҚАНШАЛЫҚТЫ ҚАНАҒАТТАНАСЫЗ?  </h3>
                    <ol>
                        <li><input type="radio" name="q_00" id="q_00_1" value="" /><label for="q_00_1">Мүлдем қанағаттанбаймын  </label></li>
                        <li><input type="radio" name="q_00" id="q_00_2" value="" /><label for="q_00_2">Негізінен қанағаттанбаймын  </label></li>
                        <li><input type="radio" name="q_00" id="q_00_3" value="" /><label for="q_00_3">Қанағаттану мен қанағаттанбаудың арасындағы орташа сезім  </label></li>
                        <li><input type="radio" name="q_00" id="q_00_4" value="" /><label for="q_00_4">Негізінен қанағаттанамын </label></li>
                        <li><input type="radio" name="q_00" id="q_00_5" value="" /><label for="q_00_5">Мүлдем қанағаттанамын</label></li>
                    </ol>
                </div>
            </div>
            <h2>ЭРЕКТИЛЬДІ ФУНКЦИЯНЫҢ БАҒАСЫ*</h2>
            <div id="test_block">
                <div class="questions" id="q_0">
                    <h3>
                        <span class="counter"><span class="digit">1</span></span>
                        ЖЫНЫСТЫҚ АКТ КЕЗІНДЕ ЭРЕКЦИЯҒА ҚАНШАЛЫҚТЫ ЖИІ ЖЕТЕ АЛАСЫЗ?
                    </h3>
                    <ol>
                        <li><input type="radio" name="q_0" id="q_0_1" value="" /><label for="q_0_1">Ешқашан дерлік немесе ешқашан </label></li>
                        <li><input type="radio" name="q_0" id="q_0_2" value="" /><label for="q_0_2">Бірнеше рет (жағдайлардың жартысына қарағанда анағұрлым сирек)  </label></li>
                        <li><input type="radio" name="q_0" id="q_0_3" value="" /><label for="q_0_3">Кейде (шамамен жағдайлардың жартысында)</label></li>
                        <li><input type="radio" name="q_0" id="q_0_4" value="" /><label for="q_0_4">Жиі (жағдайлардың жартысына қарағанда анағұрлым жиі)</label></li>
                        <li><input type="radio" name="q_0" id="q_0_5" value="" /><label for="q_0_5">Әрқашан дерлік немесе әрқашан </label></li>
                    </ol>
                </div>
                <div class="questions" id="q_1">
                    <h3>
                        <span class="counter"><span class="digit">2</span></span>
                        ЖЫНЫСТЫҚ ҚОЗУ КЕЗІНДЕ СІЗДЕ ЭРЕКЦИЯ ПАЙДА БОЛҒАНДА, ОЛ ҚАНШАЛЫҚТЫ ЖИІ ЖЫНЫС МҮШЕСІН ҚЫНАПҚА ЕНГІЗУ ҮШІН ЖЕТКІЛІКТІ?
                    </h3>
                    <ol>
                        <li><input type="radio" name="q_1" id="q_1_1" value="" /><label for="q_1_1">Ешқашан дерлік немесе ешқашан</label></li>
                        <li><input type="radio" name="q_1" id="q_1_2" value="" /><label for="q_1_2">Бірнеше рет (жағдайлардың жартысына қарағанда анағұрлым сирек) </label></li>
                        <li><input type="radio" name="q_1" id="q_1_3" value="" /><label for="q_1_3">Кейде (шамамен жағдайлардың жартысында) </label></li>
                        <li><input type="radio" name="q_1" id="q_1_4" value="" /><label for="q_1_4">Жиі (жағдайлардың жартысына қарағанда анағұрлым жиі)</label></li>
                        <li><input type="radio" name="q_1" id="q_1_5" value="" /><label for="q_1_5">Әрқашан дерлік немесе әрқашан</label></li>
                    </ol>
                </div>
                <div class="questions" id="q_2">
                    <h3>
                        <span class="counter"><span class="digit">3</span></span>
                        ЖЫНЫСТЫҚ АКТ КЕЗІНДЕ ЖЫНЫС МҮШЕСІН ҚЫНАПҚА ЕНГІЗГЕННЕН КЕЙІН СІЗ ҚАНШАЛЫҚТЫ ЖИІ ЭРЕКЦИЯҒА ҚОЛДАУ КӨРСЕТЕ АЛАСЫЗ?   
                    </h3>
                    <ol>
                        <li><input type="radio" name="q_2" id="q_2_1" value="" /><label for="q_2_1">Ешқашан дерлік немесе ешқашан</label></li>
                        <li><input type="radio" name="q_2" id="q_2_2" value="" /><label for="q_2_2">Бірнеше рет (жағдайлардың жартысына қарағанда анағұрлым сирек)</label></li>
                        <li><input type="radio" name="q_2" id="q_2_3" value="" /><label for="q_2_3">Кейде (шамамен жағдайлардың жартысында)</label></li>
                        <li><input type="radio" name="q_2" id="q_2_4" value="" /><label for="q_2_4">Жиі (жағдайлардың жартысына қарағанда анағұрлым жиі)</label></li>
                        <li><input type="radio" name="q_2" id="q_2_5" value="" /><label for="q_2_5">Әрқашан дерлік немесе әрқашан</label></li>
                    </ol>
                </div>
                <div class="questions" id="q_3">
                    <h3>
                        <span class="counter"><span class="digit">4</span></span>
                        ЖЫНЫСТЫҚ АКТ КЕЗІНДЕ СОҢЫНА ДЕЙІН   ЭРЕКЦИЯҒА ҚОЛДАУ КӨРСЕТУ ҚАНШАЛЫҚТЫ ҚИЫН БОЛАДЫ?  АКТА?
                    </h3>
                    <ol>
                        <li><input type="radio" name="q_3" id="q_3_1" value="" /><label for="q_3_1">Аса қиын</label></li>
                        <li><input type="radio" name="q_3" id="q_3_2" value="" /><label for="q_3_2">Өте қиын</label></li>
                        <li><input type="radio" name="q_3" id="q_3_3" value="" /><label for="q_3_3">Қиын</label></li>
                        <li><input type="radio" name="q_3" id="q_3_4" value="" /><label for="q_3_4">Онша қиын емес</label></li>
                        <li><input type="radio" name="q_3" id="q_3_5" value="" /><label for="q_3_5">Жеңіл</label></li>
                    </ol>
                </div>
                <div class="questions" id="q_4">
                    <h3>
                        <span class="counter"><span class="digit">5</span></span>
                        СІЗ ҚАНШАЛЫҚТЫ ЖИІ ЖЫНЫСТЫҚ АКТіге қанағаттанасыз?       
                    </h3>
                    <ol>
                        <li><input type="radio" name="q_4" id="q_4_1" value="" /><label for="q_4_1">Ешқашан дерлік немесе ешқашан</label></li>
                        <li><input type="radio" name="q_4" id="q_4_2" value="" /><label for="q_4_2">Бірнеше рет (жағдайлардың жартысына қарағанда анағұрлым сирек)</label></li>
                        <li><input type="radio" name="q_4" id="q_4_3" value="" /><label for="q_4_3">Кейде (шамамен жағдайлардың жартысында)</label></li>
                        <li><input type="radio" name="q_4" id="q_4_4" value="" /><label for="q_4_4">Жиі (жағдайлардың жартысына қарағанда анағұрлым жиі)</label></li>
                        <li><input type="radio" name="q_4" id="q_4_5" value="" /><label for="q_4_5">Әрқашан дерлік немесе әрқашан</label></li>
                    </ol>
                </div>
            </div>
        
        <div id="result_block"></div>
        <p class="small">*Эректильді функцияның халықаралық индексі – ЭФХИ5</p>
        <div id="footer">
        <p>Назар аударыңыз, бұл тестінің нәтижелерін Сізді емдейтін дәрігер ғана толық түсіндіре алады, сондықтан өзін-өзі емдеумен айналысудың қажеті жоқ, дәрігерге жүгініңіз!</p>
        <h3 class="red">КӨП ЖАҒДАЙДА ЭРЕКТИЛЬДІ ДИСФУНКЦИЯ ЕМДЕУГЕ КЕЛЕДІ!</h3>
        </div>
    </div>
    

    </div>
    
    <div class="locator-frame">
        <a href="#locator" class="doctor" data-toggle="modal" data-target="#locator">дәрігерден білу керек!</a>    
    </div>
    
    
    <script src="/test_man/js/script.js" type="text/javascript"></script>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>