<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto typing</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="main-auto-typing">

        <div class="main-t-text">
            <div class="border-area">
                <strong>We Provide You <span class="typingTxt"></span></strong>
            </div>
        </div>

    </section>

    <script src="typed.js"></script>

    <script>
        var typed = new Typed('.typingTxt', {
            strings: ['Professional', 'Modern', 'Fully Functional', 'Website'],
            typeSpeed: 100,
            backSpeed: 70,
            loop: true,
        });
    </script>

</body>

</html>