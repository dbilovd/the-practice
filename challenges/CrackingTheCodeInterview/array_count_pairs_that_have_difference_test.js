const findPairsWithDifference = require('./array_count_pairs_that_have_difference.js')


function arrayEquals(a, b) {
  return Array.isArray(a) && Array.isArray(b) &&
    a.length === b.length &&
    a.every((val, index) => {
      return Array.isArray(val) ? arrayEquals(val, b[index]) : val == b[index]
    })
}

let testOneArr = [1, 2, 4, 8, 6, 3, 9]
let testOneDiff = 3
let testOneResult = findPairsWithDifference(testOneArr, testOneDiff)
console.log(testOneResult.length == 3 ? 'Passed!' : 'Failed')
console.log(
  arrayEquals(testOneResult, [[1,4],[6,9], [3,6]]) ? 'Passed!' : 'Failed'
)

