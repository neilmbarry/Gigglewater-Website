document.querySelector('.order-btn-gigglestar').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in the Gigglestar!\n";
    document.getElementById("output2").value += "I am interested in the Gigglestar!\n";
});
document.querySelector('.order-btn-violet').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Violet Delights, Violet Ends!\n";
    document.getElementById("output2").value += "I am interested in Violet Delights, Violet Ends!\n";
});
document.querySelector('.order-btn-kentucky').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Kentucky Bumpkin!\n";
    document.getElementById("output2").value += "I am interested in Kentucky Bumpkin!\n";
});
document.querySelector('.order-btn-cran').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Cran Me A River!\n";
    document.getElementById("output2").value += "I am interested in Cran Me A River!\n";
});
document.querySelector('.order-btn-leaf').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in The Last Leaf!\n";
    document.getElementById("output2").value += "I am interested in The Last Leaf!\n";
});
document.querySelector('.order-btn-2020').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in 2020 Sabbatical!\n";
    document.getElementById("output2").value += "I am interested in 2020 Sabbatical!\n";
});
document.querySelector('.order-btn-casper').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Casper And The Harvest Moon!\n";
    document.getElementById("output2").value += "I am interested in Casper And The Harvest Moon!\n";
});
document.querySelector('.order-btn-pastor').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Pastor Jack!\n";
    document.getElementById("output2").value += "I am interested in Pastor Jack!\n";
});
document.querySelector('.order-btn-cherry').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Cherry Pandemic!\n";
    document.getElementById("output2").value += "I am interested in Cherry Pandemic!\n";
});
document.querySelector('.order-btn-stout').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Mrs. Stoutfire!\n";
    document.getElementById("output2").value += "I am interested in Mrs. Stoutfire!\n";
});
document.querySelector('.order-btn-coffee').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Coffee!\n";
    document.getElementById("output2").value += "I am interested in Coffee!\n";
});


document.querySelector('.order-btn-gigglestar2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in the Gigglestar!\n";
    document.getElementById("output2").value += "I am interested in the Gigglestar!\n";
});
document.querySelector('.order-btn-violet2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Violet Delights, Violet Ends!\n";
    document.getElementById("output2").value += "I am interested in Violet Delights, Violet Ends!\n";
});
document.querySelector('.order-btn-kentucky2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Kentucky Bumpkin!\n";
    document.getElementById("output2").value += "I am interested in Kentucky Bumpkin!\n";
});
document.querySelector('.order-btn-cran2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Cran Me A River!\n";
    document.getElementById("output2").value += "I am interested in Cran Me A River!\n";
});
document.querySelector('.order-btn-leaf2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in The Last Leaf!\n";
    document.getElementById("output2").value += "I am interested in The Last Leaf!\n";
});
document.querySelector('.order-btn-20202').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in 2020 Sabbatical!\n";
    document.getElementById("output2").value += "I am interested in 2020 Sabbatical!\n";
});
document.querySelector('.order-btn-casper2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Casper And The Harvest Moon!\n";
    document.getElementById("output2").value += "I am interested in Casper And The Harvest Moon!\n";
});
document.querySelector('.order-btn-pastor2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Pastor Jack!\n";
    document.getElementById("output2").value += "I am interested in Pastor Jack!\n";
});
document.querySelector('.order-btn-cherry2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Cherry Pandemic!\n";
    document.getElementById("output2").value += "I am interested in Cherry Pandemic!\n";
});
document.querySelector('.order-btn-stout2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Mrs. Stoutfire!\n";
    document.getElementById("output2").value += "I am interested in Mrs. Stoutfire!\n";
});
document.querySelector('.order-btn-coffee2').addEventListener('click',function(){
    document.getElementById("output").value += "I am interested in Coffee!\n";
    document.getElementById("output2").value += "I am interested in Coffee!\n";
});

const reset = function(){
    document.querySelector('.submit').value = "Send it!";
    document.querySelector('.submit2').value = "Send it!";
    document.querySelector('.submit').classList.remove('sending');
    document.querySelector('.submit2').classList.remove('sending');
}

document.querySelector('.submit').addEventListener('click',function(){
    document.querySelector('.submit').value = "Sending...";
    document.querySelector('.submit').classList.add('sending');
    setTimeout(reset, 5000);
    
});

document.querySelector('.submit2').addEventListener('click',function(){
    document.querySelector('.submit2').value = "Sending...";
    document.querySelector('.submit2').classList.add('sending');
    setTimeout(reset, 5000);
    
});

const isNumericInput = (event) => {
	const key = event.keyCode;
	return ((key >= 48 && key <= 57) || // Allow number line
		(key >= 96 && key <= 105) // Allow number pad
	);
};

const isModifierKey = (event) => {
	const key = event.keyCode;
	return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
		(key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
		(key > 36 && key < 41) || // Allow left, up, right, down
		(
			// Allow Ctrl/Command + A,C,V,X,Z
			(event.ctrlKey === true || event.metaKey === true) &&
			(key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
		)
};

const enforceFormat = (event) => {
	// Input must be of a valid number format or a modifier key, and not longer than ten digits
	if(!isNumericInput(event) && !isModifierKey(event)){
		event.preventDefault();
	}
};

//------Phone Number Formater-----//

const formatToPhone = (event) => {
	if(isModifierKey(event)) {return;}

	// I am lazy and don't like to type things more than once
	const target = event.target;
	const input = event.target.value.replace(/\D/g,'').substring(0,10); // First ten digits of input only
	const zip = input.substring(0,3);
	const middle = input.substring(3,6);
	const last = input.substring(6,10);

	if(input.length > 6){target.value = `(${zip}) ${middle} - ${last}`;}
	else if(input.length > 3){target.value = `(${zip}) ${middle}`;}
	else if(input.length > 0){target.value = `(${zip}`;}
};

const inputElement = document.getElementById('phone');
const inputElement2 = document.getElementById('phone2');
inputElement.addEventListener('keydown',enforceFormat);
inputElement.addEventListener('keyup',formatToPhone);
inputElement2.addEventListener('keydown',enforceFormat);
inputElement2.addEventListener('keyup',formatToPhone);



//------SMOOTH SCROLLING--------//

//-------Form Switcher-------//
/*
const links = document.querySelectorAll(".form-switch");
 
for (const link of links) {
  link.addEventListener("click", function(){
    document.querySelector('.form-pickup').classList.toggle('active');
    document.querySelector('.form-delivery').classList.toggle('active');
    document.querySelector('.order-form-delivery').classList.toggle('hidden');
    document.querySelector('.order-form-pickup').classList.toggle('hidden');
})*/
 
const pickupLinks = document.querySelectorAll(".order-pickup");
const deliveryLinks = document.querySelectorAll(".order-delivery");

for (const link of pickupLinks) {
  link.addEventListener("click", function(){
    document.querySelector('.form-delivery').classList.remove('active');
    document.querySelector('.form-pickup').classList.remove('active');
    document.querySelector('.form-pickup').classList.add('active');
    document.querySelector('.order-form-delivery').classList.remove('hidden');
    document.querySelector('.order-form-delivery').classList.add('hidden');
    document.querySelector('.order-form-pickup').classList.remove('hidden');
})}
/*
for (const link of deliveryLinks) {
  link.addEventListener("click", function(){
    document.querySelector('.form-pickup').classList.remove('active');
    document.querySelector('.form-delivery').classList.remove('active');
    document.querySelector('.form-delivery').classList.add('active');
    document.querySelector('.order-form-pickup').classList.remove('hidden');
    document.querySelector('.order-form-pickup').classList.add('hidden');
    document.querySelector('.order-form-delivery').classList.remove('hidden');
})}
*/