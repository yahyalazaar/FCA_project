function gener_pwd() {
	var ok = 'azertyupqsdfghjkmwxcvbn23456789AZERTYUPQSDFGHJKMWXCVBN';
	var pass = '';
	longueur = 8;
	for (i = 0; i < longueur; i++) {
		var wpos = Math.round(Math.random() * ok.length);
		pass += ok.substring(wpos, wpos + 1);
	}
	return pass;
}

$("#gener_pwd").click(function() {
	document.getElementById("mot_de_passe").value = gener_pwd();
});
