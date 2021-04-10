<?php include_once('headNoNav.php');?> 
        <title>Ultimate Login</title>
        <base href = "/portfolio/ultimLogin/login/">
        <link rel = "stylesheet" href = "login.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <a href ="/#portfolio-" class = "nav-logo" id = "idLogo" href = "/#portfolio-">Ultim Login</a>
                <ul class = "nav-menu" id = "navMenu">
                    <li class = "nav-link"><a href = "/ultimLogin/register">Register</a></li>
                    <li class = "nav-link"><a href = "/#portfolio-">Portfolio</a></li>
                    <li class = "nav-link"><a class = "code-btn" href = "https://github.com/dvereen1/UltimateLogin">View Code</a></li>
                </ul>
                <div class = "nav-toggle" id = "navToggle">
                    <i class = "fas fa-bars"></i>
                </div>
            </nav>
        </header>
        <main class = "djv-container"> 
            <section class = "form-container">
               <form action = "ultimLoginLogic2.php"  method = "post" name ="login-form" id= "login-form"   accept-charset = "utf-8" enctype = "multipart/form-data" novalidate>
                    <h1>LOGIN</h1>
                    <div class = "input-ctrl">
                        <input class = "input-lo" required name = "username" id = "username" placeholder = "Username" type = "text" onfocusout = "validator.notEmpty(username)">
                        <small class ="indicator"></small>
                    </div>
                    <div class = "input-ctrl">
                        <input class = "input-lo" required name = "password" id = "password" placeholder = "Password" type = "password" onfocusout = "validator.notEmpty(password)">
                        <small class ="indicator"></small>
                    </div>
                    <button type = "submit" name = "login-btn" id = "login-btn" class = "login-btn">Login</button>
                </form>
            </section> 
            <section class = "register-graphic">
                <div class = "reg-option">
                        <h3>Uninitiated?</h3>
                        <p>Create an account to get started. Once inducted stay connected with presentations of the latest info.</p>
                        <a class = "reg-btn" href = "/ultimLogin/register">Register</a>
                </div>

                <svg id="Group_7" class = "register-graphic-svg" data-name="Group 7" xmlns="http://www.w3.org/2000/svg" width="535.477" height="372.559" viewBox="0 0 535.477 372.559">
                    <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="106.69" cy="8.103" rx="106.69" ry="8.103" transform="translate(0 356.353)" fill="#39a069"/>
                    <path id="Path_10" data-name="Path 10" d="M324.272,269.237c18.567-7.9,41.693-2.894,64.278.579.21-4.205,2.758-9.324.089-12.258-3.242-3.565-2.944-7.31-.993-11.077,4.989-9.633-2.159-19.882-9.375-28.4a15.983,15.983,0,0,0-13.34-5.6l-13.368.955a16.01,16.01,0,0,0-14.216,11.443h0c-3.192,4.341-4.9,8.671-3.825,12.977-4.781,3.267-5.585,7.212-3.436,11.658a6.7,6.7,0,0,1-.083,8.174,37.742,37.742,0,0,0-5.611,11.146Z" transform="translate(-242.72 -186.573)" fill="#2f2e41"/>
                    <path id="Path_11" data-name="Path 11" d="M789.613,639.245H411.189A12.689,12.689,0,0,1,398.5,626.556h0q205.768-23.914,403.8,0h0A12.689,12.689,0,0,1,789.613,639.245Z" transform="translate(-266.825 -317.173)" fill="#2f2e41"/>
                    <path id="Path_12" data-name="Path 12" d="M802.3,503.827l-403.8-.746,46.8-78.745.224-.373V250.417a16.039,16.039,0,0,1,16.041-16.04H737a16.039,16.039,0,0,1,16.04,16.041V425.156Z" transform="translate(-266.826 -193.698)" fill="#3f3d56"/>
                    <path id="Path_13" data-name="Path 13" d="M488.838,250.957a5.231,5.231,0,0,0-5.225,5.225V414.418a5.231,5.231,0,0,0,5.225,5.225H767.244a5.231,5.231,0,0,0,5.225-5.225V256.182a5.231,5.231,0,0,0-5.225-5.225Z" transform="translate(-294.465 -199.082)" fill="#fff"/>
                    <path id="Path_14" data-name="Path 14" d="M485.066,531.718a2.245,2.245,0,0,0-2.034,1.3l-14.42,31.349a2.239,2.239,0,0,0,2.034,3.175H773.9a2.239,2.239,0,0,0,2-3.241l-15.674-31.349a2.228,2.228,0,0,0-2-1.238Z" transform="translate(-289.527 -290.258)" fill="#2f2e41"/>
                    <circle id="Ellipse_8" data-name="Ellipse 8" cx="3.359" cy="3.359" r="3.359" transform="translate(329.097 42.545)" fill="#fff"/>
                    <path id="Path_15" data-name="Path 15" d="M648.883,593.619a2.243,2.243,0,0,0-2.162,1.657L643.1,608.71a2.239,2.239,0,0,0,2.162,2.822h68.791a2.239,2.239,0,0,0,2.115-2.972l-4.65-13.435a2.24,2.24,0,0,0-2.116-1.507Z" transform="translate(-346.235 -310.36)" fill="#2f2e41"/>
                    <path id="Path_16" data-name="Path 16" d="M572.046,337.135v2.985H264.306l.232-.373v-2.613Z" transform="translate(-85.832 -109.483)" fill="#2f2e41"/>
                    <circle id="Ellipse_9" data-name="Ellipse 9" cx="52.248" cy="52.248" r="52.248" transform="translate(425.383 0)" fill="#54eb9a"/>
                    <path id="Path_17" data-name="Path 17" d="M920.634,269.788H877.343a2.989,2.989,0,0,1-2.986-2.986V240.678a2.989,2.989,0,0,1,2.986-2.986h43.291a2.989,2.989,0,0,1,2.986,2.986V266.8A2.988,2.988,0,0,1,920.634,269.788Zm-43.291-29.11V266.8h43.293l0-26.124Z" transform="translate(-421.358 -194.775)" fill="#fff"/>
                    <path id="Path_18" data-name="Path 18" d="M917.808,229.191h-26.87V217.249c0-8.65,5.65-14.928,13.435-14.928s13.435,6.278,13.435,14.928Zm-23.885-2.986h20.9v-8.957c0-7.031-4.3-11.942-10.45-11.942s-10.45,4.911-10.45,11.942Z" transform="translate(-426.743 -183.288)" fill="#fff"/>
                    <circle id="Ellipse_10" data-name="Ellipse 10" cx="2.986" cy="2.986" r="2.986" transform="translate(474.645 55.234)" fill="#fff"/>
                    <path id="Path_19" data-name="Path 19" d="M751.427,391.783H536.264a3.989,3.989,0,0,1-3.984-3.984V334.426a3.989,3.989,0,0,1,3.984-3.985H751.427a3.989,3.989,0,0,1,3.984,3.985V387.8A3.989,3.989,0,0,1,751.427,391.783ZM536.264,332.035a2.393,2.393,0,0,0-2.391,2.391V387.8a2.393,2.393,0,0,0,2.391,2.391H751.427a2.393,2.393,0,0,0,2.391-2.391V334.426a2.393,2.393,0,0,0-2.391-2.391Z" transform="translate(-310.27 -224.894)" fill="#e6e6e6"/>
                    <circle id="Ellipse_11" data-name="Ellipse 11" cx="16.231" cy="16.231" r="16.231" transform="translate(243.195 117.939)" fill="#e6e6e6"/>
                    <path id="Path_20" data-name="Path 20" d="M641.9,356.805a2.705,2.705,0,0,0,0,5.41H769.429a2.705,2.705,0,0,0,0-5.41Z" transform="translate(-344.991 -233.456)" fill="#e6e6e6"/>
                    <path id="Path_21" data-name="Path 21" d="M641.9,380.842a2.705,2.705,0,0,0,0,5.41h54.875a2.705,2.705,0,1,0,0-5.41Z" transform="translate(-344.991 -241.262)" fill="#e6e6e6"/>
                    <path id="Path_22" data-name="Path 22" d="M447.651,371.31l-39.775,21.146-.5-17.622a117.794,117.794,0,0,0,36.754-12.083l4.16-10.277a6.967,6.967,0,0,1,11.842-1.808h0a6.967,6.967,0,0,1-.613,9.5Z" transform="translate(-269.707 -230.635)" fill="#ffb8b8"/>
                    <path id="Path_23" data-name="Path 23" d="M322.966,550.443h0a7.815,7.815,0,0,1,.992-6.322l8.737-13.409a15.269,15.269,0,0,1,19.809-5.226h0c-3.672,6.25-3.16,11.734,1.268,16.5a79.429,79.429,0,0,0-18.864,12.86,7.815,7.815,0,0,1-11.942-4.4Z" transform="translate(-242.207 -287.679)" fill="#2f2e41"/>
                    <path id="Path_24" data-name="Path 24" d="M434.451,509.053h0a14.993,14.993,0,0,1-12.743,7.279l-58.045.44-2.517-14.6,25.677-7.552L365.173,478l23.663-27.691,42.98,40.059A14.993,14.993,0,0,1,434.451,509.053Z" transform="translate(-254.695 -263.822)" fill="#2f2e41"/>
                    <path id="Path_25" data-name="Path 25" d="M339,589.537H325.4c-12.205-83.662-24.629-167.559,12.083-198.873l43.3,7.049-5.538,36.754-24.167,27.691Z" transform="translate(-239.093 -244.451)" fill="#2f2e41"/>
                    <path id="Path_26" data-name="Path 26" d="M355.674,701.678h0a7.815,7.815,0,0,1-6.323-.992l-14.76-1.984a15.269,15.269,0,0,1-5.227-19.808h0c6.251,3.672,11.734,3.159,16.5-1.269,3.367,6.8,8.914,6.383,14.212,12.111a7.815,7.815,0,0,1-4.4,11.943Z" transform="translate(-243.819 -337.641)" fill="#2f2e41"/>
                    <path id="Path_27" data-name="Path 27" d="M387.065,291.194l-25.174-6.042c4.181-8.558,4.525-18.081,2.517-28.195l17.118-.5C382.063,269.031,383.686,280.781,387.065,291.194Z" transform="translate(-254.937 -200.867)" fill="#ffb8b8"/>
                    <path id="Path_28" data-name="Path 28" d="M386.75,379.942c-18.326,12.488-31.274.427-41.155-18.18,1.373-11.386-.85-25.012-4.968-39.817a27.1,27.1,0,0,1,16.548-32.683h0l21.649,9.063c18.383,14.984,22,31.215,15.1,48.334Z" transform="translate(-247.703 -211.521)" fill="#54eb9a"/>
                    <path id="Path_29" data-name="Path 29" d="M309.595,316.614l-20.139,10.573L325.2,348.333l4.974,12.269a6.507,6.507,0,0,1-3.909,8.6h0a6.507,6.507,0,0,1-8.617-5.77l-.5-8.551-45.434-14.993a10.623,10.623,0,0,1-6.667-6.49h0a10.624,10.624,0,0,1,3.986-12.359l36.534-25.064Z" transform="translate(-223.283 -213.7)" fill="#ffb8b8"/>
                    <path id="Path_30" data-name="Path 30" d="M348.07,316.072c-8.4-3.681-16.037.318-25.677,3.524l-1.51-26.684c9.573-5.1,18.7-6.478,27.188-2.517Z" transform="translate(-241.62 -211.144)" fill="#39a069"/>
                    <circle id="Ellipse_12" data-name="Ellipse 12" cx="16.072" cy="16.072" r="16.072" transform="translate(100.426 36.66)" fill="#ffb8b8"/>
                    <path id="Path_31" data-name="Path 31" d="M387.288,242.288c-15.913,1.559-28.039-1.044-35.788-8.454v-5.968h34.438Z" transform="translate(-251.562 -191.583)" fill="#2f2e41"/>
                </svg>

            </section>
            <div class="bg-svg custom-shape-divider-bottom-1608771653">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </main>
        <!--
            width="1208.819" height="1424.462" viewBox="0 0 1208.819 1424.462"
        -->
        <svg class = "login-svg" xmlns="http://www.w3.org/2000/svg" width="1000" height="1100" viewBox="0 0 1208.819 1424.462">
            <path id="Path_1" data-name="Path 1" d="M912.3,192.6c-67.338,108.762-112.371,92.373-258.811,225.856s-73.1,327.044,0,468.568,0,317.711,0,317.711H-242.334V125.139L965.18-219.723S979.641,83.842,912.3,192.6Z" transform="translate(242.334 219.723)" fill="#eba054"/>
        </svg>
        <script type = "text/javascript" src ="../../JSClasses/formValidator.js"></script>
        <script type = "text/javascript" src = "login.js"></script>
    </body>
</html>