<?php

class ToyView {
    public function display($toys){
        ?>
        <!DOCTYPE HTML">
        <html>
            <head>
                <title>ToyMVC List All Toys</title>
                <link type="text/css" rel="stylesheet" href="includes/style.css" />
            </head>
            <body>
                <h2>Toys in our inventory</h2>
                <table border="0">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                        <?php
                            foreach($toys as $toy){
                                echo "<tr>";
                                echo "<td>", $toy->getId(), "</td>";
                                echo "<td>", $toy->getName(), "</td>";
                                echo "<td>", $toy->getDescription(), "</td>";
                                echo "<td>", $toy->getPrice(), "</td>";
                                echo "<tr>";
                            }
                        ?>
                </table>
            </body>
        </html>

<?php
    } //end display method
} //end of class