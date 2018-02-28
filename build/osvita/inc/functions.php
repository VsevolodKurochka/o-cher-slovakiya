<?php

	function form($buttonText){
		$return = '<form class="v-form v-form_block" action="mail.php" method="POST">
									<div class="v-form__content">
										<div class="v-form__row"><input class="v-form__control" name="vname" type="text" placeholder="Ваше имя" required/>
										</div>
										<div class="v-form__row"><input class="v-form__control" name="vemail" type="email" placeholder="Ваш email" required/>
										</div>
										<div class="v-form__row"><input class="v-form__control" name="vphone" type="tel" placeholder="Ваш телефон" required/>
										</div>
										<div class="v-form__row">
											<button class="v-form__submit v-btn v-btn_brand-1 v-btn_shadow-brand-1 v-btn_size-fluid v-effect v-effect_bounce-top" type="submit">'.$buttonText.'</button>
										</div>
									</div>
								</form>';

		return $return;
	}

	function quadro($style, $parentClass, $number){
		$return = '<div class="v-quadro v-quadro_style-'.$style.' '.$parentClass.'__quadro '.$parentClass.'__quadro_'.$number.'" data-emergence="hidden">
					<span class="v-quadro__part v-quadro__part_1"></span>
					<span class="v-quadro__part v-quadro__part_2"></span>
					<span class="v-quadro__part v-quadro__part_3"></span>
					<span class="v-quadro__part v-quadro__part_4"></span>
					<span class="v-quadro__part v-quadro__part_5"></span>
					<span class="v-quadro__part v-quadro__part_6"></span>
					<span class="v-quadro__part v-quadro__part_7"></span>
					<span class="v-quadro__part v-quadro__part_8"></span>
					<span class="v-quadro__part v-quadro__part_9"></span>
				</div>';

		return $return;
	}

?>