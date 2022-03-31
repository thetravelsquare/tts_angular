/*Tinymce Init*/

$(function() {
	"use strict";
	
	tinymce.init({
	  selector: '.tinymce',
	  height: 300,
	  plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code image fullscreen',
		'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'insertfile undo redo | image code | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		images_upload_url:'http://localhost/yatarth/upload.php',
		images_upload_handler: function (blobInfo, success, failure) {
			  var xhr, formData;
  
			  xhr = new XMLHttpRequest();
			  xhr.withCredentials = false;
			  xhr.open('POST', 'http://localhost/yatarth/upload.php');
  
			  xhr.onload = function() {
				  var json;
  
				  if (xhr.status != 200) {
					  failure('HTTP Error: ' + xhr.status);
					  return;
				  }
  
				  json = JSON.parse(xhr.responseText);
  
				  if (!json || typeof json.location != 'string') {
					  failure('Invalid JSON: ' + xhr.responseText);
					  return;
				  }
  
				  success(json.location);
			  };
  
			  formData = new FormData();
			  formData.append('file', blobInfo.blob(), blobInfo.filename());
  
			  xhr.send(formData);
		  },      	 
	});

	// tinymce.init({
	// 	selector:'textarea',
	// 	plugins:'code image',
	// 	toolbar:'undo redo | image code',
	// 	images_upload_url:'upload.php',
	// 	images_upload_handler: function (blobInfo, success, failure) {
	// 		  var xhr, formData;
  
	// 		  xhr = new XMLHttpRequest();
	// 		  xhr.withCredentials = false;
	// 		  xhr.open('POST', 'http://localhost/yatarth/upload.php');
  
	// 		  xhr.onload = function() {
	// 			  var json;
  
	// 			  if (xhr.status != 200) {
	// 				  failure('HTTP Error: ' + xhr.status);
	// 				  return;
	// 			  }
  
	// 			  json = JSON.parse(xhr.responseText);
  
	// 			  if (!json || typeof json.location != 'string') {
	// 				  failure('Invalid JSON: ' + xhr.responseText);
	// 				  return;
	// 			  }
  
	// 			  success(json.location);
	// 		  };
  
	// 		  formData = new FormData();
	// 		  formData.append('file', blobInfo.blob(), blobInfo.filename());
  
	// 		  xhr.send(formData);
	// 	  },      
	//   });

});
