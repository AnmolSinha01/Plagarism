<!-- <?php 

include 'faqconfig.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) {       // Check press or not Post Comment Button
	$name = $_POST['name'];         // Get Name from form
	$email = $_POST['email'];      // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="faqstyle.css">
    <link rel="icon" href="iconfinder_text.png" type="image/png">
    <script src="faqmain.js" defer></script>
</head>
<body>
    <!-- <div class="FAQ">
    <p>FAQ</p>
    </div>-->
    <div class="container">
    
        <div class="accordion">
            <h1>Frequently Asked Question (FAQ)</h1>
                <header>
                    <a href="home.html" class="logo">
                    <img src="logo4.png">
                    </a>
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="faq.php"class="active">FAQ</a></li>
                        <li><a href="query.php">Our Query</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </header>
            <div class="accordion-item">
                <div class="accordion-item-header">
                   Is Plagiarism Detector really able to identify plagiarism?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    Plagiarism Detector will provide an accurate plagiarism analysis. It will compare your text with billions of web pages and sources from other databases. The plagiarized and unique percentages will be displayed after it has completed checking the submitted text. The plagiarized parts will be marked, and on the right column, you can view the plagiarized sources. You should remove these parts and rewrite them or write entirely new sentences. After you have altered the text and removed/rewritten the plagiarism parts, rerun a plagiarism check and make 100 percent sure that your text does not contain plagiarized content.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                Will my content be saved in any database by Plagiarism Detector?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    No. Your submitted paper will be checked, and on completion of the plagiarism detection process, a plagiarism analysis report will be displayed to you. After you close the URL, everything is removed by Plagiarism Detector. When you go on the site, it opens the session and does the plagiarism check, submits the report, and that’s the end. It does not make any sense to keep copies of millions of papers that are submitted for plagiarism checking. Storing this data is worthless and useless, and Plagiarism Detector does not waste resources and has a strict Privacy Policy.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                Do I have to register to use the Plagiarism Detector?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    No. You don’t have to register when you go to PlagiarismDetector.net. We abide by a very strict user policy, and we don’t gather any personal information about our users. The point of providing a free plagiarism detector is to make it easy for users to use this facility. Plagiarism Detector has implemented a very strict and secure user policy, and neither does it require a user providing any personal information, nor does it share any instrument that is used on its website.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                What is considered a good or bad percentage of similar content?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    Each case that is submitted to be scanned and checked differs. A document of 50 words, which has 6 similar words, will show as 12 percent, and 6 similar words in a document of 1000 words will be less than one percent and won't show in the results. This will affect the percentage from a very small to a very large percentage. Some of the educational institutions have placed a maximum limit of permitted plagiarism. When you look at the plagiarized results, you will have to decide if the plagiarized results are permissible or not. For example, common use sentences may be flagged as plagiarized, which can be ignored
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                How can I check if someone else is using my content?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    If the content of the website that you suspect is using your content, you can check this quite easily. Just open Plagiarism Detector and scan your text that you suspect is being misused without your permission. Run the plagiarism detector and check the results. If the website that you suspect shows up in the results of plagiarized sources, you can be sure that your content has been plagiarized. Now it's up to you to take action against the website.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                How many times can I use the Plagiarism Detector?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                    There is no limit imposed by the Plagiarism Detector on the number of times a user can run the application. You can check one or a thousand documents; there are no limitations. So feel free to use it as and when you want. Neither do you have to register to use it, nor is there any limit on the number of times you can use it. Just remember that if you have taken a break, you might get a 'session expired' message. All that you need to do is to open the site and continue from where you had stopped.
                    </div>
                </div>
            </div>
            <br>
            <div class="extra">
                <p>Can't find your problem ??</p>
                <p1>Please click here to post YOUR QUERY on <a href="query.php">OUR QUERY</a> Page. We would like to take the opportunity to answer any questions you may have.</p1>
                <br><br><p2><b><u>Your Query is Our Questions!<u><b></p2><br>
            </div>
        </div>
    </div>
</body>
</html>

<!-- If you have a problem, please let us know about it. --