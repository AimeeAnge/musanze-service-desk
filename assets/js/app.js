//TUMUKUNDE ISIMBI fabiola   25/30779 

function calculateTotal() {
    let quantity = document.getElementById("quantity").value;
    let price = document.getElementById("price").value;

    if(quantity && price){
        document.getElementById("total").value = quantity * price;
    }
}