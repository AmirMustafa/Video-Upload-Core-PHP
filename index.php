<?php

/* =========================  LOGIN CODE STARTED =========================*/
session_start();
include('connect.php');

?>
<head>
    <style>
        .textbox
        {
            width: 340px;
            height: 30px;
            margin:5px auto;
            padding-left:5px;
        }
        .btn
        {
            background: #77c2ae;
            color: #fff;
            height: 34px;
            width: 340px;
        }
        h2
        {
            color: #b8c992;
        }

        #main {
            margin-left: 38%;
            margin-top: 10%;
        }
        
    </style>
</head>

               <div id="main">    
                        <h2>Video Upload</h2>
                        <form method="post" enctype="multipart/form-data" action="db.php">
                           <input type="text" name="title" class="textbox" placeholder="Video Title" required><br>
                           <textarea name="info" class="textbox" placeholder="Desctiption" rows="5"></textarea><br>
                           <input type="text" name="tags" class="textbox" placeholder="Video Tags(i.e.study,books,etc)" required><br>
                           <input type="file" class="textbox" name="videoFile" required style="border:1px solid #ccc;line-height:30px;padding-top:3px;"><br><br>
                           <input type="submit" name="videoSubmit" class="btn" value="Upload Video">        
                        </form>
               </div>

	 		
			
