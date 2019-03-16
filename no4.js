console.log(HitungKembalian(15500,50000));

function HitungKembalian(totalBelanja,jmlUang) {
	var x = [];
	var inc = 0;
	var bilangan = [500, 1000, 2000, 5000, 10000, 20000, 50000];
	var jmlKembalian = parseFloat(jmlUang-totalBelanja);

	for (var j = bilangan.length; j > 0; j--) {
		if (jmlKembalian >= bilangan[j]) {
			var quotient = Math.floor(jmlKembalian/bilangan[j]);
			var remainder = jmlKembalian % bilangan[j];
			x.push(bilangan[j]);
		}
	}
	return x;
}