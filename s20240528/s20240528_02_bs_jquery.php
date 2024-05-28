<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>MOBILE</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>1</td>
                    <td>Amy</td>
                    <td>Bob</td>
                </tr> -->
            </tbody>
        </table>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            url = "./getData.php";
            $.ajax({
                type: "get",
                url: url,
                // data: "data",
                dataType: "json",
                success: function (res) {
                    console.log('res', res);
                    $.each(res, function (indexInArray, valueOfElement) {
                        let tmpText = `<tr>
                    <td>${valueOfElement['id']}</td>
                    <td>${valueOfElement['name']}</td>
                    <td>${valueOfElement['mobile']}</td>
                    </tr>
                    `;
                        $("tbody").append(tmpText);
                    });

                }
            });


        });
        // jquery end
    </script>
</body>

</html>