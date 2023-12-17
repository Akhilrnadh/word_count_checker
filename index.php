<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="rating" content="General" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="googlebot" content="index,follow" />
    <meta forua="true" http-equiv="Cache-Control" content="max-age=0" />
    <meta name="language" content="English">
    <title>Word Count Checker - AkhilRNadh</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body>
    <?php
     include 'header.php';
	?>
    <div class="container bg-light">
        <div class="jumbotron">
            <h1 class="text-center">Count the number of words from your content with our free word count checker</h1>
        </div>
        <?php  
		 $a = '';
         //$sentence = 'ആറ് വര്‍ഷത്തെ കാത്തിരിപ്പ്; ചൊവ്വയിലേക്ക് പറന്നത് 40 കോടി ജനങ്ങളുടെ പ്രതീക്ഷയും സ്വപ്‍നവും';
		 if (isset($_POST['submit'])) {	
		 $a = $_POST['content'];
		 //echo $a;
		 $sentence = trim($a);
		 //echo strlen($sentence);
		 //echo str_word_count($sentence);	
		 $break = explode(" ", $sentence);
		 //print_r($break);
		 $count = count($break);
		 //echo $count;
		 $s = $count;
		 }	
        ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST">
                    <textarea style="width: 100%; height: 300px; border:2px solid black;" required='on' name="content"><?php echo $a; ?>
				    </textarea>
                    <button class="mybtn btn btn-primary btn-md" name="submit">Count Words</button> &nbsp;
                    <a href="index.php" class="btn btn-info btn-md">Try New</a>
                </form>
                <br>
                <?php
                 if (!empty($s)) {
                ?>
                <div style="font-weight: 700; border: 2px solid green; text-align: center;">
                    Total Number of words = <?php echo $s; ?>
                </div>
                <?php
                 } else {
					echo'
					<div style="font-weight: 700; border: 2px solid green; text-align: center;">
                 	   Total Number of words = 0
                    </div>
					';
				 }
				?>
            </div>
        </div>
    </div>
    <?php
 include 'footer.php';
?>