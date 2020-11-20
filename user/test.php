<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
</head>

<body>
    <div tabindex="0" class="btn btn-secondary" data-toggle="popover" data-trigger="focus" title="Popup title"
        data-html="true" data-content="<div class='red'> Popup content </div>">Trigger</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
</script>

</html>