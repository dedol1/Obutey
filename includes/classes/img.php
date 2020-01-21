<?php 

/**
 * 
 */


class img
{


	
	
	public static function upload($img){

		$umid = $_SESSION["userid"];

		$target_dir = "../static/proofs/";
        $name_img = basename($_FILES["$img"]["name"]);
        $imageFileType = strtolower(pathinfo($name_img,PATHINFO_EXTENSION));
		$name_img = "proof-".date('Y-m-d')."-B".$umid.time();

		$target_file = $target_dir.$name_img.".".$imageFileType;
		$uploadOk = 1;
		
		// Check if image file is a actual image or fake image
		// echo $name_img;
		// echo $_FILES["$img"]["name"];
		// print_r($_FILES["$img"]) ;
		if($_FILES["$img"]["name"]) {
		    $check = getimagesize($_FILES["$img"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    //todo rename
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["$img"]["size"] > 800000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && $imageFileType != "Webp" && $imageFileType != "bmp" && $imageFileType != "jfif") {
		    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    // echo "Sorry, your file was not uploaded.";
		    return 0;
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$img]["tmp_name"], $target_file)) {
		    	// db_insert($name_img, $code);
		        echo "The file ". basename( $_FILES[$img]["name"]). " has been uploaded as ".$name_img." in as ".$target_file ;
		        return $name_img;
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		        return 0;
		    }
		}

		// return $name_img;
	}

	public static function retrieve(){

	}

}


?>