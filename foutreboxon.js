function mettreLeBoxon (){
	// remplace tout les contenus de DIV dont la classe CSS est "genererBoxon" par le mots boxon avec une orthographe aleatoire
	var cibles = document.getElementsByClassName('genererBoxon');
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

		function randomO (){
			var O = ["o","O","0","\(\)","\{\}","\[\]","superO","\@"];
			var pickedO = O[randomIndex(O)];
			var result ="";
			var randomNumber = Math.round(Math.random()*2)+1;
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
			var randomNumber = Math.round(Math.random()*4)+1;
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
		var resultat = randomB()+fixedRandomO+randomX()+fixedRandomO+randomN();
		return resultat;
	}
	for (var i =0;i<cibles.length;i++){
		cibles[i].innerHTML  = orthographeAleatoire();
		console.log(cibles[i].innerHTML);
	}	
}
