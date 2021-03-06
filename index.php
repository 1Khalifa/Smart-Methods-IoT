<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="styles.css"/>
    <link rel="icon" href="images/robot-head.svg">
    <title>Control Panel</title>
</head>
<body>

<div class="container g-0 mt-5 justify-content-center">

    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Robot Movement
                <img class="directions" src="images/controller.svg"></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Robot Arm
                <img class="robot-arm" src="images/robot-arm.svg"></button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form method="post" action="CurrentDirection.php" name="Direction">
                <div class="control p-2 row g-0 bg-light">
                    <div class="row g-0 justify-content-center">
                        <div class="empty"></div>
                        <button type="submit" value="f" name="direction" class="up arrow text-light hvr-pulse-shrink"><i
                                    class="fas fa-chevron-up h4"></i></button>
                        <div class="empty"></div>
                    </div>

                    <div class="row my-2 g-0 justify-content-center">
                        <button type="submit" value="l" name="direction" class="left arrow text-light hvr-pulse-shrink">
                            <i class="fas fa-chevron-left h4"></i></button>
                        <button type="submit" value="s" name="direction"
                                class="stop  mx-2 text-light fw-bold  hvr-pulse-shrink">STOP
                        </button>
                        <button type="submit" value="r" name="direction"
                                class="right arrow text-light hvr-pulse-shrink"><i class="fas fa-chevron-right h4"></i>
                        </button>
                    </div>

                    <div class="row g-0 justify-content-center">
                        <div class="empty"></div>
                        <button type="submit" value="b" name="direction" class="down arrow text-light hvr-pulse-shrink">
                            <i class="fas fa-chevron-down h4"></i></button>
                        <div class="empty"></div>
                    </div>
                </div>
            </form>
            <div class="row g-0 mx-5 mt-5 justify-content-center">
                <div class="col-sm-6 col-lg-6  msg"><h3 class="text-light p-4">Hello,<br> can you help me move?</h3>
                </div>
                <img class="col-sm-6 col-lg-3 robot mx-3" src="images/sm-robot.svg" alt="robot">
            </div>
        </div>
        <div class="tab-pane fade mx-5" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <form method="post" action="Motors.php" name="Direction">
                <div class="row justify-content-center">
                    <ul class="list-group mt-2">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5>Motor #1</h5>
                            <input name="eng1" type="range" class="my-3 mx-3" min="0" max="180" value="0" id="eng1">
                            <h4><span class="badge value value1">0</span></h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5>Motor #2</h5>
                            <input name="eng2" type="range" class="my-3 mx-3" min="0" max="180" value="0" id="eng2">
                            <h4><span class="badge value value2">0</span></h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5>Motor #3</h5>
                            <input name="eng3" type="range" class="my-3 mx-3" min="0" max="180" value="0" id="eng3">
                            <h4><span class="badge value value3">0</span></h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5>Motor #4</h5>
                            <input name="eng4" type="range" class="my-3 mx-3" min="0" max="180" value="0" id="eng4">
                            <h4><span class="badge value value4">0</span></h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5>Motor #5</h5>
                            <input name="eng5" type="range" class="my-3 mx-3" min="0" max="180" value="0" id="eng5">
                            <h4><span class="badge value value5">0</span></h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5>Motor #6</h5>
                            <input name="eng6" type="range" class="my-3 mx-3" min="0" max="180" value="0" id="eng6">
                            <h4><span class="badge value value6">0</span></h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-end align-items-center bottom">
                            <button name="save" type="submit" class="btn btn-light me-2">Save <i
                                        class="fas fa-save"></i>
                            </button>
                            <button name="switch" type="submit" class="btn btn-light">Run <i class="fas fa-play"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </form>
            <img class="col-sm-6 robot-arm2" src="images/robot-arm2.svg">
        </div>
    </div>
</div>
<footer>
    <p class="text-light text-center mx-5 pt-3">By Khalifa Alhomely - Smart Methods Est ?? All rights reserved 2021</p>
</footer>
</body>
<script src="script.js"></script>
</html>