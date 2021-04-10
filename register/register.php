
<?php include_once('headNoNav.php');?> 
        <base href = "/portfolio/ultimLogin/register/">
        <title>Ultimate Login</title>
        <link rel = "stylesheet" href = "register.css">
        <link rel = "stylesheet" href = "/CSS/allProjectsModal.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include_once("Classes/projectInfoModal.php");
            createProjectModal("Ultimate Login", $projectModalArr);
        ?>
        <header>
            <nav>
                <a href ="/#portfolio-" class = "nav-logo" id = "idLogo" >Ultim Login</a>
                <ul class = "nav-menu" id = "navMenu">
                    <li class = "nav-link"><a href = "/ultimLogin/login">Login</a></li>
                    <li class = "nav-link"><a href = "/#portfolio-">Portfolio</a></li>
                    <li class = "nav-link"><a href = "https://github.com/dvereen1/UltimateLogin">View Code</a></li>
                </ul>
                <div class = "nav-toggle" id = "navToggle">
                    <i class = "fas fa-bars"></i>
                </div>
            </nav>
        </header>
        <svg class = "register-bg" xmlns="http://www.w3.org/2000/svg" width="928.034" height="1253.025" viewBox="0 0 928.034 1253.025">
                        <path id="Path_1" data-name="Path 1" d="M530.755,214.829C425.29,479.242,591.821,503.842,669,646.745s-138.248,557.994-138.248,557.994H-242.334V125.139L495.386-48.286S636.22-49.584,530.755,214.829Z" transform="translate(242.334 48.286)" fill="#54eb9a"/>
        </svg>
        <!--</div>-->
        <main class  = "djv-container">
            <section class ="form-container">
                <form action = "ultimLoginLogic.php" name = "reg-form" method = "post" enctype = "multipart/form-data" id="reg-form" accept-charset="uft-8" novalidate>
                    <h1 class ="form-title">REGISTER</h1>
                    <!--<div class = "input-two-col">-->
                    <div class = "input-group-1">
                        <div class = "input-ctrl">
                            <input class = "input-sm" type = "text" name = "firstName" id = "firstName" placeholder="First Name" onfocusout = "validator.notEmpty(firstName)">
                            <small class = "indicator"></small>
                        </div>
                        <div class = "input-ctrl">
                            <input class = "input-sm" type = "text" name = "lastName" id = "lastName" placeholder = "Last Name" onfocusout = "validator.notEmpty(lastName)">
                            <small class = "indicator"></small>
                        </div>
    
                        <div class = "input-ctrl">
                            <input class = "input-lo" type = "email" required name = "email" id = "email" placeholder = "Email" onfocusout = "validator.notEmpty(email)">
                            <small class = "indicator">Testing</small>
                        </div>
                    </div>
                    <div class = "input-group-2">
                        <div class = "input-ctrl">
                            <input class ="input-lo" type = "text" required name = "username" id = "username" placeholder = "Username" onfocusout = "validator.notEmpty(username)">
                            <small class = "indicator"></small>
                        </div>
                        <div class = "input-ctrl">
                            <input class = "input-lo" type = "password" required name = "password[]" id = "password" placeholder = "Password" onfocusout = "validator.notEmpty(password)">
                            <small class = "indicator"></small>
                        </div>
                        <div class = "input-ctrl">
                            <input class = "input-lo" type = "password" required name = "password[]" id = "confirmPassword" placeholder = "Confirm Password" onfocusout = "validator.notEmpty(confirmPassword)">
                            <small class = "indicator"></small>
                        </div>
                    </div>
                
                    <!--</div>-->
                    <button class = "next-btn">
                        Next
                    </button>
                    <button type = "submit" name = "sub-btn" class = "sub-btn">
                        Register
                    </button>
                    </form>
                 
            </section>
            <section class = "login-graphic">
                <!--initial width: 493.606 initial height: 366.084-->
              
                <div class = "login-opt">
                    <h3>Returning?</h3>
                    <p>
                        Log in to stay up to date, change settings, and access your information.
                    </p>
                    <a class = "login-btn" href = "/ultimLogin/login">Login</a>
                </div>
                
                <svg class = "login-graphic-svg" id="Group_11" data-name="Group 11" xmlns="http://www.w3.org/2000/svg" width="493.606" height="366.084" viewBox="0 0 493.606 366.084">
                    <path id="Path_32" data-name="Path 32" d="M408.408,722.009c-8.121,10.875-24.977,12.02-24.977,12.02s-3.691-16.487,4.43-27.362,24.977-12.02,24.977-12.02S416.528,711.134,408.408,722.009Z" transform="translate(-258.224 -373.831)" fill="#eba054"/>
                    <path id="Path_33" data-name="Path 33" d="M352.279,736.488c5.358,7.176,16.482,7.932,16.482,7.932s2.435-10.88-2.923-18.056-16.482-7.932-16.482-7.932S346.921,729.312,352.279,736.488Z" transform="translate(-243.463 -384.222)" fill="#703d57"/>
                    <path id="Path_34" data-name="Path 34" d="M145.146,639.849H0v-1.186H145.362Z" transform="translate(0 -278.997)" fill="#3f3d56"/>
                    <rect id="Rectangle_7" data-name="Rectangle 7" width="96.672" height="144.308" transform="translate(396.934 33.625)" fill="#e6e6e6"/>
                    <rect id="Rectangle_8" data-name="Rectangle 8" width="86.348" height="128.896" transform="translate(402.096 41.331)" fill="#fff"/>
                    <rect id="Rectangle_9" data-name="Rectangle 9" width="4.179" height="14.467" transform="translate(458.593 133.048)" fill="#3f3d56"/>
                    <path id="Path_35" data-name="Path 35" d="M793.425,248.477l-10.4-12.507H762.768L750.39,248.026l.25.161h-.09v25.077H793.31V248.187Z" transform="translate(-327.804 -103.082)" fill="#3f3d56"/>
                    <path id="Path_36" data-name="Path 36" d="M798.769,235.684l-12.7,14.889v22.566H808.9v-25.4Z" transform="translate(-343.391 -102.957)" fill="#703d57"/>
                    <rect id="Rectangle_10" data-name="Rectangle 10" width="4.662" height="4.12" transform="translate(451.842 157.702)" fill="#3f3d56"/>
                    <rect id="Rectangle_11" data-name="Rectangle 11" width="4.662" height="4.055" transform="translate(451.842 150.57)" fill="#3f3d56"/>
                    <rect id="Rectangle_12" data-name="Rectangle 12" width="4.662" height="4.12" transform="translate(451.842 157.702)" fill="#fff"/>
                    <rect id="Rectangle_13" data-name="Rectangle 13" width="4.662" height="4.055" transform="translate(451.842 150.57)" fill="#fff"/>
                    <path id="Path_37" data-name="Path 37" d="M942.2,424.406a1.882,1.882,0,0,1,2.149-1.851" transform="translate(-502.685 -254.961)" fill="#e6e6e6"/>
                    <circle id="Ellipse_13" data-name="Ellipse 13" cx="1.025" cy="1.025" r="1.025" transform="translate(437.909 165.402)" fill="#6c63ff"/>
                    <rect id="Rectangle_14" data-name="Rectangle 14" width="0.289" height="2.026" transform="translate(438.768 168.154)" fill="#e6e6e6"/>
                    <rect id="Rectangle_15" data-name="Rectangle 15" width="96.672" height="144.308" transform="translate(264.535 33.625)" fill="#e6e6e6"/>
                    <rect id="Rectangle_16" data-name="Rectangle 16" width="86.348" height="128.896" transform="translate(269.697 41.331)" fill="#fff"/>
                    <path id="Path_38" data-name="Path 38" d="M918.061,282.023l2.488-1.99a2.636,2.636,0,0,0-3.052,1.675,4.238,4.238,0,0,0-3.154.195l4.978,1.807a3.769,3.769,0,0,0-1.26-1.687Z" transform="translate(-490.516 -192.697)" fill="#3f3d56"/>
                    <path id="Path_39" data-name="Path 39" d="M727.284,275.1l2.488-1.99a2.636,2.636,0,0,0-3.052,1.675,4.239,4.239,0,0,0-3.154.195l4.978,1.807a3.766,3.766,0,0,0-1.26-1.687Z" transform="translate(-407.176 -189.674)" fill="#3f3d56"/>
                    <path id="Path_40" data-name="Path 40" d="M978.192,248.644l2.488-1.99a2.636,2.636,0,0,0-3.052,1.675,4.238,4.238,0,0,0-3.154.195l4.978,1.807A3.768,3.768,0,0,0,978.192,248.644Z" transform="translate(-516.784 -178.115)" fill="#3f3d56"/>
                    <rect id="Rectangle_17" data-name="Rectangle 17" width="4.179" height="14.467" transform="translate(329.347 118.759)" fill="#3f3d56"/>
                    <rect id="Rectangle_18" data-name="Rectangle 18" width="4.179" height="14.467" transform="translate(329.347 117.313)" fill="#3f3d56"/>
                    <path id="Path_41" data-name="Path 41" d="M557.413,227.935l-14.266-16.944H515.156l-17.105,16.661.345.222h-.123V262.53h59.092V227.874Z" transform="translate(-217.571 -92.17)" fill="#3f3d56"/>
                    <path id="Path_42" data-name="Path 42" d="M564.91,210.6l-17.55,20.575v31.185h31.545v-35.1Z" transform="translate(-239.112 -91.998)" fill="#957186"/>
                    <rect id="Rectangle_19" data-name="Rectangle 19" width="6.442" height="6.237" transform="translate(316.464 152.571)" fill="#3f3d56"/>
                    <rect id="Rectangle_20" data-name="Rectangle 20" width="6.442" height="6.237" transform="translate(316.464 143.257)" fill="#3f3d56"/>
                    <rect id="Rectangle_21" data-name="Rectangle 21" width="6.442" height="6.237" transform="translate(316.464 152.571)" fill="#fff"/>
                    <rect id="Rectangle_22" data-name="Rectangle 22" width="6.442" height="6.237" transform="translate(316.464 143.257)" fill="#fff"/>
                    <rect id="Rectangle_23" data-name="Rectangle 23" width="6.442" height="6.237" transform="translate(325.887 152.571)" fill="#3f3d56"/>
                    <rect id="Rectangle_24" data-name="Rectangle 24" width="6.442" height="6.237" transform="translate(325.887 143.257)" fill="#3f3d56"/>
                    <rect id="Rectangle_25" data-name="Rectangle 25" width="6.442" height="6.237" transform="translate(325.887 152.571)" fill="#fff"/>
                    <rect id="Rectangle_26" data-name="Rectangle 26" width="6.442" height="6.237" transform="translate(325.887 143.257)" fill="#fff"/>
                    <circle id="Ellipse_14" data-name="Ellipse 14" cx="24.8" cy="24.8" r="24.8" transform="translate(196.764 0)" fill="#ff6584"/>
                    <rect id="Rectangle_27" data-name="Rectangle 27" width="96.672" height="144.308" transform="translate(132.136 33.625)" fill="#e6e6e6"/>
                    <rect id="Rectangle_28" data-name="Rectangle 28" width="86.348" height="128.896" transform="translate(137.299 41.331)" fill="#fff"/>
                    <path id="Path_43" data-name="Path 43" d="M329.173,211.021l-17.409-20.733H277.536l-20.917,20.374.423.271h-.151V253.31h72.258V210.933Z" transform="translate(-112.103 -83.126)" fill="#3f3d56"/>
                    <path id="Path_44" data-name="Path 44" d="M506.877,271.759l2.349-1.879a2.489,2.489,0,0,0-2.882,1.582,4,4,0,0,0-2.978.184l4.7,1.706A3.557,3.557,0,0,0,506.877,271.759Z" transform="translate(-310.983 -188.262)" fill="#3f3d56"/>
                    <rect id="Rectangle_29" data-name="Rectangle 29" width="3.946" height="13.661" transform="translate(202.65 105.22)" fill="#3f3d56"/>
                    <path id="Path_45" data-name="Path 45" d="M338.375,189.806l-21.46,25.16V253.1h38.574v-42.92Z" transform="translate(-138.443 -82.916)" fill="#703d57"/>
                    <path id="Path_46" data-name="Path 46" d="M447.829,424.565a1.777,1.777,0,0,1,2.029-1.747" transform="translate(-286.722 -255.076)" fill="#e6e6e6"/>
                    <circle id="Ellipse_15" data-name="Ellipse 15" cx="0.968" cy="0.968" r="0.968" transform="translate(159.593 165.672)" fill="#6c63ff"/>
                    <rect id="Rectangle_30" data-name="Rectangle 30" width="0.273" height="1.913" transform="translate(160.403 168.27)" fill="#e6e6e6"/>
                    <path id="Path_47" data-name="Path 47" d="M463.192,424.565a1.777,1.777,0,0,1,2.029-1.747" transform="translate(-293.433 -255.076)" fill="#e6e6e6"/>
                    <circle id="Ellipse_16" data-name="Ellipse 16" cx="0.968" cy="0.968" r="0.968" transform="translate(168.244 165.672)" fill="#6c63ff"/>
                    <rect id="Rectangle_31" data-name="Rectangle 31" width="0.273" height="1.913" transform="translate(169.055 168.27)" fill="#e6e6e6"/>
                    <path id="Path_48" data-name="Path 48" d="M426.807,424.565a1.777,1.777,0,0,1,2.029-1.747" transform="translate(-277.538 -255.076)" fill="#e6e6e6"/>
                    <circle id="Ellipse_17" data-name="Ellipse 17" cx="0.968" cy="0.968" r="0.968" transform="translate(147.753 165.672)" fill="#6c63ff"/>
                    <rect id="Rectangle_32" data-name="Rectangle 32" width="0.273" height="1.913" transform="translate(148.564 168.27)" fill="#e6e6e6"/>
                    <rect id="Rectangle_33" data-name="Rectangle 33" width="7.878" height="8.055" transform="translate(183.432 137.043)" fill="#3f3d56"/>
                    <rect id="Rectangle_34" data-name="Rectangle 34" width="7.878" height="8.055" transform="translate(183.432 148.003)" fill="#3f3d56"/>
                    <rect id="Rectangle_35" data-name="Rectangle 35" width="7.878" height="8.055" transform="translate(183.432 137.043)" fill="#fff"/>
                    <rect id="Rectangle_36" data-name="Rectangle 36" width="7.878" height="8.055" transform="translate(183.432 148.003)" fill="#fff"/>
                    <rect id="Rectangle_37" data-name="Rectangle 37" width="7.878" height="8.055" transform="translate(194.327 137.043)" fill="#3f3d56"/>
                    <rect id="Rectangle_38" data-name="Rectangle 38" width="7.878" height="8.055" transform="translate(194.327 148.003)" fill="#3f3d56"/>
                    <rect id="Rectangle_39" data-name="Rectangle 39" width="7.878" height="8.055" transform="translate(194.327 137.043)" fill="#fff"/>
                    <rect id="Rectangle_40" data-name="Rectangle 40" width="7.878" height="8.055" transform="translate(194.327 148.003)" fill="#fff"/>
                    <rect id="Rectangle_41" data-name="Rectangle 41" width="7.878" height="8.055" transform="translate(205.222 137.043)" fill="#3f3d56"/>
                    <rect id="Rectangle_42" data-name="Rectangle 42" width="7.878" height="8.055" transform="translate(205.222 148.003)" fill="#3f3d56"/>
                    <rect id="Rectangle_43" data-name="Rectangle 43" width="7.878" height="8.055" transform="translate(205.222 137.043)" fill="#fff"/>
                    <rect id="Rectangle_44" data-name="Rectangle 44" width="7.878" height="8.055" transform="translate(205.222 148.003)" fill="#fff"/>
                    <path id="Path_49" data-name="Path 49" d="M757.145,428.713h-360.5s73.193-17.625,181-17.425q.908,0,1.815.005,3.226.012,6.489.044,2.555.027,5.13.068c.742.01,1.484.023,2.229.036l.887.016,2.063.042q1.945.039,3.9.088,1.715.043,3.447.093c.439.01.887.023,1.33.039q3.139.09,6.3.208l1.471.055c.675.023,1.355.052,2.03.078l2.685.112c1.164.049,2.325.1,3.489.156q3.655.167,7.351.369,2.747.144,5.511.312c.783.047,1.57.1,2.358.145q1.809.109,3.626.231l2.316.156c.932.062,1.86.127,2.793.195s1.865.135,2.8.205l2.809.213c.941.073,1.877.145,2.818.223s1.856.151,2.789.228q5.954.495,12,1.078c.771.073,1.55.148,2.325.226q1.2.117,2.407.242,1.678.167,3.369.348,1.448.152,2.9.309c.874.094,1.757.19,2.635.288l.273.031c.97.106,1.943.218,2.913.33s1.952.226,2.925.34,1.956.231,2.934.351,1.96.239,2.942.361l2.3.288,1.144.145,2.47.322,2.963.392c.112.016.22.031.331.044q2.3.312,4.6.634c.207.029.419.06.63.088q1.206.167,2.412.343c.8.117,1.608.231,2.416.351.033,0,.066.008.1.013,1.14.166,2.275.335,3.419.509q.851.125,1.7.257c.779.117,1.554.236,2.333.358l1.533.242c.377.055.754.114,1.131.177q1.193.183,2.391.379l2.225.361a.523.523,0,0,1,.062.01l.53.086c.543.088,1.086.179,1.633.27s1.123.187,1.687.283c.493.083.99.166,1.483.252a.188.188,0,0,1,.041.005c.07.01.141.023.211.036.572.1,1.144.192,1.715.293s1.144.2,1.72.3c.058.008.116.018.174.029q.665.113,1.33.234s0,0,0,0c.253.042.506.088.758.132l2.026.361c.435.078.874.156,1.309.236q1.821.331,3.651.667c1.218.226,2.441.454,3.659.686.733.138,1.463.278,2.2.421q1.032.195,2.064.4C755.085,428.308,756.117,428.508,757.145,428.713Z" transform="translate(-264.364 -250.046)" fill="#e6e6e6"/>
                    <path id="Path_50" data-name="Path 50" d="M396.649,442.231" transform="translate(-264.364 -263.565)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/>
                    <path id="Path_51" data-name="Path 51" d="M756.932,428.828q-1.371-.273-2.747-.539l-.338-.066q-1.03-.2-2.06-.4c-.735-.144-1.463-.283-2.2-.421q-1.828-.347-3.658-.686-1.6-.3-3.2-.585l-.451-.082c-.372-.069-.746-.135-1.117-.2l-.191-.034q-.921-.167-1.841-.328l-.285-.05v.006l-.664-.121-.036-.007-.064-.012q-.611-.111-1.224-.214c-.058-.01-.106-.019-.153-.026l-1.741-.3c-.546-.1-1.089-.188-1.632-.279l-.082-.014c-.072-.013-.136-.025-.2-.035l-1.364-.23-4.081-.678q-1.112-.183-2.223-.361-1.2-.2-2.386-.379c-.38-.063-.753-.122-1.126-.176l-1.541-.243c-.777-.122-1.551-.241-2.329-.358q-.853-.132-1.7-.257c-1.146-.174-2.28-.343-3.419-.509l-.1-.013q-.777-.115-1.55-.225l-.865-.125q-1.2-.175-2.408-.342l-.629-.088q-2.307-.323-4.6-.634c-.087-.01-.181-.023-.278-.037l-8.919-1.155c-.981-.122-1.959-.241-2.941-.361s-1.954-.236-2.931-.35-1.951-.229-2.924-.34-1.942-.223-2.91-.329l-.276-.032c-.876-.1-1.758-.194-2.631-.288q-1.361-.149-2.712-.289l-.187-.02q-1.69-.179-3.366-.348-1.207-.125-2.406-.242c-.775-.078-1.553-.153-2.322-.225-3.942-.381-7.975-.744-11.99-1.077-.949-.079-1.868-.156-2.785-.229-.943-.078-1.878-.15-2.817-.223s-1.871-.144-2.808-.213c-.835-.063-1.674-.123-2.507-.184l-.289-.021c-.931-.068-1.858-.133-2.789-.194l-2.317-.156q-1.812-.12-3.622-.231l-.21-.013-2.147-.132q-2.763-.163-5.507-.311-3.691-.2-7.347-.368c-1.164-.054-2.323-.106-3.487-.156q-1.218-.053-2.436-.1l-.933-.037c-.448-.018-.9-.036-1.342-.051l-1.473-.054q-3.161-.117-6.3-.208c-.445-.015-.89-.029-1.328-.039-1.158-.034-2.305-.065-3.448-.093q-1.956-.047-3.9-.088l-2.949-.057-2.227-.037c-1.72-.028-3.426-.049-5.128-.067q-3.262-.035-6.485-.044h-.165l-1.648,0-1.8,0c-105.54,0-178.341,17.236-179.068,17.411l-.264-1.095c.728-.175,73.672-17.443,179.332-17.443l1.8,0q.824,0,1.651,0h.165q3.227.012,6.493.044c1.7.018,3.413.039,5.133.067q1.111.016,2.229.037l2.953.057q1.944.039,3.9.089,1.717.042,3.45.093c.438.01.888.023,1.334.039q3.135.09,6.3.208l1.471.054c.447.016.9.033,1.346.051l.935.037,2.437.1c1.165.049,2.326.1,3.491.156q3.657.167,7.356.369,2.747.144,5.513.312,1.072.064,2.151.132l.209.013q1.809.109,3.628.231l2.317.156c.933.062,1.862.127,2.8.195l.289.021c.834.06,1.674.121,2.509.184l2.81.213c.942.073,1.879.146,2.821.224q1.377.108,2.762.227c4.047.336,8.085.7,12.03,1.08.77.073,1.55.148,2.326.226.8.078,1.6.159,2.409.242q1.677.167,3.371.348l.186.02q1.355.142,2.716.29c.873.094,1.757.19,2.637.288l.274.031c.968.106,1.943.218,2.914.33s1.952.226,2.926.34,1.958.231,2.936.351,1.961.239,2.943.361l8.937,1.157c.087.012.173.024.261.034,1.545.209,3.079.42,4.617.635l.627.088q1.211.168,2.417.344l.863.125,1.554.226c.014,0,.057.006.1.014q1.7.248,3.415.508.85.124,1.7.257c.777.117,1.553.236,2.333.359l1.533.242c.374.054.755.114,1.136.177q1.185.182,2.389.379,1.113.179,2.226.361a.915.915,0,0,1,.107.02l3.978.659c.422.071.846.142,1.267.215l.1.016c.048.006.124.02.2.034l.073.012c.547.092,1.093.184,1.639.281l1.719.3c.041,0,.1.016.17.028q.57.1,1.138.2l.116-.064.189.117.391.068.448.079,1.844.329.19.034c.373.067.749.134,1.121.2l.45.082q1.6.291,3.2.586c1.219.226,2.442.455,3.661.686q1.1.206,2.2.421,1.029.194,2.065.4l.337.066c.917.178,1.836.357,2.751.54Z" transform="translate(-264.262 -249.609)" fill="#3f3d56"/>
                    <path id="Path_72" data-name="Path 72" d="M42.459,0A42.459,42.459,0,1,1,0,42.459,42.459,42.459,0,0,1,42.459,0Z" transform="translate(337.776 9.336)" fill="#eba054"/>
                    <path id="Path_52" data-name="Path 52" d="M838.139,166.586a42.463,42.463,0,0,1-70.75,44.938,42.463,42.463,0,1,0,70.75-44.938Z" transform="translate(-426.32 -143.15)" opacity="0.2"/>
                    <path id="Path_53" data-name="Path 53" d="M673.675,91.974h.117l2.1,120.379h-4.433Z" transform="translate(-293.324 -40.178)" fill="#3f3d56"/>
                    <rect id="Rectangle_45" data-name="Rectangle 45" width="2.1" height="7.932" transform="translate(387.104 115.508) rotate(62.234)" fill="#3f3d56"/>
                    <path id="Path_54" data-name="Path 54" d="M656.934,429.909s.179-3.758,3.856-3.321" transform="translate(-378.068 -256.715)" fill="#3f3d56"/>
                    <circle id="Ellipse_19" data-name="Ellipse 19" cx="1.84" cy="1.84" r="1.84" transform="translate(275.987 165.938)" fill="#6c63ff"/>
                    <rect id="Rectangle_46" data-name="Rectangle 46" width="0.519" height="3.636" transform="translate(277.527 170.876)" fill="#3f3d56"/>
                    <path id="Path_55" data-name="Path 55" d="M775.907,431.293s.179-3.758,3.856-3.321" transform="translate(-430.041 -257.32)" fill="#3f3d56"/>
                    <circle id="Ellipse_20" data-name="Ellipse 20" cx="1.84" cy="1.84" r="1.84" transform="translate(342.987 166.717)" fill="#6c63ff"/>
                    <rect id="Rectangle_47" data-name="Rectangle 47" width="0.519" height="3.636" transform="translate(344.528 171.655)" fill="#3f3d56"/>
                    <path id="Path_56" data-name="Path 56" d="M579.924,419.764s.179-3.758,3.856-3.321" transform="translate(-344.427 -252.284)" fill="#3f3d56"/>
                    <circle id="Ellipse_21" data-name="Ellipse 21" cx="1.84" cy="1.84" r="1.84" transform="translate(232.619 160.225)" fill="#6c63ff"/>
                    <rect id="Rectangle_48" data-name="Rectangle 48" width="0.519" height="3.636" transform="translate(234.159 165.163)" fill="#3f3d56"/>
                    <path id="Path_57" data-name="Path 57" d="M630.188,411s.179-3.758,3.856-3.321" transform="translate(-366.385 -248.456)" fill="#3f3d56"/>
                    <circle id="Ellipse_22" data-name="Ellipse 22" cx="1.84" cy="1.84" r="1.84" transform="translate(260.925 155.291)" fill="#6c63ff"/>
                    <rect id="Rectangle_49" data-name="Rectangle 49" width="0.519" height="3.636" transform="translate(262.465 160.229)" fill="#3f3d56"/>
                    <path id="Path_58" data-name="Path 58" d="M756.078,423.453s.179-3.758,3.856-3.321" transform="translate(-421.379 -253.895)" fill="#3f3d56"/>
                    <circle id="Ellipse_23" data-name="Ellipse 23" cx="1.84" cy="1.84" r="1.84" transform="translate(331.82 162.302)" fill="#6c63ff"/>
                    <rect id="Rectangle_50" data-name="Rectangle 50" width="0.519" height="3.636" transform="translate(333.361 167.241)" fill="#3f3d56"/>
                    <path id="Path_59" data-name="Path 59" d="M661.837,141.666l2.391-1.912a2.533,2.533,0,0,0-2.932,1.61,4.072,4.072,0,0,0-3.03.187l4.783,1.736A3.619,3.619,0,0,0,661.837,141.666Z" transform="translate(-378.65 -131.417)" fill="#3f3d56"/>
                    <path id="Path_60" data-name="Path 60" d="M726.4,176.251l2.391-1.912a2.533,2.533,0,0,0-2.933,1.61,4.072,4.072,0,0,0-3.03.187l4.783,1.736A3.62,3.62,0,0,0,726.4,176.251Z" transform="translate(-406.852 -146.525)" fill="#3f3d56"/>
                    <path id="Path_61" data-name="Path 61" d="M656.764,205.764l2.391-1.912a2.533,2.533,0,0,0-2.933,1.61,4.072,4.072,0,0,0-3.03.187l4.783,1.736A3.62,3.62,0,0,0,656.764,205.764Z" transform="translate(-376.434 -159.418)" fill="#3f3d56"/>
                    <ellipse id="Ellipse_24" data-name="Ellipse 24" cx="4.655" cy="6.983" rx="4.655" ry="6.983" transform="translate(75.429 172.953) rotate(-17.267)" fill="#2f2e41"/>
                    <path id="Path_62" data-name="Path 62" d="M213.994,388.154s-1.4,27.932,1.4,46.554,6.052,36.312,6.052,36.312,7.914-6.052,12.569-4.19l-8.38-64.71Z" transform="translate(-184.42 -239.941)" fill="#957186"/>
                    <circle id="Ellipse_25" data-name="Ellipse 25" cx="15.363" cy="15.363" r="15.363" transform="translate(43.773 86.995)" fill="#ffb8b8"/>
                    <path id="Path_63" data-name="Path 63" d="M82.179,188.784l-6.517,16.759,9.311,4.19,9.311-16.759Z" transform="translate(-33.053 -82.469)" fill="#ffb8b8"/>
                    <path id="Path_64" data-name="Path 64" d="M223.862,338.682h0s-9.3-6.169-13.487-3.841l-3.724,8.845s-13.035,16.294-7.914,28.4,16.759,26.07,16.759,26.07l1.4,6.518S198.736,428.413,200.6,446.1l-21.88,59.589s12.1,5.121,52.606,6.983,40.5,0,40.5,0-5.121-99.159-20.949-114.987l-2.328-7.449s3.259-20.949-4.19-29.794l-2.517-5.034A35.066,35.066,0,0,0,223.862,338.682Z" transform="translate(-169.162 -216.422)" fill="#2f2e41"/>
                    <path id="Path_65" data-name="Path 65" d="M300.237,518.509l.931,12.569s-1.4,16.294,7.914,13.035,1.862-21.415,1.862-21.415l-1.4-5.586Z" transform="translate(-222.247 -296.276)" fill="#ffb8b8"/>
                    <path id="Path_66" data-name="Path 66" d="M178.124,634.5,173,684.31s-6.517,3.724-3.259,13.966,2.328,15.363,2.328,15.363l3.259-.931,1.4-12.57s5.47,6.983,10.242,8.38c3.314.97,6.74,1.715,8.992-.882a6.074,6.074,0,0,0-2.269-9.4,7.612,7.612,0,0,0-1.136-.429c-3.259-.931-6.517-13.5-6.517-13.5l5.586-22.811L200,636.36Z" transform="translate(-164.843 -347.555)" fill="#2f2e41"/>
                    <path id="Path_67" data-name="Path 67" d="M290.549,634.5l-5.121,49.812s-6.517,3.724-3.259,13.966,2.328,15.363,2.328,15.363l3.259-.931,1.4-12.57s5.47,6.983,10.242,8.38c3.314.97,6.74,1.715,8.992-.882a6.074,6.074,0,0,0-2.269-9.4,7.626,7.626,0,0,0-1.136-.429c-3.259-.931-6.518-13.5-6.518-13.5l5.586-22.811,8.38-25.139Z" transform="translate(-213.956 -347.555)" fill="#2f2e41"/>
                    <path id="Path_68" data-name="Path 68" d="M256.436,357.408s-11.173,6.518-7.914,21.415,26.07,78.676,26.07,78.676a15.523,15.523,0,0,1,15.363-3.724l-20.949-80.538S270.4,355.08,256.436,357.408Z" transform="translate(-199.395 -226.42)" opacity="0.4"/>
                    <path id="Path_69" data-name="Path 69" d="M259.743,352.448s-11.173,6.518-7.914,21.415,26.07,78.676,26.07,78.676a15.523,15.523,0,0,1,15.363-3.724l-20.949-80.538S273.709,350.12,259.743,352.448Z" transform="translate(-200.84 -224.253)" fill="#957186"/>
                    <path id="Path_70" data-name="Path 70" d="M261.075,285.6s2.367-18.418-16.944-12.379c0,0-13.792-2.53-18.314,14.721l-4.58,18.083,2.232-1.215,1.04,2.274,3.617.916,1.548-3.072.749,3.73,29.622,2.953s-13.267-7.846-13.478-21.908l2.527,2.671Z" transform="translate(-187.737 -189.203)" fill="#2f2e41"/>
                    <circle id="Ellipse_26" data-name="Ellipse 26" cx="7.449" cy="7.449" r="7.449" transform="translate(33.066 76.753)" fill="#2f2e41"/>
                    <path id="Path_71" data-name="Path 71" d="M241.545,265.8a7.443,7.443,0,0,0-7.445-6.962c.154-.02.306-.043.463-.053a7.449,7.449,0,1,1,.956,14.866c-.157.01-.311.006-.466.006A7.443,7.443,0,0,0,241.545,265.8Z" transform="translate(-193.355 -183.418)" fill="#2f2e41"/>
                    <ellipse id="Ellipse_27" data-name="Ellipse 27" cx="2.328" cy="3.259" rx="2.328" ry="3.259" transform="translate(56.808 100.495)" fill="#ffb8b8"/>
                </svg>
            </section>
            <div class="bg-svg custom-shape-divider-bottom-1608771653">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </main> 
        <script type = "text/javascript" src = "/JS/allProjectsModal.js"></script>
        <script type = "text/javascript" src = "../../JSClasses/formValidator.js"></script>
        <script type = "text/javascript" src = "register.js"></script>
    <body>
</html>