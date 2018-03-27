<!DOCTYPE html>
<?php
            session_start();
?>
<html>
    <head>
        <title>Add New Post</title>
        <link rel="icon" type="image/png" href="./index_files/lds.png">
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

        <style type="text/css">
            body{
              /*  background-color: #900000;  */
                /*background-image:url("background.jpg");*/
                
                /*background-color: #1BAAB7;*/
                background-color: #db3937;
                background-repeat: no-repeat;
                background-size: cover;
            }
            h1{
                text-align: center;
                letter-spacing: 1px;
            }

            h1 { color: #EFFFFF; font-family: 'Raleway',sans-serif; font-size: 35px; font-weight: 200;  text-align: center; }
            form{
                background-color: #C5FE87; 

                margin: 0 auto;
                width: 800px;
                padding: 1em;
                border: 1px solid #CCC;
                border-radius: 1em;
            }
            div + div {
                margin-top: 1em;
            }
            textarea{
                font: 1em sans-serif;
                width: 770px;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: 1px solid #999;
            }
            textarea:focus {
                border-color: black;
            }
            #post_title, #post_image{
                height: 35px;
                resize: none;
            }
           
            #content{
                height: 26em;
                resize: vertical;
                resize: none;
            }
            #des{
                height: 100px;
                resize: vertical;
                resize: none;
            }
            .styled-button-2 {
                background: #25A6E1;
                background: -moz-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#25A6E1),color-stop(100%,#188BC0));
                background: -webkit-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: -o-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: -ms-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
                padding:4px 7px;
                /*color:#fff;*/
                background: rgb(28, 184, 65); 
                font-family:'Helvetica Neue',sans-serif;
                font-size:17px;
                border-radius:4px;
                -moz-border-radius:4px;
                -webkit-border-radius:4px;
                border:1px solid #1A87B9
            } 


            .fileUpload {
                position: relative;
                overflow: hidden;
                margin: 10px;
            }

            .fileUpload input.upload {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.8);
                z-index: 99999;
                opacity:0;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {
                opacity:1;
                pointer-events: auto;
            }
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: -moz-linear-gradient(#fff, #999);
                background: -webkit-linear-gradient(#fff, #999);
                background: -o-linear-gradient(#fff, #999);
            }
            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                right: -12px;
                text-align: center;
                top: -10px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -moz-box-shadow: 1px 1px 3px #000;
                -webkit-box-shadow: 1px 1px 3px #000;
                box-shadow: 1px 1px 3px #000;
            }
            .close:hover {
                background: #00d9ff;
            }
            .nicEdit-main{
                background-color: white;
                border: 1px solid #999;
            }
        </style>
        


    
           <script src="./index_files/nice_edit.js" type="text/javascript"></script>
            <script type="text/javascript">bkLib.onDomLoaded(function() {
                nicEditors.editors.push(
                    new nicEditor().panelInstance(
                    document.getElementById('content')
                    )
                );
            });</script>

                        
                        
    </head>

    <body>
        <?php
            if( !isset($_SESSION['authorized_user']) || empty($_SESSION['authorized_user']) ){
                $error =  'You must be logged in to access this page.';
                echo "<div class=\"alert alert-danger\">$error</div>";
                exit;
            }
        ?>
        <h1>Add New Post</h1>
        <div id="post" class="modalDialog">
            <div><a href="#close" title="Close" class="close">X</a>
                <?php
                    require ("create_post.php");
                ?>
            </div>
        </div>
        <form action="#post" method="post" enctype="multipart/form-data">
            
            <div>
                <textarea id="post_title" name="post_title" rows="1" placeholder = "Enter title here" style="font-size:23px;"></textarea>
            </div>
            <div>
                <select name="taskOption" style="width:770px;height:30px;border: 1px solid #999;">
                    <?php
                        $cat="Alumni of LUMS,Annual Journalism Workshop,Select Arts,Campus and Community,CARMA,LUMS Journalism Festival,Culture and Religion,Featured,Foray Into Luminism,LDS Members,Lifestyle,LUMS Communications,O-Week,Opinion,Poetry,Science and Technology,Short Stories,Sports,Tales from beyond the classroom,Travelogue,TV and Books";
                        $terms = explode(",",$cat);
                        foreach ($terms as $each) {
                            echo "<option value='$each'>$each</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <textarea id="content" name="content" placeholder = "Enter content here"></textarea>
            </div>


            <div>

                <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
                    <div class="fileUpload btn btn-primary">
                        <span>Upload</span>
                        <input id="uploadBtn" type="file" class="upload" name="fileToUpload" />
                    </div>

                <script type="text/javascript">  
                document.getElementById("uploadBtn").onchange = function () {  
                    document.getElementById("uploadFile").value = this.value;
                };
                </script>  
  
                
            </div>

            
 
            <div class="button">
                <button type="submit" class="styled-button-2" data-toggle="modal" data-target="#openModal">Publish</button>
            </div>
        </form>
    </body>
</html>