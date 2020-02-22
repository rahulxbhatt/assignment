<html>
    <title>Assignment Submission</title>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="scripts/tabs.js"></script>
<body>
    <div class="header">
        <div class="tab">
        <button class="tablinks" onclick="tabs(event, 'Home')" id="default">Home</button>
        <button class="tablinks" onclick="tabs(event, 'PHP')">PHP</button>
        <button class="tablinks" onclick="tabs(event, 'Accounts')">Accounts</button>
        <button class="tablinks" onclick="tabs(event, 'RIT')">RIT</button>
        <button class="tablinks" onclick="tabs(event, 'EVS')">EVS</button>
        <button class="tablinks" onclick="tabs(event, 'MA')">MA</button>
        <button class="tablinks" onclick="tabs(event, 'RDBMS')">RDBMS</button>
        </div>
    </div>
    <form action="" method="post">
    <div id="Home" class="content">
        <h2 style="padding-top: 12%;">Assignment Submission</h2>
        <div class="left">
            <h3>Enter your details:</h3><br>
            <input type="text" name="stu_name" placeholder = "Student Name"><br><br>
            <input type="text" name="course" placeholder="Enter your Course"><br><br>
            <input type="text" name="scholar" placeholder="Enter your Scholar Number">
        </div>
        <div class="right">
        <img src="illustration.png" height="60%" width="90%"
             style="margin-top: -15%;">
        </div>
    </div>

    <div id="PHP" class="content">
        <h2>PHP</h2>
            <div class="ques">
            <?php 
            $ques1 = "<h4>What is PHP?</h4>";
            echo $ques1; 
            ?>
            <textarea name="php1" id="" cols="60" rows="10"></textarea>
            </div>
            
            <div class="ques">
                <?php 
            $ques2 = "<h4>How can we display the output directly to the browser?</h4>";
            echo $ques2; 
            ?>
            <textarea name="php2" id="" cols="60" rows="10"></textarea>
            </div>
            
            <div class="ques">
                <?php 
            $ques3 = "<h4>How is the comparison of objects done in PHP</h4>";
            echo $ques3; 
            ?>
            <textarea name="php3" id="" cols="60" rows="10"></textarea>
                <input type="submit" name="submit">
            </div>
    </div>
    <div id="Accounts" class="content">
        <h2>Accounts</h2>
            <br>
            <div class="ques">
            <?php 
            $ques1 = "<h4>What is the meaning of Basic Accounting Terms?</h4>";
            echo $ques1; 
            ?>
            <textarea name="acc1" id="" cols="60" rows="10"></textarea>
            </div>

            <div class="ques">
            <?php 
            $ques2 = "<h4>Give 2 examples of Capital receipts.</h4>";
            echo $ques2; 
            ?>
            <textarea name="acc2" id="" cols="60" rows="10"></textarea>
            </div>

            <div class="ques">
            <?php 
            $ques3 = "<h4>Mention different types of liabilities.</h4>";
            echo $ques3; 
            ?>
            <textarea name="acc3" id="" cols="60" rows="10"></textarea><br><br>
            <input type="submit" name="submit">
            </div>
    </div>
    <div id="RIT" class="content">
        <h2>RIT</h2>
        <div class="ques">    
        <?php 
            $ques1 = "<h4>Mention platforms which are used for large-scale cloud computing?</h4>";
            echo $ques1; 
            ?>
            <textarea name="rit1" id="" cols="60" rows="10"></textarea>
        </div>
        
        <div class="ques">
            <?php 
            $ques2 = "<h4>What are the basic characteristics of cloud computing?</h4>";
            echo $ques2; 
            ?>
            <textarea name="rit2" id="" cols="60" rows="10"></textarea>
        </div>
        
        <div class="ques">
            <?php 
            $ques3 = "<h4>What is Saas?</h4>";
            echo $ques3; 
            ?>
            <textarea name="rit3" id="" cols="60" rows="10"></textarea>
            <input type="submit" name="submit">
        </div>
    </div>
    <div id="EVS" class="content">
        <h2>EVS</h2>
        <div class="ques">
            <?php 
            $ques1 = "<h4>How do ecology and environmental science differ?</h4>";
            echo $ques1; 
            ?>
            <textarea name="evs1" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="ques">
            <?php 
            $ques2 = "<h4>What is environmental science and policy?</h4>";
            echo $ques2; 
            ?>
            <textarea name="evs2" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="ques">
            <?php 
            $ques3 = "<h4>Explain the role of science, in environmental decision-making.</h4>";
            echo $ques3; 
            ?>
            <textarea name="evs3" id="" cols="60" rows="10"></textarea>
            <input type="submit" name="submit">
        </div>
    </div>
    <div id="MA" class="content">
        <h2>MA</h2>
        <div class="ques">
            <?php 
            $ques1 = "<h4>What is a Gradient in Adobe Photoshop?</h4>";
            echo $ques1; 
            ?>
            <textarea name="ma1" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="ques">
            <?php 
            $ques2 = "<h4>In Adobe Photoshop how you can print the grid?</h4>";
            echo $ques2; 
            ?>
            <textarea name="ma2" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="ques">
            <?php 
            $ques3 = "<h4>How do you organize layers in Photoshop?</h4>";
            echo $ques3; 
            ?>
            <textarea name="ma3" id="" cols="60" rows="10"></textarea>
            <input type="submit" name="submit">
        </div>
    </div>
    <div id="RDBMS" class="content">
        <h2>RDBMS</h2>
            <div class="ques">
            <?php 
            $ques1 = "<h4>What is data Integrity?</h4>";
            echo $ques1; 
            ?>
            <textarea name="rdbms1" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="ques">
            <?php 
            $ques2 = "<h4>What is Datawarehouse?</h4>";
            echo $ques2; 
            ?>
            <textarea name="rdbms2" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="ques">
            <?php 
            $ques3 = "<h4>What are all types of user defined functions?</h4>";
            echo $ques3; 
            ?>
            <textarea name="rdbms3" id="" cols="60" rows="10"></textarea>
            <input type="submit" name="submit">
        </div>
    </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){    
        if(empty($_POST["stu_name"])){
            echo "Please enter a name";
        }
        else{
                $stu_name = $_POST["stu_name"];
                $course = $_POST["course"];
                $scholar = $_POST["scholar"];
                
                $ques1 = "Q1.".trim($ques1, "<h4></h4>");
                $ques2 = "Q2.".trim($ques2, "<h4></h4>");
                $ques3 = "Q3.".trim($ques3, "<h4></h4>");
                if(!empty($_POST["acc1"])){
                    $subject = "Accounts";
                }
                if(!empty($_POST["php1"])){
                    $subject = "PHP";
                }
                if(!empty($_POST["rit1"])){
                    $subject = "RIT";
                }
                if(!empty($_POST["evs1"])){
                    $subject = "EVS";
                }
                if(!empty($_POST["ma1"])){
                    $subject = "MA";
                }
                if(!empty($_POST["rdbms1"])){
                    $subject = "RDBMS";
                }
                $content = "Student Name : ".$stu_name."\n".
                            "Subject Name : ".$subject."\n".
                            "Course : ".$course."\n".
                            "Scholar Number : ".$scholar."\n\n";

                            if($subject == "PHP"){
                                $php1 = $_POST["php1"];
                                $php2 = $_POST["php2"];
                                $php3 = $_POST["php3"];
                                $allAns = $ques1."\n".$php1."\n".$ques2."\n".$php2."\n".$ques3."\n".$php3;
                                $filename = $stu_name."-".$subject.".doc";
                                file_put_contents($filename, $content.$allAns);
                            }
                            if($subject == "Accounts"){
                                $acc1 = $_POST["acc1"];
                                $acc2 = $_POST["acc2"];
                                $acc3 = $_POST["acc3"];
                                $allAns = $ques1."\n".$acc1."\n".$ques2."\n".$acc2."\n".$ques3."\n".$acc3;
                                $filename = $stu_name."-".$subject.".doc";
                                file_put_contents($filename, $content.$allAns);
                            }
                            if($subject == "RIT"){
                                $rit1 = $_POST["rit1"];
                                $rit2 = $_POST["rit2"];
                                $rit3 = $_POST["rit3"];
                                $allAns = $ques1."\n".$rit1."\n".$ques2."\n".$rit2."\n".$ques3."\n".$rit3;
                                $filename = $stu_name."-".$subject.".doc";
                                file_put_contents($filename, $content.$allAns);
                            }
                            if($subject == "EVS"){
                                $evs1 = $_POST["evs1"];
                                $evs2 = $_POST["evs2"];
                                $evs3 = $_POST["evs3"];
                                $allAns = $ques1."\n".$evs1."\n".$ques2."\n".$evs2."\n".$ques3."\n".$evs3;
                                $filename = $stu_name."-".$subject.".doc";
                                file_put_contents($filename, $content.$allAns);
                            }
                            if($subject == "MA"){
                                $ma1 = $_POST["ma1"];
                                $ma2 = $_POST["ma2"];
                                $ma3 = $_POST["ma3"];
                                $allAns = $ques1."\n".$ma1."\n".$ques2."\n".$ma2."\n".$ques3."\n".$ma3;
                                $filename = $stu_name."-".$subject.".doc";
                                file_put_contents($filename, $content.$allAns);
                            }
                            if($subject == "RDBMS"){
                                $rdbms1 = $_POST["rdbms1"];
                                $rdbms2 = $_POST["rdbms2"];
                                $rdbms3 = $_POST["rdbms3"];
                                $allAns = $ques1."\n".$rdbms1."\n".$ques2."\n".$rdbms2."\n".$ques3."\n".$rdbms3;
                                $filename = $stu_name."-".$subject.".doc";
                                file_put_contents($filename, $content.$allAns);
                            }
                }
            }
?>
<script>
document.getElementById("default").click();
console.log("Rahul Bhatt");
</script>