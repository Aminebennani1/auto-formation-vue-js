<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Vue</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
<body>
    <div id="app">
    <table-component></table-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
