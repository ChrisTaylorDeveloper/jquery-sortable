<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CTD | Sortable demo</title>
        <link rel="icon" type="image/x-icon" href="/favicon.png">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <script src="/main.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type = "text/javascript" language = "javascript">
            $(document).ready(function() {
                $("p").html("<i>Assume we can work alongside an old version of jQuery???</i>");
            });
        </script>
        <button>Save order</button>
        <ul id="sortable">
            <li id="foo_1" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
            <li id="foo_2" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
            <li id="foo_3" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
            <li id="foo_4" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
        </ul>
        <p></p>
    </body>
</html>
