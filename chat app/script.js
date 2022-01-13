fetch("https://car-data.p.rapidapi.com/cars/types", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "car-data.p.rapidapi.com",
		"x-rapidapi-key": "68aecdd804msh65947fb4402f0bep12678fjsn80b1820fc9d4"
	}
})
.then(response => {
	response.json;
})
.catch(err => {
	console.error(err);
});