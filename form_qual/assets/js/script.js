function delete1() {
    document.getElementById("first").classList.add('delete');
    document.getElementById("second").classList.remove('delete');
    document.getElementById("third").classList.add('delete');
}

function delete2() {
    document.getElementById("second").classList.add('delete');
    document.getElementById("first").classList.add('delete');
    document.getElementById("third").classList.remove('delete');
}

StarOutUrl=		'assets/img/StarOut.svg';		//image par défaut
StarOverUrl=	'assets/img/StarOver.svg';		//image d'une étoile sélectionnée
StarBaseId=		'Star';			//id de base des étoiles
NbStar=			5;			//nombre d'étoiles

LgtStarBaseId=StarBaseId.lastIndexOf('');

function NotationSystem() {
	for (i=1;i<NbStar+1;i++) {
		var img			=document.getElementById('Star'+i);

		img.alt			='Donner la note de '+i;
		//Texte au survol
		
		img.src			=StarOutUrl;

        if(!img.onclick){
            img.onmouseover	=function() {StarOver(this.id);};
		    img.onmouseout	=function () {StarOut(this.id);};
        }else if(img.onclick){
                var nb_final = Name2Nb(this.id);        
                StarOver(this.id);
				
        }

	}

    
}

function StarOver(Star) {
	StarNb=Name2Nb(Star);
	for (i=1;i<(StarNb*1)+1;i++) {
		document.getElementById('Star'+i).src=StarOverUrl;
	}
}

function StarOut(Star) {
	StarNb=Name2Nb(Star);
	for (i=1;i<(StarNb*1)+1;i++) {
		document.getElementById('Star'+i).src=StarOutUrl;
	}
}

function Name2Nb(Star) {
	//Le survol d'une étoile ne nous permet pas de connaître directement son numéro
	//Cette fonction extrait donc ce numéro à partir de l'Id
	StarNb=Star.slice(LgtStarBaseId);
	return(StarNb);
} 




