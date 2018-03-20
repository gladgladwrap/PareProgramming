var laGataAlfreda = {
	thoughts: [
	 'Need to eat',
	 'Gotta take a shit',
	 'Scratch a human', 
	 'Scratch furniture', 
	 'Kill something', 
	 'Sleep', 
	 'Pee on Something', 
	 'Take a Shit on the carpet'
	],
	displayThoughts: function() {
		console.log('Alfredas thoughts: ', this.thoughts);
	},
	addThought: function(thought) {
		this.thoughts.push(thought);
		console.log('New thought added to Alfreda at position', this.thoughts.length-1,':', this.thoughts[(this.thoughts.length -1)]);
	},
	forget: function(index) {
		this.thoughts.splice(index, 1);
		console.log(this.thoughts);
	},
	dance: function() {
		document.getElementById("alfreda").src="Vector Graphics/ATT.svg";
	}

};



function play(){
    var audio = document.getElementById("audio");
    audio.play();

    const alfreda = document.querySelector('.alfreda')
	TweenMax.to(alfreda, 2, {x: 200 })
}
