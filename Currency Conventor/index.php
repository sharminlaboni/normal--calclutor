<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Conventor</title>
    <style>
        body{
            padding: 0px;
            max-width: 0 px;
        }
        h1{
            background-color: lawngreen;
            color:white;
            text-align:center;
            font-size:35px;
            padding:10 px;
        }
        p{
            background-color:blue;
            color:white;
            text-align:center;
            font-size:45px;
        }
        div{
            background-color: aqua;
            width:400px;
            margin-left:500px;
            margin-top: 100 px;
            padding-bottom: 20 px;
        }
        label{
            font-weight:bold;
            font-size:28px;
        }
        form{
            margin:left;

        }
    </style>
</head>
<body>
    <h1>Currency Conventor</h1>
    
    <div>
        <p>Currency Conventor</p>
        <form action="index.php" method="post">
<label for="">Select Your country currencey conventor</label>
<select name="currency">
    <option selected hidden>select your currencey</option>
<option value="US dollar to taka">US dollar to taka</option>
<option value="taka  to US dollar">taka  to US dollar</option>
<option value="euro to taka">euro to taka</option>
<option value="taka to euro">taka to euro</option>
<option value="pound to taka">pound to taka</option>
<option value="taka to pound">taka to pound</option>
</select><br><br>
<label for="">Enter Amount</label>
<input type="number" name="amount" placeholder="Enter your amount"><br><br>
<h2>
    <?php
     if(isset($_POST['submit'])){
        $currency = $_POST['currency'];
        $amount =$_POST['amount'];
        if($currency =='US dollar to taka'){
            echo $amount ."US dollar"."=  " ;
            echo $amount*102.50;
            echo "taka";

        }
        if($currency =='taka  to US dollar'){
            echo $amount ."taka"."=  " ;
            echo $amount / 102.50;
            echo "US dollar";
     }
     if($currency =='euro to taka'){
        echo $amount ."euro"."=  " ;
        echo $amount *99.93;
        echo "taka";
 }
 if($currency =='taka to euro'){
    echo $amount ."taka"."=  " ;
    echo $amount / 99.93;
    echo "euro";
}
if($currency =='pound to taka'){
    echo $amount ."pound"."=  " ;
    echo $amount*114.55;
    echo "taka";

}
if($currency =='taka  to pound'){
    echo $amount ."taka"."=  " ;
    echo $amount / 114.55;
    echo "pound";
}

    }
    
    ?>
</h2>
<input type="submit" name="submit" value="convert">

        </form>
</div>
</body>
</html>