/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';config.filebrowserBrowseUrl = jsConfig.base + 'assets/filesManagement/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = jsConfig.base + 'assets/filesManagement/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = jsConfig.base + 'assets/filesManagement/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = jsConfig.base + 'assets/filesManagement/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = jsConfig.base + 'assets/filesManagement/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = jsConfig.base + 'assets/filesManagement/kcfinder/upload.php?opener=ckeditor&type=flash';
   
	
};
