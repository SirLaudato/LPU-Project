<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigator</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">


            <div class="nav-left">
            <a href="#catalog" class="nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="white" d="M7,6H23a1,1,0,0,0,0-2H7A1,1,0,0,0,7,6Z"/>
                    <path fill="white" d="M23,11H7a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/>
                    <path fill="white" d="M23,18H7a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"/>
                    <circle fill="white" cx="2" cy="5" r="2"/>
                    <circle fill="white" cx="2" cy="12" r="2"/>
                    <circle fill="white" cx="2" cy="19" r="2"/>
                </svg>
            </a>

            <a href="index.php" class="nav-item active">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="white" d="M24,10a.988.988,0,0,0-.024-.217l-1.3-5.868A4.968,4.968,0,0,0,17.792,0H6.208a4.968,4.968,0,0,0-4.88,3.915L.024,9.783A.988.988,0,0,0,0,10v1a3.984,3.984,0,0,0,1,2.643V19a5.006,5.006,0,0,0,5,5H18a5.006,5.006,0,0,0,5-5V13.643A3.984,3.984,0,0,0,24,11ZM2,10.109l1.28-5.76A2.982,2.982,0,0,1,6.208,2H7V5A1,1,0,0,0,9,5V2h6V5a1,1,0,0,0,2,0V2h.792A2.982,2.982,0,0,1,20.72,4.349L22,10.109V11a2,2,0,0,1-2,2H19a2,2,0,0,1-2-2,1,1,0,0,0-2,0,2,2,0,0,1-2,2H11a2,2,0,0,1-2-2,1,1,0,0,0-2,0,2,2,0,0,1-2,2H4a2,2,0,0,1-2-2ZM18,22H6a3,3,0,0,1-3-3V14.873A3.978,3.978,0,0,0,4,15H5a3.99,3.99,0,0,0,3-1.357A3.99,3.99,0,0,0,11,15h2a3.99,3.99,0,0,0,3-1.357A3.99,3.99,0,0,0,19,15h1a3.978,3.978,0,0,0,1-.127V19A3,3,0,0,1,18,22Z"/>
                </svg>
            </a>

            <a href="#search" class="nav-item search" id="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="white" d="M23.707,22.293l-5.969-5.969a10.016,10.016,0,1,0-1.414,1.414l5.969,5.969a1,1,0,0,0,1.414-1.414ZM10,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,10,18Z"/>
                </svg>
            </a>
            </div>
            
            <div class="nav-right">
            <a href="#support" class="nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <g id="_01_align_center" data-name="01 align center">
                        <path fill="white" d="M21,12.424V11A9,9,0,0,0,3,11v1.424A5,5,0,0,0,5,22H7V12H5V11a7,7,0,0,1,14,0v1H17v8H13v2h6a5,5,0,0,0,2-9.576ZM5,20a3,3,0,0,1,0-6Zm14,0V14a3,3,0,0,1,0,6Z"/>
                    </g>
                </svg>
            </a>

            <a href="account.php" class="nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="white" d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"/>
                    <path fill="white" d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"/>
                </svg>
            </a>

            <a href="#" class="nav-item cart">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="white" d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z"/>
                    <circle fill="white" cx="7" cy="22" r="2"/>
                    <circle fill="white" cx="17" cy="22" r="2"/>
                </svg>
            </a>
            </div>



    </nav>
    <script>
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 0) {
            // User has scrolled down
            navbar.classList.add('shadow');
        } else {
            // User is at the top of the page
            navbar.classList.remove('shadow');
        }
    });
</script>