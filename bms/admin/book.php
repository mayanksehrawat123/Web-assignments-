<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <style>
        .title{
            border: 1px solid #cdcdcd;
            margin: -9px -8px;
            padding: 0px 0px;
             background-color: #cdcdcd;
        }
        h3{
            text-align: center;
            margin: 16px 6px;
            padding: 0px 0px;
        }
        .buttons{
            margin: 0px 0px;
            padding: 0px 0px;
        }
        .one{
            
            display: inline-block;
            border: 1px solid #efefef;
            width: 7%;
            margin-top: 50px;
           margin-left: 300px;
           border-radius:10px ;
            background-color: rgb(26, 148, 26);
            color: white;
        }
         .text{
           display: block;
            width: 20%;
            margin: 0px aut;
            border-radius: 4px;
            font-size: 20px;
            margin-left: 290px;
         }
         .two{
            float: right;
            display: inline-block;
            border: 1px solid #efefef;
            width: 7%;
            margin-top: -80px;
           margin-right: 450px;
           border-radius:10px ;
            background-color:#cdcdcd;
            color: rgb(0, 0, 0);
        }
         .text1{
           display: block;
           float: right;
            width: 20%;
            margin-top: -24px;
            border-radius: 4px;
            font-size: 20px;
            margin-right: 290px;
         }
         .select_category{
            padding: 0% 300px;
            
         }
         .data1{
            margin-top: 40px;
         }
         .data2{
            float: right;
            margin-right: 10px;
            margin-top: -37px;
         }
         .payment{
            padding: 0px 250px;
         }
         .data3
         {
            margin-top: 10px;
            font-size: 15px;
         }
         .data4{
            text-align: center;
            margin-top: -20px;
            font-size: 15px;
         }
         .data5{
            float: right;
            margin-top: -20px;
            margin-right: 10px;
         }
         .next{
            float: right;
            margin-right: 20px;
            margin-top: 10px;
            padding: 4px 13px;
            text-decoration:none;
           
         }
         .next1{
            border: 1px solid white;
            border-radius: 5px;
            background-color: rgb(37, 170, 37);
            color: white;
            
         }
         a{
            text-decoration: none;
            color: white;
         }
    </style>
</head>

<body>
    <div class="container1">
        <div class="title">
            <h2>
                Add Product
            </h2>
        </div>
        <div class="one">
            <h3>1</h3>
        </div>
        <div class="text">
            select category
        </div>
        <div class="two">
            <h3>2</h3>
        </div>
        <div class="text1">
            Add Book Details
          
        </div>
                
            </div>
        </div>
        <div class="data1">
            <label for="category">
               select Category
            </label>
            <br>
            <input type="text" class="select_category" name="category" id="category">
        </div>
        <div class="data2">
            <label for="payment">
                Payment Allowed
            </label>
            <br>
            <select class="payment" name="payment" id="payment" >
                <option value="1">
                    UPI
                </option>
                <option value="2">
                    Cash
                </option>
                <option value="3" selected>
                    Both
                </option>
            </select>
        </div>
        <div class="data3">
            <label for="return">
                Book Return
            </label>
            <input type="checkbox" name="return" id="return">
        </div>
        <div class="data4">
            <label for="shipping">
                Shipped by SDF
            </label>
            
            <input type="radio" name="shipping" id="shipping">
        </div>
            <div class="data5">
            <label for="shipping">
                Self Ship
            </label>
            <input type="radio" name="shipping" id="shipping">
              </div>
        <div class="next">
            <button class="next1">
           <a href="http://localhost/bms/admin/book_manage.php">next</a>
            </button>
        </div>
    </div>
</body>
</html>