console.log('Login JS Start Run.')
let username;
let password;
let resjson;
let loginButton = document.querySelector(".btn");
loginButton.onclick = function () {
	let form = document.querySelectorAll(".form-control");
	username = form[0].value;
	password = form[1].value;
    let res = fetch('http://127.0.0.1/reality/php/magane/index.php/api/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            username: username,
            password: password
        })
    }).then(function (response) {
        return response.json()
    }).then(function (json) {
        console.log('parsed json', json)
        resjson = json;
    }).catch(function (ex) {
        console.log('parsing failed', ex)
    });
	
}
console.log(resjson.JSON());
console.log(resjson);
