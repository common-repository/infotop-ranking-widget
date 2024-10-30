<?php
/*
Plugin Name: Infotop Ranking Widget
Plugin URI: http://infotop.u4mo.com/plugins/infotop-ranking-widget/
Description: Widget that displays the best-selling ranking in the "Infotop".Ranking is updated automatically.You can start an affiliate with this widget.
Author: u4mo.com
Version: 1.0.2
Author URI: http://infotop.u4mo.com/blog-parts/
*/

add_action(
    'widgets_init',
    create_function('', 'return register_widget("InfotopRankingWidget");')
);


class InfotopRankingWidget extends WP_Widget {
    function __construct() {
		load_plugin_textdomain('infotop-ranking-widget', false, basename( dirname( __FILE__ ) ) . '/language' );
		$widget_ops = array('description' => __('Infotop ranking widget', 'infotop-ranking-widget'));
		$control_ops = array();
		parent::__construct(
			false,
			$name=__('Infotop Ranking', 'infotop-ranking-widget'),
			$widget_ops,
			$control_ops
		);
    }

	public function form($par) {
		
		$title = (isset($par['title']) && $par['title']) ? $par['title'] : '';
		$id = $this->get_field_id('title');
		$name = $this->get_field_name('title');
		echo _e('Title:', 'infotop-ranking-widget').'<br />';
		
		if($title != ''){
			
			echo '<input type="text" class="widefat" id="'.$id.'" name="'.$name.'" value="';
			echo trim(htmlentities($title, ENT_QUOTES, 'UTF-8'));
			echo '" />';
		}else{
			$ir = __('Infotop Ranking', 'infotop-ranking-widget');
			echo '<input type="text" class="widefat" id="'.$id.'" name="'.$name.'" value="'.$ir.'" />';
		}
		

		echo '<br />';
		
		
		$aid = (isset($par['aid']) && $par['aid']) ? $par['aid'] : '';
		$id = $this->get_field_id('aid');
		$name = $this->get_field_name('aid');
		echo _e('Affiliate ID:', 'infotop-ranking-widget').'<br />';
		echo '<input type="text" class="widefat" id="'.$id.'" name="'.$name.'" value="';
		echo trim(htmlentities($aid, ENT_QUOTES, 'UTF-8'));
		echo '" />';
		echo '<br />';
		
		$category = (isset($par['category']) && $par['category']) ? $par['category'] : '';
		$id = $this->get_field_id('category');
		$name = $this->get_field_name('category');
		echo _e('Category:', 'infotop-ranking-widget').'<br />';
		echo '<select  class="widefat"  id="'.$id.'" name="'.$name.'">';
		switch(true){
			case $category === '0';   $s0  = 'selected="selected"';break;
			case $category === '63';  $s63 = 'selected="selected"';break;
			case $category === '1';   $s1  = 'selected="selected"';break;
			case $category === '2';   $s2  = 'selected="selected"';break;
			case $category === '3';   $s3  = 'selected="selected"';break;
			case $category === '4';   $s4  = 'selected="selected"';break;
			case $category === '5';   $s5  = 'selected="selected"';break;
			case $category === '6';   $s6  = 'selected="selected"';break;
			case $category === '7';   $s7  = 'selected="selected"';break;
			case $category === '8';   $s8  = 'selected="selected"';break;
			case $category === '9';   $s9  = 'selected="selected"';break;
			case $category === '10'; $s10  = 'selected="selected"';break;
			case $category === '11'; $s11  = 'selected="selected"';break;
			case $category === '12'; $s12  = 'selected="selected"';break;
			case $category === '13'; $s13  = 'selected="selected"';break;
			case $category === '14'; $s14  = 'selected="selected"';break;
			case $category === '15'; $s15  = 'selected="selected"';break;
			case $category === '16'; $s16  = 'selected="selected"';break;
			case $category === '17'; $s17  = 'selected="selected"';break;
			case $category === '18'; $s18  = 'selected="selected"';break;
			case $category === '19'; $s19  = 'selected="selected"';break;
			case $category === '20'; $s20  = 'selected="selected"';break;
			case $category === '21'; $s21  = 'selected="selected"';break;
			case $category === '22'; $s22  = 'selected="selected"';break;
			case $category === '23'; $s23  = 'selected="selected"';break;
			case $category === '24'; $s24  = 'selected="selected"';break;
			case $category === '25'; $s25  = 'selected="selected"';break;
			case $category === '26'; $s26  = 'selected="selected"';break;
			case $category === '27'; $s27  = 'selected="selected"';break;
			case $category === '28'; $s28  = 'selected="selected"';break;
			case $category === '29'; $s29  = 'selected="selected"';break;
			case $category === '30'; $s30  = 'selected="selected"';break;
			case $category === '31'; $s31  = 'selected="selected"';break;
			case $category === '32'; $s32  = 'selected="selected"';break;
			case $category === '33'; $s33  = 'selected="selected"';break;
			case $category === '34'; $s34  = 'selected="selected"';break;
			case $category === '35'; $s35  = 'selected="selected"';break;
			case $category === '36'; $s36  = 'selected="selected"';break;
			case $category === '37'; $s37  = 'selected="selected"';break;
			case $category === '38'; $s38  = 'selected="selected"';break;
			case $category === '39'; $s39  = 'selected="selected"';break;
			case $category === '40'; $s40  = 'selected="selected"';break;
			case $category === '41'; $s41  = 'selected="selected"';break;
			case $category === '42'; $s42  = 'selected="selected"';break;
			case $category === '43'; $s43  = 'selected="selected"';break;
			case $category === '44'; $s44  = 'selected="selected"';break;
			case $category === '45'; $s45  = 'selected="selected"';break;
			case $category === '46'; $s46  = 'selected="selected"';break;
			case $category === '47'; $s47  = 'selected="selected"';break;
			case $category === '48'; $s48  = 'selected="selected"';break;
			case $category === '49'; $s49  = 'selected="selected"';break;
			case $category === '50'; $s50  = 'selected="selected"';break;
			case $category === '51'; $s51  = 'selected="selected"';break;
			case $category === '52'; $s52  = 'selected="selected"';break;
			case $category === '53'; $s53  = 'selected="selected"';break;
			case $category === '54'; $s54  = 'selected="selected"';break;
			case $category === '55'; $s55  = 'selected="selected"';break;
			case $category === '56'; $s56  = 'selected="selected"';break;
			case $category === '57'; $s57  = 'selected="selected"';break;
			case $category === '58'; $s58  = 'selected="selected"';break;
			case $category === '59'; $s59  = 'selected="selected"';break;
			case $category === '60'; $s60  = 'selected="selected"';break;
			case $category === '61'; $s61  = 'selected="selected"';break;
			default:break;
		}
		
		$s0name = __('Hot(24h)', 'infotop-ranking-widget');
		$s1name = __('Business', 'infotop-ranking-widget');
		$s2name = __('Info entrepreneurs', 'infotop-ranking-widget');
		$s3name = __('Affiliate', 'infotop-ranking-widget');
		$s4name = __('Auction', 'infotop-ranking-widget');
		$s5name = __('Other(Net Business)', 'infotop-ranking-widget');
		$s6name = __('SOHO/Entrepreneurship', 'infotop-ranking-widget');
		$s7name = __('Other(Business)', 'infotop-ranking-widget');
		$s8name = __('Money/Investment', 'infotop-ranking-widget');
		$s9name = __('FX', 'infotop-ranking-widget');
		$s10name = __('Stock', 'infotop-ranking-widget');
		$s11name = __('Futures trading', 'infotop-ranking-widget');
		$s12name = __('Fund/Real estate', 'infotop-ranking-widget');
		$s13name = __('Computer/Internet', 'infotop-ranking-widget');
		$s14name = __('SEO/SEM', 'infotop-ranking-widget');
		$s15name = __('Mail Magazine', 'infotop-ranking-widget');
		$s16name = __('Homepage', 'infotop-ranking-widget');
		$s17name = __('Blog/SNS/Tools', 'infotop-ranking-widget');
		$s18name = __('Home/Living', 'infotop-ranking-widget');
		$s19name = __('Life', 'infotop-ranking-widget');
		$s20name = __('Children', 'infotop-ranking-widget');
		$s21name = __('Cooking', 'infotop-ranking-widget');
		$s22name = __('Marriage', 'infotop-ranking-widget');
		$s23name = __('Troubles of life', 'infotop-ranking-widget');
		$s24name = __('Other(Home/Living)', 'infotop-ranking-widget');
		$s25name = __('Beauty/Health', 'infotop-ranking-widget');
		$s26name = __('Diet', 'infotop-ranking-widget');
		$s27name = __('Beauty regimen', 'infotop-ranking-widget');
		$s28name = __('Body worries', 'infotop-ranking-widget');
		$s29name = __('Medical care', 'infotop-ranking-widget');
		$s30name = __('Health', 'infotop-ranking-widget');
		$s31name = __('Other(Beauty/Health)', 'infotop-ranking-widget');
		$s32name = __('Learning', 'infotop-ranking-widget');
		$s33name = __('Language study', 'infotop-ranking-widget');
		$s34name = __('Qualification', 'infotop-ranking-widget');
		$s35name = __('Self-development', 'infotop-ranking-widget');
		$s36name = __('Other(Learning)', 'infotop-ranking-widget');
		$s37name = __('Entertainment', 'infotop-ranking-widget');
		$s38name = __('Fortune-telling', 'infotop-ranking-widget');
		$s39name = __('Game', 'infotop-ranking-widget');
		$s40name = __('Hobby/Music/Sport', 'infotop-ranking-widget');
		$s41name = __('Gourmet/Travel', 'infotop-ranking-widget');
		$s42name = __('Other(Entertainment)', 'infotop-ranking-widget');
		$s43name = __('Content', 'infotop-ranking-widget');
		$s44name = __('Novel', 'infotop-ranking-widget');
		$s45name = __('Music', 'infotop-ranking-widget');
		$s46name = __('Image', 'infotop-ranking-widget');
		$s47name = __('Material', 'infotop-ranking-widget');
		$s48name = __('Ringtone', 'infotop-ranking-widget');
		$s49name = __('Decoration Mail', 'infotop-ranking-widget');
		$s50name = __('Comic', 'infotop-ranking-widget');
		$s51name = __('Photo album', 'infotop-ranking-widget');
		$s52name = __('Game/Application', 'infotop-ranking-widget');
		$s53name = __('Other(Content)', 'infotop-ranking-widget');
		$s54name = __('Love/Communication', 'infotop-ranking-widget');
		$s55name = __('Love technique', 'infotop-ranking-widget');
		$s56name = __('Conversation technique', 'infotop-ranking-widget');
		$s57name = __('Relationship', 'infotop-ranking-widget');
		$s58name = __('Other(Love)', 'infotop-ranking-widget');
		$s59name = __('Other', 'infotop-ranking-widget');
		$s60name = __('Adult', 'infotop-ranking-widget');
		$s61name = __('Gamble', 'infotop-ranking-widget');
		$s63name = __('Hot(30days)', 'infotop-ranking-widget');
		
		echo '<option value="0"   '.$s0.'>'.$s0name.'</option>';
		echo '<option value="63"  '.$s63.'>'.$s63name.'</option>';
		echo '<option value="1"   '.$s1.'>'.$s1name.'</option>';
		echo '<option value="2"   '.$s2.'>├ '.$s2name.'</option>';
		echo '<option value="3"   '.$s3.'>├ '.$s3name.'</option>';
		echo '<option value="4"   '.$s4.'>├ '.$s4name.'</option>';
		echo '<option value="5"   '.$s5.'>├ '.$s5name.'</option>';
		echo '<option value="6"   '.$s6.'>├ '.$s6name.'</option>';
		echo '<option value="7"   '.$s7.'>└ '.$s7name.'</option>';
		echo '<option value="8"   '.$s8.'>【'.$s8name.'】</option>';
		echo '<option value="9"   '.$s9.'>├ '.$s9name.'</option>';
		echo '<option value="10"  '.$s10.'>├ '.$s10name.'</option>';
		echo '<option value="11"  '.$s11.'>├ '.$s11name.'</option>';
		echo '<option value="12"  '.$s12.'>└ '.$s12name.'</option>';
		echo '<option value="13"  '.$s13.'>【'.$s13name.'】</option>';
		echo '<option value="14"  '.$s14.'>├ '.$s14name.'</option>';
		echo '<option value="15"  '.$s15.'>├ '.$s15name.'</option>';
		echo '<option value="16"  '.$s16.'>├ '.$s16name.'</option>';
		echo '<option value="17"  '.$s17.'>└ '.$s17name.'</option>';
		echo '<option value="18"  '.$s18.'>【'.$s18name.'】</option>';
		echo '<option value="19"  '.$s19.'>├ '.$s19name.'</option>';
		echo '<option value="20"  '.$s20.'>├ '.$s20name.'</option>';
		echo '<option value="21"  '.$s21.'>├ '.$s21name.'</option>';
		echo '<option value="22"  '.$s22.'>├ '.$s22name.'</option>';
		echo '<option value="23"  '.$s23.'>├ '.$s23name.'</option>';
		echo '<option value="24"  '.$s24.'>└ '.$s24name.'</option>';
		echo '<option value="25"  '.$s25.'>【'.$s25name.'】</option>';
		echo '<option value="26"  '.$s26.'>├ '.$s26name.'</option>';
		echo '<option value="27"  '.$s27.'>├ '.$s27name.'</option>';
		echo '<option value="28"  '.$s28.'>├ '.$s28name.'</option>';
		echo '<option value="29"  '.$s29.'>├ '.$s29name.'</option>';
		echo '<option value="30"  '.$s30.'>├ '.$s30name.'</option>';
		echo '<option value="31"  '.$s31.'>└ '.$s31name.'</option>';
		echo '<option value="32"  '.$s32.'>【'.$s32name.'】</option>';
		echo '<option value="33"  '.$s33.'>├ '.$s33name.'</option>';
		echo '<option value="34"  '.$s34.'>├ '.$s34name.'</option>';
		echo '<option value="35"  '.$s35.'>├ '.$s35name.'</option>';
		echo '<option value="36"  '.$s36.'>└ '.$s36name.'</option>';
		echo '<option value="37"  '.$s37.'>【'.$s37name.'】</option>';
		echo '<option value="38"  '.$s38.'>├ '.$s38name.'</option>';
		echo '<option value="39"  '.$s39.'>├ '.$s39name.'</option>';
		echo '<option value="40"  '.$s40.'>├ '.$s40name.'</option>';
		echo '<option value="41"  '.$s41.'>├ '.$s41name.'</option>';
		echo '<option value="42"  '.$s42.'>└ '.$s42name.'</option>';
		echo '<option value="43"  '.$s43.'>【'.$s43name.'】</option>';
		echo '<option value="44"  '.$s44.'>├ '.$s44name.'</option>';
		echo '<option value="45"  '.$s45.'>├ '.$s45name.'</option>';
		echo '<option value="46"  '.$s46.'>├ '.$s46name.'</option>';
		echo '<option value="47"  '.$s47.'>├ '.$s47name.'</option>';
		echo '<option value="48"  '.$s48.'>├ '.$s48name.'</option>';
		echo '<option value="49"  '.$s49.'>├ '.$s49name.'</option>';
		echo '<option value="50"  '.$s50.'>├ '.$s50name.'</option>';
		echo '<option value="51"  '.$s51.'>├ '.$s51name.'</option>';
		echo '<option value="52"  '.$s52.'>├ '.$s52name.'</option>';
		echo '<option value="53"  '.$s53.'>└ '.$s53name.'</option>';
		echo '<option value="54"  '.$s54.'>【'.$s54name.'】</option>';
		echo '<option value="55"  '.$s55.'>├ '.$s55name.'</option>';
		echo '<option value="56"  '.$s56.'>├ '.$s56name.'</option>';
		echo '<option value="57"  '.$s57.'>├ '.$s57name.'</option>';
		echo '<option value="58"  '.$s58.'>└'.$s58name.'</option>';
		echo '<option value="59"  '.$s59.'>【'.$s59name.'】</option>';
		echo '<option value="60"  '.$s60.'>├ '.$s60name.'</option>';
		echo '<option value="61"  '.$s61.'>└ '.$s61name.'</option>';
		echo '</select>';

		echo '<br />';
		$width = (isset($par['width']) && $par['width']) ? $par['width'] : '';
		$id = $this->get_field_id('width');
		$name = $this->get_field_name('width');
		echo _e('Width:', 'infotop-ranking-widget').'<br />';
		echo '<input type="text" id="'.$id.'" name="'.$name.'" value="';
		echo trim(htmlentities($width, ENT_QUOTES, 'UTF-8'));
		echo '" />';
		echo '&nbsp;px<br />';

		$height = (isset($par['height']) && $par['height']) ? $par['height'] : '';
		$id = $this->get_field_id('height');
		$name = $this->get_field_name('height');
		echo _e('Height:', 'infotop-ranking-widget').'<br />';
		echo '<input type="text" id="'.$id.'" name="'.$name.'" value="';
		echo trim(htmlentities($height, ENT_QUOTES, 'UTF-8'));
		echo '" />';
		echo '&nbsp;px<br />';

    }
 
    public function update($new_instance, $old_instance) {
        return $new_instance;
    }
 
    public function widget($args, $par) {
	
		if($par['width'] !=""){ $dw =$par['width']; }else{ $dw ='260'; }
 		if($par['height'] !=""){ $dh =$par['height']; }else{ $dh ='659'; }
    	$url ='http://infotop.u4mo.com/blog-parts/r.php?id='.$par['aid'].'&c='.$par['category'].'&dw='.$dw.'&dh='.$dh.'&is=0&strcode=1';
		echo $args['before_widget'];
        echo $args['before_title'];
        echo $par['title'];
        echo $args['after_title'];
        echo '<script type="text/javascript" src="'.$url.'"></script>';
        echo $args['after_widget'];
        $dw =""; $dh="";
    }
}


