<?php include_once "../inc/header.html" ?>

        <h1>Contact Us</h1>
    </section>

    <!-- contact -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.5340824453256!2d-5.98946792354599!3d37.37719993496131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126ea76eb6b10f%3A0x8926f5e874d3da39!2z7Iqk7Y6Y7J24IOq0keyepQ!5e0!3m2!1sko!2skr!4v1700412073421!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    <section class="contact_us">
        <ul class="contact_us_row">
            <li class="contact_us_col">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>Isabel la Católica</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>+81 0000-0000</h5>
                        <p>Monday to Sundat, 10AM to 5PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa-regular fa-envelope"></i>
                    <span>
                        <h5>sueng0422@naver.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </li>
            <li class="contact_us_col">
                <form action="../form_handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter Your Email Address" required>
                    <input type="text" name="subject" placeholder="Enter Your Subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="contact_us_btn">Send Message</button>
                </form>
            </li>
        </ul>
    </section>

<?php include_once "../inc/footer.html" ?>