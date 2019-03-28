<?php include'db.php';
include 'intodb.php'; ?>

<!doctype html>
<html lang=''>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
   body{
    background-color:   #E0E0E0;
   }
.button {
  background-color:#1b9bff;
  border: none;
  color: white;
  width:100%;
  padding: 12px 0px;
  text-align: center;
  text-decoration: none;
  
  font-size: 16px;

  cursor: pointer;


}
.button:hover {
  background-color: 0082e7;
  color: black;
}
  table {
   border-collapse: collapse;
   width: 100%;
   color: black;
   font-family:'Oxygen Mono', Tahoma, Arial, sans-serif;
   font-size: 17px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child {background-color: #f2f2f2}
</style>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Menu</title>
</head>
<body>
  <div class="btn-group">
    <a href="/sp/INT/window1.php"><button>Back</button></a>
<a href="window3.php"><button>K.O.T</button></a>
<a href="window4.php"><button>pay and close</button></a>
</div>
	<form action="index.php" method="post">

<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Main Menu</span></a></li>
   <li class='active has-sub'><a href='#'><span>Soup</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="1">Classic Minostrine</button></li>
                <li><button class="button" name="3">Leek Potato And Rocket Soup</button></li>
                 <li><button class="button" name="5">Cream Of Broccoli Soup</button></li>
                  <li><button class="button" name="7">Cream of Mushrrom Soup</button></li>
                   <li><button class="button" name="11">Tomato Soup</button></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
               <li><button class="button" name="2">Classic Minostrine</button></li>
                <li><button class="button" name="4">Leek Potato And Rocket Soup</button></li>
                 <li><button class="button" name="6">Cream Of Broccoli Soup</button></li>
                  <li><button class="button" name="8">Cream of Mushrrom Soup</button></li>
                    <li><button class="button" name="9">Pepper & Chicken Soup</button></li>
                     <li><button class="button" name="10">Amalfi-style Fish Soup</button></li>
                     

            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Salads</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="13">Caesar Salad</button></li>
                <li><button class="button" name="17">Garden Green Salad</button></li>
                 <li><button class="button" name="18">Pasta Salad With Olives, Orange Zest & fresh herbs</button></li>
                  <li><button class="button" name="20">Rolled Aubergines stuffed with Raisins, Capers & cashew nuts</button></li>
               
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="12">Go Italia Chicken Salad</button></li>
                 <li><button class="button" name="14">Caesar Salad/button></li>
                  <li><button class="button" name="15">Insalata Fagiolo</button></li>

                   <li><button class="button" name="16">Insalata Speziato Salsicce</button></li>
                    <li><button class="button" name="19">Pasta Salad with Olives, Orange Zest & fresh herbs</button></li>
                    <li><button class="button" name="21">Rolled Aubergines stuffed with Raisins, Capers & cashew nuts</button></li>

            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Starters</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
                <li><button class="button" name="22">Garlic Bread Plain</button></li>
                 <li><button class="button" name="23">Garlic Bread With Cheese</button></li>
                  <li><button class="button" name="24">Garlic Bread With Corn Chilli Toast</button></li>
                   <li><button class="button" name="25">Garlic Bread Spicy Supreme</button></li>
                    <li><button class="button" name="26">Garlic Bread Tomato Bruschette</button></li>
                     <li><button class="button" name="27">Caprese Garlic Bread</button></li>
                      <li><button class="button" name="28">Antipasti Platter Veg</button></li>
                      <li><button class="button" name="29">Pesto-Cheesy Garlic Bread</button></li>
                      <li><button class="button" name="30">Garlic Bread With Creamy Garlic Mushrooms</button></li>
                      <li><button class="button" name="31">Clazone</button></li>
                      <li><button class="button" name="32">Fries</button></li>
                      <li><button class="button" name="33">Spicy Fries</button></li>
                      <li><button class="button" name="34">Wedges-Masala</button></li>
                      <li><button class="button" name="35">Paneer Skewers</button></li>
                      <li><button class="button" name="36">Golden Babycorn Balls</button></li>
                      <li><button class="button" name="37">Babycorn Balls</button></li>
                      <li><button class="button" name="38">Vegetable Cheese Balls</button></li>
                      <li><button class="button" name="39">Veg Nuggets</button></li>
                      <li><button class="button" name="40">Paneer Fritter</button></li>
                      <li><button class="button" name="41">Veg Fritter</button></li>
                      <li><button class="button" name="42">Rosemary Potato</button></li>
                      <li><button class="button" name="43">Parmesan Cheese Baby Potato</button></li>




            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="44">Barbeque Chicken Wings</button></li>
                 <li><button class="button" name="45">Antipasti Platter</button></li>
                  <li><button class="button" name="46">Fish Fingers</button></li>
                  <li><button class="button" name="47">Crispy Cajun Chicken Wings</button></li>
                   <li><button class="button" name="48">Chicken Nuggets</button></li>
                   <li><button class="button" name="49">Chicken Wings</button></li>
                   <li><button class="button" name="50">Devil Chicken Wings</button></li>
                   <li><button class="button" name="51">Hot Basil Chicken Cups</button></li>
                   <li><button class="button" name="52">Crumb Fried Chicken</button></li>
                   <li><button class="button" name="53">Spicy Chicken Wings</button></li>


            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Burgers</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="54">Aloo Tikki Burger</button></li>
                <li><button class="button" name="55">Herb Chilli Potato Burger</button></li>
                 <li><button class="button" name="56">Cheesy Bean Burgers With Cucumber</button></li>
                  <li><button class="button" name="57">Italian Style Cheese Burgers With Pickle Veg</button></li>
                   <li><button class="button" name="58">Go Italia Special Burger</button></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="59">Spicy Chicken Burgers With Herbed Yoghurt</button></li>
                 <li><button class="button" name="60">The Ultimate House Special Chicken Burgers</button></li> 
                  <li><button class="button" name="61">Peri Peri Chiken Burger</button></li>
                   <li><button class="button" name="62">Turmeric Fish Burgers With Coriander Chutney</button></li>
                    <li><button class="button" name="63">Egg Burger</button></li>
                     <li><button class="button" name="64">Chicken Ceaser Burger</button></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Sandwich</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
                <li><button class="button" name="65">Tomato & Cheese Sandwich</button></li>
                 <li><button class="button" name="66">Plain Sandwich</button></li>
                  <li><button class="button" name="67">Coleslaw Sandwich</button></li>
                   <li><button class="button" name="68">Veg Overload Sandwich</button></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="69">Egg Sandwich</button></li>
                 <li><button class="button" name="70">Chicken Sandwich</button></li>
                  <li><button class="button" name="71">Chicken Club Sandwich</button></li>
            </ul>
         </li>
      </ul>
   </li>

   <li class='active has-sub'><a href='#'><span>Omelette</span></a>
            <ul>
               <li><button class="button" name="72">Plain Omelette</button></li>
                <li><button class="button" name="73">Masala Omelette</button></li>
                 
            </ul>
         </li>
         
   <li class='active has-sub'><a href='#'><span>Pizza</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
                <li><button class="button" name="74">Classic Margherita Pizza</button></li>
                 <li><button class="button" name="75">Fiamma Pizza</button></li>
                  <li><button class="button" name="76">Pepe Pizza</button></li>
                   <li><button class="button" name="77">Fungi Pizza</button></li>
                    <li><button class="button" name="78">Spinach Corn Pizza</button></li>
                     <li><button class="button" name="79">Caprese Pizza</button></li>
                      <li><button class="button" name="80">Midi Pizza</button></li>
                      <li><button class="button" name="81">House of Special-GO ITALIA Pizza</button></li>

            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="82">Americana Pizza</button></li>
                 <li><button class="button" name="83">Mangattan Spicy Chicken Pizza</button></li>
                  <li><button class="button" name="84">Deep Pan Pesce Pizza</button></li>
                   <li><button class="button" name="85">Four Seasons Pizza</button></li>
                    <li><button class="button" name="86">Pepperoni Pizza</button></li>
                     <li><button class="button" name="87">Prawn Pizza</button></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Pasta</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="88">Aglio Olio e Peperoncino Pasta</button></li>
                <li><button class="button" name="89">Penne ArrabbiataPasta With Pesto Sauce</button></li>
                 <li><button class="button" name="90"></button></li>
                  <li><button class="button" name="91">Farfalle Alfredo</button></li>
                   <li><button class="button" name="92">Verdure Pasta</button></li>
                    <li><button class="button" name="93">Lasagne Di Mamma Veg</button></li>
                     <li><button class="button" name="94">Fungi Pasta</button></li>
                      <li><button class="button" name="95">Salutare Pasta</button></li>
                      <li><button class="button" name="96">Cannelloni Rosa Pasta</button></li>

            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
               <li><button class="button" name="97">Pollo Funghi Pasta</button></li>
                <li><button class="button" name="98">Polpette</button></li>
                 <li><button class="button" name="99">Spaghetti With Meatballs</button></li>
                  <li><button class="button" name="100">Chicken Bolognese</button></li>
                   <li><button class="button" name="101">Lasagne Di Mamma Chicken</button></li>
                    <li><button class="button" name="102">Cannelloni Rosa Pasta</button></li>
                     <li><button class="button" name="103>Chicken Carbonara</button></li>
                     <li><button class="button" name="104">Cajun Grill Fish With Pasta</button></li>
                     <li><button class="button" name="105">Gambose Pasta</button></li>

            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Main Course</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="106">Exotic Vegetables & Herb Risotto</button></li>
                <li><button class="button" name="107">Ravioli</button></li>
                 <li><button class="button" name="108">Ravioli AL Formaggio</button></li>
                  <li><button class="button" name="109">Veg Lasagna</button></li>
            </ul>
         </li>

         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="110">Tray-baked Chicken With Toamatoes And Olives</button></li>
                 <li><button class="button" name="111">Lemon Chicken With Honey & Rosemary</button></li>
                  <li><button class="button" name="112">Chicken Breasts In Creamy Sage & Lime Sauce</button></li>

                   <li><button class="button" name="113">Aromatic Chicken Stew With Red Wine, Cloves & Beans</button></li>
                    <li><button class="button" name="114">Fillet Of Fish Wih Spicy Red Pesto</button></li>
                    <li><button class="button" name="115">Pan-fried Fish With pepperica Mash & Basil Sauce</button></li>
                    <li><button class="button" name="116">Spicey House Special Herb Crush Bake Fish</button></li>
                    <li><button class="button" name="117">Gamberi Raviloi</button></li>
                    <li><button class="button" name="118">Pollo Ravioli</button></li>
                    <li><button class="button" name="119">Tradtional Italian Rice With Chicken</button></li>
                    <li><button class="button" name="120">Traditonal Italian Rice With Prawns</button></li>
                    <li><button class="button" name="121">Chicken Lasagna</button></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Rice Bowl</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="122">Erba Piccante Riso</button></li>
                <li><button class="button" name="123">Piccante Vegetali Riso</button></li>               
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="124">Aglio Riso</button></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Sizzlers</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="125">Paneer Sizzler With Garlic Sauce</button></li>


               
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="126">Chicken Sizzler With Mushrooms Sauce</button></li>
                 <li><button class="button" name="127">Chicken Sizzler With Garlic Sauce</button></li>
            </ul>
         </li>
      </ul>
   </li>

   <li class='active has-sub'><a href='#'><span>Panine</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Vegetarian</span></a>
            <ul>
               <li><button class="button" name="128">Kidz Grilled Cheese Panine</button></li>
                <li><button class="button" name="129">Grilled Jumbo Cheese Panine</button></li>
               
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Non Vegetarian</span></a>
            <ul>
                <li><button class="button" name="130">Grilled Chicken Panine</button></li>
                 <li><button class="button" name="131">Classic Italian Panine</button></li>
                  <li><button class="button" name="132">Go Italia Panine</button></li>

                   <li><button class="button" name="133">Panine</button></li>
                    <li><button class="button" name="134">Grilled Chicken Panine</button></li>
                    <li><button class="button" name="135">Spicy Prawns Panine</button></li>
            </ul>
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Fresh Juices</span></a>
        
            <ul>
               <li><button class="button" name="136">Lemon</button></li>
                <li><button class="button" name="137">Pineapple</button></li>
                 <li><button class="button" name="138">Watermelon</button></li>
                  <li><button class="button" name="139">Papaya</button></li>
                   <li><button class="button" name="140">Banana</button></li>
                   <li><button class="button" name="141">Ginger Lime</button></li>
                   <li><button class="button" name="142">Muskmelon</button></li>
                   <li><button class="button" name="143">Mosambi</button></li>
                   <li><button class="button" name="144">Orange</button></li>
                   <li><button class="button" name="145">Ice Tea</button></li>
                   <li><button class="button" name="146">Virgin Mojito</button></li>
                   <li><button class="button" name="147">Blue Curacao</button></li>
                   <li><button class="button" name="148">Green apple soda</button></li>
                   <li><button class="button" name="149">Lime Soda</button></li>
            </ul>
         </li>

    <li class='active has-sub'><a href='#'><span>Chocolate</span></a>
        
            <ul>
               <li><button class="button" name="150">Ferrero Rocher</button></li>
                <li><button class="button" name="151">Belgian Chocolate</button></li>
                 <li><button class="button" name="152">Kit Kat</button></li>
                  <li><button class="button" name="153">Oreo</button></li>
               
            </ul>
         </li>
          <li class='active has-sub'><a href='#'><span>Lassi</span></a>
        
            <ul>
               <li><button class="button" name="154">Sweet Lassi</button></li>
                <li><button class="button" name="155">Banana Lassi</button></li>
                 <li><button class="button" name="156">Mango Lassi</button></li>
                  <li><button class="button" name="157">Strawberry Lassi</button></li>
                    <li><button class="button" name="158">Kesar Lassi</button></li>
                   <li><button class="button" name="159">Dryfruit Lassi</button></li>
               
               
            </ul>
         </li>
     <li class='active has-sub'><a href='#'><span>Cold Coffee</span></a>
        
            <ul>
               <li><button class="button" name="160">Hard rock</button></li>
                <li><button class="button" name="161">Chocolate</button></li>
                 <li><button class="button" name="162">Strawberry</button></li>
            </ul>
         </li>

          <li class='active has-sub'><a href='#'><span>Ice Creams</span></a>
        
            <ul>
               <li><button class="button" name="163">Fruit salad with ice cream</button></li>
                <li><button class="button" name="164">Gud Bud</button></li>
                 <li><button class="button" name="165">Crunchy butter scotch</button></li>
                  <li><button class="button" name="166">Brownie with ice cream</button></li>
                   <li><button class="button" name="167">Butterscotch Fudge</button></li>
                   <li><button class="button" name="168">Dry Fruit Sunday</button></li>
                   <li><button class="button" name="169">Chocolate Fudge</button></li>
               
               
            </ul>
         </li>
          <li class='active has-sub'><a href='#'><span>Milk Shakes</span></a>
        
            <ul>
               <li><button class="button" name="170">Apple Shake</button></li>
                <li><button class="button" name="171">Banana Shake</button></li>
                 <li><button class="button" name="172">Papaya shake</button></li>
                  <li><button class="button" name="173">Pomegranate Shake</button></li>
                   <li><button class="button" name="174">Vanilla Ice Cream</button></li>
                   <li><button class="button" name="175">Chocolate Shake</button></li>
                   <li><button class="button" name="176">Strawberry Shake</button></li>
                   <li><button class="button" name="177">Mango Strawberry Shake</button></li>
                   <li><button class="button" name="178">Mango Shake</button></li>
                   <li><button class="button" name="179">Mixed Shake</button></li>
                   <li><button class="button" name="180">Kiwi Shake</button></li>
                   <li><button class="button" name="181">Butter Shake</button></li>
                   <li><button class="button" name="182">Muskmelon Shake</button></li>

               
               
            </ul>
         </li>
          <li class='active has-sub'><a href='#'><span>Desserts</span></a>
        
            <ul>
               <li><button class="button" name="183">Warm Chocolate Cake</button></li>
                <li><button class="button" name="184">Cheese Cake</button></li>
                 <li><button class="button" name="185">Tiramisu</button></li>
                  <li><button class="button" name="186">Gelato Italiano</button></li>
                   <li><button class="button" name="187">Espresso Panna Cotta</button></li>     
            </ul>
         </li>
    

      </li>
      </ul>
      </div>
  </form>
  <?php
if (mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if (!$result = mysqli_query($connection,"SELECT * FROM porder"))
{
    die("Error: " . mysqli_error($connection));
}
?>
<div class="adjust3">
<table border='1'>
<tr>
<th>name</th>
<th>Quantity</th>
<th></th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><a href="dec.php?id=<?php echo $row['id'];?>"><button>-</button></a>
<input type="text" style="width: 20px;" name="quan" value="<?php echo $row['quan'];?>">
<a href="inc.php?id=<?php echo $row['id'];?>"><button>+</button></a></td>
<td><a href="deleteitem.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true" style="color: #232323"></i>
</a></td>
</tr>
<?php
}
mysqli_close($connection);
?>

</table>
</div>


</body>
<html>
