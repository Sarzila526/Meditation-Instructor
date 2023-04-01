function validateAndSubmit(pForm) {

		let err1 = document.getElementById("err1");
		let err2 = document.getElementById("err2");
		let err3 = document.getElementById("err3");
		let err4 = document.getElementById("err4");
		
	
		err1.innerHTML = "";
		err2.innerHTML = "";
		err3.innerHTML = "";
		err4.innerHTML = "";
	
		const card_number = pForm.card_number.value;
		const card_name = pForm.card_name.value;
		const expiry = pForm.expiry.value;
		const cvv = pForm.cvv.value;
		const username = pForm.username.value;
	
		let flag = true;
	
		if (card_number === "") {
			err1.innerHTML = "Card number cannot be empty";
			flag = false;
		}
		if (card_name === "") {
			err2.innerHTML = "Card name cannot be empty";
			flag = false;
		}
		if (expiry === "") {
			err3.innerHTML = "Expiry date cannot be empty";
			flag = false;
		}
		if (cvv === "") {
			err4.innerHTML = "CVV cannot be empty";
			flag = false;
		}
	
		if (flag) {

			let card_info = {
				"card_number": card_number,
				"card_name": card_name,
				"expiry": expiry,
				"cvv": cvv,
				"username": username
			}
			let json = JSON.stringify(card_info);
			let xhttp = new XMLHttpRequest();
			xhttp.onload = function() {
				document.getElementById("msg").innerHTML = this.responseText;
			}
			xhttp.open('GET', 'a.php?myjson='+json, true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			// xhttp.send("card_number=" + card_number + "&card_name=" + card_name + "&expiry=" + expiry + "&cvv=" + cvv + "&username=" + username);
			xhttp.send('data='+JSON.stringify(json));
	
			xhttp.onreadystatechange = function(){
	
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('msg').innerHTML = this.responseText;
					//let obj = JSON.parse(this.responseText);
					alert(this.responseText);
				}
			}
		}
	}
