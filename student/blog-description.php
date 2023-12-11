<!DOCTYPE html>
<html lang="en">


<?php include "head.php"; $main = 5; $sub= 0;?>
<style>
    .image {
    width:700px;
      display: block;
      margin: 0 auto; /* Center the image */
    }

    @media (max-width: 600px) {
        .image {
        max-width: 100%; /* Allow image to take full width on smaller screens */
      }
    }
  </style>
<body>
   <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include "nav.php";?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include "sidebar.php";?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0"><?php echo $title?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>Blog Title </h3>
                                                        <h5><b>Organization Name</b> </h5>
                                                        <p>December - 8 - 2023</p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <img src="../images/Tech.jpg" class="image" >
                                                                    </div>
                                                                    <div class="col-sm-12 mt-3">
                                                                    <h1>Dev Fest 2023: A Celebration of Innovation and Collaboration</h1>

                                                                        <img src="dev-fest-banner.jpg" alt="Dev Fest Banner">

                                                                        <p>The tech community came alive this past weekend as developers, engineers, and enthusiasts gathered for Dev Fest 2023—a celebration of innovation, collaboration, and the ever-evolving world of technology. Hosted in the heart of the city, this year's Dev Fest proved to be a memorable experience for everyone in attendance.</p>

                                                                        <h2>A Dynamic Lineup of Speakers</h2>

                                                                        <p>The event kicked off with an impressive lineup of keynote speakers who shared their insights into the latest trends and advancements in the tech industry. From artificial intelligence and machine learning to blockchain and cloud computing, the talks covered a wide range of topics, providing attendees with valuable knowledge and inspiration.</p>

                                                                        <ul>
                                                                        <li><strong>Dr. Allison Carter:</strong> Exploring the Frontiers of AI Ethics</li>
                                                                        <li><strong>Jason Patel:</strong> Building Scalable and Resilient Microservices</li>
                                                                        <li><strong>Alexandra Ramirez:</strong> Navigating the Future of Cybersecurity</li>
                                                                        </ul>

                                                                        <h2>Hands-On Workshops and Demos</h2>

                                                                        <p>Dev Fest wasn't just about listening; it was also about getting hands-on experience. Attendees had the opportunity to participate in interactive workshops and live demonstrations, allowing them to dive deep into cutting-edge technologies. From coding challenges to hackathons, there was something for every skill level.</p>

                                                                        <p>One popular workshop was "Introduction to Quantum Computing," where participants delved into the fascinating world of quantum mechanics and its potential impact on computing. Another hit was the "Build Your First Chatbot" session, where attendees created their own chatbots using natural language processing tools.</p>

                                                                        <h2>Networking and Collaboration</h2>

                                                                        <p>One of the most significant benefits of attending Dev Fest was the chance to network with like-minded individuals. The event provided ample opportunities for developers to connect, share ideas, and even collaborate on impromptu projects. The sense of community was palpable, fostering an environment where both beginners and seasoned professionals felt welcomed.</p>

                                                                        <p>The "Tech Mixer" in the evening allowed attendees to unwind, socialize, and forge new connections. With an abundance of snacks, music, and interactive activities, it was the perfect setting for networking in a relaxed atmosphere.</p>

                                                                        <h2>Showcasing Innovations in the Expo Area</h2>

                                                                        <p>The expo area was a hub of activity, with companies and startups showcasing their latest innovations and products. Attendees had the chance to interact with cutting-edge technologies, explore virtual reality experiences, and even test out the newest gadgets. From small tech startups to industry giants, the expo featured a diverse range of exhibitors, sparking conversations about the future of tech.</p>

                                                                        <h2>Closing Thoughts</h2>

                                                                        <p>Dev Fest 2023 was a testament to the dynamic and ever-evolving nature of the tech industry. As the event came to a close, attendees left with a renewed sense of inspiration, armed with new knowledge and connections to propel their projects forward. The success of this year's Dev Fest ensures that the tech community will eagerly anticipate the next edition, eager to explore what the future of technology holds.</p>

                                                                        <p>Missed Dev Fest 2023? Stay tuned for updates on future events and continue to be a part of the thriving tech community.</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <h3>Related Blog Post</h3>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>


                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div><div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                    <h4>Blog Title</h4>
                                                                    <p>Decriptions .........</p>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    new DataTable('#example');
   </script>
    <?php include "footer.php"?>
</body>

</html>
