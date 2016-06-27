/**
 * http://usejsdoc.org/
 */
function async(callback) {
	var p = $.Deferred();
	setTimeout(function() {
		callback("inside the calling back function of :  " + this);
		p.resolve('abcd',1234,{foo:"bar"});
		callback('promise is resolved!!!');
	}, 1000);
	return p.promise();
}

$.when(console.log).done(function(d1,d2,d2) {
	console.log(d1);
	console.log(d3);
	console.log(d2);
})


