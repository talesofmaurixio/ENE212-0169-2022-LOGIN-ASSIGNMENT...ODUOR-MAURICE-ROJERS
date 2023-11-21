<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5-Star Hotel Recipes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    <style>
        body{ font: 14px sans-serif; text-align: center;
        
            font-family: "palatino",cursive;
        
        }


        h1 {
            text-align: center;
        }
        .recipe {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;}
    </style>
</head>
<body style="background-color:powderblue;">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>



    <div>
    <header>
          <h1 style="color:rgb(20, 20, 20);text-decoration: underline;"></font>UGALI AND CHOPPPED CHUNKS OF LIVER </h1> 

        </header>  
          <h2>Ingredients</h2>
          <ul>
           <li> 1/2 kg of beef liver cubed.</li>
           <li>  1 tablespoon of all purpose flour</li>
           <li> 2 large onions</li>
           <li> 2 to matoes chopped</li>
           <li> 1 green bell pepper hoho</li>
           <li> 2 tablespoons of tomato paste</li>
           <li>1/2 tablespoon of sugar</li>
           <li> 4 cloves of garlic</li>
           <li> 1/2 teaspoon fresh ginger</li>
           <li> 2 tablespoon of curry powder</li>
           <li>  1/2 teaspoon turmeric</li>
           <li> 2 chili beef cubes</li>
           <li> 2 tablespoons of vinegar/ fresh lemon juice</li>
           <li> 1 cup of water</li>
           <li> Salt</li>
           <li> Black pepper</li>
           <li> Dhania/ fresh coriander leaves</li>
           <li> 1 bunch of spring onions for garnish</li>
           <li> Chili flakes according to preference</li>
          </ul>

            <h3>Instructions for liver</h3>
            <ol>
              <li>Step 1:Dust the liver with the tablespoon of all purpose flour. Add in the fresh lemon juice/vinegar.
                "This will coat the liver, make it slightly crunchy and help thicken the wet fry.
                "The lemon/vinegar This helps get rid of the bloody smell. </li>


              <li>Step 2:  2 tablespoons of vegetable oil, cook the liver over high heat for about 5-8 minutes until it turns brown.
                "At this point the liver is not cooked but the caramelized bits will add lots of flavor .
              </li>

              <li>Step 3: Remove the cooked liver and set aside.
              </li>

              <li>Step 4:Add about 1 tablespoon of vegetable oil to the
                pan that cooked the liver and cook until the onions soften and turn translucent.  </li>

              <li>Step 5:Add in the ginger and garlic 
                and cook this for about 2 minutes until they’re fragrant.</li>

              <li>Step 6: Next in, add in the spices. Add in the curry powder, black pepper and turmeric. Let the spices toast for a minute to bring out their best flavors.
                Add in the chopped tomatoes, green bell pepper(hoho) and tomato paste</li>

              <li>Step 7: Add the liver back in once the tomatoes are soft and cooked through.
                    Stir the liver into the mixture until everything is well mixed up.
                     Add in 1 cup of water and the chili beef cubes.
                     Cover and let it simmer for about 20-30 minutes until thick. 
                    </li>
             </ol>

             <h4>Instructions for ugali </h4>
                <ol>
             <li>set water to boil in a pan  </li>
             <li>  once the water boils add the maize flour</li>
             <li>  stir and pound the ugali with a cooking stick </li>
             <li>  continue pounding it  then cover it and let it cook on slow heat
              </li>
             <li> remove the ugali from heat and serve while still hot</li>
                </ol>

                <img src="recipe/img/IMG_0212.jpg" alt="ugali liver" style="width: 70%; height:auto;">

        
  


    </div>
</body>
</html>