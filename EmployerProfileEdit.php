<?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['role'] == 1) { //i edit this one to restrict jobsseker from enter the emplyer page
    header("location: LogIn.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/EmployerProfileEdit.css" />
    <link rel="stylesheet" href="styles/Notifications.css" />
    <link rel="stylesheet" href="styles/Buttons.css" />
    <link rel="stylesheet" href="styles/NavbarStyles.css" />
    <link rel="stylesheet" href="styles/Footer.css" />
    <script src="js/Notification.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="icon" href="img/icon.png" />
    <title>Employer | Profile</title>
</head>


<body>
    <!-- popup for notifications -->
    <div class="popup" id="popup">
        <div class="popup-inner" id="popup-inner">
            <a href="#" id="closeIcon" class="closeIcon" onclick="hideNotification()"><i class="material-icons">close</i></a>
            <div class="notificationList">
                <ul>
                    <li class="notificationRow">
                        <div class="notificationIcon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <h3>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </h3>
                            <p class="date">February 11th 2021</p>
                        </div>
                    </li>
                    <li class="notificationRow">
                        <div class="notificationIcon">
                            <i class="material-icons">notifications_active</i>
                        </div>
                        <div class="content">
                            <h3>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </h3>
                            <p class="date">February 11th 2021</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header and logo -->
    <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
    <span class="logo"><img src="img/logo.PNG" alt="logo" /></span>
    <div style="height: 150px; overflow: hidden">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
            <path d="M-15.58,-15.49 C-16.70,110.81 186.45,57.52 502.48,59.50 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #8cb3f4"></path>
        </svg>
    </div>
    <header>
        <nav>
            <ul class="navLinks1">
                <li><a href="home.html">Home</a></li>
                <li><a href="jobSeekerSearch.html">Job Seekers</a></li>
                <li>
                    <a href="#">My Jobs</a>
                    <ul>
                        <li><a href="JobListing.php">All Jobs</a></li>
                        <li><a href="PostAJob.html.html">Post a Job</a></li>
                    </ul>
                </li>

                <li><a href="myAdvices.html"> My Advices </a></li>
            </ul>
            <ul class="navLinks2">
                <li>
                    <a href="#" id="notification" class="notificationIcon" onclick="showNotifications()"><i class="material-icons">notifications</i></a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">person</i></a>
                    <ul>
                        <li><a href="EmployerProfile_Eidt.html">Profile</a></li>
                        <li><a href="http:signout.php">logout</a></li>

                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <?php
    if (!($database = mysqli_connect("localhost", "root", "")))
        die("<p>Could not connect to database</p>");

    if (!mysqli_select_db($database, "jobhunter"))
        die("<p>Could not open URL database</p>");


    $email = $_SESSION['email'];

    $query = "select * from employer WHERE email='$email'";
    $result = mysqli_query($database, $query);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $address = $data['address'];
        $scope = $data['scope'];
        $phone = $data['phone'];
        $description = $data['description'];
        $mission = $data['mission'];
        $vision = $data['vision'];
    } else {
        echo "There are no info.";
        exit();
    }

    ?>

    <h1>Update Company Information</h1>
    <div class="line"></div>
    <main>
        <div class="form">
            <form action="#" method="POST">
                <label>Company Name:<input type="text" name="employerName" value=<?php echo $name; ?>></label>
                <label>Company Address:<input type="text" name="employerAddress" value=<?php echo $address; ?>></label>
                <label>Company Scope: <input type="text" name="employerScope" value=<?php echo $scope; ?>></label>
                <label>Company Email: <input type="email" name="employerEmail" value=<?php echo $email; ?>></label>
                <label>Company Phone Number:<input type="text" name="employerPhone" value=<?php echo $phone; ?>></label>
                <label>Descripition of Company:<textarea name="employerDescription"><?php echo $description; ?> </textarea></label>
                <label>Mission of Company:<textarea name="employerMission"><?php echo $mission; ?> </textarea></label>
                <label>Vision of Company:<textarea name="employerVision"><?php echo $vision; ?> </textarea></label>
                <button name="update"> Update  </button>
                <a href="EmployerProfile.php"> <button name="cance">Cancel </button></a>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <p>Contact us</p>
            <span class="material-icons">facebook</span>
            <a href="mailto:jobhunter@ksu.com"><span class="material-icons">email</span></a>
        </div>
        <div class="shape-footer" style="height: 150px; overflow: hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
                <path d="M-15.58,-15.49 C-16.70,110.81 186.45,57.52 502.48,59.50 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #8cb3f4"></path>
            </svg>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['update'])) {
    $employerName = $_POST['employerName'];
    $employerAddress = $_POST['employerAddress'];
    $employerScope = $_POST['employerScope'];
    $employerEmail = $_POST['employerEmail'];
    $employerPhone = $_POST['employerPhone'];
    $employerDescription = $_POST['employerDescription'];
    $employerMission = $_POST['employerMission'];
    $employerVision = $_POST['employerVision'];

    $query = "UPDATE employer SET name = '$employerName', address = '$employerAddress', email = '$employerEmail', phone = '$employerPhone', scope = '$employerScope', description = '$employerDescription', mission = '$employerMission', vision = '$employerVision' WHERE email = '$email'";
    $result = mysqli_query($database, $query);

    if ($result) {
?>
        <script>
            window.location = "EmployerProfile.php";
        </script>
<?php
    } else {
        print 'Error';
        exit();
    }
}
?>