function mettreLeBoxon ($V){
	// remplace tout les contenus de DIV dont la classe CSS est "genererBoxon" par le mots boxon avec une orthographe aleatoire
	var cibles = document.getElementsByClassName('genererBoxon');
	var V = $V;
	console.log(V);
	function randomIndex ($Array){
		var result = 0;
		if($Array.length){
			result = Math.round(Math.random()*$Array.length-1);
			if(result<0)result=0;
			return result;
		}
		return false;
	}
	function orthographeAleatoire(){
		var resultat = "boxon";
		//si vous rajoutez des nouveaux caracteres speciaux n'oubliez pas de les echapper en mettant '\' devant
		function randomO (){
			var O = ["o","O","0","\(\)","\{\}","\[\]","superO","\¤","\#","\«\»","\@","°","\*","\?","\©","\ø","\?","\?","\?","\?","?","?"];
			var pickedO = O[randomIndex(O)];
			var result ="";
			var randomNumber = Math.round(Math.random()*1)+1;
			if(pickedO=="superO"){
				var firstHalf ="";
				var secondHalf ="";
				for (var s =0;s<randomNumber;s++){
					firstHalf+="&lt";
					secondHalf+="&gt";
				}
				result = firstHalf+secondHalf;
			}else{
				for (var n =0;n<randomNumber;n++){
					result=pickedO;
				}							
			}
			return result;
		}
		function randomB (){
			var B = ["b","B"];
			return B[randomIndex(B)];
		}
		function randomX(){
			
			var X = ["x","X","\*","superX"];
			var pickedX = X[randomIndex(X)];
			var result ="x";
			var randomNumber = Math.round(Math.random()*1)+1;
			if(pickedX=="superX"){
				var firstHalf ="";
				var secondHalf ="";
				for (var s =0;s<randomNumber;s++){
					firstHalf+="&gt";
					secondHalf+="&lt";
				}
				result = firstHalf+secondHalf;
				
			}else{
				for (var n =0;n<randomNumber;n++){
					result=pickedX;
				}							
			}
			return result;
		}
		function randomN (){
			var N = ["n","N"];
			return N[randomIndex(N)];
		}
		var fixedRandomO = randomO();
		//Endroit ou declarer les differentes versions
		// >> 'nom de la version' : string ,     (le dernier element ne doit pas etre suivis d'une virgule)
		var versions = {
			'totalRandom1' : randomB()+fixedRandomO+randomX()+fixedRandomO+randomN(),
			'BNfixes' : "B"+fixedRandomO+"X"+fixedRandomO+"N",
			'nouvelleVersion' : "b"+"o"+"x"+"o"+"n"
		}	
		var defaultVersion =  versions['BNfixes'];	
		if(V!=""){
			if(versions[V]){
				resultat = versions[V];
			}else{
				resultat = defaultVersion;	
			}
		}else{
			resultat = defaultVersion;	
		}
		return resultat;
	}
	for (var i =0;i<cibles.length;i++){
		cibles[i].innerHTML  = orthographeAleatoire();
	}	
}
