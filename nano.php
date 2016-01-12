<!-- jQuery library (include jQuery only once in your page) -->
<script type="text/javascript" src="jquery-1.10.2.js"></script> 

<!-- nanoGALLERY plugin files -->
<!-- <link href="nanoGALLERY-5.3.0/css/nanogallery.css" rel="stylesheet" type="text/css"> -->
<link href="nanogallery.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="nanoGALLERY-5.6.0/jquery.nanogallery.js"></script>
<script src="chosen/chosen_v1.4.2/chosen.jquery.js"></script>
<link rel="stylesheet" href="chosen/chosen_v1.4.2/chosen.css">

<link href="nanoGALLERY-5.6.0/css/themes/clean/nanogallery_clean.css" rel="stylesheet" type="text/css" >
<link href="nanoGALLERY-5.6.0/css/themes/light/nanogallery_light.css" rel="stylesheet" type="text/css">
<!-- <link rel="stylesheet" type="text/css" href="chosen/chosen_v1.4.2/chosen.css" /> -->
<script>
	function showHide(shID) {
	   if (document.getElementById(shID)) {
	      if (document.getElementById(shID+'-show').style.display != 'none') {
	         document.getElementById(shID+'-show').style.display = 'none';
	         document.getElementById(shID).style.display = 'block';
	      }
	      else {
	         document.getElementById(shID+'-show').style.display = 'inline';
	         document.getElementById(shID).style.display = 'none';
	      }
	   }
	}
</script>


<style type="text/css">
   /* This CSS is just for presentational purposes. */
   body {
      font-size: 62.5%;
      background-color: #777; }
   #wrap {
      font: 1.3em/1.3 Arial, Helvetica, sans-serif;
      width: 30em;
      margin: 0 auto;
      padding: 1em;
      background-color: #fff; }
   h1 {
      font-size: 200%; }

   /* This CSS is used for the Show/Hide functionality. */
   .more {
      display: none;
      border-top: 1px solid #666;
      border-bottom: 1px solid #666; }
   a.showLink, a.hideLink {
      text-decoration: none;
      color: #36f;
      padding-left: 8px;
      /*background: transparent url(down.gif) no-repeat left; }*/
   a.hideLink {
      /*background: transparent url(up.gif) no-repeat left; }*/
   a.showLink:hover, a.hideLink:hover {
      border-bottom: 1px dotted #36f; }
</style>


<body>
	<html>
		<form action="nano_form.php" method="post" enctype="multipart/form-data">
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" value="Upload Image" name="submit">
		</form>
		<select value='Select one' id='chosen_select_box'>
			<option value="Car1.1">Car</option>
			<option>Car 1</option>
			<option>Car 2</option>
		</select>
		<input type="button" value="click" id='chosen_but'>
		<div id="nanoGallery3">
			<!-- <a href="pics/Hydrangeas.jpg" data-ngthumb="pics/Hydrangeas.jpg" >Hydrangeas</a> data-ngdesc="Description1" 
		  	<a href="pics/Chrysanthemum.jpg" data-ngthumb="pics/Chrysanthemum.jpg">Chrysanthemum</a>
		  	<a href="pics/Desert.jpg" data-ngthumb="pics/Desert.jpg">Desert</a> -->
		</div>
		
	    <div id="wrap">
	    	<h1>Show/Hide Content</h1>
		    <p><a href="/showhide-content-css-javascript/">Go back to the main article.</a> This example shows you how to create a show/hide container using a couple of links, a div, a few lines of CSS, and some JavaScript to manipulate our CSS. Just click on the "see more" link at the end of this paragraph to see the technique in action, and be sure to view the source to see how it all works together. 
		    	<a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;">See more.</a></p>
		    <div id="example" class="more">
		    	<p>Congratulations! You've found the magic hidden text! Clicking the link below will hide this content again.</p>
		        <p><a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">Hide this content.</a></p>
	      	</div>
	      	<input type="button" value="click" onclick=''>
   		</div>
   		
   		<!-- <h2>nanoGALLERY - API methods to handle user selections</h2>

		<button id="btnReload" "type="button ">reload album</button>
		<button id="dset" "type="button ">destroy album</button>
		
		<button id="btnCntSelected" "type="button">Count selected items</button>
		<button id="btnDisplayTitle" "type="button ">Display title of selected items</button>
		
		<button id="btnUnselect" "type="button ">Unselect selected items</button>
		<div id="nanoGallery"></div> -->
   		
   		
	                <!-- 
	             	{
	                	albumID:2,
	                	ID:1,
	                    src'pics/Hydrangeas.jpg',
	                    srct'pics/Hydrangeas.jpg',
	                    kind: 'image'
	                } -->
		<script>
			$(document).ready(function () {
				jQuery("#nanoGallery3").nanoGallery({
					theme: 'clean', 
					colorScheme: 'lightBackground', 
					thumbnailHoverEffect:'labelAppearSplit4',
					colorSchemeViewer:'darkGreen',
					items:[{
		                	ID:1,
		                    src:'pics/Hydrangeas.jpg',
		                    srct: 'pics/Hydrangeas.jpg',
		                    title: "Hydrangeas",
		                    kind: 'album'
		             },
		             {
		             	 albumID:1,
	                	ID:1,
	                    src:'pics/Hydrangeas.jpg',
	                    srct:'pics/Hydrangeas.jpg',
	                    kind: 'image'
		             },{
		                	ID:2,
		                    src:'pics/Hydrangeas.jpg',
		                    srct: 'pics/Hydrangeas.jpg',
		                    title: "Hydrangeas",
		                    kind: 'album'
	             	}]
				});
				gallery_recent = 
					        add_to_gallery = 
				$('#chosen_select_box').chosen(
					{
						width: "35%"
					}
				);
				
				$('#chosen_but').click(function(){
					$make = $("#chosen_select_box").val();
					alert($make);
				});
				
    // $("#nanoGallery").nanoGallery({
        // // kind: 'picasa',
        // // userID: 'cbrisbois@gmail.com',
        // // album: '5870135211745010881',
        // // thumbnailHoverEffect: 'borderLighter',
        // // itemsSelectable: true
        // items:[]
    // });
});

$('#btnReload').on('click', function () {
    $('#nanoGallery').nanoGallery('reload');
});

$('#btnCntSelected').on('click', function () {
   alert($('#nanoGallery').nanoGallery('getSelectedItems').length);
});

$('#dset').on('click', function(){
	$('#nanoGallery').nanoGallery('destroy');
});

$('#btnDisplayTitle').on('click', function () {
    var items = $('#nanoGallery').nanoGallery('getSelectedItems');
    var l = items.length;
    for (var j = 0; j < l; j++) {
        alert((j + 1) + ' -> ' + items[j].title);
    }
});

$('#btnUnselect').on('click', function () {
    var items = $('#nanoGallery').nanoGallery('getSelectedItems');
    if (items.length > 0) {
        $('#nanoGallery').nanoGallery('unselectItems', items);
    } else {
        alert('nothing is selected');
    }
			});
		</script>
	</html>
</body>

