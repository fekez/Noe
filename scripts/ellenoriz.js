window.onload = function() {
	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = false;
	}
};

function ellenoriz() {
	var rendben = true;
	var fokusz = null;

	var szoveg = document.getElementById("szoveg");
	if (szoveg) {
		if (szoveg.value.length==0 || szoveg.value.length>100) {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (!checkPattern.test(email.value) || email.value.length>50) {
			rendben = false;
			email.style.background = '#f99';
			fokusz = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	var nev = document.getElementById("nev");
	if (nev) {
		if (nev.value.length<5 || nev.value.length > 45) {
			rendben = false;
			nev.style.background = '#f99';
			fokusz = nev;
		} else {
			nev.style.background = '#9f9';
		}
	}

	if (fokusz) {
		fokusz.focus();
	}
    
	return rendben;
}
