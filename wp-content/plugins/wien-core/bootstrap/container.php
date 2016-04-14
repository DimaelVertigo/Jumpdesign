<?php
class ffPluginWienCoreContainer extends ffPluginContainerAbstract {
	/**
	 * @var ffPluginWienCore
	 */
	private static $_instance = null;

	const STRUCTURE_NAME = 'ff_fresh_favicon';

	/**
	 * @param ffContainer $container
	 * @param string $pluginDir
	 * @return ffPluginWienCoreContainer
	 */
	public static function getInstance( ffContainer $container = null, $pluginDir = null ) {
		if( self::$_instance == null ) {
			self::$_instance = new ffPluginWienCoreContainer($container, $pluginDir);
		}

		return self::$_instance;
	}

	protected function _registerFiles() {
		$pluginDir = $this->_getPluginDir();
		$classLoader =$this->getFrameworkContainer()->getClassLoader();

        $classLoader->addClass('ffShortcodeDropcap', $pluginDir . '/components/shortcodes/class.ffShortcodeDropcap.php' );
        $classLoader->addClass('ffShortcodeHeaderUnderlined', $pluginDir . '/components/shortcodes/class.ffShortcodeHeaderUnderlined.php' );
        $classLoader->addClass('ffShortcodeMark', $pluginDir . '/components/shortcodes/class.ffShortcodeMark.php' );


	}

}

