<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/src/Exception.php';
require './vendor/phpmailer/src/PHPMailer.php';
require './vendor/phpMailer/src/SMTP.php';

include 'partial/header.php';
?>


 <!-- Contact Start -->
 <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-title">Nous contacter</h2>
                            <div class="contact-info">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.8657333246992!2d-73.95447848459209!3d40.80894417932154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW%20123rd%20St%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1589004464646!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <h3>Comment nous contacter:</h3>
                                <p>
                                    Vous avez un projet ? N'hésitez pas à nous contacter via le formulaire de contact dans cette page.
                                </p>
                                <h3>Mobile <span>+33 7 67 53 36 25</span></h3>
                                <h3>E-mail <span>c.duboc43@gmail.com</span></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="editor-info">
                                <h2 class="section-title">Contact Person</h2>
                                <div class="editor-item">
                                    <div class="editor-img">
                                        <img src="assets/img/editor-1.jpg" alt="Editor Image">
                                    </div>
                                    <div class="editor-text">
                                        <h3>Christian DUBOC</h3>
                                        <a href="mailto:c.duboc43@gmail.com">Envoyer un email</a>
                                    </div>
                                </div>
                                <div class="editor-item">
                                    <div class="editor-img">
                                        <img src="assets/img/editor-1.jpg alt="Editor Image">
                                    </div>
                                    <div class="editor-text">
                                        <h3>Name Goes Here</h3>
                                        <a href="mailto:email@example.com">Email Now</a>
                                    </div>
                                </div>
                                <div class="editor-item">
                                    <div class="editor-img">
                                        <img src="assets/img/editor-1.jpg" alt="Editor Image">
                                    </div>
                                    <div class="editor-text">
                                        <h3>Name Goes Here</h3>
                                        <a href="mailto:email@example.com">Email Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
  

<?php
include 'partial/footer.php';
?>



