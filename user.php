<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
  
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.jpg" width="100" height="100" alt="Bakery Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
  
    <section class="categories">
        <div class="container">
    
             
            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/cakeheader.jpg"  height="200" alt="Cakes" class="img">

                <h3  style="background-color:powderblue; text-align: center">Cakes</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/donutheader21.jpg" height="200" width="1107" alt="Donuts" class="img">
            

                <h3  style="background-color:powderblue;text-align: center">Donuts</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/breads.jpg" width= "1107" height = "200" alt="Breads" class="img">
                

                <h3  style="background-color:powderblue;text-align: center">Breads & Cookies</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
        
        </div>

        <p class="text-center">
            <a href="#">See All</a>
        </p>
    </section>

    <section class="contact">
        <div class="container text-center">
            <ul>
            <h4>Contact Us</h4>
                <li>
                
                    <a href="#"><img src="images/fb.png "width="30" height="30"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/ig.png" width="30" height="30"/></a>
                </li>
                <li>
                    <a href="#"><img src="images/twt.jpg" width="30" height="30"/></a>
                </li>
            </ul>
        </div>
    </section>


</body>
</html>