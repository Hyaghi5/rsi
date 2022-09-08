/**
 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */
//CKEDITOR.timestamp = ( new Date() ).valueOf();
//CKEDITOR.timestamp = (new Date()).toString().replace(/[ \(\)\+]/g, "");
CKEDITOR.editorConfig = function(config) {
// Define changes to default configuration here. For example:

    config.language = 'ar';
    config.extraPlugins = 'youtube';
    config.enterMode = CKEDITOR.ENTER_BR;
    config.shiftEnterMode = CKEDITOR.ENTER_P;


    config.toolbar_Common = [
        {items: ['Maximize', 'Source']},
        {groups: ['clipboard', 'undo', 'find', 'selection']},
        {groups: ['basicstyles', 'cleanup']},
        {items: ['Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']},
        {items: ['Link', 'Unlink']},
        {items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-']},
        {items: ['Image', 'Table', 'HorizontalRule', 'Iframe']},
        {items: ['TextColor', 'BGColor']},
        {items: ['Styles', 'Format', 'Font', 'FontSize', 'Youtube']}
    ];

    config.toolbar_Full =
            [
                {name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'DocProps', 'Preview', 'Print', '-', 'Templates']},
                {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
                {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt']},
                {name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                        'HiddenField']},
                '/',
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
                {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv',
                        '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']},
                {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                {name: 'insert', items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']},
                '/',
                {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
                {name: 'colors', items: ['TextColor', 'BGColor']},
                {name: 'tools', items: ['Maximize', 'ShowBlocks', '-', 'About', 'Youtube']}
            ];
};
