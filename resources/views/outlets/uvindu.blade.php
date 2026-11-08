<!DOCTYPE html>
<html>
    <head>
        <title>SabraEat - Uvindu Food Cabin</title>
        <style>
            body{
                font-family:Arial;
                background-color:black;
                margin:0;
            }

            .navbar{
                backgound-color:white;
                padding:15px 25px;
                display:flex;
                jstify-content:space-between;
                align-items:center;
            }
            .logo{
                color:#172033;
                font-size:22px;
                font-weight:bold;
            }
            .search{
                width:300px;
                padding:12px;
                border:none;
                background-color:#f0f3f7;
                border-radius:20px;
            }
            button{
                background-color:#d4d600;
                border:none;
                padding:12px 25px;
                border-radius:15px;
            }
          .outlet{
            background-color:white;
            border:1px solid #dce4ed;
            border-radius: 15px;
            padding: 12px;
            margin-top:15px;
            display:flex;
            align-items:center;
          }

          .photo{
            width:180px;
            height:90px;
            background-color:#fff8bd;
            border:1px solid #d4d600;
            border-radius:15px;
            text-align:center;
            line-height:90px;
            color:brown;
            font-weight:bold;
            margin-right:20px;
          }

          .details h2{
            font-size:20px;
            margin-bootm:5px;
          }

          .details p{
            font-size:12px;
            color:#64748b;
            margin:5px 0;
          }
          .category{
            display:inline-block;
            background-color:#fof3f7;
            padding:6px 20px;
            border-radius:20px;
            font-size:11px;
            margin-top:5px;
          }
          .active{
            background-color:#d4d600;
          }

          .menu-title{
            font-size:18px;
            margin-top:15px;
          }
          .food-menu{
           display:grid;
           grid-template-columns:repeat(4,1fr);
           gap:12px;
          }
          .food-card{
            background-color:white;
            border:1px solid #dce4ed;
            border-radius:15px;
            padding:12px;
            height:125px;
          }
          .food-image{
            background-color:#fff8bd;
            height:64px;
            border-radius:12px;
            margin-bottom:8px;
          }
          .food-card h4{
            font-size:12px;
            margin:3px 0;
          }
          .food card p{
            font-size:12px;
            font-weight:bold;
            margin:3px 0;
          }
          .add{
            float:right;
            padding:4px 8px;
            border-radius:50%;
          }
        </style>
        </head>
        <body>
            <div class="navbar">
            <div class="logo">
                SabraEat
            </div>
            <input type="text" class="search" placeholder="Search meals in Uvindu Food Cabin...">
            <button>Cart</button>
            </div>
            <div class="outlet">
                <div class="photo">
                    Cabin Photo
                </div>
                <div class="details">
                    <h2>Uvindu Food Cabin</h2>
                <p>
                    <b style="color:#b6b900;">4.6</b>
                    (88 reviews)
                 </p>
                 <p>
                    Near the uni main gate- 5  mis Delivery
                 </p>
                 <span class="category active">Rice & Curry</span>
                 <span class="category">Breakfast</span>
                 <span class="category">Lunch</span>
                 <span class="category">Dinner</span>
               </div>
            </div>
           <h3 class="Menu-title">Rice & Curry Specials</h3>
           <div class="food-menu">
            <div class="food-card">
                <div class="food-image"></div>
                <h4>Chicken Rice & Curry</h4>
                <p>Rs. 400<button class="add">+</button>
</div>>
            <p>Fresh and Delicious Food</p>
</body>

</html>