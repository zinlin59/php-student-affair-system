<?php
include "studentController.php";
?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" src="nrc.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="nrc.js"></script>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Signup Form</h2>
        <p class="text-center">It's quick and easy.</p>

        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="User Name">
        </div>
        <div class="row nrc ">
            <div class="col-3">

                <select id="stateCode" name="stateCode" class="form-select" placeholder="NRC" required value="<?php echo $nrc ?>">
                    <option selected disabled>NRC</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                </select>

            </div>
            <div class="col-3">

                <select id="townCode" name="townCode" class="form-select" required value="<?php echo $name ?>">
                </select>

            </div>
            <div class="col-3">

                <select id="naing" name="naing" class="form-select" placeholder="N">
                    <option value="N">N</option>
                    <option value="P">P</option>
                    <option value="E">E</option>
                </select>
            </div>
            <div class="col-3">
                <div class="wrap-input100 validate-input m-b-23">
                    <input type="text" name="nrcNumber" class="form-control" id="nrcNumber" placeholder="123456">
                </div>
            </div>
        </div></br>


        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="phone" placeholder="phone">
        </div>

        <label>Select Image File:</label>
        <img id="file-ip-1-preview" style="width:100px; height:100px ;">
        <label for="file-ip-1">Upload Image</label>
        <input type="file" id="file-ip-1" name="image" accept="image/*" onchange="showPreview(event);">

        <input type="submit" name="imageUpload" value="Upload">

    </form>
    <a href="view.php"><button>view image</button></a>
</body>
<script>
    document.getElementById('stateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });
        //console.log(selectedNRC);
        //console.log(selectedNRC[1]);

        //var temp = document.getElementById('townCode');

        //console.log(temp.options.length);

        selectedNRC.sort();

        var township = document.getElementById('townCode');

        while (township.options.length > 0) {
            township.remove(0);
        }

        for (var i = 0; i < selectedNRC.length; i++) {
            var opt = document.createElement('option');
            opt.value = selectedNRC[i];
            opt.innerHTML = selectedNRC[i];
            township.appendChild(opt);
        }
    };

    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>

</html>