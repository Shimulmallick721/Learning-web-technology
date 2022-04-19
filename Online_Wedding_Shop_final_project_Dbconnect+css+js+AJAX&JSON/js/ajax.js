function ajax(){

	let student = {
		id: document.getElementById('id').innerHTML,
		username: document.getElementById('username').value,
		email: document.getElementById('email').value,
		ok: false
	};

	let json = JSON.stringify(student);

	let http = new XMLHttpRequest();
	http.open('GET', '../Controller/usereditvalidate.php?myjson='+json, true);
	http.send();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 250 ){
			
			let obj = JSON.parse(this.responseText);
			console.log(obj);

			document.getElementById('username').value = obj.username;
			document.getElementById('email').value = obj.email;
			if(obj.ok == true) {
				alert("Success");
				location.href = "../Controller/update.php";
			}
		}
	}
}	