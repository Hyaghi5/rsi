/*
 * Youtube Embed Plugin
 *
 * @author Jonnas Fonini <contato@fonini.net>
 * @version 1.0.3
 */
function ytVidId(e){var t=/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;return e.match(t)?RegExp.$1:false}function hmsToSeconds(e){var t=e.split(":"),n=0,r=1;while(t.length>0){n+=r*parseInt(t.pop(),10);r*=60}return n}(function(){CKEDITOR.plugins.add("youtube",{lang:["ar","en","pt","ja","hu","it"],init:function(e){e.addCommand("youtube",new CKEDITOR.dialogCommand("youtube",{allowedContent:"iframe[!width,!height,!src,!frameborder,!allowfullscreen]; object param[*]"}));e.ui.addButton("Youtube",{label:e.lang.youtube.button,toolbar:"insert",command:"youtube",icon:this.path+"images/icon.png"});CKEDITOR.dialog.add("youtube",function(t){var n;return{title:e.lang.youtube.title,minWidth:500,minHeight:200,contents:[{id:"youtubePlugin",expand:true,elements:[{id:"txtEmbed",type:"textarea",label:e.lang.youtube.txtEmbed,autofocus:"autofocus",onChange:function(e){if(this.getValue().length>0){this.getDialog().getContentElement("youtubePlugin","txtUrl").disable()}else{this.getDialog().getContentElement("youtubePlugin","txtUrl").enable()}},validate:function(){if(this.isEnabled()){if(!this.getValue()){alert(e.lang.youtube.noCode);return false}else if(this.getValue().length===0||this.getValue().indexOf("//")===-1){alert(e.lang.youtube.invalidEmbed);return false}}}},{type:"html",html:e.lang.youtube.or+"<hr>"},{type:"hbox",widths:["70%","15%","15%"],children:[{id:"txtUrl",type:"text",label:e.lang.youtube.txtUrl,onChange:function(e){if(this.getValue().length>0){this.getDialog().getContentElement("youtubePlugin","txtEmbed").disable()}else{this.getDialog().getContentElement("youtubePlugin","txtEmbed").enable()}},validate:function(){if(this.isEnabled()){if(!this.getValue()){alert(e.lang.youtube.noCode);return false}else{n=ytVidId(this.getValue());if(this.getValue().length===0||n===false){alert(e.lang.youtube.invalidUrl);return false}}}}},{type:"text",id:"txtWidth",width:"60px",label:e.lang.youtube.txtWidth,"default":e.config.youtube_width!=null?e.config.youtube_width:"640",validate:function(){if(this.getValue()){var t=parseInt(this.getValue())||0;if(t===0){alert(e.lang.youtube.invalidWidth);return false}}else{alert(e.lang.youtube.noWidth);return false}}},{type:"text",id:"txtHeight",width:"60px",label:e.lang.youtube.txtHeight,"default":e.config.youtube_height!=null?e.config.youtube_height:"360",validate:function(){if(this.getValue()){var t=parseInt(this.getValue())||0;if(t===0){alert(e.lang.youtube.invalidHeight);return false}}else{alert(e.lang.youtube.noHeight);return false}}}]},{type:"hbox",widths:["55%","45%"],children:[{id:"chkRelated",type:"checkbox","default":e.config.youtube_related!=null?e.config.youtube_related:true,label:e.lang.youtube.chkRelated},{id:"chkOlderCode",type:"checkbox","default":e.config.youtube_older!=null?e.config.youtube_older:false,label:e.lang.youtube.chkOlderCode}]},{type:"hbox",widths:["55%","45%"],children:[{id:"chkPrivacy",type:"checkbox",label:e.lang.youtube.chkPrivacy,"default":e.config.youtube_privacy!=null?e.config.youtube_privacy:false},{id:"txtStartAt",type:"text",label:e.lang.youtube.txtStartAt,validate:function(){if(this.getValue()){var t=this.getValue();if(!/^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$/i.test(t)){alert(e.lang.youtube.invalidTime);return false}}}}]}]}],onOk:function(){var e="";if(this.getContentElement("youtubePlugin","txtEmbed").isEnabled()){e=this.getValueOf("youtubePlugin","txtEmbed")}else{var t="//",r=[],i;var s=this.getValueOf("youtubePlugin","txtWidth");var o=this.getValueOf("youtubePlugin","txtHeight");if(this.getContentElement("youtubePlugin","chkPrivacy").getValue()===true){t+="www.youtube-nocookie.com/"}else{t+="www.youtube.com/"}t+="embed/"+n;if(this.getContentElement("youtubePlugin","chkRelated").getValue()===false){r.push("rel=0")}i=this.getValueOf("youtubePlugin","txtStartAt");if(i){var u=hmsToSeconds(i);r.push("start="+u)}r.push("theme=light");if(this.getContentElement("youtubePlugin","chkOlderCode").getValue()===true){t=t.replace("embed/","v/");t=t.replace(/&/g,"&");if(r.length==0){t+="?"}t+="hl=pt_BR&version=3";e='<object width="'+s+'" height="'+o+'">';e+='<param name="movie" value="'+t+'"></param>';e+='<param name="allowFullScreen" value="true"></param>';e+='<param name="allowscriptaccess" value="always"></param>';e+='<embed src="'+t+'" type="application/x-shockwave-flash" ';e+='width="'+s+'" height="'+o+'" allowscriptaccess="always" ';e+='allowfullscreen="true"></embed>';e+="</object>"}else{if(r.length>0){t=t+"?"+r.join("&")}e='<iframe width="'+s+'" height="'+o+'" src="'+t+'" ';e+='frameborder="0" allowfullscreen></iframe>'}}var a=this.getParentEditor();a.insertHtml(e)}}})}})})()

CKEDITOR.plugins.setLang('youtube', 'ar', {
button: 'تضمين فيديو يوتيوب',
title: 'تضمين فيديو يوتيوب',
txtEmbed: 'قم بلصق كود التضمين هنا',
txtUrl: 'قم بلصق رابط فيديو اليوتيوب هنا',
txtWidth: 'العرض',
txtHeight: 'الإرتفاع',
chkRelated: 'إقتراح فيديوهات عند نهاية هذا الفيديو؟',
txtStartAt: 'بدء الفيديو عند (ss أو mm:ss أو hh:mm:ss)',
chkPrivacy: 'تمكين الوضع المحسن للخصوصية',
chkOlderCode: 'إستخدام كود التضمين القديم',
noCode: 'يجب عليك إضافة كود التضمين أو رابط الفيديو',
invalidEmbed: 'كود التضمين الذي قمت بإدخاله يبدو أنه غير صالح',
invalidUrl: 'رابط الفيديو الذي قمت بإدخاله يبدو غير صالح',
or: 'أو',
noWidth: 'يجب عليك إدخال عرض الفيديو',
invalidWidth: 'قم بإدخال عرض صالح',
noHeight: 'يجب عليك إدخال إرتفاع الفيديو',
invalidHeight: 'قم بإدخال إرتفاع فيديو صالح',
invalidTime: 'قم بإدخال وقت بداية الفيديو'
});
