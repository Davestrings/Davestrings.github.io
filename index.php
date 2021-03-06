<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Fatunbi David Oluwakayode is a dynamic programmer, a team player and leader. He is fast learner. He is a frontend developer with good knowledge of Seo and other digital marketing skills. ">
        <meta name="keyword" content="Fatunbi David Oluwakayode, Frontend Developer, Softtware Developer, Digital Marketer, Social Media Marketer">
        <title>FATUNBI, David Oluwakayode |Software Developer | Digital Marketing Enthusiast.</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <section id="main">
            <div id="img-div">
                <img src="https://res.cloudinary.com/davestrings/image/upload/v1566514070/HNG%20projects/DSC_1110_mzkthf.jpg"  alt="Author">
            </div><br><hr><br>
            
        <table>
                <caption>View My Resume Below</caption>
            <thead>
                <tr>
                    <th><h1 id="name">FATUNBI, DAVID OLUWAKAYODE</h1></th>
                    <th>
                        <ul class="head-list">
                            <li>3,Josiah Aina Street,Alakuko,Lagos</li>
                            <li>(+234)8154375949</li>
                            <li>fatunbidavidkayode@gmail.com</li>
                        </ul>
                    </th>
                </tr>
            </thead>
            <tbody>
                 
                <tr>
                <!-- Work Experience--> 
                    <td>
                        <h3 class="title">Career Objectives</h3>
                        <p>To be an excellent professional, incorporating critical thinking, problem solving Skills
                            and leadership which encourages creative work and client service.
                        </p>
                        <h3 class="title">Experience</h3>
                        <p><strong>Morning Stars Online Services,</strong>Remote,Lagos - <em>Social Media Intern</em></p>
                        <p>May 2019 - PRESENT</p>
                        <ul id="list">
                            <li>Creating engaging daily posts.</li>
                            <li>Analyzing Social media Metrics.</li>
                            <li>Increased post engagement by 250% and post reach by 518%. </li>
                            <li>Email lead generation: Created Email landing page and newsletters.</li>
                            <li><strong>Leverag Knowledge:</strong> Google Trends,Canva,Unsplash, Facebook Ad Manager, Mailchimp.</li>
                        </ul>
                    </td>
                    <!--Certifications and Trainings-->
                    <td>
                        <h3 class="title">Certificates & Trainings</h3>
                        <p><strong>Emarketing Institute Certificate of Completion In:</strong> Social Media Marketing, 
                            Email Marketing, Search Engine Optimization, Content Marketing, Search Engine Marketing</p>
                        <p><strong>Google Certificate of Completion:</strong>Google Analytics for Beginners</p>
                        <p><strong>Hubspot Courses:</strong> Email Marketing (in progress)</p>
                    </td>
                </tr>
                <tr>
                    <!--Education-->
                    <td>
                        <h3 class="title">Education</h3>
                        <p><strong>UNVERSITY OF IBADAN,</strong> OYO STATE, NIGERIA - <em>BSc Chemistry</em></p>
                        <p>January 2012 - December 2016</p>
                        <p><strong>PROJECT TOPIC:</strong> PHYTOCHEMICAL SCREENING OF HEXANE EXTRACT OF <em>EUPHORBIA GRAMINEA</em> PLANT AND ISOLATION OF CONSTITUENTS OF ANTIOXIDANT ACTIVE FRACTIONS OF LEAF HEXANE EXTRACT OF <em>ALCALYPHA HISPIDA.</em></p>
                    </td>
                    <!--Skills-->
                    <td>
                        <h3 class="title">Skills</h3>
                        <P>Microsoft Excel, Word and Powerpoint</P>
                        <p>HTML and CSS Proficient</p>
                        <p>Javascript beginner</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 class="title">Projects Portfolio</h3>
                        <p><strong>Survey Form</strong> - <em>Freecodecamp test project.</em></p>
                        <p id="codepen"><a href="https://codepen.io/fatunbi-david-kayode/pen/gVxwEq">Click Here to View.</a></p>
                    </td>
                    <td>
                        <h3 class="title">Language</h3>
                        <p>English and Yoruba</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <!--Contact form-->
        <div id="contact-div">
            <div id="contact-me">
                <h3>Contact Me</h3>
            </div>
            <form action="index.php" name="contactForm" method="post" onsubmit="return CONTACTME()">
                <label>Title</label><br>
                    <input type="text" class="info" name="title" placeholder="Enter Your Title" required><br>
                <label>First Name</label><br>
                    <input type="text" name="firstName" class="info" minlength="4" placeholder="First Name" required><br>
                <label>Last Name</label><br>
                    <input type="text" name="lastName" class="info" minlength="4" placeholder="Last Name" required><br>
                <label>Email</label><br>
                    <input type="email" name="email" class="info" placeholder="Enter Your Email..." required><br>
                <textarea id="message" name="message" cols="10" rows="6" minlength="20" placeholder="Your message..."></textarea><br>
                <input type="submit" id="btn" name="submit"  value="Submit">
                
            </form>
        </div>
        <footer>
                <br>
                <hr>
                <div class="foot">&copy; 2019|FATUNBI, David Oluwakayode.</div>
        </footer>
        </section>
        <?php
            if (isset($_POST['submit'])){
            $title = $_POST['title'];
            $firstName = $_POST['firstName'];
            $lastname = $_POST['lastName'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            echo "<pre>Thank you ".$title." ".$firstName. ", Your Submission Has Been Recorded :)</pre>";
        }
        ?>
        <script src="Response.js" type="text/Javascript"></script>
    </body>
</html>