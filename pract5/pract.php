<!DOCTYPE html>
<html lnag="en">
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <form action="" method="get" class="form-calculator">
            <div class="forg-group">
                <label for="name">Value1: </label>
                <input type="text" name="a" id="name" class="form-control">
            </div>

            <div class="forg-group">
                <label for="name">Value2: </label>
                <input type="text" name="b" id="email" class="form-control">
            </div>
            <div class="operation" name="operation">
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="devise">/</option>
                <option value="mult">*</option>
            </div>
            <div>
                <input type="submit" value="Subscibe!" class="btn btn-prinary">
            </div>
            <div>
                <?php if (isset($_GET['a']) && isset($_GET(['b']))):
                    switch($operation):
                        case 'plus':
                            $result = $_GET['a']+$_GET['b'];
                            break;
                        case 'minus':
                            $result = $_GET['a']-$_GET['b'];
                            break;
                        case 'devise':
                            $result = $_GET['a']/$_GET['b'];
                        case 'mult':
                            $result = $_GET['a']*$_GET['b'];

                    ?>
                    
            </div>
        </form>
    </body>
</html>