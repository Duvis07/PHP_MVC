<?php
?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Doc Type</th>
            <th scope="col">Document</th>
            <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($clients as $value) {
                    echo "<tr>";
                    echo "<th scope='row'>".$value["id"]."</th>";
                    echo "<td>".$value["doctype"]."</td>";
                    echo "<td>".$value["document"]."</td>";
                    echo "<td>".$value["names"]."</td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
        </table>