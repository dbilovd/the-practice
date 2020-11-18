const axios = require('axios')

function fetchCountriesBatch (currentPage) {
  return new Promise(async (resolve, reject ) => {
    let endpoint = `https://jsonmock.hackerrank.com/api/countries?page=${currentPage}`
    let result = await axios.get(endpoint)

    let countriesInBatch = result.data.data

    // let nextBatch = (result.total_pages >= currentPage) ? await fetchCountriesBatch(currentPage + 1) : []
    let nextBatch = []
    
    // countriesInBatch = countriesInBatch.concat(nextBatch)
    
    resolve(countriesInBatch)
  })
}

async function getCountries() {
  fetchCountriesBatch(1)
    .then((countries) => {
      console.log("CM: ")
      console.log(countries.map(cntr => console.log(cntr.name)));
    })
}

async function getCountryName(code) {
  // write your code here
  // API endpoint: https://jsonmock.hackerrank.com/api/countries?page=<PAGE_NUMBER>

  // const request = require('request')

  // Fetch and store all available country data
  // - Create store (object with country code as key or array of objects)
  
  // - Set request meta object { currentPage: 1, totalPages: 1 }
  let currentPage = 1
  let totalPages = 1
  
  console.log(countries)

  // 
  // Search in the data store for the country code
  // - If there is an existing country wth the code provided, Then I can read countries[code]
  // Return the country found
  // - return countries[code]
  let country = countries.hasOwnProperty(code) ? countries[code] : false
  console.log(country)
  return country ? country.name : false
}


// let countryName = getCountryName('AF')
// console.log("CN: ", countryName)

getCountries()