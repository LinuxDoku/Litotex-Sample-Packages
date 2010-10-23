<?php
/**
 * This is a sample package which displays a little message in
 * the left and the right sidebar
 *
 * @author: Martin Lantzsch <martin@linux-doku.de>
 * @copyright: 2010
 */
class package_sample2 extends package {
    /**
     * Package name
     * @var string
     */
    protected $_packageName = 'sample2';

    /**
     * Avaibilbe actions in this package
     * @var array
     */
    protected $_availableActions = array();

    /**
     * Register all hooks of this package
     * @return bool
     */
    public static function registerHooks(){
		self::_registerHook(__CLASS__, 'sample2', 0);
		return true;
    }
   public static function registerTplModifications(){
    	self::_registerTplModification(__CLASS__, 'sample2', 'sample2');
    	return true;
    }

    /**
     * Main action
     */
    public function __action_main() {
        return true;
    }

    /**
     * Method of the "tempalteSidebarRight" hook
     * return bool
     */
    public static function __hook_sample2() {
        echo "Hello World  (sample2)!";
        return true;
    }

 	public static function  __tpl_sample2() {
        return self::__hook_sample2(2);
    }
    public function displayDepExample(){
    	return "<p>Hallo Welt! Ich bin eine Demonstration der Funktion des automatischen ladens und initilisierens von Abhängigkeiten, betet doch den Paketmanager einfach mal an. Weil ich eine echte Instanz bin, kann ich auch Variablen anzeigen, die nicht als static deklariert worden sind... hier ein Beispiel anhand von \"\$_packageName\": " . $this->_packageName . " Viel Spaß!</p>";
    }
}