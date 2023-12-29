<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</head>

<body>

    <h2>Filterable Table</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>
    <input id="myInput" type="text" placeholder="Search..">
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@mail.com</td>
                <td>09421254766</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@greatstuff.com</td>
                <td>07421254766</td>
            </tr>
            <tr>
                <td>Anja</td>
                <td>Ravendale</td>
                <td>a_r@test.com</td>
                <td>08421254766</td>
            </tr>
        </tbody>
    </table>

    <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>

</body>

</html>