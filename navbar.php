<nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <strong><?php echo $title?></strong>
                    </a>

                   

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link <?php if($nav == 1){ echo "active";} ?>" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if($nav == 2){ echo "active";} ?>" href="faculty.php">Faculty</a>
                            </li>

                           
                            <li class="nav-item">
                                <a class="nav-link <?php if($nav == 3){ echo "active";} ?>" href="organization.php">Organizations</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if($nav == 4){ echo "active";} ?>" href="faq.php">FAQs</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="signin.php" class="bi-person custom-icon me-3"></a>

                            
                        </div>
                    </div>
                </div>
            </nav>