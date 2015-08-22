<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script type="text/javascript" src="javascript.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta charset="UTF-8">
        <title>Ajax_PHP_Auto Completa</title>
    </head>
    <body onload="init()">
        <p>Este e um exemplo usando Ajax com PHP:</p>
        <form name="autofillform" action="autocomplete.php">
            <table border="0" cellpadding="5">
                <thead>
                    <tr>
                        <td><strong>Nome:</strong></td>
                        <td><input type="text" size="40" id="complete-field" onkeyup="doCompletion();"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="auto-row" colspan="2">
                            <table class="popupBox" style="display: none"></table>
                        </td>
                        <td class="popupCell">
                            <a class="popupItem" href="autocomplete.php?action=lookup&id=12">Antonin Dvorak</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
