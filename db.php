<?php
session_start();
include("connect.php");

if(isset($_REQUEST['videoSubmit'])){		//receiving video files
	//echo "Form submitted";
    
	$videoTitle = $_REQUEST['title'];
	$videoDesc = $_POST['info']; 
	$videoTags = $_REQUEST['tags'];

	//echo $_FILES["videoFile"]["name"];
	
	if($_FILES["videoFile"]["name"] != ''){ 	//if receives file
	    $fileSize = $_FILES['videoFile']['size'];
	    $fileType = $_FILES['videoFile']['type'];
	    $fileName = str_shuffle('nityanandamaity').'-'.basename($_FILES["videoFile"]["name"]);

		$targetDir = "videos/";
		$targetFile = $targetDir . $fileName;
		$allowedTypeArr = array("video/mp4", "video/avi", "video/mpeg", "video/mpg", "video/mov", "video/wmv", "video/rm",  "video/3gp");

		// echo $a = in_array($fileType, $allowedTypeArr); die;

		if(in_array($fileType, $allowedTypeArr)) {  //if above format video exists
		    if(move_uploaded_file($_FILES['videoFile']['tmp_name'], $targetFile)) {
		        $videoFilePath = $targetFile;
		    }else{
		        
				exit();
		    }
		}else{
			
			exit();
		}
	
		

	}else{

		exit();
	}
    
    $query = "insert into videos(video_title,video_description,video_tags,video_path) values('$videoTitle','$videoDesc','$videoTags','$fileName')";

    // echo $query;die;
    $run = mysqli_query($conn,$query);		//executing above query
    
    if($run)
    {
        echo ("<script>alert('Video Uploaded Successfully.')</script>");
        echo ("<script>window.location = 'index.php'</script>");
    }
    else
    {
        echo ("<script>alert('Oops, Something Went Wrong.')</script>");
    }
}

?>
