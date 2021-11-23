<!DOCTYPE html>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>zakelijk(orderoverzicht)</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <header>
    <nav>
     
    </nav>
  </header>
 
 






<div class="container1">
    <h1>appel Bandit</h1>
  <img src="https://media.foox.nl/FT/AFB/high/35033.jpg" id="besimg">

  <form method="GET"><p id="pp"><input type="number" name="aantal" placeholder="aantal" min="1" max="99999999" required></P>
  <button type="submit" class="sub" value="Aantal Bevestigen">Aantal Bevestigen</button>
      
</div>
<div class="table">
    <table>
    <tr>
    <th>Omschrijving</th>
    <th>Aantal</th>
    <th>Prijs</th>
    <th>BTW</th>
    <th>Bezorgkosten</th>
    <th>Totaalbedrag</th>
  </tr>
    
      <td>Apple Bandit</td>
    <td><?php $aantal = $_GET['aantal'] ?? '0'; echo $aantal; ?></td>
    <td>€1.75</td>
    <td><?php $btw=$aantal * '1.75'* '0.21'; echo round($btw,2); ?></td>
    <td><?php $subtotaal=$aantal * '1.75'; 
    if($subtotaal<25){
      $bk='7.5'; echo '€'.$bk;
    }elseif($subtotaal>25){
      $bk='5'; echo '€'.$bk;
    }?></td>
    <td><?php $totaal=$subtotaal+$bk+$btw; echo '€'.round($totaal, 2); ?></td>
  </tr>
      <br>
     
    </table>
    </div>
    <br>
    <br>
    <br>
    
     <div class="container2">
            <h1 id="pp">Bezorgkosten</h1>
            <p id="pp">Onder de €25 = €7.50</p>
            <p id="pp">Vanaf €25 = €5.00</p>
            
 <button class="open-cheese" onclick="openForm()">account</button>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <div class="cheese">
            <div>
         <div class="table">
           <tr>
               <div><th>gegevens</th></div>
               <br>
               <th class="empty"></th>
               </tr>
               <tr>
               <td 
               <form> naam:<input type="text" placeholder="vul hier uw naam in" name="Course" size="10"/>
               
                <class="edit-buttons"><button class="edit">Edit</button><button class="delete">Delete</button></>
              </tr><br><tr><td
      
               <form> adres:<input type="text" name="adres" id="adres" placeholder="adres" /> 
          
           
                <class="edit-buttons"><button class="edit">Edit</button><button class="delete">Delete</button></>
              </tr><br><tr><td
      
               <form> adres:<input type="text" name="adres" id="adres" placeholder="adres" /> 
          
               
               
            
           <class="edit-buttons"><button class="edit">Edit</button><button class="delete">Delete</button></>
               </tr><br><tr><td
       
                <form> adres:<input type="text" name="adres" id="adres" placeholder="adres" /> 
           
            
           <class="edit-buttons"><button class="edit">Edit</button><button class="delete">Delete</button></class=>
               </tr><br><tr><td
       
               <form> factuur adres:<input type="text" name="factuur adres" id="factuur adres" placeholder="factuur adres" />
               
               
           <class="edit-buttons"><button class="edit">Edit</button><button class="delete">Delete</button></>
               </tr><br><tr><td
       
               <form> poscode:<input type="text" name="poscode" id="postcode" maxlength="7" placeholder="postcode"/>
               
             
           <class="edit-buttons"><button class="edit">Edit</button><button class="delete">Delete</button></class=>
               </tr>
               <br>
               <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
               

</div>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=2">
<style>
<body> {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.open-cheese {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;

}


.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-container {
  max-width: fit-content;
  height: px;
  padding: 10px;
  background-color: white;
}


.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}




.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.form-container .cancel {
  background-color: red;
  width: 100px;
}
</style>
</head>
<body>


<

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

   


