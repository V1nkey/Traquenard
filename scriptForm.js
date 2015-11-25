function surligne(champ)
{
	champ.form-control.border = "#f90e0e";
}

function verifNomPrenom(champ)
{
	var regex = /^[A-Za-z-]+$/;
	if(!regex.test(champ.value))
	{
		surligne(champ);
		return false;
	}
	else
		return true;
}

function verifPseudo(pseudo)
{
	var regex = /^[A-Za-z0-9._-]+$/;
	if(!regex.test(pseudo.value))
	{
		surligne(pseudo);
		return false;
	}
	else
		return true;
}

function verifMail(mail)
{
	var regex = /^[A-Za-z0-9._-]+@[A-Za-z0-9_-]+\.[A-Za-z]{2,5}$/;
	if(!regex.test(mail.value))
	{
		surligne(mail);
		return false;
	}
	else
		return true;
}

function verifMdp(mdp, confmdp)
{
	var regex = /^[A-Za-z0-9/_-]{6,}$/;
	if ((mdp.value != confmdp.value) || (!regex.test(mdp.value)))
	{
		surligne(mdp);
		surligne(confmdp);
		return false;
	}
	else 
		return true;
}

function verifCode(codeparrain)
{
	var regex = /^[0-9]{6}$/;
	if (!regex.test(codeparrain.value))
	{
		surligne(codeparrain);
		return false;
	}
	else
		return true;
}

function verifForm(f)
{
	var nomOk = verifNomPrenom(f.nom);
	var prenomOk = verifNomPrenom(f.prenom);
	var pseudoOk = verifPseudo(f.pseudo);
	var mailOk = verifMail(f.mail);
	var mdpOk = verifMdp(f.mdp, f.confmdp);
	var codeparrainOk = verifCode(f.codeparrain);
	
	if (nomOk && prenomOk && pseudoOk && mailOk && mdpOk && codeparrainOk)
		return true;
	else
	{
		alert("Veuillez remplir correctement tous les champs !");
		return false;
	}
}