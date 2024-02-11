<?php
include "connect.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM tb_apis";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result);
// echo mysqli_num_rows($result) . "<br>";
// print_r($data);

// $json = json_encode($data);
$app_name;
$api_key;

function abc($para)
{
    foreach ($para as $val) {
        if (is_array($val) || is_object($val)) {
            foreach ($val as $x => $y) {
                if ($x == 2) {
                    $app_name = $y;
                } elseif ($x == 6) {
                    $api_key = $y;
                }

                $api_name = "Testing";
?>
                <!-- <div class="rows"> -->
                <div class="card-hover-effect">
                    <div class="cards" data-aos="slide-up" data-aos-offset="100" data-aos-easing="ease-in-out">
                        <div class="card-content">
                            <div class="app-name">
                                <h3><?= $app_name ?></h3>
                            </div>
                            <div class="api-name">
                                <h4><?= $api_name ?></h4>
                            </div>
                            <div class="api-key" data-api-key="">
                                <p class="api-key-value"><?= $api_key ?></p>
                                <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
<?php
            }
        } else {
            echo $val;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Animation Link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Jquery link  -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

</head>

<body>
    <section id="main" data-scroll-container>

        <div id="page-1">
            <div id="page-12">
                <div id="create-api">
                    <a href="https://google.com">Create API</a>
                </div>
                <div id="search">
                    <input type="search" placeholder="Search" name="search">
                </div>
            </div>

            <div class="animation-ball1"></div>
            <div class="animation-ball2"></div>
            <div id="hero-shape">
                <div id="hero-1"></div>
                <div id="hero-2"></div>
                <div id="hero-3"></div>
            </div>

            <div id="container">

                <div class="popup-form">
                    <div class="card-id">
                        <h3>Id</h3>
                        <p>12</p>
                    </div>
                    <div class="app-name">
                        <h3>App Name</h3>
                        <p>This is App Name</p>
                    </div>
                    <div class="scope">
                        <h3>Scope</h3>
                        <p>Read</p>
                    </div>
                    <div class="database">
                        <h3>DataBase</h3>
                        <p>NikuSoft_yt</p>
                    </div>
                    <div class="tables">
                        <h3>Tables</h3>
                        <p>Activites</p>
                    </div>
                    <div class="api-for">
                        <h3>Api For</h3>
                        <p>Read Data</p>
                    </div>
                    <div class="wl-domain">
                        <h3>Whitelisted Domains</h3>
                        <p>https://nikusoft.com</p>
                    </div>
                    <div class="Redirect-url">
                        <h3>Redirect URL</h3>
                        <p>Onespect.com</p>
                    </div>
                    <div class="api-key">
                        <h3>Api Key</h3>
                        <p>api_gfga637dshf6</p>
                    </div>
                    <div class="secret">
                        <h3>Secret</h3>
                        <p>sio98duwceeegujfg</p>
                    </div>
                    <div class="validity">
                        <h3>Validity Till</h3>
                        <p>2023-12-23</p>
                    </div>
                </div>

                <div class="rows">
                    <?php abc($data); ?>
                </div>
                <!-- <div class="rows">
                    <div class="card-hover-effect">
                        <div class="cards" data-aos="slide-up">
                            <div class="card-content">
                                <div class="app-name">
                                    <h3><?= $app_name ?></h3>
                                </div>
                                <div class="api-name">
                                    <h4><?= $api_name ?></h4>
                                </div>
                                <div class="api-key">
                                    <p><?= $api_key ?></p>
                                    <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-hover-effect">
                        <div class="cards" data-aos="slide-up">
                            <div class="card-content">
                                <div class="app-name">
                                    <h3>App Name My App</h3>
                                </div>
                                <div class="api-name">
                                    <h4>API Name</h4>
                                </div>
                                <div class="api-key">
                                    <p>API Key 1234567890</p>
                                    <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-hover-effect">
                        <div class="cards" data-aos="slide-up">
                            <div class="card-content">
                                <div class="app-name">
                                    <h3>App Name My App</h3>
                                </div>
                                <div class="api-name">
                                    <h4>API Name</h4>
                                </div>
                                <div class="api-key">
                                    <p>API Key 1234567890</p>
                                    <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="card-hover-effect">
                        <div class="cards" data-aos="slide-up">
                            <div class="card-content">
                                <div class="app-name">
                                    <h3>App Name My App</h3>
                                </div>
                                <div class="api-name">
                                    <h4>API Name</h4>
                                </div>
                                <div class="api-key">
                                    <p>API Key 1234567890</p>
                                    <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-hover-effect">
                        <div class="cards" data-aos="slide-up" data-aos-offset="100">
                            <div class="card-content">
                                <div class="app-name">
                                    <h3>App Name My App</h3>
                                </div>
                                <div class="api-name">
                                    <h4>API Name</h4>
                                </div>
                                <div class="api-key">
                                    <p>API Key 1234567890</p>
                                    <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-hover-effect">
                        <div class="cards" data-aos="slide-up" data-aos-offset="100">
                            <div class="card-content">
                                <div class="app-name">
                                    <h3>App Name My App</h3>
                                </div>
                                <div class="api-name">
                                    <h4>API Name</h4>
                                </div>
                                <div class="api-key">
                                    <p>API Key 1234567890</p>
                                    <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
    </section>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        $(document).ready(function() {
            $(".copy-btn").on("click", function() {
                // Get the text to copy
                var textToCopy = document.getElementsByClassName("api-key-value").innerText;

                // Create a temporary textarea element
                var tempTextArea = document.createElement("textarea");
                tempTextArea.value = textToCopy;

                // Append the textarea element to the document
                document.body.appendChild(tempTextArea);

                // Select the text inside the textarea
                tempTextArea.select();
                tempTextArea.setSelectionRange(0, 99999); /* For mobile devices */

                // Copy the selected text to the clipboard
                document.execCommand("copy");

                // Remove the temporary textarea
                document.body.removeChild(tempTextArea);

                // Provide some feedback to the user
                alert("Copied to clipboard: " + textToCopy);
            })

            // Form Pop-up
            $(".cards").on("click", function() {
                console.log("Cards");
                $(".popup-form").css("display", "block");
            })

        });
    </script>
</body>

</html>