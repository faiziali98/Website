<?php
                    if (isset($_POST["post_title"])&&isset($_POST["content"])&&isset($_POST['taskOption'])){
                        if (!empty($_POST["content"])&& !empty($_POST["post_title"])){
                            $post_title = $_POST["post_title"];
                            $content = $_POST["content"];
                            $cat = $_POST['taskOption'];
                            $post_image = basename($_FILES["fileToUpload"]["name"]);

                            $target_dir = "index_files/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $ext=pathinfo($post_image,PATHINFO_EXTENSION);
                            $uploadOk = 1;
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                            $name=strtolower(str_replace(' ', '-', $post_title)).".$ext";
                            if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                if($check !== false) {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }
                            }
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";

                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                                    rename("index_files/$post_image", $target_dir.$name);
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }

                            $new_content = "<?php
                            \$post_title = \"$post_title\";
                            \$post_image = \"$post_image\";
                            ";
                            
                            $post_titlet =$post_title ;
                            $post_title = strtolower(str_replace(' ', '-', $post_title));

                            $file = fopen("posts/$post_title.php", "w") or die("Unable to open file!");
                            
                            copy("posts/template.php","posts/$post_title.php");
                            $old_content = file_get_contents("posts/template.php");
                            fwrite($file, $new_content."\n".$old_content);
                            fclose($file);

                            $terms = explode(" ",strip_tags($content));
                            $des = $terms[0];
                            $t=1;
                            for($i=0;$i<sizeof($terms);$i++){
                                $des=$des." ".$terms[$i];
                                $t++;
                                if ($t==35){
                                    break;
                                }
                            }
                            $post_titlet=addslashes($post_titlet);
                            $content=addslashes($content);
                            $des=addslashes($des);
                            $time=time();
                            $date=date('Y-m-d',$time);
                            mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                            mysql_select_db("databaselds");
                            $author=$_SESSION['authorized_user'];
                            $sql = "INSERT INTO search (title, description,tags,link,dates,author,picture,Category)
                                    VALUES ('$post_titlet', '$des','$content','../posts/$post_title.php','$date','$author','$name','$cat')";
                            mysql_query($sql) or die (mysql_error());
                            echo "<h2>Success</h2>
                                <p>The article has successfully been posted.</p>";
                        }else{
                            echo "<h2>Fail</h2>
                                <p>There has been a problem while posting your article. Kindly fill all the required fields and then continue.</p>";
                        }
                    }
                ?>

            