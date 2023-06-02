<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seostyle.css">
    <link rel="icon" href="iconfinder_text.png" type="image/png">
    <title>SEO Checker</title>
</head>
<body>
    <section>
        <div class="cont">
            <header>
                <a href="home.html" class="logo">
                <img src="logo4.png"></a>
                <ul>
                    <li><a href="home.html" class="active">Home</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="query.php">Our Query</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="contact.php">Contact us</a></li>   
                </ul>
            </header>
            <form action="seo.php" method='POST'>
                <div class="form-group">
                    <div class="line">
                        <h2><u>SEO Checker</u></h2>
                        <p>SEO Checker is a tool where you can enter the document into our system and we produce the report with the help of Search Engine Optimisation [SEO] techniques.The SEO Checker tool allows you to enter the document into the system and we will analyze it and give you a report that includes the results along with recommendations for improvement.</p>
                    </div>

                    <div class="content">
                        <div class="box">
                            <div class="c">
                                <label for="c">Search Box:</label>
                                <textarea name="search" cols="45" rows="12" class="search" placeholder="Enter the search term" required></textarea>
                            </div><br>
    
                            <div class="btn">
                                <input type="submit" class="submit-btn" value="Search">
                            </div>
                            <div class="imgBx">
                                <img src="search.png"> 
                            </div>  
                        </div>    

                        <div class= "result">
                            <h3>RESULT: </h3>
                            <p>
                            <?php
                                if(isset($_POST['search']))
                                {
                                $subjectVal = $_POST['search'];
                                
                                // using str_replace() function
                                $resStr = str_replace(' ', '+', $subjectVal);
                                
                                include('simple_html_dom.php');
                                $search_url1="https://www.google.com/search?q=";
                                $search_url2=$resStr;
                                $search_url=$search_url1.$search_url2;
                                
                                $curl = curl_init();
                                curl_setopt($curl, CURLOPT_URL, $search_url);
                                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                $result = curl_exec($curl);
                                curl_close($curl);
                                //echo $result;
                                
                                $domResult = new simple_html_dom();
                                $domResult->load($result);
                                
                                foreach($domResult->find('a[href^=/url?]') as $link)
                                echo $link->plaintext . '<br>';
                                }
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
            </form> 
            
        </div>
        <!-- <div class="imgBx">
            <img src="search.png"> 
        </div>  -->
    </section>
</body>
</html>


                