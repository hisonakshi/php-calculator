<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8" />
  <title>PHP Calculator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
  <div class="card">

    <!-- LEFT SIDE -->
    <div class="left">
      <div class="title">
        <div class="top">PHP</div>
        <div class="bottom">CALCULATOR</div>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="right">
      <form style="display:contents" method="POST">

        <input type="number" name="num1" placeholder="Enter first number"  class="field" required/>
        <input type="number" name="num2" placeholder="Enter second number" class="field" required/>

        <select name="operation" class="select" required>
          <option value="add"> ADD </option>
          <option value="sub"> SUB </option>
          <option value="mult"> MULT </option>
          <option value="div"> DIV </option>
        </select>

        <button class="btn" type="submit" name="submit">SUMBIT</button>

        <div class="showdata">
          <p>
            <?php
              if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                switch($operation){
                  case "add": $sum = $num1 + $num2;
                    echo " the sum of two number is {$sum}";
                    break;        
                  case "sub": $sub = $num1 - $num2;
                    echo " the difference of two number is {$sub}";
                    break;
                  case "mult": $mult = $num1 * $num2;
                    echo " the multiplication of two number is {$mult}";
                    break;
                  case "div": $div = $num1 / $num2;
                    echo " the division of two number is {$div}";
                    break;
                 default : echo "Sorry not exist";
                }

              }
            ?>
          </p>
        </div>

      </form>
    </div>

  </div>
</body>
</html>
