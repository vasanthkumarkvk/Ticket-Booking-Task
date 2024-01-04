   // Create a new Date object
   let currentDate = new Date();

   // Get the current date, month, year, and day
   let day = currentDate.getDate();
   let month = currentDate.getMonth() + 1; // Adding 1 because months are zero-indexed
   let year = currentDate.getFullYear();
   
   
   // Format the date as  ( MM/DD/YYYY)
   let formattedDate = `${month}/${day}/${year}`;
   
   document.getElementById("date").innerHTML= ` Date:<br>${formattedDate}`
   // Display the current date
//    console.log("Current date is: ", formattedDate);





 


//    function call(){
//        return(
//            alert("Your login successfully")
//        );
//    }













function calculateDiscount() {
   const amountInput = Number(document.getElementById("number").value);

   const discountAmount = (10* amountInput) / 100;

   const discountElement = document.getElementById("amount").textContent = discountAmount.toFixed(2) + " Rupees";
 }









