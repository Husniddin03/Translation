<?php
include 'translation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Translator</title>
</head>

<body>

    <div class="container">
        <form method="post" action="" class="row">
            <div>
                <h3 class="mt-5">Translator</h3>
                <button name="submit" type="submit" class="btn btn-info">Translation</button>
            </div>
            <div class="col-xxl col-12-lg mt-3">
                <select name="from" class="mb-3 form-select" aria-label="Default select example">
                    <option value="uz" selected><?=isset($from)?$languages[$from]:"Uzbek"?></option>
                    <?php foreach($languages as $key=>$item){
                        echo '<option value="'.$key.'">'.$item.'</option>';
                    }?>
                </select>
                <div class="form-floating">
                    <textarea name="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"><?=isset($text)?$text:""?></textarea>
                    <label for="floatingTextarea2">Text</label>
                </div>
            </div>
            <div class="col-xxl col-12-lg mt-3">
                <select name="to" class="mb-3 form-select" aria-label="Default select example">
                    <option value="en" selected><?=isset($to)?$languages[$to]:"English"?></option>
                    <?php foreach($languages as $key=>$item){
                        echo '<option value="'.$key.'">'.$item.'</option>';
                    }?>
                </select>
                <div class="form-floating mb-3">
                    <textarea name="translation" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 200px" disabled><?=isset($translation)?$translation:""?></textarea>
                    <label for="floatingTextarea2Disabled">Text</label>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>