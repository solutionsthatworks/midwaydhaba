<!DOCTYPE html>
<html lang="en-US">
		<head>
		<title>How To Add Google Translate 
        Button On Your Webpage ?</title>
		</head>

		<body>
<p>Hello everyone!</p>
<p>Welcome to GeeksforGeeks</p>
<p> Translate this page in 
          your preferred language: </p>
<div id="google_translate_element"></div>
<script>

function googleTranslateElementInit() {

new google.translate.TranslateElement({

pageLanguage: 'en'

}, 'google_translate_element');

}

</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<p> You can translate the content of this 
          page by selecting a language in the 
          select box. </p>
</body>
</html>
