<?php
function dez_add_bbpress_custom_style() {
global $in_bbpress;
if($in_bbpress):
print "<style type='text/css' media='all'>"; ?>
@media only screen and (min-width :768px) and (max-width :1024px){}
#right-sidebar {}
body.bbPress .share_box { display:none; margin:0; }
.content, #content {}
.bbp-login-form {clear:both;}
#custom #bbpress-forums ul { font-size: 1.075em !important; }
#bbpress-forums li { margin:0; }
#bbpress-forums legend, a.bbp-forum-title, .bbp-topic-title  { font-size: 1em; font-weight:bold; }
#post-entry article { margin:0; border-bottom: 0 none; }
.bbp-forum-info {width: 40%;}
#container fieldset.bbp-form { border: 1px solid #ccc;padding: 10px 20px;}
.bbp-forums .even, .bbp-topics .even { background: #f8f8f8; }
#container .post-content {width: 100%;}
.bbp-breadcrumb {margin: 0 0 1em 0;}
#bbp_topic_title { width: 80%; }
.bbp-reply-author {width: 20%;}
.bbp-topic-meta {font-size: 0.875em;}
.bbp-reply-author img {margin: 0 1em 0 0;}
#container .bbp-reply-content,#container .bbp-reply-author {padding: 1.4em 1em;}
.bbp-topics td {padding: 1em;}
.post-content p { margin: 0;}
.bbp-reply-content p { margin: 0 0 16px;}
p.bbp-topic-description a.bbp-author-name { margin: 0 10px 0 0; }
p.bbp-topic-description a.bbp-author-avatar { margin: 0; }
#bbpress-forums img.avatar { padding: 2px; border: 1px solid #ddd !important; }
<?php print "</style>"; ?>
<?php endif; }
add_action('wp_head', 'dez_add_bbpress_custom_style');
?>