<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/png" href="resources/img/favicon.png">

    <title>LAZY READER | Dashboard</title>
    <style>
        .filepond--root,
        .filepond--root .filepond--drop-label {
            height: 21rem;
        }
    </style>
</head>

<body style="background: #2d3748; position: relative; overflow-y: hidden">
<div id="particles-js"></div>

<section class="section-login">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class=" heading-secondary ">
            Upload File
        </h2>
        <form action="/login" method="post">
            <div style="height: 500px">
                <input type="file"  name="file" id="file">
            </div>

        </form>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="js/summarize.js"></script>
<script src="js/particles.js"></script>
<script>
    $(document).ready(function(){

        const inputElement = document.querySelector('#file');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            // server: '/api/upload',
            server: {
        url: '/api/upload',
        process: {
            onload: (url) => {
                // select the right value in the response here and return
                console.log(url);
                window.open(
                url,
                '_blank' // <- This is what makes it open in a new window.
                );  
            }
        }}
            
        });
        // pond.on('processfile', (error, file) => {
        //     if (error) {
        //         console.log('Oh no');
        //         return;
        //     }
            
        // });
        particlesJS.load('particles-js', 'particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    })

</script>

</body>
</html>
