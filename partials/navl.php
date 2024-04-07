<nav class="navbar navbar-expand-lg shadow rounded fixed-top bg-white">
        <div class="container-fluid">
            <a class="navbar-brand logo fs-3 ps-5" href="#">Travel Buss Pass</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link text-uppercase" href="index.php">Home</a>
                    </li>
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link text-uppercase" href="about.php">About</a>
                    </li>
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <a class="nav-link text-uppercase" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item pe-5 mx-auto fs-6">
                        <button class="nav-link" href="#" id="myBtn"><i class="fa-regular fa-user" style="color: #271616;"></i></button>
                        <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <p> Welcome <?php echo $_SESSION['name'];?></p>
                            <a href="book.php">Book Pass</a>
                            <a href="viewpass.php">View Pass</a>
                            <a href="logout.php">Logout</a>
                        </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>