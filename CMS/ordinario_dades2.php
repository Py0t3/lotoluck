<?php

// Single path
$moxieManagerConfig['filesystem.rootpath'] = "https://lotoluck.es/img";
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tiny.cloud/1/pt8yljxdfoe66in9tcbr6fmh0vaq2yk4lu0ibxllsvljedgh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="moxiemanager/loader.min.js?v=2"></script>
</head>
<body>
<textarea></textarea>


 <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
		moxiemanager_image_settings : { 
	view : 'thumbs', 
	extensions : 'jpg,png,gif'
},
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
  </script>
</body>
</html>
