<?php

class ffComponent_TwitterWidget_Printer extends ffBasicObject {
	public function printComponent( $args, ffOptionsQuery $query) {
		extract( $args );

		$twitterFeeder = ffContainer::getInstance()->getLibManager()->createTwitterFeeder();
		ffContainer::getInstance()->getClassLoader()->loadClass('ffOptionsHolder_Twitter');

		$tweetsCollection = ($twitterFeeder->getTwitterFeed( $query->get('twitter fw_twitter')  ));

		$tweetsText = '';
		if( ! $tweetsCollection->valid() ){
				$tweetsText .= '<li>';
				$tweetsText .= '<span class="tweet_text">';
					$tweetsText .= '<p style="font-size:40px">Oops!</p>';
					$tweetsText .= '<p>Bad Twitter account data!</p>';
				$tweetsText .= '</span>';
				$tweetsText .= '</li>';
		}else{
			foreach( $tweetsCollection as $oneTweet ) {
				$tweetsText .= '<li>';
					$tweetsText .= '<span class="tweet_text">';
						$tweetsText .= $oneTweet->text;
					$tweetsText .= '</span>';

					$tweetsText .= '<span class="tweet_time">';

						$timeFormat = 'g:i A - j M Y';
						$time = ( strtotime($oneTweet->date) );
						$date = date( $timeFormat, $time);

						$tweetsText .= '<a href="'.esc_url('http://twitter.com/'.esc_attr( $query->get('twitter fw_twitter username')) ).'">';
							$tweetsText .= $date;
						$tweetsText .= '</a>';

					$tweetsText .= '</span>';

				$tweetsText .= '</li>';
			}
		}

		echo ($before_widget);

		$title = trim( $query->get('twitter title') );
		if( !empty($title) ){

			// Default WP text
			echo ($before_title) . ff_wp_kses( $title ) . ($after_title);
		}

		echo '<ul>';
			echo ff_wp_kses( $tweetsText );
		echo '</ul>';

		echo ($after_widget);

	}
}