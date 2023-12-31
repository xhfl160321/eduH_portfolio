<?php include_once "inc/start.html" ?>

</head>
<body>
    <!-- HOME 페이지 -->
    <section class="home">
        <header>
            <a href="./index.php"><img src="./img/logo.png" alt="logo" class="logo"></a>
            <nav class="nav_links" id="navLinks">
                <i class="fa-solid fa-xmark"></i>
                <ul>
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./lib/about.php">ABOUT</a></li>
                    <li><a href="./lib/course.php">COURSE</a></li>
                    <li><a href="./lib/blog.php">BLOG</a></li>
                    <li><a href="./lib/contact.php">CONTACT</a></li>
                </ul>
            </nav>
            <i class="fa-solid fa-ellipsis"></i>
        </header>
        <div class="text_box">
            <h1>Welcome to our University</h1>
            <p>Making Website is now one of the easiest thing in the world. 
               You just need to learn <br> HTML, CSS, JAVASCRIPT and you are good to go</p>
            <a href="#" class="visit_btn">Visit Us to know more</a>
        </div>
    </section>

    <!-- course 페이지 -->
    <section class="course">
        <h1>Courses we offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <ul class="course_row">
            <li class="course_col">
                <h3>Intermeiate</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum corrupti hic, dolor distinctio quae velit est deleniti officiis asperiores nam cumque provident ipsa beatae vel vero doloribus? Unde, iste eos.</p>
            </li>
            <li class="course_col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum corrupti hic, dolor distinctio quae velit est deleniti officiis asperiores nam cumque provident ipsa beatae vel vero doloribus? Unde, iste eos.</p>
            </li>
            <li class="course_col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum corrupti hic, dolor distinctio quae velit est deleniti officiis asperiores nam cumque provident ipsa beatae vel vero doloribus? Unde, iste eos.</p>
            </li>
        </ul>
    </section>

    <!-- campus 페이지  -->
    <section class="campus">
        <h1>Our Global Campus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <ul class="campus_row">
            <li class="campus_col">
                <img src="./img/london.png" alt="campus_london">
                <div class="campus_layer">
                    <h3>LONDON</h3>
                </div>
            </li>
            <li class="campus_col">
                <img src="./img/newyork.png" alt="campus_newyork">
                <div class="campus_layer">
                    <h3>NEWYORK</h3>
                </div>
            </li>
            <li class="campus_col">
                <img src="./img/washington.png" alt="campus_washington">
                <div class="campus_layer">
                    <h3>WASHINGTON</h3>
                </div>
            </li>
        </ul>
    </section>

    <!-- facilities 페이지 -->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <ul class="fac_row">
            <li class="fac_col">
                <img src="./img/library.png" alt="facilities_library">
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum corrupti hic, dolor distinctio quae velit est deleniti officiis asperiores nam cumque provident ipsa beatae vel vero doloribus? Unde, iste eos.</p>
            </li>
            <li class="fac_col">
                <img src="./img/basketball.png" alt="facilities_basketball">
                <h3>Largest Play Ground</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum corrupti hic, dolor distinctio quae velit est deleniti officiis asperiores nam cumque provident ipsa beatae vel vero doloribus? Unde, iste eos.</p>
            </li>
            <li class="fac_col">
                <img src="./img/cafeteria.png" alt="facilities_cafeteria">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum corrupti hic, dolor distinctio quae velit est deleniti officiis asperiores nam cumque provident ipsa beatae vel vero doloribus? Unde, iste eos.</p>
            </li>
        </ul>
    </section>

    <!-- testimonials 페이지 -->
    <section class="testimonials">
        <h1>What Our Student Say</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <ul class="test_row">
            <li class="test_col">
                <img src="./img/user1.jpg" alt="testimonials_user1">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore, quod ipsum ipsa necessitatibus ad unde voluptates asperiores! Beatae tempora eaque tempore veniam minima provident mollitia voluptates consequuntur aperiam perferendis.</p>
                    <h3>Student Name</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </li>
            <li class="test_col">
                <img src="./img/user2.jpg" alt="testimonials_user2">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore, quod ipsum ipsa necessitatibus ad unde voluptates asperiores! Beatae tempora eaque tempore veniam minima provident mollitia voluptates consequuntur aperiam perferendis.</p>
                    <h3>Student Name</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </li>
        </ul>
    </section>

    <!-- contact -->
    <section class="contact">
        <h1>Enroll For Our Various Online Course <br>Anywhere From the World</h1>
        <a href="#" class="contact_btn">Contact Us</a>
    </section>

<?php include_once "./inc/footer.html" ?>