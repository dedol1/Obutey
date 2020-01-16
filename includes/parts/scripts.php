
   
    <!-- 2. Include library -->
    <script src="../static/dist/js/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard -->
    
            <script>
    var clipboard = new ClipboardJS('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
    <!-- Done with ref link -->
            
    <!-- jQuery -->
    <script src="../static/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../static/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../static/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../static/vendor/raphael/raphael.min.js"></script>
    <script src="../static/vendor/morrisjs/morris.min.js"></script>
    <script src="../static/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../static/dist/js/sb-admin-2.js"></script>

    <script src="../static/vendor/dropify/js/dropify.min.js"></script>

    <script>
	$(function() {
		// $('.dropify').dropify();

		var drEvent = $('#dropify-event').dropify();
		drEvent.on('dropify.beforeClear', function(event, element) {
			return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
		});

		drEvent.on('dropify.afterClear', function(event, element) {
			alert('File deleted');
		});

		// $('.dropify-fr').dropify({
		// 	messages: {
		// 		default: 'Glissez-déposez un fichier ici ou cliquez',
		// 		replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
		// 		remove: 'Supprimer',
		// 		error: 'Désolé, le fichier trop volumineux'
		// 	}
		// });
	});
	</script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- <script src="../static/dist/js/clipboard.min.js"></script> -->
