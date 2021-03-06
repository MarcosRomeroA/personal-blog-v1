<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Cheatsheet Concept</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Bulma Version 0.9.0-->
    <link rel='stylesheet' href='https://unpkg.com/bulma@0.9.0/css/bulma.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <link rel='stylesheet' href='https://kingsora.github.io/OverlayScrollbars/etc/os-theme-thin-dark.css'>
    <link rel='stylesheet' href="https://bulmatemplates.github.io/bulma-templates/css/prism.css">
    <link rel="stylesheet" href="https://bulmatemplates.github.io/bulma-templates/css/cheatsheet.css">
    <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
</head>
<body>

@yield('content')

<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/prism.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js'></script>

<script>
    window.addEventListener('resize', () => {
        const divs = document.querySelectorAll(".menu-list");
        if (window.innerWidth < 768){
            divs.forEach(div => div.classList.add("tags"));
        }
        else {
            divs.forEach(div => div.classList.remove("tags"));
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        //The first argument are the elements to which the plugin shall be initialized
        //The second argument has to be at least a empty object or a object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
    });

</script>
</body>
</html>
