<?php

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'index';

?>
<div class="content_beg"  id="home">
	<div class="container">
	<section class="content_part1">
		<div class="content_part1_center">	
			<div id ="img_bl1" class="Img_block">
					<!-- <div class="blok1"><img src="/web/images/banner_edt.jpg" alt="<?=Yii::$app->name ?>" class="img-responsive blok1" ></div> -->

				<div class="row_text1">
					<div id="titleTxt">
					<p>ДОБРОВОЛЬНОЕ МЕДИЦИНСКОЕ СТРАХОВАНИЕ (ДМС)</p>
					</div>
					<div id="inText1">
					<p >это страхование возможных расходов на медицинское обслуживание, связанные с ухудшением здоровья.</p>
					</div>

				</div>
				
			</div>
		</div>
	</section>
	</div>
	<section class="content_part2_title">
		<div class="fluid_wigth">

			<div class="block2_title">
				<p>Программы добровольного медицинского страхования могут состоять из следующих частей:</p>
			</div>

		</div>
	</section>

	<section class  = "content_part2_element">
				<div class="container">
				<div class="row">

				<?php
					// local $partText1 $partText2;

					$catText = array("" , "Скорая помощь","Амбулаторно-поликлиническое обслуживание","Стоматология","Оплата лекарств","Стационарное обслуживание",
										"Оплата услуг докторов","Детская программа","Услуги скорой медицинской помощи","Ведение беременности","Программа \"Роды\"",
										"Санаторно-курортное обслуживание","Другие условия");

					for ($i=1; $i <= 12; $i++) { 
						echo <<<END
								<div class = "col-xs-6 col-sm-4 col-md-3 setBord$i">
									<div class = "servList"> 
										<div class = "imgBlock2">
											<img src="/web/images/icon_$i.png" alt="" id = "imgPart2">
										</div>
										<p class = "inText_pt2">$catText[$i]</p>
									</div>
								</div>
END;
				}
			?>
				</div>
				</div>
		
	</section>
	<div class="subContent">
		<p ><a class = "anchor" id = "simple"></a></p>
		<section class="content_part3_title">
				<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="block3_title">
							<p>Как видно из перечня опций, услуг может быть очень много. И описание всех условий страхования редко занимают менее 40 страниц. Поэтому мы отобрали для Вас наиболее простые и удобные программы, в которых несложно разобраться и которыми легко воспользоваться.</p>
						</div>
					</div>
				</div>
				</div>
		</section>
			<div class="container">
			<div class="row">
					<div class="col-xs-12">
			<section class="content_part3_element">
				<div class="part3UpElem1">
					<p id="prt3Title"> Простые программы </p>
					<p id= "prt3SubTitle"> <b> «Полная Медзащита» </b> – защита здоровья человека в важнейших жизненных ситуациях, 
						а именно: при возникновении острой болезни, критических заболеваний и смерти.</p>
				</div>	
				<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Минимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="check_mark">Смерть</p>
						<p id="cross_mark">Острая болезнь</p>
						<p id="cross_mark">Крит. заболевания</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">50 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">300 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs" >
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
				<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Оптимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="check_mark">Смерть</p>
						<p id="check_mark">Острая болезнь</p>
						<p id="cross_mark">Крит. заболевания</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">70 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">750 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
				<div class="SimplPack">
					<div class="part3Elem1 ">
						<p> Пакет <span id="bold_text"> “Максимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="check_mark">Смерть</p>
						<p id="check_mark">Острая болезнь</p>
						<p id="check_mark">Крит. заболевания</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">120 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">2500 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div class="hidden-sm hidden-md hidden-lg">
						<a href="#other"><button class="buttonElem1" id="sm_button">Заказать</button></a>
				</div>
				<div class="haveQuestion" >
					<p> Остались вопросы? <a href="#other" id="CallCons">Закажите консультацию</a> </p>
				</div>
				<!-- <p style="margin-top:150px">asd</p> -->
			</section>

			<p ><a class = "anchor" id = "privat"></a></p>
			<section class="content_part3_element">
				<div class="part3UpElem2">
					<p id="prt3Title"> Индивидуальные программы </p>
					<p id= "prt3SubTitle"> <b> «Индивидуальная защита» </b> – комплексные программы добровольного медицинского страхования 
						для одного человека.</p>
				</div>	
				<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Минимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="titleStyle">Скорая помощь, лимит</p>
						<p id="SummStyle">5 000 грн.</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">50 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">7500 - 16800 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
				<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Оптимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="titleStyle">Скорая помощь, лимит</p>
						<p id="SummStyle">11 000 грн.</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">150 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">8600 - 19500 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
				<div class="SimplPack">
					<div class="part3Elem1 ">
						<p> Пакет <span id="bold_text"> “Максимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="titleStyle">Скорая помощь, лимит</p>
						<p id="SummStyle">15 000 грн.</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">250 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">12000 - 27000 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div class="hidden-sm hidden-md hidden-lg">
						<a href="#other"><button class="buttonElem1" id="sm_button">Заказать</button></a>
				</div>
				<div class="haveQuestion" id="buttonSc">
					<p> Остались вопросы? <a href="#other" id="CallCons">Закажите консультацию</a> </p>
				</div>
				<!-- <p style="margin-top:150px">asd</p> -->
			</section>
			<p ><a class = "anchor" id = "family"></a></p>
			<section class="content_part3_element">
				<div class="part3UpElem3">
					<p id="prt3Title"> Семейные программы </p>
					<p id= "prt3SubTitle"> <b> «Семейная защита» </b> – комплексные программы добровольного медицинского страхования для 
						семьи по причине острого заболевания, обострения хронических болезней, травм, ожогов, отравлений.</p>
				</div>	
				<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Минимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="titleStyle">Скорая помощь, лимит</p>
						<p id="SummStyle">5 000 грн.</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">50 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">7500 - 16800 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs" >
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
				<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Оптимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="titleStyle">Скорая помощь, лимит</p>
						<p id="SummStyle">10 000 грн.</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">150 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">8600 - 19500 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
				<div class="SimplPack">
					<div class="part3Elem1 ">
						<p> Пакет <span id="bold_text"> “Максимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="titleStyle">Скорая помощь, лимит</p>
						<p id="SummStyle">15 000 грн.</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">250 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">12000 - 27000 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs" >
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div class="hidden-sm hidden-md hidden-lg">
						<a href="#other"><button class="buttonElem1" id="sm_button">Заказать</button></a>
				</div>
				<div class="haveQuestion">
					<p> Остались вопросы? <a href="#other" id="CallCons">Закажите консультацию</a> </p>
				</div>
				<!-- <p style="margin-top:150px">asd</p> -->
			</section>
			
			<section class="content_part4_title">
				<div class="fluid_wigth">

					<div class="block4_title">
						<p>Если вы не нашли для себя подходящую программу страхования, или если вы хотите застраховать несколько человек (например, семью или сотрудников), мы готовы вам помочь. Для этого всего-лишь оставьте заявку.</p>
					</div>

				</div>
			</section>
			<p ><a class = "anchor" id = "other"></a></p>
			<p ><a class = "anchor" id = "Buy"></a></p>

			<section class="EmailForm">

				<div class="site-contact">
   				<p ><a class = "anchor" id = "thxyou"></a></p>
				    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

				        <div class="alert alert-info textCenterSucc">
				            Thank you for contacting us. We will respond to you as soon as possible.
				        </div>

				    <?php else: ?>


				        <div class="row">
				       
				            <div class="contacForm">
				            

				                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

				                    <?= $form->field($model, 'name')->textInput(['placeholder'=>'Ваш телефон (обязательно)'])?>

				                    <?= $form->field($model, 'email') ->textInput(['placeholder'=>'Ваш e-mail...'])?>

				                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
				                  	

				                    <div class="form-group">
				                        <?= Html::submitButton('Оставить заявку', ['class' => 'btn btn-primary buttonElemSubmit', 'name' => 'contact-button']) ?>
				                    </div>

				                <?php ActiveForm::end(); ?>
						
				            </div>
				        </div>

				    <?php endif; ?>
				</div>
				 
			</section>
		</div>
	</div>
	</div>
	</div>
</div>	
 <div class="fluid_wigth">	
<div class="panel-group" id="collapse-group">
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">Минимальный</a>
 </h4>
 </div>
 <div id="el1" class="panel-collapse collapse">
 <div class="panel-body">
 	<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Минимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="check_mark">Смерть</p>
						<p id="cross_mark">Острая болезнь</p>
						<p id="cross_mark">Крит. заболевания</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">50 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">300 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs" >
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
				<div id = "borderBottom"></div>
 </div>
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">Оптимальный</a>
 </h4>
 </div>
 <div id="el2" class="panel-collapse collapse">
 <div class="panel-body">
 	<div class="SimplPack">
					<div class="part3Elem1">
						<p> Пакет <span id="bold_text"> “Оптимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="check_mark">Смерть</p>
						<p id="check_mark">Острая болезнь</p>
						<p id="cross_mark">Крит. заболевания</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">70 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">750 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
 </div>
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#collapse-group" href="#el3">Максимальный</a>
 </h4>
 </div>
 <div id="el3" class="panel-collapse collapse">
 <div class="panel-body">
 	<div class="SimplPack">
					<div class="part3Elem1 ">
						<p> Пакет <span id="bold_text"> “Максимальный” </span> </p>
					</div>
					
					<div class="part3Elem2">
						<p id="check_mark">Смерть</p>
						<p id="check_mark">Острая болезнь</p>
						<p id="check_mark">Крит. заболевания</p>
					</div>
					<div class="part3Elem3">
						<p id="titleStyle">Страховая сумма</p>
						<p id="SummStyle">120 000 грн.</p>
					</div>
					<div class="part3Elem4">
						<p id="titleStyle">Страховой платеж</p>
						<p id="SummStyle">2500 грн.</p>
					</div>
					<div class="part3Elem5 hidden-xs">
						<a href="#other"><button class="buttonElem1">Заказать</button></a>
					</div>
				</div>
 </div>
 </div>
 </div>
</div>
</div>

