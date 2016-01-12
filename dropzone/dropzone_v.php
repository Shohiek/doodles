<html>
	<head>
		<script src="../jquery-1.10.2.js"></script>
		<script src="dropzone.js"></script>
		<!-- <script src="dist/js/bootstrap.min.js"></script> -->
		<link rel="stylesheet" type="text/css" href="dropzone.css">
		
		<!-- <link rel="stylesheet" type="text/css" href="basic.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css.map"> -->
	</head>	
	<body>
		<div id="dZUpload" class="dropzone">
	      <div class="dz-default dz-message">UPLOAD A FILE</div>
		</div>
		
		<script type="text/javascript">
		$fileList= "";
		  $(document).ready(function () {
		    Dropzone.autoDiscover = false;
		    $("#dZUpload").dropzone({
		        url: "upload.php",
		        addRemoveLinks: true,
		        paramName: "file", // The name that will be used to transfer the file
  				maxFilesize: 2,
  				acceptedFiles: "image/jpeg,image/png",
		        success: function (file, response) {
		            var imgName = response;
		            file.previewElement.classList.add("dz-success");
		            $fileList = {"serverName" : imgName};
		            console.log(response);
		            // console.log('Successfully uploaded :' + $fileList['serverFileName']['serverName']);
		        },
		        removedfile: function(){
		        	//console.log("fileList " + $fileList['serverFileName']);
		        	//$files = serializearray();
  					 $.ajax({
					    url: "delete_uploaded_file.php",
					    type: "POST",
					   // data:{ "fileList" : JSON.stringify($fileList)},
					   data: $fileList,
					    success:function(data){
					    	console.log(data);
					    	window.location = "http://127.0.0.1/nano-gallery/dropzone/dropzone_v.php";
					    }
					 });
  				},
		        error: function (file, response) {
		            file.previewElement.classList.add("dz-error");
		        }
		    });
		});
		</script>
	</body>
</html>

