/**
 * 
 */

 

function higherOrderProducer(n) {return function(x) {return x*n}}
var doubler = higherOrderProducer(2);
console.log(doubler(10));
function higerOrderConsumer(f) {return function(x) {var args=[]; args.push(x);return f.apply(null,args);}};

console.log(higerOrderConsumer(doubler)(10));

var myarr = [];
myarr.push("asdf"); myarr.push("qwerty"); myarr.push(1); myarr.push(2);
console.log(myarr); myarr.pop();
console.log(myarr);

var description = { name : "asdf" , 2 : 2, "full name" : function() {return this.name+"qwerty";}};

console.log(JSON.stringify(description));

for(var key in description)console.log("key is :: " + key + ":: value is :: " + description[key]);

var Button = function(x) {console.log("button with content " + x);}
console.log(Object.getPrototypeOf(Button));


var protoRabbit = {
		speak : function(line) {
				console.log (" The " + this . type + " rabbit says '" +line + " '") ;
				}
			};
			
/*
var person = { firstName: "Paul", lastName: "Irish" }  
THIS IS EQUIVALENT TO : 
var person = Object.create(Object.prototype);  
person.firstName = "Paul";  
person.lastName  = "Irish";

{} addsthe protype to Object.prototype;  unless used with Object.create(null) all objects will be created with Object.prototype as their prototype  
*/
var killerRabbit = Object.create(protoRabbit) ; //creates object with passed prototype
console.log("killer rabbit don't have toString :::", "toString" in killerRabbit);
for(var key in killerRabbit)console.log(key);
killerRabbit.type = " killer ";
killerRabbit.speak (" SKREEEE !");
var protoFromKiller = Object.getPrototypeOf(killerRabbit);

protoFromKiller.eat = function(x) { console.log(this.type + "is eating " + x);};
protoFromKiller.type = null;


var herbivoreRabbit = Object.create(protoRabbit);
herbivoreRabbit.eat.bind(herbivoreRabbit);
console.log(typeof Object.getPrototypeOf(herbivoreRabbit).type);
herbivoreRabbit.type = "only greens eating Rabbit!";
herbivoreRabbit.eat("Carrots");


function Rabbit(v) {this.type = v;}
Rabbit.prototype.toString = function(){return this.type.toString();}
var rabbitFromMachine = new Rabbit('omnivore');
console.log(rabbitFromMachine.toString());


var map = {}
function store(key,value) {map[key]=value;}
Object.prototype.nonsense = "nonsensicalstring";
store("asdf",33);store("qwerty",232);
for(var key in map)if ( map.hasOwnProperty(key)) {console.log(key + " value " + map[key]);}

var map2 = {};
for(var k in map2)console.log(k);
console.log("toString" in map2);


function scopeT1() {
	console.log(this);
	setTimeout(function () {
    	console.log("PRINTING INNNER",this); // <nav> element
  			}, 1000);
	
	}
	//scopt2();
scopeT1();
