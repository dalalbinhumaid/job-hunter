<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/jobs.css">
        <link rel="stylesheet" href="styles/NavbarStyles.css">
        <link rel="stylesheet" href="styles\Buttons.css" />
        <link rel="icon" href="img/icon.png">
        <link rel="icon" href="img/icon.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js/Jquery.js"></script>

        <title>Job Hunter</title>
    </head>
    <body>
        <div class="container">
            <div class="custom-shape-divider-top-1612286857">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="header">
                <nav class="navbar">
                    <div class="logo">
                        <img src="img/logo.png">
                    </div>
                    <div class="navbar-items">
                        <a href="home.html" class="navbar-item">Home</a>
                        <a href="jobSearch.html" class="navbar-item">Jobs</a>
                        <a href="EmployerSearch.html" class="navbar-item">Employers</a>
                        <a href="LogIn.html" class="navbar-item-span">Log in</a>
                    </div>
                </nav>
                
                <img src="img/search.png" class="home-img">
                <!-- <div class="join">
                    <p>Search for job</p>
                    <button class="join-button">Search bar</button>
                </div> -->
            </div>
            
            <div class="search">
                <div class="search-box">
                    <span class="material-icons" class="search-icon">search</span>
                    <input type="text" class="input" placeholder="Search">
                    <div class="dropdown">
                        <div class="default_option">position</div>  
                        <ul>
                          <li>major</li>
                          <li>company name</li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <div class="default_option">city</div>
                        <div class="city-form">
                            <label for="">City :</label>
                            <input type="text">
                            <button>Apply</button>
                        </div>
                    </div>
                    <div class="dropdown2">
                        <div class="default_option">Full time</div>  
                        <ul>
                          <li>Part time</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="jobs">
                <div class="job-posts">
                    <ul>
                        <li class="post">
                            <div class="post-content">
                                <a class="JobDetails">
                                    <h4  style="font-weight :bolder" >Graphic Designer</h4>
                                    <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span class="icon-side">Riyadh, Saudi Arabia</span><br>
                                    <!-- <svg class="major-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>
                                    <span>Software Engineering</span> -->
                                    <h5>About Job :</h5>
                                    <p class="descrption">  We're looking for a very talented Graphic Designer to be part of our Rebel team! </p>
                                    <p class="time"><span class="material-icons">work</span>Full time</p><br>
                                </a>
                            </div>
                        </li>
                        <li class="post">
                            <div class="post-content">
                                <a class="JobDetails">
                                    <h4  style="font-weight :bolder" >Graphic Designer</h4>
                                    <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span class="icon-side">Riyadh, Saudi Arabia</span><br>
                                    <!-- <svg class="major-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>
                                    <span>Software Engineering</span> -->
                                    <h5>About Job :</h5>
                                    <p class="descrption">  We're looking for a very talented Graphic Designer to be part of our Rebel team! </p>
                                    <p class="time"><span class="material-icons">work</span>Full time</p><br>
                                </a>
                            </div>
                        </li>
                        <li class="post">
                            <div class="post-content">
                                <a class="JobDetails">
                                    <h4  style="font-weight :bolder" >Graphic Designer</h4>
                                    <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span class="icon-side">Riyadh, Saudi Arabia</span><br>
                                    <!-- <svg class="major-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>
                                    <span>Software Engineering</span> -->
                                    <h5>About Job :</h5>
                                    <p class="descrption">  We're looking for a very talented Graphic Designer to be part of our Rebel team! </p>
                                    <p class="time"><span class="material-icons">work</span>Full time</p><br>
                                </a>
                            </div>
                        </li>
                        <li class="post">
                            <div class="post-content">
                                <a class="JobDetails">
                                    <h4  style="font-weight :bolder" >Graphic Designer</h4>
                                    <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span class="icon-side">Riyadh, Saudi Arabia</span><br>
                                    <!-- <svg class="major-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>
                                    <span>Software Engineering</span> -->
                                    <h5>About Job :</h5>
                                    <p class="descrption">  We're looking for a very talented Graphic Designer to be part of our Rebel team! </p>
                                    <p class="time"><span class="material-icons">work</span>Full time</p><br>
                                </a>
                            </div>
                        </li>
                        <li class="post">
                            <div class="post-content">
                                <a class="JobDetails">
                                    <h4  style="font-weight :bolder" >Graphic Designer</h4>
                                    <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span class="icon-side">Riyadh, Saudi Arabia</span><br>
                                    <!-- <svg class="major-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>
                                    <span>Software Engineering</span> -->
                                    <h5>About Job :</h5>
                                    <p class="descrption">  We're looking for a very talented Graphic Designer to be part of our Rebel team! </p>
                                    <p class="time"><span class="material-icons">work</span>Full time</p><br>
                                </a>
                            </div>
                        </li>
                        <li class="post">
                            <div class="post-content">
                                <a class="JobDetails">
                                    <h4  style="font-weight :bolder" >Graphic Designer</h4>
                                    <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span class="icon-side">Riyadh, Saudi Arabia</span><br>
                                    <!-- <svg class="major-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg>
                                    <span>Software Engineering</span> -->
                                    <h5>About Job :</h5>
                                    <p class="descrption">  We're looking for a very talented Graphic Designer to be part of our Rebel team! </p>
                                    <p class="time"><span class="material-icons">work</span>Full time</p><br>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <div class="footer-content">
                    <p>Contact us</p>
                    <span class="material-icons">facebook</span>
                    <a href="mailto:jobhunter@ksu.com"><span class="material-icons">email</span></a>
                </div>
                <div class="shape-footer" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                    style="height: 100%; width: 100%;">
                    <path d="M-15.58,-15.49 C-16.70,110.81 186.45,57.52 502.48,59.50 L500.00,0.00 L0.00,0.00 Z"
                        style="stroke: none; fill: #8CB3F4;"></path>
                </svg></div>
            </div>
        </div>
        <?php 
            include_once './JobDetailsPopUp.php';
        ?>
    </body>
</html>