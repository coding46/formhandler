<?php
namespace Tx\Formhandler\Hooks;

class ClearCache {

	public function clearCache($params) {
		if(file_exists(PATH_site . 'typo3temp/' . 'formhandlerClassesCache.txt')) {
			unlink(PATH_site . 'typo3temp/' . 'formhandlerClassesCache.txt');
		}
	}

}

?>